<div class="doc page-layout simple full-width">
    <div class="page-content row p-12">

        <!-- STANDARD ALERTS -->
        <div class="col-12 col-md-12">

            <link href="https://cdn.datatables.net/1.10.15/css/dataTables.material.min.css" rel="stylesheet">

            <link rel="stylesheet" type="text/css"
                  href="<?PHP echo base_url(); ?>assets/js/select2/css/select2.min.css"/>
            <link rel="stylesheet" type="text/css"
                  href="<?PHP echo base_url(); ?>assets/js/select2/css/select2-bootstrap.css"/>
            <link rel="stylesheet" type="text/css"
                  href="<?PHP echo base_url(); ?>assets/js/select2/css/pmd-select2.css"/>
<!--
            <div class="widget-group row">

                <div class="col-2 col-xs-6 p-3">

                    <div class="widget widget3 card bg-orange text-auto">

                        <div class="widget-header pl-4 pr-2 row no-gutters align-items-center justify-content-between">

                            <div class="col">

                                <div class="row no-gutters align-items-center">

                                    <span class="h6">Brutto</span>

                                </div>
                            </div>
                        </div>

                        <div class="widget-content p-4 text-center">

                            <div class="widget-content p-4 text-center">
                                <div class="pb-2 h3" id="Brutto">
                                    <img src="<?PHP echo base_url("assets/Spinner.gif"); ?>"
                                         style="width: 64px;height: 64px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2 col-xs-6 p-3">

                    <div class="widget widget3 card bg-green text-auto">

                        <div class="widget-header pl-4 pr-2 row no-gutters align-items-center justify-content-between">

                            <div class="col">

                                <div class="row no-gutters align-items-center">

                                    <span class="h6">Zus pracownik</span>

                                </div>
                            </div>


                        </div>

                        <div class="widget-content p-4 text-center">

                            <div class="widget-content p-4 text-center">
                                <div class="pb-2 h3" id="Zus_pracownik">
                                    <img src="<?PHP echo base_url("assets/Spinner.gif"); ?>"
                                         style="width: 64px;height: 64px;">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-2 col-xs-6 p-3">

                    <div class="widget widget3 card bg-purple text-auto">

                        <div class="widget-header pl-4 pr-2 row no-gutters align-items-center justify-content-between">

                            <div class="col">

                                <div class="row no-gutters align-items-center">

                                    <span class="h6">Zus pracodawca</span>

                                </div>
                            </div>


                        </div>

                        <div class="widget-content p-4 text-center">

                            <div class="widget-content p-4 text-center">
                                <div class="pb-2 h3" id="Zus_pracodawca ">
                                    <img src="<?PHP echo base_url("assets/Spinner.gif"); ?>"
                                         style="width: 64px;height: 64px;">
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-2 col-xs-6 p-3">

                    <div class="widget widget3 card bg-red text-auto">

                        <div class="widget-header pl-4 pr-2 row no-gutters align-items-center justify-content-between">

                            <div class="col">

                                <div class="row no-gutters align-items-center">

                                    <span class="h6">Zus łącznie</span>

                                </div>
                            </div>


                        </div>

                        <div class="widget-content p-4 text-center">

                            <div class="widget-content p-4 text-center">
                                <div class="pb-2 h3" id="Zus_lacznie">
                                    <img src="<?PHP echo base_url("assets/Spinner.gif"); ?>"
                                         style="width: 64px;height: 64px;">
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-2 col-xs-6 p-3">

                    <div class="widget widget3 card bg-blue-100 text-auto">

                        <div class="widget-header pl-4 pr-2 row no-gutters align-items-center justify-content-between">

                            <div class="col">

                                <div class="row no-gutters align-items-center">

                                    <span class="h6">Do wypłaty</span>

                                </div>
                            </div>


                        </div>

                        <div class="widget-content p-4 text-center">

                            <div class="widget-content p-4 text-center">
                                <div class="pb-2 h3" id="Do_wyplaty">
                                    <img src="<?PHP echo base_url("assets/Spinner.gif"); ?>"
                                         style="width: 64px;height: 64px;">
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-2 col-xs-6 p-3">

                    <div class="widget widget3 card bg-amber text-auto">

                        <div class="widget-header pl-4 pr-2 row no-gutters align-items-center justify-content-between">

                            <div class="col">

                                <div class="row no-gutters align-items-center">

                                    <span class="h6">Obciążenia</span>

                                </div>
                            </div>


                        </div>

                        <div class="widget-content p-4 text-center">

                            <div class="widget-content p-4 text-center">
                                <div class="pb-2 h3" id="obciazenia">
                                    <img src="<?PHP echo base_url("assets/Spinner.gif"); ?>"
                                         style="width: 64px;height: 64px;">
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
-->
            <div class="col-12 col-md-12">

                <div class="profile-box info-box general card mb-4">
                    <header class="h6 row no-gutters align-items-center justify-content-between bg-primary text-auto p-4">
                        <div class="title">Umowy o pracę</div>
                    </header>

                    <div class="content p-4">

                        <div class="row col-lg-12 text-white">
                            <div class="col-md-3"></div>

                            <div class="px-4 py-2 bg-primary" id="curr_brutto1"></div>
                            <div class="bg-primary px-4 py-2" id="curr_netto1"></div>
                            <div class="bg-primary px-4 py-2" id="curr_vat1"><img
                                        src="<?PHP echo base_url() . 'assets/grocery_crud/css/jquery_plugins/file_upload/loading.gif'; ?>">
                            </div>
                            <div class="bg-primary px-4 py-2" id="curr_vat12"></div>
                            <div class="bg-primary px-4 py-2" id="pozostala_kwota1"></div>
                            <div class="bg-primary px-4 py-2" id="zaplacona_kwota1"></div>
                        </div>
                        <table id="t2" class="table display table-striped table-bordered" cellspacing="0" width="100%">
                            <thead class="btn-primary bg-primary">
                            <tr>
                                <th>id_placy</th>
                                <th>Pracownik</th>
                                <th>Miesiąc</th>
                                <th>Data wypłaty</th>
                                <th>Kwota brutto</th>
                                <th>Zus Pracownik</th>
                                <th>Zus Pracodawca</th>
                                <th>Zus Łącznie</th>
                                <th>Do wypłaty</th>
                                <th>Obciążenie</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>

                    </div>


                </div>

            </div>


        </div>

        <div class="col-12 col-md-12">

            <div class="profile-box info-box general card mb-4">
                <header class="h6 row no-gutters align-items-center justify-content-between bg-primary text-auto p-4">
                    <div class="title">Umowy zlecenia</div>
                </header>

                <div class="content p-4">

                    <div class="row col-lg-12 text-white">
                        <div class="col-md-3"></div>
                        <div class="px-4 py-2 bg-primary" id="curr_brutto2"></div>
                        <div class="bg-primary px-4 py-2" id="curr_netto2"></div>
                        <div class="bg-primary px-4 py-2" id="curr_vat2"><img
                                    src="<?PHP echo base_url() . 'assets/grocery_crud/css/jquery_plugins/file_upload/loading.gif'; ?>">
                        </div>
                        <div class="bg-primary px-4 py-2" id="curr_vat22"></div>
                        <div class="bg-primary px-4 py-2" id="pozostala_kwota2"></div>
                        <div class="bg-primary px-4 py-2" id="zaplacona_kwota2"></div>


                    </div>

                    <table id="table" class="table display table-striped table-bordered" cellspacing="0" width="100%">
                        <thead class="btn-primary bg-primary">
                        <tr>
                            <th>id_umowy</th>
                            <th>Umowa</th>
                            <?PHP if (!isset($id)) { ?>
                                <th>Pracownik</th>
                            <?PHP } ?>
                            <th>Data zakończenia</th>
                            <th>Data rozpoczęcia</th>
                            <th>Zus Pracownik</th>
                            <th>Zus Pracodawca</th>
                            <th>Zus Łącznie</th>
                            <th>Do wypłaty</th>
                            <th>Brutto</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>

                </div>


            </div>

        </div>


    </div>
