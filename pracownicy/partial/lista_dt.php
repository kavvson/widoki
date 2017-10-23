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
                    <div class="title">Informacje o wydatku</div>
                    <div class=" more fuse-ripple-ready" style="    display: inline-block;    white-space: nowrap;">  
                        <div class="form-group chkboxs">

                            <div class="form-check form-check-inline has-success">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="statusPlatnosci" id="chk1" value="zap"/>
                                    <span class="checkbox-icon"></span>
                                    <span>Zapłacone</span>
                                </label>
                            </div>
                            <div class="form-check form-check-inline has-warning">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="statusPlatnosci"  id="chk2" value="do_zap"/>
                                    <span class="checkbox-icon"></span>
                                    <span>Do zapłaty</span>
                                </label>
                            </div>
                            <div class="form-check form-check-inline has-danger">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="statusPlatnosci" id="chk3" value="po_term"/>
                                    <span class="checkbox-icon"></span>
                                    <span>Po terminie</span>
                                </label>
                            </div>

                        </div>
                    </div>
                </header>

                <div class="content p-4">

                    <form id="form-filter">

                        <div class="row">


                            <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-2">
                                <label for="regular1" class="control-label">Numer faktury</label>
                                <input type="text" id="inputNrFaktury" name="inputNrFaktury" class="form-control">
                            </div>

                            <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-2">
                                <label for="regular1" class="control-label">Rejon</label>
                                <select id="s_rejon" class="form-control">
                                    <option value="" selected="selected">Wszystkie</option>
                                    <option value="1">Łódź</option>
                                    <option value="2">Wrocław</option>
                                    <option value="3">Kraj</option>
                                    <option value="4">Biuro</option>
                                </select>
                            </div>

                            <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-2">
                                <label for="regular1" class="control-label">Kategoria</label>
                                <select id="inputKategoria" name="inputKategoria" class="select-with-search pmd-select2 form-control">
                                    <option></option>
                                </select>
                            </div>
                            <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-2">
                                <label for="regular1" class="control-label">Kontrahent</label>
                                <select id="inputKontrahent" name="inputKontrahent" class="select-with-search pmd-select2 form-control">
                                    <option></option>
                                </select>
                            </div>

                            <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-2">
                                <label for="regular1" class="control-label">Na rzecz</label>
                                <select id="inputNaRzeczf" name="inputNaRzeczf" class="select-with-search pmd-select2 form-control">
                                    <option></option>
                                </select>
                            </div>

                            <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-2">
                                <label for="regular1" class="control-label">Kontrakt</label>
                                <select id="inputKontraktf" name="inputKontraktf" class="select-with-search pmd-select2 form-control">
                                    <option></option>
                                </select>
                            </div>


                            <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-12">
                                <button type="button" id="btn-reset" class="btn btn-default">Reset</button>
                                <button type="button" class="btn" data-toggle="modal" data-target="#obIkon">Legenda</button>
                                <button type="button" class="btn fuse-ripple-ready" id="nowy_wydatek_modal" data-toggle="modal" data-target="#dodawanie_wydatku"><i class="icon icon-plus"></i>Nowy wydatek</button>
                            </div>

                        </div>

                    </form>



                </div>
                <div class="row col-lg-12 text-white">
                    <div class="col-md-2 "></div>
                    <div class="px-4 py-2 bg-red-500" id="po_terminie">Po terminie : 0</div>
                    <div class="px-4 py-2 bg-primary" id="curr_brutto">Brutto : 0 zł</div>
                    <div class="bg-primary px-4 py-2" id="curr_netto">Neto : 0 zł</div>
                    <div class="bg-primary px-4 py-2" id="curr_vat">Vat : 0 zł</div>

                    <div class="bg-primary px-4 py-2" id="pozostala_kwota">Zobowiązania : 0 zł</div>
                    <div class="bg-primary px-4 py-2" id="zaplacona_kwota">Opłacono : 0 zł</div>
                    <div class="bg-primary px-4 py-2" id="do_zaplaty">Nieopłacone : 0</div>
                    <div class="bg-primary px-4 py-2" id="oplacone">Opłacone : 0</div>
                    <div class="bg-primary px-4 py-2" id="czesciowo">Częściowo : 0</div>

                </div>
            </div>

            <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead class="btn-primary bg-primary">
                    <tr>
                        <th>blank</th>
                        <th>Rejon</th>
                        <th>Brutto</th>
                        <th>Netto</th>
                        <th>Numer faktury</th>
                        <th>Data Zakupu</th>
                        <th>Termin</th>
                        <th>Kontrahent</th>
                        <th>blank</th>
                        <th>blank</th>
                        <th>Vat</th>
                        <th>% Vat</th>
                        <th>Informacje</th>
                        <th>Kategoria</th>
                        <th>Do zapłaty</th>
                        <th>Zapłacono</th>
                        <th>blank</th>
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


