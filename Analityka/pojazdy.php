<?PHP
error_reporting(0);
function pctDiff($x1, $x2, $justcalc = false)
{
    $diff = ($x2 - $x1) / $x1;

    if (!$justcalc) {
        if ($diff > 0) {
            return "<i class=\"icon icon-trending-up text-success s-4\"><span class='text-success'> " . abs(round($diff * 100, 2)) . '%</span></i>';
        } else {

            return "<i class=\"icon icon-trending-down text-danger s-4\"><span class='text-danger'> " . abs(round($diff * 100, 2)) . '%</span></i>';
        }
    } else {
        return $diff;
    }

}

function pp($val)
{
    return number_format($val, 2, ',', ' ');
}

$csrf = array(
    'name' => $this->security->get_csrf_token_name(),
    'hash' => $this->security->get_csrf_hash()
);


?>
<form action="" method="post">
    <div class="doc page-layout simple full-width">
        <div class="page-content row p-12">

            <div id="sidebarCollapse" class="testicon"><i class="icon icon-settings s-8 spiner"></i></div>
            <nav id="sidebar">

                <div class="h6 row no-gutters align-items-center justify-content-between bg-primary text-auto p-4">
                    <h3>Filtry</h3>
                </div>
                <div class="row p-4">

                    <!-- org -->
                    <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-12">
                        <label for="regular1" class="control-label">Okres</label>
                        <select class="form-control selectpicker input-sm dt-filter" id="inputZakresDat"
                                name="inputZakresDat">
                            <optgroup label="Ręczne">
                                <option value="custom">[Zakres dat]</option>
                                <option value="today">Dzisiaj</option>
                                <option value="yesterday">Wczoraj</option>
                                <option value="this_week">Bieżący tydzień</option>
                                <option value="this_month" selected="">Bieżący miesiąc</option>
                                <option value="Q1">Q1</option>
                                <option value="Q2">Q2</option>
                                <option value="Q3">Q3</option>
                                <option value="Q4">Q4</option>
                                <option value="this_year">Bieżący rok</option>
                                <option value="last_week">Ostatnie 7 dni</option>
                                <option value="last_month">Ostatnie 30 dni</option>
                            </optgroup>
                            <optgroup label="Miesięczne">
                                <option <?PHP if (isset($_POST['inputZakresDat']) && $_POST['inputZakresDat'] === "1") {
                                    echo "selected";
                                } ?> value="1">Styczeń
                                </option>
                                <option <?PHP if (isset($_POST['inputZakresDat']) && $_POST['inputZakresDat'] === "2") {
                                    echo "selected";
                                } ?> value="2">Luty
                                </option>
                                <option <?PHP if (isset($_POST['inputZakresDat']) && $_POST['inputZakresDat'] === "3") {
                                    echo "selected";
                                } ?> value="3">Marzec
                                </option>
                                <option <?PHP if (isset($_POST['inputZakresDat']) && $_POST['inputZakresDat'] === "4") {
                                    echo "selected";
                                } ?> value="4">Kwiecień
                                </option>
                                <option <?PHP if (isset($_POST['inputZakresDat']) && $_POST['inputZakresDat'] === "5") {
                                    echo "selected";
                                } ?> value="5">Maj
                                </option>
                                <option <?PHP if (isset($_POST['inputZakresDat']) && $_POST['inputZakresDat'] === "6") {
                                    echo "selected";
                                } ?> value="6">Czerwiec
                                </option>
                                <option <?PHP if (isset($_POST['inputZakresDat']) && $_POST['inputZakresDat'] === "7") {
                                    echo "selected";
                                } ?> value="7">Lipiec
                                </option>
                                <option <?PHP if (isset($_POST['inputZakresDat']) && $_POST['inputZakresDat'] === "8") {
                                    echo "selected";
                                } ?> value="8">Sierpień
                                </option>
                                <option <?PHP if (isset($_POST['inputZakresDat']) && $_POST['inputZakresDat'] === "9") {
                                    echo "selected";
                                } ?> value="9">Wrzesień
                                </option>
                                <option <?PHP if (isset($_POST['inputZakresDat']) && $_POST['inputZakresDat'] === "10") {
                                    echo "selected";
                                } ?> value="10">Październik
                                </option>
                                <option <?PHP if (isset($_POST['inputZakresDat']) && $_POST['inputZakresDat'] === "11") {
                                    echo "selected";
                                } ?> value="11">Listopad
                                </option>
                                <option <?PHP if (isset($_POST['inputZakresDat']) && $_POST['inputZakresDat'] === "12") {
                                    echo "selected";
                                } ?> value="12">Grudzień
                                </option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-12 dyearpicker"
                         style="display: none;">
                        <label for="regular1" class="control-label">Wybór roku</label>
                        <select id="year_picker" name="year_picker" class="form-control">
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                        </select>
                    </div>
                    <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-12 db1"
                         style="display: none;">
                        <label for="regular1" class="control-label">Od</label>
                        <input type="text" name="dateFrom" id="dateFrom" class="form-control"/>
                    </div>
                    <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-12 db2"
                         style="display: none;">
                        <label for="regular1" class="control-label">Do</label>
                        <input type="text" name="dateTo" id="dateTo" class="form-control"/>
                    </div>
                    <!-- vs -->
                    <i class="icon-code-tags s-12" style="left: 0; right: 0; margin: auto;"></i>
                    <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-12">
                        <label for="regular1" class="control-label">Odniesienie</label>
                        <select class="form-control selectpicker input-sm dt-filter" id="inputZakresDatvs"
                                name="inputZakresDatvs">
                            <optgroup label="Ręczne">
                                <option value="custom">[Zakres dat]</option>
                                <option value="today">Dzisiaj</option>
                                <option value="yesterday">Wczoraj</option>
                                <option value="this_week">Bieżący tydzień</option>
                                <option value="this_month" selected="">Bieżący miesiąc</option>
                                <option value="Q1">Q1</option>
                                <option value="Q2">Q2</option>
                                <option value="Q3">Q3</option>
                                <option value="Q4">Q4</option>
                                <option value="this_year">Bieżący rok</option>
                                <option value="last_week">Ostatnie 7 dni</option>
                                <option value="last_month">Ostatnie 30 dni</option>
                            </optgroup>
                            <optgroup label="Miesięczne">
                                <option <?PHP if (isset($_POST['inputZakresDatvs']) && $_POST['inputZakresDatvs'] === "1") {
                                    echo "selected";
                                } ?> value="1">Styczeń
                                </option>
                                <option <?PHP if (isset($_POST['inputZakresDatvs']) && $_POST['inputZakresDatvs'] === "2") {
                                    echo "selected";
                                } ?> value="2">Luty
                                </option>
                                <option <?PHP if (isset($_POST['inputZakresDatvs']) && $_POST['inputZakresDatvs'] === "3") {
                                    echo "selected";
                                } ?> value="3">Marzec
                                </option>
                                <option <?PHP if (isset($_POST['inputZakresDatvs']) && $_POST['inputZakresDatvs'] === "4") {
                                    echo "selected";
                                } ?> value="4">Kwiecień
                                </option>
                                <option <?PHP if (isset($_POST['inputZakresDatvs']) && $_POST['inputZakresDatvs'] === "5") {
                                    echo "selected";
                                } ?> value="5">Maj
                                </option>
                                <option <?PHP if (isset($_POST['inputZakresDatvs']) && $_POST['inputZakresDatvs'] === "6") {
                                    echo "selected";
                                } ?> value="6">Czerwiec
                                </option>
                                <option <?PHP if (isset($_POST['inputZakresDatvs']) && $_POST['inputZakresDatvs'] === "7") {
                                    echo "selected";
                                } ?> value="7">Lipiec
                                </option>
                                <option <?PHP if (isset($_POST['inputZakresDatvs']) && $_POST['inputZakresDatvs'] === "8") {
                                    echo "selected";
                                } ?> value="8">Sierpień
                                </option>
                                <option <?PHP if (isset($_POST['inputZakresDatvs']) && $_POST['inputZakresDatvs'] === "9") {
                                    echo "selected";
                                } ?> value="9">Wrzesień
                                </option>
                                <option <?PHP if (isset($_POST['inputZakresDatvs']) && $_POST['inputZakresDatvs'] === "10") {
                                    echo "selected";
                                } ?> value="10">Październik
                                </option>
                                <option <?PHP if (isset($_POST['inputZakresDatvs']) && $_POST['inputZakresDatvs'] === "11") {
                                    echo "selected";
                                } ?> value="11">Listopad
                                </option>
                                <option <?PHP if (isset($_POST['inputZakresDatvs']) && $_POST['inputZakresDatvs'] === "12") {
                                    echo "selected";
                                } ?> value="12">Grudzień
                                </option>


                            </optgroup>
                        </select>
                    </div>
                    <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-12 dyearpickervs"
                         style="display: none;">
                        <label for="regular1" class="control-label">Wybór roku</label>
                        <select id="year_pickervs" name="year_pickervs" class="form-control">
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                        </select>
                    </div>
                    <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-12 db1vs"
                         style="display: none;">
                        <label for="regular1" class="control-label">Od</label>
                        <input type="text" name="dateFromvs" id="dateFromvs" class="form-control"/>
                    </div>
                    <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-12 db2vs"
                         style="display: none;">
                        <label for="regular1" class="control-label">Do</label>
                        <input type="text" name="dateTovs" id="dateTovs" class="form-control"/>
                    </div>


                    <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-12">
                        <button type="button" id="clear" class="btn btn-default">Wyczyść filtr</button>
                    </div>
                    <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-12">
                        <button type="submit" class="btn btn-default">Wybierz</button>
                    </div>
                </div>


            </nav>

            <div class="col-12 col-md-12">

                <?PHP
                foreach ($rok[0] as $key => $val) {

                    $ms[] = "'" . $key . "'";
                    $wwartosci[] = $val;

                }

                echo '<h3 class="text-center">' . Statistic_model::napisPorownania('full') . '</h3>';

                ?>

                <div id="kp_wykres"
                     style="min-width: 310px; max-width: 800px; height: 300px; margin: 0 auto" class="mb-4 mt-4"></div>

                <div class="row  menu">
                    <div class="col-lg-12 text-center">
                        <!-- b2 -->
                        <button class="btn ml-2">
                            Koszty pojazdu </span>
                            <span class="badge  bg-green " id="set_exp"></span>
                        </button>

                        <button class="btn ml-2">
                            Ilość litrów </span>
                            <span class="badge  bg-red" id="set_unpaid"></span>
                        </button>

                        <button class="btn ml-2">
                            Przejechane KM </span>
                            <span class="badge  bg-purple" id="set_przeje"></span>
                        </button>

                        <button class="btn ml-2">
                            Koszt miesięczny auta z AM </span>
                            <span class="badge  bg-red" id="set_arm"></span>
                        </button>
                        <button class="btn ml-2">
                            Koszt kilometra </span>
                            <span class="badge  bg-red" id="set_kk"></span>
                        </button>

                    </div>
                </div>


                <div class="row">

                    <div class="col-12 col-md-12">
                        <div class="profile-box info-box general card mb-4">

                            <header class="h6 row no-gutters align-items-center justify-content-between bg-primary text-auto p-4">
                                <div class="title">Pojazdy</div>
                            </header>

                            <div class="content p-4">
                                <table class="table table-responsive">
                                    <thead class="">
                                    <tr>
                                        <th>Pojazd</th>
                                        <th>Wartość</th>
                                        <th>Amortyzacja</th>
                                        <th>Koszty pojazdu</th>
                                        <th>Oryginalny przebieg</th>
                                        <th>Aktualny przebieg</th>
                                        <th>Przejechanych KM</th>
                                        <th>Ilość litrów</th>
                                        <th>Koszt kilometra</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?PHP

                                    $sumBr = 0;
                                    $sumaLitry = 0;
                                    $sumaLitryvs = 0;
                                    $armo = 0;
                                    $kosztzAM = 0;
                                    $Przejechane = 0;
                                    $Przejechanevs = 0;
                                    $Koszt_km = 0;
                                    $Koszt_kmvs = 0;
                                    $sumBrvs = 0;

                                    foreach ($d as $i) {
                                        $amor = bcmul($i['wartosc_pojazdu'], 0.023, 2);
                                        echo "<tr>
                                                <td><a href='" . base_url() . "Pojazdy/Podglad/" . $i['poj_id'] . "'>" . $i['nr_rej'] . "</a></td>
                                                <td>" . pp($i['wartosc_pojazdu']) . "</td><td>" . $amor . "</td>
                                                <td>" . pp($i['koszty_pojazdu']) . " / " . pp($vs[$i['poj_id']]['koszty_pojazdu']) . "</td>
                                                <td>" . pp($i['org_przebieg']) . "</td>
                                                <td>" . pp($i['aktualny_przebieg']) . " / " . pp($vs[$i['poj_id']]['aktualny_przebieg']) . "</td>
                                                <td>" . pp($i['przejechane_kl']) . " / " . pp($vs[$i['poj_id']]['przejechane_kl']) . "</td>
                                                <td>" . pp($i['litry']) . " / " . pp($vs[$i['poj_id']]['litry']) . "</td>
                                                <td>" . pp($i['koszt_km']) . "/ " . pp($vs[$i['poj_id']]['koszt_km']) . "</td>
                                              </tr>";

                                        $vars[] = $i['this_month_net'];
                                        $pvm[] = $i['last_month_net'];
                                        $cols[] = "'" . addslashes($i['nazwa']) . "'";

                                        $armo = bcadd($armo, $amor, 2);
                                        $sumBr = bcadd($sumBr, $i['koszty_pojazdu'], 2);
                                        $sumBrvs = bcadd($sumBrvs, $vs[$i['poj_id']]['koszty_pojazdu'], 2);

                                        $Przejechane = bcadd($Przejechane, $i['przejechane_kl'], 2);
                                        $Przejechanevs = bcadd($Przejechanevs, $vs[$i['poj_id']]['przejechane_kl'], 2);
                                        $kosztzAM = bcadd($kosztzAM, bcadd($i['koszty_pojazdu'], $amor, 2), 2);
                                        $sumaLitry = bcadd($sumaLitry, $i['litry'], 2);
                                        $sumaLitryvs = bcadd($sumaLitryvs, $vs[$i['poj_id']]['litry'], 2);
                                        $tBrutto = bcadd($tBrutto, $i['this_month_brut'], 2);
                                        $tWVat = bcadd($tWVat, $i['tWVat'], 2);
                                        $Koszt_km = bcadd($Koszt_km, $i['koszt_km'], 2);
                                        $Koszt_kmvs = bcadd($Koszt_kmvs, $vs[$i['poj_id']]['koszt_km'], 2);

                                        $LastMonth = bcadd($LastMonth, $i['last_month_net'], 2);

                                    }

                                    ?>
                                    <tr class="bg-amber-200">
                                        <td>Suma</td>
                                        <td></td>
                                        <td><?PHP echo pp($armo); ?></td>
                                        <td id="exp_v"><?PHP echo pp($sumBr); ?> / <?PHP echo pp($sumBr); ?></td>
                                        <td></td>
                                        <td></td>
                                        <td id="przejechane"><?PHP echo pp($Przejechane); ?>
                                            / <?PHP echo pp($Przejechanevs); ?></td>
                                        <td id="unpaid_v"><?PHP echo pp($sumaLitry); ?>
                                            / <?PHP echo pp($sumaLitryvs); ?></td>
                                        <td id="kosztk_v"><?PHP echo pp($Koszt_km); ?>
                                            / <?PHP echo pp($Koszt_kmvs); ?></td>
                                    </tr>
                                    </tbody>
                                </table>
                                <input type="hidden" id="kosztAutaAM" value="<?PHP echo $kosztzAM; ?>">

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>


    </div>
    </div>
    </div>
    </div>

    <input type="hidden" id="pdo_v" value="<?= pp($pdo); ?>"/>
    <input type="hidden" id="zysk_v" value="<?= pp($zysk); ?>"/>
    <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>"/>
