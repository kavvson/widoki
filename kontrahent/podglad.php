<div class="content">
    <div id="profile" class="page-layout simple tabbed">

        <!-- HEADER -->
        <div class="light-fg d-flex flex-column justify-content-center justify-content-lg-end p-6 pt-3" style="background-color: #4fc3f7 !important;">
            <div
                class="flex-column row flex-lg-row align-items-center align-items-lg-end no-gutters justify-content-between">
                <div class="user-info flex-column row flex-lg-row no-gutters align-items-center">


                    <div class="name h2 my-6"><?PHP echo $kontrahent->nazwa; ?></div>

                </div>
                <div class="actions row align-items-center no-gutters">
                    <button type="button"  data-toggle="modal" id="o_m_kontrahent" data-target="#modyfikacja_kontrahenta" href="#" class="btn btn-secondary"><i class="icon-settings"></i> Modyfikacja</button>
                </div>

            </div>
        </div>
        <!-- / HEADER -->

        <!-- CONTENT -->
        <div class="page-content">
            <?PHP
            //id_kontrahenta
            //fkaddress
            //adr_Kor
            ?>
            <ul class="nav nav-tabs" id="myTab" role="tablist">



                <li class="nav-item">
                    <a class="nav-link btn active" id="about-tab" data-toggle="tab" href="#about-tab-pane"
                       role="tab"
                       aria-controls="about-tab-pane">Ogólne</a>
                </li>
            </ul>

            <div class="tab-content">



                <div class="tab-pane fade show active" id="about-tab-pane" role="tabpanel"
                     aria-labelledby="about-tab">

                    <div class="row">

                        <div class="about col-12 col-md-7 col-xl-9">

                            <div class="profile-box info-box general card mb-4">

                                <header class="h6 bg-primary text-auto p-4">
                                    <div class="title">Podstawowe informacje</div>
                                </header>

                                <div class="content p-4">
                                    <div class="form-group row">
                                        <label for="inputDokument" class="col-sm-4 col-form-label">Pełna nazwa</label>
                                        <div class="col-sm-8">
                                            <?PHP echo $kontrahent->nazwa; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputDokument" class="col-sm-4 col-form-label">Skrócona nazwa</label>
                                        <div class="col-sm-8">
                                            <?PHP echo $kontrahent->nazwa_short; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputDokument" class="col-sm-4 col-form-label">Charakter prawny</label>
                                        <div class="col-sm-8">
                                            <?PHP
                                            switch ($kontrahent->char_prawny) {
                                                case 0:echo "Nie ustalono";
                                                    break;
                                                case 1: echo "Osoba fizyczna";
                                                    break;
                                                case 2:echo "Spółka";
                                                    break;
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputDokument" class="col-sm-4 col-form-label">NIP</label>
                                        <div class="col-sm-8">
                                            <?PHP echo $kontrahent->nip; ?>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group row">
                                                <label for="inputDokument" class="col-sm-4 col-form-label">KRS</label>
                                                <div class="col-sm-8">
                                                    <?PHP echo $kontrahent->krs; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group row">
                                                <label for="inputDokument" class="col-sm-4 col-form-label">Regon</label>
                                                <div class="col-sm-8">
                                                   <?PHP echo $kontrahent->regon; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="profile-box info-box work card mb-4">

                                <header class="h6 bg-primary text-auto p-4">
                                    <div class="title">Dodatkowe informacje</div>
                                </header>

                                <div class="content p-4">

                                    <div class="form-group row">
                                        <label for="inputDokument" class="col-sm-4 col-form-label">Specjalizacja</label>
                                        <div class="col-sm-8">
                                            <?PHP echo (empty($kontrahent->spec)) ? "Nie określono" : $kontrahent->spec; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputDokument" class="col-sm-4 col-form-label">Numer konta</label>
                                        <div class="col-sm-8">
                                            <?PHP echo (empty($kontrahent->konto)) ? "Nie podano" : $kontrahent->konto; ?>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <?PHP if ($kontrahent->fkaddress) { ?>
                                <div class="profile-box info-box contact card mb-4">

                                    <header class="h6 bg-primary text-auto p-4">
                                        <div class="title">Kontakt</div>
                                    </header>

                                    <div class="content p-4">
                                        <div class="form-group row">
                                            <label for="inputDokument" class="col-sm-4 col-form-label">Adres</label>
                                            <div class="col-sm-8">
                                                <?PHP echo $kontrahent->ulica; ?>, <?PHP echo $kontrahent->kod_pocztowy; ?> <?PHP echo $kontrahent->miasto; ?>
                                            </div>
                                        </div>
                                        <?PHP if ($kontrahent->kor_id_adres) { ?>
                                            <div class="form-group row">
                                                <label for="inputDokument" class="col-sm-4 col-form-label">Adres do korespondencji</label>
                                                <div class="col-sm-8">
                                                    <?PHP echo $kontrahent->kor_ul; ?>, <?PHP echo $kontrahent->kor_zip; ?> <?PHP echo $kontrahent->kor_miasto; ?>
                                                </div>
                                            </div>
                                        <?PHP } ?>



                                    </div>
                                </div>
                            <?PHP } ?>




                        </div>

                        <div class="about-sidebar col-12 col-md-5 col-xl-3">

                            <div class="profile-box friends card mb-4">

                                <header
                                    class="row no-gutters align-items-center justify-content-between bg-primary text-auto p-4">
                                    <div class="title h6">Czynności</div>

                                </header>

                                <div class="content row no-gutters p-4">
                                    <a href="<?PHP echo base_url();?>Przychody/Monit/<?PHP echo $kontrahent->id_kontrahenta;?>">Generuj monit</a>
                                </div>

                            </div>

                            <div class="profile-box friends card mb-4">

                                <header
                                    class="row no-gutters align-items-center justify-content-between bg-primary text-auto p-4">
                                    <div class="title h6">Ostatnie należności</div>

                                </header>

                                <div class="content row no-gutters p-4">
                                    {Robocze}
                                </div>

                            </div>

                            <div class="profile-box groups card mb-4">

                                <header
                                    class="row no-gutters align-items-center justify-content-between bg-primary text-auto p-4">
                                    <div class="title h6">Ostatnie wydatki</div>

                                </header>

                                <div class="content p-4">
                                    {Robocze}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
        <!-- / CONTENT -->
    </div>
</div>
<div id="modyfikacja_kontrahenta" class="modal fade" role="dialog"
     aria-labelledby="modyfikacja_kontrahenta"
     aria-hidden="true">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content">

            <div class="modal-header bg-green-400 text-white">
                <h4 class="modal-title" id="myLargeModalLabel"><?PHP echo $kontrahent->nazwa; ?></h4>

            </div>
            <div class="modal-body">
                <div class="loader"></div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script src="<?PHP echo base_url(); ?>assets/js/formValidation.min.js"></script>
<script src="<?PHP echo base_url(); ?>assets/js/fv.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.2.6/jquery.inputmask.bundle.min.js"></script>
<script>
    $('#o_m_kontrahent').on('click', function (e) {
        var target_modal = $(e.currentTarget).data('target');

        var modal = $(target_modal);

        var modalBody = $(target_modal + ' .modal-body');

        modal.on('show.bs.modal', function () {
            setTimeout(
                    function ()
                    {

                        modalBody.load("<?PHP echo base_url() . "Kontrahent/kontrahent_edytuj_modal/" . $kontrahent->id_kontrahenta; ?>");

                    }, 1000);

        }).modal();
        // and show the modal

        // Now return a false (negating the link action) to prevent Bootstrap's JS 3.1.1
        // from throwing a 'preventDefault' error due to us overriding the anchor usage.
        return false;
    });

</script>