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
                    <div class="title">Umowy o pracę</div>
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
                </header>

                <div class="content p-4">

                    <form id="form-filter">

                        <div class="row">
                        </div>
                    </form>


                </div>
                <div class="row col-lg-12 text-white">
                    <div class="col-md-3"></div>
                    <div class="px-4 py-2 bg-primary" id="curr_brutto"></div>
                    <div class="bg-primary px-4 py-2" id="curr_netto"></div>
                    <div class="bg-primary px-4 py-2" id="curr_vat"><img
                                src="<?PHP echo base_url() . 'assets/grocery_crud/css/jquery_plugins/file_upload/loading.gif'; ?>">
                    </div>
                    <div class="bg-primary px-4 py-2" id="curr_vat2"></div>
                    <div class="bg-primary px-4 py-2" id="pozostala_kwota"></div>
                    <div class="bg-primary px-4 py-2" id="zaplacona_kwota"></div>


                </div>
            </div>

            <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead class="btn-primary bg-primary">
                <tr>
                    <th>id_placy</th>
                    <th>Pracownik</th>
                    <th>Miesiąc</th>
                    <th>Data wypłaty</th>
                    <th>Kwota brutto</th>
                    <th>Zus Pracownik</th>
                    <th>Zus Pracodawca</th>
                    <th>Zus Łącznie</th>
                    <th>Do wypłaty</th>
                    <th>Obciążenie</th>
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
<link rel="stylesheet" type="text/css"
      href="<?PHP echo base_url(); ?>assets/vendor/datetimepicker/css/bootstrap-material-datetimepicker.css"/>
<script type="text/javascript" language="javascript"
        src="<?PHP echo base_url(); ?>assets/vendor/datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.material.min.js"></script>

<script type="text/javascript">
    function addCommas(t) {
        t += "", x = t.split("."), x1 = x[0], x2 = x.length > 1 ? "." + x[1] : "";
        for (var e = /(\d+)(\d{3})/; e.test(x1);) x1 = x1.replace(e, "$1 $2");
        return x1 + x2.replace(".", ",")
    }

    $.fn.dataTable.render.ellipsis = function (t, e, n) {
        var r = function (t) {
            return t.replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;").replace(/"/g, "&quot;")
        };
        return function (a, i, l) {
            if ("display" !== i) return a;
            if ("number" != typeof a && "string" != typeof a) return a;
            if ((a = a.toString()).length < t) return a;
            var p = a.substr(0, t - 1);
            return e && (p = p.replace(/\s([^\s]*)$/, "")), n && (p = r(p)), '<span class="ellipsis" title="' + r(a) + '">' + p + "&#8230;</span>"
        }
    }, $.fn.blink = function (t) {
        var e = $(this);
        t = t - 1 || 0, e.animate({opacity: .25}, 555, function () {
            e.animate({opacity: 1}, 555, function () {
                t > 0 && e.blink(t)
            })
        })
    };


    var table;
    $(document).ready(function () {
        var d = new Date();
        var n = d.getMonth() + 1;
        var y = d.getFullYear();

        $('#month_picker').val(n);
        $('#year_picker').val(y);

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
                "url": "<?php echo site_url('Place/ajax_list') ?>",
                "type": "POST",
                "data": function (data) {
                    data.customMonth = $('#month_picker').val();
                    data.customYear = $('#year_picker').val();
                    data.<?php echo $this->security->get_csrf_token_name(); ?> = '<?php echo $this->security->get_csrf_hash(); ?>';

                },
                "dataSrc": function (json) {


                    $("#curr_netto").html("Zus pracownik : " + addCommas(json.agregacja.zus_pracownik) + " zł");
                    $("#curr_vat").html("Zus pracodawca : " + addCommas(json.agregacja.zus_pracodawca) + " zł");
                    $("#curr_vat2").html("Zus łącznie : " + addCommas(json.agregacja.zus_lacznie) + " zł");
                    $("#curr_brutto").html("Brutto : " + addCommas(json.agregacja.brutto) + " zł");

                    $("#pozostala_kwota").html("Do wypłaty : " + addCommas(json.agregacja.do_wyplaty) + " zł");
                    $("#zaplacona_kwota").html("Obciążenie : " + addCommas(json.agregacja.obciazenie) + " zł");

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
                $('#form-filter select').on('change', function () {
                    table.search(this.value).draw();
                    //alert(this.value);
                });
            },
            columns: [

                {data: "id_placy", className: "", visible: false},
                {data: "fk_prac"},
                {data: "miesiac"},
                {data: "data_wyplaty"},
                {data: "brutto"},
                {data: "zus_pracownik"},
                {data: "zus_pracodawca"},
                {data: "zus_lacznie"},
                {data: "do_wyplaty"},
                {data: "obciazenie"},



            ],
            //Set column definition initialisation properties.
            "columnDefs": [
                {
                    "targets": [0], //first column / numbering column
                    "orderable": false, //set not orderable
                },
                {
                    targets: [8],
                    render: $.fn.dataTable.render.ellipsis(10)
                }
            ],
        });

    });




</script>

</body>
</html>