</form>
<link rel="stylesheet" type="text/css"
      href="<?PHP echo base_url(); ?>assets/vendor/datetimepicker/css/bootstrap-material-datetimepicker.css"/>
<script type="text/javascript" language="javascript"
        src="<?PHP echo base_url(); ?>assets/vendor/datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<style>
    .menu {

    }

    .content {
        margin-top: 10px;
    }

    .menu-padding {
        padding-top: 40px;
    }

    .content p {
        margin-bottom: 20px;
    }

    .sticky {
        position: fixed;
        top: 80px;
        display: block;
        margin-left: auto;
        margin-right: auto;
        z-index: 999;
        left: 0;
        right: 0;
        margin: auto;
    }
</style>
<script>
    $(document).ready(function () {
        <?PHP if(!isset($_POST['inputZakresDat'])){ ?>
        var d = new Date();
        var n = d.getMonth() + 1;
        var nv = d.getMonth();
        var y = d.getFullYear();


        $('#inputZakresDat').val(n);
        $('#year_picker').val(y);

        $('#inputZakresDatvs').val(nv);
        $('#year_pickervs').val(y);

        <?PHP }?>
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


        $('#dateTo,#dateTovs,#dateFrom,#dateFromvs').bootstrapMaterialDatePicker({
            weekStart: 0,
            time: false
        });
        $('[name=inputZakresDat]').change(function () {

            if ($.isNumeric($('#inputZakresDat').val())) {
                $(".dyearpicker").show();
                $(".db1").fadeOut(1000);
                $(".db2").fadeOut(1000);
                $(".db1,.db2").val("");
            } else {
                $(".dyearpicker").hide();
            }
            if ($(this).val() === "custom") {
                $(".db1").fadeIn(1000);
                $(".db2").fadeIn(1000);
                $('#dateFrom').bootstrapMaterialDatePicker({
                    weekStart: 0,
                    time: false
                });
                $('#dateTo').bootstrapMaterialDatePicker({
                    weekStart: 0,
                    time: false
                });
            } else {

                $(".db1").fadeOut(1000);
                $(".db2").fadeOut(1000);
                $("#dateFrom,#dateTo").val('');
            }
        });
        Highcharts.chart('kp_wykres', {
            chart: {
                zoomType: 'xy'
            },
            title: {
                text: 'Pojazdy'
            },
            xAxis: [{
                categories: [
                    <?php echo join($ms, ',') ?>
                ],
                crosshair: true
            }],
            yAxis: [
                { // Tertiary yAxis
                    gridLineWidth: 0,
                    title: {
                        text: 'W skali roku',
                        style: {
                            color: Highcharts.getOptions().colors[1]
                        }
                    },
                    labels: {
                        format: '{value} zł',
                        style: {
                            color: Highcharts.getOptions().colors[1]
                        }
                    },
                    opposite: true
                }],
            tooltip: {
                shared: true,

            },


            legend: {
                layout: 'vertical',
                align: 'left',
                x: 80,
                verticalAlign: 'top',
                y: 55,
                floating: true,
                backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
            },
            series: [{
                name: 'Koszty pojazdu',
                type: 'line',
                data: [<?php echo join($wwartosci, ',') ?>],
                tooltip: {
                    valueSuffix: ' zł',
                    pointFormat: "{point.y:.2f} zł"
                }

            },
            ]
        });
        $('[name=inputZakresDatvs]').change(function () {

            if ($.isNumeric($('#inputZakresDatvs').val())) {
                $(".dyearpickervs").show();
                $(".db1vs").fadeOut(1000);
                $(".db2vs").fadeOut(1000);
                $(".db1vs,.db2vs").val("");
            } else {
                $(".dyearpickervs").hide();
            }
            if ($(this).val() === "custom") {
                $(".db1vs").fadeIn(1000);
                $(".db2vs").fadeIn(1000);
                $('#dateFromvs').bootstrapMaterialDatePicker({
                    weekStart: 0,
                    time: false
                });
                $('#dateTovs').bootstrapMaterialDatePicker({
                    weekStart: 0,
                    time: false
                });
            } else {

                $(".db1vs").fadeOut(1000);
                $(".db2vs").fadeOut(1000);
                $("#dateFromvs,#dateTovs").val('');
            }
        });


        $("#clear").click(function () {
            window.location = window.location.href;
        });


        $("#set_unpaid").html($("#unpaid_v").text());
        $("#set_exp").html($("#exp_v").text());
        $("#set_kk").html($("#kosztk_v").text());
        $("#set_unpaidc").html($("#temp_unpc").val());
        $("#set_arm").html($("#kosztAutaAM").val());
        $("#set_pdo").html($("#pdo_v").val());
        $("#set_przeje").html($("#przejechane").text());
        $('body').tooltip({
            selector: '[rel=tooltip]'
        });
        var menu = $('.menu');
        var origOffsetY = menu.offset().top;

        function scroll() {
            if ($(window).scrollTop() >= origOffsetY) {
                $('.menu').addClass('sticky');
                $('.page-content').addClass('menu-padding');
            } else {
                $('.menu').removeClass('sticky');
                $('.page-content').removeClass('menu-padding');
            }


        }

        document.onscroll = scroll;
    });
</script>
