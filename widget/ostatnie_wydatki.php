<div class="profile-box info-box general card mb-4">

    <header class="h6 row no-gutters align-items-center justify-content-between bg-primary text-auto p-4">
        <div class="title">Wydatki w tym miesiącu</div>

    </header>


    <div class="content p-4">
        <div id="gr" style="margin: 0 auto"></div>
        <?PHP
        $_wykres = $this->Statistic_model->wydatki_wkres_lin();
        $_opl = $this->Statistic_model->oplacone_wydatki_wykres();
        $return = array();
        $opl_a = array();
        if (!empty($_wykres)) {
            foreach ($_wykres as $wo) {
                $date = strtotime($wo['data_zakupu']) * 1000;
                $return['data'][] = array($date, $wo['lacznie']);
            }
        }
        if (!empty($_opl)) {
            foreach ($_opl as $o) {
                $date = strtotime($o['data_zakupu']) * 1000;
                $opl_a['data'][] = array($date, $o['lacznie']);
            }
        }
        ?>


    </div>


</div>

<div class="profile-box info-box general card mb-4">

    <header class="h6 row no-gutters align-items-center justify-content-between bg-primary text-auto p-4">
        <div class="title">Lista wszystkich nieopłaconych wydatków</div>

    </header>


    <div class="content p-4">
<?PHP
$_ow = $this->Statistic_model->ostatnie_wydatki_ten_miesiac();
?>
        <table id="s_o_wy" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead class="btn-primary bg-primary">
            <th>Data zakupu</th>
            <th>Dokument</th>
            <th>Wartość brutto</th>
            </thead>
            <tbody>
<?PHP
if (!empty($_ow)) {
    foreach ($_ow as $wo) {
        echo "<tr>"
        . "<td>" . $wo['data_zakupu'] . "</td>"
        . "<td><a href='" . base_url() . "Wydatki/Podglad/" . $wo['id_wydatku'] . "'>" . $wo['dokument'] . "</a></td>"
        . "<td>" . $wo['kwota_brutto'] . "</td>"
        . "</tr>";
    }
}
?>

            </tbody>
        </table>

    </div>


</div>


<script>
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

    Highcharts.chart('gr', {
        chart: {
            type: 'line'
        },
        title: {
            text: 'Wydatki w tym miesiącu'
        },
        yAxis: {
            title: {
                text: "Kwota brutto"
            }

        },
        tooltip: {
            shared: true,
            crosshairs: true
        },
        xAxis: {
            type: 'datetime',
            dateTimeLabelFormats: {
                day: '%e %b'
            }
        },

        series: [
            {
                name: 'Wydatki',
                data: <?PHP echo json_encode($return['data'], JSON_NUMERIC_CHECK); ?>,
                type: 'line',

            },
            {
                name: 'Opłacone',
                data: <?PHP echo json_encode($opl_a['data'], JSON_NUMERIC_CHECK); ?>,
                type: 'line',

            }
        ],

    });
</script>