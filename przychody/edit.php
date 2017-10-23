<link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>assets/js/select2/css/select2.min.css" />
<link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>assets/js/select2/css/select2-bootstrap.css" />
<link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>assets/js/select2/css/pmd-select2.css" />

<div class="doc page-layout simple full-width">

    <!-- HEADER -->
    <div class="page-header bg-primary text-auto p-6"><h2 class="doc-title" id="content">Korekta faktury <?PHP echo $faktura->numer; ?></h2>
    </div>
    <!-- / HEADER -->

    <div class="page-content row p-12">

        <!-- STANDARD ALERTS -->
        <div class="col-12 col-md-12">
            <div class="modal-content">

                <div class="modal-header bg-green-400 text-white">

                    <div class="row col-lg-12">
                        <div class="col-md-8"><h4 class="modal-title" id="myLargeModalLabel">Korekta faktury <?PHP echo $faktura->numer; ?></h4></div>
                        <div class="px-4 py-2 bg-red-500" style="height:29px;" id="ilosc_w_add">Ilość pozycji : 0</div>
                        <div class="px-4 py-2 bg-primary" style="height:29px;"id="curr_brutto_add">Brutto : 0 zł</div>
                        <div class="bg-primary px-4 py-2" style="height:29px;"id="curr_netto_add">Netto : 0 zł</div>
                        <div class="bg-primary px-4 py-2" style="height:29px;" id="curr_vat_add">Vat : 0 zł</div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="container-fluid bd-example-row">

                        <form id="edycjaFaktury" name="nowyPracownik" method="post">

                            <div class="content p-1 page-content">
                                <div class="form-group row">
                                    <label for="inputKontrahent2" class="col-sm-2 col-form-label">Nabywca</label>
                                    <div class="col-sm-10">
                                        <select id="inputKontrahent2" name="inputKontrahent2" class="select-with-search pmd-select2 form-control" disabled>
                                            <option value="<?PHP echo $faktura->fk_kontrahent; ?>"><?PHP echo $faktura->kontrah; ?></option>
                                        </select>
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-10">
                                        <div class="text-center" id="kontrahent_extra"></div>
                                    </div>

                                </div>
                                <ul class="nav nav-tabs" role="tablist">

                                    <li class="nav-item">
                                        <a class="nav-link btn fuse-ripple-ready active" id="podstawowe-info" data-toggle="tab" href="#podstawowe-info-pane" role="tab" aria-controls="podstawowe-info-pane" aria-expanded="true">Podstawowe informacje</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link btn fuse-ripple-ready" id="dodatkowe-onfo" data-toggle="tab" href="#dodatkowe-onfo-pane" role="tab" aria-controls="dodatkowe-onfo-pane" aria-expanded="false">Opis</a>
                                    </li>
                                </ul>

                                <div class="tab-content">

                                    <div role="tabpanel" class="tab-pane fade active show" id="podstawowe-info-pane" aria-labelledby="podstawowe-info" aria-expanded="true">
                                        <div class="content p-1 page-content">
                                            <div class="row">
                                                <div class="col-lg-6">

                                                    <div class="form-group row">
                                                        <label for="inputDatawystaw" class="col-sm-5 col-form-label">Data wystawienia</label>
                                                        <div class="col-sm-7">
                                                            <input type="text" name="inputDatawystaw" id="inputDatawystaw" class="form-control" value="<?PHP echo $faktura->z_dnia; ?>" disabled/>
                                                        </div>

                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="inputDatasprze" class="col-sm-5 col-form-label">Data sprzedaży</label>
                                                        <div class="col-sm-7">
                                                            <input type="text" name="inputDatasprze" id="inputDatasprze" class="form-control" value="<?PHP echo $faktura->sprzedano; ?>" disabled/>
                                                        </div>

                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="termin_platnosci" class="col-sm-5 col-form-label">Termin płatności</label>
                                                        <div class="col-sm-7">
                                                            <select class="form-control" name="termin_platnosci" disabled>
                                                                <option <?PHP echo ($faktura->ilosc_dni == "7") ? "selected" : ""; ?> value="7">7 dni</option>
                                                                <option <?PHP echo ($faktura->ilosc_dni == "14") ? "selected" : ""; ?> value="14">14 dni</option>
                                                                <option <?PHP echo ($faktura->ilosc_dni == "21") ? "selected" : ""; ?> value="21">21 dni</option>
                                                                <option <?PHP echo ($faktura->ilosc_dni == "30") ? "selected" : ""; ?> value="30">30 dni</option>
                                                                <option <?PHP echo ($faktura->ilosc_dni == "40") ? "selected" : ""; ?> value="40">40 dni</option>
                                                                <option <?PHP echo ($faktura->ilosc_dni == "45") ? "selected" : ""; ?> value="45">45 dni</option>
                                                                <option <?PHP echo ($faktura->ilosc_dni == "90") ? "selected" : ""; ?> value="90">90 dni</option>

                                                            </select>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-lg-6"> 
                                                    <div class="form-group row">
                                                        <label for="inputDatasprze" class="col-sm-3 col-form-label">Rejon</label>
                                                        <div class="col-sm-9">
                                                            <select id="inputRejon2" name="inputRejon2" class="select-with-search pmd-select2 form-control" disabled>
                                                                <option value="<?PHP echo $faktura->id_rejonu; ?>"><?PHP echo $faktura->rejont; ?></option>
                                                            </select>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>


                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="dodatkowe-onfo-pane" role="tabpanel" aria-labelledby="dodatkowe-onfo" aria-expanded="false">
                                        <div class="form-group row">

                                            <div class="col-sm-12">
                                                <textarea id="inputOpis" name="inputOpis" style="height:100px;" class="form-control" disabled><?PHP echo $faktura->uwagi; ?></textarea>
                                            </div>

                                        </div>

                                    </div>

                                </div>  

                                <center><button disabled="disabled" class="btn btn-primary btn-add-panel btn-xs mt-2 mb-2" id="newrow" type="button"> <i class="icon icon-playlist-plus"></i> Dodaj wiersz</button></center>

                                <table style="border-collapse:collapse;width:100%;" id="faktura_t" class="table table-bordered">
                                    <thead>
                                        <tr class="hclass">
                                            <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;" wdith="3%"></td>
                                            <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;">Nazwa</td>
                                            <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;" width="10%">Ilość</td>
                                            <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;" width="15%">j.m</td>
                                            <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;" width="15%">Cena netto</td>
                                            <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;" width="15%">VAT<br />[%]</td>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?PHP foreach ($wpisy as $w) { ?>
                                            <tr><td></td>
                                                <td><input type="text" value="<?PHP echo $w->nazwa; ?>" name="data[InvoiceContent][<?PHP echo $w->id_item; ?>][name]" disabled class="form-control"></td>
                                                <td><input type="text" value="<?PHP echo $w->ilosc; ?>" name="data[InvoiceContent][<?PHP echo $w->id_item; ?>][count]" class="form-control p_ilosc" style="text-align: right;"></td>
                                                <td><select class="form-control" name="data[InvoiceContent][<?PHP echo $w->id_item; ?>][unit]">
                                                        <option <?PHP echo ($w->jednostka == "Kpl") ? "selected" : ""; ?> value="Kpl">kpl</option>
                                                        <option <?PHP echo ($w->jednostka == "kg") ? "selected" : ""; ?> value="Kg">kg</option>
                                                        <option <?PHP echo ($w->jednostka == "m2") ? "selected" : ""; ?> value="m2">m2</option>
                                                        <option <?PHP echo ($w->jednostka == "m3") ? "selected" : ""; ?> value="m3">m3</option>
                                                        <option <?PHP echo ($w->jednostka == "mb") ? "selected" : ""; ?> value="mb">mb</option>
                                                        <option <?PHP echo ($w->jednostka == "rbh") ? "selected" : ""; ?> value="rbh">rbh</option>
                                                        <option <?PHP echo ($w->jednostka == "ltr") ? "selected" : ""; ?> value="ltr">ltr</option>
                                                        <option <?PHP echo ($w->jednostka == "szt") ? "selected" : ""; ?> value="szt">szt</option>
                                                    </select></td>



                                                <td><input type="text" value="<?PHP echo $w->netto; ?>" name="data[InvoiceContent][<?PHP echo $w->id_item; ?>][netto]" class="form-control p_cnetto" style="text-align: right;"></td>
                                                <td><select class="form-control p_pvat" name="data[InvoiceContent][<?PHP echo $w->id_item; ?>][vat]">
                                                        <option <?PHP echo ($w->vat == "8") ? "selected" : ""; ?> value="8">8</option>
                                                        <option <?PHP echo ($w->vat == "22") ? "selected" : ""; ?> value="22">22</option>
                                                        <option <?PHP echo ($w->vat == "23") ? "selected" : ""; ?> value="23">23</option>
                                                        <option <?PHP echo ($w->typ_vat == "Zw") ? "selected" : ""; ?> value="Zw">Zw</option>
                                                        <option <?PHP echo ($w->typ_vat == "Oo") ? "selected" : ""; ?> value="Oo">Oo</option>
                                                    </select></td>
                                            </tr>
                                        <?PHP } ?>
                                    </tbody>

                                </table>


                            </div>

                            <div class="form-group">
                                <div class="col-xs-5 col-xs-offset-3">
                                    <button type="submit" class="btn btn-primary fuse-ripple-ready">Utwórz fakturę korygującą</button>
                                </div>
                            </div>
                            <input type="hidden" name="faktura_id" value="<?PHP echo $faktura->id_przychodu; ?>">
                            <input type="hidden" name="platnosci[id_platnosci]" value="<?PHP echo $faktura->id_platnosci; ?>">
                            <input type="hidden" name="platnosci[status]" value="<?PHP echo $faktura->status; ?>">
                            <input type="hidden" name="platnosci[otrzymana_kwota]" value="<?PHP echo $faktura->otrzymana_kwota; ?>">
                            <input type="hidden" name="platnosci[pozostala_kwota]" value="<?PHP echo $faktura->pozostala_kwota; ?>">

                        </form>





                    </div>
                </div>

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
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.2.6/jquery.inputmask.bundle.min.js"></script>


            <script src="<?PHP echo base_url(); ?>assets/js/formValidation.min.js"></script>
            <script src="<?PHP echo base_url(); ?>assets/js/fv.js"></script>
            <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js" type="text/javascript"></script>
            <link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>assets/vendor/datetimepicker/css/bootstrap-material-datetimepicker.css" />
            <script type="text/javascript" language="javascript" src="<?PHP echo base_url(); ?>assets/vendor/datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
            <script type="text/javascript" src="<?PHP echo base_url(); ?>assets/js/select2/js/select2.full.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/i18n/pl.js"></script>
            <script type="text/javascript" src="<?PHP echo base_url(); ?>assets/js/select2/js/pmd-select2.js"></script>
            <script>
