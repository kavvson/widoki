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

            <div class="widget-group row">

                <div class="col-2 col-xs-6 p-3">

                    <div class="widget widget3 card bg-orange text-auto">

                        <div class="widget-header pl-4 pr-2 row no-gutters align-items-center justify-content-between">

                            <div class="col">

                                <div class="row no-gutters align-items-center">

                                    <span class="h6">Zapłacono z własnej kieszeni</span>

                                </div>
                            </div>
                        </div>

                        <div class="widget-content p-4 text-center">

                            <div class="widget-content p-4 text-center">
                                <div class="pb-2 h3" id="ze_swojej">
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

                                    <span class="h6">Pasujące wpisy</span>

                                </div>
                            </div>


                        </div>

                        <div class="widget-content p-4 text-center">

                            <div class="widget-content p-4 text-center">
                                <div class="pb-2 h3" id="znaleziono">
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

                                    <span class="h6">Rozliczono w programie</span>

                                </div>
                            </div>


                        </div>

                        <div class="widget-content p-4 text-center">

                            <div class="widget-content p-4 text-center">
                                <div class="pb-2 h3" id="suma">
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

                                    <span class="h6">Nie rozliczono w programie</span>

                                </div>
                            </div>


                        </div>

                        <div class="widget-content p-4 text-center">

                            <div class="widget-content p-4 text-center">
                                <div class="pb-2 h3" id="nie_roz">
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

                                    <span class="h6">Suma wydatków</span>

                                </div>
                            </div>


                        </div>

                        <div class="widget-content p-4 text-center">

                            <div class="widget-content p-4 text-center">
                                <div class="pb-2 h3" id="suma_wyd">
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

                                    <span class="h6">Suma z wyciągów</span>

                                </div>
                            </div>


                        </div>

                        <div class="widget-content p-4 text-center">

                            <div class="widget-content p-4 text-center">
                                <div class="pb-2 h3" id="suma_karta">
                                    <img src="<?PHP echo base_url("assets/Spinner.gif"); ?>"
                                         style="width: 64px;height: 64px;">
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

            <div class="profile-box info-box general card mb-4">
                <header class="h6 row no-gutters align-items-center justify-content-between bg-primary text-auto p-4">
                    <div class="col-sm-2">Wyciągi z banku</div>

                    <div class="row no-gutters" style="display: -webkit-inline-box;">
                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                            <label for="regular1" class="control-label" style="width: 127px;">Miesiąc</label>
                            <select id="month_picker" class="form-control">
                                <option value="1">Styczeń</option>
                                <option value="2">Luty</option>
                                <option value="3">Marzec</option>
                                <option value="4">Kwiecień</option>
                                <option value="5">Maj</option>
                                <option value="6">Czerwiec</option>
                                <option value="7">Lipiec</option>
                                <option value="8">Sierpień</option>
                                <option value="9">Wrzesień</option>
                                <option value="10">Październik</option>
                                <option value="11">Listopad</option>
                                <option value="12">Grudzień</option>
                            </select>
                        </div>
                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                            <label for="regular1" class="control-label" style="width: 127px;">Rok</label>
                            <select id="year_picker" class="form-control">
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-2">
                        <button type="button" id="btn-reset" class="btn btn-default">Reset</button>

                </header>
            </div>

            <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead class="btn-primary bg-primary">
                <tr>
                    <th>id_trans</th>
                    <?PHP if (!isset($id)) { ?>
                        <th>Pracownik</th>
                    <?PHP } ?>
                    <th>Typ operacji</th>
                    <th>Data operacji</th>
                    <th>Data waluty</th>
                    <th>Kwota</th>
                    <th>Rozliczona kwota</th>
                    <th>Dotyczy wydatku</th>
                    <th>Opcje</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
            <!-- reczne rozliczanie -->

        </div>


    </div>
</div>
</div>
</div>


<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.material.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

