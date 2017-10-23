<div class="doc page-layout simple full-width">

    <!-- HEADER -->
    <div class="page-header bg-primary text-auto p-6"><h2 class="doc-title" id="content">Edycja kontraktu</h2>
    </div>
    <!-- / HEADER -->

    <div class="page-content row p-12">

        <!-- STANDARD ALERTS -->
        <div class="col-12 col-md-12">

            <div class="profile-box info-box contact card mb-4">

                <header class="h6 bg-primary text-auto p-4">
                    <div class="title">Edycja kontraktu</div>
                </header>

                <div class="content p-4">
                    <?php echo form_open('kontrakt/edit/' . $kontrakty['id_kontraktu'], array("class" => "form-horizontal")); ?>
                    <div class="row">
                        <div class="col-lg-12"> 
                            <div class="form-group row">
                                <label for="inputDatasprze" class="col-sm-5 col-form-label">Status kontraktu</label>
                                <div class="col-sm-7">
                                    <div class="form-check form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="zakonczony" value="0" data-fv-field="inputMetoda" <?php echo ($kontrakty['zakonczony'] == 0) ? "checked=checked" : null; ?>>
                                            <span class="radio-icon fuse-ripple-ready"></span>
                                            <span class="form-check-description">W trakcie</span>
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="zakonczony" id="inlineRadio3" value="1" <?php echo ($kontrakty['zakonczony'] == 1) ? "checked=checked" : null; ?>>
                                            <span class="radio-icon fuse-ripple-ready"></span>
                                            <span class="form-check-description">Zakończony</span>
                                        </label>
                                    </div>


                                </div>
                            </div>
                        </div>
                 
                        <div class="col-lg-12"> 
                            <div class="form-group row">
                                <label for="inputDatasprze" class="col-sm-5 col-form-label">Nazwa</label>
                                <div class="col-sm-7">

                                    <textarea name="nazwa" class="form-control" id="nazwa"><?php echo ($this->input->post('nazwa') ? $this->input->post('nazwa') : $kontrakty['knazwa']); ?></textarea>            
                                    <span class="text-danger"><?php echo form_error('nazwa'); ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12"> 

                            <div class="form-group row">
                                <label for="inputKontrakt" class="col-sm-5 col-form-label">Kontrakt</label>
                                <div class="col-sm-7">
                                    <select id="inputKontrahentf" name="inputKontrahent" class="select-with-search pmd-select2 form-control">
                                        <option value="<?PHP echo $kontrakty['id_kontrahenta']; ?>" selected><?PHP echo $kontrakty['kontrahent']; ?></option>
                                    </select>
                                     <span class="text-danger"><?php echo form_error('inputKontrahent'); ?></span>
                                </div>
                            </div>

                        </div>



                        <div class="form-group col-md-2">
                            <button type="submit" class="btn btn-success">Zapisz</button>
                        </div>
                    </div>


                    <?php echo form_close(); ?>
                    <link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>assets/js/select2/css/select2.min.css" />
                    <link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>assets/js/select2/css/select2-bootstrap.css" />
                    <link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>assets/js/select2/css/pmd-select2.css" />

                    <script type="text/javascript" src="<?PHP echo base_url(); ?>assets/js/select2/js/select2.full.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/i18n/pl.js"></script>
                    <script type="text/javascript" src="<?PHP echo base_url(); ?>assets/js/select2/js/pmd-select2.js"></script>
                    <script>
                        $(document).ready(function () {
                            $("#inputKontrahentf").select2({
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
                        });
                    </script>