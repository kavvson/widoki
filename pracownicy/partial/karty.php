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

                    <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-4">

                        <button type="button" data-toggle="modal" data-target="#dodajZaliczke" href="#"
                                class="btn btn-secondary"><i class="icon-add"></i> Zarejestruj zaliczkę
                        </button>
                        <button type="button" id="uzupelnij"
                                class="btn btn-secondary"><i class="icon-add"></i> Uzupełnij
                        </button>
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
                url: '<?PHP echo base_url(); ?>Pracownicy/RozliczKarty',
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

                            r += '( <span class="removeExp text-red" data-parent="' + full["id_transkacji"] + '" data-id="' + item + '" data-val="' + v[index] + '">X</span> - <a href="<?PHP echo base_url();?>Wydatki/Podglad/' + item + '">' + v[index] + '</a> )<br>';
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
                        if (full['typ_transakcji'] === "Zaliczka") {
                            out += '<i class="icon-document"></i> <a target="_blank" href="<?PHP echo base_url();?>PDF_Generator/Dokument/Zaliczka/' + full["id_transkacji"] + '">Pobierz dokument</a> | ';
                        }
                        out += "<button>Rozlicz</button>";
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
        var a = [];
        var c = 0;
        var csrfName2 = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash2 = '<?php echo $this->security->get_csrf_hash(); ?>';
        $("#uzupelnij").click(function () {
            var post_data = {
                'customMonth': $('#month_picker').val(),
                'customYear': $('#year_picker').val(),
                'token': csrfHash2
            };
            $.ajax({
                url: '<?PHP echo base_url(); ?>Pracownicy/Uzupelnij/<?PHP echo $id;?>',
                dataType: 'json',
                type: "POST",
                data: post_data,
                success: function (data) {
                    if (data.response.status) {
                        swal(
                            'Komunikat!',
                            data.response.message,
                            'success'
                        ).then(function() {
                            location.reload();
                        });


                    }else{
                        swal(
                            'Komunikat!',
                            data.response.message,
                            'warning'
                        )
                    }
                }
            });
        })

        $("#table").on('click', '.removeExp', function () {

            var parent = $(this).data('parent');
            var id = $(this).data('id');
            var val = $(this).data('val');

            swal({
                title: 'Czy chcesz odpiąć wydatek ' + $(this).data('val') + ' ?',
                text: "",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Tak',
                cancelButtonText: 'Nie',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false
            }).then(function () {
                var post_data = {
                    'parent': parent,
                    'id': id,
                    'val': val,
                    'token': csrfHash2
                };
                $.ajax({
                    url: '<?PHP echo base_url(); ?>Pracownicy/OdepnijZKarty',
                    dataType: 'json',
                    type: "POST",
                    data: post_data,
                    success: function (data) {
                        $(this).closest('form').find("input[type=text]").val("");
                        csrfName2 = data.regen.csrfName;
                        csrfHash2 = data.regen.csrfHash;
                        if (data.response.status) {
                            if (data.response.message === "Zmodyfikowano") {
                                swal(
                                    'Odpięto wydatek !',
                                    '',
                                    'success'
                                );
                                location.reload();
                            }
                        }
                    }
                });

            }, function (dismiss) {
                if (dismiss === 'cancel') {
                    swal(
                        'Anulowano',
                        'Nie odpięto wydatku',
                        'error'
                    )
                }
            });
        });


        $('#table').on('click', 'button', function () {
            var data = table.row($(this).parents('tr')).data();

            if (Math.abs(data["kwota"]) == data["rozliczona_kwota"]) {

                swal(
                    'Uwaga',
                    'Podana transakcja jest już rozliczona, jeżeli chcesz ją edytować to usuń powiązany wydatek i dodaj nowy',
                    'warning'
                )
                return;
            }

            if (jQuery.inArray(data["id_transkacji"], a) == -1) {

                if (data['dokument'] == null) {

                    var ddate = new Date().valueOf();
                    var newRow = $("<tr id='" + data.id_transkacji + "'>");
                    var cols = "";

                    cols += '<td>' + data["typ_transakcji"] + '</td>';
                    cols += '<td><span id="org' + data.id_pracownika + '' + ddate + '">' + data["kwota"] + '</span> / <span id="calc' + data.id_pracownika + '' + ddate + '"></span></td>';
                    cols += '<td>' +
                        '<div class="form-group row">' +
                        '<div class="col-lg-12"><button class="btn btn-primary btn-xs" id="newrow' + data.id_transkacji + '" type="button">Dodaj wydatek</button><button class="btn btn-danger btn-xs delmain' + data.id_pracownika + '' + ddate + '"  type="button">-</button></div>' +
                        '</div></td>';

                    newRow.append(cols);
                    $("#cart-item").append(newRow);
                    a.push(data["id_transkacji"]);
                } else {
                    var ddate = new Date().valueOf();
                    var newRow = $("<tr id='" + data.id_transkacji + "'>");
                    var cols = "";

                    cols += '<td>' + data["typ_transakcji"] + '</td>';
                    cols += '<td>Karta : <span id="org' + data.id_pracownika + '' + ddate + '">' + data["kwota"] + '</span><br>Suma : <span id="calc' + data.id_pracownika + '' + ddate + '"></span> <br> Już rozliczona <span id="existing' + data.id_pracownika + '' + ddate + '">' + data["rozliczona_kwota"] + '</span></td>';
                    cols += '<td>' +
                        '<div class="form-group row">' +
                        '<div class="col-lg-12"><button class="btn btn-primary btn-xs" id="newrow' + data.id_transkacji + '" type="button">Dodaj wydatek</button><button class="btn btn-danger btn-xs delmain' + data.id_pracownika + '' + ddate + '"  type="button">-</button></div>' +
                        '</div></td>';

                    newRow.append(cols);
                    $("#cart-item").append(newRow);
                    a.push(data["id_transkacji"]);

                    // existing
                }
            } else {

                return;
            }

            $('.delmain' + data.id_pracownika + '' + ddate + '').click(function () {
                $(this).closest('tr[id="' + data.id_transkacji + '"]').remove();
                recalcforrow(data.id_transkacji, data.id_pracownika, ddate);
                a.splice($.inArray(data.id_pracownika, a), 1);
            });

            $("#newrow" + data.id_transkacji).click(function (ev) {
                    var row = ($(this).closest("tr"));
                    var lasttd = row.find('td:last');

                    lasttd.append('<div class="form-group row deletecontent"><div class="col-lg-10"><select name="data[Transakcja][' + data.id_transkacji + '][Wydatek][' + c + ']" class="select-with-search pmd-select2 form-control inputKategoria' + data.id_pracownika + '' + c + '">' +
                        '<option></option></select></div>' +
                        '<div class="col-lg-2"><button class="btn btn-danger btn-xs del' + data.id_pracownika + '' + ddate + '"  type="button">-</button></div>' +
                        '</div></td><input type="hidden" name="data[Transakcja][Pracownik]" value="' + data.id_pracownika + '">'
                    );
                    $('.inputKategoria' + data.id_pracownika + '' + c).select2({
                        ajax: {
                            url: '<?PHP echo base_url(); ?>Wydatki/s2_wydatki_pracownika/' + data.id_pracownika,
                            dataType: 'json',
                            delay: 250,
                            data: function (params) {
                                return {
                                    q: params.term, // search term
                                    //page: 100,
                                    customMonth: $('#month_picker').val(),
                                    customYear: $('#year_picker').val(),
                                };
                            },
                            processResults: function (data, params) {
                                params.page = params.page || 1;
                                return {
                                    results: data.items,

                                };
                            },
                        },
                        escapeMarkup: function (markup) {
                            return markup;
                        },
                        // minimumInputLength: 1,
                        templateResult: formatRepo,
                        templateSelection: formatRepoSelection
                    });


                    $('.del' + data.id_pracownika + '' + ddate + '').click(function () {
                        $(this).closest('.deletecontent').remove();
                        recalcforrow(data.id_transkacji, data.id_pracownika, ddate);

                    });
                    $('.inputKategoria' + data.id_pracownika + '' + c).on("change", function (e) {
                        recalcforrow(data.id_transkacji, data.id_pracownika, ddate);

                    });
                    c++;
                }
            );
        });
        $('#btn-filter-k').click(function () { //button filter event click
            table.ajax.reload(); //just reload table
        });
        $('#btn-reset-k').click(function () { //button reset event click
            table.ajax.reload(); //just reload table
        });


    });

    function recalcforrow(o, p, d) {
        var localSum2 = 0;

        if (!$("#existing" + p + "" + d).is(':empty')) {
            if (isNaN(parseFloat($("#existing" + p + "" + d).html()))) {

            } else {
                localSum2 += parseFloat($("#existing" + p + "" + d).html());
            }
        }
        $("#" + o).find('td:last').each(function () {
            $(this).find('select').each(function () {
                var data2 = $(this).select2('data');
                localSum2 += parseFloat(data2[0].kwota_brutto);
            })
            $("#calc" + p + "" + d).html(localSum2.toFixed(2));
            if (isNaN(localSum2)) {
                localSum2 = "Uzupełnij pola";
                $("#calc" + p + "" + d).html(localSum2);
                return;
            }

            var roznica = parseFloat(localSum2.toFixed(2)) - Math.abs(parseFloat($("#org" + p + "" + d).text()));

            if (
                (Math.abs(parseFloat($("#org" + p + "" + d).text())) < parseFloat(localSum2.toFixed(2))) && roznica >= 0.1

            ) {
                $("#calc" + p + "" + d).addClass("bg-danger");
            } else {
                $("#calc" + p + "" + d).removeClass("bg-danger");
            }
        });

    }


    function formatRepo(data) {
        if (!data.id) {
            return "";
        }

        var $option = $("<span></span>");
        var $preview = $("<a target='_blank'> (Podgląd)</a>");
        $preview.prop("href", "<?PHP echo base_url();?>Wydatki/Podglad/" + data.id);
        $preview.on('mouseup', function (evt) {
            evt.stopPropagation();
        });
        var icon = "";
        switch (data.metoda_platnosci) {
            case "1":
                icon = '<i class="icon icon-cash-100 s40"></i>';
                break;
            case "3":
                icon = '<i class="icon icon-credit-card-multiple s40"></i>';
                break;
            case "2":
                icon = '<i class="icon icon-bank s40"></i>';
                break;
        }
        $option.html(icon + " " + data.dokument + " Kwota : " + data.kwota_brutto);
        $option.append($preview);

        return $option;
    }

    function formatRepoSelection(repo) {
        if (!repo.id) {
            return "";
        } else {
            return repo.dokument + " Kwota : " + repo.kwota_brutto;
        }
    }
</script>
</body>
</html>
