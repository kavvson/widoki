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



            <div class="profile-box info-box general card mb-4">
                <header class="h6 row no-gutters align-items-center justify-content-between bg-primary text-auto p-4">
                    <div class="col-sm-2">Zaliczki</div>

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
                        <button type="button" id="btn-reset" class="btn btn-default">Reset</button></div>
                    <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-2">
                        <button type="button" data-toggle="modal" data-target="#dodajZaliczke" href="#"
                                class="btn btn-secondary"><i class="icon-add"></i> Zarejestruj zaliczkę
                        </button>
                    </div>

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
                    <th>Kwota</th>
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
<div id="dodajZaliczke" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="dodajZaliczke"
     aria-hidden="true">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content">
            <div class="modal-header bg-green-400 text-white"><h4 class="modal-title" id="myLargeModalLabel">Zarejestuj
                    zaliczkę</h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid bd-example-row">
                    <form id="dodajZaliczke_f" name="dodajZaliczke_f" method="post">
                        <div class="profile-box info-box general card mb-4">
                            <header class="h6 bg-primary text-auto p-4">
                                <div class="title">Rejestracja zaliczki</div>
                            </header>
                            <div class="content p-4">
                                <div class="row">
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-6"><label
                                                for="regular1" class="control-label">Kwota zaliczki</label> <input
                                                type="text" name="cf_zaliczka_kwota" id="cf_zaliczka_kwota"
                                                class="form-control"/></div>
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-6"><label
                                                for="regular1" class="control-label">Opis</label> <input type="text"
                                                                                                         name="cf_zaliczka_opis"
                                                                                                         id="cf_zaliczka_opis"
                                                                                                         class="form-control"/>
                                    </div>
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-6"><label
                                                for="regular1" class="control-label">Data</label> <input type="text"
                                                                                                         name="cf_zaliczka_data"
                                                                                                         id="cf_zaliczka_data"
                                                                                                         class="form-control"/>
                                    </div>





                                    <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-6">
                                        <label for="regular1" class="control-label">Na rzecz</label>
                                        <select id="inputNaRzeczf" name="inputNaRzeczf"
                                                class="select-with-search pmd-select2 form-control">
                                            <option></option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-5 col-xs-offset-3">
                                <button type="submit" class="btn btn-primary fuse-ripple-ready">Dodaj zaliczkę</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Zakmnij</button>
                            </div>
                        </div>
                     </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.material.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<link rel="stylesheet" type="text/css"
      href="<?PHP echo base_url(); ?>assets/vendor/datetimepicker/css/bootstrap-material-datetimepicker.css"/>
<script src="<?PHP echo base_url(); ?>assets/sweetalert2.min.js"></script>
<link rel="stylesheet" href="<?PHP echo base_url(); ?>assets/sweetalert2.min.css">
<script type="text/javascript" language="javascript"
        src="<?PHP echo base_url(); ?>assets/vendor/datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
<script src="<?PHP echo base_url(); ?>assets/js/formValidation.min.js"></script>
<script src="<?PHP echo base_url(); ?>assets/js/fv.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js"
        type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.2.6/jquery.inputmask.bundle.min.js"></script>
<script type="text/javascript">
    function addCommas(t) {
        t += "", x = t.split("."), x1 = x[0], x2 = x.length > 1 ? "." + x[1] : "";
        for (var e = /(\d+)(\d{3})/; e.test(x1);) x1 = x1.replace(e, "$1 $2");
        return x1 + x2.replace(".", ",");
    }


    $("#inputNaRzeczf").select2({
        theme: "bootstrap",
        //minimumInputLength: 1,
        language: "pl",
        width: "300px",
        ajax: {
            type: "GET",
            url: '<?PHP echo base_url(); ?>Pracownicy/s2_lista',
            dataType: 'json',
            data: function (params) {
                return {
                    term: params.term,
                    page_limit: 100,
                <?php echo $this->security->get_csrf_token_name(); ?>:
                '<?php echo $this->security->get_csrf_hash(); ?>',
            }
                ;
            },
            processResults: function (data) {
                return {
                    results: data
                };
            }
        },
    });

    $(document).ready(function () {

        var csrfName2 = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash2 = '<?php echo $this->security->get_csrf_hash(); ?>';

        $("#cf_zaliczka_data").bootstrapMaterialDatePicker({weekStart: 0, time: !1}).on("change", function (e) {
            $("#dodajZaliczke_f").formValidation("revalidateField", "cf_zaliczka_data")
        });

        $("#cf_zaliczka_kwota").inputmask({
            alias: "currency",
            prefix: "Zł "
        });
        $("#dodajZaliczke_f").formValidation({
            framework: "bootstrap",
            icon: {
                valid: "glyphicon glyphicon-ok",
                invalid: "glyphicon glyphicon-remove",
                validating: "glyphicon glyphicon-refresh"
            },
            fields: {
                cf_zaliczka_opis: {validators: {notEmpty: {message: "Pole jest wymagane"}}},
                cf_zaliczka_kwota: {validators: {notEmpty: {message: "Pole jest wymagane"}}},
                cf_zaliczka_data: {validators: {notEmpty: {message: "Pole jest wymagane"}}},
                inputNaRzeczf: {validators: {notEmpty: {message: "Pole jest wymagane"}}},
            }
        }).on("success.form.fv", function (a) {
            var e = $(a.target);
            e.data("formValidation");
            a.preventDefault(), $.ajax({
                url: "<?PHP echo base_url();?>Pracownicy/DodajZaliczke/"+$("#inputNaRzeczf").select2('data')[0]['id'],
                method: "POST",
                data: e.serialize() + "&" + csrfName2 + "=" + csrfHash2,
                success: function (a) {
                    $(this).closest("form").find("input[type=text]").val(""), csrfName2 = a.regen.csrfName, csrfHash2 = a.regen.csrfHash, a.response.status && "Dodano" === a.response.message && setTimeout(function () {
                        location.reload()
                    }, 2e3), swal("Komunikat!", a.response.message, "info")
                }
            })
        });

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
                {data: "data_waluty"},
                {
                    data: "kwota", "mRender": function (data, type, full) {
                    return Math.abs(full["kwota"]);
                }
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