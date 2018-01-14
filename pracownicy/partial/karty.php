
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
-->
            <div class="profile-box info-box general card mb-4">
                <header class="h6 row no-gutters align-items-center justify-content-between bg-primary text-auto p-4">
                    <div class="col-sm-2"><!--Wyciągi z banku--> Zaliczki</div>

                    <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-4">

                        <button type="button" data-toggle="modal" data-target="#dodajZaliczke" href="#"
                                class="btn btn-secondary"><i class="icon-add"></i> Zarejestruj zaliczkę
                        </button>
                       <!-- <button type="button" id="uzupelnij"
                                class="btn btn-secondary"><i class="icon-add"></i> Uzupełnij
                        </button> -->
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
                    <!--<th>Data waluty</th>-->
                    <th>Kwota</th>
                    <!--  <th>Rozliczona kwota</th>
                      <th>Dotyczy wydatku</th>-->
                      <th>Czynność</th>
                  </tr>
                  </thead>
                  <tbody>
                  </tbody>
              </table>
              <!-- reczne rozliczanie -->
            <style>
                .txt-heading {
                    padding: 5px 10px;
                    font-size: 1.1em;
                    font-weight: bold;
                    color: #999;
                }

                #btnEmpty {
                    background-color: #E27E7E;
                    border: 0;
                    padding: 2px 10px;
                    color: #333;
                    font-size: 0.8em;
                    font-weight: normal;
                    float: right;
                    text-decoration: none;
                    cursor: pointer;
                }

                #shopping-cart .txt-heading {
                    border-top: #79b946 2px solid;
                    margin: 30px 0px;
                    background-color: #D3F5B8;
                }

                #cart-item {
                    height: 200px;
                    background-color: #FFFFFF;
                }

                #product-grid .txt-heading {
                    border-top: #F08426 2px solid;
                    background-color: #FFD0A6;
                }

                .product-item div {
                    text-align: center;
                    margin: 2px;
                }

                .clear-float {
                    clear: both;
                    margin-bottom: 40px;
                }


            </style>


            <div class="clear-float"></div>
            <!--
            <div id="shopping-cart">
                <div class="txt-heading">Rozliczanie ręczne</div>
                <form id="rozlicz_f" name="rozlicz_f" method="post" accept-charset="utf-8">
                    <table style="border-collapse:collapse;width:100%;" id="faktura_t" class="table table-bordered">
                        <thead>
                        <tr class="hclass">

                            <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;">Typ operacji
                            </td>
                            <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;" width="15%">
                                Kwota
                            </td>
                            <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;" width="55%">
                                Wydatek
                            </td>

                        </tr>
                        </thead>
                        <tbody id="cart-item">
                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-primary fuse-ripple-ready">Edytuj wydatek</button>
                </form>
            </div>
            -->
        </div>


    </div>
</div>
</div>
</div>

<?PHP

?>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.material.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script src="<?PHP echo base_url(); ?>assets/js/formValidation.min.js"></script>
<script src="<?PHP echo base_url(); ?>assets/js/fv.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js"
        type="text/javascript"></script>

<script src="<?PHP echo base_url(); ?>assets/sweetalert2.min.js"></script>
<link rel="stylesheet" href="<?PHP echo base_url(); ?>assets/sweetalert2.min.css">

