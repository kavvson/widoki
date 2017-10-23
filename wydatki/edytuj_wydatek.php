<div class="doc page-layout simple full-width">

    <!-- HEADER -->
    <div class="page-header bg-primary text-auto p-6"><h2 class="doc-title">Modyfikacja wydatku <?PHP echo $wydatki->dokument; ?></h2>
    </div>
    <!-- / HEADER -->

    <div class="page-content row p-12">
        <!-- STANDARD ALERTS -->
        <div class="col-12 col-md-12">

            <div class="profile-box info-box contact card mb-4">

                <header class="modal-header bg-green-400 text-white">

                    <div class="row col-lg-12">
                        <div class="col-md-4 "><h4 class="modal-title" id="myLargeModalLabel">Modyfikacja wydatku</h4></div>
                        <div class="px-4 py-2 bg-red-500" style="height:29px;" id="ilosc_w_add">Ilość pozycji : <?PHP echo count($powiazane); ?></div>
                        <div class="px-4 py-2 bg-primary" style="height:29px;"id="curr_brutto_add">Brutto : 0 zł</div>
                        <div class="bg-primary px-4 py-2" style="height:29px;"id="curr_netto_add">Netto : 0 zł</div>
                        <div class="bg-primary px-4 py-2" style="height:29px;" id="curr_vat_add">Vat : 0 zł</div>
                    </div>
                </header>

                <div class="content p-4">
                    <form id="nowyWydatek" name="nowyWydatek" method="post" enctype="multipart/form-data" accept-charset="utf-8">
                        <div class="content p-4">
                            <div class="form-group row">
                                <label for="inputDokument" class="col-sm-4 col-form-label">Numer dokumentu</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="inputDokument" id="inputDokument" value="<?PHP echo $wydatki->dokument; ?>">
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group row mt-2">
                                        <label for="inputDokument" class="col-sm-4 col-form-label">Dostawca</label>
                                        <div class="col-sm-8">
                                            <select id="inputKontrahentf" name="inputKontrahent" class="select-with-search pmd-select2 form-control">
                                                <option value="<?PHP echo $wydatki->kontrahent; ?>" selected><?PHP echo $wydatki->kontrah; ?></option>
                                            </select>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group row mt-2">
                                        <label for="inputDokument" class="col-sm-4 col-form-label">Osoba kupująca</label>
                                        <div class="col-sm-8">
                                            <select id="inputKupiecf" name="inputKupiec" class="select-with-search pmd-select2 form-control">
                                                <option value="<?PHP echo $wydatki->id_kupujacy; ?>" selected><?PHP echo $wydatki->kupujacy; ?></option>
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
                            <ul class="nav nav-tabs" role="tablist">

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
                                        <div class="col-lg-6">

                                            <div class="form-group row">
                                                <label for="inputDatawystaw" class="col-sm-5 col-form-label">Data zakupu</label>
                                                <div class="col-sm-7">
                                                    <input type="text" name="inputData" id="inputDataf" value="<?PHP echo $wydatki->data_zakupu; ?>" class="form-control" />
                                                </div>

                                            </div>
                                            <div class="form-group row">
                                                <label for="termin_platnosci" class="col-sm-5 col-form-label">Termin płatności</label>
                                                <div class="col-sm-7">
                                                    <input type="text" name="inputTermin" id="inputTerminf" value="<?PHP echo $wydatki->termin_platnosci; ?>" class="form-control" />
                                                </div>

                                            </div>
                                            <div class="form-group row mt-2">
                                                <label for="inputDatasprze" class="col-sm-5 col-form-label">Rejon</label>
                                                <div class="col-sm-7">
                                                    <select id="inputRejonf" name="inputRejon" class="select-with-search pmd-select2 form-control">
                                                        <option value="<?PHP echo $wydatki->id_rejonu; ?>" selected><?PHP echo $wydatki->rejont; ?></option>
                                                    </select>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-lg-6"> 
                                            <div class="form-group row">
                                                <label for="inputDatasprze" class="col-sm-5 col-form-label">Płatność</label>
                                                <div class="col-sm-7">
                                                    <div class="form-check form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="inputMetoda" id="inlineRadio2"
                                                                   value="1"/>
                                                            <span class="radio-icon"></span>
                                                            <span class="form-check-description">Gotówką</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="inputMetoda" id="inlineRadio3"
                                                                   value="2"/>
                                                            <span class="radio-icon"></span>
                                                            <span class="form-check-description">Przelewem</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="inputMetoda" id="inlineRadio3"
                                                                   value="3"/>
                                                            <span class="radio-icon"></span>
                                                            <span class="form-check-description">Karta płatnicza</span>
                                                        </label>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group row gpojazd">
                                        <label for="inputPojazd" class="col-sm-4 col-form-label">Powiązany pojazd</label>
                                        <div class="col-sm-8">
                                            <select id="inputPojazd" name="inputPojazd" class="inputPojazd select-with-search pmd-select2 form-control">
                                                <option value="<?PHP echo @$auto->poj_id; ?>" selected><?PHP echo @$auto->nr_rej; ?></option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="form-group row gpojazd">
                                        <label for="inputLitry" class="col-sm-4 col-form-label">Ilość litrów</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control inputLitry" name="inputLitry" id="inputLitry" value="<?PHP echo @$auto->litry; ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group row">
                                                <label for="inputNaRzecz" class="col-sm-5 col-form-label">Na rzecz</label>
                                                <div class="col-sm-7">
                                                    <select id="inputNaRzecz" name="inputNaRzecz" class="select-with-search pmd-select2 form-control">
                                                        <option value="<?PHP echo $wydatki->fk_narzecz; ?>" selected><?PHP echo @$this->Kontrahent_model->pokaz_kontrahenta($wydatki->fk_narzecz)[0]->nazwa; ?></option>
                                                    </select>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group row">
                                                <label for="inputKontrakt" class="col-sm-5 col-form-label">Kontrakt</label>
                                                <div class="col-sm-7">
                                                    <select id="inputKontrakt" name="inputKontrakt" class="select-with-search pmd-select2 form-control">
                                                        <option value="<?PHP echo $wydatki->fk_kontrakt; ?>" selected><?PHP echo $this->Kontrakt_model->get_kontrakt_by_id($wydatki->fk_kontrakt); ?></option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <input type="hidden" name="wydatek_auto_id" value="<?PHP echo @$auto->id_wydatku; ?>">
                                    <input type="hidden" name="id_platnosci" value="<?PHP echo $wydatki->id_platnosci; ?>">

                                </div>
                                <div class="tab-pane fade" id="dodatkowe-onfo-pane" role="tabpanel" aria-labelledby="dodatkowe-onfo" aria-expanded="false">
                                    <div class="form-group row">

                                        <div class="col-sm-12">
                                            <textarea id="inputOpis" name="inputOpis" style="height:100px;" class="form-control"><?PHP echo $wydatki->cel_zakupu; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="dodatkowe-info-pane" role="tabpanel" aria-labelledby="dodatkowe-info" aria-expanded="false">
                                    <div class="row">
                                        <div class="col-lg-12">
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
                                    <?PHP
                                    foreach ($powiazane as $p) {
                                        ?>
                                        <tr i-id="<?PHP echo $p->id_item; ?>" i-original="TRUE" i-deleted="FALSE">
                                            <td style="coursor:default;"></td>
                                            <td><div class="form-group">
                                                    <select name="data[InvoiceContent][<?PHP echo $p->id_item; ?>][name]" class="select-with-search pmd-select2 form-control inputKategoria">
                                                        <option value="<?PHP echo $p->kategoria; ?>" selected><?PHP echo $p->knazw; ?></option>
                                                    </select></div>
                                            </td>
                                            <td><input type="text" name="data[InvoiceContent][<?PHP echo $p->id_item; ?>][netto]" value="<?PHP echo $p->netto; ?>" class="form-control p_cnetto" style="text-align: right;"></td>
                                            <td><select class="form-control p_pvat" name="data[InvoiceContent][<?PHP echo $p->id_item; ?>][vat]">
                                                    <option <?php if ($p->vat === "8") echo "selected='selected'"; ?> value="8">8</option>
                                                    <option <?php if ($p->vat === "23") echo "selected='selected'"; ?> value="23">23</option>
                                                    <option <?php if ($p->typ_vat === "Zw") echo "selected='selected'"; ?> value="Zw">Zw</option>
                                                    <option <?php if ($p->typ_vat === "Oo") echo "selected='selected'"; ?> value="Oo">Oo</option>
                                                </select></td>

                                        </tr>
                                        <?PHP
                                    }
                                    ?>
                                </tbody>

                            </table>
                            <div class="form-group">
                                <div class="col-xs-5 col-xs-offset-3">
                                    <button type="submit" class="btn btn-primary fuse-ripple-ready">Edytuj wydatek</button>
                                
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="<?PHP echo base_url(); ?>assets/js/select2/js/select2.full.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/i18n/pl.js"></script>
<script type="text/javascript" src="<?PHP echo base_url(); ?>assets/js/select2/js/pmd-select2.js"></script>

