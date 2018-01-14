<script src="https://code.highcharts.com/highcharts.src.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<div class="content">
    <div id="profile" class="page-layout simple tabbed">

        <!-- HEADER -->
        <div class="light-fg d-flex flex-column justify-content-center justify-content-lg-end p-6 pt-3"
             style="background-color: #4fc3f7 !important;">
            <div class="flex-column row flex-lg-row align-items-center align-items-lg-end no-gutters justify-content-between">
                <div class="user-info flex-column row flex-lg-row no-gutters align-items-center">


                    <div class="name h2 my-6"><?PHP echo $pojazd->nr_rej; ?> <?PHP echo $pojazd->marka; ?> <?PHP echo $pojazd->model; ?></div>
                </div>
                <button type="button" data-toggle="modal" id="mpbtn"
                        data-target="#modyfikacjaPojazdu" href="#" class="btn btn-secondary"><i
                            class="icon-settings"></i> Modyfikacja
                </button>
                <div class="row no-gutters" style="display: -webkit-inline-box;">
                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label for="regular1" class="control-label" style="width: 127px;">Miesiąc</label>
                        <select id="month_picker" class="form-control">
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
                        </select>
                    </div>
                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label for="regular1" class="control-label" style="width: 127px;">Rok</label>
                        <select id="year_picker" class="form-control">
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                        </select>
                    </div>

                </div>

            </div>
        </div>
        <!-- / HEADER -->

        <!-- CONTENT -->
        <div class="page-content">
            <ul class="nav nav-tabs" id="pojTab" role="tablist">
                <li class="nav-item"><a class="nav-link btn" id="about-tab" data-toggle="tab" href="#ogolne" role="tab"
                                        data-url="<?PHP echo base_url(); ?>Pojazdy/Dane/<?PHP echo $id; ?>"
                                        aria-controls="ogolne">Ogólne</a></li>
                <li class="nav-item"><a class="nav-link btn" id="about-tab" data-toggle="tab" href="#wydatki" role="tab"
                                        data-url="<?PHP echo base_url(); ?>Pojazdy/WydatkiDT/<?PHP echo $id; ?>"
                                        aria-controls="about-tab-pane">Wydatki</a></li>

            </ul>

            <div class="tab-content">
                <div class="tab-pane fade" id="ogolne" role="tabpanel" aria-labelledby="about-tab">
                    <div class="lds-css text-center ng-scope"><img
                                src="<?PHP echo base_url() . 'assets/grocery_crud/css/jquery_plugins/file_upload/loading.gif'; ?>">
                    </div>
                </div>
                <div class="tab-pane fade" id="delegacje" role="tabpanel" aria-labelledby="about-tab">
                    <div class="lds-css text-center ng-scope"><img
                                src="<?PHP echo base_url() . 'assets/grocery_crud/css/jquery_plugins/file_upload/loading.gif'; ?>">
                    </div>
                </div>
                <div class="tab-pane fade" id="wydatki">
                    <div class="text-center"><img
                                src="<?PHP echo base_url() . 'assets/grocery_crud/css/jquery_plugins/file_upload/loading.gif'; ?>">
                    </div>
                </div>

            </div>
        </div>
        <!-- / CONTENT -->
    </div>
