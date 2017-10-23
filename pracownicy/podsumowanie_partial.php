<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.material.min.js"></script>
<script>
    $('#table').DataTable({
        responsive: true,
        "language": {
            "url": "http://cdn.datatables.net/plug-ins/1.10.15/i18n/Polish.json"
        },
    });

</script>
<table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead class="btn-primary bg-primary">
    <tr>
        <th>Pracownik</th>
        <th>Płaca zasadnicza</th>
        <th>Umowy</th>
        <th>Delegacje</th>
        <th>Premie</th>
        <th>Do ręki</th>
        <th>Na rękę</th>
        <th>Suma wydatków</th>
        <th>Potrącenia</th>


        <th>Zus pracownik</th>
        <th>Zus pracodawca</th>
        <th>Zus łącznie</th>
        <th>Koszt pracodawcy</th>
        <th>Obrót</th>
        <th>Gotówka</th>
        <th>Przelew</th>
        <th>Opcje</th>
    </tr>
    </thead>
    <tbody>
    <?PHP

    error_reporting(0);

    $place = $this->pracownicy->Place_raport_caly();
    $delegacje = $this->pracownicy->Delegacje_raport_caly();

    $premie = $this->pracownicy->Premie_raport_caly();
    $doreki = $this->pracownicy->Doreki_raport_caly();


    $umowy = $this->pracownicy->Umowy_raport_caly();

    $wydatki = $this->pracownicy->Wydatki_raport_caly();

    $potracenia = $this->pracownicy->Potracenia_raport_caly();

    $oplaconeGotowka = $this->pracownicy->PobierzOplaconeCale(1);
    $oplaconePrzelew = $this->pracownicy->PobierzOplaconeCale(2);

    function ret($var)
    {
        return isset($var) ? $var : $var = "0.00";
    }



    foreach ($p as $prac) {

        $umowykwotazus_pracownik = $umowy[$prac["id_pracownika"]]["zus_pracownik"];
        $umowykwotazus_pracodawca = $umowy[$prac["id_pracownika"]]["zus_pracodawca"];
        $placezus_pracownik = $place[$prac["id_pracownika"]]["zus_pracownik"];
        $placezus_pracodawca = $place[$prac["id_pracownika"]]["zus_pracodawca"];
		
        $totalzuspracownik = bcadd($placezus_pracownik, $umowykwotazus_pracownik, 2);
        $totalzuspracodawca = bcadd($placezus_pracodawca, $umowykwotazus_pracodawca, 2);


      

        $nareke = bcadd($nareke,$place[$prac["id_pracownika"]]["kwota"],2);
        $nareke = bcadd($nareke, $umowy[$prac["id_pracownika"]]["kwota"], 2);
        $nareke = bcadd($nareke, $delegacje[$prac["id_pracownika"]]["kwota"], 2);
        $nareke = bcadd($nareke, $premie[$prac["id_pracownika"]]["kwota"], 2);
        $nareke = bcadd($nareke, $doreki[$prac["id_pracownika"]]["kwota"], 2);
        $nareke = bcsub($nareke,$potracenia[$prac["id_pracownika"]]["kwota"],2);
		
		$kosztpracodawcy = bcadd($kosztpracodawcy,bcadd($totalzuspracodawca, $totalzuspracownik, 2),2);
		$kosztpracodawcy = bcadd($kosztpracodawcy,$nareke,2);
		
		  
        $obrot = bcadd($kosztpracodawcy, $wydatki[$prac["id_pracownika"]]["kwota"], 2);

        echo "<tr>
                   <td>" . $prac["kto"] . "</td>
                   <td>" . ret($place[$prac["id_pracownika"]]["kwota"]) . "</td>
                                <td>" . ret($umowy[$prac["id_pracownika"]]["kwota"]) . "</td>
                                <td>" . ret($delegacje[$prac["id_pracownika"]]["kwota"]) . "</td>
                                <td>" . ret($premie[$prac["id_pracownika"]]["kwota"]) . "</td>
                                <td>" . ret($doreki[$prac["id_pracownika"]]["kwota"]) . "</td>
                                <td>" . ret($nareke) . "</td>
                                <td>" . ret($wydatki[$prac["id_pracownika"]]["kwota"]) . "</td>
                                <td>" . ret($potracenia[$prac["id_pracownika"]]["kwota"]) . "</td>
                                <td>" . ret($totalzuspracownik) . "</td>
                                <td>" . ret($totalzuspracodawca) . "</td>
                                <td>" . ret(bcadd($totalzuspracodawca, $totalzuspracownik, 2)) . "</td>
                                <td>" . ret($kosztpracodawcy) . "</td>
                                <td>" . ret($obrot) . "</td>
                                <td>" . ret($oplaconeGotowka[$prac["id_pracownika"]]["kwota"]) . "</td>
                                <td>" . ret($oplaconePrzelew[$prac["id_pracownika"]]["kwota"]) . "</td>
                                <td><button type=\"button\" data-id=\"".$prac["id_pracownika"]."\" data-toggle=\"modal\" data-target=\"#oplacGotowke\">Opłać gotówka</button> 
                                <button type=\"button\" data-id=\"".$prac["id_pracownika"]."\" data-toggle=\"modal\" data-target=\"#oplacPrzelew\">Opłać przelew</button></td>
                                </tr>";
								unset($nareke,$kosztpracodawcy,$obrot,$totalzuspracodawca,$totalzuspracownik,$placezus_pracodawca,$placezus_pracownik,$umowykwotazus_pracownik,$umowykwotazus_pracodawca);
    }
    ?>
    </tbody>
