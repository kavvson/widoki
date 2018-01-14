<div class="doc page-layout simple full-width">
    <div class="page-content row p-12">

        <!-- STANDARD ALERTS -->
        <div class="col-12 col-md-12">

            <link href="https://cdn.datatables.net/1.10.15/css/dataTables.material.min.css" rel="stylesheet">
            <link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>assets/js/select2/css/select2.min.css" />
            <link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>assets/js/select2/css/select2-bootstrap.css" />
            <link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>assets/js/select2/css/pmd-select2.css" />


            <div class="profile-box info-box general card mb-4">

                <header class="h6 row no-gutters align-items-center justify-content-between bg-primary text-auto p-4">
                    <div class="title">Wyszukiwarka</div>
                    <button type="button" id="btn-reset" class="btn btn-default">Wyczyść filtr</button>                      
                </header>

                <div class="content p-4">

                    <form id="form-filter">
                        <div class="form-group pmd-textfield pmd-textfield-floating-label col-md-2">
                            <label for="regular1" class="control-label">Kontrahent</label>
                            <select id="inputKontrahent" name="inputKontrahent" class="select-with-search pmd-select2 form-control">
                                <option></option>
                            </select>

                        </div>



                    </form>
                </div>
            </div>



            <table id="tablekontra" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead class="btn-primary bg-primary">
                    <tr>
                        <th class="never">id_kontrahenta</th>
                        <th width="50%">Nazwa</th>
                        <th>Nip</th>
                        <th>Regon</th>
                        <th>KRS</th>
                        <th>Specjalizacja</th>
                        <th>Telefon</th>
                        <th>Charakter prawny</th>
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
<script type="text/javascript" src="<?PHP echo base_url(); ?>assets/js/select2/js/select2.full.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/i18n/pl.js"></script>
<script type="text/javascript" src="<?PHP echo base_url(); ?>assets/js/select2/js/pmd-select2.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/plug-ins/1.10.15/dataRender/ellipsis.js"></script>

<script type="text/javascript">
    var table;
    $(document).ready(function () {
        $("#inputKontrahent").select2({
            theme: "bootstrap",
            width: '410px',
            language: "pl",
            ajax: {
                type: "GET",
                url: '<?PHP echo base_url(); ?>Kontrahent/lista_kontrahentow',
                dataType: 'json',
                data: function (params) {
                    return {
                        term: params.term,
                        page_limit: 100,
                    };
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
            "fnRowCallback": function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {},
            "ajax": {
                "url": "<?php echo site_url('Kontrahent/ajax_list_pdt') ?>",
                "type": "POST",
                "data": function (data) {
                    data.s_kontrahent = $("#inputKontrahent").select2('data')[0]['id'];
                    data.token = csrfHash;
                },
                "dataSrc": function (json) {

                    csrfName = json.respo.csrfName;
                    csrfHash = json.respo.csrfHash;
                    return json.data;
                },

            },

            "fnInitComplete": function (oSettings, json) {
                $('select').on('change', function ()
                {
                    table.search(this.value).draw();
                    //alert(this.value);
                });
            },

            columns: [
                {data: "id_kontrahenta", visible: false},
                {data: "nazwa", "mRender": function (data, type, full) {
                        return '<a href="Kontrahent/Podglad/' + full["id_kontrahenta"] + '">' + data + '</a>'
                    }},
                {data: "nip"},
                {data: "regon"},
                {data: "krs"},
                {data: "spec"},
                {data: "phone"},
                {data: "char_prawny", "mRender": function (data, type, full) {
                        if (data === "1") {
                            return  'Osoba fizyczna';
                        }
                        if (data === "2") {
                            return  'Spółka';
                        }
                        return "";
                    }},
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
            table.ajax.reload(); //just reload table
        });
    });

</script>

</body>
</html>