<div class="container-fluid bd-example-row">
    <form id="skan-attach" name="skan-attach" method="post" enctype="multipart/form-data" accept-charset="utf-8">
        <div class="content p-4">
            <div class="form-group row">
                <label for="inputDokument" class="col-sm-4 col-form-label"><?PHP echo $_POST['title'];?></label>
                <div class="col-sm-8">
                    <input type="file" class="form-control" name="inputSkan" id="inputSkan">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputDokument" class="col-sm-4 col-form-label">Rodzaj</label>
                <div class="col-sm-8">
                    <select name="ftype" class="form-control">
                        <option value="1">Ubezpieczenie OC</option>
                        <option value="2">Ubezpieczenie AC</option>
                        <option value="3">Przegląd</option>
                    </select>

                </div>

            </div>
            <div class="form-group row">
                <label for="inputDatawystaw" class="col-sm-5 col-form-label">Ważność dokumentu</label>
                <div class="col-sm-7">
                    <input type="text" name="inputData" id="inputDataf" class="form-control"/>
                </div>

            </div>

            <div class="form-group">
                <div class="col-xs-5 col-xs-offset-3">
                    <button type="submit" class="btn btn-primary fuse-ripple-ready"><?PHP echo $_POST['button'];?></button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cofnij</button>
                </div>
            </div>
        </div>


    </form>

</div>

<style>
    .help-block{
        color: red;
        font-weight: bold;
    }
    .has-error{
        color: red;
    }

</style>
<script>
    $(document).ready(function () {

            var $form = $('#skan-attach')
            fv = $form.data('formValidation');
            $('#attach-skan').on('hidden.bs.modal', function () {
                $(this).removeData('modal');
            });

        $('#inputDataf').bootstrapMaterialDatePicker({weekStart: 0, time: false}).on('change', function (e) {
            $('#skan-attach').formValidation('revalidateField', 'inputData');
        });

            var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
                csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';

            $('#skan-attach').formValidation({
                framework: 'bootstrap',
                fields: {
                    inputData: {
                        validators: {
                            notEmpty: {
                                message: 'Wymagane'
                            }
                        }
                    }, 
                    inputSkan: {
                        validators: {
                            notEmpty: {
                                message: 'Wymagane'
                            }
                        }
                    },
                    ftype: {
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
                        url: '<?PHP echo base_url(); ?>Pojazdy/zs/<?PHP echo $id;?>',
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
                                    $('#skan-attach').data('formValidation').resetForm();
                                    $('#skan-attach').trigger("reset");

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
