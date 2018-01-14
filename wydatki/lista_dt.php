<div class="doc page-layout simple full-width">
    <div class="page-content row p-12">

        <!-- STANDARD ALERTS -->
        <div class="col-12 col-md-12">
            <link href="https://cdn.datatables.net/1.10.15/css/dataTables.material.min.css" rel="stylesheet">

            <link rel="stylesheet" type="text/css"
                  href="<?PHP echo base_url(); ?>assets/js/select2/css/select2.min.css"/>
            <link rel="stylesheet" type="text/css"
                  href="<?PHP echo base_url(); ?>assets/js/select2/css/select2-bootstrap.css"/>
            <link rel="stylesheet" type="text/css"
                  href="<?PHP echo base_url(); ?>assets/js/select2/css/pmd-select2.css"/>

            <div class="profile-box info-box general card mb-4">
                <header class="h6 row no-gutters align-items-center justify-content-between bg-primary text-auto p-4">
                    <div class="title">Informacje o wydatku</div>
                    <div class=" more fuse-ripple-ready" style="    display: inline-block;    white-space: nowrap;">
                        <div class="form-group chkboxsmetod">

                            <div class="form-check form-check-inline has-success">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="statusPlatnosci" id="chk1"
                                           value="zap"/>
                                    <span class="checkbox-icon"></span>
                                    <span>Zapłacone</span>
                                </label>
                            </div>
                            <div class="form-check form-check-inline has-warning">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="statusPlatnosci" id="chk2"
                                           value="do_zap"/>
                                    <span class="checkbox-icon"></span>
                                    <span>Do zapłaty</span>
                                </label>
                            </div>
                            <div class="form-check form-check-inline has-danger">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="statusPlatnosci" id="chk3"
                                           value="po_term"/>
                                    <span class="checkbox-icon"></span>
                                    <span>Po terminie</span>
                                </label>
                            </div>
                            <div style="float: right; cursor: pointer;">
                                <span class="icon s-6 icon-cart my-cart-icon"><span
                                            class="badge badge-success my-cart-badge"></span></span>
                            </div>
                        </div>

                    </div>
                </header>


                <div class="content p-4">

                    <form id="form-filter">

                        <div class="row">


                            <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-2">
                                <label for="regular1" class="control-label">Numer faktury</label>
                                <input type="text" id="inputNrFaktury" name="inputNrFaktury" class="form-control">
                            </div>

                            <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-2">
                                <label for="regular1" class="control-label">Rejon</label>
                                <select id="s_rejon" class="form-control">
                                    <option value="" selected="selected">Wszystkie</option>
                                    <option value="1">Łódź</option>
                                    <option value="2">Wrocław</option>
                                    <option value="3">Kraj</option>
                                    <option value="4">Biuro</option>
                                </select>
                            </div>

                            <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-2">
                                <label for="regular1" class="control-label">Nabywca</label>
                                <select id="inputKupiec" name="inputKupiec"
                                        class="select-with-search pmd-select2 form-control">
                                    <option></option>
                                </select>
                            </div>

                            <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-2">
                                <label for="regular1" class="control-label">Kategoria</label>
                                <select id="inputKategoria" name="inputKategoria"
                                        class="select-with-search pmd-select2 form-control">
                                    <option></option>
                                </select>
                            </div>
                            <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-2">
                                <label for="regular1" class="control-label">Kontrahent</label>
                                <select id="inputKontrahent" name="inputKontrahent"
                                        class="select-with-search pmd-select2 form-control">
                                    <option></option>
                                </select>
                            </div>

                            <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-2">
                                <label for="regular1" class="control-label">Na rzecz</label>
                                <select id="inputNaRzeczf" name="inputNaRzeczf"
                                        class="select-with-search pmd-select2 form-control">
                                    <option></option>
                                </select>
                            </div>

                            <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-2">
                                <label for="regular1" class="control-label">Kontrakt</label>
                                <select id="inputKontraktf" name="inputKontraktf"
                                        class="select-with-search pmd-select2 form-control">
                                    <option></option>
                                </select>
                            </div>


                            <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-2">
                                <label for="regular1" class="control-label">Zakres dat</label>
                                <select class="form-control selectpicker input-sm dt-filter" id="inputZakresDat"
                                        name="inputZakresDat">
                                    <optgroup label="Ręczne">
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
                                    </optgroup>
                                    <optgroup label="Miesięczne">
                                        <option value="1">Styczeń</option>
                                        <option value="2">Luty</option>
                                        <option value="3">Marzec</option>
                                        <option value="4">Kwiecień</option>
                                        <option value="5">Maj</option>
                                        <option value="6">Czerwiec</option>
                                        <option value="7">Lipiec</option>
                                        <option value="8">Sierpień</option>
                                        <option value="9">Wrzesień</option>
                                        <option value="10">Październik</option>
                                        <option value="11">Listopad</option>
                                        <option value="12">Grudzień</option>

                                    </optgroup>
                                </select>
                            </div>

                            <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-2 dyearpicker"
                                 style="display: none;">
                                <label for="regular1" class="control-label">Wybór roku</label>
                                <select id="year_picker" class="form-control">
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                </select>
                            </div>


                            <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-2 db1"
                                 style="display: none;">
                                <label for="regular1" class="control-label">Od</label>
                                <input type="text" name="dateFrom" id="dateFrom" class="form-control"/>
                            </div>
                            <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-2 db2"
                                 style="display: none;">
                                <label for="regular1" class="control-label">Do</label>
                                <input type="text" name="dateTo" id="dateTo" class="form-control"/>
                            </div>

                            <div class="form-group chkboxs col-sm-2">

                                <div class="form-check form-check has-success">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="metodaPlatnosci"
                                               value="1"/>
                                        <span class="checkbox-icon"></span>
                                        <span><i class="icon icon-cash-100 s40"></i></span>
                                    </label>
                                </div>
                                <div class="form-check form-check has-warning">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="metodaPlatnosci"
                                               value="3"/>
                                        <span class="checkbox-icon"></span>
                                        <span><i class="icon icon-credit-card-multiple s40"></i></span>
                                    </label>
                                </div>
                                <div class="form-check form-check has-dangerer">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="metodaPlatnosci"
                                               value="2"/>
                                        <span class="checkbox-icon"></span>
                                        <span><i class="icon icon-bank s40"></i></span>
                                    </label>
                                </div>
                                <div class="form-check form-check has-dangerer">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="metodaPlatnosci"
                                               value="4"/>
                                        <span class="checkbox-icon"></span>
                                        <span><img style="width: 24px;"
                                                   src="<?PHP echo base_url('assets/images/refund.png'); ?>"
                                                   alt="zwrot"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group chkboxs col-sm-2">

                                <div class="form-check form-check has-success">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="pusteSkany"
                                               value="1"/>
                                        <span class="checkbox-icon"></span>
                                        <span><i class="icon-file-hidden icon"></i></span>
                                    </label>
                                </div>
                                <div class="form-check form-check has-success">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="s_rodzaj_f"
                                               value="1"/>
                                        <span class="checkbox-icon"></span>
                                        <span><img class="img-ref" src="<?PHP echo base_url("assets/images/proforma.png"); ?>" alt="proforma"></span>
                                    </label>
                                </div>
                                <div class="form-check form-check has-success">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="s_profbezskanu"
                                               value="1"/>
                                        <span class="checkbox-icon"></span>
                                        <span><img class="img-ref" src="<?PHP echo base_url("assets/images/proforma.png"); ?>" alt="proforma"> Bez skanu</span>
                                    </label>
                                </div>
                            </div>


                            <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-12">
                                <button type="button" id="btn-reset" class="btn btn-default">Reset</button>
                                <button type="button" class="btn" data-toggle="modal" data-target="#obIkon">Legenda
                                </button>
                                <button type="button" class="btn fuse-ripple-ready" id="nowy_wydatek_modal"
                                        data-toggle="modal" data-target="#dodawanie_wydatku"><i
                                            class="icon icon-plus"></i>Nowy wydatek
                                </button>
                            </div>

                        </div>

                    </form>


                </div>
                <div class="row col-lg-12 text-white">
                    <div class="col-md-2 "></div>
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
            </div>

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
                                        <div class="row no-gutters ripple p-2 fuse-ripple-ready"
                                             style="background-color: rgba(255, 0, 0, 0.33);">
                                            wpis po terminie
                                        </div>
                                    </div>
                                    <div class="info">
                                        <div class="row no-gutters ripple p-2 fuse-ripple-ready"
                                             style="background-color: rgba(255,144,0,0.33)">
                                            należy opłacić dzisiaj
                                        </div>
                                    </div>
                                    <div class="info">
                                        <div class="row no-gutters ripple p-2 fuse-ripple-ready"
                                             style="background-color: rgba(0,255,0,0.33)">
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

                                        <i class="icon icon-arrow-up-bold-hexagon-outline text-orange s40"></i> Istotny

                                    </div>
                                    <div class="col-lg-4">

                                        <i class="icon icon-alert-octagon text-red s40"></i> Pilny

                                    </div>

                                </div>
                            </div>
                            <div class="content p-4">
                                <h5>Metoda płatności</h5>

                                <div class="row col-lg-12">
                                    <div class="col-lg-3">
                                        <i class="icon icon-cash-100 s40"></i> Gotówka
                                    </div>
                                    <div class="col-lg-3">
                                        <i class="icon icon-bank s40"></i> Przelew
                                    </div>
                                    <div class="col-lg-3">
                                        <i class="icon icon-credit-card-multiple s40"></i> Karta
                                    </div>
                                    <div class="col-lg-3">
                                        <img style="width: 24px;"
                                             src="<?PHP echo base_url('assets/images/refund.png'); ?>" alt="zwrot"> Do
                                        zwrot
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
                    <div class="px-4 py-2 bg-primary" style="height:29px;" id="curr_brutto_add">Brutto : 0 zł</div>
                    <div class="bg-primary px-4 py-2" style="height:29px;" id="curr_netto_add">Netto : 0 zł</div>
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
<link rel="stylesheet" type="text/css"
      href="<?PHP echo base_url(); ?>assets/vendor/datetimepicker/css/bootstrap-material-datetimepicker.css"/>
