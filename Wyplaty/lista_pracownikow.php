<div class="doc page-layout simple full-width">
    <div class="page-content row p-12">

        <form id="nowyPrzychod" name="nowyPracownik" method="post" style=" width: 100%;">
            <!-- STANDARD ALERTS -->
            <div class="col-12 col-md-12">
                <div class="profile-box info-box general card mb-4">
                    <header class="h6 row no-gutters align-items-center justify-content-between bg-primary text-auto p-4">


                        <div class="title">Kreator wynagrodzenia</div>
                        <div class="row no-gutters" style="display: -webkit-inline-box;">
                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                <label for="regular1" class="control-label" style="width: 127px;">Miesiąc</label>
                                <select id="month_picker" name="mm" class="form-control">
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
                                <select id="year_picker" name="yy" class="form-control">
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                </select>
                            </div>
                        </div>

                    </header>
                    <div class="content p-4">


                        <div class="content p-1 page-content">


                            <div class="profile-box info-box general card mb-4 mt-4">
                                <header class="h6 row no-gutters align-items-center justify-content-between bg-primary text-auto p-4">
                                    <div class="title">Pracownicy</div>
                                    <button class="btn btn-success btn-add-panel btn-xs lista_prac_sh"
                                            id="newrowpracownik"
                                            type="button">
                                        <i class="icon icon-playlist-plus"></i> Dodaj pracownika
                                    </button>

                                </header>


                                <div class="content p-4 lista_prac_sh">
                                    <table style="border-collapse:collapse;width:100%;" id="lista_prac"
                                           class="table table-bordered">
                                        <thead>
                                        <tr class="hclass bg-warning">
                                            <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;"
                                                wdith="5%"></td>
                                            <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;"
                                                width="55%">Pracownik
                                            </td>
                                            <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;"
                                                width="20%">Gotówka
                                            </td>
                                            <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;"
                                                width="20%">Przelew
                                            </td>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td></td>
                                            <td>
                                                <div class="form-group">
                                                    <select class="inputPracownik" name="inputPracownik[]"
                                                            class="select-with-search pmd-select2 form-control">
                                                        <option></option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" name="k_gotowka[]"
                                                           class="form-control k_gotowka curr">
                                                </div>

                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" name="k_przelew[]"
                                                           class="form-control k_przelew curr">
                                                </div>


                                            </td>
                                        </tr>
                                        </tbody>

                                    </table>


                                </div>

                            </div>


                        </div>

                        <div class="form-group">
                            <div class="col-xs-5 col-xs-offset-3">
                                <button type="submit" class="btn btn-primary fuse-ripple-ready">Utwórz</button>
                            </div>
                        </div>


        </form>


    </div>

</div>
<div class="col-12 col-md-12">
    <div class="profile-box info-box general card mb-4">
        <header class="h6 row no-gutters align-items-center justify-content-between bg-primary text-auto p-4">
            <div class="title">Dostępne raporty wynagrodzenia</div>

        </header>
        <div class="content p-4">
            <table class="table table-striped table-bordered dataTable no-footer dtr-inline" id="my-cart-table">
                <thead class="btn-primary bg-primary">
                <tr>
                    <th>Okres</th>
                    <th>Dokument</th>
                </tr>
                </thead>
                <tbody>
                <?PHP
                if (count($w) > 0) {

                    foreach ($w as $v) {
                        echo '<tr>
                            <td>' . Statistic_model::mnum_mname($v['mm'], 'unq') . ' ' . $v['yy'] . '</td>
                            <td><a target="_blank" href="' . base_url("PDF_Generator/Place/WyplatyPracownikow/" . $v['mm'] . "/" . $v['yy'] . "") . '"> Podgląd</a></td>
                            </tr>';
                    }
                } else {
                    echo '  <tr class="alert alert-danger" role="alert" id="my-cart-empty-message">
                    <td colspan="3">Brak raportów</td>
                </tr>';
                }
                ?>

                </tbody>
            </table>


        </div>
    </div>

</div>
</div>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.2.6/jquery.inputmask.bundle.min.js"></script>


<script src="<?PHP echo base_url(); ?>assets/js/formValidation.min.js"></script>
<script src="<?PHP echo base_url(); ?>assets/js/fv.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js"
        type="text/javascript"></script>


<link rel="stylesheet" type="text/css"
      href="<?PHP echo base_url(); ?>assets/js/select2/css/select2.min.css"/>
<link rel="stylesheet" type="text/css"
      href="<?PHP echo base_url(); ?>assets/js/select2/css/select2-bootstrap.css"/>
<link rel="stylesheet" type="text/css"
      href="<?PHP echo base_url(); ?>assets/js/select2/css/pmd-select2.css"/>
<script type="text/javascript" src="<?PHP echo base_url(); ?>assets/js/select2/js/select2.full.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/i18n/pl.js"></script>
<script type="text/javascript" src="<?PHP echo base_url(); ?>assets/js/select2/js/pmd-select2.js"></script>
<script src="<?PHP echo base_url(); ?>assets/sweetalert2.min.js"></script>
<link rel="stylesheet" href="<?PHP echo base_url(); ?>assets/sweetalert2.min.css">
<link rel="stylesheet" type="text/css"
      href="<?PHP echo base_url(); ?>assets/vendor/datetimepicker/css/bootstrap-material-datetimepicker.css"/>

<script type="text/javascript" language="javascript"
        src="<?PHP echo base_url(); ?>assets/vendor/datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

