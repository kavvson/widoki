<link href="https://cdn.datatables.net/1.10.15/css/dataTables.material.min.css" rel="stylesheet">
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.material.min.js"></script>
<script src="https://code.highcharts.com/stock/highstock.js"></script>
<?PHP
$_wykres_w = $this->Statistic_model->wydatki_wkres_lin();
$_opl_w = $this->Statistic_model->oplacone_wydatki_wykres();
$return_w = array('data'=> array());
$opl_a_w = array('data'=>  array());
if (!empty($_wykres_w)) {
    foreach ($_wykres_w as $wo_w) {
        $date = strtotime($wo_w['data_zakupu']) * 1000;
        $return_w['data'][] = array($date, $wo_w['lacznie']);
    }
}
if (!empty($_opl_w)) {
    foreach ($_opl_w as $o) {
        $date = strtotime($o['data_zakupu']) * 1000;
        $opl_a_w['data'][] = array($date, $o['lacznie']);
    }
}
$_ow_w = $this->Statistic_model->ostatnie_wydatki_ten_miesiac();
$wykres = $this->Statistic_model->glowna_staty_wydatki_kategorie();

$pola = array();
$wartosci = array();
if (!empty($wykres)) {
    foreach ($wykres as $wp) {
        $pola[] = $wp['Category'];
        $wartosci[] = $wp['ThisMonth'];
        $wartosci_last[] = $wp['LastMonth'];
        $wartosci_blast[] = $wp['PrevMonth'];
    }
}
$_wykres = $this->Statistic_model->przychody_wkres_lin();
$_opl = $this->Statistic_model->oplacone_przychody_wykres();
$return = array('data'=> array());
$opl_a = array();
if (!empty($_wykres)) {
    foreach ($_wykres as $wo) {
        $date = strtotime($wo['z_dnia']) * 1000;
        $return['data'][] = array($date, $wo['lacznie']);
    }
}
if (!empty($_opl)) {
    foreach ($_opl as $o) {
        $date = strtotime($o['z_dnia']) * 1000;
        $opl_a['data'][] = array($date, $o['lacznie']);
    }
}
$_ow = $this->Statistic_model->ostatnie_przychody_ten_miesiac();


