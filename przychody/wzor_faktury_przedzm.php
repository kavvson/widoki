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

    table {
        font-size: 13px;
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
var_dump($korekta);
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
    <h3 class="hf">Korekta <?PHP echo $nazwa;?> faktury VAT <?PHP echo $item[0]->numer; ?></h3>
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
            $grouped = array();

            $korek_gr = array();

            foreach ($item as $i) {

                $wybor_ilosci = ($korekta[$i->id_item]['new_quantity']) ? $korekta[$i->id_item]['new_quantity'] : $i->ilosc;
                $korekta[$i->id_item]["ilosc"] = $wybor_ilosci;

                if ($korekta[$i->id_item]["new_vat"] == null) {
                    $korekta[$i->id_item]["new_vat"] = $i->vat;
                }

                if ($korekta[$i->id_item]['new_vat'] == 0) {
                    $korek_gr[$korekta[$i->id_item]['newvat_type']][] = $korekta[$i->id_item];

                } else {
                    $korek_gr[$korekta[$i->id_item]['new_vat']][] = $korekta[$i->id_item];
                }

                if ($i->vat == 0) {
                        $grouped[$i->typ_vat][] = $i;
                } else {
                        $grouped[$i->vat][] = $i;
                }

                $roznica_netto = bcsub($korekta[$i->id_item]['new_pricenet'], $i->netto, 2);
                $cena_ilosc_org = bcmul($i->netto, $i->ilosc, 2);
                ($i->vat == 0) ? $o = $i->typ_vat : $o = $i->vat;
                if (!array_key_exists($i->id_item,$korekta)) {
                   $korekta_vat[$o][] = 0;
                } else {
                    //echo "<br>".bcsub($korekta[$i->id_item]['new_vat'],$i->vat,2)."<br>";
                    if ($korekta[$i->id_item]['new_vat'] != null) {
                        if (is_numeric($korekta[$i->id_item]['new_vat']) && $korekta[$i->id_item]['new_vat'] != 0) {
                            echo "<br>&nbsp;" . bcsub($korekta[$i->id_item]['new_vat'], $i->vat) . "<br>";
                            echo "<br>" . $korekta[$i->id_item]['new_vat'];
                            $korekta_vat[$o][] = 0;

                        } else {
                            $korekta_vat[$korekta[$i->id_item]['newvat_type']][] = 0;
                        }


                    } else {
                        $korekta_vat[$o][] = 0;
                    }

                }

                ?>
                <tr>
                    <td class="hf"
                        style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;">
                        <?PHP echo $ic;

                        ?>
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
                        if (!array_key_exists($i->id_item,$korekta)) {
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
                        if (!array_key_exists($i->id_item,$korekta)) {
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
                        $if = ($korekta[$i->id_item]['new_pricenet'])?$korekta[$i->id_item]['new_pricenet']:$i->netto;
                        if (!array_key_exists($i->id_item,$korekta)) {
                            echo "<br>0.00" . "<br>";
                            echo "<br>" . $i->netto;

                        } else {

                            echo "<br>" . $roznica_netto . "<br>";
                            echo "<br>" .  $if . "<br>";

                        }
                        ?>
                    </td>

                    <td class="text-center"
                        style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;"><?PHP
                        echo $o; ?><br>
                        <?PHP

                        if (!array_key_exists($i->id_item,$korekta)) {
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
                        if (!array_key_exists($i->id_item,$korekta)) {
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


                            echo "<br>" . $oblicz . "<br>";

                            echo "<br>" . $wyv;

                        }
                        ?>

                    </td>

                    <td class="text-right"
                        style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;"><?PHP echo bcmul($i->wartosc_vat, $i->ilosc, 2); ?>
                        <br>
                        <?PHP
                        $rvat = 0;
                        if (!array_key_exists($i->id_item,$korekta)) {
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
                                    echo "<br>e0.00<br>";
                                    echo "<br>f0.00";
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
                        if (!array_key_exists($i->id_item,$korekta)) {
                            echo "<br>0.00" . "<br>";
                            echo "<br>" . bcmul($i->brutto, $i->ilosc, 2);
                        } else {
                            if (is_numeric($korekta[$i->id_item]['new_vat'])) {
                                echo "<br>" . bcadd($oblicz, $rvat, 2) . "<br>";
                                echo "<br>" . bcadd($wyv, $calcv, 2);
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
        $ktvat = 0;
        $ktvat = 0;
        $ktbrt = 0;

        $tvat = 0;
        $tnet = 0;
        $tbrt = 0;


        $out = array();
        foreach ($korek_gr as $kl => $va) {
            $kwvat = 0;
            $kwnet = 0;
            $kwbr = 0;

            foreach ($va as $cin) {
                if(($cin['newvat_type']) != null)
                {
                    $kwvat = bcadd(0, $kwvat, 2);
                }else{
                    $kwvat = bcadd(bcmul($cin['new_pricevat'], $cin['ilosc'], 2), $kwvat, 2);
                }


                $kwnet = bcadd(bcmul($cin['new_pricenet'], $cin['ilosc'], 2), $kwnet, 2);
                $kwbr = bcadd(bcmul($cin['new_pricebrut'], $cin['ilosc'], 2), $kwbr, 2);
            }

            $ktvat = bcadd($kwvat, $ktvat, 2);
            $ktnet = bcadd($kwnet, $ktnet, 2);
            $ktbrt = bcadd($kwbr, $ktbrt, 2);


            $out[$kl] = array(
                'kwvat' => $ktvat,
                'kwbr' => $ktbrt,
                'kwnet' => $ktnet,
            );
            if (!array_key_exists($kl,$grouped)) {
                ?>
                <tr class="text-right">
                    <?PHP if (!is_numeric($kl)) { ?>
                        <td colspan="2"
                            style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;"><?PHP echo $kl; ?>
                            <br>Korekta :
                            <br>Po korekcie :
                        </td>
                    <?PHP } else { ?>
                        <td colspan="2" style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;">
                            Podatek
                            VAT <?PHP echo $kl; ?>% <br>Korekta :
                            <br>Po korekcie :
                        </td>
                    <?PHP } ?>
                    <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;">0.00<br><?PHP echo $kwnet; ?>
                        <br><?PHP echo$kwnet; ?></td>
                    <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;">0.00<br><?PHP echo $kwvat; ?>
                        <br><?PHP echo $kwvat; ?></td>
                    <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;">0.00<br><?PHP echo $kwbr; ?>
                        <br><?PHP echo $kwbr; ?></td>
                </tr>
                <?PHP
                $tvat = bcadd($kwvat,$tvat,2);
                $tnet = bcadd($kwnet,$tnet,2);
                $tbrt = bcadd($kwbr,$tbrt,2);
            }
        }


        foreach ($grouped as $k => $v) {
            $wvat = 0;
            $wnet = 0;
            $wbrt = 0;

            foreach ($v as $c) {
                $wvat = bcadd(bcmul($c->wartosc_vat, $c->ilosc, 2), $wvat, 2);
                $wnet = bcadd(bcmul($c->netto, $c->ilosc, 2), $wnet, 2);
                $wbrt = bcadd(bcmul($c->brutto, $c->ilosc, 2), $wbrt, 2);
            }

            $tvat = bcsub(bcadd($wvat, $tvat, 2), $out[$k]["kwvat"], 2);
            $tnet = bcsub(bcadd($wnet, $tnet, 2), $out[$k]["kwnet"], 2);
            $tbrt = bcsub(bcadd($wbrt, $tbrt, 2), $out[$k]["kwbr"], 2);


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
                <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;"> <?PHP echo $wnet; ?>
                    <br><?PHP echo  bcsub($wnet,$out[$k]["kwnet"],2);?><br><?PHP echo $out[$k]["kwnet"]; ?></td>
                <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;"> <?PHP echo $wvat; ?>
                    <br><?PHP echo bcsub($wvat,$out[$k]["kwvat"],2);?><br><?PHP echo $out[$k]["kwvat"]; ?></td>
                <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;"> <?PHP echo $wbrt; ?>
                    <br><?PHP echo bcsub($wbrt,$out[$k]["kwbr"],2);?><br><?PHP echo $out[$k]["kwbr"]; ?></td>
            </tr>
        <?PHP } ?>


        <br>


        <tr class="text-right">
            <td style=""></td>
            <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;">Razem: PLN</td>
            <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;"> <?PHP echo $tnet; ?></td>
            <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;"> <?PHP echo $tvat; ?></td>
            <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;"> <?PHP echo $tbrt; ?></td>
        </tr>
        </tbody>
    </table>
    <br/>
    <br/>
    <br/>
    <table style="border-collapse:collapse;width:50%; float: right;" cellpadding="0" align="right">
        <tbody>
        <tr class="hclass">
            <td></td>
            <td colspan="2"><b>Razem do zapłaty: PLN <?PHP echo $tbrt; ?></b></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td width="110px;" class="pull-right">Słownie :</td>
            <td class=""><?PHP say($tbrt); ?> PLN<br/>
            </td>
        </tr>
        </tbody>
    </table>
    <hr>
    <br>
    <div class="push"></div>
</div><br>
<b>Pozostało do zapłaty : </b> <?PHP echo $tbrt; ?><br>
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
    <?PHP if (array_key_exists("Zw", $grouped)) { ?>
        <b>Podstawa prawa zwolnienia: art. 43 ust. 1 pkt 2 ustawy o VAT.</b><br>
    <?PHP }
    if (array_key_exists("Oo", $grouped)) { ?>
        <b>Podstawa odwrotnego obciążenia: art. 17 ust. 1 pkt 8 ustawy o VAT.</b>
    <?PHP } ?>
</div>
<pre>
<?PHP
var_dump($grouped);
foreach ($grouped as $k => $v) {
    $wvat = 0;
    $wnet = 0;
    $wbrt = 0;

    foreach ($v as $z=>$c) {
        echo "K ". $k." <> V ".$z." ".bcmul($c->wartosc_vat, $c->ilosc, 2)."<>";
        echo bcmul($c->netto, $c->ilosc, 2)."<>";
        echo bcmul($c->brutto, $c->ilosc, 2)."<><br>";
    }
}

var_dump($korek_gr);
?>
    <hr>
