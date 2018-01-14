<div class="doc page-layout simple full-width">

    <!-- HEADER -->
    <div class="page-header bg-primary text-auto p-6"><h2 class="doc-title" id="content">Kategorie wydatku</h2>
    </div>
    <!-- / HEADER -->

    <div class="page-content row p-12">

        <!-- STANDARD ALERTS -->
        <div class="col-12 col-md-12">

            <div class="profile-box info-box contact card mb-4">

                <header class="h6 bg-primary text-auto p-4">
                    <div class="title">Edycja kategorii wydatku</div>
                </header>

                <div class="content p-4">
                    <?php echo form_open('wydatki_kategorie/edit/' . $wydatki_kategorie['id_kat'], array("class" => "form-horizontal")); ?>
                    <div class="row">
                        <div class="form-group col-md-10">
                            <label for="nazwa" class=" control-label"><span class="text-danger">*</span>Nazwa kategorii</label>
                            <input type="text" name="nazwa" value="<?php echo ($this->input->post('nazwa') ? $this->input->post('nazwa') : $wydatki_kategorie['nazwa']); ?>" class="form-control" id="nazwa" />
                            <span class="text-danger"><?php echo form_error('nazwa'); ?></span>
                        </div>
                        <div class="form-check form-check-inline has-success">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="pojazd" id="pojazd" <?php echo ($wydatki_kategorie['do_pojazdu'] ?'checked' : $wydatki_kategorie['do_pojazdu']); ?>>
                                <span class="checkbox-icon fuse-ripple-ready"></span>
                                <span>Dotyczy pojazdu</span>
                            </label>

                            <button type="submit" class="btn btn-success">Zapisz zmiany</button>

                        </div>

                        <?php echo form_close(); ?>
                    </div> </div> </div> </div> </div>