<script>

    $(document).ready(function () {
        var add_p = 0;
        var d = new Date();
        var n = d.getMonth() + 1;
        var y = d.getFullYear();

        $('#month_picker').val(n);
        $('#year_picker').val(y);


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


        $('.inputPracownik').select2({
            theme: "bootstrap",
            width: '100%',
            language: "pl",
            ajax: {
                type: "GET",
                url: '<?PHP echo base_url(); ?>Pracownicy/s2_lista',
                dataType: 'json',
                delay: 250,
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
        $(".curr").inputmask({alias: "currency", prefix: "Zł "});

        function initSelPr() {

            $('#lista_prac > tbody  > tr').each(function (i) {
                $(this).find('.inputPracownik').select2({
                    theme: "bootstrap",
                    width: '100%',
                    language: "pl",
                    ajax: {
                        type: "GET",
                        url: '<?PHP echo base_url(); ?>Pracownicy/s2_lista',
                        dataType: 'json',
                        delay: 250,
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
            });
            $(".curr").inputmask({alias: "currency", prefix: "Zł "});
        }


        $("#newrowpracownik").on("click", function () {

            var newRow = $("<tr>");
            var cols = "";
            cols += '<td style="coursor:default;" class="text-center ibtnDel text-red">X</td>';
            cols += '<td><div class="form-group"><select name="inputPracownik[]" class="select-with-search pmd-select2 form-control inputPracownik"><option></option></select></div></td>';
            cols += '<td><input type="text" name="k_gotowka[]" class="form-control k_gotowka curr"></td>';
            cols += '<td><input type="text" name="k_przelew[]" class="form-control k_przelew curr"></td>';
            newRow.append(cols);
            $("#lista_prac > tbody").append(newRow);

            add_p++;
            initSelPr();

            $('#nowyPrzychod').formValidation('revalidateField', 'inputPracownik[]');
        });


        $("#lista_prac").on("click", ".ibtnDel", function (event) {
            $(this).closest("tr").remove();
            add_p -= 1;
        });


        var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
        $('#nowyPrzychod').formValidation({
            framework: 'bootstrap',
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                'inputPracownik[]': {
                    validators: {
                        notEmpty: {
                            message: 'Pole jest wymagane'
                        }
                    }
                },
                'k_gotowka[]': {
                    validators: {

                    }
                },
                'k_przelew[]': {
                    validators: {

                    }
                },
            }
        }).on('success.form.fv', function (e) {
            var $form = $(e.target),
                fv = $form.data('formValidation');
            e.preventDefault();


            var tablica_pracownikow = [];
            var match = 0;
            var emptyfields = 0;
            var emptyfields_przelew = 0;
            var total_gotowka = 0;
            var total_przelew = 0;


            transakcjerowCount = document.getElementById("lista_prac").rows.length - 1;

            $('#lista_prac > tbody > tr').each(function () {

                $(this).find('td:nth-child(2)').each(function () {

                    $(this).find('select').each(function () {
                        var data2 = $(this).select2('data');

                        if (data2[0].id) {
                            tablica_pracownikow.push(data2[0].id);
                            match++;
                        }
                    })
                });

                $(this).find('td:nth-child(3)').each(function () {

                    var nval = Inputmask.unmask($(this).find(".k_gotowka").val(), {alias: "currency", prefix: "Zł "});


                    if (isNaN(nval)) {
                        emptyfields++;
                    }
                    total_gotowka += nval;
                });
                $(this).find('td:nth-child(4)').each(function () {

                    var nvalprzelew = Inputmask.unmask($(this).find(".k_przelew").val(), {
                        alias: "currency",
                        prefix: "Zł "
                    });


                    if (isNaN(nvalprzelew)) {
                        emptyfields_przelew++;
                    }
                    total_przelew += nvalprzelew;
                });

            });

            var hasDups = !tablica_pracownikow.every(function (v, i) {
                return tablica_pracownikow.indexOf(v) == i;
            });
            if (emptyfields > 0) {
                display_notif("Kwota gotówki nie jest liczbą");
                return;
            }
            if (emptyfields_przelew > 0) {
                display_notif("Kwota przelewu nie jest liczbą");
                return;
            }
            if (hasDups) {
                display_notif("Ten sam pracownik nie może być dodany 2 razy");
                return;
            }
            if (transakcjerowCount > match) {
                display_notif("Uzupełnij wszystkie pola z pracownikami");
                return;
            }


            $.ajax({
                url: '<?PHP echo base_url(); ?>Wyplaty/Generuj_Wyplaty',
                method: 'POST',
                data: $form.serialize() + "&" + csrfName + "=" + csrfHash,
                success: function (data) {
                    $(this).closest('form').find("input[type=text]").val("");
                    csrfName = data.regen.csrfName;
                    csrfHash = data.regen.csrfHash;
                    console.log(data.response.message);
                    if (data.response.status) {
                        if (data.response.message === "Dodano") {
                            $(this).closest('form').find("input[type=text]").val("");
                            $('#nowyPrzychod').data('formValidation').resetForm();
                            $('#nowyPrzychod').trigger("reset");
                            $("#inputRejon2").val(null).trigger("change");

                            location.reload();
                        }

                    }
                    new PNotify({
                        text: data.response.message,
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
        $('#dodawanie_faktury').on('shown.bs.modal', function () {
            $('#nowyPrzychod').data('formValidation').resetForm();
            $('#nowyPrzychod').trigger("reset");
            $("#faktura_t > tbody").html("");
        })

        //   });
    });
</script>