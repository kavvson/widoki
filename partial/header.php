<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?PHP echo $title; ?></title>

    <!-- Icons.css -->
    <link type="text/css" rel="stylesheet" href="<?PHP echo base_url(); ?>assets/icons/fuse-icon-font/style.css">


    <!-- PNotify -->
    <link type="text/css" rel="stylesheet" href="<?PHP echo base_url(); ?>assets/vendor/pnotify/pnotify.custom.min.css">


    <!-- Perfect Scrollbar -->
    <link type="text/css" rel="stylesheet"
          href="<?PHP echo base_url(); ?>assets/vendor/perfect-scrollbar/css/perfect-scrollbar.min.css"/>

    <!-- Fuse Html -->
    <link type="text/css" rel="stylesheet" href="<?PHP echo base_url(); ?>assets/vendor/fuse-html/fuse-html.min.css"/>

    <!-- Main CSS -->
    <link type="text/css" rel="stylesheet" href="<?PHP echo base_url(); ?>assets/css/main.css?v.2">
    <link type="text/css" rel="stylesheet" href="<?PHP echo base_url(); ?>assets/css/default.css?v.2">
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
    <script type="text/javascript"
            src="http://static.hekko24.pl/assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript"
            src="http://static.hekko24.pl/assets/vendor/datatables-responsive/js/dataTables.responsive.js"></script>


    <!-- PNotify -->
    <script type="text/javascript" src="<?PHP echo base_url(); ?>assets/vendor/pnotify/pnotify.custom.min.js"></script>

    <!-- Fuse Html
    <script type="text/javascript" src="<?PHP echo base_url(); ?>assets/vendor/fuse-html/fuse-html.min.js"></script>
    -->
    <!-- Main JS -->
    <script type="text/javascript" src="<?PHP echo base_url(); ?>assets/js/main.js"></script>

    <script src="https://vadikom.github.io/smartmenus/src/jquery.smartmenus.js"></script>
    <!-- / JAVASCRIPT -->
