<div class="container-fluid bd-example-row">
    <form id="edytujKontrahenta" name="edytujKontrahenta" method="post" enctype="multipart/form-data" accept-charset="utf-8">
        <div class="content p-4">
            <div class="profile-box info-box contact card mb-4">

                <header class="h6 bg-primary text-auto p-4">
                    <div class="title">Podstawowe informacje</div>
                </header>

                <div class="content p-4">
                    <div class="form-group row">
                        <label for="inputDokument" class="col-sm-4 col-form-label">Nazwa pełna</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="kli_c_name" id="kli_c_name" value="<?PHP echo $kontrahent->nazwa; ?>">
                        </div>

                    </div>
                    <div class="form-group row">
                        <label for="inputDokument" class="col-sm-4 col-form-label">Nazwa skrócona</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="kli_c_name_short" id="kli_c_name_short" value="<?PHP echo $kontrahent->nazwa_short; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group row">
                                <label for="inputDokument" class="col-sm-4 col-form-label">Nip</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="kli_Nip" id="kli_Nip" value="<?PHP echo $kontrahent->nip; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group row">
                                <label for="inputDokument" class="col-sm-4 col-form-label">Regon</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="kli_Regon" id="kli_Regon" value="<?PHP echo $kontrahent->regon; ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row"  id="krs_f_h" style="display:none;">
                        <label for="inputDokument" class="col-sm-4 col-form-label">KRS</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="kli_KRS" id="kli_KRS" value="<?PHP echo $kontrahent->krs; ?>">
                        </div>
                    </div>

                </div>
            </div>

            <div class="profile-box info-box contact card mb-4">

                <header class="h6 bg-primary text-auto p-4">
                    <div class="title">Dodatkowe informacje</div>
                </header>

                <div class="content p-4">

                    <div class="form-group row">
                        <label for="inputDokument" class="col-sm-4 col-form-label">Branża</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="kli_Spec" id="kli_Spec" value="<?PHP echo $kontrahent->spec; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputDokument" class="col-sm-4 col-form-label">Numer kontaktowy</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="kli_c_main_phone" id="kli_c_main_phone" value="<?PHP echo $kontrahent->phone; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputDokument" class="col-sm-4 col-form-label">Numer konta</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="kli_Bank" id="kli_Bank" value="<?PHP echo $kontrahent->konto; ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputDokument" class="col-sm-4 col-form-label">Charakter prawny</label>
                        <div class="col-sm-8">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="char_prawny"
                                           value="1" <?PHP echo ($kontrahent->char_prawny == 1) ? "checked" : ""; ?>/>
                                    <span class="radio-icon"></span>
                                    <span
                                        class="form-check-description">Osoba fizyczna</span>
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="char_prawny"
                                           value="2" <?PHP echo ($kontrahent->char_prawny == 2) ? "checked" : ""; ?>/>
                                    <span class="radio-icon"></span>
                                    <span class="form-check-description">Spółka</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputDokument" class="col-sm-4 col-form-label">Adres korespondencyjny</label>
                        <div class="col-sm-8">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="ad_kores"
                                           value="1" <?PHP echo (empty($kontrahent->adr_Kor)) ? "checked" : ""; ?>/>
                                    <span class="radio-icon"></span>
                                    <span class="form-check-description">Taki sam</span>
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="ad_kores"
                                           value="2" <?PHP echo ($kontrahent->adr_Kor) ? "checked" : ""; ?>/>
                                    <span class="radio-icon"></span>
                                    <span class="form-check-description">Inny</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="profile-box info-box contact card mb-4">
                <header class="h6 bg-primary text-auto p-4">
                    <div class="title">Kontakt</div>
                </header> 
                <div class="content p-4">
                    <div class="form-group row">
                        <label for="inputDokument" class="col-sm-4 col-form-label">Ulica</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="kli_c_main_ulica" id="kli_c_main_ulica" value="<?PHP echo $kontrahent->ulica; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputDokument" class="col-sm-4 col-form-label">Kod i miasto</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="kli_c_main_zip" id="kli_c_main_zip" value="<?PHP echo $kontrahent->kod_pocztowy; ?>">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="kli_c_main_miasto" id="kli_c_main_miasto" value="<?PHP echo $kontrahent->miasto; ?>">
                        </div>
                    </div>

                </div>
            </div>
            <div class="profile-box info-box contact card mb-4" id="ad_kores_f_h">
                <header class="h6 bg-primary text-auto p-4">
                    <div class="title">Adres do korespondencji</div>
                </header> 
                <div class="content p-4">
                    <div class="form-group row">
                        <label for="inputDokument" class="col-sm-4 col-form-label">Ulica</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="kli_c_kor_ulica" id="kli_c_kor_ulica" value="<?PHP echo $kontrahent->kor_ul; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputDokument" class="col-sm-4 col-form-label">Kod i miasto</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="kli_c_kor_zip" id="kli_c_kor_zip" value="<?PHP echo $kontrahent->kor_zip; ?>">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="kli_c_kor_miasto" id="kli_c_kor_miasto" value="<?PHP echo $kontrahent->kor_miasto; ?>">
                        </div>
                    </div>

                </div>
            </div>

            <input type="hidden" name="pk_kontrahent" value="<?PHP echo $kontrahent->id_kontrahenta; ?>">
            <input type="hidden" name="fk_adres" value="<?PHP echo $kontrahent->fkaddress; ?>">
            <input type="hidden" name="fk_adres_kor" value="<?PHP echo $kontrahent->adr_Kor; ?>">

            <div class="form-group">
                <div class="col-xs-5 col-xs-offset-3">
                    <button type="submit" class="btn btn-primary fuse-ripple-ready">Modyfikuj</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cofnij</button>
                </div>
            </div>
        </div>

    </form>

