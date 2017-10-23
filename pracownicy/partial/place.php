<div class="doc page-layout simple full-width">
    <div class="page-content row p-12">

        <!-- STANDARD ALERTS -->
        <div class="col-12 col-md-12">

            <link href="https://cdn.datatables.net/1.10.15/css/dataTables.material.min.css" rel="stylesheet">

            <link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>assets/js/select2/css/select2.min.css" />
            <link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>assets/js/select2/css/select2-bootstrap.css" />
            <link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>assets/js/select2/css/pmd-select2.css" />


                <div class="row col-lg-12 text-white">
                    <div class="col-md-3"></div>
                    
                    <div class="px-4 py-2 bg-primary" id="curr_brutto"></div>
                    <div class="bg-primary px-4 py-2" id="curr_netto"></div>
                    <div class="bg-primary px-4 py-2" id="curr_vat"><img src="<?PHP echo base_url() . 'assets/grocery_crud/css/jquery_plugins/file_upload/loading.gif'; ?>"></div>
                    <div class="bg-primary px-4 py-2" id="curr_vat2"></div>
                    <div class="bg-primary px-4 py-2" id="pozostala_kwota"></div>
                    <div class="bg-primary px-4 py-2" id="zaplacona_kwota"></div>
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
<div id="obIkon" class="modal fade" role="dialog"
     aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-body">

                <div class="row">
                    <div class="col-lg-12">

                        <div class="profile-box info-box contact card mb-4">

                            <header class="h6 bg-primary text-auto p-4">
                                <div class="title">Tabela - kolory wierszy</div>
                            </header>

                            <div class="content p-4">

                                <div class="info-line mb-6">
                                    <div class="info">
                                        <div class="row no-gutters ripple p-2 fuse-ripple-ready" style="background-color: rgba(255, 0, 0, 0.33);">
                                            wpis po terminie
                                        </div>
                                    </div>
                                    <div class="info">
                                        <div class="row no-gutters ripple p-2 fuse-ripple-ready" style="background-color: rgba(255,144,0,0.33)">
                                            należy opłacić dzisiaj
                                        </div>
                                    </div>
                                    <div class="info">
                                        <div class="row no-gutters ripple p-2 fuse-ripple-ready" style="background-color: rgba(0,255,0,0.33)">
                                            opłacony
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="profile-box info-box contact card mb-4">

                            <header class="h6 bg-primary text-auto p-4">
                                <div class="title">Legenda - ikony</div>
                            </header>

                            <div class="content p-4">
                                <h5>Priorytet</h5>

                                <div class="row col-lg-12">
                                    <div class="col-lg-4">

                                        <i class="icon icon-hexagon-outline s40"></i> Normalny

                                    </div>
                                    <div class="col-lg-4">

                                        <i class="icon icon-arrow-up-bold-hexagon-outline text-orange s40"></i>  Istotny

                                    </div>
                                    <div class="col-lg-4">

                                        <i class="icon icon-alert-octagon text-red s40"></i> Pilny

                                    </div>  

                                </div>
                            </div>
                            <div class="content p-4">
                                <h5>Metoda płatności</h5>

                                <div class="row col-lg-12">
                                    <div class="col-lg-4">
                                        <i class="icon icon-cash-100 s40"></i> Gotówka
                                    </div>
                                    <div class="col-lg-4">
                                        <i class="icon icon-bank s40"></i> Przelew
                                    </div>  
                                    <div class="col-lg-4">
                                        <i class="icon icon-credit-card-multiple s40"></i> Karta
                                    </div>  
                                </div>
                            </div>

                            <div class="content p-4">
                                <h5>Statusy - Faktury</h5>

                                <div class="row col-lg-12">
                                    <div class="col-lg-6">

                                        <i class="icon icon-format-list-numbers s40"></i> Rozbita

                                    </div>
                                    <div class="col-lg-6">

                                        <i class="icon-checkbox-marked icon text-green"></i> Opłacono

                                    </div>  
                                </div>
                                <div class="row col-lg-12">
                                    <div class="col-lg-6">

                                        <i class="icon-division-box icon"></i> Częściowo opłacona

                                    </div>  
                                    <div class="col-lg-6">

                                        <i class="icon-file-excel-box icon"></i> Nie opłacono

                                    </div>
                                </div>
                            </div>

                            <div class="content p-4">
                                <h5>Pozostałe</h5>

                                <div class="row col-lg-12">
                                    <div class="col-lg-6">
                                        <i class="icon-file-hidden icon s40"></i> Brak skanu dokumentu
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
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
<link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>assets/vendor/datetimepicker/css/bootstrap-material-datetimepicker.css" />
<script type="text/javascript" language="javascript" src="<?PHP echo base_url(); ?>assets/vendor/datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.2.6/jquery.inputmask.bundle.min.js"></script>
<script src="<?PHP echo base_url(); ?>assets/js/formValidation.min.js"></script>
<script src="<?PHP echo base_url(); ?>assets/js/fv.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js" type="text/javascript"></script>
<script type="text/javascript">
   function addCommas(t){t+="",x=t.split("."),x1=x[0],x2=x.length>1?"."+x[1]:"";for(var e=/(\d+)(\d{3})/;e.test(x1);)x1=x1.replace(e,"$1 $2");return x1+x2.replace(".",",")}$.fn.dataTable.render.ellipsis=function(t,e,n){var r=function(t){return t.replace(/&/g,"&amp;").replace(/</g,"&lt;").replace(/>/g,"&gt;").replace(/"/g,"&quot;")};return function(a,i,l){if("display"!==i)return a;if("number"!=typeof a&&"string"!=typeof a)return a;if((a=a.toString()).length<t)return a;var p=a.substr(0,t-1);return e&&(p=p.replace(/\s([^\s]*)$/,"")),n&&(p=r(p)),'<span class="ellipsis" title="'+r(a)+'">'+p+"&#8230;</span>"}},$.fn.blink=function(t){var e=$(this);t=t-1||0,e.animate({opacity:.25},555,function(){e.animate({opacity:1},555,function(){t>0&&e.blink(t)})})};


    var table;
    $(document).ready(function () {


      $("#inputKontrahent").select2({theme:"bootstrap",language:"pl",ajax:{type:"GET",url:"<?PHP echo base_url(); ?>Kontrahent/lista_kontrahentow",dataType:"json",data:function(t){return{term:t.term,page_limit:100}},processResults:function(t){return{results:t}}},initSelection:function(t,e){e({id:null,text:"Dowolny"})}});
      $("#inputKontraktf").select2({theme:"bootstrap",width:"100%",language:"pl",ajax:{type:"GET",url:"<?PHP echo base_url(); ?>Kontrakt/lista_kontraktow",dataType:"json",delay:250,data:function(t){return{term:t.term,page_limit:100}},processResults:function(t){return{results:t}}},initSelection:function(t,e){e({id:null,text:"Dowolny"})}}),$("#inputKategoria").select2({theme:"bootstrap",language:"pl",ajax:{type:"GET",url:"<?PHP echo base_url(); ?>Wydatki/s2_kategorie_wydatku",dataType:"json",data:function(t){return{term:t.term,page_limit:100}},processResults:function(t){return{results:t}}},initSelection:function(t,e){e({id:null,text:"Dowolna"})}}),$("#inputKupiec").select2({theme:"bootstrap",language:"pl",ajax:{type:"GET",url:"<?PHP echo base_url(); ?>Pracownicy/s2_lista",dataType:"json",data:function(t){return{term:t.term,page_limit:100}},processResults:function(t){return{results:t}}},initSelection:function(t,e){e({id:null,text:"Dowolna"})}}),$("#inputNaRzeczf").select2({theme:"bootstrap",language:"pl",ajax:{type:"GET",url:"<?PHP echo base_url(); ?>Kontrahent/lista_kontrahentow",dataType:"json",data:function(t){return{term:t.term,page_limit:100}},processResults:function(t){return{results:t}}},initSelection:function(t,e){e({id:null,text:"Dowolny"})}});

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
                    data.s_pracownik = <?PHP echo $id;?>;
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

                $("input[name=inputNrFaktury").on("change paste keyup", function () {
                    if (this.value.length >= 3) {
                        table.search(this.value).draw();
                    }
                    if (this.value.length == 0) {
                        table.search(this.value).draw();
                    }
                });

                $("input[name=statusPlatnosci").on("change", function () {

                    table.search(this.value).draw();
                });
                $('#form-filter select').on('change', function ()
                {
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
        $("#btn-filter").click(function(){table.ajax.reload()}),$("#btn-reset").click(function(){$("#form-filter")[0].reset(),$("#inputKupiec").val("").trigger("change.select2"),$("#inputKategoria").val("").trigger("change.select2"),$("#inputKontrahent").val("").trigger("change.select2"),$("#inputNaRzeczf").val("").trigger("change.select2"),$("#inputKontraktf").val("").trigger("change.select2"),table.ajax.reload()});
    });
    // Dodawanie wydatku

</script>

</body>
</html>