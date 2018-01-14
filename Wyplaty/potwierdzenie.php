<div class="doc page-layout simple full-width">
    <div class="page-content row p-12">

        <form id="oplacWyplate" name="oplacWyplate" method="post" style=" width: 100%;">
            <!-- STANDARD ALERTS -->
            <div class="col-12 col-md-12">
                <div class="profile-box info-box general card mb-4">
                    <header class="h6 row no-gutters align-items-center justify-content-between bg-primary text-auto p-4">


                        <div class="title">Opłacanie wynagrodzenia</div>
                        <div class="row no-gutters" style="display: -webkit-inline-box;">
                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                <label for="regular1" class="control-label" style="width: 127px;">Miesiąc</label>
                                <select id="month_picker" name="mm" class="form-control">
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
                                <select id="year_picker" name="yy" class="form-control">
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                </select>
                            </div>
                        </div>

                    </header>
                    <div class="content p-4">


                        <div class="content p-1 page-content ajaxGet"></div>
        </form>


    </div>

</div>

</div>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.2.6/jquery.inputmask.bundle.min.js"></script>


<script src="<?PHP echo base_url(); ?>assets/js/formValidation.min.js"></script>
<script src="<?PHP echo base_url(); ?>assets/js/fv.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js"
        type="text/javascript"></script>

<script src="<?PHP echo base_url(); ?>assets/sweetalert2.min.js"></script>
<link rel="stylesheet" href="<?PHP echo base_url(); ?>assets/sweetalert2.min.css">
<link rel="stylesheet" type="text/css"
      href="<?PHP echo base_url(); ?>assets/vendor/datetimepicker/css/bootstrap-material-datetimepicker.css"/>

<script type="text/javascript" language="javascript"
        src="<?PHP echo base_url(); ?>assets/vendor/datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

<script>

    $(document).ready(function () {
        var add_p = 0;
        var d = new Date();
        var n = d.getMonth() + 1;
        var y = d.getFullYear();


        $('#month_picker').val(n);
        $('#year_picker').val(y);



        if( $('.ajaxGet').is(':empty') ) {
            $(".ajaxGet").html("");
            $(".ajaxGet").addClass("loader");
            $.ajax({
                url: '<?PHP echo base_url(); ?>Wyplaty/WyplatyAjax/'+$('#month_picker').val()+'/'+ $('#year_picker').val(),
                method: 'GET',
                success: function (data) { $(".ajaxGet").html(data); $(".ajaxGet").removeClass("loader");}
            });
        };

        var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';

        $('select').on('change', function (e) {
            $(".ajaxGet").html("");
            $(".ajaxGet").addClass("loader");
            $.ajax({
                url: '<?PHP echo base_url(); ?>Wyplaty/WyplatyAjax/'+$('#month_picker').val()+'/'+ $('#year_picker').val(),
                method: 'GET',
                success: function (data) { $(".ajaxGet").html(data); $(".ajaxGet").removeClass("loader");}
            });

        });



        $("#oplacWyplate").on("submit", function(e){
            e.preventDefault();  //prevent form from submitting
            $.ajax({
                url: '<?PHP echo base_url(); ?>Wyplaty/Rozlicz',
                method: 'POST',
                data: $("#oplacWyplate").serialize() + "&" + csrfName + "=" + csrfHash,
                success: function (data) {


                    if (data.response.status) {
                        if (data.response.message === "Dodano") {


                            location.reload();
                        }

                    }
                    new PNotify({
                        text: data.response.message,
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
            });

            return false;
        });



    });
</script>