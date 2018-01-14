<?PHP
error_reporting(0);
function pctDiff($x1, $x2, $justcalc = false)
{
    $diff = ($x2 - $x1) / $x1;

    if (!$justcalc) {
        if ($diff > 0) {
            return "<i class=\"icon icon-trending-up text-danger s-4\"><span class='text-danger'> " . abs(round($diff * 100, 2)) . '%</span></i>';
        } else {

            return "<i class=\"icon icon-trending-down text-success s-4\"><span class='text-success'> " . abs(round($diff * 100, 2)) . '%</span></i>';
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
            <!-- Sidebar Holder -->
            <nav id="sidebar">

                <div class="h6 row no-gutters align-items-center justify-content-between bg-primary text-auto p-4">
                    <h3>Filtry</h3>
                </div>
                <div class="row p-4">

                    <!-- org -->
                    <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-12">
                        <label for="regular1" class="control-label">Dane bazowe</label>
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
                    <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-12 dyearpicker">
                        <label for="regular1" class="control-label">Wybór roku</label>
                        <select id="year_picker" name="year_picker" class="form-control">
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                        </select>
                    </div>

                    <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-12">
                        <button type="button" id="clear" class="btn btn-default">Wyczyść filtr</button>
                    </div>


                    <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-12">
                        <button type="submit" class="btn btn-default">Generuj</button>
                    </div>
                </div>


            </nav>
            <!-- STANDARD ALERTS -->


            <div class="col-12 col-md-12">

                <?PHP if (!empty($_POST['inputZakresDat'])) {
                    echo '<h3 class="text-center">' . Statistic_model::napisPorownania('baza') . '</h3>';
                } ?>

                <div class="row  menu">
                    <div class="col-lg-12 text-center">
                        <!-- b2 -->
                        <button class="btn ml-2">
                            Kapitał obrotowy </span>
                            <span class="badge  bg-green " id="set_ko"></span>
                        </button>

                        <button class="btn ml-2">
                            Ilość godzin </span>
                            <span class="badge  bg-red" id="set_ih"></span>
                        </button>

                        <button class="btn ml-2">
                            Koszt pracodawcy </span>
                            <span class="badge  bg-purple" id="set_kp"></span>
                        </button>

                        <button class="btn ml-2">
                            Koszt godziny </span>
                            <span class="badge  bg-red" id="set_kh"></span>
                        </button>
                        <button class="btn ml-2">
                            Przychód </span>
                            <span class="badge  bg-red" id="set_p"></span>
                        </button>
                        <button class="btn ml-2">
                            Wydatki </span>
                            <span class="badge  bg-red" id="set_w"></span>
                        </button>
                    </div>
                </div>
                <div id="kp_wykres"
                     style="min-width: 310px; max-width: 800px; height: 300px; margin: 0 auto" class="mb-4 mt-4"></div>
                <div class="row">

                    <div class="col-12 col-md-12">
                        <div class="profile-box info-box general card mb-4">

                            <header class="h6 row no-gutters align-items-center justify-content-between bg-primary text-auto p-4">
                                <div class="title">Koszty pracownika</div>
                            </header>

                            <div class="content p-4">
                                <table class="table table-striped table-bordered" id="table">
                                    <thead class="">
                                    <tr>
                                        <td>Pracownik (staż)</td>
                                        <td>UoP</td>
                                        <td>UZ</td>
                                        <td>Przychód</td>
                                        <td>Do ręki</td>
                                        <td>Delegacje</td>
                                        <td>Potrącenia</td>
                                        <td>Premie</td>
                                        <td>Zakupy</td>

                                        <td>Zus UoP</td>
                                        <td>Zus Uz</td>
                                        <td>KP</td>
                                        <td>K obrotowy</td>
                                        <td>% przychodu</td>
                                        <td>koszt godziny</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?PHP

                                    $koszty = 0;
                                    $wydatki = 0;
                                    $kapital_obrotowy_s = 0;
                                    $przychody_udzial = 0;
                                    $kosz_pracodawcy_suma = 0;
                                    $koszt_godziny_suma = 0;
                                    $koszt_expense_cost = 0;
                                    function mydivide($divisior, $div)
                                    {
                                        if ($div != 0) {
                                            $result = $divisior / $div;//is set to number divided by x
                                        } //if it is zero than set it to null
                                        else {
                                            $result = null;//is set to null
                                        }
                                        return $result;
                                    }

                                    foreach ($pracownicy as $p) {
                                        $kapital_obrotowy = bcadd($p['expense_cost'], $p['koszty_pracodawcy'], 2);
                                        $przychody_udzial = bcadd($przychody_udzial, $p['udzialy_kwota'], 2);
                                        echo "<tr>
                                                    <td>" . $p['name'] . " (" . $p['staz_'] . ")</td>
                                                      <td>" . $p['p_am'] . "</td>
                                                    <td>" . $p['a_am'] . "</td>
                                                    <td>" . $p['udzialy_kwota'] . "</td>
                                                    <td>" . $p['to_hand_cost'] . "</td>
                                                    <td>" . $p['delegation_cost'] . "</td>
                                                    <td>" . $p['deduction_cost'] . "</td>
                                                    <td>" . $p['extra_cost'] . "</td>
                                                    <td>" . $p['expense_cost'] . "</td>
                                                  
                                                    <td>" . $p['incost'] . "</td>
                                                    <td>" . $p['a_incost'] . "</td>
                                                    <td>" . $p['koszty_pracodawcy'] . "</td>
                                                    <td>" . $kapital_obrotowy . "</td>
                                                    <td>" . round((mydivide($p['udzialy_kwota'], $obliczenia['suma_przychodu'])) * 100) . '%  ' . "</td>
                                                    <td>" . $p['koszt_godziny'] . "</td>
                                                    
                                        </tr>";
                                        $kapital_obrotowy_s = bcadd($kapital_obrotowy_s, $kapital_obrotowy, 2);
                                        $kosz_pracodawcy_suma = bcadd($kosz_pracodawcy_suma, $p['koszty_pracodawcy'], 2);
                                        $koszt_godziny_suma = bcadd($koszt_godziny_suma, $p['koszt_godziny'], 2);
                                        $koszt_expense_cost = bcadd($koszt_expense_cost, $p['expense_cost'], 2);

                                    }

                                    $ms = array();
                                    $wwartosci = array();

                                    /* pobieranie ostatniego el tablicy - koszty pracodawcy */
                                    $lastvalue = end($fcf);
                                    $lastkey = key($fcf);

                                    $arr1 = array($lastkey => $lastvalue);

                                    array_pop($fcf);

                                    $arr1 = array_merge($arr1, $fcf);

                                    $lastelarray = reset($arr1);
                                    unset($lastelarray['pracownik_place']);
                                    foreach ($lastelarray as $key => $val) {

                                            $ms[] = "'" . $key . "'";
                                            $wwartosci[] = $val;

                                    }
            ?>

                                    </tbody>
                                </table>

                                <input type="hidden" id="ko" value="<?PHP echo pp($kapital_obrotowy_s); ?>">
                                <input type="hidden" id="ih" value="<?PHP echo $kp; ?>">
                                <input type="hidden" id="kp" value="<?PHP echo pp($kosz_pracodawcy_suma); ?>">
                                <input type="hidden" id="kh" value="<?PHP echo pp($koszt_godziny_suma); ?>">
                                <input type="hidden" id="p" value="<?PHP echo pp($obliczenia['suma_przychodu']); ?>">
                                <input type="hidden" id="w" value="<?PHP echo pp($koszt_expense_cost); ?>">
                            </div>
                        </div>
                    </div>


                </div>

            </div>


        </div>
    </div>
    </div>

    </div>
    <style>


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

        .top {
            margin-top: -45px !important;
        }


    </style>
    <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>"/>
</form>
<link rel="stylesheet" type="text/css"
      href="<?PHP echo base_url(); ?>assets/vendor/datetimepicker/css/bootstrap-material-datetimepicker.css"/>
<script type="text/javascript" language="javascript"
        src="<?PHP echo base_url(); ?>assets/vendor/datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.material.min.js"></script>
<link href="https://cdn.datatables.net/1.10.15/css/dataTables.material.min.css" rel="stylesheet">
<script>

    $(document).ready(function () {
        <?PHP if(!isset($_POST['inputZakresDat'])){ ?>
        var d = new Date();
        var n = d.getMonth() + 1;
        var y = d.getFullYear();


        $('#inputZakresDat').val(n);
        $('#year_picker').val(y);



        <?PHP }?>
        $("#set_ko").html($("#ko").val());
        $("#set_ih").html($("#ih").val());
        $("#set_kp").html($("#kp").val());
        $("#set_kh").html($("#kh").val());
        $("#set_p").html($("#p").val());
        $("#set_w").html($("#w").val());

        var tb;
        tb = $('#table').DataTable({
            responsive: true,
            "dom": '<"top"i>rt<"bottom"flp><"clear">',
            "language": {
                "url": "http://cdn.datatables.net/plug-ins/1.10.15/i18n/Polish.json"
            },
            "pageLength": 50
        });
        $('#dateTo,#dateFrom').bootstrapMaterialDatePicker({
            weekStart: 0,
            time: false
        });
        Highcharts.chart('kp_wykres', {
            chart: {
                zoomType: 'xy'
            },
            title: {
                text: 'Koszty pracownika'
            },
            xAxis: [{
                categories: [
                    <?php echo join($ms, ',') ?>, 'Kolumna porównawcza'
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
                name: 'Koszty pracodawcy',
                type: 'line',
                data: [<?php echo join($wwartosci, ',') ?>],
                tooltip: {
                    valueSuffix: ' zł',
                    pointFormat: "{point.y:.2f} zł"
                }

            },
            ]
        });

        $("#clear").click(function () {
            window.location = window.location.href;
        });
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
        $('#dateTo,#dateFrom').bootstrapMaterialDatePicker({
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
                // $(".dyearpicker").hide();
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

    });
</script>
