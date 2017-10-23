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
            <td class=""></td>
        </tr>
        <tr>
            <td style="border-color: rgb(0, 0, 0);">KRS: 0000622022</td>
            <td style="border-color: rgb(0, 0, 0);"></td>
            <td class=""></td>
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
            <td><?PHP echo $nabywca->kod_pocztowy; ?> <?PHP echo $nabywca->miasto; ?></td>
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
    $zalegle_zgloszenia = $this->Statistic_model->Ilezostalodootrzymania($id);

    $last_key = end((array_keys($zalegle_zgloszenia)));
    $i = 1;
    if ($zalegle_zgloszenia[0]["pozostala_kwota"] && count($zalegle_zgloszenia) > 2) {
    ?>
    <h3 class="hf">MONIT</h3>
    <h3 class="hf">Informujemy, że wg stanu na dzień <?PHP echo date("Y-m-d"); ?> posiada Pan / Pani wymagalne
        zadłużenie względem nas w kwocie <?PHP echo $zalegle_zgloszenia[$last_key]["pozostala_kwota"]; ?> zł na które
        składają się :</h3>
    <table style="border-collapse:collapse;width:100%;" class="">
        <tbody>
        <tr class="hclass addborder">
            <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;">Lp</td>
            <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;">Numer faktury</td>
            <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;">Zaległa kwota</td>
        </tr>
        <?PHP
        var_dump($zalegle_zgloszenia);
        unset($zalegle_zgloszenia[$last_key]);
        foreach ($zalegle_zgloszenia as $a) {

            echo "<tr><td  style=\"border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;\">".$i."</td><td  style=\"border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;\">" . $a['numer'] . '</td><td  style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;">' . $a['pozostala_kwota'] . "</td></tr>";
            $i++;
        }

        ?>
        </tbody>
    </table>
</div>

<?PHP } ?>
<div class="push"></div>

<h3 class="hf">Prosimy o pilną spłatę zadłużenia na nasz rachunek bankowy nr:</h3>
<h3 class="hf">20 1020 3408 0000 4602 0406 6064</h3>
<br>
<h3 class="hf">W przypadku spłaty przedmiotowego zadłużenia przed terminem doręczenia niniejszego pisma, prosimy potraktować je jako bezprzedmiotowe. W razie jakichkolwiek wątpliwości dot. wysokości salda lub terminu płatności prosimy o kontakt telefoniczny.
</h3>