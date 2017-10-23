<div class="doc page-layout simple full-width">
    <div class="page-content row p-12">

        <!-- STANDARD ALERTS -->
        <div class="col-12 col-md-12">

            <link href="https://cdn.datatables.net/1.10.15/css/dataTables.material.min.css" rel="stylesheet">


            <div class="profile-box info-box general card mb-4">

                <header class="h6 bg-primary text-auto p-4">
                    <div class="title">Podgląd zaimportowanego pliku</div>
                </header>

                <div class="content p-4">

                    <form id="form-filter">

                        <div class="row">
                            <?PHP if (!empty($ex)) { ?> <div class="alert alert-danger" role="alert">  <?PHP echo $ex; ?> </div> <?PHP } else { ?>
                            </div>
                            <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-12">
                                <button type="button" id="btn-reset" class="btn btn-default">Wgraj do systemu</button>
                            </div>
                        </form>
                    </div>
                </div>


                <div class="row col-lg-12 text-white">
                    <div class="col-md-3"></div>


                    <div class="bg-primary px-4 py-2">zus_pracownik : <?PHP echo $s["agregacja"]["zus_pracownik"]; ?> zł</div>
                    <div class="bg-primary px-4 py-2">zus_pracodawca : <?PHP echo $s["agregacja"]["zus_pracodawca"]; ?> zł</div>
                    <div class="bg-primary px-4 py-2">zus_lacznie : <?PHP echo $s["agregacja"]["zus_lacznie"]; ?> zł</div>

                    <div class="bg-primary px-4 py-2">do_wyplaty : <?PHP echo $s["agregacja"]["do_wyplaty"]; ?> zł</div>
                    <div class="bg-primary px-4 py-2">obciazenie : <?PHP echo $s["agregacja"]["obciazenie"]; ?> zł</div>
                    <div class="bg-primary px-4 py-2">brutto : <?PHP echo $s["agregacja"]["brutto"]; ?> zł</div>


                </div>



                <table id="pogladowa" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead class="btn-primary bg-primary">
                        <tr>
                            <th>pracownik</th>
                            <th>miesiac</th>
                            <th>data_wyplaty</th>
                            <th>brutto</th>
                            <th>zus_pracownik</th>
                            <th>zus_pracodawca</th>
                            <th>zus_lacznie</th>
                            <th>do_wyplaty</th>
                            <th>obciazenie</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?PHP
                        foreach ($s["wartosci"] as $w) {
                            echo "<tr>"
                            . "<td>" . $w['pracownik'] . "</td>"
                            . "<td>" . $w['miesiac'] . "</td>"
                            . "<td>" . $w['data_wyplaty'] . "</td>"
                            . "<td>" . $w['brutto'] . "</td>"
                            . "<td>" . $w['zus_pracownik'] . "</td>"
                            . "<td>" . $w['zus_pracodawca'] . "</td>"
                            . "<td>" . $w['zus_lacznie'] . "</td>"
                            . "<td>" . $w['do_wyplaty'] . "</td>"
                            . "<td>" . $w['obciazenie'] . "</td>"
                            . "</tr>";
                        }
                        ?>
                    </tbody>
                </table>

            </div>


        </div>
    </div>
    </div>

    </div>

    <div id="progress">0%</div>
<?PHP } ?>
<script type="text/javascript">
    $('#btn-reset').click(function () {
        $.ajax({
            xhr: function () {

                var xhr = new window.XMLHttpRequest();
                xhr.addEventListener("progress", function (e) {
                    console.log(e.currentTarget.response);
                    $("#progress").html(e.currentTarget.response);
                });
                return xhr;

            }
            , type: 'post'
            , cache: false
            , url: "<?PHP echo base_url() . "EReader/dodaj"; ?>"
        });

    });

</script>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.material.min.js"></script>
<script>



    $('#pogladowa').DataTable({
        "sDom": '<"row view-filter"<"col-sm-12"<"clearfix">>><"row view-pager"<"col-sm-12"l<"text-center"ip>>>t',
        responsive: true,
        "language": {
            "url": "http://cdn.datatables.net/plug-ins/1.10.15/i18n/Polish.json"
        },
    });
</script>
