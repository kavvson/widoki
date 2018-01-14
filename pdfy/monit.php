<?PHP error_reporting(0);?>
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
    $zalegle_zgloszenia = $this->Statistic_model->Ilezostalodootrzymania_monit($id);
    function odmiana( $counter ) {
        if( $counter == 1 ) return 'dzień';
        else {
            $sufix = $counter % 100;
            if( $sufix > 11 && $sufix < 15  ) return $counter.' dni';
            else {
                $liczba = $sufix % 10;
                switch( $liczba ) {
                    case 0:
                    case 1:
                    case 5:
                    case 6:
                    case 7:
                    case 8:
                    case 9: return $counter.' dni';
                    case 2:
                    case 3:
                    case 4:
                    default:
                        return $counter. ' dni';
                }
            }
        }
    }

    $last_key = end((array_keys($zalegle_zgloszenia)));
    $i = 1;
    if ($zalegle_zgloszenia[0]["pozostala_kwota"] && count($zalegle_zgloszenia) >= 1) {
    ?>
    <h3 class="hf">RAPORT NALEŻNOŚCI</h3>
    <h3 class="hf">
        W trosce o płynność finansową spółki KOMER przesyłamy do Państwa raport należności aktualny na dzień (<?PHP echo date("Y-m-d"); ?>). Na powyższe zadłużenie składają się:
    </h3>
    <table style="border-collapse:collapse;width:100%;" class="">
        <tbody>
        <tr class="hclass addborder">
            <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;">Lp</td>
            <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;">Numer faktury</td>
            <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;">Zaległa kwota</td>
            <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;">Termin płatności</td>
            <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;">Opóźnienie</td>
        </tr>
        <?PHP
$kwota = $zalegle_zgloszenia[$last_key]["pozostala_kwota"];
        unset($zalegle_zgloszenia[$last_key]);
        foreach ($zalegle_zgloszenia as $a) {

            echo "<tr><td  style=\"border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;\">".$i."</td>
                <td  style=\"border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;\">" . $a['numer'] . "</td>
                <td  style=\"border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;\">" . $a['pozostala_kwota'] . "</td>
                <td  style=\"border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;\">" . $a['termin_platnosci'] . "</td>";
            if($a['ddif'] < 0){
                echo "<td  style=\"border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;\">" . odmiana(abs($a['ddif'])) . "</td>";
            }

echo "</tr>";
            $i++;
        }

        ?>
        </tbody>
    </table>
</div>

<?PHP } ?>
<div class="push"></div>

<h3 class="hf">Łączna kwota należności : <?PHP echo $kwota; ?> zł</h3>
<h4 class="hf">W przypadku uregulownia wyżej wyminionych należności przed otrzymaniem pisma prosimy o zignorowanie tej wiadomości.
    W razie pytań prosimy o kontakt telefoniczny 504-101-364
</h4>
<br>
<h3 class="hf">Z góry dziękujemy,

    Zarząd Spółki Komer Sp z o. o.
</h3>