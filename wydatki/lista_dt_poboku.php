<div class="doc page-layout simple full-width">
    <div class="page-content row p-12">

        <!-- STANDARD ALERTS -->
        <div class="col-12 col-md-12">

            <link href="https://cdn.datatables.net/1.10.15/css/dataTables.material.min.css" rel="stylesheet">

            <link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>assets/js/select2/css/select2.min.css" />
            <link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>assets/js/select2/css/select2-bootstrap.css" />
            <link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>assets/js/select2/css/pmd-select2.css" />


               
                <div class="row col-lg-12 text-white" style="margin: 0 23%;">
                    
                    <div class="px-4 py-2 bg-red-500" id="po_terminie">Po terminie : 0</div>
                    <div class="px-4 py-2 bg-primary" id="curr_brutto">Brutto : 0 zł</div>
                    <div class="bg-primary px-4 py-2" id="curr_netto">Neto : 0 zł</div>
                    <div class="bg-primary px-4 py-2" id="curr_vat">Vat : 0 zł</div>

                    <div class="bg-primary px-4 py-2" id="pozostala_kwota">Zobowiązania : 0 zł</div>
                    <div class="bg-primary px-4 py-2" id="zaplacona_kwota">Opłacono : 0 zł</div>
                    <div class="bg-primary px-4 py-2" id="do_zaplaty">Nieopłacone : 0</div>
                    <div class="bg-primary px-4 py-2" id="oplacone">Opłacone : 0</div>
                    <div class="bg-primary px-4 py-2" id="czesciowo">Częściowo : 0</div>

                </div>
            
<div class="row">
    <div class="col-md-2">
        
            <div class="profile-box info-box general card mb-4">
                
           <header class="h6 row no-gutters align-items-center justify-content-between bg-primary text-auto p-4">
                <div class="title">Filtry</div>
                    <button type="button"  id="nowy_wydatek_modal" data-toggle="modal" data-target="#dodawanie_wydatku" class="btn btn bg-green more fuse-ripple-ready">Nowy wydatek</button>
            </header>
                
               
                 <div class="content p-4">
          <form id="form-filter">

                       

              <div class="row col-lg-12">
                            <div class="form-group">
                                <label for="regular1" class="control-label">Numer faktury</label>
                                <input type="text" id="inputNrFaktury" name="inputNrFaktury" class="form-control col-lg-12">
                            </div>
              </div>
                            <div class="form-group">
                                <label for="regular1" class="control-label">Rejon</label>
                                <select id="s_rejon" class="form-control">
                                    <option value="" selected="selected">Wszystkie</option>
                                    <option value="1">Łódź</option>
                                    <option value="2">Wrocław</option>
                                    <option value="3">Kraj</option>
                                    <option value="4">Biuro</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="regular1" class="control-label">Nabywca</label>
                                <select id="inputKupiec" name="inputKupiec" class="select-with-search pmd-select2 form-control">
                                    <option></option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="regular1" class="control-label">Kategoria</label>
                                <select id="inputKategoria" name="inputKategoria" class="select-with-search pmd-select2 form-control">
                                    <option></option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="regular1" class="control-label">Kontrahent</label>
                                <select id="inputKontrahent" name="inputKontrahent" class="select-with-search pmd-select2 form-control">
                                    <option></option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="regular1" class="control-label">Na rzecz</label>
                                <select id="inputNaRzeczf" name="inputNaRzeczf" class="select-with-search pmd-select2 form-control">
                                    <option></option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="regular1" class="control-label">Kontrakt</label>
                                <select id="inputKontraktf" name="inputKontraktf" class="select-with-search pmd-select2 form-control">
                                    <option></option>
                                </select>
                            </div>


                            <div class="form-group">
                                <label for="regular1" class="control-label">Zakres dat</label>
                                <select class="form-control selectpicker input-sm dt-filter" id="inputZakresDat" name="inputZakresDat">
                                    <option value="custom">[Zakres dat]</option>
                                    <option value="today">Dzisiaj</option>
                                    <option value="yesterday">Wczoraj</option>
                                    <option value="this_week">Bieżący tydzień</option>
                                    <option value="this_month" selected="">Bieżący miesiąc</option>
                                    <option value="Q1">Q1</option>
                                    <option value="Q2">Q2</option>
                                    <option value="Q3">Q3</option>
                                    <option value="Q4">Q4</option>
                                    <option value="this_year">Bieżący rok</option>
                                    <option value="last_week">Ostatnie 7 dni</option>
                                    <option value="last_month">Ostatnie 30 dni</option>

                                </select>
                            </div>


                            <div class="form-group db1" style="display: none;">
                                <label for="regular1" class="control-label">Od</label>
                                <input type="text" name="dateFrom" id="dateFrom" class="form-control" />
                            </div>
                            <div class="form-group db2" style="display: none;">
                                <label for="regular1" class="control-label">Do</label>
                                <input type="text" name="dateTo" id="dateTo" class="form-control" />
                            </div>
  <div class="form-group chkboxs">

                            <div class="form-check form-check-inline has-success">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="statusPlatnosci" id="chk1" value="zap"/>
                                    <span class="checkbox-icon"></span>
                                    <span>Zapłacone</span>
                                </label>
                            </div>
                            <div class="form-check form-check-inline has-warning">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="statusPlatnosci"  id="chk2" value="do_zap"/>
                                    <span class="checkbox-icon"></span>
                                    <span>Do zapłaty</span>
                                </label>
                            </div>
                            <div class="form-check has-danger">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="statusPlatnosci" id="chk3" value="po_term"/>
                                    <span class="checkbox-icon"></span>
                                    <span>Po terminie</span>
                                </label>
                            </div>

                        </div>



                            <div class="form-group">
                                <button type="button" id="btn-reset" class="btn-sm btn-default">Reset</button>
                                <button type="button" class="btn-sm" data-toggle="modal" data-target="#obIkon">Legenda</button>
                                </div>

                       
