<div class="doc page-layout simple full-width">

    <!-- HEADER -->
    <div class="page-header bg-primary text-auto p-6"><h2 class="doc-title" id="content">Lista przelewów
            przychodzących</h2>
    </div>
    <!-- / HEADER -->

    <div class="page-content row p-12">

        <!-- STANDARD ALERTS -->
        <div class="col-12 col-md-12">

            <form id="nowyPojazd" name="nowyPojazd" method="post" enctype="multipart/form-data" accept-charset="utf-8">

                <div class="profile-box info-box general card mb-4">

                    <header class="h6 row no-gutters align-items-center justify-content-between bg-primary text-auto p-4">


                        <div class="title">Lista przelewów przychodzących</div>
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
                        <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead class="btn-primary bg-primary">
                            <tr>
                                <th>blank</th>
                                <th>Data operacji</th>
                                <th>Data waluty</th>
                                <th>Tytuł</th>
                                <th>Kwota</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>

                    </div>
            </form>
        </div>
    </div>
</div>


<script>
    var d = new Date();
    var n = d.getMonth() + 1;
    var y = d.getFullYear();

    $('#month_picker').val(n);
    $('#year_picker').val(y);
    var table;
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
        "ajax": {
            "url": "<?php echo site_url('Przelewy/Lista_ajax') ?>",
            "type": "POST",
            "data": function (data) {
                data.customMonth = $('#month_picker').val();
                data.customYear = $('#year_picker').val();

                data.<?php echo $this->security->get_csrf_token_name(); ?> = '<?php echo $this->security->get_csrf_hash(); ?>';
            },
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
            {data: "data_operacji"},
            {data: "data_waluty"},
            {data: "opis"},
            {data: "kwota"},

        ],

        "columnDefs": [
            {
                "targets": [0], //first column / numbering column
                "orderable": false, //set not orderable
            },
        ],
    });
</script>