?>
<div class="doc page-layout simple full-width">

    <!-- HEADER -->
    <div class="page-header bg-primary text-auto p-6"><h2 class="doc-title" id="content">Strona główna</h2>
    </div>
    <!-- / HEADER -->

    <div class="page-content row p-12">
        <div class="col-12 col-md-12">
            <div class="profile-box info-box general card mb-4">

                <header class="h6 row no-gutters align-items-center justify-content-between bg-primary text-auto p-4">
                    <div class="title">Wydatki/Przychody w tym miesiącu</div>

                </header>


                <div class="content p-4">
                    <div id="laczny" style="margin: 0 auto"></div>
                </div>
            </div>
            <div class="widget-group row">


                <!-- WIDGET 3 -->
                <div class="col-12 col-sm-6  p-3">

                    <div class="widget widget3 card bg-blue text-auto">

                        <div class="widget-header pl-4 pr-2 row no-gutters align-items-center justify-content-between">

                            <div class="col">

                                <div class="row no-gutters align-items-center">

                                    <i class="icon-minus mr-2"></i>
                                    <span class="h6">Wydatki</span>

                                </div>
                            </div>

                            <button type="button" class="btn btn-icon fuse-ripple-ready">
                                <i class="icon icon-cash"></i>
                            </button>

                        </div>

                        <div class="widget-content p-4 text-center">

                            <div class="pb-6">
                                <h3>
                                    <?PHP

                                    $total_vat = array_sum( array_map(
                                        function($element){
                                            return $element['kwota_brutto'];
                                        },
                                        $_ow_w));

                                    echo $total_vat;

                                    ?>
                                    zł</h3>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- / WIDGET 3 -->

                <div class="col-12 col-sm-6  p-3">

                    <div class="widget widget3 card bg-teal-400 text-auto">

                        <div class="widget-header pl-4 pr-2 row no-gutters align-items-center justify-content-between">

                            <div class="col">

                                <div class="row no-gutters align-items-center">

                                    <i class="icon-plus mr-2"></i>
                                    <span class="h6">Przychody</span>

                                </div>
                            </div>

                            <button type="button" class="btn btn-icon fuse-ripple-ready">
                                <i class="icon icon-cash"></i>
                            </button>

                        </div>

                        <div class="widget-content p-4 text-center">

                            <div class="pb-6">
                                <h3>
                                    <?PHP
                                    $total_vat = array_sum( array_map(
                                        function($element){
                                            return $element['wartosc'];
                                        },
                                        $_ow));

                                    echo $total_vat;

                                    ?>
                                    zł</h3>
                            </div>


                        </div>
                    </div>
                </div>


            </div>
        </div>

        <div class="col-12 col-md-6">


            <div class="profile-box info-box general card mb-4">

                <header class="h6 row no-gutters align-items-center justify-content-between bg-primary text-auto p-4">
                    <div class="title">Wydatki w tym miesiącu</div>

                </header>


                <div class="content p-4">
                    <div id="gr" style="margin: 0 auto"></div>
                </div>


            </div>

            <div class="profile-box info-box general card mb-4">

                <header class="h6 row no-gutters align-items-center justify-content-between bg-primary text-auto p-4">
                    <div class="title">Lista wszystkich nieopłaconych wydatków</div>

                </header>


                <div class="content p-4">

                    <table id="s_o_wy" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead class="btn-primary bg-primary">
                        <th>Data zakupu</th>
                        <th>Dokument</th>
                        <th>Wartość brutto</th>
                        </thead>
                        <tbody>
                            <?PHP
                            if (!empty($_ow_w)) {
                                foreach ($_ow_w as $wo_w) {
                                    echo "<tr>"
                                    . "<td>" . $wo_w['data_zakupu'] . "</td>"
                                    . "<td><a href='" . base_url() . "Wydatki/Podglad/" . $wo_w['id_wydatku'] . "'>" . $wo_w['dokument'] . "</a></td>"
                                    . "<td>" . $wo_w['kwota_brutto'] . "</td>"
                                    . "</tr>";
                                }
                            }
                            ?>

                        </tbody>
                    </table>

                </div>


            </div>



            <div class="profile-box info-box general card mb-4">

                <header class="h6 row no-gutters align-items-center justify-content-between bg-primary text-auto p-4">
                    <div class="title">Wydatki</div>

                </header>

                <div class="content p-4">
                    <?PHP echo $this->Statistic_model->polygonWydatkiKategorie("Wydatki / Kategorie", $pola, $wartosci, $wartosci_last, $wartosci_blast, "Wydatki", TRUE) ?>

                    <table id="s_wy" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead class="btn-primary bg-primary">
                        <th>Kategoria</th>
                        <th>Wartość</th>
                        </thead>
                        <tbody>
                            <?PHP
                            foreach ($pola as $p => $v) {
                                echo " <tr>
                                    <td>$v</td><td>$wartosci[$p]</td>
                                </tr>";
                            }
                            ?>

                        </tbody>
                    </table>
                </div>


            </div>



        </div>


        <div class="col-12 col-md-6">
            <div class="profile-box info-box general card mb-4">

                <header class="h6 row no-gutters align-items-center justify-content-between bg-primary text-auto p-4">
                    <div class="title">Przychody w tym miesiącu</div>

                </header>


                <div class="content p-4">
                    <div id="pr" style="margin: 0 auto"></div>

                </div>


            </div>

            <div class="profile-box info-box general card mb-4">

                <header class="h6 row no-gutters align-items-center justify-content-between bg-primary text-auto p-4">
                    <div class="title">Lista wszystkich nieopłaconych przychodów</div>

                </header>


                <div class="content p-4">

                    <table id="s_o_prz" class="table table-striped table-bordered" cellspacing="0" width="100%">
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
                                    . "<td>" . $wo['z_dnia'] . "</td>"
                                    . "<td><a href='" . base_url() . "Przychody/Podglad/" . $wo['id_przychodu'] . "'>" . $wo['numer'] . "</a></td>"
                                    . "<td>" . $wo['wartosc'] . "</td>"
                                    . "</tr>";
                                }
                            }
                            ?>

                        </tbody>
                    </table>

                </div>


            </div>

        </div>


        <script>
            $(document).ready(function () {
            $('#s_wy').DataTable({
            "sDom": '<"row"<"col-sm-12"<"clearfix">>><"row"<"col-sm-12"l<"text-center"ip>>>t',
                    responsive: true,
                    "order": [1], //Initial no order.
                    "language": {
                    "url": "http://cdn.datatables.net/plug-ins/1.10.15/i18n/Polish.json"
                    },
                    "lengthMenu": [5, 10]
            });
                    $('#s_o_wy').DataTable({
            "sDom": '<"row"<"col-sm-12"<"clearfix">>><"row"<"col-sm-12"l<"text-center"ip>>>t',
                    responsive: true,
                    "order": [0], //Initial no order.
                    "language": {
                    "url": "http://cdn.datatables.net/plug-ins/1.10.15/i18n/Polish.json"
                    },
                    "lengthMenu": [5, 10]
            });
                    $('#s_o_prz').DataTable({
            "sDom": '<"row"<"col-sm-12"<"clearfix">>><"row"<"col-sm-12"l<"text-center"ip>>>t',
                    responsive: true,
                    "order": [0], //Initial no order.
                    "language": {
                    "url": "http://cdn.datatables.net/plug-ins/1.10.15/i18n/Polish.json"
                    },
                    "lengthMenu": [5, 10]
            });
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
                    
                    
                     Highcharts.chart('laczny', {
                    chart: {
                    type: 'line'
                    },
                            title: {
                            text: 'Zestawienie wydatków i przychodów w tym miesiącu'
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
                                    data: <?PHP echo json_encode($return_w['data'], JSON_NUMERIC_CHECK); ?>,
                                    type: 'line',
                            },
                            {
                            name: 'Przychody',
                                    data: <?PHP echo json_encode($return['data'], JSON_NUMERIC_CHECK); ?>,
                                    type: 'line',
                            }
                            ],
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
                                    data: <?PHP echo json_encode($return_w['data'], JSON_NUMERIC_CHECK); ?>,
                                    type: 'line',
                            },
                            {
                            name: 'Opłacone',
                                    data: <?PHP echo json_encode($opl_a_w['data'], JSON_NUMERIC_CHECK); ?>,
                                    type: 'line',
                            }
                            ],
                    });
                    Highcharts.chart('pr', {
                    chart: {
                    type: 'line'
                    },
                            title: {
                            text: 'Przychody w tym miesiącu'
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
                            name: 'Przychód',
                                    data: <?PHP echo json_encode($return['data'], JSON_NUMERIC_CHECK); ?>,
                                    type: 'line',
                            },
<?PHP if (!empty($opl_a['data'])) { ?>
                                {
                                name: 'Opłacone',
                                        data: <?PHP echo json_encode($opl_a['data'], JSON_NUMERIC_CHECK); ?>,
                                        type: 'line',
                                }
<?PHP } ?>
                            ],
                    });
            });
        </script>