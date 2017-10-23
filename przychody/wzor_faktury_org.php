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
        text-align: center;
    }

    body {
        font-size: 12px;
    }

    -->
    .addborder {
        border-left-width: 1.5px;
        border-left-style: solid;
        border-right-width: 1.5px;
        border-right-style: solid;
    }

</style>

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
    <?PHP
    $extra = "";
    switch ($duplikat) {
        case "org" :
            $tresc = "";
            $extra = "<h5 class=\"hf\">Oryginał/Kopia</h5>";
            break;
        case "duplikat" :
            $tresc = " - DUPLIKAT";
            break;
    }
    echo $extra;
    ?>
    <h3 class="hf">FAKTURA VAT <?PHP echo $item[0]->numer.''.$tresc; ?></h3>
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

            foreach ($item as $i) {
                if ($i->vat == 0) {
                    $grouped[$i->typ_vat][] = $i;
                } else {
                    $grouped[$i->vat][] = $i;
                }
                ?>
                <tr>
                    <td class="hf"
                        style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;"><?PHP echo $ic; ?></td>
                    <td class="la"
                        style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;width: 45%;"><?PHP echo $i->nazwa; ?></td>
                    <td class="text-right"
                        style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;"><?PHP echo $i->ilosc; ?></td>
                    <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;"><?PHP echo $i->jednostka; ?></td>
                    <td class="text-right"
                        style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;"><?PHP echo $i->netto; ?></td>
                    <td class="text-center"
                        style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;"><?PHP echo ($i->vat == 0) ? $i->typ_vat : $i->vat; ?></td>
                    <td class="text-right"
                        style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;"><?PHP echo bcmul($i->netto, $i->ilosc, 2); ?></td>
                    <td class="text-right"
                        style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;"><?PHP echo bcmul($i->wartosc_vat, $i->ilosc, 2); ?></td>
                    <td class="text-right"
                        style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;"><?PHP echo bcmul($i->brutto, $i->ilosc, 2); ?></td>
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
        $tvat = 0;
        $tnet = 0;
        $tbrt = 0;
        foreach ($grouped as $k => $v) {
            $wvat = 0;
            $wnet = 0;
            $wbrt = 0;

            foreach ($v as $c) {
                $wvat = bcadd(bcmul($c->wartosc_vat, $c->ilosc, 2), $wvat, 2);
                $wnet = bcadd(bcmul($c->netto, $c->ilosc, 2), $wnet, 2);
                $wbrt = bcadd(bcmul($c->brutto, $c->ilosc, 2), $wbrt, 2);
            }
            $tvat = bcadd($wvat, $tvat, 2);
            $tnet = bcadd($wnet, $tnet, 2);
            $tbrt = bcadd($wbrt, $tbrt, 2);
            ?>
            <tr class="text-right">
                <?PHP if (!is_numeric($k)) { ?>
                    <td colspan="2"
                        style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;"><?PHP echo $k; ?></td>
                <?PHP } else { ?>
                    <td colspan="2" style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;">Podatek
                    VAT <?PHP echo $k; ?>%</td>>
                <?PHP } ?>
                <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;"> <?PHP echo $wnet; ?></td>
                <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;"> <?PHP echo $wvat; ?></td>
                <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;"> <?PHP echo $wbrt; ?></td>
            </tr>
        <?PHP } ?>
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