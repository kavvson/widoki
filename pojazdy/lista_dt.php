<div class="doc page-layout simple full-width">
    <div class="page-content row p-12">

        <!-- STANDARD ALERTS -->
        <div class="col-12 col-md-12">
            <link href="https://cdn.datatables.net/1.10.15/css/dataTables.material.min.css" rel="stylesheet">
            <link rel="stylesheet" type="text/css"
                  href="<?PHP echo base_url(); ?>assets/js/select2/css/select2.min.css"/>
            <link rel="stylesheet" type="text/css"
                  href="<?PHP echo base_url(); ?>assets/js/select2/css/select2-bootstrap.css"/>
            <link rel="stylesheet" type="text/css"
                  href="<?PHP echo base_url(); ?>assets/js/select2/css/pmd-select2.css"/>


            <div class="profile-box info-box general card mb-4">

                <header class="h6 row no-gutters align-items-center justify-content-between bg-primary text-auto p-4">
                    <div class="title">Wyszukiwarka</div>
                    <button type="button" id="btn-reset" class="btn btn-default">Wyczyść filtr</button>
                </header>

                <div class="content p-4">

                    <form id="form-filter" class="row">
                        <div class="form-group pmd-textfield pmd-textfield-floating-label col-md-2">
                            <label for="regular1" class="control-label">Pojazd</label>
                            <select id="inputPojazd" name="inputPojazd"
                                    class="select-with-search pmd-select2 form-control">
                                <option></option>
                            </select>

                        </div>

                        <div class="form-group pmd-textfield pmd-textfield-floating-label col-md-2">
                            <label for="regular1" class="control-label"
                                   style="width: 127px;">Miesiąc</label>
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
                        <div class="form-group pmd-textfield pmd-textfield-floating-label col-md-2">
                            <label for="regular1" class="control-label"
                                   style="width: 127px;">Rok</label>
                            <select id="year_picker" class="form-control">
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                            </select>

                        </div>


                    </form>
                </div>
            </div>


            <table id="tablekontra" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead class="btn-primary bg-primary">
                <tr>

                    <th class="never">poj_id</th>
                    <th>Model</th>
                    <th>Nr rej</th>
                    <th>Ubez. OC</th>
                    <th>Ubez. AC</th>
                    <th>Marka</th>
                    <th>Przeglad</th>
                    <th>Przebieg</th>
                    <th>Stawka vat</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>

            <div class="profile-box info-box work card mb-4 mt-4">

                <header class="h6 bg-primary text-auto p-4">
                    <div class="title">Wydatki pojazdów</div>
                </header>

                <div class="content p-4">


                    <script type="text/javascript"
                            src="https://www.gstatic.com/charts/loader.js"></script>

                    <script type="text/javascript">
                        var d = new Date();
                        var n = d.getMonth() + 1;
                        var y = d.getFullYear();

                        $('#month_picker').val(n);
                        $('#year_picker').val(y);

                        google.charts.load("current", {packages: ["timeline"], 'language': 'pl'});
                        google.charts.setOnLoadCallback(drawChart);
                        $("#users").change(drawChart);

                        $('#month_picker').on('change', function () {

                            drawChart();

                        });

                        $(window).on("throttledresize", function (event) {
                            drawChart();
                        });

                        function drawChart() {


                            $.ajax({
                                url: '<?PHP echo base_url() . "Pojazdy/wydatki/";?>',
                                type: "POST",
                                data: {
                                    customMonth: $('#month_picker').val(),
                                    customYear: $('#year_picker').val(),
                                    '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
                                },
                                dataType: 'json',
                                success: function (responseText) {
                                    var container = document.getElementById('visualization');
                                    var chart = new google.visualization.Timeline(container);
                                    var dataTable = new google.visualization.DataTable(responseText);



                                    var options = {
                                        timeline: {colorByRowLabel: true}
                                    };


                                    $(window).trigger('resize');

                                    chart.draw(dataTable, options);


                                },
                                error: function (jqXHR, textStatus, errorThrown) {

                                }
                            });
                        }
                        $(window).resize(function() {
                            $('#visualization').height('500px');

                        });

                    </script>


                    <div id="visualization" style="width: 100%;"></div>


                </div>
            </div>
        </div>


    </div>
