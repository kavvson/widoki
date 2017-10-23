<script src="https://code.highcharts.com/highcharts.src.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<div class="content">
    <div id="profile" class="page-layout simple tabbed">

        <!-- HEADER -->
        <div class="light-fg d-flex flex-column justify-content-center justify-content-lg-end p-6 pt-3"
             style="background-color: #4fc3f7 !important;">
            <div class="flex-column row flex-lg-row align-items-center align-items-lg-end no-gutters justify-content-between">
                <div class="user-info flex-column row flex-lg-row no-gutters align-items-center">


                    <div class="name h2 my-6"><?PHP echo $p['imie'] . " " . $p['nazwisko']; ?></div>

                </div>
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


                    <!-- <button type="button" disabled data-toggle="modal" id="o_m_kontrahent"
                             data-target="#modyfikacja_kontrahenta" href="#" class="btn btn-secondary"><i
                                 class="icon-settings"></i> Modyfikacja
                     </button> -->
                </div>

            </div>
        </div>
        <!-- / HEADER -->

        <!-- CONTENT -->
        <div class="page-content">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item"><a class="nav-link btn" id="about-tab" data-toggle="tab" href="#ogolne" role="tab"
                                        data-url="<?PHP echo base_url(); ?>Pracownicy/Dane/<?PHP echo $id; ?>"
                                        aria-controls="ogolne">Ogólne</a></li>
                <li class="nav-item"><a class="nav-link btn" id="about-tab" data-toggle="tab" href="#wydatki" role="tab"
                                        data-url="<?PHP echo base_url(); ?>Pracownicy/Wydatki/<?PHP echo $id; ?>"
                                        aria-controls="about-tab-pane">Wydatki</a></li>
                <li class="nav-item"><a class="nav-link btn" id="about-tab" data-toggle="tab" href="#place" role="tab"
                                        data-url="<?PHP echo base_url(); ?>Pracownicy/Place/<?PHP echo $id; ?>"
                                        aria-controls="about-tab-pane">Płaca zasadnicza</a></li>
                <li class="nav-item"><a class="nav-link btn" id="about-tab" data-toggle="tab" href="#umowy" role="tab"
                                        data-url="<?PHP echo base_url(); ?>Pracownicy/Umowy/<?PHP echo $id; ?>"
                                        aria-controls="about-tab-pane">Płaca pozabilansowa</a></li>
                <li class="nav-item"><a class="nav-link btn" id="about-tab" data-toggle="tab" href="#delegacje"
                                        role="tab"
                                        data-url="<?PHP echo base_url(); ?>Pracownicy/ListaDelegacji/<?PHP echo $id; ?>"
                                        aria-controls="about-tab-pane">Delegacje</a></li>

                <li class="nav-item"><a class="nav-link btn" id="about-tab" data-toggle="tab" href="#karty" role="tab"
                                        data-url="<?PHP echo base_url(); ?>Pracownicy/Karty/<?PHP echo $id; ?>"
                                        aria-controls="about-tab-pane">Karta +-</a></li>
                <li class="nav-item"><a class="nav-link btn" id="about-tab" data-toggle="tab" href="#premie" role="tab"
                                        data-url="<?PHP echo base_url(); ?>Pracownicy/Premie/<?PHP echo $id; ?>"
                                        aria-controls="about-tab-pane">Premie</a></li>
                <li class="nav-item"><a class="nav-link btn" id="about-tab" data-toggle="tab" href="#doreki" role="tab"
                                        data-url="<?PHP echo base_url(); ?>Pracownicy/PlatnosciDoReki/<?PHP echo $id; ?>"
                                        aria-controls="about-tab-pane">Płatności "do ręki"</a></li>
                <li class="nav-item"><a class="nav-link btn" id="about-tab" data-toggle="tab" href="#potraconeplatnosci"
                                        role="tab"
                                        data-url="<?PHP echo base_url(); ?>Pracownicy/PotraconePlatnosci/<?PHP echo $id; ?>"
                                        aria-controls="about-tab-pane">Potrącone płatności</a></li>

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
                <div class="tab-pane fade" id="place">
                    <div class="text-center"><img
                                src="<?PHP echo base_url() . 'assets/grocery_crud/css/jquery_plugins/file_upload/loading.gif'; ?>">
                    </div>
                </div>
                <div class="tab-pane fade" id="umowy">
                    <div class="text-center"><img
                                src="<?PHP echo base_url() . 'assets/grocery_crud/css/jquery_plugins/file_upload/loading.gif'; ?>">
                    </div>
                </div>
                <div class="tab-pane fade" id="karty">
                    <div class="text-center"><img
                                src="<?PHP echo base_url() . 'assets/grocery_crud/css/jquery_plugins/file_upload/loading.gif'; ?>">
                    </div>
                </div>
                <div class="tab-pane fade" id="premie">
                    <div class="text-center"><img
                                src="<?PHP echo base_url() . 'assets/grocery_crud/css/jquery_plugins/file_upload/loading.gif'; ?>">
                    </div>
                </div>
                <div class="tab-pane fade" id="doreki">
                    <div class="text-center"><img
                                src="<?PHP echo base_url() . 'assets/grocery_crud/css/jquery_plugins/file_upload/loading.gif'; ?>">
                    </div>
                </div>
                <div class="tab-pane fade" id="potraconeplatnosci">
                    <div class="text-center"><img
                                src="<?PHP echo base_url() . 'assets/grocery_crud/css/jquery_plugins/file_upload/loading.gif'; ?>">
                    </div>
                </div>

            </div>
        </div>
        <!-- / CONTENT -->
    </div>
