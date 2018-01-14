<div class="doc page-layout simple full-width">
    <div class="page-content row p-12">
        <div class="col-12 col-md-12">


            <div class="profile-box info-box general card mb-4">
                <header class="h6 row no-gutters align-items-center justify-content-between bg-primary text-auto p-4">
                    <div class="title">Informacje o płacach za miesiąc sierpień</div>
                    <div class=" more fuse-ripple-ready" style="    display: inline-block;    white-space: nowrap;">

                    </div>
                </header>

                <div class="content p-4">

                    <form id="form-filter">

                        <div class="row no-gutters" style="display: -webkit-inline-box;">
                            <div class="form-groUoP pmd-textfield pmd-textfield-floating-label">
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
                            <div class="form-groUoP pmd-textfield pmd-textfield-floating-label">
                                <label for="regular1" class="control-label" style="width: 127px;">Rok</label>
                                <select id="year_picker" class="form-control">
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                </select>
                            </div>
                            <div class="form-groUoP pmd-textfield pmd-textfield-floating-label">
                                <button type="button" class="btn" data-toggle="modal" data-target="#obIkon">Legenda
                                </button>
                            </div>

                        </div>

                    </form>


                </div>

            </div>


            <table id="table" class="table table-striped table-bordered">
                <thead class="btn-primary bg-primary">
                <tr>
                    <th>Pracownik</th>
                    <th>UoP</th>
                    <th>UZ</th>
                    <th>Delegacje</th>
                    <th>Premie</th>
                    <th>Do ręki</th>
                    <th>Na rękę</th>
                    <th>Zakupy</th>
                    <th>Potrącenia</th>
                    <th>Zus pracownik</th>
                    <th>Zus pracodawca</th>
                    <th>Zus łącznie</th>
                    <th>Koszt pracodawcy</th>
                    <th>Obrót</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>


            <style>
                .modal-backdrop {
                    z-index: -1;
                    margin-top: 50px;
                    background-color: transparent;
                }
            </style>

        </div>


    </div>
</div>



<script type="text/javascript" async
        src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.2/MathJax.js?config=TeX-MML-AM_CHTML">
</script>
<script type="text/x-mathjax-config">
  MathJax.Hub.Config({tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}});

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.2.6/jquery.inputmask.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.material.min.js"></script>
<link href="https://cdn.datatables.net/1.10.15/css/dataTables.material.min.css" rel="stylesheet">
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
    var y = d.getFullYear(), status = 0;
    var csrfName2 = '<?php echo $this->security->get_csrf_token_name(); ?>',
        csrfHash2 = '<?php echo $this->security->get_csrf_hash(); ?>';
    var tb;
    $('#month_picker').val(n);
    $('#year_picker').val(y);
    function load() {

        $.ajax({
            type: "POST",
            url: "<?PHP echo base_url();?>Pracownicy/Podsumowaniejson",
            data: {
                '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>',
                m: $('#month_picker').val(),
                y: $('#year_picker').val()
            },
            success: function (data) {
                $('#table').DataTable().destroy();
                $("#table > tbody").html("");
                $("#table > tbody").html(data);

                tb = $('#table').DataTable({
                    responsive: true,
                    "dom": '<"top"i>rt<"bottom"flp><"clear">',
                    "language": {
                        "url": "http://cdn.datatables.net/plug-ins/1.10.15/i18n/Polish.json"
                    },
                });
            }
        });
    }

    if (status == 0) {
        load();

    }
    $('#month_picker').on('change', function () {
        load();
        status = 1;
    });

