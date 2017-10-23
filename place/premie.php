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
                    <div class="title">Informacje o premiach</div>
                    <div class="row no-gutters" style="display: -webkit-inline-box;">
                        <?PHP if(!isset($id)){ ?>
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
                        <?PHP } ?>
                    </div>
                    <?PHP if(isset($id)) { ?>
                    <button type="button"  data-toggle="modal"
                            data-target="#dodajPremie" href="#" class="btn btn-secondary"><i
                            class="icon-add"></i> Dodaj premię
                    </button>
                    <?PHP } ?>
                </header>

                <div class="content p-4">

                    <form id="form-filter">
                        <div class="row"></div>
                    </form>

                </div>
                <div class="row col-lg-12 text-white">
                    <div class="col-md-6"></div>
                    <div class="px-4 py-2 bg-primary" id="curr_brutto"><img src="<?PHP echo base_url() . 'assets/grocery_crud/css/jquery_plugins/file_upload/loading.gif'; ?>"></div>

                </div>
            </div>

            <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead class="btn-primary bg-primary">
                <tr>
                    <th>id_premii</th>
                    <th>Składający</th>
                    <th>Na rzecz</th>
                    <th>Kwota</th>
                    <th>Opis</th>
                    <th>Dodano</th>
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
    var d = new Date();
    var n = d.getMonth() + 1;
    var y = d.getFullYear();

    $('#month_picker').val(n);
    $('#year_picker').val(y);
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
            "fnRowCallback": function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {

                if (aData["status"] == 1)
                {
                    $('td', nRow).css('background-color', 'rgba(0,255,0,0.33)');
                }
                if (aData["status"] == 2)
                {
                    $('td', nRow).css('background-color', 'rgba(255,144,0,0.33)');
                }
                if (aData["status"] == 3)
                {
                    $('td', nRow).css('background-color', 'rgba(255,0,0,0.33)');
                }

            },
            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo site_url('Place/premie_list') ?>",
                "type": "POST",
                "data": function (data) {
                    data.<?php echo $this->security->get_csrf_token_name(); ?> = '<?php echo $this->security->get_csrf_hash(); ?>';
                    <?PHP if(isset($id)){ ?>
                    data.s_pracownik = "<?PHP echo $id;?>";
                    <?PHP } ?>
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
                {data: "id_premii", className: "", visible: false},
                {data: "zlorzyl"},
                {data: "na_rzecz"},
                {data: "kwota"},
                {data: "opis"},
                {data: "dodano"},
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