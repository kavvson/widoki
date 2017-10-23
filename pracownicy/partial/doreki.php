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
                    <div class="title">Informacje o płatnościach "do ręki"</div>

                    <button type="button" data-toggle="modal"
                            data-target="#dodajPlatnoscDoReki" href="#" class="btn btn-secondary"><i
                                class="icon-add"></i> Dodaj płatność
                    </button>
                </header>


                <div class="content p-4">

                    <form id="form-filter">

                        <div class="row">


                        </div>

                    </form>


                </div>
                <div class="row col-lg-12 text-white">
                    <div class="col-md-6"></div>

                    <div class="px-4 py-2 bg-primary" id="curr_brutto"><img
                                src="<?PHP echo base_url() . 'assets/grocery_crud/css/jquery_plugins/file_upload/loading.gif'; ?>">
                    </div>


                </div>
            </div>

            <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead class="btn-primary bg-primary">
                <tr>
                    <th>id</th>
                    <th>Data</th>
                    <th>Kwota</th>
                    <th>Opis</th>
                    <th>Opcje</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>


    </div>
</div>
</div>


</div>

<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.material.min.js"></script>

<script type="text/javascript">
    function addCommas(t) {
        t += "", x = t.split("."), x1 = x[0], x2 = x.length > 1 ? "." + x[1] : "";
        for (var e = /(\d+)(\d{3})/; e.test(x1);) x1 = x1.replace(e, "$1 $2");
        return x1 + x2.replace(".", ",")
    }


    var table;
    $(document).ready(function () {


        table = $('#table').DataTable({

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

            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo site_url('Place/doreki_list') ?>",
                "type": "POST",
                "data": function (data) {
                    data.s_pracownik = <?PHP echo $id;?>;
                    data.<?php echo $this->security->get_csrf_token_name(); ?> = '<?php echo $this->security->get_csrf_hash(); ?>';
                    data.customMonth = $('#month_picker').val();
                    data.customYear = $('#year_picker').val();
                },
                "dataSrc": function (json) {

                    $("#curr_brutto").html("Brutto : " + addCommas(json.agregacja.brutto) + " zł");

                    return json.data;
                }
            },
            "fnInitComplete": function (oSettings, json) {
                $('#month_picker').on('change', function (e) {
                    table.search(this.value).draw();
                });

                $('#year_picker').on('change', function (e) {
                    table.search(this.value).draw();
                });
            },
            columns: [
                {data: "id", className: "", visible: false},
                {data: "zarejestrowano"},
                {data: "kwota"},
                {data: "opis"},
                {
                    data: null, "mRender": function (data, type, full) {
                    return '<i class="icon-document"></i> <a target="_blank" href="<?PHP echo base_url();?>PDF_Generator/Dokument/Wyplaty/' + full["id"] + '">Pobierz dokument</a>'
                }
                },
            ],
            //Set column definition initialisation properties.
            "columnDefs": [
                {
                    "targets": [0], //first column / numbering column
                    "orderable": false, //set not orderable
                },

            ],
        });

    });
    // Dodawanie wydatku

</script>

</body>
</html>