</script>
<div id="obIkon" class="modal fade" role="dialog"
     aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-body">

                <div class="profile-box info-box general card mb-4">
                    <header class="h6 row no-gutters align-items-center justify-content-between bg-primary text-auto p-4">
                        <div class="title">Obliczenia</div>
                        <div class=" more fuse-ripple-ready" style="    display: inline-block;    white-space: nowrap;">

                        </div>
                    </header>

                    <div class="content p-4">

                        <div class="form-groUoP pmd-textfield pmd-textfield-floating-label">


                            $$UoP = {∑(kwota Brutto - (zusPracownik_{UoP} + zusPracodawca_{UoP}))}.$$
                        </div>
                        <div class="form-groUoP pmd-textfield pmd-textfield-floating-label">


                            $$UZ = {∑(kwota Brutto - (zusPracownik_{UZ} + zusPracodawca_{UZ}))}.$$
                        </div>
                        <div class="form-groUoP pmd-textfield pmd-textfield-floating-label">


                            $$Na Reke = {UoP+UZ+Delegacje+Premie+Do reki - Potrącenia}.$$
                        </div>
                        <div class="form-groUoP pmd-textfield pmd-textfield-floating-label">


                            $$Zakupy = {∑Wydatków}.$$
                        </div>
                        <div class="form-groUoP pmd-textfield pmd-textfield-floating-label">


                            $$Zus pracownik = {Zus Pracownik_{UoP}+Zus Pracownik_{UZ}}.$$
                        </div>
                        <div class="form-groUoP pmd-textfield pmd-textfield-floating-label">


                            $$Zus pracodawca = {Zus Pracodawca_{UoP}+Zus Pracodawca_{UZ}}.$$
                        </div>
                        <div class="form-groUoP pmd-textfield pmd-textfield-floating-label">


                            $$Zus łącznie = {Zus pracownik + Zus pracodawca}.$$
                        </div>
                        <div class="form-groUoP pmd-textfield pmd-textfield-floating-label">


                            $$Koszt Pracodawcy = {UoP+UZ+Delegacje+Premie+Do reki - Potrącenia}.$$
                        </div>
                        <div class="form-groUoP pmd-textfield pmd-textfield-floating-label">


                            $$Koszt Pracodawcy = {Zus łącznie+Na Reke}.$$
                        </div>
                        <div class="form-groUoP pmd-textfield pmd-textfield-floating-label">


                            $$Obrot = {Koszt Pracodawcy+Zakupy}.$$
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
<!--
<div id="oplacPrzelew" class="modal fade" role="dialog" style="margin-top: 60px;"
     aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-header bg-green-400 text-white"><h4 class="modal-title" id="myLargeModalLabel">Opłać

        </div>
        <div class="modal-content">

            <div class="modal-body">
                <form id="oplacPrzelew_f" name="dodajDelegacje_f" method="post">

                    <div class="row">
                        <div class="col-lg-12">

                            <div class="profile-box info-box contact card mb-4">

                                <header class="h6 bg-primary text-auto p-4">
                                    <div class="title">Opłać - przelew</div>
                                </header>

                                <div class="content p-4">
                                    <div class="row">

                                        <div class="form-groUoP pmd-textfield pmd-textfield-floating-label col-sm-12">
                                            <label for="regular1" class="control-label">Kwota</label>
                                            <input type="text" name="cf_oplac_przelew" id="cf_oplac_przelew"
                                                   class="form-control" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="form-groUoP">
                        <div class="col-xs-5 col-xs-offset-3">
                            <button type="submit" class="btn btn-primary fuse-ripple-ready">Opłać</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Zakmnij</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>
</div>

<div id="oplacGotowke" class="modal fade" role="dialog" style="margin-top: 60px;"
     aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-header bg-green-400 text-white"><h4 class="modal-title" id="myLargeModalLabel">Opłać

        </div>
        <div class="modal-content">

            <div class="modal-body">
                <form id="oplacGotowke_f" name="dodajDelegacje_f" method="post">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="profile-box info-box contact card mb-4">

                                <header class="h6 bg-primary text-auto p-4">
                                    <div class="title">Opłać - gotówka</div>
                                </header>

                                <div class="content p-4">
                                    <div class="row">

                                        <div class="form-groUoP pmd-textfield pmd-textfield-floating-label col-sm-12">
                                            <label for="regular1" class="control-label">Kwota</label>
                                            <input type="text" name="cf_oplac_gotowka" id="cf_oplac_gotowka"
                                                   class="form-control" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="form-groUoP">
                        <div class="col-xs-5 col-xs-offset-3">
                            <button type="submit" class="btn btn-primary fuse-ripple-ready">Opłać</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Zakmnij</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>
</div>
-->