<link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>assets/js/select2/css/select2.min.css" />
<link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>assets/js/select2/css/select2-bootstrap.css" />
<link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>assets/js/select2/css/pmd-select2.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.2.6/jquery.inputmask.bundle.min.js"></script>
<script src="<?PHP echo base_url(); ?>assets/js/formValidation.min.js"></script>
<script src="<?PHP echo base_url(); ?>assets/js/fv.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>assets/vendor/datetimepicker/css/bootstrap-material-datetimepicker.css" />
<script type="text/javascript" language="javascript" src="<?PHP echo base_url(); ?>assets/vendor/datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
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
<?PHP
if (empty($auto->nr_rej)) {
    echo '$(".gpojazd").hide();';
}
?>
        // $(".gpojazd").hide();
        // dyn add -->
        var add_c = <?PHP echo count($powiazane); ?>;
<?PHP echo $this->Js_parts->edycja_wydatku(); ?>
        function revalidate_select()
        {
            $('.inputKategoria').on("select2:select", function (e) {

                var data = $(this).select2('data');
                if (data[0].text === "Paliwo") {
                    $(".gpojazd").fadeIn(1000);

                } else {
                    $(".gpojazd").fadeOut(1000);
                    $(".inputPojazd").val(null).trigger("change");
                    $(".inputLitry").val(null).trigger("change");
                }
            });
        }

        revalidate_select();