</div>
                    </form>
            </div>
    </div>
    <div class="col-lg-10">
            <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead class="btn-primary bg-primary">
                    <tr>
                        <th>blank</th>
                        <th>Rejon</th>
                        <th>Nabywca</th>
                        <th>Brutto</th>
                        <th>Netto</th>
                        <th>Numer faktury</th>
                        <th>Data Zakupu</th>
                        <th>Termin</th>
                        <th>Kontrahent</th>
                        <th>blank</th>
                        <th>blank</th>
                        <th>Vat</th>
                        <th>% Vat</th>
                        <th>Informacje</th>
                        <th>Kategoria</th>
                        <th>Do zapłaty</th>
                        <th>Zapłacono</th>
                        <th>blank</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
    </div></div>
        </div>


    </div>
</div>
</div>
<div id="obIkon" class="modal fade" role="dialog"
     aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-body">

                <div class="row">
                    <div class="col-lg-12">

                        <div class="profile-box info-box contact card mb-4">

                            <header class="h6 bg-primary text-auto p-4">
                                <div class="title">Tabela - kolory wierszy</div>
                            </header>

                            <div class="content p-4">

                                <div class="info-line mb-6">
                                    <div class="info">
                                        <div class="row no-gutters ripple p-2 fuse-ripple-ready" style="background-color: rgba(255, 0, 0, 0.33);">
                                            wpis po terminie
                                        </div>
                                    </div>
                                    <div class="info">
                                        <div class="row no-gutters ripple p-2 fuse-ripple-ready" style="background-color: rgba(255,144,0,0.33)">
                                            należy opłacić dzisiaj
                                        </div>
                                    </div>
                                    <div class="info">
                                        <div class="row no-gutters ripple p-2 fuse-ripple-ready" style="background-color: rgba(0,255,0,0.33)">
                                            opłacony
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="profile-box info-box contact card mb-4">

                            <header class="h6 bg-primary text-auto p-4">
                                <div class="title">Legenda - ikony</div>
                            </header>

                            <div class="content p-4">
                                <h5>Priorytet</h5>

                                <div class="row col-lg-12">
                                    <div class="col-lg-4">

                                        <i class="icon icon-hexagon-outline s40"></i> Normalny

                                    </div>
                                    <div class="col-lg-4">

                                        <i class="icon icon-arrow-up-bold-hexagon-outline text-orange s40"></i>  Istotny

                                    </div>
                                    <div class="col-lg-4">

                                        <i class="icon icon-alert-octagon text-red s40"></i> Pilny

                                    </div>  

                                </div>
                            </div>
                            <div class="content p-4">
                                <h5>Metoda płatności</h5>

                                <div class="row col-lg-12">
                                    <div class="col-lg-4">
                                        <i class="icon icon-cash-100 s40"></i> Gotówka
                                    </div>
                                    <div class="col-lg-4">
                                        <i class="icon icon-bank s40"></i> Przelew
                                    </div>  
                                    <div class="col-lg-4">
                                        <i class="icon icon-credit-card-multiple s40"></i> Karta
                                    </div>  
                                </div>
                            </div>

                            <div class="content p-4">
                                <h5>Statusy - Faktury</h5>

                                <div class="row col-lg-12">
                                    <div class="col-lg-6">

                                        <i class="icon icon-format-list-numbers s40"></i> Rozbita

                                    </div>
                                    <div class="col-lg-6">

                                        <i class="icon-checkbox-marked icon text-green"></i> Opłacono

                                    </div>  
                                </div>
                                <div class="row col-lg-12">
                                    <div class="col-lg-6">

                                        <i class="icon-division-box icon"></i> Częściowo opłacona

                                    </div>  
                                    <div class="col-lg-6">

                                        <i class="icon-file-excel-box icon"></i> Nie opłacono

                                    </div>
                                </div>
                            </div>

                            <div class="content p-4">
                                <h5>Pozostałe</h5>

                                <div class="row col-lg-12">
                                    <div class="col-lg-6">
                                        <i class="icon-file-hidden icon s40"></i> Brak skanu dokumentu
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
                </div>
            </div>

        </div>

    </div>
