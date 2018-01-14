<div class="container-fluid bd-example-row">
    <form id="f_fv-attach" name="f_fv-attach" method="post" enctype="multipart/form-data" accept-charset="utf-8">
        <div class="content p-4">
            <div class="form-group row">
                <label for="inputDokument" class="col-sm-4 col-form-label">Skan dokumentu</label>
                <div class="col-sm-8">
                    <input type="file" class="form-control" name="inputSkan" id="inputSkan">
                </div>
                <input type="hidden" name="fk_wydatku" value="<?PHP echo $id; ?>">
            </div>

            <div class="form-group">
                <div class="col-xs-5 col-xs-offset-3">
                    <button type="submit" class="btn btn-primary fuse-ripple-ready">Dodaj fakturę</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cofnij</button>
                </div>
            </div>
        </div>


    </form>

</div>

<style>
    .help-block {
        color: red;
        font-weight: bold;
    }

    .has-error {
        color: red;
    }

</style>
<script src="<?PHP echo base_url(); ?>assets/js/formValidation.min.js"></script>
<script src="<?PHP echo base_url(); ?>assets/js/fv.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js"
        type="text/javascript"></script>
<script>
    $(document).ready(function () {

            var $form = $('#f_fv-attach')
            fv = $form.data('formValidation');


            var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
                csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';

            $('#f_fv-attach').formValidation({
                framework: 'bootstrap',
                fields: {
                    inputSkan: {
                        validators: {
                            notEmpty: {
                                message: 'Wymagane'
                            }
                        }
                    },
                }
            }).on('success.form.fv', function (e) {
                    var $form = $(e.target),
                        fv = $form.data('formValidation');
                    var formData = new FormData(this);
                    formData.append(csrfName, csrfHash);
                    e.preventDefault();

                    $.ajax({
                        url: '<?PHP echo base_url(); ?>Wydatki/zalacz_fv',
                        type: "POST",
                        data: formData,
                        mimeType: "multipart/form-data",
                        contentType: false,
                        dataType: 'json',
                        cache: false,
                        processData: false,
                        success: function (data) {
                            csrfName = data.regen.csrfName;
                            csrfHash = data.regen.csrfHash;
                            if (data.response.status) {
                                if (data.response.message === "Dodano") {
                                    $(this).closest('form').find("input[type=text]").val("");
                                    $('#f_fv-attach').data('formValidation').resetForm();
                                    $('#f_fv-attach').trigger("reset");
                                    location.reload();
                                }

                            }
                            do_notif(data.response.message);
                        }
                    });
                }
            ).on('err.field.fv', function (e, data) {
                if (data.fv.getSubmitButton()) {
                    data.fv.disableSubmitButtons(false);
                }
            }).on('success.field.fv', function (e, data) {
                if (data.fv.getSubmitButton()) {
                    data.fv.disableSubmitButtons(false);
                }
            });
        }
    );

    function do_notif(text) {
        new PNotify({
            text: text,
            confirm: {
                confirm: true,
                buttons: [
                    {
                        text: 'Zakmnij',
                        addClass: 'btn btn-link',
                        click: function (notice) {
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
</script>