<script type="text/javascript" language="javascript"
        src="<?PHP echo base_url(); ?>assets/vendor/datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.2.6/jquery.inputmask.bundle.min.js"></script>
<script src="<?PHP echo base_url(); ?>assets/js/formValidation.min.js"></script>
<script src="<?PHP echo base_url(); ?>assets/js/fv.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js"
        type="text/javascript"></script>
<script src="<?PHP echo base_url(); ?>assets/sweetalert2.min.js"></script>
<link rel="stylesheet" href="<?PHP echo base_url(); ?>assets/sweetalert2.min.css">
<style>.img-ref {
        width: 24px;
        margin-top: -11px;
    }</style>
<script type="text/javascript">
    function addCommas(nStr) {
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
                //console.log(lastSelected);
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
                //console.log(lastSelected);
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
                    function () {
                        modalBody.load("<?PHP echo base_url() . "Wydatki/wydatek_modal"; ?>");
                    }, 1000);

            }).modal();

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

        var f_custom_od = JSON.parse(localStorage.getItem('f_custom_od')) || {};
        var f_custom_do = JSON.parse(localStorage.getItem('f_custom_do')) || {};

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
        $("#dateFrom").on("change", function () {
            var data = $(this).val();
            f_custom_od["wartosc"] = data;
            localStorage.setItem("f_custom_od", JSON.stringify(f_custom_od));
        });

        $("#dateTo").on("change", function () {
            var data = $(this).val();
            f_custom_do["wartosc"] = data;
            localStorage.setItem("f_custom_do", JSON.stringify(f_custom_do));
        });

        $("#dateTo").val(f_custom_od.wartosc);
        $("#dateFrom").val(f_custom_do.wartosc);
        if ($("#dateFrom").length) {
            $(".db1,.db2").show();
        }

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
                    <?php echo $this->security->get_csrf_token_name(); ?>:
                    '<?php echo $this->security->get_csrf_hash(); ?>',
                }
                    ;
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
                    <?php echo $this->security->get_csrf_token_name(); ?>:
                    '<?php echo $this->security->get_csrf_hash(); ?>',
                }
                    ;
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
                    <?php echo $this->security->get_csrf_token_name(); ?>:
                    '<?php echo $this->security->get_csrf_hash(); ?>',
                }
                    ;
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
                    <?php echo $this->security->get_csrf_token_name(); ?>:
                    '<?php echo $this->security->get_csrf_hash(); ?>',
                }
                    ;
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
                    <?php echo $this->security->get_csrf_token_name(); ?>:
                    '<?php echo $this->security->get_csrf_hash(); ?>',
                }
                    ;
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

                if ((aData["kwota_brutto"] > aData["zaplacona_kwota"])) {
                    if (aData["ddif"] < "0") {
                        $('td', nRow).css('background-color', 'rgba(255,0,0,0.33)');
                    } else if (aData["ddif"] == "0") {
                        $('td', nRow).css('background-color', 'rgba(255,144,0,0.33)');
                    }
                }
                if ((aData["kwota_brutto"] === aData["zaplacona_kwota"])) {
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

                    /*
                        Custom filter handler
                     */
                    if ($.isNumeric($('#inputZakresDat').val())) {
                        data.customMonth = $('#inputZakresDat').val();
                        data.customYear = $('#year_picker').val();
                    } else {
                        data.s_zakres = $('#inputZakresDat').val();
                        data.dateFrom = $('#dateFrom').val();
                        data.dateTo = $('#dateTo').val();
                    }

                    data.s_rodzaj_f = $("input[name='s_rodzaj_f']:checked").val();
                    data.s_profbezskanu = $("input[name='s_profbezskanu']:checked").val();

                    data.s_narzecz = $("#inputNaRzeczf").select2('data')[0]['id'];
                    data.s_kontrakt = $("#inputKontraktf").select2('data')[0]['id'];
                    data.pusteSkany = $('input[name="pusteSkany"]:checked').val();

                    var metody = [];
                    $.each($('input[name="metodaPlatnosci"]:checked'), function () {
                        var value = $(this).val()

                        metody.push(value)

                    });

                    data.s_metody = metody;


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

                    if (json.agregacja.po_terminie == 0) {
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


                    if ($.isNumeric($('#inputZakresDat').val())) {
                        $(".dyearpicker").show();
                        $(".db1").fadeOut(1000);
                        $(".db2").fadeOut(1000);
                        $(".db1,.db2").val("");
                    } else {
                        $(".dyearpicker").hide();
                    }
                    if ($(this).val() === "custom") {
                        $(".db1").fadeIn(1000);
                        $(".db2").fadeIn(1000);
                        $('#dateFrom').bootstrapMaterialDatePicker({
                            weekStart: 0,
                            time: false
                        }).on('change', function (e) {
                            table.search(this.value).draw();
                        });
                        $('#dateTo').bootstrapMaterialDatePicker({
                            weekStart: 0,
                            time: false
                        }).on('change', function (e) {
                            table.search(this.value).draw();
                        });
                    } else {

                        $(".db1").fadeOut(1000);
                        $(".db2").fadeOut(1000);
                        $("#dateFrom,#dateTo").val('');
                    }


                });

                $("input[name=inputNrFaktury]").on("change paste keyup", function () {
                    if (this.value.length >= 3) {
                        table.search(this.value).draw();
                    }
                    if (this.value.length == 0) {
                        table.search(this.value).draw();
                    }
                });

                $("input[name=statusPlatnosci]").on("change", function () {

                    table.search(this.value).draw();
                });
                $("input[name=s_rodzaj_f]").on("change", function () {

                    table.search(this.value).draw();
                });
                $("input[name=metodaPlatnosci]").on("change", function () {

                    table.search(this.value).draw();
                });
                $("input[name=pusteSkany],input[name=s_profbezskanu]").on("change", function () {

                    table.search(this.value).draw();
                });
                $('#form-filter select').on('change', function () {
                    table.search(this.value).draw();
                    //alert(this.value);
                });
            },
            columns: [
                {data: "nr", visible: false},
                {data: "rejont", className: ""},
                {
                    data: "kupujacy", "mRender": function (data, type, full) {
                    return '<a href="Pracownicy/Podglad/' + full["prac"] + '">' + data + '</a>'
                }
                },

                {
                    data: "kwota_brutto", "mRender": function (data, type, full) {
                    if (data) {
                        return data + ' zł';
                    }
                }
                },
                {data: "kwota_netto", className: ""},
                {
                    data: "dokument", "mRender": function (data, type, full) {
                    if (full['pro_forma']) {
                        return '<img class="img-ref" src="<?PHP echo base_url("assets/images/proforma.png"); ?>" alt="proforma"> ' + '<a href="Wydatki/Podglad/' + full["nr"] + '">' + data + '</a>'
                    } else {
                        return '<a href="Wydatki/Podglad/' + full["nr"] + '">' + data + '</a>'
                    }

                }
                },
                {data: "data_zakupu", className: ""},
                {
                    data: "termin",
                    "mRender": function (data, type, full) {

                        if (parseFloat(full["pozostala_kwota"]) > 0) {
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
                {
                    data: "procent_vat", "mRender": function (data, type, full) {
                    if (data) {
                        return '' + data + ' %';
                    }
                }
                },
                {
                    data: "metoda_platnosci", "mRender": function (data, type, full) {
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
                        case "4":
                            s += '<img class="img-ref" src="<?PHP echo base_url("assets/images/refund.png"); ?>" alt="zwrot">';
                            break;
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
                    if (full["rozbita"] === "1") {
                        s += '<i class="icon icon-format-list-numbers s40"></i>';
                    }
                    if (parseFloat(full["kwota_brutto"]) === parseFloat(full["zaplacona_kwota"])) {
                        s += '<i class="icon-checkbox-marked icon text-green"></i>';
                    } else if (full["zaplacona_kwota"] > parseFloat("0.00").toFixed(2)) {
                        s += '<i class="icon-division-box icon"></i>';
                    } else if (full["zaplacona_kwota"] === parseFloat("0.00").toFixed(2)) {
                        s += '<i class="icon-file-excel-box icon"></i>';
                    }
                    if (full["skan"] == null) {
                        s += '<i class="icon-file-hidden icon"></i>';
                    }


                    return s;
                }
                },
                {data: "kat",},
                {
                    data: "pozostala_kwota", "mRender": function (data, type, full) {
                    if (data > 0) {
                        return '<button class="btn-xs btn-danger my-cart-btn" data-id="' + full['nr'] + '" data-name="' + full['dokument'] + '" data-summary="summary 1" data-price="' + full['pozostala_kwota'] + '" data-quantity="1" data-image="">' + data + ' Opłać</button>';

                    } else {
                        return "Opłacona";
                    }
                }
                },
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

            localStorage.removeItem('f_custom_od');
            localStorage.removeItem('f_custom_do');

            $(".db1").fadeOut(1000);
            $(".db2").fadeOut(1000);
            $(".dyearpicker").fadeOut(1000);
            table.ajax.reload(); //just reload table
        });
    });

