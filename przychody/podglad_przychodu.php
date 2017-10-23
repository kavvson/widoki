<div class="doc page-layout simple full-width">
    <!-- HEADER -->
    <div class="light-fg d-flex flex-column justify-content-center justify-content-lg-end p-6 pt-3"
         style="background-color: #4fc3f7 !important;">
        <div
                class="flex-column row flex-lg-row align-items-center align-items-lg-end no-gutters justify-content-between">
            <div class="user-info flex-column row flex-lg-row no-gutters align-items-center">


                <div class="name h2 my-6">Przegląd faktury - <?PHP echo $w->numer; ?></div>

            </div>


        </div>
    </div>
    <!-- / HEADER -->


    <div class="page-content row p-12">

        <!-- STANDARD ALERTS -->
        <div class="col-9 col-md-9">

            <div class="profile-box info-box contact card mb-4">

                <header class="h6 row no-gutters align-items-center justify-content-between bg-primary text-auto p-4">
                    <div class="title"><?PHP echo $w->numer; ?></div>

                    <?PHP if ($w->pozostala_kwota > 0) { ?>
                        <button type="button" id="btn-reset" data-toggle="modal"
                                data-target="#oplacModal" class="btn btn bg-green more">Zarejestruj płatność
                        </button>
                    <?PHP } ?>
                </header>

                <div class="content p-4">

                    <?PHP
                    $pOpl = (100 * $w->otrzymana_kwota) / $w->wartosc;
                    $pZos = 100 - $pOpl;
                    ?>

                    <div class="info-line mb-6">

                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: <?PHP echo $pOpl; ?>%"
                                 aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                Otrzymano <?PHP echo $w->otrzymana_kwota; ?> zł
                            </div>
                            <div class="progress-bar bg-danger  progress-bar-striped" role="progressbar"
                                 style="width: <?PHP echo $pZos; ?>%" aria-valuenow="20" aria-valuemin="0"
                                 aria-valuemax="100">Należność <?PHP echo $w->pozostala_kwota; ?> zł
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <div class="profile-box info-box contact card mb-4">

                <header class="h6 bg-primary text-auto p-4">
                    <div class="title">Udział pracowników w przychodzie</div>
                </header>
                <div class="content p-4">
                    <table id="table" class="table table-striped table-bordered dataTable no-footer dtr-inline"
                           cellspacing="0" width="100%" aria-describedby="table_info" role="grid" style="width: 100%;">
                        <thead class="btn-primary bg-primary">
                        <tr role="row">
                            <th>Pracownik</th>
                            <th>% Udziału</th>
                            <th>Kwota</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?PHP

                        if (!empty($prac)) {
                            foreach ($prac as $co) {
                                ?>
                                <tr>
                                    <td><?PHP echo $co->pracownik; ?></td>
                                    <td><?PHP echo $co->udzial; ?></td>
                                    <td><?PHP echo ($co->udzial / 100) * $co->wartosc; ?></td>
                                </tr>
                                <?PHP
                            }
                        } else {
                            echo "<tr class=\"odd text-center\"><td colspan=\"3\">Brak powiązanych pracowników</td>";
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="profile-box info-box contact card mb-4">

                <header class="h6 bg-primary text-auto p-4">
                    <div class="title">Otrzymane płatności do faktury <?PHP echo $w->numer; ?></div>
                </header>
                <div class="content p-4">
                    <table id="table" class="table table-striped table-bordered dataTable no-footer dtr-inline"
                           cellspacing="0" width="100%" aria-describedby="table_info" role="grid" style="width: 100%;">
                        <thead class="btn-primary bg-primary">
                        <tr role="row">
                            <th>Otrzymana kwota</th>
                            <th>Dodał</th>
                            <th>Data płatności</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?PHP
                        if (!empty($p)) {
                            foreach ($p as $pay) {
                                ?>
                                <tr>
                                    <td>
                                        <?PHP echo $pay->kwota_wplacona; ?> zł
                                    </td>
                                    <td>
                                        <?PHP echo $pay->wplacilu; ?>
                                    </td>
                                    <td>
                                        <?PHP echo $pay->datawplaty; ?>
                                    </td>
                                </tr>
                                <?PHP
                            }
                        } else {
                            echo "<tr class=\"odd text-center\"><td colspan=\"3\">Brak zarejestrowanych płatności</td>";
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="profile-box info-box contact card mb-4" style="height:400px">
                <header class="h6 row no-gutters align-items-center justify-content-between bg-primary text-auto p-4">
                    <div class="title">Podgląd faktury <?PHP echo $w->numer; ?></div>
                    <a href="<?PHP echo site_url() . 'Przychody/PodgladFaktury/' . $w->id_przychodu.'/duplikat';?>" class="btn btn-secondary more">Duplikat
                    </a>
                </header>

                <iframe src="<?PHP echo site_url() . 'Przychody/PodgladFaktury/' . $w->id_przychodu; ?>"
                        style="width:100%; height:100%;" frameborder="0"></iframe>


            </div>

            <!-- przeniesc do tab nav -->
            <div class="profile-box info-box contact card mb-4">

                <header class="h6 bg-primary text-auto p-4">
                    <div class="title">Historia zmian faktury</div>
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
                    <div class="title h6">Korekty faktury</div>
                    <div class="actions row align-items-center no-gutters">
                        <a class="btn btn-secondary" href="<?PHP echo base_url() . "Przychody/Korekta/" . $w->id_przychodu; ?>"><i
                                    class="icon-settings"></i> Dodaj</a>
                    </div>
                </header>

                <div class="content p-4">

                    <div class="group row no-gutters align-items-center justify-content-between mb-4">

                        <table id="table" class="table table-striped table-bordered dataTable no-footer dtr-inline"
                               cellspacing="0" width="100%">
                            <thead class="btn-primary bg-primary">
                            <tr>
                                <th width="80%">Nazwa korekty</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?PHP

                            foreach ($pobierz_korekty as $kor) {
                                if($kor['nazwa']){$nazwa = $kor['nazwa'];}else{$nazwa = "Korekta-".$kor['nrkorekty'];};
                                ?>

                                <?PHP
                                echo "<tr><td><a href='" . base_url() . "Przychody/PodgladFaktury/".$w->id_przychodu."/" . $kor['nrkorekty'] . "'>" . $nazwa . "</a></td></tr>";
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="profile-box groups card mb-4">

                <header
                        class="row no-gutters align-items-center justify-content-between bg-primary text-auto p-4">
                    <div class="title h6">Informacje</div>
                </header>

                <div class="content p-4">

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

                    <div class="group row no-gutters align-items-center justify-content-between mb-4">

                        <div class="col-md-6">
                            Data wystawienia
                        </div>
                        <div class="col-md-6 pull-right">
                            <?PHP echo $w->z_dnia; ?>
                        </div>
                    </div>
                    <div class="group row no-gutters align-items-center justify-content-between mb-4">

                        <div class="col-md-6">
                            Data sprzedaży
                        </div>
                        <div class="col-md-6 pull-right">
                            <?PHP echo $w->sprzedano; ?>
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
                </div>
            </div>


            <!-- kontrahent -->
            <div class="profile-box groups card mb-4">

                <header
                        class="row no-gutters align-items-center justify-content-between bg-primary text-auto p-4">
                    <div class="title h6">Nabywca</div>
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
                </div>
            </div>
            <?PHP
            $zalegle_zgloszenia = $this->Statistic_model->Ilezostalodootrzymania($w->fk_kontrahent);
            $last_key = end((array_keys($zalegle_zgloszenia)));

            if ($zalegle_zgloszenia[0]["pozostala_kwota"] && count($zalegle_zgloszenia) > 2) {
                ?>

                <div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">Uwaga! Zaległe płatności <?PHP echo $w->kontrah; ?>
                        wynoszą <?PHP echo $zalegle_zgloszenia[$last_key]["pozostala_kwota"]; ?> zł</h4>
                    <a class="btn btn bg-primary more text-white" href="<?PHP echo base_url();?>Przychody/Monit/<?PHP echo$w->fk_kontrahent;?>">Generuj monit</a>
                    <p>
                    <table id="table" class="table table-striped table-bordered dataTable no-footer dtr-inline"
                           cellspacing="0" width="100%">
                        <thead class="btn-primary bg-primary">
                        <tr>
                            <th width="80%">Numer wydatku</th>
                            <th width="10%">Pozostała kwota</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?PHP
                        unset($zalegle_zgloszenia[$last_key]);
                        foreach ($zalegle_zgloszenia as $a) {
                            ?>

                            <?PHP
                            echo "<tr><td><a href='" . base_url() . "Przychody/Podglad/" . $a['id_platnosci'] . "'>" . $a['numer'] . '</a></td><td>' . $a['pozostala_kwota'] . "</td></tr>";
                        }
                        ?>
                        </tbody>
                    </table>
                    </p>

                </div>
            <?PHP } ?>
        </div>
    </div>


    <div id="oplacModal" class="modal fade" tabindex="-1" role="dialog"
         aria-labelledby="oplacModal"
         aria-hidden="true">
        <div class="modal-dialog modal-lg ">
            <div class="modal-content">

                <div class="modal-header bg-green-400 text-white">
                    <h4 class="modal-title" id="myLargeModalLabel">Otrzymana kwota do faktury
                        - <?PHP echo $w->numer; ?></h4>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid bd-example-row">

                        <form id="nowaOplata" name="nowaOplata" method="post">

                            <div class="profile-box info-box general card mb-4">

                                <header class="h6 bg-deep-purple-500 text-auto p-4">
                                    <div class="title">Pozostała należność <?PHP echo $w->pozostala_kwota; ?> zł</div>
                                </header>

                                <div class="content p-4">

                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label for="inputBrutto" class="col-form-label">Wartość brutto
                                                wpłacona</label>
                                            <input type="text" class="form-control" name="inputBrutto" id="inputBrutto">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-5 col-xs-offset-3">
                                    <button type="submit" id="oplacCzesciowobtn"
                                            class="btn btn-primary fuse-ripple-ready">Dodaj płatność
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

        $("#inputBrutto").inputmask({alias: "currency", prefix: "Zł "});
        $("#oplacCzesciowobtn").click(function (e) {
                $.ajax({
                    url: '<?PHP echo base_url(); ?>Przychody/Oplac',
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