$(document).ready(function() {

    function calculateGrandTotal() {
        var grandTotal = 0;
        var pbrutto = 0;
        var wartosc_vat = 0;
        var cnetto = 0;
        var entries = 0;
        $('#faktura_t > tbody  > tr').each(function(i) {
            var qty_field_current = (Number(jQuery(this).find('.p_ilosc').val()));
            var vatfield_current;
            var nettofield_current = (Number(jQuery(this).find('.p_cnetto').val().replace("Zł ", "").replace(",", "")));
            if ($(this).find('.p_pvat').val() === "Oo" || $(this).find('.p_pvat').val() === "Zw") {
                vatfield_current = 0
            } else {
                vatfield_current = (Number(jQuery(this).find('.p_pvat').val()))
            }
            entries++;
            cnetto = cnetto + (nettofield_current * qty_field_current);
            wartosc_vat = wartosc_vat + (nettofield_current * vatfield_current) / 100;
            wartosc_vat = wartosc_vat * qty_field_current;
        });
        $("#ilosc_w_add").html("Ilość pozycji : " + entries);
        pbrutto = cnetto + wartosc_vat;
        $("#curr_brutto_add").html("Brutto : " + pbrutto.toFixed(2) + " zł");
        $("#curr_netto_add").html("Netto : " + cnetto.toFixed(2) + " zł");
        $("#curr_vat_add").html("Vat : " + wartosc_vat.toFixed(2) + " zł")
    }
    $(document).bind("keyup change ready", function(e) {
        calculateGrandTotal()
    });
    $('#inputDatasprze').bootstrapMaterialDatePicker({
        weekStart: 0,
        time: !1
    }).on('change', function(e) {
        $('#edycjaFaktury').formValidation('revalidateField', 'inputDatasprze')
    });
    $('#inputDatawystaw').bootstrapMaterialDatePicker({
        weekStart: 0,
        time: !1
    }).on('change', function(e) {
        $('#edycjaFaktury').formValidation('revalidateField', 'inputDatawystaw')
    });
    $("#inputBrutto,#inputNetto").inputmask({
        alias: "currency",
        prefix: "Zł "
    });
    $("#inputKontrahent2").select2({
        theme: "bootstrap",
        width: '100%',
        language: "pl",
        ajax: {
            type: "GET",
            url: '<?PHP echo base_url(); ?>Kontrahent/lista_kontrahentow',
            dataType: 'json',
            delay: 250,
            data: function(params) {
                return {
                    term: params.term,
                    page_limit: 100,
                    <?php echo $this->security->get_csrf_token_name();?>: '<?php echo $this->security->get_csrf_hash(); ?>',
                }
            },
            processResults: function(data) {
                return {
                    results: data
                }
            }
        },
    });
    $("#inputRejon2").select2({
        theme: "bootstrap",
        width: '100%',
        language: "pl",
        ajax: {
            type: "GET",
            url: '<?PHP echo base_url(); ?>Rejon/lista_rejonow',
            dataType: 'json',
            delay: 250,
            data: function(params) {
                return {
                    term: params.term,
                    page_limit: 100,
                    <?php echo $this->security->get_csrf_token_name();?>: '<?php echo $this->security->get_csrf_hash(); ?>',
                }
            },
            processResults: function(data) {
                return {
                    results: data
                }
            }
        },
    });
    $("#inputKontrahent2").on('change', function(e) {
        var data = $(this).select2('data');
        $("#kontrahent_extra").html("<b>Adres:</b> ul. " + data[0].all.ulica + ", " + data[0].all.kod_pocztowy + " " + data[0].all.miasto + ", Polska, <b>NIP:</b> " + data[0].all.nip + "")
    });
    var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
        csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
    $('#edycjaFaktury').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            inputRejon2: {
                validators: {
                    notEmpty: {
                        message: 'Pole jest wymagane'
                    },
                }
            },
            inputKontrahent2: {
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
    }).on('success.form.fv', function(e) {
        var $form = $(e.target),
            fv = $form.data('formValidation');
        e.preventDefault();
        $.ajax({
            url: '<?PHP echo base_url(); ?>Przychody/krekta_faktury/<?PHP echo $faktura->id_przychodu; ?>',
            method: 'POST',
            data: $form.serialize() + "&" + csrfName + "=" + csrfHash+"&termin="+$("#inputDatasprze").val(),
            success: function(data) {
                $(this).closest('form').find("input[type=text]").val("");
                csrfName = data.regen.csrfName;
                csrfHash = data.regen.csrfHash;

                if (data.response.status) {
                    if (data.response.message === "Dodano") {
                        $(this).closest('form').find("input[type=text]").val("");
                        $('#edycjaFaktury').trigger("reset");
                       // $(':input[type="submit"]').prop('disabled', true);
                        setTimeout( function()  { window.location.href = '<?PHP echo base_url("/Przychody/Podglad/".$faktura->id_przychodu);?>'; }, 2000);
                       
                    }
                }
                new PNotify({
                    text: data.response.message,
                    confirm: {
                        confirm: !0,
                        buttons: [{
                            text: 'Zakmnij',
                            addClass: 'btn btn-link',
                            click: function(notice) {
                                notice.remove()
                            }
                        }, null]
                    },
                    buttons: {
                        closer: !1,
                        sticker: !1
                    },
                    animate: {
                        animate: !0,
                        in_class: 'slideInDown',
                        out_class: 'slideOutUp'
                    },
                    addclass: 'md multiline action-on-bottom'
                })
            }
        })
    })/*.on('err.field.fv', function(e, data) {
        if (data.fv.getSubmitButton()) {
            data.fv.disableSubmitButtons(!1)
        }
    }).on('success.field.fv', function(e, data) {
        if (data.fv.getSubmitButton()) {
            data.fv.disableSubmitButtons(!1)
        }
    })*/;

})
            </script>

        </div>
    </div>
</div>
