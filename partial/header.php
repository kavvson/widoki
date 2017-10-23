<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?PHP echo $title; ?></title>

    <!-- STYLESHEETS -->
    <style type="text/css">
        [fuse-cloak],
        .fuse-cloak {
            display: none !important;
        }
    </style>

    <!-- Icons.css -->
    <link type="text/css" rel="stylesheet" href="<?PHP echo base_url(); ?>assets/icons/fuse-icon-font/style.css">

    <!-- Animate.css -->
    <link type="text/css" rel="stylesheet" href="<?PHP echo base_url(); ?>assets/vendor/animate.css/animate.min.css">

    <!-- PNotify -->
    <link type="text/css" rel="stylesheet" href="<?PHP echo base_url(); ?>assets/vendor/pnotify/pnotify.custom.min.css">


    <!-- Perfect Scrollbar -->
    <link type="text/css" rel="stylesheet"
          href="<?PHP echo base_url(); ?>assets/vendor/perfect-scrollbar/css/perfect-scrollbar.min.css"/>

    <!-- Fuse Html -->
    <link type="text/css" rel="stylesheet" href="<?PHP echo base_url(); ?>assets/vendor/fuse-html/fuse-html.min.css"/>

    <!-- Main CSS -->
    <link type="text/css" rel="stylesheet" href="<?PHP echo base_url(); ?>assets/css/main.css?1">
    <!-- / STYLESHEETS -->

    <!-- JAVASCRIPT -->

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Mobile Detect -->
    <script type="text/javascript"
            src="<?PHP echo base_url(); ?>assets/vendor/mobile-detect/mobile-detect.min.js"></script>

    <!-- Perfect Scrollbar -->
    <script type="text/javascript"
            src="<?PHP echo base_url(); ?>assets/vendor/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>

    <!-- Popper.js -->
    <script type="text/javascript" src="<?PHP echo base_url(); ?>assets/vendor/popper.js/index.js"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="<?PHP echo base_url(); ?>assets/vendor/bootstrap/bootstrap.min.js"></script>
    <!-- Data tables -->
    <script type="text/javascript" src="http://static.hekko24.pl/assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript" src="http://static.hekko24.pl/assets/vendor/datatables-responsive/js/dataTables.responsive.js"></script>


    <!-- PNotify -->
    <script type="text/javascript" src="<?PHP echo base_url(); ?>assets/vendor/pnotify/pnotify.custom.min.js"></script>

    <!-- Fuse Html -->
    <script type="text/javascript" src="<?PHP echo base_url(); ?>assets/vendor/fuse-html/fuse-html.min.js"></script>

    <!-- Main JS -->
    <script type="text/javascript" src="<?PHP echo base_url(); ?>assets/js/main.js"></script>

    <!-- / JAVASCRIPT -->
</head>