</div>
</div>

</div>

<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.material.min.js"></script>
<script type="text/javascript" src="<?PHP echo base_url(); ?>assets/js/select2/js/select2.full.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/i18n/pl.js"></script>
<script type="text/javascript" src="<?PHP echo base_url(); ?>assets/js/select2/js/pmd-select2.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/plug-ins/1.10.15/dataRender/ellipsis.js"></script>

<script type="text/javascript">
    var table;
    $(document).ready(function () {
        $("#inputPojazd").select2({
            theme: "bootstrap",
            width: '100%',
            language: "pl",
            ajax: {
                type: "GET",
                url: '<?PHP echo base_url(); ?>Pojazdy/s2_lista',
                dataType: 'json',
                delay: 250,
                data: function (params) {
                    return {
                        term: params.term,
                        page_limit: 100,
                    <?php echo $this->security->get_csrf_token_name(); ?>:
                    '<?php echo $this->security->get_csrf_hash(); ?>',
                }
                    ;
                },
                processResults: function (data) {
                    return {
                        results: data
                    };
                }
            },
        });
        var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
        table = $('#tablekontra').DataTable({

            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.
            "bStateSave": true,
            "lengthMenu": [[10, 50, 200, -1], [10, 50, 200, "Wszystko"]],
            "sDom": '<"row view-filter"<"col-sm-12"<"clearfix">>><"row view-pager"<"col-sm-12"l<"text-center"ip>>>t',
            responsive: true,
            "language": {
                "url": "http://cdn.datatables.net/plug-ins/1.10.15/i18n/Polish.json"
            },
            "fnRowCallback": function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
            },
            "ajax": {
                "url": "<?php echo site_url('Pojazdy/ajax_list_pdt') ?>",
                "type": "POST",
                "data": function (data) {
                    data.s_pojazd = $("#inputPojazd").select2('data')[0]['id'];
                    data.token = csrfHash;
                },
                "dataSrc": function (json) {

                    csrfName = json.respo.csrfName;
                    csrfHash = json.respo.csrfHash;
                    return json.data;
                },

            },

            "fnInitComplete": function (oSettings, json) {
                $('select').on('change', function () {
                    table.search(this.value).draw();
                    //alert(this.value);
                });
            },

            columns: [

                {data: "poj_id", visible: false},
                {data: "model"},
                {
                    data: "nr_rej", "mRender": function (data, type, full) {
                    return '<a href="<?PHP echo base_url();?>Pojazdy/Podglad/' + full["poj_id"] + '">' + data + '</a>'
                }
                },
                {data: "ubezp_oc"},
                {data: "ubezp_ac"},
                {data: "marka"},
                {data: "przeglad"},
                {data: "przebieg"},
                {
                    data: "stawka_vat", "mRender": function (data, type, full) {
                    if (data === "1") {
                        return '50%';
                    }
                    if (data === "2") {
                        return '100%';
                    }
                    return "";
                }
                },
            ],
            //Set column definition initialisation properties.
            "columnDefs": [
                {
                    "targets": [0], //first column / numbering column
                    "orderable": false, //set not orderable
                },
                {
                    targets: [1],
                    render: $.fn.dataTable.render.ellipsis(100)
                }
            ],
        });
        $('#btn-filter').click(function () { //button filter event click
            table.ajax.reload(); //just reload table
        });
        $('#btn-reset').click(function () { //button reset event click
            $('#form-filter')[0].reset();
            $("#inputPojazd").val("").trigger("change.select2");
            table.ajax.reload(); //just reload table
        });
    });

</script>

</body>
</html>