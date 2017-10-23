<script src="<?PHP echo base_url(); ?>assets/js/formValidation.min.js"></script>
<script src="<?PHP echo base_url(); ?>assets/js/fv.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js" type="text/javascript"></script>
<div id="contacts" class="page-layout simple left-sidebar-floating">

    <div class="page-header bg-primary text-auto row no-gutters align-items-center justify-content-between p-4 p-sm-6">

        <div class="col">

            <div class="row no-gutters align-items-center flex-nowrap">

                <button type="button" class="sidebar-toggle-button btn btn-icon d-inline-block d-lg-none mr-2 fuse-ripple-ready" data-fuse-bar-toggle="contacts-sidebar">
                    <i class="icon icon-menu"></i>
                </button>

                <!-- APP TITLE -->
                <div class="logo row no-gutters align-items-center flex-nowrap">
                    <span class="logo-icon mr-4">
                        <i class="icon-book-open s-6"></i>
                    </span>
                    <span class="logo-text h4">Lista pracowników</span>
                </div>
            </div>
            <!-- / APP TITLE -->
        </div>


    </div>
    <!-- / HEADER -->

    <div class="page-content-wrapper">

        <aside class="page-sidebar p-6" data-fuse-bar="contacts-sidebar" data-fuse-bar-media-step="md">
            <div class="page-sidebar-card">
                <!-- SIDENAV HEADER -->
                <div class="header p-4 bg-primary">

                    <div class="row no-gutters align-items-center text-white">

                        <span class="font-weight-bold">Narzędzia</span>
                    </div>


                </div>
                <!-- / SIDENAV HEADER -->

                <div class="divider"></div>

                <!-- SIDENAV CONTENT -->
                <div class="content">

                    <ul class="nav flex-column">

                        <li class="nav-item">
                            <a class="nav-link ripple active fuse-ripple-ready" data-toggle="modal"
                               data-target="#gridSystemModal" href="#">
                                <span><i class="icon icon-plus"></i>Dodaj pracownika</span>
                            </a>

                        </li>
                    </ul>
                </div>
                <!-- / SIDENAV CONTENT -->
            </div>
        </aside>

        <!-- CONTENT -->
        <div class="page-content p-4 p-sm-6">
            <!-- CONTACT LIST -->
            <div class="contacts-list card">

                <!-- CONTACT LIST HEADER -->
                <dvi class="contacts-list-header p-4">

                    <div class="row no-gutters align-items-center justify-content-between">

                        <div class="list-title text-muted">
                            Łącznie pracowników (<?PHP echo count($pracownicy); ?>)
                        </div>

                    </div>

                </dvi>
                <!-- / CONTACT LIST HEADER -->

                <?PHP if (!empty($pracownicy)) {
                    foreach ($pracownicy as $p) { ?>

                        <div class="contact-item ripple row no-gutters align-items-center py-2 px-3 py-sm-4 px-sm-6 fuse-ripple-ready">

                            <span class="avatar mx-4" alt=""><?PHP echo substr($p['imie'], 0, 3); ?></span>

                            <div class="col text-truncate font-weight-bold"><a href="<?PHP echo base_url();?>Pracownicy/Podglad/<?PHP echo $p['id_pracownika']; ?>"><?PHP echo $p['imie'] . " " . $p['nazwisko']; ?></a></div>

                            <div class="col job-title text-truncate px-1 d-none d-sm-flex"> <?PHP echo $p['nazwa']; ?> </div>

                            <div class="col-auto actions">

                                <div class="row no-gutters">

                                  <!-- inne funkcje -->

                                </div>
                            </div>
                        </div>
    <?PHP }
} ?>
                <!-- CONTACT ITEM -->

            </div>
            <!-- / CONTACT LIST -->
        </div>
        <!-- / CONTENT -->
    </div>
</div>