</div>


<style>
    .tab-content { border: 1px solid #ddd;padding: 10px;}
    .nav-tabs {border: 1px solid #ddd;}
    .tab-pane {min-height: 100px;}
    .hclass{background-color: rgb(212, 212, 212); border-color: rgb(0, 0, 0); border-top-width: 1.5px; border-top-style: solid; text-align: center;}
    .w50{width:50%;}
    .hf{text-align:center;}
    .la{text-align:left;}
    .bbottom{border-color: rgb(0, 0, 0); border-bottom-width: 1.5px; border-bottom-style: solid; text-align: center;}
    .bbottoml{border-color: rgb(0, 0, 0); border-bottom-width: 1px; border-bottom-style: solid;}

</style>
<script>
    $(document).ready(function () {

        $("#krs_f_h").hide();
        $("#ad_kores_f_h").hide();
        $('input[type=radio][name=char_prawny]').change(function () {
            if (this.value == '2') {
                $("#krs_f_h").fadeIn(1000);
            } else {
                $("#krs_f_h").fadeOut(1000);
                $("#kli_KRS").val("");
            }
        });
        if ($("input[type=radio][name='ad_kores']:checked").val() == '2') {
            $("#ad_kores_f_h").fadeIn(1000);
        }

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

        $('#edytujKontrahenta').find('input[name="char_prawny"]').on('change', '[name="char_prawny"]', function (e) {
            var field = $(this).attr('name');
            $('#edytujKontrahenta').formValidation('revalidateField', field);

            var $form = $('#edytujKontrahenta')
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
            $('#edytujKontrahenta').formValidation('revalidateField', field);

            var $form = $('#edytujKontrahenta')
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
                        "char_prawny": {
                            validators: {
                                notEmpty: {
                                    message: 'Pole jest wymagane'
                                },
                            }
                        },
                        kli_Nip: {
                            validators: {
                                notEmpty: {
                                    message: 'Pole jest wymagane'
                                },
                            }
                        },
                        kli_Regon: {
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
                url: '<?PHP echo base_url(); ?>Kontrahent/Edytuj_kontrahenta',
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

                    if (data.response.message === "Zmodyfikowano") {
                        setTimeout(
                                function ()
                                {
                                    location.reload();
                                }, 2000);

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
    $('#modyfikacja_kontrahenta').on('shown.bs.modal', function () {
        $('#edytujKontrahenta').data('formValidation').resetForm();
        $('#edytujKontrahenta').trigger("reset");

    })

</script>
