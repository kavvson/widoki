<script>
    $("#oplacGotowke_f").formValidation({
        framework: "bootstrap",
        icon: {
            valid: "glyphicon glyphicon-ok",
            invalid: "glyphicon glyphicon-remove",
            validating: "glyphicon glyphicon-refresh"
        },
        fields: {
            cf_oplac_gotowka: {validators: {notEmpty: {message: "Pole jest wymagane"}}},
        }
    }).on("success.form.fv", function (e) {
        var a = $(e.target);
        a.data("formValidation");
        e.preventDefault(), $.ajax({
            url: "<?PHP echo base_url();?>Pracownicy/RozliczGotowke/<?PHP echo $p['id_pracownika'];?>",
            method: "POST",
            data: a.serialize() + "&" + csrfName2 + "=" + csrfHash2 + "&mp=" + $('#month_picker').val() + "&yp=" + $('#year_picker').val(),
            success: function (e) {
                $(this).closest("form").find("input[type=text]").val(""), csrfName2 = e.regen.csrfName, csrfHash2 = e.regen.csrfHash, e.response.status && ($(this).closest("form").find("input[type=text]").val(""), $("#dodajDelegacje_f").data("formValidation").resetForm(), $("#dodajDelegacje_f").trigger("reset"), location.reload()), swal("Komunikat!", e.response.message, "info")
            }
        })
    });
    $("#oplacPrzelew_f").formValidation({
        framework: "bootstrap",
        icon: {
            valid: "glyphicon glyphicon-ok",
            invalid: "glyphicon glyphicon-remove",
            validating: "glyphicon glyphicon-refresh"
        },
        fields: {
            cf_oplac_przelew: {validators: {notEmpty: {message: "Pole jest wymagane"}}},
        }
    }).on("success.form.fv", function (e) {
        var a = $(e.target);
        a.data("formValidation");
        e.preventDefault(),
            $.ajax({
                url: "<?PHP echo base_url();?>Pracownicy/RozliczPrzelew/<?PHP echo $p['id_pracownika'];?>",
                method: "POST",
                data: a.serialize() + "&" + csrfName2 + "=" + csrfHash2 + "&mp=" + $('#month_picker').val() + "&yp=" + $('#year_picker').val(),
                success: function (e) {
                    $(this).closest("form").find("input[type=text]").val(""), csrfName2 = e.regen.csrfName, csrfHash2 = e.regen.csrfHash, e.response.status && ($(this).closest("form").find("input[type=text]").val(""), $("#dodajDelegacje_f").data("formValidation").resetForm(), $("#dodajDelegacje_f").trigger("reset"), location.reload()), swal("Komunikat!", e.response.message, "info")
                }
            })
    });
</script>
<div class="row">
    <?PHP
    $wykres = $this->Statistic_model->StatystykiPracownika_Wartosci_Place($p['id_pracownika']);

    $pola = array();
    $wartosci = array();
    if (!empty($wykres)) {
        foreach ($wykres as $wp) {
            $pola[] = $wp['Category'];
            $wartosci[] = $wp['ThisMonth'];
            // $wartosci_last[] = $wp['LastMonth'];
            //$wartosci_blast[] = $wp['PrevMonth'];
        }
    }

    $place = $this->pracownicy->Place_raport($p['id_pracownika'])[0];
    $delegacje = $this->pracownicy->Delegacje_raport($p['id_pracownika'])[0];
    $umowy = $this->pracownicy->Umowy_raport($p['id_pracownika'])[0];
    $premie = $this->pracownicy->Premie_raport($p['id_pracownika'])[0];

    $doreki = $this->pracownicy->Doreki_raport($p['id_pracownika'])[0];

    // var_dump($umowy);


    $placekwota = 0;
    $placezus_pracownik = 0;
    $placezus_pracodawca = 0;

    $delekwota = 0;

    $umowykwota = 0;
    $umowykwotazus_pracownik = 0;
    $umowykwotazus_pracodawca = 0;


    $premiekwota = 0;

    $dorekikwota = 0;
    $kosztpracodawcy = 0;
    $obrot = 0;
    $nareke = 0;

    if (!empty($doreki->kwota)) {
        $dorekikwota = $doreki->kwota;
    }
    if (!empty($umowy->kwota)) {
        $umowykwota = $umowy->kwota;
        $umowykwotazus_pracownik = $umowy->zus_pracownik;
        $umowykwotazus_pracodawca = $umowy->zus_pracodawca;
    }
    if (!empty($premie->kwota)) {
        $premiekwota = $premie->kwota;
    }
    if (!empty($place->kwota)) {
        $placekwota = $place->kwota;
        $placezus_pracownik = $place->zus_pracownik;
        $placezus_pracodawca = $place->zus_pracodawca;
    }
    if (!empty($delegacje->kwota)) {
        $delekwota = $delegacje->kwota;
    }
    $totalzuspracownik = bcadd($placezus_pracownik, $umowykwotazus_pracownik, 2);
    $totalzuspracodawca = bcadd($placezus_pracodawca, $umowykwotazus_pracodawca, 2);

    $kosztpracodawcy = bcadd($placekwota, $umowykwota, 2);
    $kosztpracodawcy = bcadd($kosztpracodawcy, $delekwota, 2);
    $kosztpracodawcy = bcadd($kosztpracodawcy, $premiekwota, 2);
    $kosztpracodawcy = bcadd($kosztpracodawcy, $dorekikwota, 2);

    $obrot = bcadd($kosztpracodawcy, array_sum($wartosci), 2);

    $nareke = bcsub($placekwota, bcadd($totalzuspracownik, $totalzuspracodawca, 2));
    $nareke = bcadd($nareke, $umowykwota, 2);
    $nareke = bcadd($nareke, $delekwota, 2);
    $nareke = bcadd($nareke, $premiekwota, 2);
    $nareke = bcadd($nareke, $dorekikwota, 2);

    $oplaconeGotowka = $this->pracownicy->PobierzOplacone($p['id_pracownika'], 1);
    $oplaconePrzelew = $this->pracownicy->PobierzOplacone($p['id_pracownika'], 2);

