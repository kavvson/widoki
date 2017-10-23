
<div id="dodawanie_faktury" class="modal fade" tabindex="-1" role="dialog"
     aria-labelledby="dodawanie_faktury"
     aria-hidden="true">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content">

            <div class="modal-header bg-green-400 text-white">
                <h4 class="modal-title" id="myLargeModalLabel"><?PHP echo $faktura . "/KOM/" . date('m/y'); ?></h4>
                <div class="row col-lg-12">
                    <div class="col-md-2 "></div>
                    <div class="px-4 py-2 bg-red-500" style="height:29px;" id="ilosc_w_add">Ilość pozycji : 0</div>
                    <div class="px-4 py-2 bg-primary" style="height:29px;"id="curr_brutto_add">Brutto : 0 zł</div>
                    <div class="bg-primary px-4 py-2" style="height:29px;"id="curr_netto_add">Netto : 0 zł</div>
                    <div class="bg-primary px-4 py-2" style="height:29px;" id="curr_vat_add">Vat : 0 zł</div>
                </div>
            </div>
            <div class="modal-body">
                <div class="container-fluid bd-example-row">

                    <form id="nowyPrzychod" name="nowyPracownik" method="post">

                        <div class="content p-1 page-content">
                            <div class="form-group row">
                                <label for="inputKontrahent2" class="col-sm-2 col-form-label">Nabywca</label>
                                <div class="col-sm-10">
                                    <select id="inputKontrahent2" name="inputKontrahent2" class="select-with-search pmd-select2 form-control">
                                        <option></option>
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
                                                        <input type="text" name="inputDatawystaw" id="inputDatawystaw" class="form-control" />
                                                    </div>

                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputDatasprze" class="col-sm-5 col-form-label">Data sprzedaży</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" name="inputDatasprze" id="inputDatasprze" class="form-control" />
                                                    </div>

                                                </div>
                                                <div class="form-group row">
                                                    <label for="termin_platnosci" class="col-sm-5 col-form-label">Termin płatności</label>
                                                    <div class="col-sm-7">
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

                                                </div>
                                            </div>
                                            <div class="col-lg-6"> 
                                                <div class="form-group row">
                                                    <label for="inputDatasprze" class="col-sm-3 col-form-label">Rejon</label>
                                                    <div class="col-sm-9">
                                                        <select id="inputRejon2" name="inputRejon2" class="select-with-search pmd-select2 form-control">
                                                            <option></option>
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
                                            <textarea id="inputOpis" name="inputOpis" style="height:100px;" class="form-control"></textarea>
                                        </div>

                                    </div>

                                </div>

                            </div>  

                            <center><button class="btn btn-primary btn-add-panel btn-xs mt-2 mb-2" id="newrow" type="button"> <i class="icon icon-playlist-plus"></i> Dodaj wiersz</button></center>

                            <table style="border-collapse:collapse;width:100%;" id="faktura_t" class="table table-bordered">
                                <tbody>
                                    <tr class="hclass">
                                        <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;" wdith="3%"></td>
                                        <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;">Nazwa</td>
                                        <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;" width="10%">Ilość</td>
                                        <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;" width="15%">j.m</td>
                                        <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;" width="15%">Cena netto</td>
                                        <td style="border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;" width="15%">VAT<br />
                                            [%]</td>

                                    </tr>
                                </tbody>
                                <tbody>

                                </tbody>

                            </table>


                        </div>

                        <div class="form-group">
                            <div class="col-xs-5 col-xs-offset-3">
                                <button type="submit" class="btn btn-primary fuse-ripple-ready">Utwórz fakturę</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cofnij</button>
                            </div>
                        </div>

                    </form>





                </div>
            </div>
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
<script>
    $(document).ready(function () {
        var add_c = 0;

        $('#dodawanie_faktury').on('hidden', function () {
            $(this).removeData('modal');

            grandTotal = 0;
            pbrutto = 0;
            wartosc_vat = 0;
            cnetto = 0;
            add_c = 0;
            $(this).data('bs.modal', null);
        });
        $('#dodawanie_faktury').on('shown.bs.modal', function () {
            grandTotal = 0;
            pbrutto = 0;
            wartosc_vat = 0;
            cnetto = 0;
            add_c = 0;

            $("#newrow").on("click", function () {

                $('#nowyPrzychod').formValidation('revalidateField', 'p_nazwa[]');
                var newRow = $("<tr>");
                var cols = "";
                cols += '<td style="coursor:default;" class="text-center ibtnDel text-red">X</td>';
                cols += '<td><input type="text" name="p_nazwa[]" class="form-control"></input></td>';
                cols += '<td><input type="text" name="p_ilosc[]" class="form-control p_ilosc"></input></td>';
                cols += '<td><select class="form-control" name="p_unit[]"><option value="Kpl">kpl</option><option value="Kg">kg</option><option value="m2">m2</option><option value="m3">m3</option><option value="mb">mb</option><option value="rbh">rbh</option><option value="ltr">ltr</option><option value="szt">szt</option></select></td>';
                cols += '<td><input type="text" name="p_cnetto[]" class="form-control p_cnetto"></input></td>'
                cols += '<td><select class="form-control p_pvat" name="p_pvat[]"><option value="8">8</option><option value="23">23</option><option value="1">Zw</option><option value="2">Oo</option></select></td>'


                newRow.append(cols);
                $("#faktura_t").append(newRow);
                $("#faktura_t").find('input[name^="p_cnetto"]').inputmask({alias: "currency", prefix: "Zł "});
                $("#faktura_t").find('input[name^="p_ilosc"]').inputmask({alias: "currency", prefix: ""});
                add_c++;
                calculateGrandTotal();
                $("#ilosc_w_add").html("Ilość pozycji : " + add_c);
            });



            $("#faktura_t").on("click", ".ibtnDel", function (event) {
                $(this).closest("tr").remove();
                add_c -= 1;
                $("#ilosc_w_add").html("Ilość pozycji : " + add_c);
                calculateGrandTotal();
            });

            function calculateRow(row) {
                var price = +row.find('input[name^="price"]').val();

            }

            function calculateGrandTotal() {

                var grandTotal = 0;
                var pbrutto = 0;
                var wartosc_vat = 0;
                var cnetto = 0;
                $('#faktura_t > tbody  > tr').each(function (i) {
                    //grandTotal += +$(this).val();
                    if (i > 0) {
                        var qty_field_current = (Number(jQuery(this).find('.p_ilosc').val()));
                        var vatfield_current = (Number(jQuery(this).find('.p_pvat').val()));
                        var nettofield_current = (Number(jQuery(this).find('.p_cnetto').val().replace("Zł ", "").replace(",", "")));
                        cnetto = cnetto + (nettofield_current * qty_field_current);
                        wartosc_vat = wartosc_vat + (nettofield_current * vatfield_current) / 100;
                        wartosc_vat = wartosc_vat * qty_field_current;
                        console.log("netto " + nettofield_current + " brutto " + nettofield_current + wartosc_vat + " vat " + wartosc_vat);
                    }
                });
                pbrutto = cnetto + wartosc_vat;
                $("#curr_brutto_add").html("Brutto : " + pbrutto.toFixed(2) + " zł");
                $("#curr_netto_add").html("Netto : " + cnetto.toFixed(2) + " zł");
                $("#curr_vat_add").html("Vat : " + wartosc_vat.toFixed(2) + " zł");
                // console.log(grandTotal);
                // $("#grandtotal").text(grandTotal.toFixed(2));
            }

            $(document).bind("keyup change", function (e) {

                calculateGrandTotal();
            });

            $('#inputDatasprze').bootstrapMaterialDatePicker({weekStart: 0, time: false}).on('change', function (e) {
                $('#nowyPrzychod').formValidation('revalidateField', 'inputDatasprze');
            });
            $('#inputDatawystaw').bootstrapMaterialDatePicker({weekStart: 0, time: false}).on('change', function (e) {
                $('#nowyPrzychod').formValidation('revalidateField', 'inputDatawystaw');
            });
            $("#inputBrutto,#inputNetto").inputmask({alias: "currency", prefix: "Zł "});
            $("#inputKontrahent2").select2({
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
            $("#inputRejon2").select2({
                theme: "bootstrap",
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
            $("#inputKontrahent2").on('change', function (e) {
                var data = $(this).select2('data');
                console.log(data[0].all);
                $("#kontrahent_extra").html("<b>Adres:</b> ul. " + data[0].all.ulica + ", " + data[0].all.kod_pocztowy + " " + data[0].all.miasto + ", Polska, <b>NIP:</b> " + data[0].all.nip + "");
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
                    'p_nazwa[]': {
                        validators: {
                            notEmpty: {
                                message: 'The editor names are required'
                            }
                        }
                    },
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
                                $("#inputKontrahent2,#inputRejon2").val(null).trigger("change");
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
            $('#dodawanie_faktury').on('shown.bs.modal', function () {
                $('#nowyPrzychod').data('formValidation').resetForm();
                $('#nowyPrzychod').trigger("reset");
            })

        });
    });
</script>