</script>


<script type="text/javascript">
    /*
* jQuery myCart - v1.5 - 2017-10-23
* http://asraf-uddin-ahmed.github.io/
* Copyright (c) 2017 Asraf Uddin Ahmed; Licensed None
*/

    (function ($) {

        "use strict";

        var OptionManager = (function () {
            var objToReturn = {};

            var _options = null;
            var DEFAULT_OPTIONS = {
                currencySymbol: 'zł',
                classCartIcon: 'my-cart-icon',
                classCartBadge: 'my-cart-badge',
                classProductQuantity: 'my-product-quantity',
                classProductRemove: 'my-product-remove',
                classCheckoutCart: 'my-cart-checkout',
                affixCartIcon: true,
                showCheckoutModal: true,
                numberOfDecimals: 2,
                cartItems: null,
                clickOnAddToCart: function ($addTocart) {
                },
                afterAddOnCart: function (products, totalPrice, totalQuantity) {
                },
                clickOnCartIcon: function ($cartIcon, products, totalPrice, totalQuantity) {
                },
                checkoutCart: function (products, totalPrice, totalQuantity) {
                },
                getDiscountPrice: function (products, totalPrice, totalQuantity) {
                    return null;
                }
            };


            var loadOptions = function (customOptions) {
                _options = $.extend({}, DEFAULT_OPTIONS);
                if (typeof customOptions === 'object') {
                    $.extend(_options, customOptions);
                }
            }
            var getOptions = function () {
                return _options;
            }

            objToReturn.loadOptions = loadOptions;
            objToReturn.getOptions = getOptions;
            return objToReturn;
        }());

        var MathHelper = (function () {
            var objToReturn = {};
            var getRoundedNumber = function (number) {
                number = parseFloat(number);
                if (isNaN(number)) {
                    throw new Error('Parameter is not a Number');
                }
                var options = OptionManager.getOptions();
                return number.toFixed(options.numberOfDecimals);
            }
            objToReturn.getRoundedNumber = getRoundedNumber;
            return objToReturn;
        }());

        var ProductManager = (function () {
            var objToReturn = {};

            /*
            PRIVATE
            */
            localStorage.products = localStorage.products ? localStorage.products : "";
            var getIndexOfProduct = function (id) {
                var productIndex = -1;
                var products = getAllProducts();
                $.each(products, function (index, value) {
                    if (value.id == id) {
                        productIndex = index;
                        return;
                    }
                });
                return productIndex;
            }
            var setAllProducts = function (products) {
                localStorage.products = JSON.stringify(products);
            }
            var addProduct = function (id, name, summary, price, quantity, image) {
                var products = getAllProducts();
                products.push({
                    id: id,
                    name: name,
                    summary: summary,
                    price: price,
                    quantity: 1,
                    image: name
                });
                setAllProducts(products);
            }

            /*
            PUBLIC
            */
            var getAllProducts = function () {
                try {
                    var products = JSON.parse(localStorage.products);
                    return products;
                } catch (e) {
                    return [];
                }
            }
            var updatePoduct = function (id, quantity) {
                var productIndex = getIndexOfProduct(id);
                if (productIndex < 0) {
                    return false;
                }
                var products = getAllProducts();
                products[productIndex].quantity = typeof quantity === "undefined" ? products[productIndex].quantity * 1 : quantity;
                setAllProducts(products);
                return true;
            }
            var setProduct = function (id, name, summary, price, quantity, image) {
                if (typeof id === "undefined") {
                    console.error("id required")
                    return false;
                }
                if (typeof name === "undefined") {
                    console.error("name required")
                    return false;
                }
                if (typeof image === "undefined") {
                    console.error("image required")
                    return false;
                }
                if (!$.isNumeric(price)) {
                    console.error("price is not a number")
                    return false;
                }
                if (!$.isNumeric(quantity)) {
                    console.error("quantity is not a number");
                    return false;
                }
                summary = typeof summary === "undefined" ? "" : summary;

                if (!updatePoduct(id)) {
                    addProduct(id, name, summary, price, quantity, name);
                }
            }
            var clearProduct = function () {
                setAllProducts([]);
            }
            var removeProduct = function (id) {
                var products = getAllProducts();
                products = $.grep(products, function (value, index) {
                    return value.id != id;
                });
                setAllProducts(products);
            }
            var getTotalQuantity = function () {
                var total = 0;
                var products = getAllProducts();
                $.each(products, function (index, value) {
                    total += value.quantity * 1;
                });
                return total;
            }
            var getTotalPrice = function () {
                var products = getAllProducts();
                var total = 0;
                //console.log("st");
                //console.log(products);
                //console.log("en");
                $.each(products, function (index, value) {

                    total += parseFloat(value.price);
                    //total = MathHelper.getRoundedNumber(total);
                });
                return total;
            }

            objToReturn.getAllProducts = getAllProducts;
            objToReturn.updatePoduct = updatePoduct;
            objToReturn.setProduct = setProduct;
            objToReturn.clearProduct = clearProduct;
            objToReturn.removeProduct = removeProduct;
            objToReturn.getTotalQuantity = getTotalQuantity;
            objToReturn.getTotalPrice = getTotalPrice;
            return objToReturn;
        }());


        var loadMyCartEvent = function (targetSelector) {

            var options = OptionManager.getOptions();
            var $cartIcon = $("." + options.classCartIcon);
            var $cartBadge = $("." + options.classCartBadge);
            var classProductQuantity = options.classProductQuantity;
            var classProductRemove = options.classProductRemove;
            var classCheckoutCart = options.classCheckoutCart;

            var idCartModal = 'my-cart-modal';
            var idCartTable = 'my-cart-table';
            var idGrandTotal = 'my-cart-grand-total';
            var idEmptyCartMessage = 'my-cart-empty-message';
            var idDiscountPrice = 'my-cart-discount-price';
            var classProductTotal = 'my-product-total';
            var classAffixMyCartIcon = 'my-cart-icon-affix';


            if (options.cartItems && options.cartItems.constructor === Array) {
                ProductManager.clearProduct();
                $.each(options.cartItems, function () {
                    ProductManager.setProduct(this.id, this.name, this.summary, this.price, this.quantity, this.name);
                });
            }

            $cartBadge.text(ProductManager.getTotalQuantity());

            if (!$("#" + idCartModal).length) {
                $('body').append(
                    '<div class="modal fade" id="' + idCartModal + '" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">' +
                    '<div class="modal-dialog" role="document">' +
                    '<div class="modal-content">' +
                    '<div class="modal-header">' +
                    '<h4 class="modal-title" id="myModalLabel">Rozliczanie wydatków</h4>' +
                    '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
                    '</div>' +
                    '<div class="modal-body">' +
                    '<table class="table table-hover table-responsive" id="' + idCartTable + '"></table>' +
                    '</div>' +
                    '<div class="modal-footer">' +
                    '<button type="button" class="btn btn-default" data-dismiss="modal">Zamknij</button>' +
                    '<button type="button" class="btn btn-primary ' + classCheckoutCart + '">Rozlicz</button>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '</div>'
                );
            }

            var drawTable = function () {
                var $cartTable = $("#" + idCartTable);
                $cartTable.empty();

                var products = ProductManager.getAllProducts();
                $cartTable.append('<thead><tr class="btn-primary bg-primary"><th>Dokument</th><th>Kwota</th></tr></thead>');
                $.each(products, function () {
                    var total = this.quantity * this.price;
                    $cartTable.append(
                        '<tr data-id="' + this.id + '" data-price="' + this.price + '">' +
                        '<td width="50%"><a href="javascript:void(0);" class="btn-md  ' + classProductRemove + '">X</a> ' + this.name + '</td>' +
                        '<td width="50%" title="Unit Price">' + MathHelper.getRoundedNumber(this.price) + ' ' + options.currencySymbol + '</td>' +
                        '</tr>'
                    );
                });

                $cartTable.append(products.length ?
                    '<tr>' +
                    '<td><strong>Łącznie</strong></td>' +
                    '<td><strong id="' + idGrandTotal + '"></strong></td>' +
                    '</tr>'
                    : '<tr class="alert alert-danger" role="alert" id="' + idEmptyCartMessage + '"><td colspan="3">Koszyk jest pusty</td></tr>'
                );

                showGrandTotal();

            }
            var showModal = function () {
                drawTable();
                $("#" + idCartModal).modal('show');
            }
            var updateCart = function () {
                $.each($("." + classProductQuantity), function () {
                    var id = $(this).closest("tr").data("id");
                    ProductManager.updatePoduct(id, $(this).val());
                });
            }
            var showGrandTotal = function () {
                $("#" + idGrandTotal).text(MathHelper.getRoundedNumber(ProductManager.getTotalPrice()));
            }


            /*
            EVENT
            */
            if (options.affixCartIcon) {
                var cartIconBottom = $cartIcon.offset().top * 1 + $cartIcon.css("height").match(/\d+/) * 1;
                var cartIconPosition = $cartIcon.css('position');
                $(window).scroll(function () {
                    $(window).scrollTop() >= cartIconBottom ? $cartIcon.addClass(classAffixMyCartIcon) : $cartIcon.removeClass(classAffixMyCartIcon);
                });
            }

            $cartIcon.click(function () {
                options.showCheckoutModal ? showModal() : options.clickOnCartIcon($cartIcon, ProductManager.getAllProducts(), ProductManager.getTotalPrice(), ProductManager.getTotalQuantity());
            });

            $(document).on("input", "." + classProductQuantity, function () {
                var price = $(this).closest("tr").data("price");
                var id = $(this).closest("tr").data("id");
                var quantity = $(this).val();

                $(this).parent("td").next("." + classProductTotal).text(options.currencySymbol + MathHelper.getRoundedNumber(price * 1));
                ProductManager.updatePoduct(id, 1);

                $cartBadge.text(ProductManager.getTotalQuantity());
                showGrandTotal();

            });

            $(document).on('keypress', "." + classProductQuantity, function (evt) {
                if (evt.keyCode == 38 || evt.keyCode == 40) {
                    return;
                }
                evt.preventDefault();
            });

            $(document).on('click', "." + classProductRemove, function () {
                var $tr = $(this).closest("tr");
                var id = $tr.data("id");
                $tr.hide(500, function () {
                    ProductManager.removeProduct(id);
                    drawTable();
                    $cartBadge.text(ProductManager.getTotalQuantity());
                });
            });

            $(document).on('click', "." + classCheckoutCart, function () {
                var products = ProductManager.getAllProducts();
                if (!products.length) {
                    $("#" + idEmptyCartMessage).fadeTo('fast', 0.5).fadeTo('fast', 1.0);
                    return;
                }
                updateCart();
                options.checkoutCart(ProductManager.getAllProducts(), ProductManager.getTotalPrice(), ProductManager.getTotalQuantity());

                $cartBadge.text(ProductManager.getTotalQuantity());
                $("#" + idCartModal).modal("hide");
            });

            $(document).on('click', targetSelector, function () {

                var $target = $(this);
                options.clickOnAddToCart($target);

                var id = $target.data('id');
                var name = $target.data('name');
                var summary = $target.data('summary');
                var price = $target.data('price');
                var quantity = $target.data('quantity');
                var image = $target.data('name');

                swal({
                    title: 'Opłacić wydatek w całości?',
                    input: 'checkbox',
                    inputClass: 'checkbox-icon fuse-ripple-ready',
                    confirmButtonText: "Opłać",
                    inputPlaceholder: 'Opłać częściowo'
                }).then(function (result) {
                    if (result === 1) {

                        sweetAlert({
                            title: "Podaj kwotę",
                            text: '',
                            input: 'text',
                            inputClass: 'p_cnetto',
                            showCancelButton: true,
                            closeOnConfirm: false,
                            animation: "slide-from-top"
                        }).then(function (result) {
                            if (result) {
                                var nval = Inputmask.unmask(result, {alias: "currency", prefix: "Zł "});

                                if (price < nval) {
                                    swal('Podana kwota jest wyższa niż kwota wydatku');
                                    return;
                                }
                                ProductManager.setProduct(id, name, summary, nval, quantity, image);
                                $cartBadge.text(ProductManager.getTotalQuantity());

                                options.afterAddOnCart(ProductManager.getAllProducts(), ProductManager.getTotalPrice(), 1);
                            }
                        }).catch(swal.noop);


                        // org

                        $(".p_cnetto").inputmask({alias: "currency", prefix: "Zł "});
                    } else if (result === 0) {

                        ProductManager.setProduct(id, name, summary, price, quantity, image);
                        $cartBadge.text(ProductManager.getTotalQuantity());

                        options.afterAddOnCart(ProductManager.getAllProducts(), ProductManager.getTotalPrice(), 1);
                        swal(
                            'Komunikat !',
                            'Dodano',
                            'success'
                        );
                    }
                }).catch(swal.noop);


            });

        }


        $.fn.myCart = function (userOptions) {
            OptionManager.loadOptions(userOptions);
            loadMyCartEvent(this.selector);
            return this;
        }

        var goToCartIcon = function ($addTocartBtn) {
            var $cartIcon = $(".my-cart-icon");

            $addTocartBtn.css({
                "background-color": "green"
            });
            $addTocartBtn.attr('disabled', 'disabled');

        }

        $('.my-cart-btn').myCart({
            currencySymbol: 'zł',
            classCartIcon: 'my-cart-icon',
            classCartBadge: 'my-cart-badge',
            classProductQuantity: 'my-product-quantity',
            classProductRemove: 'my-product-remove',
            classCheckoutCart: 'my-cart-checkout',
            affixCartIcon: true,
            showCheckoutModal: true,
            numberOfDecimals: 2,
            cartItems: null,
            clickOnAddToCart: function ($addTocart) {
                goToCartIcon($addTocart);
            },
            afterAddOnCart: function (products, totalPrice, totalQuantity) {
                //console.log("afterAddOnCart", products, totalPrice, totalQuantity);
            },
            clickOnCartIcon: function ($cartIcon, products, totalPrice, totalQuantity) {
                //console.log("cart icon clicked", $cartIcon, products, totalPrice, totalQuantity);
            },
            checkoutCart: function (products, totalPrice, totalQuantity) {
                var co = [];
                $.each(products, function () {

                    co.push({
                        id: this.id,
                        name: this.name,
                        price: this.price,
                    });
                });


                // swal
                swal({
                    title: 'Czy chcesz opłacić wydatki?',
                    text: "",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Tak',
                    cancelButtonText: 'Nie',
                    confirmButtonClass: 'btn btn-success',
                    cancelButtonClass: 'btn btn-danger',
                    buttonsStyling: false
                }).then(function () {
                    var postdata = {
                        'j': JSON.stringify(co),
                        '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
                    };
                    $.ajax({
                        url: '<?PHP echo base_url(); ?>Wydatki/karta_rozlicz',
                        method: 'POST',
                        data: postdata,
                        success: function (data) {


                            if (data.response.status) {
                                if (data.response.message === "Rozliczono") {
                                    ProductManager.clearProduct();
                                    $("#my-cart-modal").modal("hide");
                                    $(".my-cart-badge").html("0");
                                    var win = window.open('<?PHP echo base_url();?>'+data.response.potwierdzenie, '_blank');
                                    if (win) {
                                        win.focus();
                                    } else {
                                        //Browser has blocked it

                                        alert('Please allow popups for this website');
                                    }


                                }

                            }
                            swal({
                                    title: 'Komunikat !',
                                    html:   data.response.message,
                                    type: 'success'
                                },
                                function(){
                                    location.reload();
                                });


                            if(data.response.potwierdzenie){
                                swal({
                                        title: 'Potwierdzenie !',
                                        html:  '<a href="<?PHP echo base_url();?>'+data.response.potwierdzenie + '" target="_blank">Podgląd</a>',
                                        type: 'success'
                                    },
                                    function(){
                                        location.reload();
                                    });

                            }


                        }
                    });

                }, function (dismiss) {
                    if (dismiss === 'cancel') {
                        swal(
                            'Anulowano',
                            'Nie rozliczono wydatków',
                            'error'
                        )
                    }
                });

            }
        });

        $("#addNewProduct").click(function (event) {
            var currentElementNo = $(".row").children().length + 1;
            $(".row").append('<div class="col-md-3 text-center"><img src="images/img_empty.png" width="150px" height="150px"><br>product ' + currentElementNo + ' - <strong>' + currentElementNo + '</strong><br><button class="btn btn-danger my-cart-btn" data-id="' + currentElementNo + '" data-name="product ' + currentElementNo + '" data-summary="summary ' + currentElementNo + '" data-price="' + currentElementNo + '" data-quantity="1" data-image="images/img_empty.png">Add to Cart</button><a href="#" class="btn btn-info">Details</a></div>')
        });
    })(jQuery);
</script>

</body>
</html>