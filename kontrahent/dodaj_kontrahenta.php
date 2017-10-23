
<div class="doc page-layout simple full-width">

    <!-- HEADER -->
    <div class="page-header bg-primary text-auto p-6"><h2 class="doc-title" id="content">Dodawanie kontrahenta</h2>
    </div>
    <!-- / HEADER -->

    <div class="page-content row p-12">

        <!-- STANDARD ALERTS -->
        <div class="col-12 col-md-12">

            <form id="nowyKontrahent" name="nowyKontrahent" method="post">

                <div class="profile-box info-box general card mb-4">
                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                    <header class="h6 bg-primary text-auto p-4">
                        <div class="title">Informacje o kontrahencie</div>
                    </header>

                    <div class="content p-4">
                        <div class="control-group">

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="message">Nazwa firmy</label>
                                    <input id="kli_c_name" class="form-control" name="kli_c_name">
                                </div>
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label for="message">Nip</label>
                                        <input id="kli_Nip" class="form-control" name="kli_Nip">
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label for="message">Regon</label>
                                        <input id="kli_Regon" class="form-control" name="kli_Regon">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="message">Numer konta</label>
                                        <input id="kli_Bank" class="form-control" name="kli_Bank">
                                    </div>
                                </div>

                            </div>


                            <div class="control-group">
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="message">Branża</label>
                                        <input id="kli_Spec" class="form-control" name="kli_Spec">
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="message">Numer kontaktowy</label>
                                            <input id="kli_c_main_phone" class="form-control" name="kli_c_main_phone">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="message">Miasto</label>
                                            <div class="input-icon right">
                                                <i class="fa fa-home"></i>
                                                <input id="kli_c_main_miasto" class="form-control" name="kli_c_main_miasto">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">

                                            <label for="message">Ulica</label>
                                            <div class="input-icon right">
                                                <i class="fa fa-road"></i>
                                                <input id="kli_c_main_ulica" class="form-control" name="kli_c_main_ulica">
                                            </div>


                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="message">Kod pocztowy</label>

                                            <div class="input-icon right">
                                                <i class="fa fa-paper-plane-o"></i>
                                                <input id="kli_c_main_zip" class="form-control" name="kli_c_main_zip">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Charakter prawny</label>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="char_prawny"
                                                           value="1" checked=""/>
                                                    <span class="radio-icon"></span>
                                                    <span
                                                        class="form-check-description">Osoba fizyczna</span>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="char_prawny"
                                                           value="2"/>
                                                    <span class="radio-icon"></span>
                                                    <span class="form-check-description">Spółka</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Adres korespondencyjny</label>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="ad_kores"
                                                           value="1" checked=""/>
                                                    <span class="radio-icon"></span>
                                                    <span
                                                        class="form-check-description">Taki sam</span>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="ad_kores"
                                                           value="2"/>
                                                    <span class="radio-icon"></span>
                                                    <span class="form-check-description">Inny</span>
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-2" id="krs_f_h" style="display:none;">
                                        <div class="form-group">
                                            <label for="message">KRS</label>
                                            <input id="kli_KRS" class="form-control" name="kli_KRS">
                                        </div>
                                    </div>
                                </div></div>
                        </div>

                    </div>
                </div>
                <!-- EOF address -->


                <div class="profile-box info-box general card mb-4" id="ad_kores_f_h" style="display: none;">
                    <header class="h6 bg-primary text-auto p-4">
                        <div class="title">Adres do korespondencji </div>
                    </header>

                    <div class="content p-4">

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="message">Miasto</label>
                                    <div class="input-icon right">
                                        <i class="fa fa-home"></i>
                                        <input id="kli_c_kor_miasto" class="form-control" name="kli_c_kor_miasto">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">

                                    <label for="message">Ulica</label>
                                    <div class="input-icon right">
                                        <i class="fa fa-road"></i>
                                        <input id="kli_c_kor_ulica" class="form-control" name="kli_c_kor_ulica">
                                    </div>


                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="message">Kod pocztowy</label>

                                    <div class="input-icon right">
                                        <i class="fa fa-paper-plane-o"></i>
                                        <input id="kli_c_kor_zip" class="form-control" name="kli_c_kor_zip">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="form-actions text-right pal">
                    <button type="submit" class="btn btn-primary">
                        Dodaj kontrahenta</button>
                </div>
        </div>
    </div>