</div>
<div id="dodajDelegacje" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="dodajDelegacje"
     aria-hidden="true">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content">
            <div class="modal-header bg-green-400 text-white"><h4 class="modal-title" id="myLargeModalLabel">Zarejestuj
                    delegację</h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid bd-example-row">
                    <form id="dodajDelegacje_f" name="dodajDelegacje_f" method="post">
                        <div class="profile-box info-box general card mb-4">
                            <header class="h6 bg-primary text-auto p-4">
                                <div class="title">Czas trwania delegacji</div>
                            </header>
                            <div class="content p-4">
                                <div class="row">
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-6"><label
                                                for="regular1" class="control-label">Od</label> <input type="text"
                                                                                                       name="dateFromm"
                                                                                                       id="dateFromm"
                                                                                                       class="form-control"/>
                                    </div>
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-6"><label
                                                for="regular1" class="control-label">Do</label> <input type="text"
                                                                                                       name="dateTomm"
                                                                                                       id="dateTomm"
                                                                                                       class="form-control"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-12"><label
                                                for="regular1" class="control-label">Opis</label> <textarea
                                                id="delegacjaOpis" name="delegacjaOpis" style="height:100px;"
                                                class="form-control"></textarea></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-5 col-xs-offset-3">
                                <button type="submit" class="btn btn-primary fuse-ripple-ready">Dodaj delegację</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Zakmnij</button>
                            </div>
                        </div>
                        <input type="hidden" name="fk_prac" value="<?PHP echo $id; ?>"></form>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="dodajPremie" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="dodajPremie" aria-hidden="true">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content">
            <div class="modal-header bg-green-400 text-white"><h4 class="modal-title" id="myLargeModalLabel">Zarejestuj
                    premię</h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid bd-example-row">
                    <form id="dodajPremie_f" name="dodajPremie_f" method="post">
                        <div class="profile-box info-box general card mb-4">
                            <header class="h6 bg-primary text-auto p-4">
                                <div class="title">Przyznanie premii</div>
                            </header>
                            <div class="content p-4">
                                <div class="row">
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-6"><label
                                                for="regular1" class="control-label">Kwota premii</label> <input
                                                type="text" name="cf_premia_kwota" id="cf_premia_kwota"
                                                class="form-control"/></div>
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-6"><label
                                                for="regular1" class="control-label">Opis</label> <input type="text"
                                                                                                         name="cf_premia_opis"
                                                                                                         id="cf_premia_opis"
                                                                                                         class="form-control"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-5 col-xs-offset-3">
                                <button type="submit" class="btn btn-primary fuse-ripple-ready">Dodaj premię</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Zakmnij</button>
                            </div>
                        </div>
                        <input type="hidden" name="fk_prac" value="<?PHP echo $id; ?>"></form>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="dodajZaliczke" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="dodajZaliczke"
     aria-hidden="true">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content">
            <div class="modal-header bg-green-400 text-white"><h4 class="modal-title" id="myLargeModalLabel">Zarejestuj
                    zaliczkę</h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid bd-example-row">
                    <form id="dodajZaliczke_f" name="dodajZaliczke_f" method="post">
                        <div class="profile-box info-box general card mb-4">
                            <header class="h6 bg-primary text-auto p-4">
                                <div class="title">Rejestracja zaliczki</div>
                            </header>
                            <div class="content p-4">
                                <div class="row">
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-6"><label
                                                for="regular1" class="control-label">Kwota zaliczki</label> <input
                                                type="text" name="cf_zaliczka_kwota" id="cf_zaliczka_kwota"
                                                class="form-control"/></div>
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-6"><label
                                                for="regular1" class="control-label">Opis</label> <input type="text"
                                                                                                         name="cf_zaliczka_opis"
                                                                                                         id="cf_zaliczka_opis"
                                                                                                         class="form-control"/>
                                    </div>
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-6"><label
                                                for="regular1" class="control-label">Data</label> <input type="text"
                                                                                                       name="cf_zaliczka_data"
                                                                                                       id="cf_zaliczka_data"
                                                                                                       class="form-control"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-5 col-xs-offset-3">
                                <button type="submit" class="btn btn-primary fuse-ripple-ready">Dodaj zaliczkę</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Zakmnij</button>
                            </div>
                        </div>
                        <input type="hidden" name="fk_prac" value="<?PHP echo $id; ?>"></form>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="dodajPlatnoscDoReki" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="dodajPlatnoscDoReki"
     aria-hidden="true">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content">
            <div class="modal-header bg-green-400 text-white"><h4 class="modal-title" id="myLargeModalLabel">Zarejestuj
                    płatnść "do ręki"</h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid bd-example-row">
                    <form id="dodajPlatnoscDoReki_f" name="dodajPlatnoscDoReki_f" method="post">
                        <div class="profile-box info-box general card mb-4">
                            <header class="h6 bg-primary text-auto p-4">
                                <div class="title">Rejestracja płatności</div>
                            </header>
                            <div class="content p-4">
                                <div class="row">
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-6"><label
                                                for="regular1" class="control-label">Kwota zaliczki</label> <input
                                                type="text" name="cf_doreki_kwota" id="cf_doreki_kwota"
                                                class="form-control"/></div>


                                    <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-6 db1"
                                         style="">
                                        <label for="regular1" class="control-label">Data</label>
                                        <input type="text" name="cf_doreki_data" id="cf_doreki_data"
                                               class="form-control">
                                    </div>


                                    <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-12">
                                        <label for="regular1" class="control-label">Opis</label>
                                        <textarea
                                                id="cf_doreki_opis" name="cf_doreki_opis" style="height:100px;"
                                                class="form-control"></textarea>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-5 col-xs-offset-3">
                                <button type="submit" id="rsb" class="btn btn-primary fuse-ripple-ready">Dodaj</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Zakmnij</button>
                            </div>
                        </div>

                        <input type="hidden" name="fk_prac" value="<?PHP echo $id; ?>"></form>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="dodajPotracenie" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="dodajPlatnoscDoReki"
     aria-hidden="true">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content">
            <div class="modal-header bg-green-400 text-white"><h4 class="modal-title" id="myLargeModalLabel">Zarejestuj
                    potrącenie</h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid bd-example-row">
                    <form id="dodajPotracenie_f" name="dodajPlatnoscDoReki_f" method="post">
                        <div class="profile-box info-box general card mb-4">
                            <header class="h6 bg-primary text-auto p-4">
                                <div class="title">Rejestracja płatności</div>
                            </header>
                            <div class="content p-4">
                                <div class="row">
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-6"><label
                                                for="regular1" class="control-label">Kwota potrącenia</label> <input
                                                type="text" name="cf_potracenie_kwota" id="cf_potracenie_kwota"
                                                class="form-control"/></div>


                                    <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-6 db1"
                                         style="">
                                        <label for="regular1" class="control-label">Data</label>
                                        <input type="text" name="cf_potracenie_data" id="cf_potracenie_data"
                                               class="form-control">
                                    </div>


                                    <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-12">
                                        <label for="regular1" class="control-label">Opis</label>
                                        <textarea
                                                id="cf_potracenie_opis" name="cf_potracenie_opis" style="height:100px;"
                                                class="form-control"></textarea>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-5 col-xs-offset-3">
                                <button type="submit" id="rsb" class="btn btn-primary fuse-ripple-ready">Dodaj</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Zakmnij</button>
                            </div>
                        </div>

                        <input type="hidden" name="fk_prac" value="<?PHP echo $id; ?>"></form>
                </div>
            </div>
        </div>
    </div>
