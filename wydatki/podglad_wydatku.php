<div class="doc page-layout simple full-width">

    <!-- HEADER -->
    <div class="light-fg d-flex flex-column justify-content-center justify-content-lg-end p-6 pt-3"
         style="background-color: #4fc3f7 !important;">
        <div
                class="flex-column row flex-lg-row align-items-center align-items-lg-end no-gutters justify-content-between">
            <div class="user-info flex-column row flex-lg-row no-gutters align-items-center">


                <div class="name h2 my-6">Przegląd wydatku - <?PHP if ($w->pro_forma) { ?>
                        <img class="img-ref" src="<?PHP echo base_url("assets/images/proforma.png"); ?>" alt="proforma">
                    <?PHP } ?> <?PHP echo $w->dokument; ?></div>


            </div>

            <div class="actions row align-items-center no-gutters">
                <!--  <?PHP echo ($w->status == 2) ? "<a class=\"btn btn-secondary\" href=\"#\"><i class=\"icon-lock\"></i> Modyfikacja</a>" : "<a class=\"btn btn-secondary\" href=\"" . base_url() . "Wydatki/Edycja/" . $w->id_wydatku . "\"><i class=\"icon-settings\"></i> Modyfikacja</a>"; ?>
           --> <?PHP echo "<a class=\"btn btn-secondary\" href=\"" . base_url() . "Wydatki/Edycja/" . $w->id_wydatku . "\"><i class=\"icon-settings\"></i> Modyfikacja</a>"; ?>
            </div>

        </div>
    </div>
    <!-- / HEADER -->

    <div class="page-content row p-12">


        <div class="col-9 col-md-9">
            <?PHP
            if (!empty($w->zwroc_in)) {
                echo '<div class="alert alert-danger h6">
                              <strong>Uwaga!</strong> <img src="' . base_url('assets/images/refund.png') . '"
                                                     alt="zwrot"> Niniejszy wydatek został opłacony przez pracownika, opłacając ten wydatek należy rozliczyć kwotę ' . $w->pozostala_kwota . ' względem ' . $w->zwroc_in . '
                          </div><br>';
            }


            if ($w->pro_forma == 1) {
                echo '<div class="alert alert-danger h6">
                              <strong>Uwaga!</strong> <img src="' . base_url('assets/images/proforma.png') . '"
                                                     alt="zwrot">';

                if(empty($proforma->id)){
                    echo " Niniejszy wydatek jest pro formą, należy pamiętać aby dodać finalną fakturę do systemu w celu zamknięcia wydatku ";
                }else{
                    echo " Niniejszy wydatek posiada już podpiętą fakturę do pro formy, załączenie nowej faktury nadpisze starą ";
                }

                echo '<button type="button" id="btn-attach-fv" data-toggle="modal"
                                data-target="#attach-fv" class="btn btn bg-green more"> Załącz
                        </button>
                          </div><br>';
            }
            ?>
            <div class="profile-box info-box contact card mb-4">

                <header class="h6 row no-gutters align-items-center justify-content-between bg-primary text-auto p-4">
                    <div class="title"><?PHP echo $w->dokument; ?></div>
                    <?PHP if ($w->pozostala_kwota > 0) { ?>
                        <button type="button" id="btn-reset" data-toggle="modal"
                                data-target="#oplacModal" class="btn btn bg-green more">Opłać
                        </button>
                    <?PHP } ?>
                </header>

                <div class="content p-4">

                    <?PHP
                    $pOpl = (100 * $w->zaplacona_kwota) / $w->kwota_brutto;
                    $pZos = 100 - $pOpl;
                    ?>

                    <div class="info-line mb-6">

                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: <?PHP echo $pOpl; ?>%"
                                 aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                Opłacone <?PHP echo $w->zaplacona_kwota; ?> zł
                            </div>
                            <div class="progress-bar bg-danger  progress-bar-striped" role="progressbar"
                                 style="width: <?PHP echo $pZos; ?>%" aria-valuenow="20" aria-valuemin="0"
                                 aria-valuemax="100">Pozostało <?PHP echo $w->pozostala_kwota; ?> zł
                            </div>
                        </div>
                    </div>
                    <div class="info-line mb-6"></div>

                </div>
            </div>


            <!-- rozbita faktura -->

            <div class="profile-box info-box contact card mb-4">

                <header class="h6 bg-primary text-auto p-4">
                    <div class="title">Pozycje faktury <?PHP echo $w->dokument; ?></div>
                </header>

                <div class="content p-4">


                    <div class="info-line mb-6">
                        <div id="accordion" role="tablist">
                            <?PHP
                            $i = 0;
                            foreach ($rozbicie as $r) {
                                $i++;
                                ?>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingOne">
                                        <h5 class="m-1">
                                            <div class="row">
                                                <div clas="col-lg-6 p-2">
                                                    <?php echo $r->knazw; ?>
                                                </div>
                                                <div clas="col-lg-6" style="margin-left: auto;">

                                                    <button type="button"
                                                            class="btn btn-md btn-primary btn-flat margin">
                                                        VAT <?PHP echo $r->vat . " %"; ?><?PHP
                                                        if ($r->vat == "0") {
                                                            echo " (  $r->typ_vat )";
                                                        }
                                                        ?></button>
                                                    <button type="button"
                                                            class="btn btn-md btn-primary btn-flat margin">
                                                        Brutto <?PHP echo $r->brutto; ?> zł
                                                    </button>
                                                    <button type="button"
                                                            class="btn btn-md btn-primary btn-flat margin">
                                                        Netto <?PHP echo $r->netto; ?> zł
                                                    </button>
                                                    <button type="button"
                                                            class="btn btn-md btn-primary btn-flat margin">Wartość
                                                        VAT <?PHP echo $r->wartosc_vat; ?> zł
                                                    </button>

                                                </div>
                                            </div>
                                        </h5>
                                    </div>
                                </div>


                            <?PHP } ?>
                        </div>
                    </div>
                    <!-- end -->
                </div>
            </div>


            <?PHP if (!empty($w->cel_zakupu)) { ?>
                <div class="profile-box info-box contact card mb-4">

                    <header class="h6 bg-primary text-auto p-4">
                        <div class="title">Opis</div>
                    </header>


                    <div class="content p-4"><?PHP echo $w->cel_zakupu; ?>
                    </div>


                </div>
            <?PHP } ?>
            <!--s -->
            <?PHP
            if(!empty($proforma->id)){
                $path = $proforma->path;
            }else{
                if(!empty($w->path))
                {
                    $path = $w->path;
                }else{
                    $path ="";
                }
            }
            if (!empty($w->path)) {
                $path_parts = pathinfo(site_url() . '' . $w->path);
                ?>
                <div class="profile-box info-box contact card mb-4" style="height:400px">

                    <header class="h6 row no-gutters align-items-center justify-content-between bg-primary text-auto p-4">
                        <div class="title">Podgląd <?PHP if(!empty($proforma->id)){ echo "pro formy"; }else { echo "faktury";} ?> <?PHP echo $w->dokument; ?>
                        </div>
                        <a href="<?PHP echo site_url() . '' . $w->path; ?>" class="btn btn-secondary more fuse-ripple-ready">Podgląd
                        </a>
                    </header>

                    <?PHP
                    if ($path_parts['extension'] != "pdf") {
                        echo '<div style="margin: 0px; padding: 0px;height:100%;width:100%;">';
                        echo "<img style=\"height: 100%; width: 100%;\" src='" . site_url() . "" . $w->path . "'></div>";
                    } else {
                        ?>
                        <iframe src="https://docs.google.com/viewer?url=<?PHP echo site_url() . '' . $w->path; ?>&embedded=true"
                                style="width:100%; height:100%;" frameborder="0"></iframe>

                    <?PHP } ?>
                </div>
            <?PHP } ?>

            <?PHP
            if (!empty($w->prof_skan)) {
                $path_parts = pathinfo(site_url() . '' . $path);
                ?>
                <div class="profile-box info-box contact card mb-4" style="height:400px">

                    <header class="h6 row no-gutters align-items-center justify-content-between bg-primary text-auto p-4">
                        <div class="title">Podgląd faktury <?PHP echo $w->dokument; ?></div>
                        <a href="<?PHP echo site_url() . '' . $path; ?>" class="btn btn-secondary more fuse-ripple-ready">Podgląd
                        </a>
                    </header>

                    <?PHP
                    if ($path_parts['extension'] != "pdf") {
                        echo '<div style="margin: 0px; padding: 0px;height:100%;width:100%;">';
                        echo "<img style=\"height: 100%; width: 100%;\" src='" . site_url() . "" . $path . "'></div>";
                    } else {
                        ?>
                        <iframe src="https://docs.google.com/viewer?url=<?PHP echo site_url() . '' . $path; ?>&embedded=true"
                                style="width:100%; height:100%;" frameborder="0"></iframe>

                    <?PHP } ?>
                </div>
            <?PHP } ?>

            <script src="https://code.highcharts.com/highcharts.src.js"></script>
            <script src="https://code.highcharts.com/highcharts-more.js"></script>
            <div class="profile-box info-box contact card mb-4">


                <?PHP


                $wykres = $this->Statistic_model->StatystykiPracownika_Wartosci($w->id_kupujacy);

                $pola = array();
                $wartosci = array();
                if (!empty($wykres)) {
                    foreach ($wykres as $wp) {
                        $pola[] = $wp['Category'];
                        $wartosci[] = $wp['ThisMonth'];
                        $wartosci_last[] = $wp['LastMonth'];
                        $wartosci_blast[] = $wp['PrevMonth'];
                    }
                }
                ?>

                <header class="h6 row no-gutters align-items-center justify-content-between bg-primary text-auto p-4">
                    <div class="title">Statystyka nabywcy</div>

                </header>

                <div class="content p-4">
                    <?PHP echo $this->Statistic_model->polygonWydatkiKategorie("Wydatki pracownika  " . $w->kupujacy, $pola, $wartosci, $wartosci_last, $wartosci_blast, "Wydatki") ?>
                </div>
            </div>
            <div class="profile-box info-box contact card mb-4">

                <header class="h6 bg-primary text-auto p-4">
                    <div class="title">Historia zmian</div>
                </header>
                <div class="content p-4">
                    <table id="table" class="table table-striped table-bordered dataTable no-footer dtr-inline"
                           cellspacing="0" width="100%" aria-describedby="table_info" role="grid" style="width: 100%;">
                        <thead class="btn-primary bg-primary">
                        <tr role="row">
                            <th>Zmieniona wartość</th>
                            <th>Poprzednia wartość</th>
                            <th>Nowa wartość</th>
                            <th>Data modyfikacji</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?PHP
                        if (!empty($h)) {
                            foreach ($h as $s) {
                                ?>
                                <tr>
                                    <td><?PHP echo $s->col_name; ?></td>
                                    <td><?PHP echo $s->pole_stare; ?></td>
                                    <td><?PHP echo $s->pole_nowe; ?></td>
                                    <td><?PHP echo $s->dokonano; ?></td>
                                </tr>
                                <?PHP
                            }
                        } else {
                            echo "<tr class=\"odd text-center\"><td colspan=\"4\">Brak zmian</td>";
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>


        <div class="about-sidebar col-12 col-md-5 col-xl-3">


            <div class="profile-box groups card mb-4">

                <header
                        class="row no-gutters align-items-center justify-content-between bg-primary text-auto p-4">
                    <div class="title h6">Informacje</div>
                </header>

                <div class="content p-4">

                    <?PHP if ($w->pro_forma) { ?>
                        <div class="group row no-gutters align-items-center justify-content-between mb-4">

                            <div class="col-md-6">
                                Rodzaj faktury
                            </div>
                            <div class="col-md-6 pull-right">
                                <img class="img-ref" src="<?PHP echo base_url("assets/images/proforma.png"); ?>"
                                     alt="proforma"> Pro forma
                            </div>
                        </div>

                    <?PHP } ?>


                    <div class="group row no-gutters align-items-center justify-content-between mb-4">

                        <div class="col-md-6">
                            Metoda płatności
                        </div>
                        <div class="col-md-6 pull-right">
                            <?PHP echo Wydatki_model::metoda_ikona($w->metoda_platnosci); ?>
                        </div>
                    </div>
                    <div class="group row no-gutters align-items-center justify-content-between mb-4">

                        <div class="col-md-6">
                            Kategoria
                        </div>
                        <div class="col-md-6 pull-right">
                            <?PHP echo $w->knazwa; ?>
                        </div>
                    </div>
                    <div class="group row no-gutters align-items-center justify-content-between mb-4">

                        <div class="col-md-6">
                            Rejon
                        </div>
                        <div class="col-md-6 pull-right">
                            <?PHP echo $w->rejont; ?>
                        </div>
                    </div>
                    <div class="group row no-gutters align-items-center justify-content-between mb-4">

                        <div class="col-md-6">
                            Priorytet
                        </div>
                        <div class="col-md-6 pull-right">
                            <?PHP echo Wydatki_model::priorytet_to_icon($w->priorytet); ?>
                        </div>
                    </div>
                    <div class="group row no-gutters align-items-center justify-content-between mb-4">

                        <div class="col-md-6">
                            Termin płatności
                        </div>
                        <div class="col-md-6 pull-right">
                            <?PHP
                            if (!$w->oplacono) {
                                echo $w->termin_platnosci . " ( " . Wydatki_model::termin_to_icon($w->ddif, $w->pozostala_kwota) . " )";
                            } else {
                                echo $w->termin_platnosci;
                            }
                            ?>
                        </div>
                    </div>

                    <?PHP if (!empty($auto->nr_rej)) { ?>


                        <div class="group row no-gutters align-items-center justify-content-between mb-4">

                            <div class="col-md-6">
                                Dotyczy pojazdu
                            </div>
                            <div class="col-md-6 pull-right">
                                <?PHP echo $auto->nr_rej; ?>
                            </div>
                        </div>
                        <div class="group row no-gutters align-items-center justify-content-between mb-4">

                            <div class="col-md-6">
                                Ilość litrów
                            </div>
                            <div class="col-md-6 pull-right">
                                <?PHP echo $auto->litry; ?>
                            </div>
                        </div>
                    <?PHP } ?>
                    <div class="group row no-gutters align-items-center justify-content-between mb-4">

                        <div class="col-md-6">
                            Data zakupu
                        </div>
                        <div class="col-md-6 pull-right">
                            <?PHP echo $w->utworzenie_platnosci; ?>
                        </div>
                    </div>
                    <?PHP if ($w->oplacono) { ?>
                        <div class="group row no-gutters align-items-center justify-content-between mb-4">

                            <div class="col-md-6">
                                Opłacono
                            </div>
                            <div class="col-md-6 pull-right">
                                <?PHP
                                if ($w->pdif < 0) {
                                    echo str_replace("-", "", $w->pdif) . " " . Wydatki_model::odmiana($w->pdif, 'dzień', 'dni', 'dni') . " po terminie";
                                } else {
                                    echo $w->pdif . " " . Wydatki_model::odmiana($w->pdif, 'dzień', 'dni', 'dni') . " przed terminem";
                                }
                                ?>
                            </div>
                        </div>
                    <?PHP } ?>
                    <?PHP if ($w->fk_kontrakt) { ?>
                        <div class="group row no-gutters align-items-center justify-content-between mb-4">

                            <div class="col-md-6">
                                Kontrakt
                            </div>
                            <div class="col-md-6 pull-right">
                                <?PHP echo $this->Kontrakt_model->get_kontrakt_by_id($w->fk_kontrakt); ?>
                            </div>
                        </div>
                    <?PHP }
                    if ($w->fk_narzecz) { ?>
                        <div class="group row no-gutters align-items-center justify-content-between mb-4">

                            <div class="col-md-6">
                                Na rzecz
                            </div>
                            <div class="col-md-6 pull-right">
                                <?PHP echo $this->Kontrahent_model->pokaz_kontrahenta($w->fk_narzecz)[0]->nazwa; ?>
                            </div>
                        </div>

                    <?PHP } ?>
                </div>
            </div>

            <!-- kontrahent -->
            <div class="profile-box groups card mb-4">

                <header
                        class="row no-gutters align-items-center justify-content-between bg-primary text-auto p-4">
                    <div class="title h6"><?PHP echo $w->kontrah; ?></div>
                </header>

                <div class="content p-4">

                    <div class="group row no-gutters align-items-center justify-content-between mb-4">

                        <div class="col-md-6">
                            Nip
                        </div>
                        <div class="col-md-6 pull-right">
                            <?PHP echo $w->nip; ?>
                        </div>
                    </div>
                    <div class="group row no-gutters align-items-center justify-content-between mb-4">

                        <div class="col-md-6">
                            Regon
                        </div>
                        <div class="col-md-6 pull-right">
                            <?PHP echo @$w->regon; ?>
                        </div>
                    </div>
                    <div class="group row no-gutters align-items-center justify-content-between mb-4">

                        <div class="col-md-6">
                            Krs
                        </div>
                        <div class="col-md-6 pull-right">
                            <?PHP echo @$w->krs; ?>
                        </div>
                    </div>
                    <div class="group row no-gutters align-items-center justify-content-between mb-4">

                        <div class="col-md-6">
                            Branża
                        </div>
                        <div class="col-md-6 pull-right">
                            <?PHP echo @$w->spec; ?>
                        </div>
                    </div>
                    <div class="group row no-gutters align-items-center justify-content-between mb-4">

                        <div class="col-md-6">
                            Konto
                        </div>
                        <div class="col-md-6 pull-right">
                            <?PHP echo @$w->konto; ?>
                        </div>
                    </div>
                    <div class="group row no-gutters align-items-center justify-content-between mb-4">

                        <div class="col-md-6">
                            Adres
                        </div>
                        <div class="col-md-6 pull-right">

                            <?PHP
                            $adres = $this->Adresy_model->pokaz_adres($w->fkaddress);
                            if (!empty($adres)) {
                                echo $adres->ulica . ", " . $adres->kod_pocztowy . " " . $adres->miasto;
                            }

                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- nabywca -->
            <div class="profile-box groups card mb-4">

                <header
                        class="row no-gutters align-items-center justify-content-between bg-primary text-auto p-4">
                    <div class="title h6">Nabywca</div>
                </header>

                <div class="content p-4">

                    <div class="group row no-gutters align-items-center justify-content-between mb-4">

                        <div class="col-md-6">
                            Kupił
                        </div>
                        <div class="col-md-6 pull-right">
                            <?PHP echo $w->kupujacy; ?>
                        </div>
                    </div>
                    <div class="group row no-gutters align-items-center justify-content-between mb-4">

                        <div class="col-md-6">
                            Telefon służbowy
                        </div>
                        <div class="col-md-6 pull-right">
                            <?PHP echo @$w->telefon_sluzbowy; ?>
                        </div>
                    </div>
                    <div class="group row no-gutters align-items-center justify-content-between mb-4">

                        <div class="col-md-6">
                            Telefon prywatny
                        </div>
                        <div class="col-md-6 pull-right">
                            <?PHP echo @$w->telefon_prywatny; ?>
                        </div>
                    </div>
                    <div class="group row no-gutters align-items-center justify-content-between mb-4">

                        <div class="col-md-6">
                            Konto
                        </div>
                        <div class="col-md-6 pull-right">
                            <?PHP echo @$w->pkonto; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="oplacModal" class="modal fade" tabindex="-1" role="dialog"
         aria-labelledby="oplacModal"
         aria-hidden="true">
        <div class="modal-dialog modal-lg ">
            <div class="modal-content">

                <div class="modal-header bg-green-400 text-white">
                    <h4 class="modal-title" id="myLargeModalLabel">Opłacenie faktury - <?PHP echo $w->dokument; ?></h4>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid bd-example-row">

                        <form id="nowaOplata" name="nowaOplata" method="post">

                            <div class="profile-box info-box general card mb-4">

                                <header class="h6 bg-deep-purple-500 text-auto p-4">
                                    <div class="title">Pozostało <?PHP echo $w->pozostala_kwota; ?> zł do zapłaty</div>
                                </header>

                                <div class="content p-4">

                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label for="inputBrutto" class="col-form-label">Wartość brutto
                                                opłacona</label>
                                            <input type="text" class="form-control" name="inputBrutto" id="inputBrutto">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-5 col-xs-offset-3">
                                    <button type="submit" id="oplacCzesciowobtn"
                                            class="btn btn-primary fuse-ripple-ready">Opłać
                                    </button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cofnij</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- dynamic attach-fv -->
    <div id="attach-fv" class="modal fade" role="dialog"
         aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header bg-green-400 text-white">

                    <div class="row col-lg-12">
                        <div class="col-md-4 "><h4 class="modal-title" id="myLargeModalLabel">Załączanie faktury</h4>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="loader"></div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- dynamic attach-fv -->
</div>
</div>
<!-- / CONTENT -->
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.2.6/jquery.inputmask.bundle.min.js"></script>
<script>
    $(document).ready(function () {
        var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
        var $form = $("#nowaOplata");
        $("#attach-fv").on("show.bs.modal", function(e) {
            setTimeout(
                function () {
                    $.ajax({
                        url: '<?PHP echo base_url() . "Wydatki/zalacz_fv_modal/".$w->id_wydatku; ?>',
                        method: 'POST',
                        data: csrfName + "=" + csrfHash,
                        success: function (data) {
                            $("#attach-fv").find(".modal-body").html(data);
                        }
                    });

                }, 1000);
        });

        $(document).on('hidden.bs.modal', '#attach-fv', function () {
            $("#attach-fv > div > div > div.modal-body").html('<div class="loader"></div>');
            $("#attach-fv").removeData();

        });


        $("#inputBrutto").inputmask({alias: "currency", prefix: "Zł "});
        $("#oplacCzesciowobtn").click(function (e) {
                $.ajax({
                    url: '<?PHP echo base_url(); ?>Wydatki/Oplac',
                    method: 'POST',
                    data: $form.serialize() + "&" + csrfName + "=" + csrfHash + "&dot_platnosci  = <?PHP echo $w->id_platnosci; ?>",
                    success: function (data) {
                        $(this).closest('form').find("input[type=text]").val("");

                        csrfName = data.regen.csrfName;
                        csrfHash = data.regen.csrfHash;

                        if (data.response.status) {
                            if (data.response.message === "Dodano") {
                                $(this).closest('form').find("input[type=text]").val("");
                                $('#nowaOplata').trigger("reset");

                                setTimeout(
                                    function () {
                                        location.reload();
                                        $('#gridSystemModal').modal('hide');
                                    }, 500);

                            }

                        }
                        new PNotify({
                            text: data.response.message,
                            confirm: {
                                confirm: true,
                                buttons: [
                                    {
                                        text: 'Zamknij',
                                        addClass: 'btn btn-link',
                                        click: function (notice) {
                                            notice.remove();
                                        }
                                    },
                                    null
                                ]
                            },
                            buttons: {
                                closer: false,
                                sticker: false
                            },
                            animate: {
                                animate: true,
                                in_class: 'slideInDown',
                                out_class: 'slideOutUp'
                            },
                            addclass: 'md multiline action-on-bottom'
                        });

                    }
                });
                e.preventDefault();
            }
        );

    });
</script>