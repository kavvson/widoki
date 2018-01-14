<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.2.6/jquery.inputmask.bundle.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>assets/vendor/datetimepicker/css/bootstrap-material-datetimepicker.css" />
<script type="text/javascript" language="javascript" src="<?PHP echo base_url(); ?>assets/vendor/datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
<script src="<?PHP echo base_url(); ?>assets/js/formValidation.min.js"></script>
<script src="<?PHP echo base_url(); ?>assets/js/fv.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js" type="text/javascript"></script>



<div class="doc page-layout simple full-width">

    <!-- HEADER -->
    <div class="page-header bg-primary text-auto p-6"><h2 class="doc-title" id="content">Dodawanie pojazdu</h2>
    </div>
    <!-- / HEADER -->

    <div class="page-content row p-12">

        <!-- STANDARD ALERTS -->
        <div class="col-12 col-md-12">

            <form id="nowyPojazd" name="nowyPojazd" method="post" enctype="multipart/form-data" accept-charset="utf-8">

                <div class="profile-box info-box general card mb-4">

                    <header class="h6 bg-primary text-auto p-4">
                        <div class="title">Informacje o pojeździe</div>
                    </header>

                    <div class="content p-4">

                        <div class="row">
                            <div class="form-group col-md-3">
                                <label for="inputBrutto" class="col-form-label">Marka samochodu</label>
                                <input type="text" class="form-control" name="inputMarka" id="inputMarka">
                            </div>
                            <div class="form-group pmd-textfield pmd-textfield-floating-label col-md-3">
                                <label for="inputModel" class="control-label">Model samochodu</label>
                                <input type="text" name="inputModel" id="inputModel" class="form-control" />
                            </div>
                            <div class="form-group pmd-textfield pmd-textfield-floating-label col-md-3">
                                <label for="inputNr_rej" class="control-label">Numer rejestracyjny</label>
                                <input type="text" name="inputNr_rej" id="inputNr_rej" class="form-control" />
                            </div>
                            <div class="form-group pmd-textfield pmd-textfield-floating-label col-md-3">
                                <label for="inputNr_rej" class="control-label">Aktualny przebieg</label>
                                <input type="text" name="inputPrzebieg" id="inputPrzebieg" class="form-control" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-3">
                                <label for="inputUbezp_oc" class="col-form-label">Ubezpieczenie OC</label>
                                <input type="text" class="form-control" name="inputUbezp_oc" id="inputUbezp_oc" placeholder="">
                            </div>

                            <div class="form-group col-md-3">
                                <label for="inputDokument" class="col-form-label">Ubezpieczenie AC</label>
                                <input type="text" class="form-control" name="inputUbezp_ac" id="inputUbezp_ac" placeholder="">
                            </div>

                            <div class="form-group col-md-2">
                                <label for="inputBrutto" class="col-form-label">Ważność przeglądu</label>
                                <input type="text" class="form-control" name="inputPrzeglad" id="inputPrzeglad">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputBrutto" class="col-form-label">Wartość pojazdu</label>
                                <input type="text" class="form-control" name="inputwartosc_pojazdu" id="inputwartosc_pojazdu">
                            </div>
                            <div class="form-group col-md-2">
                                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                    <label for="inputSkan" class="col-form-label">Skan asortymentu</label>
                                    <input type="file" class="form-control" name="inputSkan" id="inputSkan">
                                </div>
                            </div>
                            <div class="form-group col-md-2">
                                <div class="form-group">
                                    <label>Stawka VAT</label>
                                    <div class="form-check form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" checked type="radio" name="stawka_vat"
                                                   value="1"/>
                                            <span class="radio-icon"></span>
                                            <span class="form-check-description">50%</span>
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="stawka_vat" 
                                                   value="2"/>
                                            <span class="radio-icon"></span>
                                            <span class="form-check-description">100%</span>
                                        </label>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-xs-5 col-xs-offset-3">
                                <button type="submit" class="btn btn-primary fuse-ripple-ready">Dodaj pojazd</button>

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


        $('#inputUbezp_oc').bootstrapMaterialDatePicker({weekStart: 0, time: false}).on('change', function (e) {
            $('#nowyPojazd').formValidation('revalidateField', 'inputUbezp_oc');
        });

        $('#inputUbezp_ac').bootstrapMaterialDatePicker({weekStart: 0, time: false}).on('change', function (e) {
            $('#nowyPojazd').formValidation('revalidateField', 'inputUbezp_ac');
        });
        $('#inputPrzeglad').bootstrapMaterialDatePicker({weekStart: 0, time: false}).on('change', function (e) {
            $('#nowyPojazd').formValidation('revalidateField', 'inputPrzeglad');
        });
        $("#inputwartosc_pojazdu").inputmask({alias: "currency", prefix: "Zł "});
        var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
                csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';


        $('#nowyPojazd').formValidation({
            framework: 'bootstrap',
            icon: {

            },
            fields: {
                inputPrzebieg: {
                    validators: {
                        notEmpty: {
                            message: 'Pole jest wymagane'
                        },
                        numeric: {
                            message: 'Wartość nie jest liczbą',

                        },
                        stringLength: {
                            message: 'Przebieg nie jest realny',
                            min: 3,
                            max: function (value, validator, $field) {
                                return 6 - (value.match(/\r/g) || []).length;
                            }
                        }

                    }
                },
                stawka_vat: {
                    validators: {
                        notEmpty: {
                            message: 'Pole jest wymagane'
                        },
                    }
                },
                inputwartosc_pojazdu: {
                    validators: {
                        notEmpty: {
                            message: 'Pole jest wymagane'
                        },
                    }
                },
                inputModel: {
                    validators: {
                        notEmpty: {
                            message: 'Pole jest wymagane'
                        },
                        stringLength: {
                            min: 3,
                            max: 50,
                            message: 'Musi zawierać od %s do %s znaków'
                        }

                    }
                },
                inputMarka: {
                    validators: {
                        notEmpty: {
                            message: 'Pole jest wymagane'
                        },
                        stringLength: {
                            min: 3,
                            max: 50,
                            message: 'Musi zawierać od %s do %s znaków'
                        }

                    }
                },
                inputNr_rej: {
                    validators: {
                        notEmpty: {
                            message: 'Pole jest wymagane'
                        },
                        stringLength: {
                            min: 5,
                            max: 10,
                            message: 'Musi zawierać od %s do %s znaków'
                        }

                    }
                },
                inputUbezp_oc: {
                    validators: {
                        notEmpty: {
                            message: 'Pole jest wymagane'
                        },
                        date: {
                            format: 'YYYY-MM-DD',
                            message: 'Nieprawidłowy format daty'
                        },
                    }
                },
                inputUbezp_ac: {
                    validators: {
                        notEmpty: {
                            message: 'Pole jest wymagane'
                        },
                        date: {
                            format: 'YYYY-MM-DD',
                            message: 'Nieprawidłowy format daty'
                        },
                    }
                },
                inputPrzeglad: {
                    validators: {
                        notEmpty: {
                            message: 'Pole jest wymagane'
                        },
                        date: {
                            format: 'YYYY-MM-DD',
                            message: 'Nieprawidłowy format daty'
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
                url: '<?PHP echo base_url(); ?>Pojazdy/Dodaj_pojazd',
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
                    if (data.response.status)
                    {
                        if (data.response.message === "Dodano pojazd") {
                            $(this).closest('form').find("input[type=text]").val("");
                            $('#nowyPojazd').data('formValidation').resetForm();
                            $('#nowyPojazd').trigger("reset");
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
    });
    $('#gridSystemModal').on('shown.bs.modal', function () {
        $('#nowyPojazd').data('formValidation').resetForm();
        $('#nowyPojazd').trigger("reset");

    })

</script>