</div>
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
                        url: "<?PHP echo base_url();?>Pracownicy/Dane/<?PHP echo $id;?>",
                        data: {
                            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>',
                            customMonth: $('#month_picker').val(),
                            customYear: $('#year_picker').val()
                        },
                        success: function (data) {
                            $(targ).html(data);
                        }
                    });

                });
                if (refresh == 0) {
                    $.ajax({
                        type: "POST",
                        url: "<?PHP echo base_url();?>Pracownicy/Dane/<?PHP echo $id;?>",
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
    var csrfName2 = '<?php echo $this->security->get_csrf_token_name(); ?>',
        csrfHash2 = '<?php echo $this->security->get_csrf_hash(); ?>';
    $('a[data-toggle="tab"]').on("show.bs.tab", function (a) {
        localStorage.setItem("activeTab", $(a.target).attr("href"))
    });
    var activeTab = localStorage.getItem("activeTab");

    activeTab ? $('#myTab > li > a[href="' + activeTab + '"]').trigger("click") : $('#myTab > li > a[href="#ogolne"]').trigger("click"), $('#month_picker').val(n);
    $("#dateTomm").bootstrapMaterialDatePicker({weekStart: 0, time: !1}).on("change", function (e) {
        $("#dodajDelegacje_f").formValidation("revalidateField", "dateTomm")
    }),
        $("#dateFromm").bootstrapMaterialDatePicker({weekStart: 0, time: !1}).on("change", function (e) {
            $("#dodajDelegacje_f").formValidation("revalidateField", "dateFromm")
        });
    $("#cf_potracenie_data").bootstrapMaterialDatePicker({weekStart: 0, time: !1}).on("change", function (e) {
        $("#dodajPotracenie_f").formValidation("revalidateField", "cf_potracenie_data")
    });
    $("#cf_zaliczka_data").bootstrapMaterialDatePicker({weekStart: 0, time: !1}).on("change", function (e) {
        $("#dodajZaliczke_f").formValidation("revalidateField", "cf_zaliczka_data")
    });

    $(document).ready(function () {


        $("#cf_premia_kwota,#cf_doreki_kwota,#cf_zaliczka_kwota,#cf_potracenie_kwota").inputmask({
            alias: "currency",
            prefix: "Zł "
        });

        $("#dodajDelegacje_f").formValidation({
            framework: "bootstrap",
            icon: {
                valid: "glyphicon glyphicon-ok",
                invalid: "glyphicon glyphicon-remove",
                validating: "glyphicon glyphicon-refresh"
            },
            fields: {
                dateTomm: {validators: {notEmpty: {message: "Pole jest wymagane"}}},
                dateFromm: {validators: {notEmpty: {message: "Pole jest wymagane"}}},
                delegacjaOpis: {
                    validators: {
                        notEmpty: {message: "Pole jest wymagane"},
                        stringLength: {
                            message: "Opis nie może być dłuższy niż 250 znaków", max: function (e, a, s) {
                                return 250 - (e.match(/\r/g) || []).length
                            }
                        }
                    }
                }
            }
        }).on("success.form.fv", function (e) {
            var a = $(e.target);
            a.data("formValidation");
            e.preventDefault(), $.ajax({
                url: "<?PHP echo base_url();?>Place/Delegacje",
                method: "POST",
                data: a.serialize() + "&" + csrfName2 + "=" + csrfHash2,
                success: function (e) {
                    $(this).closest("form").find("input[type=text]").val(""), csrfName2 = e.regen.csrfName, csrfHash2 = e.regen.csrfHash, e.response.status && ($(this).closest("form").find("input[type=text]").val(""), $("#dodajDelegacje_f").data("formValidation").resetForm(), $("#dodajDelegacje_f").trigger("reset"), location.reload()), swal("Komunikat!", e.response.message, "info")
                }
            })
        });
        $("#dodajPremie_f").formValidation({
            framework: "bootstrap",
            icon: {
                valid: "glyphicon glyphicon-ok",
                invalid: "glyphicon glyphicon-remove",
                validating: "glyphicon glyphicon-refresh"
            },
            fields: {
                cf_premia_opis: {validators: {notEmpty: {message: "Pole jest wymagane"}}},
                cf_premia_kwota: {validators: {notEmpty: {message: "Pole jest wymagane"}}}
            }
        }).on("success.form.fv", function (e) {
            var a = $(e.target);
            a.data("formValidation");
            e.preventDefault(), $.ajax({
                url: "<?PHP echo base_url();?>Place/Premie/<?PHP echo $id; ?>",
                method: "POST",
                data: a.serialize() + "&" + csrfName2 + "=" + csrfHash2,
                success: function (e) {
                    $(this).closest("form").find("input[type=text]").val(""), csrfName2 = e.regen.csrfName, csrfHash2 = e.regen.csrfHash, e.response.status && ($(this).closest("form").find("input[type=text]").val(""), $("#dodajDelegacje_f").data("formValidation").resetForm(), $("#dodajDelegacje_f").trigger("reset"), location.reload()), swal("Komunikat!", e.response.message, "info")
                }
            })
        });
        $("#dodajZaliczke_f").formValidation({
            framework: "bootstrap",
            icon: {
                valid: "glyphicon glyphicon-ok",
                invalid: "glyphicon glyphicon-remove",
                validating: "glyphicon glyphicon-refresh"
            },
            fields: {
                cf_zaliczka_opis: {validators: {notEmpty: {message: "Pole jest wymagane"}}},
                cf_zaliczka_kwota: {validators: {notEmpty: {message: "Pole jest wymagane"}}},
                cf_zaliczka_data: {validators: {notEmpty: {message: "Pole jest wymagane"}}},
            }
        }).on("success.form.fv", function (a) {
            var e = $(a.target);
            e.data("formValidation");
            a.preventDefault(), $.ajax({
                url: "<?PHP echo base_url();?>Pracownicy/DodajZaliczke/<?PHP echo $id; ?>",
                method: "POST",
                data: e.serialize() + "&" + csrfName2 + "=" + csrfHash2,
                success: function (a) {
                    $(this).closest("form").find("input[type=text]").val(""), csrfName2 = a.regen.csrfName, csrfHash2 = a.regen.csrfHash, a.response.status && "Dodano" === a.response.message && setTimeout(function () {
                        location.reload()
                    }, 2e3), swal("Komunikat!", a.response.message, "info")
                }
            })
        });
        $("#dodajPlatnoscDoReki_f").formValidation({
            framework: "bootstrap",
            icon: {
                valid: "glyphicon glyphicon-ok",
                invalid: "glyphicon glyphicon-remove",
                validating: "glyphicon glyphicon-refresh"
            },
            fields: {
                cf_doreki_opis: {
                    validators: {
                        notEmpty: {
                            message: "Pole jest wymagane"
                        }
                    }
                },
                cf_doreki_data: {
                    validators: {
                        notEmpty: {
                            message: "Pole jest wymagane"
                        }
                    }
                },
                cf_doreki_kwota: {
                    validators: {
                        notEmpty: {
                            message: "Pole jest wymagane"
                        }
                    }
                }
            }
        }).on("success.form.fv", function (e) {
            var o = $(e.target);
            o.data("formValidation");
            e.preventDefault(), $.ajax({
                url: "<?PHP echo base_url();?>Pracownicy/DoReki/<?PHP echo $id; ?>",
                method: "POST",
                data: o.serialize() + "&" + csrfName2 + "=" + csrfHash2,
                success: function (a) {
                    $(this).closest("form").find("input[type=text]").val(""), csrfName2 = a.regen.csrfName, csrfHash2 = a.regen.csrfHash, a.response.status && "Dodano" === a.response.message && setTimeout(function () {
                        location.reload()
                    }, 2e3), swal("Komunikat!", a.response.message, "info")
                }
            })
        });

        $("#dodajPotracenie_f").formValidation({
            framework: "bootstrap",
            icon: {
                valid: "glyphicon glyphicon-ok",
                invalid: "glyphicon glyphicon-remove",
                validating: "glyphicon glyphicon-refresh"
            },
            fields: {
                cf_potracenie_opis: {
                    validators: {
                        notEmpty: {
                            message: "Pole jest wymagane"
                        }
                    }
                },
                cf_potracenie_data: {
                    validators: {
                        notEmpty: {
                            message: "Pole jest wymagane"
                        }
                    }
                },
                cf_potracenie_kwota: {
                    validators: {
                        notEmpty: {
                            message: "Pole jest wymagane"
                        }
                    }
                }
            }
        }).on("success.form.fv", function (e) {
            var o = $(e.target);
            o.data("formValidation");
            e.preventDefault(), $.ajax({
                url: "<?PHP echo base_url();?>Pracownicy/Potracenie/<?PHP echo $id; ?>",
                method: "POST",
                data: o.serialize() + "&" + csrfName2 + "=" + csrfHash2,
                success: function (a) {
                    $(this).closest("form").find("input[type=text]").val(""), csrfName2 = a.regen.csrfName, csrfHash2 = a.regen.csrfHash, a.response.status && "Dodano" === a.response.message && setTimeout(function () {
                        location.reload()
                    }, 2e3), swal("Komunikat!", a.response.message, "info")
                }
            })
        });
        $('#cf_doreki_data').bootstrapMaterialDatePicker({weekStart: 0, time: false}).on('change', function (e) {
            $('#dodajPlatnoscDoReki_f').formValidation('revalidateField', 'cf_doreki_data');
        });

    });


</script>