<script type="text/javascript">

    function addCommas(t) {
        t += "", x = t.split("."), x1 = x[0], x2 = x.length > 1 ? "." + x[1] : "";
        for (var e = /(\d+)(\d{3})/; e.test(x1);) x1 = x1.replace(e, "$1 $2");
        return x1 + x2.replace(".", ",");
    }


    var table;
    var $form = $('#rozlicz_f')
    fv = $form.data('formValidation');
    $(document).ready(function () {

        function display_notif(msg) {
            new PNotify({
                text: msg,
                confirm: {
                    confirm: true,
                    buttons: [
                        {
                            text: 'Zakmnij',
                            addClass: 'btn btn-link',
                            click: function (notice) {
                                notice.remove();
                            }
                        },
                        null
                    ]
                },
                buttons: {
                    closer: false,
                    sticker: false
                },
                animate: {
                    animate: true,
                    in_class: 'slideInDown',
                    out_class: 'slideOutUp'
                },
                addclass: 'md multiline action-on-bottom'
            });
        }

        var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
        /*
                $('#rozlicz_f').formValidation({
                    framework: 'bootstrap',
                    fields: {}
                }).on('success.form.fv', function (e) {
                    var $form = $(e.target),
                        fv = $form.data('formValidation');
                    var formData = new FormData(this);
                    formData.append(csrfName, csrfHash);
                    e.preventDefault();

                    if ($("span").hasClass("bg-danger")) {
                        display_notif("Kwota wydatku jest większa od kwoty z wyciągu");
                        return;
                    }

                    var tablica_wydatki = [];
                    var transakcjerowCount = $('#cart-item tr').length;
                    var transakcjeWrowCount = $('#cart-item .deletecontent').length;
                    var match = 0;
                    $('#cart-item > tr').each(function () {

                        $(this).find('td:last').each(function () {

                            $(this).find('select').each(function () {
                                var data2 = $(this).select2('data');

                                if (data2[0].id) {
                                    tablica_wydatki.push(data2[0].id);
                                    match++;
                                }
                            })
                        });
                    });
                    var hasDups = !tablica_wydatki.every(function (v, i) {
                        return tablica_wydatki.indexOf(v) == i;
                    });


                    if (transakcjerowCount == 0) {
                        display_notif("Dodaj conajmniej jedną transakcję");
                        return;
                    }
                    if (transakcjeWrowCount > match || transakcjerowCount > match) {
                        display_notif("Uzupełnij wszystkie pola z wydatkami");
                        return;
                    }

                    if (hasDups) {
                        display_notif("Nie można przypisać tego samego wydatku do kilku płatności");
                        return;
                    }

                    $.ajax({

                type: "POST",
                data: formData,
                mimeType: "multipart/form-data",
                contentType: false,
                dataType: 'json',
                cache: false,
                processData: false,
                success: function (data) {
                    $(this).closest('form').find("input[type=text]").val("");
                    csrfName = data.regen.csrfName;
                    csrfHash = data.regen.csrfHash;
                    if (data.response.status) {
                        if (data.response.message === "Zmodyfikowano") {
                            swal(
                                'Rozliczono!',
                                'Udało się rozliczyć płatność',
                                'success'
                            )
                            location.reload();
                        }
                    }
                }
            });
        }).on('err.field.fv', function (e, data) {
            if (data.fv.getSubmitButton()) {
                data.fv.disableSubmitButtons(false);
            }
        }).on('success.field.fv', function (e, data) {
            if (data.fv.getSubmitButton()) {
                data.fv.disableSubmitButtons(false);
            }
        });
*/
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
                    /*
                                        $("#total_e").html(json.recordsFiltered);
                                        $("#ze_swojej").html(addCommas(json.statystyka.ze_swojej));
                                        $("#nie_roz").html(addCommas(json.statystyka.nie_roz));
                                        $("#znaleziono").html(json.statystyka.znaleziono);
                                        $("#suma_karta").html(addCommas(json.statystyka.suma_karta));
                                        $("#suma_wyd").html(addCommas(json.statystyka.suma_wydatkow));
                                        $("#suma").html(addCommas(json.statystyka.suma));



                    */
                    return json.data;
                }

            },
            "fnRowCallback": function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
                /*
                                var roznica = (Math.abs(aData["kwota"])) - aData["rozliczona_kwota"];

                                if (Math.abs(roznica) <= 0.1) {
                                    $('td', nRow).css('background-color', 'rgba(0,255,0,0.33)');
                                }
                                if ((Math.abs(aData["kwota"]) > aData["rozliczona_kwota"])) {
                                    if (aData["rozliczona_kwota"] == "0.00") {
                                        $('td', nRow).css('background-color', 'rgba(255,0,0,0.33)');
                                    } else {
                                        $('td', nRow).css('background-color', 'rgba(255,155,0,0.33)');
                                    }
                                }
                                if ((Math.abs(aData["kwota"]) == aData["rozliczona_kwota"])) {
                                    $('td', nRow).css('background-color', 'rgba(0,255,0,0.33)');
                                }
                */
            },
            "fnInitComplete": function (oSettings, json) {


                $('#month_picker').on('change', function (e) {
                    table.search(this.value).draw();
                });

                $('#year_picker').on('change', function (e) {
                    table.search(this.value).draw();
                });

                $('#form-filter-k select').on('change', function () {
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
                        if (full['typ_transakcji'] === "Zaliczka") {
                            out += '<i class="icon-document"></i> <a target="_blank" href="<?PHP echo base_url();?>PDF_Generator/Dokument/Zaliczka/' + full["id_transkacji"] + '">Pobierz dokument</a>';
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
    });
</script>
</body>
</html>
