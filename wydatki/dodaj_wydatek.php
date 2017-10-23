<div class="container-fluid bd-example-row">
    <form id="nowyWydatek" name="nowyWydatek" method="post" enctype="multipart/form-data" accept-charset="utf-8">
        <div class="content p-4">
            <div class="form-group row">
                <label for="inputDokument" class="col-sm-4 col-form-label">Numer dokumentu</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="inputDokument" id="inputDokument" placeholder="">
                </div>

            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group row mt-2">
                        <label for="inputDokument" class="col-sm-4 col-form-label">Dostawca</label>
                        <div class="col-sm-8">
                            <select id="inputKontrahentf" name="inputKontrahent" class="select-with-search pmd-select2 form-control">
                                <option></option>
                            </select>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group row mt-2">
                        <label for="inputDokument" class="col-sm-4 col-form-label">Osoba kupująca</label>
                        <div class="col-sm-8">
                            <select id="inputKupiecf" name="inputKupiec" class="select-with-search pmd-select2 form-control">
                                <option></option>
                            </select>
                        </div>

                    </div>
                </div>
            </div>


            <div class="form-group row">
                <div class="col-sm-2"></div>
                <div class="col-sm-10">
                    <div class="text-center" id="kontrahent_extra"></div>
                </div>

            </div>
            <ul class="nav nav-tabs bg-green-400 text-white" role="tablist">

                <li class="nav-item">
                    <a class="nav-link btn fuse-ripple-ready active" id="podstawowe-info" data-toggle="tab" href="#podstawowe-info-pane" role="tab" aria-controls="podstawowe-info-pane" aria-expanded="true">Podstawowe informacje</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn fuse-ripple-ready" id="dodatkowe-info" data-toggle="tab" href="#dodatkowe-info-pane" role="tab" aria-controls="dodatkowe-info-pane" aria-expanded="false">Dodatkowe informacje</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn fuse-ripple-ready" id="dodatkowe-onfo" data-toggle="tab" href="#dodatkowe-onfo-pane" role="tab" aria-controls="dodatkowe-onfo-pane" aria-expanded="false">Opis</a>
                </li>


            </ul>

            <div class="tab-content">

                <div role="tabpanel" class="tab-pane fade active show" id="podstawowe-info-pane" aria-labelledby="podstawowe-info" aria-expanded="true">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="form-group row">
                                <label for="inputDatawystaw" class="col-sm-5 col-form-label">Data zakupu</label>
                                <div class="col-sm-7">
                                    <input type="text" name="inputData" id="inputDataf" class="form-control" />
                                </div>

                            </div>
                            <div class="form-group row">
                                <label for="termin_platnosci" class="col-sm-5 col-form-label">Termin płatności</label>
                                <div class="col-sm-7">
                                    <input type="text" name="inputTermin" id="inputTerminf" class="form-control" />
                                </div>

                            </div>
                            <div class="form-group row mt-2">
                                <label for="inputDatasprze" class="col-sm-5 col-form-label">Rejon</label>
                                <div class="col-sm-7">
                                    <select id="inputRejonf" name="inputRejon" class="select-with-search pmd-select2 form-control">
                                        <option></option>
                                    </select>
                                </div>

                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <div class="form-group">
                                <label>Płatność</label>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="inputMetoda" id="inlineRadio2"
                                               value="1"/>
                                        <span class="radio-icon"></span>
                                        <span class="form-check-description">Gotówką</span>
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="inputMetoda" id="inlineRadio5"
                                               value="3"/>
                                        <span class="radio-icon"></span>
                                        <span class="form-check-description">Karta</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="inputMetoda" id="inlineRadio3"
                                               value="2"/>
                                        <span class="radio-icon"></span>
                                        <span class="form-check-description">Przelew</span>
                                    </label>
                                </div>

                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="form-group">
                                <label>Status</label>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="inputStatus"
                                               value="1" checked=""/>
                                        <span class="radio-icon"></span>
                                        <span
                                            class="form-check-description">Do zapłaty</span>
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
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

                    </div>

                    <div class="form-group row gpojazd">
                        <label for="inputPojazd" class="col-sm-4 col-form-label">Powiązany pojazd</label>
                        <div class="col-sm-8">
                            <select id="inputPojazd" name="inputPojazd" class="select-with-search pmd-select2 form-control">
                                <option></option>
                            </select>
                        </div>

                    </div>
                    <div class="form-group row gpojazd">
                        <label for="inputLitry" class="col-sm-4 col-form-label">Ilość litrów</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="inputLitry" id="inputLitry" placeholder="">
                        </div>

                    </div>



                </div>
                <div class="tab-pane fade" id="dodatkowe-onfo-pane" role="tabpanel" aria-labelledby="dodatkowe-onfo" aria-expanded="false">
                    <div class="form-group row">

                        <div class="col-sm-12">
                            <textarea id="inputOpis" name="inputOpis" style="height:100px;" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="dodatkowe-info-pane" role="tabpanel" aria-labelledby="dodatkowe-info" aria-expanded="false">
                    <div class="row">
                        <div class="col-lg-6">



                            <div class="form-group row">
                                <label for="inputNaRzecz" class="col-sm-5 col-form-label">Na rzecz</label>
                                <div class="col-sm-7">
                                    <select id="inputNaRzecz" name="inputNaRzecz" class="select-with-search pmd-select2 form-control">
                                        <option></option>
                                    </select>
                                </div>

                            </div>


                            <div class="form-group row">
                                <label for="inputKontrakt" class="col-sm-5 col-form-label">Kontrakt</label>
                                <div class="col-sm-7">
                                    <select id="inputKontrakt" name="inputKontrakt" class="select-with-search pmd-select2 form-control">
                                        <option></option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <div class="form-group row">
                                <label for="inputStatus" class="col-sm-5 col-form-label">Priorytet</label>
                                <div class="col-sm-7">
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
                        </div>

                    </div>

                    <div class="form-group row">
                        <label for="inputDokument" class="col-sm-4 col-form-label">Skan dokumentu</label>
                        <div class="col-sm-8">
                            <input type="file" class="form-control" name="inputSkan" id="inputSkan">
                        </div>

                    </div>
                    <div class="form-group row" id="partly_paid">
                        <label for="inputDokument" class="col-sm-4 col-form-label">Zapłacono</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control inputOplacono" id="inputOplacono" name="inputOplacono">
                        </div>

                    </div>



                    <!-- -->
                </div>
            </div>

            <center><button class="btn btn-primary btn-add-panel btn-xs mt-2 mb-2" id="newrow" type="button"> <i class="icon icon-playlist-plus"></i> Dodaj wiersz</button></center>

            <table style="border-collapse:collapse;width:100%;" id="faktura_t" class="table table-bordered">
                <thead>
                    <tr class="hclass">
                        <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;" wdith="3%"></td>
                        <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;">Kategoria</td>
                        <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;" width="15%">Cena netto</td>
                        <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;" width="15%">VAT<br />[%]</td>
                    </tr>
                </thead>
                <tbody>
                    <tr><td></td>
                        <td><div class="form-group"><select name="inputKategoria[]" id="inputKategoriaf" class="select-with-search pmd-select2 form-control inputKategoria">
                                    <option></option>
                                </select></div></td>
                        <td><input type="text" name="p_cnetto[]" class="form-control p_cnetto" style="text-align: right;"></td>
                        <td><select class="form-control p_pvat" name="p_pvat[]"><option value="8">8</option><option selected="selected" value="23">23</option><option value="Zw">Zw</option><option value="Oo">Oo</option></select></td>
                    </tr>
                </tbody>

            </table>
            <div class="form-group">
                <div class="col-xs-5 col-xs-offset-3">
                    <button type="submit" class="btn btn-primary fuse-ripple-ready">Dodaj wydatek</button>
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
        $("#partly_paid").hide();
        $(".gpojazd").hide();

        var add_c = 1;

        function initSel2() {

            $('#faktura_t > tbody  > tr').each(function (i) {
                $(this).find('.inputKategoria').select2({
                    theme: "bootstrap",
                    // minimumInputLength: 1,
                    width: '100%',
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
                $('.inputKategoria').on("select2:select", function (e) {
                    var data = $(this).select2('data');
                    if (data[0].text === "Paliwo") {
                        $(".gpojazd").fadeIn(1000);
                        fv.enableFieldValidators('inputLitry', true);
                        fv.enableFieldValidators('inputPojazd', true);
                    } else {
                        $(".gpojazd").fadeOut(1000);
                        $(".gpojazd").val(null).trigger("change");
                        fv.enableFieldValidators('inputLitry', false);
                        fv.enableFieldValidators('inputPojazd', false);
                    }
                });
            });

        }
        $("#nowyWydatek").bind("keyup change", function (e) {
            calculateGrandTotal();
        });
        function calculateGrandTotal() {

            var grandTotal = 0;
            var pbrutto = 0;
            var wartosc_vat = 0;
            var cnetto = 0;
            $('#faktura_t > tbody  > tr').each(function (i) {
                //grandTotal += +$(this).val();
                // if (i > 0) {
                var qty_field_current = 1;
                var vatfield_current;
                var nettofield_current = (Number(jQuery(this).find('.p_cnetto').val().replace("Zł ", "").replace(",", "")));

                if ($(this).find('.p_pvat').val() === "Oo" || $(this).find('.p_pvat').val() === "Zw")
                {

                    vatfield_current = 0;

                } else {
                    vatfield_current = (Number(jQuery(this).find('.p_pvat').val()));

                }


                cnetto = cnetto + (nettofield_current * qty_field_current);
                wartosc_vat = wartosc_vat + (nettofield_current * vatfield_current) / 100;
                wartosc_vat = wartosc_vat * qty_field_current;
                console.log("netto " + nettofield_current + " brutto " + nettofield_current + wartosc_vat + " vat " + wartosc_vat);
                //}
            });
            pbrutto = cnetto + wartosc_vat;
            $("#curr_brutto_add").html("Brutto : " + pbrutto.toFixed(2) + " zł");
            $("#curr_netto_add").html("Netto : " + cnetto.toFixed(2) + " zł");
            $("#curr_vat_add").html("Vat : " + wartosc_vat.toFixed(2) + " zł");
            // console.log(grandTotal);
            // $("#grandtotal").text(grandTotal.toFixed(2));
        }
        var $form = $('#nowyWydatek')
        fv = $form.data('formValidation');
        $('#dodawanie_wydatku').on('hidden.bs.modal', function () {
            $("#faktura_t > tbody >tr").html("");
            $(this).removeData('modal');
            grandTotal = 0;
            pbrutto = 0;
            wartosc_vat = 0;
            cnetto = 0;
            add_c = 0;
            $("#ilosc_w_add").html("Ilość pozycji : " + add_c);
            $("#curr_brutto_add").html("Brutto : 0 zł");
            $("#curr_netto_add").html("Netto : 0 zł");
            $("#curr_vat_add").html("Vat : 0 zł");
        });
        //  $('#dodawanie_wydatku').on('shown.bs.modal', function () {
        $("#newrow").bind("click", function (e) {
            var newRow = $("<tr>");
            var cols = "";
            cols += '<td style="coursor:default;" class="text-center ibtnDel text-red">X</td>';
            cols += '<td><div class="form-group"><select name="inputKategoria[]" class="select-with-search pmd-select2 form-control inputKategoria"><option></option></select></div></td>';
            cols += '<td><input type="text" name="p_cnetto[]" class="form-control p_cnetto"></input></td>'
            cols += '<td><select class="form-control p_pvat" name="p_pvat[]"><option value="8">8</option><option selected="selected" value="23">23</option><option value="Zw">Zw</option><option value="Oo">Oo</option></select></td>';
            newRow.append(cols);
            $("#faktura_t").append(newRow);
            $("#faktura_t").find('input[name^="p_cnetto"]').inputmask({alias: "currency", prefix: "Zł "});
            $("#faktura_t").find('input[name^="p_ilosc"]').inputmask({alias: "currency", prefix: ""});
            add_c++;
            $("#ilosc_w_add").html("Ilość pozycji : " + add_c);

            initSel2();
        });
        $("#faktura_t").on("click", ".ibtnDel", function (e) {
            var row = ($(this).closest("tr"));

            if (row.children('td:nth-child(2)').text() === "PaliwoPaliwo") {
                $(".gpojazd").fadeOut(1000);
                $(".gpojazd").val(null).trigger("change");
                fv.enableFieldValidators('inputLitry', false);
                fv.enableFieldValidators('inputPojazd', false);
            }
            $(this).closest("tr").remove();


            add_c -= 1;
            $("#ilosc_w_add").html("Ilość pozycji : " + add_c);
            calculateGrandTotal();
        });

        // <--- dyn add -->
        $("#inputKontrahentf").on('change', function (e) {
            var data = $(this).select2('data');

            $("#kontrahent_extra").html("<b>Adres:</b> ul. " + data[0].all.ulica + ", " + data[0].all.kod_pocztowy + " " + data[0].all.miasto + ", Polska, <b>NIP:</b> " + data[0].all.nip + "");
        });
        $('input[type=radio][name=inputStatus]').change(function () {
            if (this.value == '3') {
                $("#partly_paid").fadeIn(1000);
            } else {
                $("#partly_paid").fadeOut(1000);
                $("#inputOplacono").val("");
            }
        });

        $("#inputPojazd").select2({
            theme: "bootstrap",
            width: '100%',
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
        $('#inputDataf').bootstrapMaterialDatePicker({weekStart: 0, time: false}).on('change', function (e) {
            $('#nowyWydatek').formValidation('revalidateField', 'inputData');
        });
        $('#inputTerminf').bootstrapMaterialDatePicker({weekStart: 0, time: false}).on('change', function (e) {
            $('#nowyWydatek').formValidation('revalidateField', 'inputTermin');
        });

        $(".p_cnetto,.inputOplacono").inputmask({alias: "currency", prefix: "Zł "});
        $("#inputLitry").inputmask({alias: "currency", prefix: "dm3 "});


        $(".inputKategoria").select2({
            theme: "bootstrap",
            // minimumInputLength: 1,
            width: '100%',
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
        $("#inputKupiecf").select2({
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
        $("#inputKontrahentf,#inputNaRzecz").select2({
            theme: "bootstrap",
            //minimumInputLength: 1,
            width: '100%',
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
        $("#inputRejonf").select2({
            theme: "bootstrap",
            //minimumInputLength: 1,
            width: '100%',
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

        $("#inputKontrakt").select2({
            theme: "bootstrap",
            //minimumInputLength: 1,
            width: '100%',
            language: "pl",
            ajax: {
                type: "GET",
                url: '<?PHP echo base_url(); ?>Kontrakt/lista_kontraktow',
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

        $('#inputKategoriaf').on("select2:select", function (e) {
            var data = $(this).select2('data');
            if (data[0].text === "Paliwo") {
                $(".gpojazd").fadeIn(1000);
                fv.enableFieldValidators('inputPojazd', true);
                fv.enableFieldValidators('inputLitry', true);
            } else {
                $(".gpojazd").fadeOut(1000);
                $(".gpojazd").val(null).trigger("change");
                fv.enableFieldValidators('inputPojazd', false);
                fv.enableFieldValidators('inputLitry', false);
            }
        });
        $('#nowyWydatek').formValidation({
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
                inputLitry: {
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
                "inputKategoria[]": {
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
        }).on('success.form.fv', function (e)
        {
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
                    if (data.response.status)
                    {
                        if (data.response.message === "Dodano") {
                            $(this).closest('form').find("input[type=text]").val("");
                            $('#nowyWydatek').data('formValidation').resetForm();
                            $('#nowyWydatek').trigger("reset");
                            $(".gpojazd").val('').trigger("change");
                            table.ajax.reload(); //just reload table
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
        }
        ).on('err.field.fv', function (e, data) {
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
        $('#nowyWydatek').data('formValidation').resetForm();
        $('#nowyWydatek').trigger("reset");
    })

</script>
