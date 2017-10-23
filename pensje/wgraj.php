<script src="<?PHP echo base_url(); ?>assets/js/formValidation.min.js"></script>
<script src="<?PHP echo base_url(); ?>assets/js/fv.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js" type="text/javascript"></script>



<div class="doc page-layout simple full-width">

    <!-- HEADER -->
    <div class="page-header bg-primary text-auto p-6"><h2 class="doc-title" id="content">Importowanie płac</h2>
    </div>
    <!-- / HEADER -->

    <div class="page-content row p-12">

        <!-- STANDARD ALERTS -->
        <div class="col-12 col-md-12">

            <form id="nowyPojazd" name="nowyPojazd" method="post" enctype="multipart/form-data" accept-charset="utf-8">

                <div class="profile-box info-box general card mb-4">

                    <header class="h6 bg-primary text-auto p-4">
                        <div class="title">Importowanie listy z płacami</div>
                    </header>

                    <div class="content p-4">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                    <label for="inputSkan" class="col-form-label">Importuj plik z płacami XLSX</label>
                                    <input type="file" class="form-control" name="inputSkan" id="inputSkan">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-5 col-xs-offset-3">
                                <button type="submit" class="btn btn-primary fuse-ripple-ready">Importuj</button>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>

<!-- / CONTACT LIST HEADER -->


<script>
    $(document).ready(function () {

        var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
                csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';


        $('#nowyPojazd').formValidation({
            framework: 'bootstrap',
            icon: {

            },
            fields: {
                inputSkan: {
                    validators: {
                        notEmpty: {
                            message: 'Proszę wybrać plik'
                        },
                        file: {
                            extension: 'xlsx',
                            type: 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                            maxSize: 5000000, // 5MB
                            message: 'Akceptowane są jedynie pliki XLSX'
                        }
                    }
                }
            }
        }).on('success.form.fv', function (e) {


            var $form = $(e.target),
                    fv = $form.data('formValidation');
            var formData = new FormData(this);
            formData.append(csrfName, csrfHash);

            e.preventDefault();
            $.ajax({
                url: '<?PHP echo base_url(); ?>Place/Importuj',
                type: "POST",
                data: formData,
                mimeType: "multipart/form-data",
                contentType: false,
                dataType: 'json',
                cache: false,
                processData: false,

                success: function (data) {
                    $(this).closest('form').find("input[type=text]").val("");
                    csrfName = data.regen.csrfName;
                    csrfHash = data.regen.csrfHash;
                    if (data.response.status)
                    {
                        $('#nowyPojazd').data('formValidation').resetForm();
                        $('#nowyPojazd').trigger("reset");
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
        }).on('err.field.fv', function (e, data) {
            if (data.fv.getSubmitButton()) {
                data.fv.disableSubmitButtons(false);
            }
        }).on('success.field.fv', function (e, data) {
            if (data.fv.getSubmitButton()) {
                data.fv.disableSubmitButtons(false);
            }
        });
    });


</script>