</div>
</div>




<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.2.6/jquery.inputmask.bundle.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>assets/vendor/datetimepicker/css/bootstrap-material-datetimepicker.css" />
<script type="text/javascript" language="javascript" src="<?PHP echo base_url(); ?>assets/vendor/datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
<script src="<?PHP echo base_url(); ?>assets/js/formValidation.min.js"></script>
<script src="<?PHP echo base_url(); ?>assets/js/fv.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js" type="text/javascript"></script>



<script type="text/javascript">
    $(document).ready(function () {

        $("#krs_f_h").hide();

        $('input[type=radio][name=char_prawny]').change(function () {
            if (this.value == '2') {
                $("#krs_f_h").fadeIn(1000);
            } else {
                $("#krs_f_h").fadeOut(1000);
                $("#kli_KRS").val("");
            }
        });
        $('input[type=radio][name=ad_kores]').change(function () {
            if (this.value == '2') {
                $("#ad_kores_f_h").fadeIn(1000);

            } else {
                $("#ad_kores_f_h").fadeOut(1000);
                $("#kli_c_kor_miasto,#kli_c_kor_zip,#kli_c_kor_ulica").val("");
            }
        });

        var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
                csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';

        $("#kli_c_main_zip,#kli_c_kor_zip").inputmask({mask: "99-999"});
        $("#kli_c_main_zip,#kli_c_kor_zip").inputmask({mask: "99-999"});
        $("#kli_Bank").inputmask({mask: "99 9999 9999 9999 9999 9999 9999"});
        $("#kli_Nip").inputmask({mask: "999-999-99-99"});
        $("#kli_Regon").inputmask({mask: "999999999"});

        $('#nowyKontrahent').find('input[name="char_prawny"]').on('change', '[name="char_prawny"]', function (e) {
            var field = $(this).attr('name');
            $('#nowyKontrahent').formValidation('revalidateField', field);

            var $form = $('#nowyKontrahent')
            fv = $form.data('formValidation');
            if (this.value == "2")
            {
                fv.enableFieldValidators('kli_KRS', true);
            } else {
                fv.enableFieldValidators('kli_KRS', false);
            }

        }).end()
                .find('input[name="ad_kores"]').on('change', '[name="ad_kores"]', function (e) {
            var field = $(this).attr('name');
            $('#nowyKontrahent').formValidation('revalidateField', field);

            var $form = $('#nowyKontrahent')
            fv = $form.data('formValidation');
            if (this.value == "2")
            {
                fv.enableFieldValidators('kli_c_kor_ulica', true);
                fv.enableFieldValidators('kli_c_kor_miasto', true);
                fv.enableFieldValidators('kli_c_kor_zip', true);


            } else {
                fv.enableFieldValidators('kli_c_kor_ulica', false);
                fv.enableFieldValidators('kli_c_kor_miasto', false);
                fv.enableFieldValidators('kli_c_kor_zip', false);

            }

        }).end()
                .formValidation({
                    framework: 'bootstrap',
                    icon: {

                    },
                    fields: {
                        kli_KRS: {
                            validators: {
                                enabled: false,
                                notEmpty: {
                                    message: 'Pole jest wymagane'
                                },
                                stringLength: {
                                    message: 'Numer musi mieć 10 znaków',
                                    min: 10,
                                    max: function (value, validator, $field) {
                                        return 10 - (value.match(/\r/g) || []).length;
                                    }
                                },
                                numeric: {
                                    message: 'Nie jest liczbą',
                                }

                            }
                        },
                        kli_c_name: {
                            validators: {
                                notEmpty: {
                                    message: 'Pole jest wymagane'
                                },
                                stringLength: {
                                    message: 'Nazwa kont. musi mieć od 2 do 100 znaków',
                                    min: 2,
                                    max: function (value, validator, $field) {
                                        return 100 - (value.match(/\r/g) || []).length;
                                    }
                                }

                            }
                        },
                        kli_Nip: {
                            validators: {
                                notEmpty: {
                                    message: 'Pole jest wymagane'
                                },
                            }
                        },

                        kli_Bank: {
                            validators: {
                                notEmpty: {
                                    message: 'Pole jest wymagane'
                                },
                            }
                        },
                        kli_c_main_phone: {
                            validators: {
                                notEmpty: {
                                    message: 'Pole jest wymagane'
                                },
                                stringLength: {
                                    message: 'Musi mieć od 7 do 35 znaków',
                                    min: 2,
                                    max: function (value, validator, $field) {
                                        return 35 - (value.match(/\r/g) || []).length;
                                    }
                                }

                            }
                        },

                        kli_Spec: {
                            validators: {
                                notEmpty: {
                                    message: 'Pole jest wymagane'
                                },
                                stringLength: {
                                    message: 'Musi mieć od 2 do 80 znaków',
                                    min: 2,
                                    max: function (value, validator, $field) {
                                        return 80 - (value.match(/\r/g) || []).length;
                                    }
                                }

                            }
                        },
                        kli_c_main_zip: {
                            validators: {
                                notEmpty: {
                                    message: 'Pole jest wymagane'
                                },
                                zipCode: {
                                    country: 'PL',
                                    message: 'Nieprawidłowy format kodu pocztowego'
                                }

                            }
                        },
                        kli_c_main_miasto: {
                            validators: {
                                notEmpty: {
                                    message: 'Pole jest wymagane'
                                },
                                stringLength: {
                                    message: 'Musi mieć od 2 do 80 znaków',
                                    min: 3,
                                    max: function (value, validator, $field) {
                                        return 80 - (value.match(/\r/g) || []).length;
                                    }
                                }
                            }
                        },
                        kli_c_main_ulica: {
                            validators: {
                                notEmpty: {
                                    message: 'Pole jest wymagane'
                                },
                                stringLength: {
                                    message: 'Musi mieć od 2 do 80 znaków',
                                    min: 3,
                                    max: function (value, validator, $field) {
                                        return 80 - (value.match(/\r/g) || []).length;
                                    }
                                }
                            }
                        },
                        kli_c_kor_ulica: {
                            validators: {
                                enabled: false,
                                notEmpty: {
                                    message: 'Pole jest wymagane'
                                },
                                stringLength: {
                                    message: 'Musi mieć od 2 do 80 znaków',
                                    min: 3,
                                    max: function (value, validator, $field) {
                                        return 80 - (value.match(/\r/g) || []).length;
                                    }
                                }
                            }
                        },
                        kli_c_kor_miasto: {
                            validators: {
                                enabled: false,
                                notEmpty: {
                                    message: 'Pole jest wymagane'
                                },
                                stringLength: {
                                    message: 'Musi mieć od 2 do 80 znaków',
                                    min: 3,
                                    max: function (value, validator, $field) {
                                        return 80 - (value.match(/\r/g) || []).length;
                                    }
                                }

                            }
                        },
                        kli_c_kor_zip: {

                            validators: {
                                enabled: false,
                                notEmpty: {
                                    message: 'Pole jest wymagane'
                                },
                                zipCode: {
                                    country: 'PL',
                                    message: 'Nieprawidłowy format kodu pocztowego'
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
                url: '<?PHP echo base_url(); ?>Kontrahent/Dodaj_kontrahenta',
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
                        if (data.response.message === "Dodano") {
                            $(this).closest('form').find("input[type=text]").val("");
                            $('#nowyKontrahent').data('formValidation').resetForm();
                            $('#nowyKontrahent').trigger("reset");
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
        $('#nowyKontrahent').data('formValidation').resetForm();
        $('#nowyKontrahent').trigger("reset");

    })

</script>