</div>

<div id="dodawanie_wydatku" class="modal fade" role="dialog"
     aria-labelledby="dodawanie_wydatku"
     aria-hidden="true">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content">

            <div class="modal-header bg-green-400 text-white">

                <div class="row col-lg-12">
                    <div class="col-md-4 "><h4 class="modal-title" id="myLargeModalLabel">Nowy wydatek</h4></div>
                    <div class="px-4 py-2 bg-red-500" style="height:29px;" id="ilosc_w_add">Ilość pozycji : 1</div>
                    <div class="px-4 py-2 bg-primary" style="height:29px;"id="curr_brutto_add">Brutto : 0 zł</div>
                    <div class="bg-primary px-4 py-2" style="height:29px;"id="curr_netto_add">Netto : 0 zł</div>
                    <div class="bg-primary px-4 py-2" style="height:29px;" id="curr_vat_add">Vat : 0 zł</div>
                </div>
            </div>
            <div class="modal-body">
                <div class="loader"></div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>

<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.material.min.js"></script>

<script type="text/javascript" src="<?PHP echo base_url(); ?>assets/js/select2/js/select2.full.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/i18n/pl.js"></script>
<script type="text/javascript" src="<?PHP echo base_url(); ?>assets/js/select2/js/pmd-select2.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/plug-ins/1.10.15/dataRender/ellipsis.js"></script>
<link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>assets/vendor/datetimepicker/css/bootstrap-material-datetimepicker.css" />
<script type="text/javascript" language="javascript" src="<?PHP echo base_url(); ?>assets/vendor/datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.2.6/jquery.inputmask.bundle.min.js"></script>
<script src="<?PHP echo base_url(); ?>assets/js/formValidation.min.js"></script>
<script src="<?PHP echo base_url(); ?>assets/js/fv.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js" type="text/javascript"></script>
<script type="text/javascript">
    function addCommas(nStr)
    {
        nStr += '';
        x = nStr.split('.');
        x1 = x[0];
        x2 = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$1' + ' ' + '$2');
        }
        return x1 + x2.replace(".", ",");
    }
    $.fn.dataTable.render.ellipsis = function (cutoff, wordbreak, escapeHtml) {
        var esc = function (t) {
            return t
                    .replace(/&/g, '&amp;')
                    .replace(/</g, '&lt;')
                    .replace(/>/g, '&gt;')
                    .replace(/"/g, '&quot;');
        };

        return function (d, type, row) {
            // Order, search and type get the original data
            if (type !== 'display') {
                return d;
            }

            if (typeof d !== 'number' && typeof d !== 'string') {
                return d;
            }

            d = d.toString(); // cast numbers

            if (d.length < cutoff) {
                return d;
            }

            var shortened = d.substr(0, cutoff - 1);

            // Find the last white space character in the string
            if (wordbreak) {
                shortened = shortened.replace(/\s([^\s]*)$/, '');
            }

            // Protect against uncontrolled HTML input
            if (escapeHtml) {
                shortened = esc(shortened);
            }

            return '<span class="ellipsis" title="' + esc(d) + '">' + shortened + '&#8230;</span>';
        };
    };
    $.fn.blink = function (count) {
        var $this = $(this);
        count = count - 1 || 0;
        $this.animate({opacity: .25}, 555, function () {
            $this.animate({opacity: 1}, 555, function () {
                if (count > 0) {
                    $this.blink(count);
                }
            });
        });
    };


    var table;
    $(document).ready(function () {

        function zakres_dat() {

            var select = document.querySelector("#inputZakresDat");
            var selectOption = select.options[select.selectedIndex];
            var lastSelected = localStorage.getItem('inputZakresDat_wydatki');

            if (lastSelected) {
                select.value = lastSelected;
            }

            select.onchange = function () {
                lastSelected = select.options[select.selectedIndex].value;
                console.log(lastSelected);
                localStorage.setItem('inputZakresDat_wydatki', lastSelected);

            }
        }
        function s_rejon() {

            var select = document.querySelector("#s_rejon");
            var selectOption = select.options[select.selectedIndex];
            var lastSelected = localStorage.getItem('s_rejon_wydatki');

            if (lastSelected) {
                select.value = lastSelected;
            }

            select.onchange = function () {
                lastSelected = select.options[select.selectedIndex].value;
                console.log(lastSelected);
                localStorage.setItem('s_rejon_wydatki', lastSelected);

            }
        }
        s_rejon();
        zakres_dat();

        var formValues = JSON.parse(localStorage.getItem('formValues_wydatki')) || {};
        var $checkboxes = $(".chkboxs :checkbox");

        function updateStorage() {
            $checkboxes.each(function () {
                formValues[this.id] = this.checked;
            });

            localStorage.setItem("formValues_wydatki", JSON.stringify(formValues));
        }

        $checkboxes.on("change", function () {
            updateStorage();
        });


        $.each(formValues, function (key, value) {
            $("#" + key).prop('checked', value);
        });

        $(".modal").on("hidden.bs.modal", function () {
            $("#dodawanie_wydatku .modal-body").html("<div class=\"loader\"></div>");
            $(".dtp").remove();
            $('#inputTerminf,#inputDataf').bootstrapMaterialDatePicker('destroy');
        });
        // Match to Bootstraps data-toggle for the modal
        // and attach an onclick event handler
        $('#nowy_wydatek_modal').on('click', function (e) {
            var target_modal = $(e.currentTarget).data('target');

            var modal = $(target_modal);

            var modalBody = $(target_modal + ' .modal-body');

            modal.on('show.bs.modal', function () {
                setTimeout(
                        function ()
                        {

                            modalBody.load("<?PHP echo base_url() . "Wydatki/wydatek_modal"; ?>");

                        }, 1000);

            }).modal();
            // and show the modal

            // Now return a false (negating the link action) to prevent Bootstrap's JS 3.1.1
            // from throwing a 'preventDefault' error due to us overriding the anchor usage.
            return false;
        });

        $(".db1").hide();
        $(".db2").hide();


        function odmiana(liczba, pojedyncza, mnoga, mnoga_dopelniacz) {
            liczba = Math.abs(liczba); // tylko jeśli mogą zdarzyć się liczby ujemne
            if (liczba === 1)
                return pojedyncza;
            var reszta10 = liczba % 10;
            var reszta100 = liczba % 100;
            if (reszta10 > 4 || reszta10 < 2 || (reszta100 < 15 && reszta100 > 11))
                return mnoga_dopelniacz;
            return mnoga;
        }
        var f_kontrahent = JSON.parse(localStorage.getItem('f_kontrahent_wydatki')) || {};
        var f_NaRzecz_wydatki = JSON.parse(localStorage.getItem('f_NaRzecz_wydatki')) || {};
        var f_kateg = JSON.parse(localStorage.getItem('f_kateg_wydatki')) || {};
        var f_nabyw = JSON.parse(localStorage.getItem('f_nabyw_wydatki')) || {};
        var f_inputKontraktf_wydatki = JSON.parse(localStorage.getItem('f_inputKontraktf_wydatki')) || {};

        $('#inputKupiec').on("select2:select", function (e) {
            var data = $(this).select2('data');
            f_nabyw["text"] = data[0].text;
            f_nabyw["id"] = data[0].id;
            localStorage.setItem("f_nabyw_wydatki", JSON.stringify(f_nabyw));
        });
        $('#inputKategoria').on("select2:select", function (e) {
            var data = $(this).select2('data');
            f_kateg["text"] = data[0].text;
            f_kateg["id"] = data[0].id;
            localStorage.setItem("f_kateg_wydatki", JSON.stringify(f_kateg));
        });
        $('#inputKontrahent').on("select2:select", function (e) {
            var data = $(this).select2('data');
            f_kontrahent["text"] = data[0].text;
            f_kontrahent["id"] = data[0].id;
            localStorage.setItem("f_kontrahent_wydatki", JSON.stringify(f_kontrahent));
        });
        $('#inputNaRzeczf').on("select2:select", function (e) {
            var data = $(this).select2('data');
            f_NaRzecz_wydatki["text"] = data[0].text;
            f_NaRzecz_wydatki["id"] = data[0].id;
            localStorage.setItem("f_NaRzecz_wydatki", JSON.stringify(f_NaRzecz_wydatki));
        });
        $('#inputKontraktf').on("select2:select", function (e) {
            var data = $(this).select2('data');
            f_inputKontraktf_wydatki["text"] = data[0].text;
            f_inputKontraktf_wydatki["id"] = data[0].id;
            localStorage.setItem("f_inputKontraktf_wydatki", JSON.stringify(f_inputKontraktf_wydatki));
        });


        $("#inputNaRzeczf").select2({
            theme: "bootstrap",
            //minimumInputLength: 1,
            language: "pl",
            ajax: {
                type: "GET",
                url: '<?PHP echo base_url(); ?>Kontrahent/lista_kontrahentow',
                dataType: 'json',
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
            initSelection: function (element, callback) {
                if (f_NaRzecz_wydatki.id) {
                    callback({id: f_NaRzecz_wydatki.id, text: f_NaRzecz_wydatki.text});
                } else {
                    callback({id: null, text: "Dowolny"});
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
            initSelection: function (element, callback) {
                if (f_kontrahent.id) {
                    callback({id: f_kontrahent.id, text: f_kontrahent.text});
                } else {
                    callback({id: null, text: "Dowolny"});
                }



            },
        });
        $("#inputKontraktf").select2({
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
            initSelection: function (element, callback) {
                if (f_inputKontraktf_wydatki.id) {
                    callback({id: f_inputKontraktf_wydatki.id, text: f_inputKontraktf_wydatki.text});
                } else {
                    callback({id: null, text: "Dowolny"});
                }

            },
        });
        $("#inputKategoria").select2({
            theme: "bootstrap",
            // minimumInputLength: 1,
            language: "pl",
            ajax: {
                type: "GET",
                url: '<?PHP echo base_url(); ?>Wydatki/s2_kategorie_wydatku',
                dataType: 'json',
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
            initSelection: function (element, callback) {
                if (f_kateg.id) {
                    callback({id: f_kateg.id, text: f_kateg.text});
                } else {
                    callback({id: null, text: "Dowolna"});
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
            initSelection: function (element, callback) {
                if (f_nabyw.id) {
                    callback({id: f_nabyw.id, text: f_nabyw.text});
                } else {
                    callback({id: null, text: "Dowolna"});
                }

            },

        });


        // $("#inputKategoria").val({id: f_kateg.id, text: f_kateg.text}).trigger("change.select2");
//
        //datatables
        table = $('#table').DataTable({

            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.
            "bStateSave": true,
            "lengthMenu": [[10, 50, 200, -1], [10, 50, 200, "Wszystko"]],
            "sDom": '<"row view-filter"<"col-sm-12"<"clearfix">>><"row view-pager"<"col-sm-12"l<"text-center"ip>>>t',
            responsive: true,
            "language": {
                "url": "http://cdn.datatables.net/plug-ins/1.10.15/i18n/Polish.json"
            },
            "fnRowCallback": function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {

                if ((aData["kwota_brutto"] > aData["zaplacona_kwota"]))
                {
                    if (aData["ddif"] < "0")
                    {
                        $('td', nRow).css('background-color', 'rgba(255,0,0,0.33)');
                    } else if (aData["ddif"] == "0")
                    {
                        $('td', nRow).css('background-color', 'rgba(255,144,0,0.33)');
                    }
                }
                if ((aData["kwota_brutto"] === aData["zaplacona_kwota"]))
                {
                    $('td', nRow).css('background-color', 'rgba(0,255,0,0.33)');
                }

            },
            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo site_url('Wydatki/ajax_list') ?>",
                "type": "POST",
                "data": function (data) {
                    data.s_rejon = $('#s_rejon').val();
                    data.kupiec = $("#inputKupiec").select2('data')[0]['id'];
                    data.s_kategoria = $("#inputKategoria").select2('data')[0]['id'];
                    data.s_kontrahent = $("#inputKontrahent").select2('data')[0]['id'];
                    data.address = $('#address').val();
                    data.s_zakres = $('#inputZakresDat').val();
                    data.dateFrom = $('#dateFrom').val();
                    data.dateTo = $('#dateTo').val();

                    data.s_narzecz = $("#inputNaRzeczf").select2('data')[0]['id'];
                    data.s_kontrakt = $("#inputKontraktf").select2('data')[0]['id'];

                    data.s_nrfaktury = $("#inputNrFaktury").val();

                    data.<?php echo $this->security->get_csrf_token_name(); ?> = '<?php echo $this->security->get_csrf_hash(); ?>';
                    var arr = [];
                    $.each($('input[name="statusPlatnosci"]:checked'), function () {
                        var value = $(this).val()

                        arr.push(value)

                    })
                    data.status_pl = arr;
                },
                "dataSrc": function (json) {

                    if (json.agregacja.po_terminie == 0)
                    {
                        $("#po_terminie").hide();
                    } else {
                        $("#po_terminie").show();
                        $("#po_terminie").blink(10);
                        $("#po_terminie").html("Po terminie : " + json.agregacja.po_terminie);
                    }

                    $("#curr_netto").html("Netto : " + addCommas(json.agregacja.netto) + " zł");
                    $("#curr_brutto").html("Brutto : " + addCommas(json.agregacja.brutto) + " zł");
                    $("#curr_vat").html("Vat : " + addCommas(json.agregacja.vat) + " zł");
                    $("#pozostala_kwota").html("Zobowiązania : " + addCommas(json.agregacja.pozostala_kwota) + " zł");
                    $("#zaplacona_kwota").html("Opłacono : " + addCommas(json.agregacja.zaplacona_kwota) + " zł");
                    $("#do_zaplaty").html("Nieopłacone : <i class=\"icon-file-excel-box icon s-5\"></i> " + Math.round(json.agregacja.status.do_zaplaty));
                    $("#oplacone").html("Opłacone : <i class=\"icon-checkbox-marked icon s-5\"></i> " + Math.round(json.agregacja.status.oplacone));
                    $("#czesciowo").html("Częściowo : <i class=\"icon-division-box icon s-5\"></i> " + Math.round(json.agregacja.status.czesciowo));
                    return json.data;
                }
            },
            "fnInitComplete": function (oSettings, json) {
                $('[name=inputZakresDat]').change(function () {
                    if ($(this).val() === "custom") {
                        $(".db1").fadeIn(1000);
                        $(".db2").fadeIn(1000);
                        $('#dateFrom').bootstrapMaterialDatePicker({weekStart: 0, time: false}).on('change', function (e) {
                            table.search(this.value).draw();
                        });
                        $('#dateTo').bootstrapMaterialDatePicker({weekStart: 0, time: false}).on('change', function (e) {
                            table.search(this.value).draw();
                        });
                    } else {
                        $(".db1").fadeOut(1000);
                        $(".db2").fadeOut(1000);
                        $("#dateFrom,#dateTo").val('');
                    }

                });

                $("input[name=inputNrFaktury").on("change paste keyup", function () {
                    if (this.value.length >= 3) {
                        table.search(this.value).draw();
                    }
                    if (this.value.length == 0) {
                        table.search(this.value).draw();
                    }
                });

                $("input[name=statusPlatnosci").on("change", function () {

                    table.search(this.value).draw();
                });
                $('#form-filter select').on('change', function ()
                {
                    table.search(this.value).draw();
                    //alert(this.value);
                });
            },
            columns: [
                {data: "nr", visible: false},
                {data: "rejont", className: ""},
                {data: "kupujacy", "mRender": function (data, type, full) {
                        return '<a href="Pracownicy/Podglad/' + full["prac"] + '">' + data + '</a>'
                    }},

                {data: "kwota_brutto", "mRender": function (data, type, full) {
                        if (data) {
                            return  data + ' zł';
                        }
                    }},
                {data: "kwota_netto", className: ""},
                {data: "dokument", "mRender": function (data, type, full) {
                        return '<a href="Wydatki/Podglad/' + full["nr"] + '">' + data + '</a>'
                    }},
                {data: "data_zakupu", className: ""},
                {data: "termin",
                    "mRender": function (data, type, full) {

                        if (parseFloat(full["pozostala_kwota"]) > 0)
                        {
                            if (full["ddif"] == 0) {
                                return data + ' <b>( 0 )</b>'
                            }
                            if (full["ddif"] > 0) {
                                return data + ' <b>( + ' + full["ddif"] + ' )</b>'
                            }
                            if (full["ddif"] < 0) {
                                var dd = full["ddif"].replace("-", "");
                                return data + ' <b>( - ' + dd + ' )</b>'
                            }
                        } else {
                            return 'Opłacono';
                        }

                    }
                },
                {data: "kontrahent", className: ""},
                {data: "cel_zakupu", visible: false},
                {data: "dodal", visible: false},
                {data: "wartosc_vat", className: ""},
                {data: "procent_vat", "mRender": function (data, type, full) {
                        if (data) {
                            return '' + data + ' %';
                        }
                    }},
                {data: "metoda_platnosci", "mRender": function (data, type, full) {
                        var s = "";
                        switch (full["priorytet"]) {
                            case "3":
                                s += '<i class="icon icon-hexagon-outline s40"></i> '
                                break;
                            case "2":
                                s += '<i class="icon icon-arrow-up-bold-hexagon-outline text-orange s40"></i> '
                                break;
                            case "1":
                                s += '<i class="icon icon-alert-octagon text-red s40"></i> '
                                break;
                        }
                        switch (data) {
                            case "3":
                                s += '<i class="icon icon-credit-card-multiple s40"></i>';
                                break;
                            case "2":
                                s += '<i class="icon icon-bank s40"></i>';
                                break;
                            case "1":
                                s += '<i class="icon icon-cash-100 s40"></i>';
                                break;
                        }
                        if (full["rozbita"] === "1")
                        {
                            s += '<i class="icon icon-format-list-numbers s40"></i>';
                        }
                        if (parseFloat(full["kwota_brutto"]) === parseFloat(full["zaplacona_kwota"]))
                        {
                            s += '<i class="icon-checkbox-marked icon text-green"></i>';
                        } else if (full["zaplacona_kwota"] > parseFloat("0.00").toFixed(2))
                        {
                            s += '<i class="icon-division-box icon"></i>';
                        } else if (full["zaplacona_kwota"] === parseFloat("0.00").toFixed(2)) {
                            s += '<i class="icon-file-excel-box icon"></i>';
                        }
                        if (full["skan"] == null)
                        {
                            s += '<i class="icon-file-hidden icon"></i>';
                        }


                        return s;
                    }},
                {data: "kat", },
                {data: "pozostala_kwota"},
                {data: "zaplacona_kwota"},
                {data: "rozbita", visible: false},
                {data: "ddif", visible: false},
                {data: "priorytet", visible: false}

            ],
            //Set column definition initialisation properties.
            "columnDefs": [
                {
                    "targets": [0], //first column / numbering column
                    "orderable": false, //set not orderable
                },
                {
                    targets: [8],
                    render: $.fn.dataTable.render.ellipsis(10)
                }
            ],
        });
        $('#btn-filter').click(function () { //button filter event click
            table.ajax.reload(); //just reload table
        });
        $('#btn-reset').click(function () { //button reset event click
            $('#form-filter')[0].reset();
            $("#inputKupiec").val("").trigger("change.select2");
            $("#inputKategoria").val("").trigger("change.select2");
            $("#inputKontrahent").val("").trigger("change.select2");
            $("#inputNaRzeczf").val("").trigger("change.select2");
            $("#inputKontraktf").val("").trigger("change.select2");
            localStorage.removeItem('f_nabyw_wydatki');
            localStorage.removeItem('f_kateg_wydatki');
            localStorage.removeItem('f_kontrahent_wydatki');
            localStorage.removeItem('inputZakresDat_wydatki');
            localStorage.removeItem('formValues_wydatki');
            localStorage.removeItem('s_rejon_wydatki');
            localStorage.removeItem('f_NaRzecz_wydatki');
            localStorage.removeItem('f_inputKontraktf_wydatki');


            table.ajax.reload(); //just reload table
        });
    });
    // Dodawanie wydatku

</script>

</body>
</html>