<style>
    <!--
    .hclass {
        background-color: rgb(212, 212, 212);
        border-color: rgb(0, 0, 0);
        border-top-width: 1.5px;
        border-top-style: solid;
        text-align: center;
    }

    .w50 {
        width: 50%;
    }

    .hf {
        text-align: center;
    }

    .la {
        text-align: left;
    }

    .bbottom {
        border-color: rgb(0, 0, 0);
        border-bottom-width: 1.5px;
        border-bottom-style: solid;
        text-align: center;
    }

    .bbottoml {
        border-color: rgb(0, 0, 0);
        border-bottom-width: 1px;
        border-bottom-style: solid;
    }

    body{
        font-size: 12px;
    }
    table {
        text-align: center;
    }

    -->
    .addborder {
        border-left-width: 1.5px;
        border-left-style: solid;
        border-right-width: 1.5px;
        border-right-style: solid;
    }

</style>
<?PHP
error_reporting(0);
?>
<div class="wrapper">
    <table style="text-align: left; border-collapse: collapse; width: 100%;" cellpadding="0">
        <tbody>
        <tr>
            <td style="border-color: rgb(0, 0, 0);">KOMER Sp. z o.o</td>
            <td style="border-color: rgb(0, 0, 0);"></td>
            <td class="hclass">Miejsce wystawienia</td>
        </tr>
        <tr>
            <td style="border-color: rgb(0, 0, 0);">REGON: 364654900</td>
            <td style="border-color: rgb(0, 0, 0);"></td>
            <td class="bbottom">Pabianice</td>
        </tr>
        <tr>
            <td style="border-color: rgb(0, 0, 0);">Szczawińska 2a, 95-100 Zgierz</td>
            <td style="border-color: rgb(0, 0, 0);"></td>
            <td style="border-color: rgb(0, 0, 0); "></td>
        </tr>
        <tr>
            <td style="border-color: rgb(0, 0, 0);">NIP: 522-306-49-04</td>
            <td style="border-color: rgb(0, 0, 0);"></td>
            <td class="hclass">Data sprzedaży</td>
        </tr>
        <tr>
            <td style="border-color: rgb(0, 0, 0);">KRS: 0000622022</td>
            <td style="border-color: rgb(0, 0, 0);"></td>
            <td class="bbottom"><?PHP echo $item[0]->sprzedano; ?></td>
        </tr>
        <tr>
            <td style="border-color: rgb(0, 0, 0);">20 1020 3408 0000 4602 0406 6064</td>
            <td style="border-color: rgb(0, 0, 0);"></td>
            <td style="border-color: rgb(0, 0, 0);">&nbsp;</td>
        </tr>
        <tr>
            <td class=""></td>
            <td class=""></td>
            <td class="hclass">Data wystawienia</td>
        </tr>
        <tr>
            <td style="border-color: rgb(0, 0, 0);"></td>
            <td style="border-color: rgb(0, 0, 0);"></td>
            <td class="bbottom"><?PHP echo $item[0]->z_dnia; ?></td>
            <td style="border-color: rgb(0, 0, 0); border-bottom-width: 1.5px; border-bottom-style: solid; text-align: center;"></td>
        </tr>
        </tbody>
    </table>
    <br>

    <table style="border-collapse:collapse;width:100%;">
        <tbody>
        <tr>
            <td class="hclass w50">Sprzedawca</td>
            <td style="width:70px;"></td>
            <td class="hclass w50">Nabywca</td>
        </tr>
        <tr>
            <td>KOMER Sp. z o.o</td>
            <td></td>
            <td><?PHP echo $nabywca->nazwa; ?></td>
        </tr>
        <tr>
            <td>REGON: 364654900</td>
            <td></td>
            <td><?PHP echo $nabywca->ulica; ?></td>
        </tr>
        <tr>
            <td>Szczawińska 2a, 95-100 Zgierz</td>
            <td></td>
            <td><?PHP echo $nabywca->kod_pocztowy; ?><?PHP echo $nabywca->miasto; ?></td>
        </tr>
        <tr>
            <td>KRS: 0000622022</td>
            <td></td>
            <td><?PHP echo $nabywca->nip; ?></td>
        </tr>
        <tr>
            <td class="bbottoml">NIP: 522-306-49-04</td>
            <td></td>
            <td class="bbottoml"></td>
        </tr>
        </tbody>
    </table>
    <h5 class="hf">Oryginał/Kopia</h5>
    <h3 class="hf">KFS <?PHP echo (!empty($nazwa)) ? $nazwa : 'Korekta faktury'; ?> dotyczy
        FV <?PHP echo $item[0]->numer; ?></h3>
    <table style="border-collapse:collapse;width:100%;" class="">
        <tbody>
        <tr class="hclass addborder">
            <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;">Lp</td>
            <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;">Nazwa</td>
            <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;">Ilość</td>
            <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;">j.m</td>
            <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;">Cena netto</td>
            <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;">VAT<br/>
                [%]
            </td>
            <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;">Wartość netto</td>
            <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;">VAT</td>
            <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;">Wartość brutto</td>
        </tr>
        <?PHP

        if (!empty($item)) {
            $ic = 1;

            foreach ($item as $i) {

                $wybor_ilosci = ($korekta[$i->id_item]['new_quantity']) ? $korekta[$i->id_item]['new_quantity'] : $i->ilosc;
                $korekta[$i->id_item]["ilosc"] = $wybor_ilosci;

                if ($korekta[$i->id_item]["new_vat"] == null) {
                    $korekta[$i->id_item]["new_vat"] = $i->vat;
                }

                $roznica_netto = bcsub($korekta[$i->id_item]['new_pricenet'], $i->netto, 2);
                $cena_ilosc_org = bcmul($i->netto, $i->ilosc, 2);
                ($i->vat == 0) ? $o = $i->typ_vat : $o = $i->vat;
                if (!array_key_exists($i->id_item, $korekta)) {
                    $korekta_vat[$o][] = 0;
                } else {

                    if ($korekta[$i->id_item]['new_vat'] != null) {
                        if (is_numeric($korekta[$i->id_item]['new_vat']) && $korekta[$i->id_item]['new_vat'] != 0) {
                            $cv = bcmul($korekta[$i->id_item]['new_pricevat'], $wybor_ilosci, 2);
                            $rv = bcsub($cv, bcmul($i->wartosc_vat, $i->ilosc, 2), 2);
                            $wn = bcmul(
                                $roznica_netto,
                                $wybor_ilosci, 2);
                            $ov = bcmul($i->wartosc_vat, $i->ilosc, 2);
                            $on = bcmul($i->netto, $i->ilosc, 2);

                            $bo = bcadd($ov, $on, 2);
                            $br = bcsub($rv, $bznak, 2);
                            if ($br > $bo) {
                                $bznak = bcadd($cv, $wn, 2);
                            } else {
                                $bznak = "-" . bcadd($cv, $wn, 2);
                                // $br = bcadd($rv, $cena_ilosc_org, 2);
                            }
                            //   $bznak = 0;


                            if ($on < $wn) {
                                $nw = bcsub($on, $wn, 2);
                            } else {
                                $nw = bcadd($on, $wn, 2);
                            }
                            // w - korekta r- wynik po korekcie
                            $korekta_vat[$korekta[$i->id_item]['new_vat']][] =

                                array('vat' =>
                                    array(
                                        "r" => $cv,
                                        "w" => $rv,
                                        "o" => $ov
                                    ),
                                    'netto' => array(
                                        "w" => $wn,
                                        "r" => $nw,
                                        "o" => $on,
                                    ),
                                    'brutto' => array(
                                        "w" => bcadd($rv, $wn, 2),
                                        "r" => bcadd($nw, $cv, 2),
                                        "o" => $bo,
                                    )
                                );

                        } else {
                            $if = ($korekta[$i->id_item]['new_pricenet']) ? $korekta[$i->id_item]['new_pricenet'] : $i->netto;
                            $cv = bcmul($korekta[$i->id_item]['new_pricevat'], $wybor_ilosci, 2);
                            $rv = bcsub($cv, bcmul($i->wartosc_vat, $i->ilosc, 2), 2);
                            $wn = bcmul(
                                $roznica_netto,
                                $wybor_ilosci, 2);
                            $ov = bcmul($i->wartosc_vat, $i->ilosc, 2);
                            $on = bcmul($i->netto, $i->ilosc, 2);

                            $bo = bcadd($ov, $on, 2);
                            $br = bcsub($rv, $bznak, 2);
                            if ($br > $bo) {
                                $bznak = bcadd($cv, $wn, 2);
                            } else {
                                $bznak = "-" . bcadd($cv, $wn, 2);
                                // $br = bcadd($rv, $cena_ilosc_org, 2);
                            }
                            if (bcadd($rv, $wn, 2) < 0) {
                                $zwv = bcadd(bcadd($rv, $wn, 2), $bo, 2);
                            } else {
                                $zwv = bcsub(bcadd($rv, $wn, 2), $bo, 2);
                            }


                            $korekta_vat[$korekta[$i->id_item]['newvat_type']][] =
                                array('vat' =>
                                    array(
                                        "r" => $cv,
                                        "w" => $rv,
                                        "o" => $ov
                                    ),
                                    'netto' => array(
                                        "w" => $wn,
                                        "r" => $on,
                                        "o" => $on,
                                    ),
                                    'brutto' => array(
                                        "w" => bcadd($rv, $wn, 2),
                                        "r" => $zwv,
                                        "o" => $bo,
                                    )
                                    /*
                                     'brutto' => array(
                                "w" => bcadd($cena_ilosc_org,$roznica_netto,2),
                                "r" => bcmul($if,$wybor_ilosci,2),
                                "o" => $roznica_netto,
                            )*/

                                );
                        }
                    }

                }

                ?>
                <tr>
                    <td class="hf"
                        style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;">
                        <?PHP echo $ic; ?>
                    </td>
                    <td class="la"
                        style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;width: 45%;"><?PHP echo $i->nazwa; ?>
                        <br>
                        <br>Korekta :<br>
                        <br>Po korekcie :
                    </td>
                    <td class="text-right"
                        style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;"><?PHP echo $i->ilosc; ?>
                        <br>
                        <?PHP
                        if (!array_key_exists($i->id_item, $korekta)) {
                            echo "<br>0.00<br>";
                            echo "<br>" . $i->ilosc;
                        } else {
                            if ($korekta[$i->id_item]['new_quantity'] == null) {
                                echo "<br>0.00<br>";
                                echo "<br>" . $i->ilosc . "<br>";

                            } else {
                                echo "<br>" . bcsub($korekta[$i->id_item]['new_quantity'], $i->ilosc, 2) . "<br>";
                                echo "<br>" . $korekta[$i->id_item]['new_quantity'];
                            }


                        }
                        ?>
                    </td>
                    <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;"><?PHP echo $i->jednostka; ?>
                        <br>
                        <?PHP
                        if (!array_key_exists($i->id_item, $korekta)) {
                            echo "<br>" . $i->jednostka . "<br>";
                            echo "<br>" . $i->jednostka;
                        } else {
                            if ((!empty($korekta[$i->id_item]['new_jednostka']))) {
                                echo "<br>" . $korekta[$i->id_item]['new_jednostka'] . "<br>";
                                echo "<br>" . $korekta[$i->id_item]['new_jednostka'];
                            } else {
                                echo "<br>" . $i->jednostka . "<br>";
                                echo "<br>" . $i->jednostka;
                            }

                        }
                        ?>
                    </td>
                    <td class="text-right"
                        style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;"><?PHP echo $i->netto; ?>
                        <br>
                        <?PHP
                        $if = ($korekta[$i->id_item]['new_pricenet']) ? $korekta[$i->id_item]['new_pricenet'] : $i->netto;

                        if (!array_key_exists($i->id_item, $korekta)) {
                            echo "<br>0.00" . "<br>";
                            echo "<br>" . $i->netto;

                        } else {

                            echo "<br>" . $roznica_netto . "<br>";
                            echo "<br>" . $if . "<br>";

                        }
                        ?>
                    </td>

                    <td class="text-center"
                        style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;"><?PHP
                        echo $o; ?><br>
                        <?PHP

                        if (!array_key_exists($i->id_item, $korekta)) {
                            echo "<br>0.00" . "<br>";
                            echo "<br>" . $o;
                        } else {
                            //echo "<br>".bcsub($korekta[$i->id_item]['new_vat'],$i->vat,2)."<br>";
                            if ($korekta[$i->id_item]['new_vat'] != null) {
                                if (is_numeric($korekta[$i->id_item]['new_vat']) && $korekta[$i->id_item]['new_vat'] != 0) {
                                    echo "<br>&nbsp;" . bcsub($korekta[$i->id_item]['new_vat'], $i->vat) . "<br>";
                                    echo "<br>" . $korekta[$i->id_item]['new_vat'];

                                } else {
                                    echo "<br>" . $korekta[$i->id_item]['newvat_type'] . "<br>";
                                    echo "<br>" . $korekta[$i->id_item]['newvat_type'];
                                }


                            } else {
                                echo "<br>0.00<br>";
                                echo "<br>" . $o;
                            }

                        }
                        ?>

                    </td>
                    <td class="text-right"
                        style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;"><?PHP echo $cena_ilosc_org; ?>
                        <br>
                        <?PHP
                        if (!array_key_exists($i->id_item, $korekta)) {
                            $wyv = $cena_ilosc_org;
                            echo "<br>0.00" . "<br>";
                            echo "<br>" . $wyv;
                        } else {

                            $oblicz = bcmul(
                                $roznica_netto,
                                $wybor_ilosci, 2);
                            if ($oblicz > 0) {
                                $wyv = bcadd(
                                    $cena_ilosc_org,
                                    $oblicz
                                    , 2);
                            } else {
                                $wyv = bcsub(bcmul($i->netto, $wybor_ilosci, 2), abs($oblicz), 2);
                            }

                            if ($korekta[$i->id_item]['new_vat'] == 0) {

                                echo "<br>" . $roznica_netto . "<br>";

                                echo "<br>" . bcmul($if, $wybor_ilosci, 2);
                            } else {
                                echo "<br>" . $oblicz . "<br>";

                                echo "<br>" . $wyv;
                            }


                        }
                        ?>

                    </td>

                    <td class="text-right"
                        style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;"><?PHP echo bcmul($i->wartosc_vat, $i->ilosc, 2); ?>
                        <br>
                        <?PHP
                        $rvat = 0;
                        if (!array_key_exists($i->id_item, $korekta)) {
                            $rvat = 0;
                            echo "<br>0.00<br>";
                            echo "<br>" . bcmul($i->wartosc_vat, $i->ilosc, 2);
                        } else {
                            $calcv = bcmul($korekta[$i->id_item]['new_pricevat'], $wybor_ilosci, 2);
                            if ($korekta[$i->id_item]['new_vat'] == null) {
                                $rvat = bcsub(

                                    $calcv,
                                    bcmul($i->wartosc_vat, $i->ilosc, 2),
                                    2);
                                echo "<br>" . $rvat . "<br>";

                                echo "<br>" . $calcv;
                            } else {
                                if ($korekta[$i->id_item]['new_vat'] == 0) {
                                    echo "<br>-" . bcmul($i->wartosc_vat, $i->ilosc, 2) . "<br>";
                                    echo "<br>0.00";
                                } else {
                                    $rvat = bcsub(

                                        $calcv,
                                        bcmul($i->wartosc_vat, $i->ilosc, 2),
                                        2);
                                    echo "<br>" .
                                        $rvat
                                        . "<br>";
                                    echo "<br>" . $calcv . "";
                                }

                            }

                        }
                        ?>
                    </td>
                    <td class="text-right"
                        style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;"><?PHP echo bcmul($i->brutto, $i->ilosc, 2); ?>
                        <br>
                        <?PHP
                        if (!array_key_exists($i->id_item, $korekta)) {
                            echo "<br>0.00" . "<br>";
                            echo "<br>" . bcmul($i->brutto, $i->ilosc, 2);
                        } else {
                            if (is_numeric($korekta[$i->id_item]['new_vat'])) {

                                if ($korekta[$i->id_item]['new_vat'] == 0) {
                                    echo "<br>" . $roznica_netto . "<br>";
                                    echo "<br>" . bcmul($if, $wybor_ilosci, 2);
                                } else {
                                    echo "<br>" . bcadd($oblicz, $rvat, 2) . "<br>";
                                    echo "<br>" . bcadd($wyv, $calcv, 2);
                                }
                            } else {
                                echo "<br>" . bcadd($oblicz, $rvat, 2) . "<br>";
                                echo "<br>" . bcadd($wyv, $calcv, 2);
                            }

                        }
                        ?>
                    </td>
                </tr>
                <?PHP

                $ic++;
            }
        }
        ?>
        </tbody>
    </table>
    <br/>
    <table style="border-collapse:collapse;width:50%; float: right;" cellpadding="0" align="right">
        <tbody>
        <tr class="hclass addborder">
            <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;" colspan="2">Według stawki
                VAT
            </td>
            <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;">wartość netto</td>
            <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;">kwota VAT</td>
            <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;">wartość brutto</td>
        </tr>
        <?PHP
        $otvat = 0;
        $otnet = 0;
        $otbrt = 0;
        $ktvat = 0;
        $ktnet = 0;
        $ktbrt = 0;
        foreach ($korekta_vat as $k => $v) {
            $ovat = 0;
            $onet = 0;
            $obrt = 0;

            $wvat = 0;
            $wnet = 0;
            $wbrt = 0;

            $dvat = 0;
            $dnet = 0;
            $dbrt = 0;

            foreach ($v as $c) {
                $ovat = bcadd($c['vat']['o'], $ovat, 2);
                $onet = bcadd($c['netto']['o'], $onet, 2);
                $obrt = bcadd($c['brutto']['o'], $obrt, 2);

                $wvat = bcadd($c['vat']['r'], $wvat, 2);
                $wnet = bcadd($c['netto']['r'], $wnet, 2);
                $wbrt = bcadd($c['brutto']['r'], $wbrt, 2);

                $dvat = bcadd($c['vat']['w'], $dvat, 2);
                $dnet = bcadd($c['netto']['w'], $dnet, 2);
                $dbrt = bcadd($c['brutto']['w'], $dbrt, 2);
            }
            $otvat = bcadd($otvat, $ovat, 2);
            $otnet = bcadd($otnet, $onet, 2);
            $otbrt = bcadd($otbrt, $obrt, 2);

            $ktvat = bcadd($ktvat, $dvat, 2);
            $ktnet = bcadd($ktnet, $dnet, 2);
            $ktbrt = bcadd($ktbrt, $dbrt, 2);

            $wtvat = bcadd($wtvat, $wvat, 2);
            $wtnet = bcadd($wtnet, $wnet, 2);
            $wtbrt = bcadd($wtbrt, $wbrt, 2);

            ?>
            <tr class="text-right">
                <?PHP if (!is_numeric($k)) { ?>
                    <td colspan="2"
                        style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;"><?PHP echo $k; ?>
                        <br>Korekta :
                        <br>Po korekcie :
                    </td>
                <?PHP } else { ?>
                    <td colspan="2" style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;">Podatek
                        VAT <?PHP echo $k; ?>%<br>Korekta :
                        <br>Po korekcie :
                    </td>
                <?PHP } ?>
                <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;"> <?PHP echo $onet; ?>
                    <br><?PHP echo $dnet; ?><br><?PHP echo $wnet; ?></td>
                <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;"> <?PHP echo $ovat; ?>
                    <br><?PHP echo $dvat; ?><br><?PHP echo $wvat; ?></td>
                <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;"> <?PHP echo $obrt; ?>
                    <br><?PHP echo $dbrt; ?><br><?PHP echo $wbrt; ?></td>
            </tr>
        <?PHP } ?>
        <br>

        <tr class="text-right">
            <td style=""></td>
            <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;">Razem: PLN<br>Korekta : <br>Po
                korekcie :
            </td>
            <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;"> <?PHP echo $otnet; ?>
                <br><?PHP echo $ktnet; ?><br><?PHP echo $wtnet; ?></td>
            <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;"> <?PHP echo $otvat; ?>
                <br><?PHP echo $ktvat; ?><br><?PHP echo $wtvat; ?></td>
            <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;"> <?PHP echo $otbrt; ?>
                <br><?PHP echo $ktbrt; ?><br><?PHP echo $wtbrt; ?></td>
        </tr>
        </tbody>
    </table>
    <br/>
    <br/>
    <br/>
    <?PHP
    if ($ktbrt < 0) {
        $napis = "do zwrotu";
    } else {
        $napis = "do dopłaty";
    }

    ?>
    <table style="border-collapse:collapse;width:50%; float: right;" cellpadding="0" align="right">
        <tbody>
        <tr class="hclass">
            <td></td>
            <td colspan="2"><b>Razem <?PHP echo $napis ?>: PLN <?PHP echo number_format(abs($ktbrt), 2, ',', ' '); ?></b></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td width="110px;" class="pull-right">Słownie :</td>
            <td class=""><?PHP say($ktbrt); ?> PLN<br/>
            </td>
        </tr>
        </tbody>
    </table>
    <hr>
    <br>
    <div class="push"></div>
