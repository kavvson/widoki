<div class="doc page-layout simple full-width">
    <div class="page-content row p-12">

        <!-- STANDARD ALERTS -->
        <div class="col-12 col-md-12">

            <div class="profile-box info-box general card mb-4">
                <header class="h6 row no-gutters align-items-center justify-content-between bg-primary text-auto p-4">
                    <div class="title">Komunikat</div>
                </header>

                <div class="content p-4">
                    <?PHP
                    if ($return === "Odmowa" || $return === "Akceptacja") {
                        echo " <div class=\"alert alert-success\">
                        <strong>Success!</strong> " . $return . "</div>";
                    }else{
                        echo " <div class=\"alert alert-danger\">
                        <strong>Bład!</strong> " . $return . "</div>";
                    }

                    ?>
                </div>
            </div>
        </div>


    </div>
</div>