</head>
<body class="layout layout-vertical layout-left-navigation layout-above-toolbar">
<div class="topmenu">
    <nav class="main-nav" role="navigation">

        <!-- Mobile menu toggle button (hamburger/x icon) -->
        <input id="main-menu-state" type="checkbox"/>
        <label class="main-menu-btn" for="main-menu-state">
            <span class="main-menu-btn-icon">
        </label>

        <div class="logo nav-brand">
            <span class="logo-iconm">K</span><a href="<?PHP echo base_url(); ?>"><span
                        class="logo-text">KOMER</span></a>
        </div>

        <!-- Sample menu definition -->
        <ul id="main-menu" class="sm sm-mint">
            <li class="nav_separator"></li>
            <li><a href="#"> <i class="icon-car"></i> Flota</a>
                <ul>
                    <li><a href="<?PHP echo base_url(); ?>Pojazdy"><i  class="icon-document"></i>
                            Lista pojazdów</a></li>
                    <li><a href="<?PHP echo base_url(); ?>Pojazdy/Dodaj"><i class="icon-plus"></i>
                            Dodaj pojazd</a></li>
                </ul>
            </li>

            <li><a href="#"> <i class="icon-account-multiple"></i>
                    Kontrahenci</a>
                <ul>
                    <li><a href="<?PHP echo base_url(); ?>Kontrahent"><i class="icon-document"></i>
                           Lista kontrahentów</a></li>
                    <li><a href="<?PHP echo base_url(); ?>Kontrahent/Dodaj">  <i class="icon-plus"></i>
                            Dodaj kontrahenta</a></li>
                </ul>
            </li>
            <li><a href="#"> <i class="icon-account"></i>
                    Pracownicy</a>
                <ul>
                    <li><a href="<?PHP echo base_url(); ?>Pracownicy"><i class="icon-document"></i>
                            Lista pracowników</a></li>
                    <li><a href="<?PHP echo base_url(); ?>Pracownicy/KartyLista"><i class="icon-document"></i>
                           Zaliczki</a></li>
                    <li><a href="<?PHP echo base_url(); ?>Wyplaty"><i class="icon-document"></i>
                            Wypłaty</a></li>
                </ul>
            </li>
            <?PHP if ($this->is_admin) { ?>
            <li><a href="<?PHP echo base_url(); ?>Przychody"><i class="icon-plus"></i>
                    Przychody</a>
            </li>
            <?PHP } ?>
            <li><a href="<?PHP echo base_url(); ?>Wydatki"> <i class="icon-minus"></i>
                    Wydatki</a>
            </li>
            <?PHP if ($this->is_admin) { ?>
            <li class="nav_separator"></li>
            <li><a href="#"> <i class="icon-settings"></i>Zarządzanie</a>
                <ul>
                    <li><a href="<?PHP echo base_url(); ?>Wyplaty/Potwierdzanie"><i class="icon-cash"></i>
                            Opłać wypłaty</a></li>
                    <li><a href="<?PHP echo base_url(); ?>Wydatki_kategorie"><i class="icon-plus"></i>
                            Dodaj kategorię</a></li>
                    <li><a href="<?PHP echo base_url(); ?>Rejon"><i class="icon-plus"></i>
                            Dodaj rejon</a></li>
                    <li><a href="<?PHP echo base_url(); ?>Kontrakt"><i class="icon-plus"></i>
                            Dodaj kontrakt</a></li>
                    <li><a href="<?PHP echo base_url(); ?>Place"><i class="icon-upload"></i>
                            Import płac</a></li>
                    <li><a href="<?PHP echo base_url(); ?>Przelewy/Import_przychodow"><i class="icon-upload"></i>
                            Import przelewów przych.</a></li>
                    <li><a href="<?PHP echo base_url(); ?>Place/ImportujUmowy"><i class="icon-upload"></i>
                            Import umów</a></li>
                    <li><a href="<?PHP echo base_url(); ?>Pracownicy/Podsumowanie"><i class="icon-cash"></i>
                            Płace</a></li>
                </ul>
            </li>
            <?PHP } ?>
            <li><a href="#"> <i class="icon-cash"></i>
                    Zaimportowane pliki</a>
                <ul>
                    <li><a href="<?PHP echo base_url(); ?>Place/Lista"><i
                                    class="icon-cash"></i>
                            Umowy o pracę</a></li>
                    <li><a href="<?PHP echo base_url(); ?>Place/ListaUmow"><i class="icon-cash"></i>
                            Umowy Zlecenia</a></li>
                    <li><a href="<?PHP echo base_url(); ?>Pracownicy/WszystkieDelegacje"><i class="icon-cash"></i>
                            Delegacje</a></li>
                    <li><a href="<?PHP echo base_url(); ?>Place/Lista_Premii"><i class="icon-cash"></i>
                            Premie</a></li>
                    <li><a href="<?PHP echo base_url(); ?>Przelewy/Lista"><i class="icon-cash"></i>
                            Przelewy przych.</a></li>
                </ul>
            </li>
            <?PHP if ($this->is_admin) { ?>
            <li><a href="#"> <i class="icon-trending-up"></i>
                    Analityka</a>
                <ul>
                    <li><a href="<?PHP echo base_url(); ?>Statystyka/Wydatki"><i
                                    class="icon-cash"></i>
                            Wydatki</a></li>
                    <li><a href="<?PHP echo base_url(); ?>Statystyka/Przychody"><i class="icon-cash"></i>
                            Przychody</a></li>
                    <li><a href="<?PHP echo base_url(); ?>Statystyka/Pojazdy"><i class="icon-car"></i>
                            Pojazdy</a></li>
                    <li><a href="<?PHP echo base_url(); ?>Statystyka/Pracownicy"><i class="icon-account"></i>
                            Pracownicy</a></li>
                    <li><a href="<?PHP echo base_url(); ?>Statystyka/FCF"><i class="icon-trending-up"></i>
                            FCF</a></li>
                </ul>
            </li>
            <?PHP } ?>
            <li class="nav_separator"></li>
            <li><a href="#"><?PHP echo $_SESSION['identity']; ?></a>
                <ul>
                    <li><a href="<?PHP echo base_url() . 'auth/logout'; ?>">Wyloguj</a></li>
                </ul>
            </li>

        </ul>
    </nav>
</div>
<div id="wrapper">


    <div class="content-wrapper">
        <div class="content">