</div>
<div id="modyfikacjaPojazdu" class="modal fade" tabindex="-1" role="dialog"
     aria-labelledby="modyfikacjaPojazdu"
     aria-hidden="true">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content">

            <div class="modal-header bg-green-400 text-white">
                <h4 class="modal-title" id="myLargeModalLabel">Modyfikacja pojazdu</h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid bd-example-row">

                    <form id="modyfikacjaPojazdufrm" name="modyfikacjaPojazdufrm" method="post" enctype="multipart/form-data"
                          accept-charset="utf-8">

                        <div class="profile-box info-box general card mb-4">

                            <header class="h6 bg-primary text-auto p-4">
                                <div class="title">Informacje o pojeździe</div>
                            </header>

                            <div class="content p-4">
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="inputBrutto" class="col-form-label">Marka samochodu</label>
                                        <input type="text" class="form-control" name="inputMarka" id="inputMarka"
                                               value="<?PHP echo $pojazd->marka; ?>">
                                    </div>
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label col-md-4">
                                        <label for="inputModel" class="control-label">Model samochodu</label>
                                        <input type="text" name="inputModel" id="inputModel" class="form-control"
                                               value="<?PHP echo $pojazd->model; ?>"/>
                                    </div>
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label col-md-4">
                                        <label for="inputNr_rej" class="control-label">Numer rejestracyjny</label>
                                        <input type="text" name="inputNr_rej" id="inputNr_rej" class="form-control"
                                               value="<?PHP echo $pojazd->nr_rej; ?>"/>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="inputUbezp_oc" class="col-form-label">Ubezpieczenie OC</label>
                                        <input type="text" class="form-control" name="inputUbezp_oc" id="inputUbezp_oc"
                                               value="<?PHP echo $pojazd->ubezp_oc; ?>">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="inputDokument" class="col-form-label">Ubezpieczenie AC</label>
                                        <input type="text" class="form-control" name="inputUbezp_ac" id="inputUbezp_ac"
                                               value="<?PHP echo $pojazd->ubezp_ac; ?>">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="inputBrutto" class="col-form-label">Ważność przeglądu</label>
                                        <input type="text" class="form-control" name="inputPrzeglad" id="inputPrzeglad"
                                               value="<?PHP echo $pojazd->przeglad; ?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputBrutto" class="col-form-label">Wartość pojazdu</label>
                                        <input type="text" class="form-control" name="inputwartosc_pojazdu" id="inputwartosc_pojazdu">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                            <label for="inputSkan" class="col-form-label">Skan asortymentu</label>
                                            <input type="file" class="form-control" name="inputSkan" id="inputSkan">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="form-group">
                                            <label>Stawka VAT</label>
                                            <div class="form-check form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" <?PHP echo ($pojazd->stawka_vat == 1) ? 'checked' : ''; ?>
                                                           type="radio" name="stawka_vat"
                                                           value="1"/>
                                                    <span class="radio-icon"></span>
                                                    <span class="form-check-description">50%</span>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" <?PHP echo ($pojazd->stawka_vat == 2) ? 'checked' : ''; ?>
                                                           type="radio" name="stawka_vat"
                                                           value="2"/>
                                                    <span class="radio-icon"></span>
                                                    <span class="form-check-description">100%</span>
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-5 col-xs-offset-3">
                                <button type="submit" class="btn btn-primary fuse-ripple-ready">Modyfikuj pojazd
                                </button>
                            </div>
                        </div>
                        <input type="hidden" name="poj_id" id="poj_id"
                               value="<?PHP echo $pojazd->poj_id; ?>">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="rozliczKilometry" class="modal fade" tabindex="-1" role="dialog"
     aria-labelledby="rozliczKilometry"
     aria-hidden="true">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content">

            <div class="modal-header bg-green-400 text-white">
                <h4 class="modal-title" id="myLargeModalLabel">Rejestracja przebiegu</h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid bd-example-row">

                    <form id="reKil" name="reKil" method="post">

                        <div class="profile-box info-box general card mb-4">

                            <header class="h6 bg-deep-purple-500 text-auto p-4">
                                <div class="title">Wprowadź przebieg</div>
                            </header>

                            <div class="content p-4">

                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="inputKM" class="col-form-label">Ilość kilometrów</label>
                                        <input type="text" class="form-control" name="inputKM" id="inputKM">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-5 col-xs-offset-3">
                                <button type="submit" id="oplacCzesciowobtn"
                                        class="btn btn-primary fuse-ripple-ready">Zarejestruj
                                </button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cofnij</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="attach-skan" class="modal fade" role="dialog"
     aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header bg-green-400 text-white">

                <div class="row col-lg-12">
                    <div class="col-md-4 "><h4 class="modal-title" id="myLargeModalLabel">Załącz plik</h4>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="loader"></div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<link href="https://cdn.datatables.net/1.10.15/css/dataTables.material.min.css" rel="stylesheet">

<link rel="stylesheet" type="text/css"
      href="<?PHP echo base_url(); ?>assets/js/select2/css/select2.min.css"/>
<link rel="stylesheet" type="text/css"
      href="<?PHP echo base_url(); ?>assets/js/select2/css/select2-bootstrap.css"/>
