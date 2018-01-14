<div class="doc page-layout simple full-width">
    <div class="page-content row p-12">
        <br>
        <?PHP
echo "PpK = ". $Ppk;
         ?>
        <div id="laczny" style="margin: 0 auto;width: 100%">

        </div>


        <?PHP

        var_dump($fcf_obj);
        ?>
    </div>
</div>

<link href="https://cdn.datatables.net/1.10.15/css/dataTables.material.min.css" rel="stylesheet">
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.material.min.js"></script>
<script src="https://code.highcharts.com/stock/highstock.js"></script>
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

    Highcharts.stockChart('laczny', {


        rangeSelector: {
            selected: 1
        },

        title: {
            text: 'FCF 2'
        },

        series: [
            {
                name: 'Wpływ wg wyciągu',
                data: <?PHP echo json_encode($przelewy_dziennie_tenrok['data'], JSON_NUMERIC_CHECK); ?>,
                type: 'line',
            },
            {
                name: 'Wpływ wg daty zapadalności',
                data: <?PHP echo json_encode($przychody_dziennie_tenrok['data'], JSON_NUMERIC_CHECK); ?>,
                type: 'line',
            },
        ],
    });

    /*
    Highcharts.chart('laczny', {
        chart: {
            type: 'line'
        },
        title: {
            text: 'TBD'
        },
        yAxis: {
            title: {
                text: "Kwota"
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
                name: 'Wpływ wg wyciągu',
                data: <?PHP echo json_encode($przelewy_dziennie_tenrok['data'], JSON_NUMERIC_CHECK); ?>,
                type: 'line',
            },
            {
                name: 'Wpływ wg daty zapadalności',
                data: <?PHP echo json_encode($przychody_dziennie_tenrok['data'], JSON_NUMERIC_CHECK); ?>,
                type: 'line',
            },
        ],
    });
    */
</script>