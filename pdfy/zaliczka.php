<style>
    <!--
    .hclass {
        background-color: rgb(212, 212, 212);
        border-color: rgb(0, 0, 0);
        border-top-width: 1.5px;
        border-top-style: solid;
        text-align: center;
    }
    .addborder{
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
            <td class="hclass">Data zaliczki</td>
        </tr>
        <tr>
            <td style="border-color: rgb(0, 0, 0);">KRS: 0000622022</td>
            <td style="border-color: rgb(0, 0, 0);"></td>
            <td class="bbottom"><?PHP echo $z["data_operacji"]; ?></td>
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
            <td class="bbottom"><?PHP echo $z["data_operacji"]; ?></td>
            <td style="border-color: rgb(0, 0, 0); border-bottom-width: 1.5px; border-bottom-style: solid; text-align: center;"></td>
        </tr>
        </tbody>
    </table>
    <br>

    <table style="border-collapse:collapse;width:100%;">
        <tbody>
        <tr>
            <td class="hclass w50">Wystawca</td>
            <td style="width:70px;"></td>
            <td class="hclass w50">Pracownik</td>
        </tr>
        <tr>
            <td>KOMER Sp. z o.o</td>
            <td></td>
            <td><?PHP echo $z["kupujacy"]; ?></td>
        </tr>
        <tr>
            <td>REGON: 364654900</td>
            <td></td>
            <td><?PHP echo $z['ulica']; ?></td>
        </tr>
        <tr>
            <td>Szczawińska 2a, 95-100 Zgierz</td>
            <td></td>
            <td><?PHP echo $z['kod_pocztowy']; ?> <?PHP echo $z['miasto']; ?></td>
        </tr>
        <tr>
            <td>KRS: 0000622022</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td class="bbottoml">NIP: 522-306-49-04</td>
            <td></td>
            <td class="bbottoml"></td>
        </tr>
        </tbody>
    </table>
    <h3 class="hf">Zaliczka</h3>
    <table style="border-collapse:collapse;width:100%;" class="">
        <tbody>
        <tr class="hclass addborder">
            <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;">Nazwa</td>
            <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;">Kwota</td>
        </tr>
        <tr>
            <td class="la" style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;width: 45%;">Zaliczka</td>
            <td class="text-center" style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;"><?PHP echo $z["kwota"]; ?></td>
        </tr>

        </tbody>
    </table>

    <br/>
    <table style="border-collapse:collapse;width:50%; float: right;" cellpadding="0" align="right">
        <tbody>
        <tr class="hclass">
            <td></td>
            <td colspan="2"><b>Razem do zapłaty: PLN <?PHP echo $z['kwota']; ?></b></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td width="110px;" class="pull-right">Słownie :</td>
            <td class=""><?PHP say($z['kwota']); ?> PLN<br/>
            </td>
        </tr>
        </tbody>
    </table>
    <hr>
    <br>
    <div class="push"></div>
</div><br>
<b>Opis</b>: <?PHP echo $z['opis']; ?><br>
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
            <td class="text-center">Podpis osoby upoważnionej do wystawienia zaliczki</td>
            <td class="">&nbsp;</td>
            <td class="text-center">Podpis osoby upoważnionej do odbioru zaliczki</td>
        </tr>
        </tbody>
    </table>
</div>