<link rel="stylesheet" type="text/css"
      href="<?PHP echo base_url(); ?>assets/js/select2/css/pmd-select2.css"/>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.material.min.js"></script>

<script type="text/javascript" src="<?PHP echo base_url(); ?>assets/js/select2/js/select2.full.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/i18n/pl.js"></script>
<script type="text/javascript" src="<?PHP echo base_url(); ?>assets/js/select2/js/pmd-select2.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/plug-ins/1.10.15/dataRender/ellipsis.js"></script>
<link rel="stylesheet" type="text/css"
      href="<?PHP echo base_url(); ?>assets/vendor/datetimepicker/css/bootstrap-material-datetimepicker.css"/>
<script src="<?PHP echo base_url(); ?>assets/sweetalert2.min.js"></script>
<link rel="stylesheet" href="<?PHP echo base_url(); ?>assets/sweetalert2.min.css">
<script type="text/javascript" language="javascript"
        src="<?PHP echo base_url(); ?>assets/vendor/datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.2.6/jquery.inputmask.bundle.min.js"></script>
<script src="<?PHP echo base_url(); ?>assets/js/formValidation.min.js"></script>
<script src="<?PHP echo base_url(); ?>assets/js/fv.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js"
        type="text/javascript"></script>
<script type="text/javascript"  src="https://www.gstatic.com/charts/loader.js"></script>
<script src="<?PHP echo base_url(); ?>assets/sweetalert2.min.js"></script>
<link rel="stylesheet" href="<?PHP echo base_url(); ?>assets/sweetalert2.min.css">

<script>
    var d = new Date();
    var n = d.getMonth() + 1;
    var y = d.getFullYear();

    $('#month_picker').val(n);
    $('#year_picker').val(y);




    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        e.preventDefault();

        var $this = $(this),
            loadurl = $(this).attr("data-url"),
            targ = $this.attr('href'),
            refresh = 0;
        if (targ == "#ogolne") {

        }
        var prevel = $(e.relatedTarget).filter($(this).attr('href'));
        $(targ).html('<img src="<?PHP echo base_url() . 'assets/grocery_crud/css/jquery_plugins/file_upload/loading.gif'; ?>">');
        if (prevel.context) {
            $(prevel.context.hash).html('<img src="<?PHP echo base_url() . 'assets/grocery_crud/css/jquery_plugins/file_upload/loading.gif'; ?>">');
        }
        setTimeout(function () {
            if (targ == "#ogolne") {
                $('#month_picker').on('change', function () {
                    refresh = 1;
                    $.ajax({
                        type: "POST",
                        url: "<?PHP echo base_url();?>Pojazdy/Dane/<?PHP echo $id;?>",
                        data: {
                            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>',
                            customMonth: $('#month_picker').val(),
                            customYear: $('#year_picker').val()
                        },
                        success: function (data) {
                            $(targ).html('');
                            $(targ).html(data);
                        }
                    });

                });
                if (refresh == 0) {
                    $.ajax({
                        type: "POST",
                        url: "<?PHP echo base_url();?>Pojazdy/Dane/<?PHP echo $id;?>",
                        data: {
                            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>',
                            customMonth: $('#month_picker').val(),
                            customYear: $('#year_picker').val()
                        },
                        success: function (data) {
                            $(targ).html(data);
                        }
                    });
                }
            } else {
                $.ajax({
                    type: "POST",
                    url: loadurl,
                    data: {
                        '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>',
                        customMonth: $('#month_picker').val(),
                        customYear: $('#year_picker').val()
                    },
                    success: function (data) {
                        $(targ).html(data);
                    }
                });
            }


        }, 222);
        $this.tab('show');
        e.stopImmediatePropagation();
        return false;

    });

    $(document).ready(function () {
        var csrfName2 = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash2 = '<?php echo $this->security->get_csrf_hash(); ?>';
        $('a[data-toggle="tab"]').on("show.bs.tab", function (a) {
            localStorage.setItem("activeTab", $(a.target).attr("href"))
        });
        var activeTab = localStorage.getItem("activeTab");
        activeTab ? $('#pojTab > li > a[href="' + activeTab + '"]').trigger("click") : $('#pojTab > li > a[href="#ogolne"]').trigger("click"), $('#month_picker').val(n);

    });


</script>