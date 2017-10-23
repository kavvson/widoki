<div class="doc page-layout simple full-width">
    <div class="page-content row p-12">

        <!-- STANDARD ALERTS -->
        <div class="col-12 col-md-12">

            <link href="https://cdn.datatables.net/1.10.15/css/dataTables.material.min.css" rel="stylesheet">


            <div class="profile-box info-box general card mb-4">

                <header class="h6 bg-primary text-auto p-4">
                    <div class="title">Informacje o przychodach</div>
                </header>

                <div class="content p-4">

                    <form id="form-filter">

                        <div class="row">
                            
                            <div class="form-group pmd-textfield pmd-textfield-floating-label col-md-12">
                                <button type="button" id="btn-reset" class="btn btn-default">Reset</button>
                            </div>

                        </div>

                    </form>
                    
                </div>
            </div>



            <table id="tablekontra" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead class="btn-primary bg-primary">
                    <tr>
                        <th class="never">id_kontrahenta</th>
                        <th>Nazwa</th>
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

<script type="text/javascript" src="//cdn.datatables.net/plug-ins/1.10.15/dataRender/ellipsis.js"></script>

<script type="text/javascript">
    var table;
    $(document).ready(function () {
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
                    data.s_rejon = $('#s_rejon').val();
                    data.token = csrfHash;
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
                {data: "nazwa"},
                {data: "nip"},
                {data: "regon"},
                {data: "krs"},
                {data: "spec"},
                {data: "phone"},
                {data: "char_prawny"},
            ],
            //Set column definition initialisation properties.
            "columnDefs": [
                {
                    "targets": [0], //first column / numbering column
                    "orderable": false, //set not orderable
                },
                {
                    targets: [1],
                    render: $.fn.dataTable.render.ellipsis(10)
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