?>
    <link href="https://cdn.datatables.net/1.10.15/css/dataTables.material.min.css" rel="stylesheet">
    <div class="about col-12 col-md-7 col-xl-9 dyn">

        <table class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead class="btn-primary bg-primary">
            <th>Pozycja</th>
            <th>Wartość</th>
            <th>Czynności</th>
            </thead>
            <tbody>
            <tr>
                <td>Płaca zasadnicza</td>
                <td><?PHP echo $placekwota; ?></td>
                <td></td>
            </tr>
            <tr>
                <td>Delegacje</td>
                <td><?PHP echo $delekwota; ?></td>
                <td></td>
            </tr>
            <tr>
                <td>Premie</td>
                <td><?PHP echo $premiekwota; ?></td>
                <td></td>
            </tr>
            <tr>
                <td>Do ręki</td>
                <td><?PHP echo $dorekikwota; ?></td>
                <td></td>
            </tr>
            <tr>
                <td>Na rękę</td>
                <td><?PHP echo $nareke; ?></td>
                <td></td>
            </tr>
            <tr>
                <td>Suma wydatków</td>
                <td><?PHP echo array_sum($wartosci); ?></td>
                <td></td>
            </tr>
            <tr>
                <td>Zus pracownik</td>
                <td><?PHP echo $totalzuspracownik; ?></td>
                <td></td>
            </tr>
            <tr>
                <td>Zus pracodawca</td>
                <td><?PHP echo $totalzuspracodawca; ?></td>
                <td></td>
            </tr>
            <tr>
                <td>Zus łącznie</td>
                <td><?PHP echo bcadd($placezus_pracodawca, $placezus_pracownik, 2); ?></td>
                <td></td>
            </tr>
            <tr>
                <td>Koszt pracodawcy</td>
                <td><?PHP echo $kosztpracodawcy; ?></td>
                <td></td>
            </tr>
            <tr>
                <td>Obrót</td>
                <td><?PHP echo $obrot; ?></td>
                <td></td>
            </tr>
            <tr>
                <td>Gotówka</td>
                <td><?PHP echo $oplaconeGotowka; ?></td>
                <td>
                    <button type="button" data-toggle="modal" data-target="#oplacGotowke">Opłać</button>
                </td>
            </tr>
            <tr>
                <td>Przelew</td>
                <td><?PHP echo $oplaconePrzelew; ?></td>
                <td>
                    <button type="button" data-toggle="modal" data-target="#oplacPrzelew">Opłać</button>
                </td>
            </tr>
            </tbody>
        </table>
        <script>
            $("#cf_oplac_gotowka,#cf_oplac_przelew").inputmask({alias: "currency", prefix: "Zł "});
        </script>
        <style>
            .modal-backdrop {
                z-index: -1;
                margin-top: 50px;
                background-color: transparent;
            }
        </style>

        <div id="oplacPrzelew" class="modal fade" role="dialog" style="margin-top: 60px;"
             aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-header bg-green-400 text-white"><h4 class="modal-title" id="myLargeModalLabel">Opłać

                </div>
                <div class="modal-content">

                    <div class="modal-body">
                        <form id="oplacPrzelew_f" name="dodajDelegacje_f" method="post">
                            <div class="row">
                                <div class="col-lg-12">

                                    <div class="profile-box info-box contact card mb-4">

                                        <header class="h6 bg-primary text-auto p-4">
                                            <div class="title">Opłać - przelew</div>
                                        </header>

                                        <div class="content p-4">
                                            <div class="row">

                                                <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-12">
                                                    <label for="regular1" class="control-label">Kwota</label>
                                                    <input type="text" name="cf_oplac_przelew" id="cf_oplac_przelew"
                                                           class="form-control" value="<?PHP echo $oplaconePrzelew; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-5 col-xs-offset-3">
                                    <button type="submit" class="btn btn-primary fuse-ripple-ready">Opłać</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Zakmnij</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>

        <div id="oplacGotowke" class="modal fade" role="dialog" style="margin-top: 60px;"
             aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-header bg-green-400 text-white"><h4 class="modal-title" id="myLargeModalLabel">Opłać

                </div>
                <div class="modal-content">

                    <div class="modal-body">
                        <form id="oplacGotowke_f" name="dodajDelegacje_f" method="post">
                            <div class="row">
                                <div class="col-lg-12">

                                    <div class="profile-box info-box contact card mb-4">

                                        <header class="h6 bg-primary text-auto p-4">
                                            <div class="title">Opłać - gotówka</div>
                                        </header>

                                        <div class="content p-4">
                                            <div class="row">

                                                <div class="form-group pmd-textfield pmd-textfield-floating-label col-sm-12">
                                                    <label for="regular1" class="control-label">Kwota</label>
                                                    <input type="text" name="cf_oplac_gotowka" id="cf_oplac_gotowka"
                                                           class="form-control" value="<?PHP echo $oplaconeGotowka; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-5 col-xs-offset-3">
                                    <button type="submit" class="btn btn-primary fuse-ripple-ready">Opłać</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Zakmnij</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>

        <div class="profile-box info-box general card mb-4">

            <header class="h6 bg-primary text-auto p-4">
                <div class="title">Podstawowe informacje</div>
            </header>

            <div class="content p-4">
                <div class="form-group row">
                    <label for="inputDokument" class="col-sm-4 col-form-label">Pełna nazwa</label>
                    <div class="col-sm-8">
                        <?PHP echo $p['imie'] . " " . $p['nazwisko']; ?>
                    </div>
                </div>

                <?PHP echo $this->Statistic_model->polygonWydatkiKategorie("Wydatki", $pola, $wartosci, null, null, "Wydatki", TRUE) ?>

            </div>
        </div>


    </div>


    <div class="about-sidebar col-12 col-md-5 col-xl-3">

        <div class="profile-box info-box work card mb-4">

            <header class="h6 bg-primary text-auto p-4">
                <div class="title">Dodatkowe informacje</div>
            </header>

            <div class="content p-4">

                <div class="form-group row">
                    <label for="inputDokument" class="col-sm-4 col-form-label">Rejon</label>
                    <div class="col-sm-8">
                        <?PHP echo (empty($p['nazwa'])) ? "Nie określono" : $p['nazwa']; ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputDokument" class="col-sm-4 col-form-label">Numer konta</label>
                    <div class="col-sm-8">
                        <?PHP echo (empty($p['konto'])) ? "Nie podano" : $p['konto']; ?>
                    </div>
                </div>

            </div>
        </div>

        <?PHP if ($p['fk_adres']) { ?>
            <div class="profile-box info-box contact card mb-4">

                <header class="h6 bg-primary text-auto p-4">
                    <div class="title">Kontakt</div>
                </header>

                <div class="content p-4">
                    <div class="form-group row">
                        <label for="inputDokument" class="col-sm-4 col-form-label">Adres</label>
                        <div class="col-sm-8">
                            <?PHP echo $p['ulica']; ?>, <?PHP echo $p['kod_pocztowy']; ?> <?PHP echo $p['miasto']; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputDokument" class="col-sm-4 col-form-label">Telefon służbowy</label>
                        <div class="col-sm-8">
                            <?PHP echo $p['telefon_sluzbowy']; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputDokument" class="col-sm-4 col-form-label">Telefon prywatny</label>
                        <div class="col-sm-8">
                            <?PHP echo $p['telefon_prywatny']; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?PHP } ?>


    </div>
</div>

