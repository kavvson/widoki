<style>
    <!--
    .hclass {
        background-color: rgb(212, 212, 212);
        border-color: rgb(0, 0, 0);
        border-top-width: 1.5px;
        border-top-style: solid;
        text-align: center;
    }

    .addborder {
        border-left-width: 1.5px;
        border-left-style: solid;
        border-right-width: 1.5px;
        border-right-style: solid;
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
</style>
<?PHP error_reporting(0); ?>
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
            <td class="hclass">Wynagrodzenie</td>
        </tr>
        <tr>
            <td style="border-color: rgb(0, 0, 0);">KRS: 0000622022</td>
            <td style="border-color: rgb(0, 0, 0);"></td>
            <td class="bbottom"><?PHP echo $miesiac; ?> / <?PHP echo $rok; ?></td>
        </tr>
        <tr>
            <td style="border-color: rgb(0, 0, 0);">20 1020 3408 0000 4602 0406 6064</td>
            <td style="border-color: rgb(0, 0, 0);"></td>
            <td style="border-color: rgb(0, 0, 0);">&nbsp;</td>
        </tr>
        <tr>
            <td class=""></td>
            <td class=""></td>
            <td class=""></td>
        </tr>
        <tr>
            <td style="border-color: rgb(0, 0, 0);"></td>
            <td style="border-color: rgb(0, 0, 0);"></td>
            <td class=""></td>
            <td style="border-color: rgb(0, 0, 0); border-bottom-width: 1.5px; border-bottom-style: solid; text-align: center;"></td>
        </tr>
        </tbody>
    </table>

    <h3 class="hf">Wynagrodzenie za <?PHP echo $miesiac; ?> / <?PHP echo $rok; ?></h3>
    <table style="border-collapse:collapse;width:100%;" class="">
        <tbody>
        <tr class="hclass addborder">
            <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;">Pracownik</td>
            <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;">Gotówka</td>
            <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;">Przelew</td>
            <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;">Σ</td>
        </tr>
        <?PHP
        $suma_gotowka = 0;
        $suma_przelew = 0;

        foreach ($z as $r) {
            $oplacono_gotowke = "";
            $oplacaono_przelew = "";
            if ($r['oplacono_gotowke']) {
                $oplacono_gotowke = " <img style='width:16px;height:16px;' src='" . base_url("assets/correct-symbol.png") . "'>";
            }else{
                $suma_gotowka = bcadd($r['kwota_gotowki'], $suma_gotowka, 2);
            }

            if ($r['oplacono_przelew']) {
                $oplacaono_przelew = " <img style='width:16px;height:16px;' src='" . base_url("assets/correct-symbol.png") . "'>";
            }else{
                $suma_przelew = bcadd($r['kwota_przelewu'], $suma_przelew, 2);
            }


            echo '<tr>
            <td class="la" style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;width: 45%;">' . $r['pracownik'] . '</td>
            <td class="text-center" style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;">' . $oplacono_gotowke . '' . $r['kwota_gotowki'] . '</td>
            <td class="text-center" style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;">' . $oplacaono_przelew . '' . $r['kwota_przelewu'] . '</td>
            <td class="text-center" style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;">' . bcadd($r['kwota_przelewu'], $r['kwota_gotowki'], 2) . '</td>
        </tr>';


        }
        ?>

        </tbody>
    </table>

    <br/>
    <table style="border-collapse:collapse;width:50%; float: right;" cellpadding="0" align="right">
        <tbody>
        <tr class="hclass">
            <td></td>
            <td colspan="2"><b>Zaległa gotówka: PLN <?PHP echo $suma_gotowka; ?></b></td>
            <td></td>
        </tr>
        <tr class="hclass">
            <td></td>
            <td colspan="2"><b>Zaległe przelewy: PLN <?PHP echo $suma_przelew; ?></b></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td width="110px;" class="pull-right">Słownie :</td>
            <td class=""><?PHP say($suma_gotowka + $suma_przelew); ?> PLN<br/>
            </td>
        </tr>
        </tbody>
    </table>
    <hr>
    <br>
    <div class="push"></div>
</div><br>
