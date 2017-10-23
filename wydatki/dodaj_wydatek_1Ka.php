<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.2.6/jquery.inputmask.bundle.min.js"></script>


<link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>assets/vendor/datetimepicker/css/bootstrap-material-datetimepicker.css" />
<script type="text/javascript" language="javascript" src="<?PHP echo base_url(); ?>assets/vendor/datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

<script type="text/javascript" src="<?PHP echo base_url(); ?>assets/js/select2/js/select2.full.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/i18n/pl.js"></script>
<script type="text/javascript" src="<?PHP echo base_url(); ?>assets/js/select2/js/pmd-select2.js"></script>

<link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>assets/js/select2/css/select2.min.css" />
<link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>assets/js/select2/css/select2-bootstrap.css" />
<link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>assets/js/select2/css/pmd-select2.css" />

<script src="<?PHP echo base_url(); ?>assets/js/formValidation.min.js"></script>
<script src="<?PHP echo base_url(); ?>assets/js/fv.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js" type="text/javascript"></script>



<div class="doc page-layout simple full-width">

    <!-- HEADER -->
    <div class="page-header bg-primary text-auto p-6"><h2 class="doc-title" id="content">Dodawanie wydatku</h2>
    </div>
    <!-- / HEADER -->

    <div class="page-content row p-12">

        <!-- STANDARD ALERTS -->
        <div class="col-12 col-md-12">

            <form id="nowyPrzychod" name="nowyPrzychod" method="post" enctype="multipart/form-data" accept-charset="utf-8">

                <div class="profile-box info-box general card mb-4">

                    <header class="h6 bg-primary text-auto p-4">
                        <div class="title">Informacje o wydatku</div>
                    </header>

                    <div class="content p-4">

                        <div class="row">
                            <div class="form-group pmd-textfield pmd-textfield-floating-label col-md-2">
                                <label for="regular1" class="control-label">Data zakupu</label>
                                <input type="text" name="inputData" id="inputData" class="form-control" />
                            </div>
                            <div class="form-group pmd-textfield pmd-textfield-floating-label col-md-2">
                                <label for="regular1" class="control-label">Termin płatności</label>
                                <input type="text" name="inputTermin" id="inputTermin" class="form-control" />
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputDokument" class="col-form-label">Numer faktury</label>
                                <input type="text" class="form-control" name="inputDokument" id="inputDokument" placeholder="">
                            </div>

                            <div class="form-group col-md-2">
                                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                    <label>Rejon</label>
                                    <select id="inputRejon" name="inputRejon" class="select-with-search pmd-select2 form-control">
                                        <option></option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label style="color: rgba(0,0,0,.38);">Cel zakupu</label>
                                <textarea id="inputOpis" name="inputOpis" class="form-control"></textarea>
                            </div>
                        </div>




                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="inputBrutto" class="col-form-label">Wartość brutto faktury</label>
                                <input type="text" class="form-control" name="inputBrutto" id="inputBrutto">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputNetto" class="col-form-label">Wartość netto faktury</label>
                                <input type="text" class="form-control" id="inputNetto" name="inputNetto">
                            </div>
                            <div class="form-group col-md-2">
                                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                    <label>Kategoria wydatku</label>
                                    <select id="inputKategoria" name="inputKategoria" class="select-with-search pmd-select2 form-control">
                                        <option></option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-2">
                                <div class="col-xs-5 ">
                                    <button class="btn btn-primary btn-add-panel mt-5" type="button"> <i class="glyphicon glyphicon-plus"></i> Rozbij fakturę</button>

                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-sm-12" id="extra_group">

                                <!-- s -->


                                <div class="widget widget2 card template mb-2 bg-light-blue-50" style="display: none;">
                                    <div class="col-sm-12">
                                        <div class="row">

                                            <div class="form-group col-md-4">
                                                <label for="inputBrutto" class="col-form-label">Wartość brutto kategorii</label>
                                                <input type="text" class="form-control inputBrutto2" name="inputBrutto2[]">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputNetto" class="col-form-label">Wartość netto kategorii</label>
                                                <input type="text" class="form-control inputNetto2"  name="inputNetto2[]">
                                            </div>
                                            <div class="form-group col-md-2">
                                                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                    <label>Kategoria wydatku</label>
                                                    <select class="inputKategoria2" name="inputKategoria2[]" class="select-with-search pmd-select2 form-control">
                                                        <option></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <button class="btn btn-danger btn-add-panel rh mt-5 ml-3"> <i class="glyphicon glyphicon-minus"></i> Usuń</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                                <!-- s -->
                            </div> </div>

                        <div class="row">

                            <div class="form-group col-md-2">
                                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                    <label>Kontrahent</label>
                                    <select id="inputKontrahent" name="inputKontrahent" class="select-with-search pmd-select2 form-control">
                                        <option></option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-2">
                                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                    <label>Osoba kupująca</label>
                                    <select id="inputKupiec" name="inputKupiec" class="select-with-search pmd-select2 form-control">
                                        <option></option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group col-md-2">
                                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                    <label for="inputSkan" class="col-form-label">Skan faktury</label>
                                    <input type="file" class="form-control" name="inputSkan" id="inputSkan">
                                </div>
                            </div>
                            <div class="form-group col-md-2">
                                <div class="form-group">
                                    <label>Metoda płatności</label>
                                    <div class="form-check form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="inputMetoda" id="inlineRadio2"
                                                   value="1"/>
                                            <span class="radio-icon"></span>
                                            <span class="form-check-description">Gotówka</span>
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="inputMetoda" id="inlineRadio3"
                                                   value="2"/>
                                            <span class="radio-icon"></span>
                                            <span class="form-check-description">Przelew</span>
                                        </label>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Status płatności</label>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="inputStatus"
                                                   value="1" checked=""/>
                                            <span class="radio-icon"></span>
                                            <span
                                                class="form-check-description">Do zapłaty</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="inputStatus"
                                                   value="2"/>
                                            <span class="radio-icon"></span>
                                            <span class="form-check-description">Opłacona</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="inputStatus"
                                                   value="3"/>
                                            <span class="radio-icon"></span>
                                            <span class="form-check-description">Częściowo opłacona</span>
                                        </label>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Priorytet płatności</label>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="inputPriorytet"
                                                   value="1" />
                                            <span class="radio-icon"></span>
                                            <span
                                                class="form-check-description">Pilny</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="inputPriorytet"
                                                   value="2"/>
                                            <span class="radio-icon"></span>
                                            <span class="form-check-description">Istotny</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="inputPriorytet"
                                                   value="3" checked=""/>
                                            <span class="radio-icon"></span>
                                            <span class="form-check-description">Normalny</span>
                                        </label>
                                    </div>

                                </div>
                            </div>



                            <div class="form-group col-md-2" id="gpojazd">
                                <label for="inputPojazd" class="col-form-label">Powiązany pojazd</label>
                                <select id="inputPojazd" name="inputPojazd" class="select-with-search pmd-select2 form-control">
                                    <option></option>
                                </select>
                            </div>

                            <div class="form-group col-md-2" id="partly_paid">
                                <label for="inputBrutto" class="col-form-label">Zapłacono</label>
                                <input type="text" class="form-control inputOplacono" id="inputOplacono" name="inputOplacono">
                            </div>


                        </div>

                        <div class="form-group">
                            <div class="col-xs-5 col-xs-offset-3">
                                <button type="submit" class="btn btn-primary fuse-ripple-ready">Dodaj wydatek</button>

                            </div>



                        </div>

                    </div>




            </form>

        </div>
        <!-- / STANDARD ALERTS -->



    </div>