</div><br>
<b>Pozostało <?PHP echo $napis ?> : </b> <?PHP echo number_format(abs($ktbrt), 2, ',', ' '); ?><br>
<b>Uwagi do dokumentu</b>: <?PHP echo $i->uwagi; ?><br>
<b>W terminie: <?PHP echo $i->ilosc_dni; ?> dni = <?PHP echo $i->termin_platnosci; ?> </b>

<div class="footer">
    <table style="border-collapse:collapse;width:100%;">
        <tbody>
        <tr>
            <td class="hclass addborder"
                style="border-color: rgb(0, 0, 0); border-left-width: 1px; width:50%;border-left-style: solid;">
                Wystawił(a)
            </td>
            <td style="border-color: rgb(0, 0, 0); width:70px;">&nbsp;</td>
            <td class="hclass addborder" style="border-color: rgb(0, 0, 0);width:50%">Odebrał(a)</td>
        </tr>
        <tr>
            <td style="height: 121px; border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;"></td>
            <td style="height: 121px; border-color: rgb(0, 0, 0);">&nbsp;</td>
            <td style="height: 121px; border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;"></td>
        </tr>
        <tr>
            <td class="text-center">Podpis osoby upoważnionej do wystawienia faktury VAT</td>
            <td class="">&nbsp;</td>
            <td class="text-center">Podpis osoby upoważnionej do odbioru faktury VAT</td>
        </tr>
        </tbody>
    </table>
    <br>
    <?PHP if (array_key_exists("Zw", $korekta_vat)) { ?>
        <b>Podstawa prawa zwolnienia: art. 43 ust. 1 pkt 2 ustawy o VAT.</b><br>
    <?PHP }
    if (array_key_exists("Oo", $korekta_vat)) { ?>
        <b>Podstawa odwrotnego obciążenia: art. 17 ust. 1 pkt 8 ustawy o VAT.</b>
    <?PHP } ?>
</div>