<script type="text/javascript">
   function addCommas(t){t+="",x=t.split("."),x1=x[0],x2=x.length>1?"."+x[1]:"";for(var e=/(\d+)(\d{3})/;e.test(x1);)x1=x1.replace(e,"$1 $2");return x1+x2.replace(".",",")}$.fn.dataTable.render.ellipsis=function(t,e,n){var r=function(t){return t.replace(/&/g,"&amp;").replace(/</g,"&lt;").replace(/>/g,"&gt;").replace(/"/g,"&quot;")};return function(a,i,l){if("display"!==i)return a;if("number"!=typeof a&&"string"!=typeof a)return a;if((a=a.toString()).length<t)return a;var p=a.substr(0,t-1);return e&&(p=p.replace(/\s([^\s]*)$/,"")),n&&(p=r(p)),'<span class="ellipsis" title="'+r(a)+'">'+p+"&#8230;</span>"}},$.fn.blink=function(t){var e=$(this);t=t-1||0,e.animate({opacity:.25},555,function(){e.animate({opacity:1},555,function(){t>0&&e.blink(t)})})};


    var table;
    $(document).ready(function () {

        function odmiana(liczba, pojedyncza, mnoga, mnoga_dopelniacz) {
            liczba = Math.abs(liczba); // tylko jeśli mogą zdarzyć się liczby ujemne
            if (liczba === 1)
                return pojedyncza;
            var reszta10 = liczba % 10;
            var reszta100 = liczba % 100;
            if (reszta10 > 4 || reszta10 < 2 || (reszta100 < 15 && reszta100 > 11))
                return mnoga_dopelniacz;
            return mnoga;
        }



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
            "fnRowCallback": function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {

                if ((aData["kwota_brutto"] > aData["zaplacona_kwota"]))
                {
                    if (aData["ddif"] < "0")
                    {
                        $('td', nRow).css('background-color', 'rgba(255,0,0,0.33)');
                    } else if (aData["ddif"] == "0")
                    {
                        $('td', nRow).css('background-color', 'rgba(255,144,0,0.33)');
                    }
                }
                if ((aData["kwota_brutto"] === aData["zaplacona_kwota"]))
                {
                    $('td', nRow).css('background-color', 'rgba(0,255,0,0.33)');
                }

            },
            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo site_url('Wydatki/ajax_list') ?>",
                "type": "POST",
                "data": function (data) {
                    data.s_rejon = $('#s_rejon').val();
                    data.kupiec = <?PHP echo $id; ?>;
                    data.s_kategoria = $("#inputKategoria").select2('data')[0]['id'];
                    data.s_kontrahent = $("#inputKontrahent").select2('data')[0]['id'];
                    data.address = $('#address').val();

                    data.customMonth = $('#month_picker').val();
                    data.customYear = $('#year_picker').val();

                    data.s_narzecz = $("#inputNaRzeczf").select2('data')[0]['id'];
                    data.s_kontrakt = $("#inputKontraktf").select2('data')[0]['id'];

                    data.s_nrfaktury = $("#inputNrFaktury").val();

                    data.<?php echo $this->security->get_csrf_token_name(); ?> = '<?php echo $this->security->get_csrf_hash(); ?>';
                    var arr = [];
                    $.each($('input[name="statusPlatnosci"]:checked'), function () {
                        var value = $(this).val()

                        arr.push(value)

                    })
                    data.status_pl = arr;
                },
                "dataSrc": function (json) {

                    if (json.agregacja.po_terminie == 0)
                    {
                        $("#po_terminie").hide();
                    } else {
                        $("#po_terminie").show();
                        $("#po_terminie").blink(10);
                        $("#po_terminie").html("Po terminie : " + json.agregacja.po_terminie);
                    }

                    $("#curr_netto").html("Netto : " + addCommas(json.agregacja.netto) + " zł");
                    $("#curr_brutto").html("Brutto : " + addCommas(json.agregacja.brutto) + " zł");
                    $("#curr_vat").html("Vat : " + addCommas(json.agregacja.vat) + " zł");
                    $("#pozostala_kwota").html("Zobowiązania : " + addCommas(json.agregacja.pozostala_kwota) + " zł");
                    $("#zaplacona_kwota").html("Opłacono : " + addCommas(json.agregacja.zaplacona_kwota) + " zł");
                    $("#do_zaplaty").html("Nieopłacone : <i class=\"icon-file-excel-box icon s-5\"></i> " + Math.round(json.agregacja.status.do_zaplaty));
                    $("#oplacone").html("Opłacone : <i class=\"icon-checkbox-marked icon s-5\"></i> " + Math.round(json.agregacja.status.oplacone));
                    $("#czesciowo").html("Częściowo : <i class=\"icon-division-box icon s-5\"></i> " + Math.round(json.agregacja.status.czesciowo));
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
                {data: "nr", className: "", visible: false},
                {data: "rejont", className: ""},
                {data: "kwota_brutto", className: "", "mRender": function (data, type, full) {
                        if (data) {
                            return  data + ' zł';
                        }
                    }},
                {data: "kwota_netto", className: ""},
                {data: "dokument", className: "", "mRender": function (data, type, full) {
                        return '<a href="<?PHP echo base_url();?>Wydatki/Podglad/' + full["nr"] + '">' + data + '</a>'
                    }},
                {data: "data_zakupu", className: ""},
                {data: "termin", className: "",
                    "mRender": function (data, type, full) {

                        if (parseFloat(full["pozostala_kwota"]) > 0)
                        {
                            if (full["ddif"] == 0) {
                                return data + ' <b>( 0 )</b>'
                            }
                            if (full["ddif"] > 0) {
                                return data + ' <b>( + ' + full["ddif"] + ' )</b>'
                            }
                            if (full["ddif"] < 0) {
                                var dd = full["ddif"].replace("-", "");
                                return data + ' <b>( - ' + dd + ' )</b>'
                            }
                        } else {
                            return 'Opłacono';
                        }

                    }
                },
                {data: "kontrahent", className: ""},
                {data: "cel_zakupu", className: "", visible: false},
                {data: "dodal", className: "", visible: false},
                {data: "wartosc_vat", className: ""},
                {data: "procent_vat", className: "", "mRender": function (data, type, full) {
                        if (data) {
                            return '' + data + ' %';
                        }
                    }},
                {data: "metoda_platnosci", className: "", "mRender": function (data, type, full) {
                        var s = "";
                        switch (full["priorytet"]) {
                            case "3":
                                s += '<i class="icon icon-hexagon-outline s40"></i> '
                                break;
                            case "2":
                                s += '<i class="icon icon-arrow-up-bold-hexagon-outline text-orange s40"></i> '
                                break;
                            case "1":
                                s += '<i class="icon icon-alert-octagon text-red s40"></i> '
                                break;
                        }
                        switch (data) {
                            case "3":
                                s += '<i class="icon icon-credit-card-multiple s40"></i>';
                                break;
                            case "2":
                                s += '<i class="icon icon-bank s40"></i>';
                                break;
                            case "1":
                                s += '<i class="icon icon-cash-100 s40"></i>';
                                break;
                        }
                        if (full["rozbita"] === "1")
                        {
                            s += '<i class="icon icon-format-list-numbers s40"></i>';
                        }
                        if (parseFloat(full["kwota_brutto"]) === parseFloat(full["zaplacona_kwota"]))
                        {
                            s += '<i class="icon-checkbox-marked icon text-green"></i>';
                        } else if (full["zaplacona_kwota"] > parseFloat("0.00").toFixed(2))
                        {
                            s += '<i class="icon-division-box icon"></i>';
                        } else if (full["zaplacona_kwota"] === parseFloat("0.00").toFixed(2)) {
                            s += '<i class="icon-file-excel-box icon"></i>';
                        }
                        if (full["skan"] == null)
                        {
                            s += '<i class="icon-file-hidden icon"></i>';
                        }


                        return s;
                    }},
                {data: "kat", className: "", },
                {data: "pozostala_kwota"},
                {data: "zaplacona_kwota"},
                {data: "rozbita", visible: false},
                {data: "ddif", visible: false},
                {data: "priorytet", visible: false}

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
        $("#btn-filter").click(function(){table.ajax.reload()}),$("#btn-reset").click(function(){
            var d = new Date();
            var n = d.getMonth() + 1;
            var y = d.getFullYear();
            $('#month_picker').val(n);
            $('#year_picker').val(y);
            $("#form-filter")[0].reset(),$("#inputKupiec").val("").trigger("change.select2"),$("#inputKategoria").val("").trigger("change.select2"),$("#inputKontrahent").val("").trigger("change.select2"),$("#inputNaRzeczf").val("").trigger("change.select2"),$("#inputKontraktf").val("").trigger("change.select2"),table.ajax.reload()});
    });
    // Dodawanie wydatku

</script>

</body>
</html>