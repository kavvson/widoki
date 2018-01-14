<?PHP
error_reporting(0);
function pctDiff($x1, $x2, $justcalc = false)
{
    $diff = ($x2 - $x1) / $x1;

    $calc = abs(round($diff * 100, 2));

    if (!$justcalc) {
        if ($diff > 0) {
            return "<i class=\"icon icon-trending-up text-danger s-4\"><span class='text-danger'> " . $calc . '%</span></i>';
        } elseif ($diff == 0) {

            return "<i class=\"icon icon-minus text-orange s-4\"><span class='text-warning'> 0%</span></i>";
        } else {
            return "<i class=\"icon icon-trending-down text-success s-4\"><span class='text-success'> " . $calc . '%</span></i>';
        }
    } else {
        return $diff;
    }

}

function pp($val)
{
    return number_format($val, 2, ',', ' ');
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
                    <h3>Filtry</h3>
                </div>
                <div class="row p-4">
                    <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-12">
                        <label for="regular1" class="control-label">Dane bazowe</label>
                        <select class="form-control selectpicker input-sm dt-filter" id="inputZakresDat"
                                name="inputZakresDat">
                            <optgroup label="Ręczne">
                                <option value="custom">[Zakres dat]</option>
                                <option value="today">Dzisiaj</option>
                                <option value="yesterday">Wczoraj</option>
                                <option value="this_week">Bieżący tydzień</option>
                                <option value="this_month" selected="">Bieżący miesiąc</option>
                                <option value="Q1">Q1</option>
                                <option value="Q2">Q2</option>
                                <option value="Q3">Q3</option>
                                <option value="Q4">Q4</option>
                                <option value="this_year">Bieżący rok</option>
                                <option value="last_week">Ostatnie 7 dni</option>
                                <option value="last_month">Ostatnie 30 dni</option>
                            </optgroup>
                            <optgroup label="Miesięczne">
                                <option <?PHP if (isset($_POST['inputZakresDat']) && $_POST['inputZakresDat'] === "1") {
                                    echo "selected";
                                } ?> value="1">Styczeń
                                </option>
                                <option <?PHP if (isset($_POST['inputZakresDat']) && $_POST['inputZakresDat'] === "2") {
                                    echo "selected";
                                } ?> value="2">Luty
                                </option>
                                <option <?PHP if (isset($_POST['inputZakresDat']) && $_POST['inputZakresDat'] === "3") {
                                    echo "selected";
                                } ?> value="3">Marzec
                                </option>
                                <option <?PHP if (isset($_POST['inputZakresDat']) && $_POST['inputZakresDat'] === "4") {
                                    echo "selected";
                                } ?> value="4">Kwiecień
                                </option>
                                <option <?PHP if (isset($_POST['inputZakresDat']) && $_POST['inputZakresDat'] === "5") {
                                    echo "selected";
                                } ?> value="5">Maj
                                </option>
                                <option <?PHP if (isset($_POST['inputZakresDat']) && $_POST['inputZakresDat'] === "6") {
                                    echo "selected";
                                } ?> value="6">Czerwiec
                                </option>
                                <option <?PHP if (isset($_POST['inputZakresDat']) && $_POST['inputZakresDat'] === "7") {
                                    echo "selected";
                                } ?> value="7">Lipiec
                                </option>
                                <option <?PHP if (isset($_POST['inputZakresDat']) && $_POST['inputZakresDat'] === "8") {
                                    echo "selected";
                                } ?> value="8">Sierpień
                                </option>
                                <option <?PHP if (isset($_POST['inputZakresDat']) && $_POST['inputZakresDat'] === "9") {
                                    echo "selected";
                                } ?> value="9">Wrzesień
                                </option>
                                <option <?PHP if (isset($_POST['inputZakresDat']) && $_POST['inputZakresDat'] === "10") {
                                    echo "selected";
                                } ?> value="10">Październik
                                </option>
                                <option <?PHP if (isset($_POST['inputZakresDat']) && $_POST['inputZakresDat'] === "11") {
                                    echo "selected";
                                } ?> value="11">Listopad
                                </option>
                                <option <?PHP if (isset($_POST['inputZakresDat']) && $_POST['inputZakresDat'] === "12") {
                                    echo "selected";
                                } ?> value="12">Grudzień
                                </option>

                            </optgroup>
                        </select>
                    </div>
                    <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-12 dyearpicker"
                         style="display: none;">
                        <label for="regular1" class="control-label">Wybór roku</label>
                        <select id="year_picker" name="year_picker" class="form-control">
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                        </select>
                    </div>
                    <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-12 db1"
                         style="display: none;">
                        <label for="regular1" class="control-label">Od</label>
                        <input type="text" name="dateFrom" id="dateFrom" class="form-control"/>
                    </div>
                    <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-12 db2"
                         style="display: none;">
                        <label for="regular1" class="control-label">Do</label>
                        <input type="text" name="dateTo" id="dateTo" class="form-control"/>
                    </div>

                    <!-- vs -->
                    <i class="icon-code-tags s-12" style="left: 0; right: 0; margin: auto;"></i>
                    <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-12">
                        <label for="regular1" class="control-label">Odniesienie</label>
                        <select class="form-control selectpicker input-sm dt-filter" id="inputZakresDatvs"
                                name="inputZakresDatvs">
                            <optgroup label="Ręczne">
                                <option value="custom">[Zakres dat]</option>
                                <option value="today">Dzisiaj</option>
                                <option value="yesterday">Wczoraj</option>
                                <option value="this_week">Bieżący tydzień</option>
                                <option value="this_month" selected="">Bieżący miesiąc</option>
                                <option value="Q1">Q1</option>
                                <option value="Q2">Q2</option>
                                <option value="Q3">Q3</option>
                                <option value="Q4">Q4</option>
                                <option value="this_year">Bieżący rok</option>
                                <option value="last_week">Ostatnie 7 dni</option>
                                <option value="last_month">Ostatnie 30 dni</option>
                            </optgroup>
                            <optgroup label="Miesięczne">
                                <option <?PHP if (isset($_POST['inputZakresDatvs']) && $_POST['inputZakresDatvs'] === "1") {
                                    echo "selected";
                                } ?> value="1">Styczeń
                                </option>
                                <option <?PHP if (isset($_POST['inputZakresDatvs']) && $_POST['inputZakresDatvs'] === "2") {
                                    echo "selected";
                                } ?> value="2">Luty
                                </option>
                                <option <?PHP if (isset($_POST['inputZakresDatvs']) && $_POST['inputZakresDatvs'] === "3") {
                                    echo "selected";
                                } ?> value="3">Marzec
                                </option>
                                <option <?PHP if (isset($_POST['inputZakresDatvs']) && $_POST['inputZakresDatvs'] === "4") {
                                    echo "selected";
                                } ?> value="4">Kwiecień
                                </option>
                                <option <?PHP if (isset($_POST['inputZakresDatvs']) && $_POST['inputZakresDatvs'] === "5") {
                                    echo "selected";
                                } ?> value="5">Maj
                                </option>
                                <option <?PHP if (isset($_POST['inputZakresDatvs']) && $_POST['inputZakresDatvs'] === "6") {
                                    echo "selected";
                                } ?> value="6">Czerwiec
                                </option>
                                <option <?PHP if (isset($_POST['inputZakresDatvs']) && $_POST['inputZakresDatvs'] === "7") {
                                    echo "selected";
                                } ?> value="7">Lipiec
                                </option>
                                <option <?PHP if (isset($_POST['inputZakresDatvs']) && $_POST['inputZakresDatvs'] === "8") {
                                    echo "selected";
                                } ?> value="8">Sierpień
                                </option>
                                <option <?PHP if (isset($_POST['inputZakresDatvs']) && $_POST['inputZakresDatvs'] === "9") {
                                    echo "selected";
                                } ?> value="9">Wrzesień
                                </option>
                                <option <?PHP if (isset($_POST['inputZakresDatvs']) && $_POST['inputZakresDatvs'] === "10") {
                                    echo "selected";
                                } ?> value="10">Październik
                                </option>
                                <option <?PHP if (isset($_POST['inputZakresDatvs']) && $_POST['inputZakresDatvs'] === "11") {
                                    echo "selected";
                                } ?> value="11">Listopad
                                </option>
                                <option <?PHP if (isset($_POST['inputZakresDatvs']) && $_POST['inputZakresDatvs'] === "12") {
                                    echo "selected";
                                } ?> value="12">Grudzień
                                </option>


                            </optgroup>
                        </select>
                    </div>
                    <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-12 dyearpickervs"
                         style="display: none;">
                        <label for="regular1" class="control-label">Wybór roku</label>
                        <select id="year_pickervs" name="year_pickervs" class="form-control">
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                        </select>
                    </div>
                    <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-12 db1vs"
                         style="display: none;">
                        <label for="regular1" class="control-label">Od</label>
                        <input type="text" name="dateFromvs" id="dateFromvs" class="form-control"/>
                    </div>
                    <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-12 db2vs"
                         style="display: none;">
                        <label for="regular1" class="control-label">Do</label>
                        <input type="text" name="dateTovs" id="dateTovs" class="form-control"/>
                    </div>
                    <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-12">
                        <button type="button" id="clear" class="btn btn-default">Wyczyść filtr</button>
                    </div>

                    <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-12">
                        <button type="submit" class="btn btn-default">Porównaj</button>
                    </div>


                </div>
            </nav>

            <div class="col-12 col-md-12">

                <?PHP
                //if (!empty($_POST['inputZakresDat'])) {
                echo '<h3 class="text-center">' . Statistic_model::napisPorownania('full') . '</h3>';
                // }


                $ms = array();
                $wwartosci = array();

                foreach ($wykres[0] as $key => $val) {
                    $ms[] = "'" . $key . "'";
                    $wwartosci[] = $val;
                }


                ?>
                <div id="wydatki_rok"
                     style="min-width: 310px; max-width: 800px; height: 300px; margin: 0 auto" class="mb-4"></div>
                <script src="https://code.highcharts.com/highcharts.js"></script>
                <script src="https://code.highcharts.com/modules/exporting.js"></script>

                <div class="row  menu mb-4">
                    <div class="col-lg-12 text-center">
                        <button class="btn ml-2">
                            <i class="icon-av-timer"></i> płatności <span
                                    class="badge bg-amber">śr. <?PHP echo ($srednia[0]['srednia'] > 0) ? round($srednia[0]['srednia']) . " dni przed" : round(abs($srednia[0]['srednia'])) . " dni po"; ?></span>
                            <span class="badge bg-green">  <?PHP

                                if (!empty($srednia[0])) {
                                    $globalsr = $srednia[0]['srednia'];
                                    $monthsr = round($srednia[1]['srednia']);

                                    function przedpo($monthsr)
                                    {
                                        return ($monthsr > 0) ? "dni " . $monthsr . " przed" : "dni " . abs($monthsr) . " po";
                                    }

                                    if ($srcalc > 0) {
                                        echo przedpo($monthsr);
                                    } else {
                                        echo przedpo($monthsr);

                                    }
                                }

                                ?></span>
                        </button>
                        <!-- b2 -->
                        <button class="btn ml-2">
                            Suma wydatków </span>
                            <span class="badge  bg-green " id="set_exp"></span>
                        </button>

                        <button class="btn ml-2">
                            Wartość zadłużenia brutto/netto</span>
                            <span class="badge  bg-red" id="set_unpaid"></span> <span class="badge  bg-red"
                                                                                      id="set_unpaidn">1</span>
                        </button>

                        <button class="btn ml-2">
                            Liczba nieopłaconych wydatków </span>
                            <span class="badge  bg-red" id="set_unpaidc"></span>
                        </button>

                    </div>
                </div>


                <div class="row">

                    <div class="col-6 col-md-6">
                        <div class="profile-box info-box general card mb-4">

                            <header class="h6 row no-gutters align-items-center justify-content-between bg-primary text-auto p-4">
                                <div class="title">Kategorie wydatków</div>
                            </header>

                            <div class="content p-4">
                                <table class="table table-responsive">
                                    <thead class="">
                                    <tr>
                                        <th>Kategoria</th>
                                        <div style="ac">
                                            <th>
                                                Netto <?PHP echo Statistic_model::napisPorownania('same_pola')['baza']; ?></th>
                                            <th>Zmiana</th>
                                        </div>
                                        <th>Brutto</th>
                                        <th>Vat</th>
                                        <th>Stawka vat</th>
                                        <th><?PHP echo Statistic_model::napisPorownania(); ?></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?PHP
                                    $sumBr = 0;

                                    $sumBr = 0;
                                    $tBrutto = 0;
                                    $tWVat = 0;
                                    $LastMonth = 0;
                                    $vars = [];
                                    $pvm = [];
                                    $cols = [];

                                    foreach ($d as $i) {

                                        $oldFigure = $i['LastMonth'];
                                        $newFigure = $i['tNetto'];


                                        $percentChange = pctDiff($oldFigure, $newFigure);


                                        echo "<tr><td>" . $i['Category'] . "</td><td>" . pp($i['tNetto']) . "</td><td>" . $percentChange . "</td><td>" . pp($i['tBrutto']) . "</td><td>" . pp($i['tWVat']) . "</td><td>" . pp($i['tVat']) . "</td><td>" . pp($i['LastMonth']) . "</td></tr>";
                                        $vars[] = $i['tNetto'];
                                        $pvm[] = $i['LastMonth'];
                                        $cols[] = "'" . $i['Category'] . "'";
                                        $sumBr = bcadd($sumBr, $i['tNetto'], 2);
                                        $tBrutto = bcadd($tBrutto, $i['tBrutto'], 2);
                                        $tWVat = bcadd($tWVat, $i['tWVat'], 2);

                                        $LastMonth = bcadd($LastMonth, $i['LastMonth'], 2);
                                    } ?>
                                    <tr class="bg-amber-200">
                                        <td>Suma</td>
                                        <td id="exp_v"><?PHP echo pp($sumBr); ?></td>
                                        <td></td>
                                        <td><?PHP echo pp($tBrutto); ?></td>
                                        <td><?PHP echo pp($tWVat); ?></td>
                                        <td></td>
                                        <td><?PHP echo pp($LastMonth); ?></td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div id="container"
                                     style="min-width: 310px; max-width: 800px; height: 300px; margin: 0 auto"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-6">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="profile-box info-box general card mb-4">

                                    <header class="h6 row no-gutters align-items-center justify-content-between bg-primary text-auto p-4">
                                        <div class="title">Wydatki w poszczególnych rejonach</div>
                                    </header>

                                    <div class="content p-4">

                                        <table class="table table-responsive">
                                            <thead>
                                            <tr>
                                                <th>Rejon</th>
                                                <th>
                                                    Netto <?PHP echo Statistic_model::napisPorownania('same_pola')['baza']; ?></th>
                                                <th>Zmiana</th>
                                                <th>Brutto</th>
                                                <th>Ilość wydatków</th>
                                                <th><?PHP echo Statistic_model::napisPorownania(); ?></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?PHP
                                            $rsum = 0;
                                            $pkwnes = 0;
                                            $tsum = 0;
                                            $bsum = 0;
                                            $ptsum = 0;
                                            $cn = [];
                                            $ccv = [];
                                            $cpv = [];

                                            foreach ($r as $o) {
                                                $oldFigure = $o['pkwne'];
                                                $newFigure = $o['tkwne'];

                                                $oilosc = $o['pile'];
                                                $nilosc = $o['tile'];


                                                $percentChange = pctDiff($oldFigure, $newFigure);
                                                $qinc = pctDiff($oilosc, $nilosc);


                                                $rsum = bcadd($rsum, $o['tkwne'], 2);
                                                $pkwnes = bcadd($pkwnes, $o['pkwne'], 2);
                                                $bsum = bcadd($bsum, $o['tkwbr'], 2);
                                                $tsum = bcadd($tsum, $o['tile'], 0);
                                                $ptsum = bcadd($ptsum, $o['pile'], 0);

                                                echo "<tr>
                                            <td>" . $o['nazwa'] . "</td>
                                            <td>" . pp($o['tkwne']) . "</td>
                                            <td>" . $percentChange . "</td>
                                            <td>" . pp($o['tkwbr']) . "</td>
                                            <td>" . $o['tile'] . " ( " . $qinc . " [" . $o['pile'] . "])</td>
                                            <td>" . pp($o['pkwne']) . "</td>
                                         </tr>";
                                                $cn[] = "'" . $o['nazwa'] . "'";
                                                $ccv[] = $o['tkwne'];
                                                $cpv[] = $o['pkwne'];
                                            } ?>
                                            <tr class="bg-amber-200">
                                                <td>Suma</td>
                                                <td><?PHP echo pp($rsum); ?></td>
                                                <td></td>
                                                <td><?PHP echo pp($bsum); ?></td>
                                                <td><?PHP echo $tsum; ?> [ <?PHP echo $ptsum; ?> ]</td>
                                                <td><?PHP echo pp($pkwnes); ?></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <div id="container2"
                                             style="min-width: 310px; max-width: 800px; height: 300px; margin: 0 auto"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">

                    <div class="col-6 col-md-6" style="height: 300px; overflow-y: scroll;">
                        <div class="profile-box info-box general card mb-4">

                            <header class="h6 row no-gutters align-items-center justify-content-between bg-primary text-auto p-4">
                                <div class="title">Lista nieopłaconych
                                    wydatków
                                </div>

                            </header>

                            <div class="content p-4">

                                <table id="s_o_wy" class="table table-striped table-bordered" cellspacing="0"
                                       width="100%">
                                    <thead class="btn-primary bg-primary">
                                    <th>Data zakupu</th>
                                    <th>Dokument</th>
                                    <th>Wartość brutto</th>
                                    </thead>
                                    <tbody>
                                    <?PHP
                                    $unpaid = 0;
                                    $unpaidn = 0;
                                    $unpaidc = 0;
                                    if (!empty($_ow_w)) {
                                        $unpaidc = count($_ow_w);
                                        foreach ($_ow_w as $wo_w) {
                                            $unpaid = bcadd($unpaid, $wo_w['kwota_brutto'], 2);
                                            $unpaidn = bcadd($unpaidn, $wo_w['kwota_netto'], 2);
                                            echo "<tr>"
                                                . "<td>" . $wo_w['data_zakupu'] . "</td>"
                                                . "<td><a href='" . base_url() . "Wydatki/Podglad/" . $wo_w['id_wydatku'] . "'>" . $wo_w['dokument'] . "</a></td>"
                                                . "<td>" . $wo_w['kwota_brutto'] . "</td>"
                                                . "</tr>";
                                        }
                                    }
                                    ?>
                                    <tr class="bg-red text-white">
                                        <td>Nierozliczone</td>
                                        <td></td>
                                        <td id="unpaid_v"><?PHP echo pp($unpaid); ?></td>
                                    </tr>
                                    </tbody>
                                    <input type="hidden" id="temp_unpc" value="<?PHP echo $unpaidc; ?>">
                                    <input type="hidden" id="unpaid_vn" value="<?PHP echo pp($unpaidn); ?>">
                                </table>

                            </div>


                        </div>
                    </div>
                    <div class="col-6 col-md-6" style="height: 300px; overflow-y: scroll;">
                        <div class="profile-box info-box general card mb-4">
                            <header class="h6 row no-gutters align-items-center justify-content-between bg-primary text-auto p-4">
                                <div class="title">Statystyka wydatków
                                </div>

                            </header>

                            <div class="content p-4">

                                <table id="s_o_wy" class="table table-striped table-bordered" cellspacing="0"
                                       width="100%">
                                    <thead class="btn-primary bg-primary">
                                    <th>Kontrahent</th>
                                    <th>Kwota</th>
                                    <th>Ilość</th>
                                    </thead>
                                    <tbody>
                                    <?PHP

                                    if (!empty($wydatki_faktury)) {

                                        foreach ($wydatki_faktury as $wst) {

                                            echo "<tr>"
                                                . "<td>" . $wst['nazwa'] . "</td>"
                                                . "<td>" . $wst['kwota'] . "</td>"
                                                . "<td>" . $wst['ilosc'] . "</td>"
                                                . "</tr>";
                                        }
                                    }
                                    ?>
                                    </tbody>
                                </table>

                            </div>


                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>
    </div>

    </div>
    <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>"/>
</form>
<style>
    .menu {

    }

    .content {
        margin-top: 10px;
    }

    .menu-padding {
        padding-top: 40px;
    }

    .content p {
        margin-bottom: 20px;
    }

    .sticky {
        position: fixed;
        top: 80px;
        display: block;
        margin-left: auto;
        margin-right: auto;
        z-index: 999;
        left: 0;
        right: 0;
        margin: auto;
    }
</style>
<link rel="stylesheet" type="text/css"
      href="<?PHP echo base_url(); ?>assets/vendor/datetimepicker/css/bootstrap-material-datetimepicker.css"/>
<script type="text/javascript" language="javascript"
        src="<?PHP echo base_url(); ?>assets/vendor/datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

<script>
    $(document).ready(function () {
        <?PHP if(!isset($_POST['inputZakresDatvs'])){ ?>
        var d = new Date();
        var n = d.getMonth() + 1;
        var nv = d.getMonth();
        var y = d.getFullYear();


        $('#inputZakresDat').val(n);
        $('#year_picker').val(y);

        $('#inputZakresDatvs').val(nv);
        $('#year_pickervs').val(y);

        <?PHP }?>
        $('body').tooltip({
            selector: '[rel=tooltip]'
        });
        var menu = $('.menu');
        var origOffsetY = menu.offset().top;

        function scroll() {
            if ($(window).scrollTop() >= origOffsetY) {
                $('.menu').addClass('sticky');
                $('.page-content').addClass('menu-padding');
            } else {
                $('.menu').removeClass('sticky');
                $('.page-content').removeClass('menu-padding');
            }


        }

        document.onscroll = scroll;
        <?PHP
        $a = array_fill(1, 12, '0');
        $b = array_fill(1, 12, '0');
        if (empty($_POST)) {
            $a[date('m')] = $sumBr;
            $b[date('m', strtotime('last month'))] = $LastMonth;
        } else {
            $a[$_POST['inputZakresDat']] = $sumBr;
            $b[$_POST['inputZakresDatvs']] = $LastMonth;
        }

        ?>

        Highcharts.chart('wydatki_rok', {
            chart: {
                zoomType: 'xy'
            },
            title: {
                text: 'Wydatki w skali roku'
            },
            /* subtitle: {
              text: 'Zestawione z bazą i odniesieniem ( netto )'
          }, */
            xAxis: [{
                categories: [
                    <?php echo join($ms, ',') ?>, 'Kolumna porównawcza'
                ],
                crosshair: true
            }],
            yAxis: [
                /*
             { // Primary yAxis
             labels: {
                 format: '{value} zł',
                 style: {
                     color: Highcharts.getOptions().colors[2]
                 }
             },
             title: {
                 text: '<?PHP echo Statistic_model::napisPorownania('same_pola')['odniesienie'];?>',
                    style: {
                        color: Highcharts.getOptions().colors[2]
                    }
                },
                opposite: true

            }, { // Secondary yAxis
                gridLineWidth: 0,
                title: {
                    text: '<?PHP echo Statistic_model::napisPorownania('same_pola')['baza'];?>',
                    style: {
                        color: Highcharts.getOptions().colors[0]
                    }
                },
                labels: {
                    format: '{value} zł',
                    style: {
                        color: Highcharts.getOptions().colors[0]
                    }
                }

            }, */
                { // Tertiary yAxis
                    gridLineWidth: 0,
                    title: {
                        text: 'W skali roku',
                        style: {
                            color: Highcharts.getOptions().colors[1]
                        }
                    },
                    labels: {
                        format: '{value} zł',
                        style: {
                            color: Highcharts.getOptions().colors[1]
                        }
                    },
                    opposite: true
                }],
            tooltip: {
                shared: true
            },
            legend: {
                layout: 'vertical',
                align: 'left',
                x: 80,
                verticalAlign: 'top',
                y: 55,
                floating: true,
                backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
            },
            series: [{
                name: 'W skali roku',
                type: 'line',
                /*  yAxis: 1, */
                data: [<?php echo join($wwartosci, ',') ?>],
                tooltip: {
                    valueSuffix: ' zł'
                }

            },
                /*
                 {
                 name: '<?PHP echo Statistic_model::napisPorownania('same_pola')['odniesienie'];?>',
                type: 'line',
                yAxis: 2,
                data: [<?php echo join($b, ',') ?>],
                marker: {
                    enabled: false
                },
                dashStyle: 'shortdot',
                tooltip: {
                    valueSuffix: ' zł'
                }

            }, {
                name: '<?PHP echo Statistic_model::napisPorownania('same_pola')['baza'];?>',
                type: 'line',
                data: [<?php echo join($a, ',') ?>],
                tooltip: {
                    valueSuffix: ' zł'
                }
            } */
            ]
        });


        Highcharts.chart('container', {
            chart: {
                type: 'column'
            },
            title: {
                text: ''
            },
            xAxis: {
                categories: [<?PHP echo implode(",", $cols);?>]
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Wartość'
                }
            },
            legend: {
                reversed: true
            },
            plotOptions: {},
            series: [{
                name: '<?PHP echo Statistic_model::napisPorownania('same_pola')['odniesienie'];?>',
                data: [<?PHP echo implode(",", $pvm);?>]
            }, {
                name: '<?PHP echo Statistic_model::napisPorownania('same_pola')['baza'];?>',
                data: [<?PHP echo implode(",", $vars);?>]
            }]
        });
        Highcharts.chart('container2', {
            chart: {
                type: 'column'
            },
            title: {
                text: ''
            },
            xAxis: {
                categories: [<?PHP echo implode(",", $cn);?>]
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Wartość'
                }
            },
            legend: {
                reversed: true
            },
            plotOptions: {},
            series: [{
                name: '<?PHP echo Statistic_model::napisPorownania('same_pola')['odniesienie'];?>',
                data: [<?PHP echo implode(",", $cpv);?>]
            }, {
                name: '<?PHP echo Statistic_model::napisPorownania('same_pola')['baza'];?>',
                data: [<?PHP echo implode(",", $ccv);?>]
            }]
        });
        $('#dateTo,#dateTovs,#dateFrom,#dateFromvs').bootstrapMaterialDatePicker({
            weekStart: 0,
            time: false
        });
        $('[name=inputZakresDat]').change(function () {

            if ($.isNumeric($('#inputZakresDat').val())) {
                $(".dyearpicker").show();
                $(".db1").fadeOut(1000);
                $(".db2").fadeOut(1000);
                $(".db1,.db2").val("");
            } else {
                $(".dyearpicker").hide();
            }
            if ($(this).val() === "custom") {
                $(".db1").fadeIn(1000);
                $(".db2").fadeIn(1000);
                $('#dateFrom').bootstrapMaterialDatePicker({
                    weekStart: 0,
                    time: false
                });
                $('#dateTo').bootstrapMaterialDatePicker({
                    weekStart: 0,
                    time: false
                });
            } else {

                $(".db1").fadeOut(1000);
                $(".db2").fadeOut(1000);
                $("#dateFrom,#dateTo").val('');
            }
        });
        $('[name=inputZakresDatvs]').change(function () {

            if ($.isNumeric($('#inputZakresDatvs').val())) {
                $(".dyearpickervs").show();
                $(".db1vs").fadeOut(1000);
                $(".db2vs").fadeOut(1000);
                $(".db1vs,.db2vs").val("");
            } else {
                $(".dyearpickervs").hide();
            }
            if ($(this).val() === "custom") {
                $(".db1vs").fadeIn(1000);
                $(".db2vs").fadeIn(1000);
                $('#dateFromvs').bootstrapMaterialDatePicker({
                    weekStart: 0,
                    time: false
                });
                $('#dateTovs').bootstrapMaterialDatePicker({
                    weekStart: 0,
                    time: false
                });
            } else {

                $(".db1vs").fadeOut(1000);
                $(".db2vs").fadeOut(1000);
                $("#dateFromvs,#dateTovs").val('');
            }
        });

        $("#clear").click(function () {
            window.location = window.location.href;
        });


        $("#set_unpaid").html($("#unpaid_v").text());
        $("#set_unpaidn").html($("#unpaid_vn").val());
        $("#set_exp").html($("#exp_v").text());
        $("#set_unpaidc").html($("#temp_unpc").val());

    });
</script>