</table>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.2.6/jquery.inputmask.bundle.min.js"></script>
<script src="<?PHP echo base_url(); ?>assets/js/formValidation.min.js"></script>
<script src="<?PHP echo base_url(); ?>assets/js/fv.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js"
        type="text/javascript"></script>

<script src="<?PHP echo base_url(); ?>assets/sweetalert2.min.js"></script>
<link rel="stylesheet" href="<?PHP echo base_url(); ?>assets/sweetalert2.min.css">

<style>
    .modal-backdrop {
        z-index: -1;
        margin-top: 50px;
        background-color: transparent;
    }
</style>
<script>
    var csrfName2 = '<?php echo $this->security->get_csrf_token_name(); ?>',
      csrfHash2 = '<?php echo $this->security->get_csrf_hash(); ?>';
    $('#oplacGotowke').on('show.bs.modal', function(e) {

        //get data-id attribute of the clicked element
        var ID = $(e.relatedTarget).data('id');


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
                url: "<?PHP echo base_url();?>Pracownicy/RozliczGotowke/"+ID,
                method: "POST",
                data: a.serialize() +"&" + csrfName2 + "=" + csrfHash2 + "&mp=" + $('#month_picker').val() + "&yp=" + $('#year_picker').val(),
                success: function (e) {
                    $(this).closest("form").find("input[type=text]").val(""), e.response.status && ($(this).closest("form").find("input[type=text]").val(""), $("#oplacGotowke_f").data("formValidation").resetForm(), $("#oplacGotowke_f").trigger("reset"), location.reload()), swal("Komunikat!", e.response.message, "info")
                }
            })
        });

    });

    $('#oplacPrzelew').on('show.bs.modal', function(e) {

        var ID = $(e.relatedTarget).data('id');

        $("#oplacPrzelew_f").formValidation({
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
                url: "<?PHP echo base_url();?>Pracownicy/RozliczPrzelew/"+ID,
                method: "POST",
                data: a.serialize() +"&" + csrfName2 + "=" + csrfHash2 + "&mp=" + $('#month_picker').val() + "&yp=" + $('#year_picker').val(),
                success: function (e) {
                    $(this).closest("form").find("input[type=text]").val(""), e.response.status && ($(this).closest("form").find("input[type=text]").val(""), $("#oplacPrzelew_f").data("formValidation").resetForm(), $("#oplacPrzelew_f").trigger("reset"), location.reload()), swal("Komunikat!", e.response.message, "info")
                }
            })
        });

    });


    $("#cf_oplac_gotowka,#cf_oplac_przelew").inputmask({alias: "currency", prefix: "Zł "});

</script>
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
                                                   class="form-control" value="">
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
                                                   class="form-control" value="">
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