</div>

<!-- / CONTACT LIST HEADER -->


<script>
    $(document).ready(function () {
        $("#partly_paid").hide();
        $("#gpojazd").hide();

        $('input[type=radio][name=inputStatus]').change(function () {
            if (this.value == '3') {
                $("#partly_paid").fadeIn(1000);
            } else {
                $("#partly_paid").fadeOut(1000);
                $("#inputOplacono").val("");
            }
        });

        $('#inputKategoria').on("select2:select", function (e) {
            var data = $(this).select2('data');
            if (data[0].text === "Paliwo") {
                $("#gpojazd").fadeIn(1000);
            } else {
                $("#gpojazd").fadeOut(1000);
                $("#gpojazd").val(null).trigger("change");
            }
        });


        $("#inputPojazd").select2({
            theme: "bootstrap",
            // minimumInputLength: 1,
            language: "pl",
            ajax: {
                type: "GET",
                url: '<?PHP echo base_url(); ?>Pojazdy/s2_lista',
                dataType: 'json',
                delay: 250,

                data: function (params) {
                    return {
                        term: params.term,
                        page_limit: 100,
<?php echo $this->security->get_csrf_token_name(); ?>: '<?php echo $this->security->get_csrf_hash(); ?>',
                    };
                },
                processResults: function (data) {
                    return {
                        results: data
                    };
                }
            },
        });


        var $template = $(".template");
        var hash = 2;
        $(".btn-add-panel").on("click", function () {

            if (hash >= 8)
            {
                return false;
            }
            hash++;

            var $newPanel = $template.clone();

            $("#extra_group").append($newPanel.fadeIn());
            $newPanel.find(".inputBrutto2,.inputNetto2").inputmask({alias: "currency", prefix: "Zł "});

            $newPanel.find(".inputKategoria2").select2({theme: "bootstrap",
                // minimumInputLength: 1,
                dropdownAutoWidth: true,
                width: 'auto',
                language: "pl",
                ajax: {
                    type: "GET",
                    url: '<?PHP echo base_url(); ?>Wydatki/s2_kategorie_wydatku',
                    dataType: 'json',
                    delay: 250,

                    data: function (params) {
                        return {
                            term: params.term,
                            page_limit: 100,
<?php echo $this->security->get_csrf_token_name(); ?>: '<?php echo $this->security->get_csrf_hash(); ?>',
                        };
                    },
                    processResults: function (data) {
                        return {
                            results: data
                        };
                    }
                }, });


            $('.inputKategoria2').on("select2:select", function (e) {
                var data = $(this).select2('data');
                if (data[0].text === "Paliwo") {
                    $("#gpojazd").fadeIn(1000);
                } else {
                    $("#gpojazd").fadeOut(1000);
                    $("#gpojazd").val(null).trigger("change");
                }
            });
        });

        $(document).on('click', '.rh', function () {
            hash--;
            $(this).parents('.widget').get(0).remove();

        });

        $('#inputData').bootstrapMaterialDatePicker({weekStart: 0, time: false}).on('change', function (e) {
            $('#nowyPrzychod').formValidation('revalidateField', 'inputData');
        });

        $('#inputTermin').bootstrapMaterialDatePicker({weekStart: 0, time: false}).on('change', function (e) {
            $('#nowyPrzychod').formValidation('revalidateField', 'inputTermin');
        });



        $("#inputBrutto,#inputNetto,.inputOplacono").inputmask({alias: "currency", prefix: "Zł "});


        $("#inputKategoria").select2({
            theme: "bootstrap",
            // minimumInputLength: 1,
            language: "pl",
            ajax: {
                type: "GET",
                url: '<?PHP echo base_url(); ?>Wydatki/s2_kategorie_wydatku',
                dataType: 'json',
                delay: 250,

                data: function (params) {
                    return {
                        term: params.term,
                        page_limit: 100,
<?php echo $this->security->get_csrf_token_name(); ?>: '<?php echo $this->security->get_csrf_hash(); ?>',
                    };
                },
                processResults: function (data) {
                    return {
                        results: data
                    };
                }
            },
        });

        $("#inputKupiec").select2({
            theme: "bootstrap",
            //minimumInputLength: 1,
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
<?php echo $this->security->get_csrf_token_name(); ?>: '<?php echo $this->security->get_csrf_hash(); ?>',
                    };
                },
                processResults: function (data) {
                    return {
                        results: data
                    };
                }
            },
        });

        $("#inputKontrahent").select2({
            theme: "bootstrap",
            //minimumInputLength: 1,
            language: "pl",
            ajax: {
                type: "GET",
                url: '<?PHP echo base_url(); ?>Kontrahent/lista_kontrahentow',
                dataType: 'json',
                delay: 250,

                data: function (params) {
                    return {
                        term: params.term,
                        page_limit: 100,
<?php echo $this->security->get_csrf_token_name(); ?>: '<?php echo $this->security->get_csrf_hash(); ?>',
                    };
                },
                processResults: function (data) {
                    return {
                        results: data
                    };
                }
            },
        });

        $("#inputRejon").select2({
            theme: "bootstrap",
            //minimumInputLength: 1,
            language: "pl",
            ajax: {
                type: "GET",
                url: '<?PHP echo base_url(); ?>Rejon/lista_rejonow',
                dataType: 'json',
                delay: 250,

                data: function (params) {
                    return {
                        term: params.term,
                        page_limit: 100,
<?php echo $this->security->get_csrf_token_name(); ?>: '<?php echo $this->security->get_csrf_hash(); ?>',
                    };
                },
                processResults: function (data) {
                    return {
                        results: data
                    };
                }
            },
        });

        var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
                csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';

        $('#inputKategoria').on("select2:select", function (e) {
            var data = $(this).select2('data');
            if (data[0].text === "Paliwo") {
                $("#gpojazd").fadeIn(1000);
            } else {
                $("#gpojazd").fadeOut(1000);
                $("#gpojazd").val(null).trigger("change");
            }
        });

        $('#nowyPrzychod').find('[name="inputStatus"]')
                 .on('ifChanged', function (e) {
              
                    var field = $(this).attr('name');
                    $('#nowyPrzychod').formValidation('revalidateField', field);

                    var $form = $('#nowyPrzychod')
                    fv = $form.data('formValidation');
                    if (this.value == '3') {
                        fv.enableFieldValidators('inputOplacono', true);
                    } else {
                        fv.enableFieldValidators('inputOplacono', false);
                    }

                })
                .end().find('[name="inputKategoria"]')
                .on("select2:select", function (e) {
                    console.log("y");
                    var field = $(this).attr('name');
                    $('#nowyPrzychod').formValidation('revalidateField', field);

                    var $form = $('#nowyPrzychod')
                    fv = $form.data('formValidation');
                    var data = $(this).select2('data');
                    if (data[0].text === "Paliwo") {
                        fv.enableFieldValidators('inputPojazd', true);
                    } else {
                        fv.enableFieldValidators('inputPojazd', false);
                    }
                })
                .end().formValidation({
            framework: 'bootstrap',
            fields: {
                inputOplacono: {
                    enabled: false,
                    validators: {
                        notEmpty: {
                            message: 'Pole nie może być puste'
                        }
                    }
                },
                inputPojazd: {
                    enabled: false,
                    validators: {
                        notEmpty: {
                            message: 'Pole nie może być puste'
                        }
                    }
                },
                inputMetoda: {
                    validators: {
                        notEmpty: {
                            message: 'Pole jest wymagane'
                        },
                    }
                },
                inputKategoria: {
                    validators: {
                        notEmpty: {
                            message: 'Pole jest wymagane'
                        },
                    }
                },
                inputTermin: {
                    validators: {
                        notEmpty: {
                            message: 'Pole jest wymagane'
                        },
                    }
                },
                inputKupiec: {
                    validators: {
                        notEmpty: {
                            message: 'Pole jest wymagane'
                        },
                    }
                },
                inputRejon: {
                    validators: {
                        notEmpty: {
                            message: 'Pole jest wymagane'
                        },
                    }
                },
                inputKontrahent: {
                    validators: {
                        notEmpty: {
                            message: 'Pole jest wymagane'
                        }
                    }
                },
                inputBrutto: {
                    validators: {
                        notEmpty: {
                            message: 'Pole jest wymagane'
                        }
                    }
                },
                inputNetto: {
                    validators: {
                        notEmpty: {
                            message: 'Pole jest wymagane'
                        }
                    }
                },
                inputDokument: {
                    validators: {
                        notEmpty: {
                            message: 'Pole jest wymagane'
                        },
                        stringLength: {
                            min: 3,
                            max: 100,
                            message: 'Musi zawierać od %s do %s znaków'
                        }
                    }
                },
                inputData: {
                    validators: {
                        notEmpty: {
                            message: 'Pole jest wymagane'
                        }
                    }
                },
                inputOpis: {
                    validators: {
                        stringLength: {
                            min: 3,
                            max: 250,
                            message: 'Musi zawierać od %s do %s znaków'
                        }
                    }
                },
            }
        }).on('success.form.fv', function (e) {


            var $form = $(e.target),
                    fv = $form.data('formValidation');
            var formData = new FormData(this);
            formData.append(csrfName, csrfHash);
            e.preventDefault();
            $.ajax({
                url: '<?PHP echo base_url(); ?>Wydatki/nowy_wydatek',
                type: "POST",
                //url: "<?php echo site_url('klienci/legacy_dodaj'); ?>",
                data: formData,
                mimeType: "multipart/form-data",
                contentType: false,
                dataType: 'json',
                cache: false,
                processData: false,
                //data: $form.serialize() + "&" + csrfName + "=" + csrfHash,
                success: function (data) {
                    $(this).closest('form').find("input[type=text]").val("");
                    csrfName = data.regen.csrfName;
                    csrfHash = data.regen.csrfHash;
                    console.log(data.response.message);
                    if (data.response.status)
                    {
                        if (data.response.message === "Dodano") {
                            $(this).closest('form').find("input[type=text]").val("");
                            $('#nowyPrzychod').data('formValidation').resetForm();
                            $('#nowyPrzychod').trigger("reset");
                            $("#inputKontrahent,#inputRejon,#inputKategoria,#inputKupiec,#gpojazd").val(null).trigger("change");
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
                                    click: function (notice)
                                    {
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
    }
    );
    $('#gridSystemModal').on('shown.bs.modal', function () {
        $('#nowyPrzychod').data('formValidation').resetForm();
        $('#nowyPrzychod').trigger("reset");

    })

</script>
