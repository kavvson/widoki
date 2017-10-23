<div class="doc page-layout simple full-width">

    <!-- HEADER -->
    <div class="page-header bg-primary text-auto p-6"><h2 class="doc-title" id="content">Kategorie wydatku</h2>
    </div>
    <!-- / HEADER -->

    <div class="page-content row p-12">

        <!-- STANDARD ALERTS -->
        <div class="col-12 col-md-12">

            <div class="profile-box info-box contact card mb-4">

                <header class="h6 bg-primary text-auto p-4">
                    <div class="title">Lista kategorii</div>
                </header>

                <div class="content p-4">


                    <div class="pull-right">
                        <a href="<?php echo site_url('wydatki_kategorie/add'); ?>" class="btn btn-success">Dodaj</a> 
                    </div>

                    <table class="table table-striped table-bordered">
                        <tr>
                            <th>Nazwa kategorii</th>
                            <th>Czynności</th>
                        </tr>
                        <?php foreach ($wydatki_kategorie as $w) { ?>
                            <tr>
                                <td><?php echo $w['nazwa']; ?></td>
                                <td>
                                    <a href="<?php echo site_url('wydatki_kategorie/edit/' . $w['id_kat']); ?>" class="btn btn-info btn-xs">Edytuj</a> 
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div></div></div></div></div>