</div>
</div>
<div id="obIkon" class="modal fade" role="dialog"
     aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-body">

                <div class="row">
                    <div class="col-lg-12">

                        <div class="profile-box info-box contact card mb-4">

                            <header class="h6 bg-primary text-auto p-4">
                                <div class="title">Tabela - kolory wierszy</div>
                            </header>

                            <div class="content p-4">

                                <div class="info-line mb-6">
                                    <div class="info">
                                        <div class="row no-gutters ripple p-2 fuse-ripple-ready"
                                             style="background-color: rgba(255, 0, 0, 0.33);">
                                            wpis po terminie
                                        </div>
                                    </div>
                                    <div class="info">
                                        <div class="row no-gutters ripple p-2 fuse-ripple-ready"
                                             style="background-color: rgba(255,144,0,0.33)">
                                            należy opłacić dzisiaj
                                        </div>
                                    </div>
                                    <div class="info">
                                        <div class="row no-gutters ripple p-2 fuse-ripple-ready"
                                             style="background-color: rgba(0,255,0,0.33)">
                                            opłacony
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="profile-box info-box contact card mb-4">

                            <header class="h6 bg-primary text-auto p-4">
                                <div class="title">Legenda - ikony</div>
                            </header>

                            <div class="content p-4">
                                <h5>Priorytet</h5>

                                <div class="row col-lg-12">
                                    <div class="col-lg-4">

                                        <i class="icon icon-hexagon-outline s40"></i> Normalny

                                    </div>
                                    <div class="col-lg-4">

                                        <i class="icon icon-arrow-up-bold-hexagon-outline text-orange s40"></i> Istotny

                                    </div>
                                    <div class="col-lg-4">

                                        <i class="icon icon-alert-octagon text-red s40"></i> Pilny

                                    </div>

                                </div>
                            </div>
                            <div class="content p-4">
                                <h5>Metoda płatności</h5>

                                <div class="row col-lg-12">
                                    <div class="col-lg-4">
                                        <i class="icon icon-cash-100 s40"></i> Gotówka
                                    </div>
                                    <div class="col-lg-4">
                                        <i class="icon icon-bank s40"></i> Przelew
                                    </div>
                                    <div class="col-lg-4">
                                        <i class="icon icon-credit-card-multiple s40"></i> Karta
                                    </div>
                                </div>
                            </div>

                            <div class="content p-4">
                                <h5>Statusy - Faktury</h5>

                                <div class="row col-lg-12">
                                    <div class="col-lg-6">

                                        <i class="icon icon-format-list-numbers s40"></i> Rozbita

                                    </div>
                                    <div class="col-lg-6">

                                        <i class="icon-checkbox-marked icon text-green"></i> Opłacono

                                    </div>
                                </div>
                                <div class="row col-lg-12">
                                    <div class="col-lg-6">

                                        <i class="icon-division-box icon"></i> Częściowo opłacona

                                    </div>
                                    <div class="col-lg-6">

                                        <i class="icon-file-excel-box icon"></i> Nie opłacono

                                    </div>
                                </div>
                            </div>

                            <div class="content p-4">
                                <h5>Pozostałe</h5>

                                <div class="row col-lg-12">
                                    <div class="col-lg-6">
                                        <i class="icon-file-hidden icon s40"></i> Brak skanu dokumentu
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
                </div>
            </div>

        </div>

    </div>
