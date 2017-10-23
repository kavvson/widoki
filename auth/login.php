<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>Logowanie</title>

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
        <link type="text/css" rel="stylesheet" href="<?PHP echo base_url(); ?>assets/vendor/perfect-scrollbar/css/perfect-scrollbar.min.css"/>

        <!-- Fuse Html -->
        <link type="text/css" rel="stylesheet" href="<?PHP echo base_url(); ?>assets/vendor/fuse-html/fuse-html.min.css"/>

        <!-- Main CSS -->
        <link type="text/css" rel="stylesheet" href="<?PHP echo base_url(); ?>assets/css/main.css">
        <!-- / STYLESHEETS -->

        <!-- JAVASCRIPT -->

        <!-- jQuery -->
        <script type="text/javascript" src="<?PHP echo base_url(); ?>assets/vendor/jquery/dist/jquery.min.js"></script>

        <!-- Mobile Detect -->
        <script type="text/javascript" src="<?PHP echo base_url(); ?>assets/vendor/mobile-detect/mobile-detect.min.js"></script>

        <!-- Perfect Scrollbar -->
        <script type="text/javascript"
        src="<?PHP echo base_url(); ?>assets/vendor/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>

        <!-- Popper.js -->
        <script type="text/javascript" src="<?PHP echo base_url(); ?>assets/vendor/popper.js/index.js"></script>

        <!-- Bootstrap -->
        <script type="text/javascript" src="<?PHP echo base_url(); ?>assets/vendor/bootstrap/bootstrap.min.js"></script>

        <!-- PNotify -->
        <script type="text/javascript" src="<?PHP echo base_url(); ?>assets/vendor/pnotify/pnotify.custom.min.js"></script>

        <!-- Fuse Html -->
        <script type="text/javascript" src="<?PHP echo base_url(); ?>assets/vendor/fuse-html/fuse-html.min.js"></script>

        <!-- Main JS -->
        <script type="text/javascript" src="<?PHP echo base_url(); ?>assets/js/main.js"></script>

        <!-- / JAVASCRIPT -->
    </head>

    <body class="layout layout-vertical layout-left-navigation ">

<div id="wrapper" style="margin-top:0px!important;">
            <div class="content-wrapper">
                <div class="content">
                    <div id="login" class="p-8">

                        <div class="form-wrapper md-elevation-8 p-8">
                            <?PHP if (!empty($message)) { ?>
                                <div class="alert alert-info" role="alert">
                                    <div id="infoMessage"><?php echo $message; ?></div>
                                </div>
                            <?PHP } ?>

                            <div class="logo bg-primary">
                                <span style="font-size: 3.6rem !important;">Komer</span>
                            </div>

                            <div class="title mt-4 mb-8">Logowanie do systemu</div>

                            <form name="loginForm" novalidate method="post">

                                <div class="form-group mb-5">
                                    <input type="email" class="form-control" id="identity"
                                           name="identity"/>
                                    <label style="top: 6px!important;" for="email">Email</label>
                                </div>

                                <div class="form-group mb-4">
                                    <input type="password" class="form-control" id="password"
                                           name= "password"
                                           autocomplete="off"/>
                                    <label style="top: 6px!important;" for="password">Hasło</label>
                                </div>

                                <div
                                    class="remember-forgot-password row no-gutters align-items-center justify-content-between pt-4">

                                    <div class="form-check remember-me mb-4">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="remember" id="remember" value="1" aria-label="Remember Me"/>
                                            <span class="checkbox-icon"></span>
                                            <span class="form-check-description">Zapamiętaj</span>
                                        </label>
                                    </div>
                                </div>

                                <button type="submit" name="submit" id="submit" class="submit-button btn btn-block btn-primary my-4 mx-auto"
                                        aria-label="LOG IN">
                                    Zaloguj
                                </button>
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                            </form>
                        </div>
                    </div>
                </div>

            </div>
     </div>
    </body>
</html>