<script type="text/javascript">
    function addCommas(t) {
        t += "", x = t.split("."), x1 = x[0], x2 = x.length > 1 ? "." + x[1] : "";
        for (var e = /(\d+)(\d{3})/; e.test(x1);) x1 = x1.replace(e, "$1 $2");
        return x1 + x2.replace(".", ",");
    }



    $(document).ready(function () {
        var d = new Date();
        var n = d.getMonth() + 1;
        var y = d.getFullYear();

        $('#month_picker').val(n);
        $('#year_picker').val(y);
        var table;
        table = $('#table').DataTable({

            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.
            //"bStateSave": true,
            "lengthMenu": [[10, 50, 200, -1], [10, 50, 200, "Wszystko"]],
            "sDom": '<"row view-filter"<"col-sm-12"<"clearfix">>><"row view-pager"<"col-sm-12"l<"text-center"ip>>>t',
            responsive: true,
            "language": {
                "url": "http://cdn.datatables.net/plug-ins/1.10.15/i18n/Polish.json",
            },
            "ajax": {
                "url": "<?php echo site_url('Place/ajax_list_karty') ?>",
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

                    $("#total_e").html(json.recordsFiltered);
                    $("#ze_swojej").html(addCommas(json.statystyka.ze_swojej));
                    $("#nie_roz").html(addCommas(json.statystyka.nie_roz));
                    $("#znaleziono").html(json.statystyka.znaleziono);
                    $("#suma_karta").html(addCommas(json.statystyka.suma_karta));
                    $("#suma_wyd").html(addCommas(json.statystyka.suma_wydatkow));
                    $("#suma").html(addCommas(json.statystyka.suma));


                    return json.data;
                }

            },
            "fnRowCallback": function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
                var roznica = (Math.abs(aData["kwota"])) - aData["rozliczona_kwota"];

                if (Math.abs(roznica) <= 0.1) {
                    $('td', nRow).css('background-color', 'rgba(0,255,0,0.33)');
                }
                if ((Math.abs(aData["kwota"]) > aData["rozliczona_kwota"]))
                {
                    if(aData["rozliczona_kwota"] == "0.00"){
                        $('td', nRow).css('background-color', 'rgba(255,0,0,0.33)');
                    }else{
                        $('td', nRow).css('background-color', 'rgba(255,155,0,0.33)');
                    }
                }
                if ((Math.abs(aData["kwota"]) == aData["rozliczona_kwota"]))
                {
                    $('td', nRow).css('background-color', 'rgba(0,255,0,0.33)');
                }

            },
            "fnInitComplete": function (oSettings, json) {
                $('#month_picker').on('change', function (e) {
                    table.search(this.value).draw();
                });

                $('#year_picker').on('change', function (e) {
                    table.search(this.value).draw();
                });

                $('#form-filter select').on('change', function () {
                    table.search(this.value).draw();
                    //alert(this.value);
                });
            },
            columns: [
                {data: "id_transkacji", className: "", visible: false},
                <?PHP if(!isset($id)) { ?>
                {data: "fk_pracownik"},
                <?PHP } ?>
                {data: "typ_transakcji", className: "draggable"},
                {data: "data_operacji"},
                {data: "data_waluty"},
                {
                    data: "kwota", "mRender": function (data, type, full) {
                    return Math.abs(full["kwota"]);
                }
                },
                {
                    data: "rozliczona_kwota", "mRender": function (data, type, full) {
                    return Math.abs(full["rozliczona_kwota"]);
                }
                },

                {
                    data: "dokument", "mRender": function (data, type, full) {
                    if (full['dokument'] == null) {
                        return;
                    } else {
                        var v = data.split(",");
                        var r = "";
                        jQuery.each(full["extra"].split(","), function (index, item) {

                            r += '( <a href="<?PHP echo base_url();?>Wydatki/Podglad/' + item + '">' + v[index] + '</a> )<br>';
                        });
                        return r;
                    }

                },
                    "defaultContent": "Nie odnaleziono"
                },
                {
                    "targets": [4],
                    "data": null,
                    "mRender": function (data, type, full) {
                        var out = "";
                        if(full['typ_transakcji'] === "Zaliczka")
                        {
                            out +='<i class="icon-document"></i> <a target="_blank" href="<?PHP echo base_url();?>PDF_Generator/Dokument/Zaliczka/' + full["id_transkacji"] + '">Pobierz dokument</a>';
                        }
                        return out;
                    }

                }
            ],

            "columnDefs": [
                {
                    "targets": [0], //first column / numbering column
                    "orderable": false, //set not orderable
                },

            ],
        });
        $('#btn-filter').click(function () { //button filter event click
            table.ajax.reload(); //just reload table
        });
        $('#btn-reset').click(function () { //button reset event click

            $('#month_picker').val(n);
            $('#year_picker').val(y);
            table.ajax.reload(); //just reload table
        });

    });



</script>

</body>
</html>