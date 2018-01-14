<div class="row">

    <?PHP

    function pp($val)
    {
        return number_format($val, 2, ',', ' ');
    }

    $wykres = $this->Statistic_model->StatystykiPracownika_Wartosci_Place($p['id_pracownika']);
    $pwartosci = $this->Statistic_model->s_pracownicy($p['id_pracownika']);


    $pola = array();
    $wartosci = array();
    if (!empty($wykres)) {
        foreach ($wykres as $wp) {
            $pola[] = $wp['Category'];
            $wartosci[] = $wp['ThisMonth'];
        }
    }


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
                <td>UoP</td>
                <td><?PHP echo pp($pwartosci['wyniki'][$p['id_pracownika']]['p_am']); ?></td>
                <td></td>
            </tr>
            <tr>
                <td>UZ</td>
                <td><?PHP echo  pp($pwartosci['wyniki'][$p['id_pracownika']]['a_am']); ?></td>
                <td></td>
            </tr>
            <tr>
                <td>Premie</td>
                <td><?PHP echo pp($pwartosci['wyniki'][$p['id_pracownika']]['extra_cost']); ?></td>
                <td></td>
            </tr>
            <tr>
                <td>Do ręki</td>
                <td><?PHP echo pp($pwartosci['wyniki'][$p['id_pracownika']]['to_hand_cost']); ?></td>
                <td></td>
            </tr>
            <tr>
                <td>Suma wydatków</td>
                <td><?PHP echo pp($pwartosci['wyniki'][$p['id_pracownika']]['expense_cost']); ?></td>
                <td></td>
            </tr>
            <tr>
                <td>Udział w przychodzie</td>
                <td><?PHP echo pp($pwartosci['wyniki'][$p['id_pracownika']]['udzialy_kwota']); ?></td>
                <td></td>
            </tr>
            <tr>
                <td>Zus łącznie UoP</td>
                <td><?PHP echo pp($pwartosci['wyniki'][$p['id_pracownika']]['incost']); ?></td>
                <td></td>
            </tr>
            <tr>
                <td>Zus łącznie UoP</td>
                <td><?PHP echo pp($pwartosci['wyniki'][$p['id_pracownika']]['incost']); ?></td>
                <td></td>
            </tr>
            <tr>
                <td>Koszt pracodawcy</td>
                <td><?PHP echo pp($pwartosci['wyniki'][$p['id_pracownika']]['koszty_pracodawcy']); ?></td>
                <td></td>
            </tr>

            </tbody>
        </table>

        <style>
            .modal-backdrop {
                z-index: -1;
                margin-top: 50px;
                background-color: transparent;
            }
        </style>


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

