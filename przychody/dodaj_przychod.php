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
    <div class="page-header bg-primary text-auto p-6">
        <div class="row col-lg-12 text-white">
            <h2 class="doc-title" id="content">Tworzenie faktury</h2>

            <div class="col-md-2 "></div>
            <div class="px-4 py-2 bg-red-500" style="height:29px;" id="ilosc_w">Ilość pozycji : 0</div>
            <div class="px-4 py-2 bg-primary" style="height:29px;"id="curr_brutto">Brutto : 0 zł</div>
            <div class="bg-primary px-4 py-2" style="height:29px;"id="curr_netto">Netto : 0 zł</div>
            <div class="bg-primary px-4 py-2" style="height:29px;" id="curr_vat">Vat : 0 zł</div>
        </div>
    </div>
    <!-- / HEADER -->

    <div class="page-content row p-12">

        <!-- STANDARD ALERTS -->
        <div class="col-12 col-md-12">

            <form id="nowyPrzychod" name="nowyPrzychod" method="post">

                <div class="profile-box info-box general card mb-4">

                    <header class="h6 bg-primary text-auto p-4">
                        <div class="title text-center"><b>Faktura <?PHP echo $faktura . "/KOM/" . date('m/y');?></b></div>
                    </header>

                    <div class="content p-4">

                        <div class="row">
                            <div class="form-group pmd-textfield pmd-textfield-floating-label col-md-2">
                                <label for="regular1" class="control-label">Data wystawienia</label>
                                <input type="text" name="inputDatawystaw" id="inputDatawystaw" class="form-control" />
                            </div>
                            <div class="form-group pmd-textfield pmd-textfield-floating-label col-md-2">
                                <label for="regular1" class="control-label">Data sprzedaży</label>
                                <input type="text" name="inputDatasprze" id="inputDatasprze" class="form-control" />
                            </div>
                            <div class="form-group pmd-textfield pmd-textfield-floating-label col-md-2">
                                <label for="regular1" class="control-label">Termin płatności</label>
                                <select class="form-control" name="termin_platnosci">
                                    <option value="7">7 dni</option>
                                    <option value="14">14 dni</option>
                                    <option value="21">21 dni</option>
                                    <option value="30">30 dni</option>
                                    <option value="40">40 dni</option>
                                    <option value="45">45 dni</option>
                                    <option value="90">90 dni</option>
                                    <option value="inna">Inna</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                    <label>Nabywca</label>
                                    <select id="inputKontrahent" name="inputKontrahent" class="select-with-search pmd-select2 form-control">
                                        <option></option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group col-md-2">
                                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                    <label>Rejon</label>
                                    <select id="inputRejon" name="inputRejon" class="select-with-search pmd-select2 form-control">
                                        <option></option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-2">
                                <div class="col-xs-5 ">
                                    <button class="btn btn-primary btn-add-panel mt-5" type="button"> <i class="glyphicon glyphicon-plus"></i> Dodaj pozycję</button>

                                </div>
                            </div>
                        </div>
                       
                        <div class="row">
                            <div class="col-sm-12" id="extra_group">

                                <!-- s -->


                                <div class="widget widget2 card template mb-2 bg-light-blue-50" style="display: none;">
                                    <div class="col-lg-12">
                                        <div class="row i_row">
                                            <div class="form-group col-md-4">
                                                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                    <label>Nazwa</label>
                                                    <input type="text" name="p_nazwa[]" class="form-control"></input>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-1">
                                                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                    <label>Ilość</label>
                                                    <input type="text" name="p_ilosc[]" class="form-control p_ilosc"></input>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                    <label>Jednostka</label>
                                                    <select class="form-control" name="p_unit[]">
                                                        <option value="Kpl">Komplet</option>
                                                        <option value="Kg">Kilogram</option>
                                                        <option value="m2">Metr kwadratowy</option>
                                                        <option value="m3">Metr sześcienny</option>
                                                        <option value="mb">Metr bieżący</option>
                                                        <option value="rbh">Roboczogodzina</option>
                                                        <option value="ltr">Litr</option>
                                                        <option value="szt">Sztuka</option>
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="form-group col-md-2">
                                                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                    <label>Cena netto</label>
                                                    <input type="text" name="p_cnetto[]" class="form-control p_cnetto"></input>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="regular1" class="control-label">VAT</label>
                                                <select class="form-control p_pvat" name="p_pvat[]">
                                                    <option value="8">8</option>
                                                    <option value="23">23</option>
                                                    <option value="1">Zw</option>
                                                    <option value="2">Oo</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-1 rh text-red" style="padding-top:22px;cursor:default;">
                                               X
                                            </div>
                                        </div>
                                    </div>
                                </div>




                                <!-- s -->
                            </div> </div>


                        <div class="col-md-12">
                            <label style="color: rgba(0,0,0,.38);">Opis</label>
                            <textarea id="inputOpis" name="inputOpis" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-5 col-xs-offset-3">
                        <button type="submit" class="btn btn-primary fuse-ripple-ready">Utwórz fakturę</button>

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

        $(document).bind("keyup change", function (e) {
            var pbrutto = 0;
            var wartosc_vat = 0;
            var cnetto = 0;

            jQuery('#extra_group .template').each(function () {

                var qty_field_current = (Number(jQuery(this).find('.p_ilosc').val()));
                var vatfield_current = (Number(jQuery(this).find('.p_pvat').val()));
                var nettofield_current = (Number(jQuery(this).find('.p_cnetto').val().replace("Zł ", "").replace(",", "")));
                cnetto = cnetto + (nettofield_current * qty_field_current);
                wartosc_vat = wartosc_vat + (nettofield_current * vatfield_current) / 100;
                wartosc_vat = wartosc_vat * qty_field_current;

            });

            pbrutto = cnetto + wartosc_vat;
            $("#curr_brutto").html("Brutto : " + pbrutto + " zł");
            $("#curr_netto").html("Netto : " + cnetto + " zł");
            $("#curr_vat").html("Vat : " + wartosc_vat + " zł");

        });
        var $template = $(".template");
        var hash = 0;

        $(".btn-add-panel").on("click", function () {

            if (hash >= 25)
            {
                return false;
            }
            hash++;
            $("#ilosc_w").html("Ilość pozycji : " + hash);
            var $newPanel = $template.clone();
            $("#extra_group").append($newPanel.fadeIn());
            $newPanel.find(".p_cnetto").inputmask({alias: "currency", prefix: "Zł "});
            $newPanel.find(".p_ilosc").inputmask({alias: "currency", prefix: ""});
            // $newPanel.find(".p_ilosc").inputmask({alias: "currency", prefix: ""});

        });
        $(document).on('click', '.rh', function () {
            hash--;
            $("#ilosc_w").html("Ilość pozycji : " + hash);
            $(this).parents('.widget').get(0).remove();

        });
        $('#inputDatasprze').bootstrapMaterialDatePicker({weekStart: 0, time: false}).on('change', function (e) {
            $('#nowyPrzychod').formValidation('revalidateField', 'inputDatasprze');
        });
        $('#inputDatawystaw').bootstrapMaterialDatePicker({weekStart: 0, time: false}).on('change', function (e) {
            $('#nowyPrzychod').formValidation('revalidateField', 'inputDatawystaw');
        });
        $("#inputBrutto,#inputNetto").inputmask({alias: "currency", prefix: "Zł "});
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
        $('#nowyPrzychod').formValidation({
            framework: 'bootstrap',
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
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
                inputDatawystaw: {
                    validators: {
                        notEmpty: {
                            message: 'Pole jest wymagane'
                        }
                    }
                },
                inputDatasprze: {
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
            e.preventDefault();
            $.ajax({
                url: '<?PHP echo base_url(); ?>Przychody/nowy_przychod',
                method: 'POST',
                data: $form.serialize() + "&" + csrfName + "=" + csrfHash,
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
                            $("#inputKontrahent,#inputRejon").val(null).trigger("change");
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
        $('#nowyPrzychod').data('formValidation').resetForm();
        $('#nowyPrzychod').trigger("reset");
    })

</script>
