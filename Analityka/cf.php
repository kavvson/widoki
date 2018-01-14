<?PHP
//error_reporting(0);
function pctDiff($x1, $x2, $justcalc = false)
{
    $diff = ($x2 - $x1) / $x1;

    if (!$justcalc) {
        if ($diff > 0) {
            return "<i class=\"icon icon-trending-up text-success s-4\"><span class='text-success'> " . abs(round($diff * 100, 2)) . '%</span></i>';
        } else {

            return "<i class=\"icon icon-trending-down text-danger s-4\"><span class='text-danger'> " . abs(round($diff * 100, 2)) . '%</span></i>';
        }
    } else {
        return $diff;
    }

}

function pp($val)
{
    if (!is_numeric($val)) {
        return $val;
    } else {
        return number_format($val, 2, ',', ' ');
    }

}

$csrf = array(
    'name' => $this->security->get_csrf_token_name(),
    'hash' => $this->security->get_csrf_hash()
);


?>
<form action="" method="post">
    <div class="doc page-layout simple full-width">
        <div class="page-content row p-12">

            <div id="sidebarCollapse" class="testicon"><i class="icon icon-settings s-8 spiner"></i></div>
            <nav id="sidebar">

                <div class="h6 row no-gutters align-items-center justify-content-between bg-primary text-auto p-4">
                    <h4>Dodawanie korekty</h4>
                </div>
                <div class="row p-4">
                    <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-12">
                        <label for="regular1" class="control-label">Okres</label>
                        <select class="form-control selectpicker input-sm dt-filter" id="inputZakresDat"
                                name="inputZakresDat">
                            <optgroup label="Miesiąc">
                                <option value="1">Styczeń
                                </option>
                                <option value="2">Luty
                                </option>
                                <option value="3">Marzec
                                </option>
                                <option value="4">Kwiecień
                                </option>
                                <option value="5">Maj
                                </option>
                                <option value="6">Czerwiec
                                </option>
                                <option value="7">Lipiec
                                </option>
                                <option value="8">Sierpień
                                </option>
                                <option value="9">Wrzesień
                                </option>
                                <option value="10">Październik
                                </option>
                                <option value="11">Listopad
                                </option>
                                <option value="12">Grudzień
                                </option>

                            </optgroup>
                        </select>
                    </div>
                    <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-12">
                        <label for="regular1" class="control-label">Operacja</label>
                        <select class="form-control selectpicker input-sm dt-filter" id="inputMetoda"
                                name="inputMetoda">
                            <optgroup label="Rodzaj operacji">
                                <option value="add">Dodawanie</option>
                                <option value="sub">Odejmowanie</option>

                            </optgroup>
                        </select>
                    </div>
                    <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-12">
                        <label for="regular1" class="control-label">Pole</label>
                        <select class="form-control selectpicker input-sm dt-filter" id="inputRodzaj"
                                name="inputRodzaj">
                            <optgroup label="Korekta">
                                <option value="1">Przychód</option>
                                <option value="0">Wydatek</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-12">
                        <label for="regular1" class="control-label">Wartość</label>
                        <input class="form-control input-sm dt-filter" id="inputWartosc"
                               name="inputWartosc" type="text">

                        </input>
                    </div>
                    <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-12">
                        <label for="regular1" class="control-label">Opis</label>
                        <textarea class="form-control input-sm dt-filter" id="inputOpis" name="inputOpis"
                                  type="text"></textarea>
                    </div>


                    <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-12">
                        <button type="button" id="clear" class="btn btn-default">Wyczyść filtr</button>
                    </div>

                    <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-12">
                        <button type="submit" class="btn fuse-ripple-ready" id="dodaj_kor"><i
                                    class="icon icon-plus"></i>Dodaj korekte
                        </button>
                    </div>

                    <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-12">
                        <button type="button" class="btn fuse-ripple-ready" id="xls_dl"><i
                                    class="icon icon-file-excel"></i> Pobierz
                        </button>
                    </div>
                </div>


            </nav>


            <div class="col-12 col-md-12">

                <?PHP

                $pracownik = $this->Statistic_model->FCF_pracownik();
                $srednia_wydatkow_q = $this->db->query("
                            SELECT AVG(avg_cost) as srednia
                            FROM
                            (
                                SELECT month(data_zakupu), SUM(t.kwota_netto) AS avg_cost
                                FROM wydatki t
                              WHERE `data_zakupu` >= last_day(now()) + interval 1 day - interval 3 month
                               GROUP BY month(data_zakupu)
                            ) as inner_query;");


                $srednia_wydatkow = $srednia_wydatkow_q->row();


                $r1 = $this->Statistic_model->FCF_korekty();


                $ms = array();
                $msp = array();

                $wwartoscip = array();
                $wwartosci = array();
                $fcfval = array();


                foreach ($zweryfikowane_wydatki[0] as $key => $val) {
                    $ms[] = "'" . $key . "'";
                    $wwartosci[] = $val;
                }


                foreach ($zweryfikowane_przychody[0] as $key => $val) {
                    $msp[] = "'" . $key . "'";
                    $wwartoscip[] = $val;
                }


                $base_month_cost = $srednia_wydatkow->srednia;
                $default_percent = 1.03;

                for ($m = 1; $m <= 12; ++$m) {
                    $correction_cost = 0;
                    $modified_percentage = null;
                    foreach ($r1 as $correction) {

                        if ($m == $correction['month']) {
                            $correction_cost = $correction['final'];
                            if (!empty($correction['percent'])) {
                                $modified_percentage = $correction['percent'];
                            }
                        }
                    };

                    if ($m == 1) {
                        $percentage = 1;
                    } else {
                        $percentage = (!empty($modified_percentage)) ? $modified_percentage : $default_percent;
                    }

                    $month_cost = $base_month_cost * $percentage + $correction_cost;
                    $base_month_cost = $month_cost;

                    // echo date('F', mktime(0, 0, 0, $m, 1)) . " :: $month_cost :: " . $correction_cost . "  :: " . $percentage . "%<BR>";
                    $fcfval[] = round($month_cost, 2);

                }

                $cfprzychodu = $this->Statistic_model->FCF_przychodu();
                $out = array();


                foreach ($cfprzychodu as $k1 => $value) {
                    foreach ($fcfval as $k2 => $value2) {

                        if ($k1 == $k2) {
                            $cal = $value - $value2;
                            $out[] = bcsub($value, $value2, 2);

                        }

                        unset($k2);


                    }
                }

                ?>


                <div id="laczny" style="min-width: 310px; max-width: 100%; height: 300px; margin: 0 auto"></div>

                <div class="row  menu mt-4">
                    <div class="col-lg-12 text-center">
                        <!-- b2 -->
                        <button class="btn ml-2">
                            Przychód</span>
                            <span class="badge  bg-green" id="set_przy"></span>
                        </button>

                        <button class="btn ml-2">
                            Wydatki</span>
                            <span class="badge  bg-red" id="set_wyd"></span>
                        </button>
                        <button class="btn ml-2">
                            Memoriałowo</span>
                            <span class="badge  bg-cyan" id="set_mem"></span>
                        </button>
                        <button class="btn ml-2">
                            Kasowo</span>
                            <span class="badge bg-pink" id="set_kas"></span>
                        </button>

                        <div class="mt-5">
                            <div class="form-group chkboxsmetod">

                                <div class="form-check form-check-inline has-danger">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="toggleInactive" id="tgi">
                                        <span class="checkbox-icon fuse-ripple-ready"></span>
                                        <span>Pokaż szczegóły</span>
                                    </label>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>


                <div class="row">

                    <table class="table table-striped table-bordered dataTable no-footer dtr-inline mt-5 table2excel">
                        <thead class="btn-primary bg-primary">
                        <tr>
                            <th></th>
                            <th>Styczeń</th>
                            <th>Luty</th>
                            <th>Marzec</th>
                            <th>Kwieceń</th>
                            <th>Maj</th>
                            <th>Czerwiec</th>
                            <th>Lipiec</th>
                            <th>Sierpień</th>
                            <th>Wrzesień</th>
                            <th>Październik</th>
                            <th>Listopad</th>
                            <th>Grudzień</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="btn-primary bg-success">
                            <td>Przychody Σ</td>
                            <?PHP
                            $lacznie_przychodu = 0;
                            $p = $this->Statistic_model->s_Przychody_skalaroku();
                            $inc = 0;
                            foreach ($p[0] as $k) {
                                echo "<td class='inc_row_" . $inc . "'>" . pp($k) . "</td>";
                                $lacznie_przychodu += $k;
                                $inc++;
                            }

                            ?>
                            <td></td>
                        </tr>
                        <input type="hidden" id="lacznie_przychodu" value="<?PHP echo $lacznie_przychodu; ?>">
                        <tr class="btn-primary bg-success">
                            <td>PpK</td>
                            <?PHP
                            $lacznie_bank = 0;
                            $przelewy = array();
                            foreach ($p_dziennie_faktyczne['miesiecznie'] as $b) {
                                echo "<td>" . pp($b) . "</td>";
                                $lacznie_bank += $b;
                                $przelewy[] = $b;
                            }

                            ?>
                            <td></td>
                        </tr>

                        <input type="hidden" id="lacznie_bank" value="<?PHP echo $lacznie_bank; ?>">
                        <tr class="btn-primary bg-success">
                            <td>Korekta</td>
                            <?PHP
                            $inc_kor = 0;
                            $korekty = $this->Statistic_model->fcf_korekty_lista();

                            foreach ($korekty['przychody'] as $u) {
                                echo "<td class='inc_row_kor_" . $inc_kor . "'>" . pp($u) . "</td>";
                                $inc_kor++;
                            }
                            ?>
                            <td></td>
                        </tr>


                        <tr class="btn-primary bg-danger">
                            <td>Koszty Σ</td>
                            <?PHP
                            $exp = 0;
                            $w = $this->Statistic_model->s_wydatki_skalaroku();
                            $lastvalue = end($pracownik['wartosci']);
                            $lastkey = key($pracownik['wartosci']);

                            $arr1 = array($lastkey => $lastvalue);

                            array_pop($pracownik['wartosci']);

                            $arr1 = array_merge($arr1, $pracownik['wartosci']);
                            $lacznie_wydatki = 0;

                            $temp_koszty_pracodawcy = $arr1[0];

                            unset($temp_koszty_pracodawcy['pracownik_place']);

                            $final_wydatki = array();

                            foreach ($w[0] as $kluczy => $kz) {
                                $tempsum = bcadd($kz, $temp_koszty_pracodawcy[$kluczy], 2);
                                echo "<td>" . pp($tempsum) . "</td>";
                                $final_wydatki[] = $tempsum;
                                $lacznie_wydatki += $tempsum;
                            }
                            echo "<td></td>";
                            $wydatki_kat = $this->Statistic_model->s_wydatki_kat_skalaroku();
                            echo "</tr>";

                            ?>

                        <tr class="btn-primary bg-danger">
                            <td>Koszty zakupowe</td>
                            <?PHP
                            foreach ($w[0] as $klucz => $k) {
                                echo "<td class='exp_row_" . $exp . "'>" . pp($k) . "</td>";
                                $exp++;
                            }
                            echo "<td></td>";

                            echo "</tr>";
                            ?>
                        </tr>
                        <input type="hidden" id="lacznie_wydatki" value="<?PHP echo $lacznie_wydatki; ?>">
                        <tr class="btn-primary bg-danger">
                            <td>Korekta</td>
                            <?PHP

                            $exp_kor = 0;
                            foreach ($korekty['wydatki'] as $u) {
                                echo "<td class='exp_row_kor_" . $exp_kor . "'>" . pp($u) . "</td>";
                                $exp_kor++;
                            }
                            ?>
                            <td></td>
                        </tr>
                        <?PHP

                        echo "<tr><thead id='wydatki_szczegoly'>
                        <tr>
                            <th></th>
                            <th class=\"btn-primary bg-danger\">Kategorie</th>
                            <th class=\"btn-primary bg-danger\">Styczeń</th>
                            <th class=\"btn-primary bg-danger\">Luty</th>
                            <th class=\"btn-primary bg-danger\">Marzec</th>
                            <th class=\"btn-primary bg-danger\">Kwieceń</th>
                            <th class=\"btn-primary bg-danger\">Maj</th>
                            <th class=\"btn-primary bg-danger\">Czerwiec</th>
                            <th class=\"btn-primary bg-danger\">Lipiec</th>
                            <th class=\"btn-primary bg-danger\">Sierpień</th>
                            <th class=\"btn-primary bg-danger\">Wrzesień</th>
                            <th class=\"btn-primary bg-danger\">Październik</th>
                            <th class=\"btn-primary bg-danger\">Listopad</th>
                            <th class=\"btn-primary bg-danger\">Grudzień</th>
                        </tr>
                        </tr>";

                        foreach ($wydatki_kat as $wki) {
                            echo "<tr>
                                        <td></td> <td>" . $wki["nazwa"] . "</td>
                                        <td>" . pp($wki["Styczeń"]) . "</td>
                                        <td>" . pp($wki["Luty"]) . "</td>
                                        <td>" . pp($wki["Marzec"]) . "</td>
                                        <td>" . pp($wki["Kwieceń"]) . "</td>
                                        <td>" . pp($wki["Maj"]) . "</td>
                                        <td>" . pp($wki["Czerwiec"]) . "</td>
                                        <td>" . pp($wki["Lipiec"]) . "</td>
                                        <td>" . pp($wki["Sierpień"]) . "</td>
                                        <td>" . pp($wki["Wrzesień"]) . "</td>
                                        <td>" . pp($wki["Październik"]) . "</td>
                                        <td>" . pp($wki["Listopad"]) . "</td>
                                        <td>" . pp($wki["Grudzień"]) . "</td>
                                   
                                      </tr>";
                        }
                        echo "</thead>";

                        foreach ($arr1 as $wki) {
                            if ($wki === reset($arr1)) {
                                echo "<tr class='btn-primary bg-warning'>
                                       <td>Pracownicy Σ</td> 
                                        <td class='work_row_0'>" . pp($wki["Styczeń"]) . "</td>
                                        <td class='work_row_1'>" . pp($wki["Luty"]) . "</td>
                                        <td class='work_row_2'>" . pp($wki["Marzec"]) . "</td>
                                        <td class='work_row_3'>" . pp($wki["Kwieceń"]) . "</td>
                                        <td class='work_row_4'>" . pp($wki["Maj"]) . "</td>
                                        <td class='work_row_5'>" . pp($wki["Czerwiec"]) . "</td>
                                        <td class='work_row_6'>" . pp($wki["Lipiec"]) . "</td>
                                        <td class='work_row_7'>" . pp($wki["Sierpień"]) . "</td>
                                        <td class='work_row_8'>" . pp($wki["Wrzesień"]) . "</td>
                                        <td class='work_row_9'>" . pp($wki["Październik"]) . "</td>
                                        <td class='work_row_10'>" . pp($wki["Listopad"]) . "</td>
                                        <td class='work_row_11'>" . pp($wki["Grudzień"]) . "</td>
                                        <td></td>
                                      </tr>";
                                echo "<tr><thead class='pracownik_szczegoly'>
                        <tr>
                            <th></th>
                            <th class=\"btn-primary bg-warning\">Kategorie</th>
                            <th class=\"btn-primary bg-warning\">Styczeń</th>
                            <th class=\"btn-primary bg-warning\">Luty</th>
                            <th class=\"btn-primary bg-warning\">Marzec</th>
                            <th class=\"btn-primary bg-warning\">Kwieceń</th>
                            <th class=\"btn-primary bg-warning\">Maj</th>
                            <th class=\"btn-primary bg-warning\">Czerwiec</th>
                            <th class=\"btn-primary bg-warning\">Lipiec</th>
                            <th class=\"btn-primary bg-warning\">Sierpień</th>
                            <th class=\"btn-primary bg-warning\">Wrzesień</th>
                            <th class=\"btn-primary bg-warning\">Październik</th>
                            <th class=\"btn-primary bg-warning\">Listopad</th>
                            <th class=\"btn-primary bg-warning\">Grudzień</th>
                        </tr>
                        </tr>";
                            } else {
                                echo "<tr class='pracownik_szczegoly'>
                                       <td></td> <td>" . $wki["pracownik_place"] . "</td>
                                        <td>" . pp($wki["Styczeń"]) . "</td>
                                        <td>" . pp($wki["Luty"]) . "</td>
                                        <td>" . pp($wki["Marzec"]) . "</td>
                                        <td>" . pp($wki["Kwieceń"]) . "</td>
                                        <td>" . pp($wki["Maj"]) . "</td>
                                        <td>" . pp($wki["Czerwiec"]) . "</td>
                                        <td>" . pp($wki["Lipiec"]) . "</td>
                                        <td>" . pp($wki["Sierpień"]) . "</td>
                                        <td>" . pp($wki["Wrzesień"]) . "</td>
                                        <td>" . pp($wki["Październik"]) . "</td>
                                        <td>" . pp($wki["Listopad"]) . "</td>
                                        <td>" . pp($wki["Grudzień"]) . "</td>
                                      </tr>";
                            }
                        }
                        ?>

                        </tr>
                        </thead>

                        <tr class="btn-primary bg-primary">
                            <td>Bilans</td>
                            <th class="res_row_0"></th>
                            <th class="res_row_1"></th>
                            <th class="res_row_2"></th>
                            <th class="res_row_3"></th>
                            <th class="res_row_4"></th>
                            <th class="res_row_5"></th>
                            <th class="res_row_6"></th>
                            <th class="res_row_7"></th>
                            <th class="res_row_8"></th>
                            <th class="res_row_9"></th>
                            <th class="res_row_10"></th>
                            <th class="res_row_11"></th>
                            <td></td>
                        </tr>

                        </tbody>
                    </table>


                    <?PHP

                    $pracownik = $this->Statistic_model->FCF_pracownik();
                    $srednia_wydatkow_q = $this->db->query("SELECT AVG(avg_cost) as srednia
                            FROM
                            (
                                SELECT month(data_zakupu), SUM(t.kwota_netto) AS avg_cost
                                FROM wydatki t
                              WHERE `data_zakupu` >= last_day(now()) + interval 1 day - interval 3 month
                               GROUP BY month(data_zakupu)
                            ) as inner_query;");


                    $srednia_wydatkow = $srednia_wydatkow_q->row();


                    $r1 = $this->Statistic_model->FCF_korekty();


                    $ms = array();
                    $msp = array();

                    $wwartoscip = array();
                    $wwartosci = array();
                    $fcfval = array();


                    foreach ($zweryfikowane_wydatki[0] as $key => $val) {
                        $ms[] = "'" . $key . "'";
                        $wwartosci[] = $val;
                    }


                    foreach ($zweryfikowane_przychody[0] as $key => $val) {
                        $msp[] = "'" . $key . "'";
                        $wwartoscip[] = $val;
                    }


                    $base_month_cost = $srednia_wydatkow->srednia;
                    $default_percent = 1.03;

                    for ($m = 1; $m <= 12; ++$m) {
                        $correction_cost = 0;
                        $modified_percentage = null;
                        foreach ($r1 as $correction) {

                            if ($m == $correction['month']) {
                                $correction_cost = $correction['final'];
                                if (!empty($correction['percent'])) {
                                    $modified_percentage = $correction['percent'];
                                }
                            }
                        };

                        if ($m == 1) {
                            $percentage = 1;
                        } else {
                            $percentage = (!empty($modified_percentage)) ? $modified_percentage : $default_percent;
                        }

                        $month_cost = $base_month_cost / $percentage + $correction_cost;
                        $base_month_cost = $month_cost;

                        $fcfval[] = round($month_cost, 2);

                    }

                    $cfprzychodu = $this->Statistic_model->FCF_przychodu();
                    $out = array();


                    foreach ($cfprzychodu as $k1 => $value) {
                        foreach ($fcfval as $k2 => $value2) {

                            if ($k1 == $k2) {
                                $cal = $value - $value2;
                                $out[] = bcsub($value, $value2, 2);

                            }

                            unset($k2);


                        }
                    }


                    function Getfloat($str)
                    {
                        if (strstr($str, ",")) {
                            $str = str_replace(".", "", $str); // replace dots (thousand seps) with blancs
                            $str = str_replace(",", ".", $str); // replace ',' with '.'
                        }

                        if (preg_match("#([0-9\.]+)#", $str, $match)) { // search for number that may contain '.'
                            return floatval($match[0]);
                        } else {
                            return floatval($str); // take some last chances with floatval
                        }
                    }

                    $bilansa = array();
                    $niedobor = array();
                    $suma_bilansu = 0;
                    $wydatki_z_korekta = array();
                    $przychody_z_korekta = array();
                    $tlacznie_przychodu = 0;
                    $tlacznie_wydatki = 0;
                    foreach ($final_wydatki as $key1 => $val2) {


                        // korekty
                        $wydatki_z_korekta[] = bcadd($final_wydatki[$key1], Getfloat($korekty['wydatki'][$key1 + 1]), 2);
                        $przychody_z_korekta[] = bcadd($wwartoscip[$key1], Getfloat($korekty['przychody'][$key1 + 1]), 2);
                        $bilansa[] = bcsub($przychody_z_korekta[$key1], $wydatki_z_korekta[$key1], 2);
                        $niedobor[] = bcsub($przelewy[$key1], $wydatki_z_korekta[$key1], 2);
                        $suma_bilansu = bcadd($suma_bilansu, bcsub($przychody_z_korekta[$key1], $wydatki_z_korekta[$key1], 2), 2);
                        $tlacznie_przychodu = bcadd($wwartoscip[$key1], Getfloat($korekty['przychody'][$key1 + 1]), 2);
                        $tlacznie_wydatki = bcadd($final_wydatki[$key1], Getfloat($korekty['wydatki'][$key1 + 1]), 2);
                    }
                    ?>


                </div>

                <div class="profile-box info-box general card mb-4 mt-4">
                    <header class="h6 row no-gutters align-items-center justify-content-between bg-primary text-auto p-4">
                        <div class="title">Szczegóły korekt</div>
                        <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-2 dyearpicker"
                             style="">
                            <label for="regular1" class="control-label">Wybór roku korekt</label>
                            <select id="year_picker" class="form-control">
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                            </select>
                        </div>
                    </header>

                    <div class="content p-4">


                        <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead class="btn-primary bg-primary">
                            <tr>
                                <th>blank</th>
                                <th>Operacja</th>
                                <th>Miesiąc</th>
                                <th>Wartość</th>
                                <th>Pole</th>
                                <th>Opis</th>
                                <th>Akcje</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>

                    </div>

                </div>
            </div>


        </div>


    </div>

    <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>"/>
</form>
<!-- Modal -->


<!-- /.Modal -->
<link rel="stylesheet" type="text/css"
      href="<?PHP echo base_url(); ?>assets/vendor/datetimepicker/css/bootstrap-material-datetimepicker.css"/>
<script type="text/javascript" language="javascript"
        src="<?PHP echo base_url(); ?>assets/vendor/datetimepicker/js/bootstrap-material-datetimepicker.js"></script>


<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="<?PHP echo base_url(); ?>assets/sweetalert2.min.js"></script>
<script src="<?PHP echo base_url(); ?>assets/js/jquery.table2excel.min.js"></script>
<link rel="stylesheet" href="<?PHP echo base_url(); ?>assets/sweetalert2.min.css">
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.material.min.js"></script>
<style>

</style>
<script>
    $(document).ready(function () {


        $("#xls_dl").click(function () {
            $(".table2excel").table2excel({
                exclude: ".noExl",
                name: "Raport FCF",
                filename: "Raport FCF",
                fileext: ".xls",
                exclude_img: true,
                exclude_links: true,
                exclude_inputs: true
            });
        });


        var table;
        var nazwy_mies = ['Styczeń', 'Luty', 'Marzec', 'Kwiecień', 'Maj',
            'Czerwiec', 'Lipiec', 'Sierpień', 'Wrzesień', 'Październik',
            'Listopad', 'Grudzień'];
        table = $('#table').DataTable({

            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.
            "bStateSave": true,
            "lengthMenu": [[10, 50, 200, -1], [10, 50, 200, "Wszystko"]],
            "sDom": '<"row view-filter"<"col-sm-12"<"clearfix">>><"row view-pager"<"col-sm-12"l<"text-center"ip>>>t',
            responsive: true,
            "language": {
                "url": "http://cdn.datatables.net/plug-ins/1.10.15/i18n/Polish.json"
            },

            "ajax": {
                "url": "<?php echo site_url('Statystyka/fcf_dt') ?>",
                "type": "POST",
                "data": function (data) {
                    data.customYear = $('#year_picker').val();

                    data.<?php echo $this->security->get_csrf_token_name(); ?> = '<?php echo $this->security->get_csrf_hash(); ?>';
                },
            },
            "fnInitComplete": function (oSettings, json) {

                $('#year_picker').on('change', function (e) {
                    table.search(this.value).draw();
                });

            },
            columns: [

                {data: "nr", className: "", visible: false},
                {
                    data: "method", className: "", "mRender": function (data, type, full) {
                    if (data === "add") {
                        return 'Dodawanie'
                    }
                    if (data === "sub") {
                        return 'Odejmowanie'
                    }
                    if (data === "percent") {
                        return 'Zmiana %'
                    }
                }
                },


                {
                    data: "month", className: "", "mRender": function (data, type, full) {
                    return nazwy_mies[data - 1];
                }
                },
                {
                    data: "value", className: "", "mRender": function (data, type, full) {
                    if (data) {
                        return data + ' zł';
                    }
                }
                },
                {
                    data: "type", className: "", "mRender": function (data, type, full) {
                    if (data === "0") {
                        return 'Wydatek'
                    }
                    if (data === "1") {
                        return 'Przychód'
                    }
                }
                },
                {
                    data: "opis", className: ""
                },
                {
                    data: null, "mRender": function (data, type, full) {
                    return '<button type="button" class="btn-xs btn-danger del-korekta" data-id="' + full['nr'] + '"> Usuń</button>';
                }
                },

            ],

            "columnDefs": [
                {
                    "targets": [0], //first column / numbering column
                    "orderable": false, //set not orderable
                },
            ],
        });

        $(function () {
            $("#table").on('click', '.del-korekta', function () {
                var id = $(this).data('id');

                swal({
                    title: 'Czy chcesz usunąć korektę?',
                    text: "",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Tak',
                    cancelButtonText: 'Nie',
                    confirmButtonClass: 'btn btn-success',
                    cancelButtonClass: 'btn btn-danger',
                    buttonsStyling: false
                }).then(function () {
                    var postdata = {
                        '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>',
                        'target': id
                    };
                    $.ajax({
                        url: '<?PHP echo base_url(); ?>Statystyka/usun_korekte',
                        method: 'POST',
                        data: postdata,
                        success: function (data) {
                            if (data.response.status) {
                                if (data.response.message === "Usunięto") {
                                    location.reload();
                                }

                            }

                            swal(
                                'Komunikat !',
                                data.response.message,
                                'success'
                            );


                        }
                    });

                }, function (dismiss) {
                    if (dismiss === 'cancel') {
                        swal(
                            'Anulowano',
                            '',
                            'error'
                        )
                    }
                });
            });


            $('form').on('submit', function (e) {

                e.preventDefault();
                $.ajax({
                    type: 'post',
                    url: '<?php echo base_url();?>Statystyka/FCF_korekta',
                    data: $('form').serialize(),
                    success: function (response) {
                        if (response.response.status) {
                            swal(
                                'Komunikat !',
                                response.response.message,
                                'success'
                            );
                            location.reload();
                        } else {
                            swal(
                                'Komunikat !',
                                response.response.message,
                                'error'
                            );
                        }

                    },
                    error: function () {

                    }
                });
            });
        });

        Highcharts.setOptions({
            global: {
                useUTC: false
            },
            lang: {
                months: ['Styczeń', 'Luty', 'Marzec', 'Kwiecień', 'Maj', 'Czerwiec',
                    'Lipiec', 'Sierpień', 'Wrzesień', 'Październik', 'Listopad', 'Grudzień'
                ],
                weekdays: ['Poniedziałek', 'Wtorek', 'Środa', 'Czwartek',
                    'Piątek', 'Sobota', 'Niedziela'
                ],
                shortMonths: ['Styczeń', 'Luty', 'Marzec', 'Kwiecień', 'Maj', 'Czerwiec',
                    'Lipiec', 'Sierpień', 'Wrzesień', 'Październik', 'Listopad', 'Grudzień'
                ],
                decimalPoint: ',',
                downloadPNG: 'Pobierz zdjęcie w formacie PNG',
                downloadJPEG: 'Pobierz zdjęcie w formacie JPEG',
                downloadPDF: 'Pobierz dokument w formacie PDF',
                downloadSVG: 'Pobierz dokument w formacie SVG',
                exportButtonTitle: 'Exportuj',
                loading: 'Ładowanie ...',
                printButtonTitle: 'Drukuj wykres',
                resetZoom: 'Resetuj zoom',
                resetZoomTitle: 'Przywróć zoom',
                thousandsSep: ' ',
                decimalPoint: ','
            }
        });

        Highcharts.chart('laczny', {
            title: {
                text: 'Bilans'
            },
            xAxis: {
                categories: [<?php echo join($ms, ',') ?>]
            },
            yAxis: [{ // Primary yAxis
                labels: {
                    format: '{value} zł',
                    style: {
                        color: Highcharts.getOptions().colors[3]
                    }
                },
                title: {
                    text: 'Kwota',
                    style: {
                        color: Highcharts.getOptions().colors[3]
                    }
                },


            }],
            tooltip: {
                shared: true,

            },
            series: [
                {
                    type: 'column',
                    name: 'Przychody',
                    data: [<?php echo join($przychody_z_korekta, ',') ?>],
                    color: '#009d00',
                }, {
                    type: 'column',
                    name: 'Koszty',
                    data: [<?php echo join($wydatki_z_korekta, ',') ?>],
                    color: '#90000c',
                }, {
                    type: 'column',
                    name: 'Bilans',
                    data: [<?php echo join($bilansa, ',') ?>],
                    color: '#0275d8'
                },
                {
                    type: 'column',
                    name: 'Niedobór',
                    data: [<?php echo join($niedobor, ',') ?>],

                }, {
                    type: 'spline',
                    name: 'Wpyływy',
                    data: [<?php echo join($przelewy, ',') ?>],
                    color: '#ff6800',
                    marker: {
                        lineWidth: 2,
                        lineColor: Highcharts.getOptions().colors[3],
                        fillColor: 'white'
                    }
                }, {
                    type: 'pie',
                    name: 'Wynik',
                    data: [
                        {
                            name: 'Koszty',
                            y: <?PHP echo (array_sum($wydatki_z_korekta));?>,
                            color: '#90000c',
                        }, {
                            name: 'Przychody',
                            y: <?PHP echo (array_sum($przychody_z_korekta));?>,
                            color: '#009d00',
                        }, {
                            name: 'Zysk/Strata',
                            y: <?PHP echo $suma_bilansu;?>,
                            color: '#0275d8'
                        }],
                    center: [10, 0],
                    size: 80,
                    showInLegend: false,
                    dataLabels: {
                        enabled: false
                    },
                    tooltip: {
                        shared: false,

                    },
                }]
        });



       // var niedobor = $("#lacznie_przychodu").val() - $("#lacznie_bank").val();
        $("#set_przy").text('<?PHP echo pp(array_sum($przychody_z_korekta));?>');
       // $("#set_ppk").text(addCommas($("#lacznie_bank").val()));
       // $("#set_nied").text(addCommas(niedobor.toFixed(2)));
        $("#set_wyd").text('<?PHP echo pp(array_sum($wydatki_z_korekta));?>');


        var kasowo = $("#lacznie_bank").val() - $("#lacznie_wydatki").val();
        $("#set_kas").text(addCommas(kasowo.toFixed(2)));


        $("#wydatki_szczegoly,.pracownik_szczegoly").hide();

        $("#tgi").change(function () {
            if ($("#tgi").is(":checked")) {
                $("#wydatki_szczegoly,.pracownik_szczegoly").show(1000);

            } else {
                $("#wydatki_szczegoly,.pracownik_szczegoly").hide(1000);
            }
        });

        function addCommas(nStr) {
            nStr += '';
            x = nStr.split('.');
            x1 = x[0];
            x2 = x.length > 1 ? '.' + x[1] : '';
            var rgx = /(\d+)(\d{3})/;
            while (rgx.test(x1)) {
                x1 = x1.replace(rgx, '$1' + ' ' + '$2');
            }
            return x1 + x2;
        }

        var memorialowo = 0;

        for (var i = 0; i < 12; i++) {
            var row_a = parseFloat($(".inc_row_" + i).text().replace(/ /g, '').replace(',', '.')) + parseFloat($(".inc_row_kor_" + i).text().replace(/ /g, '').replace(',', '.'));
            var row_b = parseFloat($(".exp_row_" + i).text().replace(/ /g, '').replace(',', '.')) + parseFloat($(".exp_row_kor_" + i).text().replace(/ /g, '').replace(',', '.')) + parseFloat($(".work_row_" + i).text().replace(/ /g, '').replace(',', '.'));
            var calc = row_a - row_b;

            $(".res_row_" + i).text(addCommas(calc.toFixed(2)));
            memorialowo = memorialowo + parseFloat(calc.toFixed(2));
        }

        $("#set_mem").text(addCommas(memorialowo.toFixed(2)));


    });
</script>
