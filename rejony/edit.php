<div class="doc page-layout simple full-width">

    <!-- HEADER -->
    <div class="page-header bg-primary text-auto p-6"><h2 class="doc-title" id="content">Edycja rejonu</h2>
    </div>
    <!-- / HEADER -->

    <div class="page-content row p-12">

        <!-- STANDARD ALERTS -->
        <div class="col-12 col-md-12">

            <div class="profile-box info-box contact card mb-4">

                <header class="h6 bg-primary text-auto p-4">
                    <div class="title">Edycja rejonu</div>
                </header>

                <div class="content p-4">
                    <?php echo form_open('rejon/edit/' . $rejony['id_rejonu'], array("class" => "form-horizontal")); ?>
                    <div class="row">
                        <div class="form-group col-md-10">
                            <label for="nazwa" class="control-label"><span class="text-danger">*</span>Nazwa</label>
                            <textarea name="nazwa" class="form-control" id="nazwa"><?php echo ($this->input->post('nazwa') ? $this->input->post('nazwa') : $rejony['nazwa']); ?></textarea>
                            <span class="text-danger"><?php echo form_error('nazwa'); ?></span>
                        </div>

                        <div class="form-group col-md-2">
                            <button type="submit" class="btn btn-success">Zapisz</button>
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                </div></div></div></div></div>