<?PHP if (@$auto->id_wydatku) { ?>
            $(".gpojazd").fadeIn(1000);
<?PHP } ?>

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
            var ddate = new Date().valueOf();
            var newRow = $("<tr i-id='" + ddate + "' i-original='FALSE' i-deleted='FALSE'>");
            var cols = "";

            cols += '<td style="coursor:default;"></td>';
            cols += '<td><div class="form-group"><select name="data[InvoiceContent][' + ddate + '][name]" class="select-with-search pmd-select2 form-control inputKategoria"><option></option></select></div></td>';
            cols += '<td><input type="text" name="data[InvoiceContent][' + ddate + '][netto]" class="form-control p_cnetto"></input></td>'
            cols += '<td><select class="form-control p_pvat" name="data[InvoiceContent][' + ddate + '][vat]"><option value="8">8</option><option value="23">23</option><option value="Zw">Zw</option><option value="Oo">Oo</option></select></td>';
            newRow.append(cols);
            $("#faktura_t").append(newRow);
            $("#faktura_t").find('input[name^="data[InvoiceContent][' + ddate + '][netto]"]').inputmask({alias: "currency", prefix: "Zł "});
            $("#faktura_t").find('input[name^="p_ilosc"]').inputmask({alias: "currency", prefix: ""});
            add_c++;
            $("#ilosc_w_add").html("Ilość pozycji : " + add_c);

            initSel2();
        });
        $("#faktura_t").on("click", ".ibtnDel", function (e) {
            var row = ($(this).closest("tr"));
            console.log(row.attr('i-id'));
            console.log(row.attr('i-original'));
            console.log(row.attr('i-deleted'));
            if (row.children('td:nth-child(2)').text() === "PaliwoPaliwo") {
                $(".gpojazd").fadeOut(1000);
                $(".gpojazd").val(null).trigger("change");
                fv.enableFieldValidators('inputLitry', false);
                fv.enableFieldValidators('inputPojazd', false);
            }
            $('<input>').attr({
                type: 'hidden',
                name: 'deleted_rows[]',
                value: row.attr('i-id')
            }).appendTo('form');
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



        $('#inputDataf').bootstrapMaterialDatePicker({weekStart: 0, time: false}).on('change', function (e) {
            $('#nowyWydatek').formValidation('revalidateField', 'inputData');
        });
        $('#inputTerminf').bootstrapMaterialDatePicker({weekStart: 0, time: false}).on('change', function (e) {
            $('#nowyWydatek').formValidation('revalidateField', 'inputTermin');
        });
        $(".p_cnetto").inputmask({alias: "currency", prefix: "Zł "});
        $("#inputLitry").inputmask({alias: "currency", prefix: "dm3 "});




        var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
                csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';

        $('#nowyWydatek').formValidation({
            framework: 'bootstrap',
            fields: {

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
                url: '<?PHP echo base_url(); ?>Wydatki/edytuj_wydatek/<?PHP echo $wydatki->fk_wydatek; ?>',
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
                                        if (data.response.message === "Zmodyfikowano") {
                                            setTimeout(function () {
                                               window.location.href = '<?PHP echo base_url("/Wydatki/Podglad/" . $wydatki->fk_wydatek); ?>';
                                            }, 2000);
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
                    });
                    $('#gridSystemModal').on('shown.bs.modal', function () {
                        $('#nowyWydatek').data('formValidation').resetForm();
                        $('#nowyWydatek').trigger("reset");
                    })



</script>