</div>


</div>

<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.material.min.js"></script>

<script type="text/javascript" src="<?PHP echo base_url(); ?>assets/js/select2/js/select2.full.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/i18n/pl.js"></script>
<script type="text/javascript" src="<?PHP echo base_url(); ?>assets/js/select2/js/pmd-select2.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/plug-ins/1.10.15/dataRender/ellipsis.js"></script>
<link rel="stylesheet" type="text/css"
      href="<?PHP echo base_url(); ?>assets/vendor/datetimepicker/css/bootstrap-material-datetimepicker.css"/>
<script type="text/javascript" language="javascript"
        src="<?PHP echo base_url(); ?>assets/vendor/datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.2.6/jquery.inputmask.bundle.min.js"></script>
<script src="<?PHP echo base_url(); ?>assets/js/formValidation.min.js"></script>
<script src="<?PHP echo base_url(); ?>assets/js/fv.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js"
        type="text/javascript"></script>
<script type="text/javascript">
    function addCommas(t) {
        t += "", x = t.split("."), x1 = x[0], x2 = x.length > 1 ? "." + x[1] : "";
        for (var e = /(\d+)(\d{3})/; e.test(x1);) x1 = x1.replace(e, "$1 $2");
        return x1 + x2.replace(".", ",")
    }

    $.fn.dataTable.render.ellipsis = function (t, e, n) {
        var r = function (t) {
            return t.replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;").replace(/"/g, "&quot;")
        };
        return function (a, i, l) {
            if ("display" !== i) return a;
            if ("number" != typeof a && "string" != typeof a) return a;
            if ((a = a.toString()).length < t) return a;
            var p = a.substr(0, t - 1);
            return e && (p = p.replace(/\s([^\s]*)$/, "")), n && (p = r(p)), '<span class="ellipsis" title="' + r(a) + '">' + p + "&#8230;</span>"
        }
    }, $.fn.blink = function (t) {
        var e = $(this);
        t = t - 1 || 0, e.animate({opacity: .25}, 555, function () {
            e.animate({opacity: 1}, 555, function () {
                t > 0 && e.blink(t)
            })
        })
    };



    function calc_totals() {
        /*
        $("#curr_netto1").html("Zus pracownik : " + addCommas(json.agregacja.zus_pracownik) + " zł");
        $("#curr_vat1").html("Zus pracodawca : " + addCommas(json.agregacja.zus_pracodawca) + " zł");
        $("#curr_vat12").html("Zus łącznie : " + addCommas(json.agregacja.zus_lacznie) + " zł");
        $("#curr_brutto1").html("Brutto : " + addCommas(json.agregacja.brutto) + " zł");

        $("#pozostala_kwota1").html("Do wypłaty : " + addCommas(json.agregacja.do_wyplaty) + " zł");
        $("#zaplacona_kwota1").html("Obciążenie : " + addCommas(json.agregacja.obciazenie) + " zł");
        $("#obciazenia").html(addCommas(json.agregacja.obciazenie) + " zł");
        */

    }

    function display_totals() {
        $("#Zus_pracownik").html(addCommas(1) + " zł");
        $("#Zus_pracodawca").html(addCommas(1) + " zł");
        $("#Zus_lacznie").html(addCommas(1) + " zł");
        $("#Brutto").html(addCommas(br) + " zł");
        $("#Do_wyplaty").html(addCommas(1) + " zł");
    }


    var table;

    $(document).ready(function () {

        var status = 0;
        table2 = $('#t2').DataTable({

            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.
            "bStateSave": true,
            "lengthMenu": [[10, 50, 200, -1], [10, 50, 200, "Wszystko"]],
            "sDom": '<"row view-filter"<"col-sm-12"<"clearfix">>><"row view-pager"<"col-sm-12"l<"text-center"ip>>>t',
            responsive: true,
            "language": {
                "url": "http://cdn.datatables.net/plug-ins/1.10.15/i18n/Polish.json"
            },

            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo site_url('Place/ajax_list') ?>",
                "type": "POST",
                "data": function (data) {
                    data.s_pracownik = <?PHP echo $id;?>;
                    data.customMonth = $('#month_picker').val();
                    data.customYear = $('#year_picker').val();
                    data.<?php echo $this->security->get_csrf_token_name(); ?> = '<?php echo $this->security->get_csrf_hash(); ?>';

                },
                "dataSrc": function (json) {


                    $("#curr_netto1").html("Zus pracownik : " + addCommas(json.agregacja.zus_pracownik) + " zł");
                    $("#curr_vat1").html("Zus pracodawca : " + addCommas(json.agregacja.zus_pracodawca) + " zł");
                    $("#curr_vat12").html("Zus łącznie : " + addCommas(json.agregacja.zus_lacznie) + " zł");
                    $("#curr_brutto1").html("Brutto : " + addCommas(json.agregacja.brutto) + " zł");

                    $("#pozostala_kwota1").html("Do wypłaty : " + addCommas(json.agregacja.do_wyplaty) + " zł");
                    $("#zaplacona_kwota1").html("Obciążenie : " + addCommas(json.agregacja.obciazenie) + " zł");
                    $("#obciazenia").html(addCommas(json.agregacja.obciazenie) + " zł");


                    return json.data;
                }
            },
            "fnInitComplete": function (oSettings, json) {
                $('#month_picker').on('change', function (e) {
                    table2.search(this.value).draw();
                });
                status = 1;
                br = json.agregacja.brutto;
                console.log(json);
                $('#year_picker').on('change', function (e) {
                    table2.search(this.value).draw();
                });

                $("input[name=inputNrFaktury").on("change paste keyup", function () {
                    if (this.value.length >= 3) {
                        table2.search(this.value).draw();
                    }
                    if (this.value.length == 0) {
                        table2.search(this.value).draw();
                    }
                });

                $("input[name=statusPlatnosci").on("change", function () {

                    table2.search(this.value).draw();
                });
                $('#form-filter select').on('change', function () {
                    table2.search(this.value).draw();
                    //alert(this.value);
                });
            },
            columns: [

                {data: "id_placy", className: "", visible: false},
                {data: "fk_prac"},
                {data: "miesiac"},
                {data: "data_wyplaty"},
                {data: "brutto"},
                {data: "zus_pracownik"},
                {data: "zus_pracodawca"},
                {data: "zus_lacznie"},
                {data: "do_wyplaty"},
                {data: "obciazenie"},


            ],
            //Set column definition initialisation properties.
            "columnDefs": [
                {
                    "targets": [0], //first column / numbering column
                    "orderable": false, //set not orderable
                },
                {
                    targets: [8],
                    render: $.fn.dataTable.render.ellipsis(10)
                }
            ],
        });

        table = $('#table').DataTable({

            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.
            "bStateSave": true,
            "lengthMenu": [[10, 50, 200, -1], [10, 50, 200, "Wszystko"]],
            "sDom": '<"row view-filter"<"col-sm-12"<"clearfix">>><"row view-pager"<"col-sm-12"l<"text-center"ip>>>t',
            responsive: true,
            "language": {
                "url": "http://cdn.datatables.net/plug-ins/1.10.15/i18n/Polish.json",

            },

            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo site_url('Place/ajax_list_umowy') ?>",
                "type": "POST",
                "data": function (data) {
                    <?PHP if(isset($id)) { ?>
                    data.s_pracownik = "<?PHP echo $id;?>";
                    <?PHP }?>
                    data.<?php echo $this->security->get_csrf_token_name(); ?> = '<?php echo $this->security->get_csrf_hash(); ?>';
                    data.customMonth = $('#month_picker').val();
                    data.customYear = $('#year_picker').val();
                },
                "dataSrc": function (json) {
                    $("#curr_netto2").html("Zus pracownik : " + addCommas(Math.round(json.agregacja.zus_pracownik)) + " zł");
                    $("#curr_vat2").html("Zus pracodawca : " + addCommas(Math.round(json.agregacja.zus_pracodawca)) + " zł");
                    $("#curr_vat22").html("Zus łącznie : " + addCommas(Math.round(json.agregacja.zus_lacznie)) + " zł");
                    $("#curr_brutto2").html("Brutto : " + addCommas(Math.round(json.agregacja.brutto)) + " zł");
                    $("#pozostala_kwota2").html("Do wypłaty : " + addCommas(Math.round(json.agregacja.do_wyplaty)) + " zł");

                    return json.data;
                }
            },
            "fnInitComplete": function (oSettings, json) {
                $('#month_picker').on('change', function (e) {
                    table.search(this.value).draw();
                });

                $('#year_picker').on('change', function (e) {
                    table.search(this.value).draw();
                });
            },
            columns: [


                {data: "id_umowy", className: "", visible: false},
                {data: "umowa"},
                <?PHP if(!isset($id)) { ?>
                {data: "fk_pracownik"},
                <?PHP } ?>
                {data: "data_zakonczenia"},
                {data: "data_rozpoczecia"},
                {data: "zus_pracownik"},
                {data: "zus_pracodawca"},
                {data: "zus_lacznie"},
                {data: "do_wyplaty"},
                {data: "brutto"},

            ],
            //Set column definition initialisation properties.
            "columnDefs": [
                {
                    "targets": [0], //first column / numbering column
                    "orderable": false, //set not orderable
                },
                {
                    targets: [8],
                    render: $.fn.dataTable.render.ellipsis(10)
                }
            ],
        });

    });
    // Dodawanie wydatku

</script>

</body>
</html>