<body class="layout layout-vertical layout-left-navigation">
<nav id="toolbar" class="fixed-top bg-white">

    <div class="row no-gutters align-items-center flex-nowrap">

        <div class="col">

            <div class="row no-gutters align-items-center flex-nowrap">

                <button type="button" class="toggle-aside-button btn btn-icon d-block d-lg-none fuse-ripple-ready"
                        data-fuse-bar-toggle="aside">
                    <i class="icon icon-menu"></i>
                </button>

                <div class="toolbar-separator"></div>

                <div class="logo">
                    <span class="logo-iconm">K</span><a href="<?PHP echo base_url(); ?>"><span
                                class="logo-text">KOMER</span></a>
                </div>
                <div class="toolbar-separator"></div>
                <div class="shortcuts-wrapper row no-gutters align-items-center px-0 px-sm-2">

                    <div class="shortcuts row no-gutters align-items-center d-none d-md-flex">


                        <div class="user-menu-button dropdown">

                            <div class="dropdown-toggle ripple row align-items-center no-gutters px-2 px-sm-4 fuse-ripple-ready"
                                 role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="row no-gutters align-items-center flex-nowrap">
                                    <i class="icon-car"></i>
                                    <span class="px-3">Flota</span>
                                </div>
                            </div>

                            <div class="dropdown-menu" aria-labelledby="dropdownUserMenu">

                                <a class="dropdown-item fuse-ripple-ready" href="<?PHP echo base_url(); ?>Pojazdy">
                                    <div class="row no-gutters align-items-center flex-nowrap">
                                        <i class="icon-document"></i>
                                        <span class="px-3">Lista pojazdów</span>
                                    </div>
                                </a>

                                <a class="dropdown-item fuse-ripple-ready"
                                   href="<?PHP echo base_url(); ?>Pojazdy/Dodaj">
                                    <div class="row no-gutters align-items-center flex-nowrap">
                                        <i class="icon-plus"></i>
                                        <span class="px-3">Dodaj pojazd</span>
                                    </div>
                                </a>

                            </div>
                        </div>
                        <div class="user-menu-button dropdown">

                            <div class="dropdown-toggle ripple row align-items-center no-gutters px-2 px-sm-4 fuse-ripple-ready"
                                 role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="row no-gutters align-items-center flex-nowrap">
                                    <i class="icon-account-multiple"></i>
                                    <span class="px-3">Kontrahenci</span>
                                </div>
                            </div>

                            <div class="dropdown-menu" aria-labelledby="dropdownUserMenu">

                                <a class="dropdown-item fuse-ripple-ready" href="<?PHP echo base_url(); ?>Kontrahent">
                                    <div class="row no-gutters align-items-center flex-nowrap">
                                        <i class="icon-document"></i>
                                        <span class="px-3">Lista kontrahentów</span>
                                    </div>
                                </a>

                                <a class="dropdown-item fuse-ripple-ready"
                                   href="<?PHP echo base_url(); ?>Kontrahent/Dodaj">
                                    <div class="row no-gutters align-items-center flex-nowrap">
                                        <i class="icon-plus"></i>
                                        <span class="px-3">Dodaj kontrahenta</span>
                                    </div>
                                </a>

                            </div>
                        </div>
                        <div class="user-menu-button dropdown">

                            <div class="dropdown-toggle ripple row align-items-center no-gutters px-2 px-sm-4 fuse-ripple-ready"
                                 role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="row no-gutters align-items-center flex-nowrap">
                                    <i class="icon-account"></i>
                                    <span class="px-3">Pracownicy</span>
                                </div>
                            </div>

                            <div class="dropdown-menu" aria-labelledby="dropdownUserMenu">

                                <a class="dropdown-item fuse-ripple-ready" href="<?PHP echo base_url(); ?>Pracownicy">
                                    <div class="row no-gutters align-items-center flex-nowrap">
                                        <i class="icon-document"></i>
                                        <span class="px-3">Lista pracowników</span>
                                    </div>
                                </a>


                            </div>
                        </div>


                        <?PHP if ($this->is_admin) { ?>
                            <div><a class="dropdown-item fuse-ripple-ready" href="<?PHP echo base_url(); ?>Przychody">
                                    <div class="row no-gutters align-items-center flex-nowrap">
                                        <i class="icon-plus"></i>
                                        <span class="px-3">Przychody</span>
                                    </div>
                                </a></div>
                        <?PHP } ?>
                        <div><a class="dropdown-item fuse-ripple-ready" href="<?PHP echo base_url(); ?>Wydatki">
                                <div class="row no-gutters align-items-center flex-nowrap">
                                    <i class="icon-minus"></i>
                                    <span class="px-3">Wydatki</span>
                                </div>
                            </a></div>
                    </div>


                </div>

                <div class="toolbar-separator"></div>

                    <div class="user-menu-button dropdown">

                        <div class="dropdown-toggle ripple row align-items-center no-gutters px-2 px-sm-4 fuse-ripple-ready"
                             role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                            <span>Zarządzanie</span>
                        </div>

                        <div class="dropdown-menu" aria-labelledby="dropdownUserMenu">
                            <?PHP if ($this->is_admin) { ?>
                            <a class="dropdown-item fuse-ripple-ready"
                               href="<?PHP echo base_url(); ?>Wydatki_kategorie">
                                <div class="row no-gutters align-items-center flex-nowrap">
                                    <i class="icon-document"></i>
                                    <span class="px-3">Dodaj kategorię</span>
                                </div>
                            </a>

                            <a class="dropdown-item fuse-ripple-ready" href="<?PHP echo base_url(); ?>Rejon">
                                <div class="row no-gutters align-items-center flex-nowrap">
                                    <i class="icon-city"></i>
                                    <span class="px-3">Dodaj rejon</span>
                                </div>
                            </a>
                            <a class="dropdown-item fuse-ripple-ready" href="<?PHP echo base_url(); ?>Kontrakt">
                                <div class="row no-gutters align-items-center flex-nowrap">
                                    <i class="icon-document"></i>
                                    <span class="px-3">Dodaj kontrakt</span>
                                </div>
                            </a>
                            <?PHP } ?>
                            <a class="dropdown-item fuse-ripple-ready" href="<?PHP echo base_url(); ?>Place">
                                <div class="row no-gutters align-items-center flex-nowrap">
                                    <i class="icon-upload"></i>
                                    <span class="px-3">Import płac</span>
                                </div>
                            </a>
                            <a class="dropdown-item fuse-ripple-ready"
                               href="<?PHP echo base_url(); ?>Place/ImportujUmowy">
                                <div class="row no-gutters align-items-center flex-nowrap">
                                    <i class="icon-upload"></i>
                                    <span class="px-3">Import umów</span>
                                </div>
                            </a>
                            <a class="dropdown-item fuse-ripple-ready"
                               href="<?PHP echo base_url(); ?>Place/ImportujKarty">
                                <div class="row no-gutters align-items-center flex-nowrap">
                                    <i class="icon-upload"></i>
                                    <span class="px-3">Import kart</span>
                                </div>
                            </a>
                            <a class="dropdown-item fuse-ripple-ready"
                               href="<?PHP echo base_url(); ?>Pracownicy/Podsumowanie">
                                <div class="row no-gutters align-items-center flex-nowrap">
                                    <i class="icon-cash"></i>
                                    <span class="px-3">Płace</span>
                                </div>
                            </a>
                        </div>

                    </div>
                <div class="user-menu-button dropdown">

                    <div class="dropdown-toggle ripple row align-items-center no-gutters px-2 px-sm-4 fuse-ripple-ready"
                         role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="row no-gutters align-items-center flex-nowrap">
                            <i class="icon-cash"></i>
                            <span class="px-3">Zaimportowane pliki</span>
                        </div>
                    </div>

                    <div class="dropdown-menu" aria-labelledby="dropdownUserMenu">

                        <a class="dropdown-item fuse-ripple-ready"
                           href="<?PHP echo base_url(); ?>Place/Lista">
                            <div class="row no-gutters align-items-center flex-nowrap">
                                <i class="icon-cash"></i>
                                <span class="px-3">Płaca zasadnicza</span>
                            </div>
                        </a>

                        <a class="dropdown-item fuse-ripple-ready"
                           href="<?PHP echo base_url(); ?>Place/ListaUmow">
                            <div class="row no-gutters align-items-center flex-nowrap">
                                <i class="icon-cash"></i>
                                <span class="px-3">Pozabilansowe</span>
                            </div>
                        </a>
                        <a class="dropdown-item fuse-ripple-ready"
                           href="<?PHP echo base_url(); ?>Pracownicy/WszystkieDelegacje">
                            <div class="row no-gutters align-items-center flex-nowrap">
                                <i class="icon-document"></i>
                                <span class="px-3">Delegacje</span>
                            </div>
                        </a>
                        <a class="dropdown-item fuse-ripple-ready"
                           href="<?PHP echo base_url(); ?>Pracownicy/KartyLista">
                            <div class="row no-gutters align-items-center flex-nowrap">
                                <i class="icon-document"></i>
                                <span class="px-3">Karty</span>
                            </div>
                        </a>
                        <?PHP if ($this->is_admin) { ?>
                            <a class="dropdown-item fuse-ripple-ready"
                               href="<?PHP echo base_url(); ?>Place/Lista_Premii">
                                <div class="row no-gutters align-items-center flex-nowrap">
                                    <i class="icon-document"></i>
                                    <span class="px-3">Premie</span>
                                </div>
                            </a>
                        <?PHP } ?>


                    </div>
                </div>
            </div>
        </div>

        <div class="col-auto">

            <div class="row no-gutters align-items-center justify-content-end">

                <div class="user-menu-button dropdown">

                    <div class="dropdown-toggle ripple row align-items-center no-gutters px-2 px-sm-4 fuse-ripple-ready"
                         role="button" id="dropdownUserMenu" data-toggle="dropdown" aria-haspopup="true"
                         aria-expanded="false">
                        <span class="username mx-3 d-none d-md-block"><?PHP echo $_SESSION['identity']; ?></span>
                    </div>

                    <div class="dropdown-menu" aria-labelledby="dropdownUserMenu">

                        <a class="dropdown-item fuse-ripple-ready" href="<?PHP echo base_url() . 'auth/logout'; ?>">
                            <div class="row no-gutters align-items-center flex-nowrap">
                                <i class="icon-logout"></i>
                                <span class="px-3">Wyloguj</span>
                            </div>
                        </a>

                    </div>
                </div>

            </div>
        </div>
    </div>
</nav>
<div id="wrapper">
    <div class="content-wrapper">
        <div class="content">