<div id="gridSystemModal" class="modal fade" tabindex="-1" role="dialog"
     aria-labelledby="gridSystemModal"
     aria-hidden="true">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content">

            <div class="modal-header bg-green-400 text-white">
                <h4 class="modal-title" id="myLargeModalLabel">Dodawanie pracownika</h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid bd-example-row">

                    <form id="nowyPracownik" name="nowyPracownik" method="post">

                        <div class="profile-box info-box general card mb-4">

                            <header class="h6 bg-primary text-auto p-4">
                                <div class="title">Personalia</div>
                            </header>

                            <div class="content p-4">

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="inputImie" class="col-form-label">Imię</label>
                                        <input type="text" class="form-control" name="inputImie" id="inputImie" placeholder="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputNazwisko" class="col-form-label">Nazwisko</label>
                                        <input type="text" class="form-control" name="inputNazwisko" id="inputNazwisko" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress" class="col-form-label">Ulica</label>
                                    <input type="text" class="form-control" name="inputUlica" id="inputUlica" placeholder="">
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="inputCity" class="col-form-label">Miasto</label>
                                        <input type="text" class="form-control" id="inputMiasto" name="inputMiasto">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputZip" class="col-form-label">Kod pocztowy</label>
                                        <input type="text" class="form-control" name="inputZip" id="inputZip">
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="profile-box info-box general card mb-4">

                            <header class="h6 bg-amber text-auto p-4">
                                <div class="title">Dodatkowe informacje</div>
                            </header>

                            <div class="content p-4">
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="inputBank" class="col-form-label">Numer konta bankowego</label>
                                        <input type="text" class="form-control" id="inputBank" name="inputBank">
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="inputTelefon" class="col-form-label">Telefon służbowy</label>
                                        <input type="text" class="form-control" name="inputTelefon" id="inputTelefon">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputTelefonPryw" class="col-form-label">Telefon prywatny</label>
                                        <input type="text" class="form-control" name="inputTelefonPryw" id="inputTelefonPryw">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="inputRejon">Rejon</label>
                                        <select class="form-control" id="inputRejon" name="inputRejon">
                                            <option value="1">Łódź</option>
                                            <option value="2">Wrocław</option>
                                            <option value="3">Kraj</option>
                                            <option value="4">Biuro</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-5 col-xs-offset-3">
                                <button type="submit" class="btn btn-primary fuse-ripple-ready">Dodaj pracownika</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cofnij</button>
                            </div>
                        </div>

                    </form>





                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {

        var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
                csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
        $('#nowyPracownik').formValidation({
            framework: 'bootstrap',

            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                inputImie: {
                    validators: {
                        notEmpty: {
                            message: 'Pole jest wymagane'
                        }
                    }
                },
                inputNazwisko: {
                    validators: {
                        notEmpty: {
                            message: 'Pole jest wymagane'
                        }
                    }
                },
                inputUlica: {
                    validators: {
                        notEmpty: {
                            message: 'Pole jest wymagane'
                        }
                    }
                },
                inputMiasto: {
                    validators: {
                        notEmpty: {
                            message: 'Pole jest wymagane'
                        }
                    }
                },
                inputZip: {
                    validators: {
                        notEmpty: {
                            message: 'Pole jest wymagane'
                        }
                    }
                },
                inputRejon: {
                    validators: {
                        notEmpty: {
                            message: 'Pole jest wymagane'
                        }
                    }
                }
            }
        }).on('success.form.fv', function (e) {

            var $form = $(e.target),
                    fv = $form.data('formValidation');
            e.preventDefault();

            $.ajax({
                url: 'Pracownicy/Dodaj',
                method: 'POST',
                data: $form.serialize() + "&" + csrfName + "=" + csrfHash,
                success: function (data) {
                    $(this).closest('form').find("input[type=text]").val("");

                    csrfName = data.regen.csrfName;
                    csrfHash = data.regen.csrfHash;
                    console.log(data.response.message);
                    if (data.response.status)
                    {
                        if (data.response.message === "Dodano pracownika") {
                            $(this).closest('form').find("input[type=text]").val("");
                            $('#nowyPracownik').data('formValidation').resetForm();
                            $('#nowyPracownik').trigger("reset");
                            setTimeout(
                                    function ()
                                    {
                                        $('#gridSystemModal').modal('hide');
                                    }, 2000);
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
                                    click: function (notice)
                                    {
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
        }).on('err.field.fv', function (e, data) {
            if (data.fv.getSubmitButton()) {
                data.fv.disableSubmitButtons(false);
            }
        }).on('success.field.fv', function (e, data) {
            if (data.fv.getSubmitButton()) {
                data.fv.disableSubmitButtons(false);
            }
        });
    });
    $('#gridSystemModal').on('shown.bs.modal', function () {
        $('#nowyPracownik').data('formValidation').resetForm();
        $('#nowyPracownik').trigger("reset");

    })

</script>
