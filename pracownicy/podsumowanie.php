<div class="doc page-layout simple full-width">
    <div class="page-content row p-12">
        <div class="col-12 col-md-12">

            <link href="https://cdn.datatables.net/1.10.15/css/dataTables.material.min.css" rel="stylesheet">


            <div class="profile-box info-box general card mb-4">
                <header class="h6 row no-gutters align-items-center justify-content-between bg-primary text-auto p-4">
                    <div class="title">Informacje o płacach za miesiąc sierpień</div>
                    <div class=" more fuse-ripple-ready" style="    display: inline-block;    white-space: nowrap;">

                    </div>
                </header>

                <div class="content p-4">

                    <form id="form-filter">

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

                        </div>

                    </form>


                </div>
                <div class="row col-lg-12 text-white">

                </div>
            </div>
            <div id="tablec"></div>
        </div>


    </div>
</div>
</div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.2.6/jquery.inputmask.bundle.min.js"></script>
<script>
    var d = new Date();
    var n = d.getMonth() + 1;
    var y = d.getFullYear(),status = 0;

    function load() {
        $.ajax({
            type: "POST",
            url: "<?PHP echo base_url();?>Pracownicy/PodsumowaniePartial",
            data: {
                '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>',
                customMonth: $('#month_picker').val(),
                customYear: $('#year_picker').val()
            },
            success: function (data) {
                $("#tablec").html(data);
            }
        });
    }

    if(status == 0 )
    {
        load();
    }
    $('#month_picker').on('change', function () {
        load();
        status =1;
    });
    $('#month_picker').val(n);
    $('#year_picker').val(y);
</script>