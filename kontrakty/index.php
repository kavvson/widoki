<div class="doc page-layout simple full-width">

    <!-- HEADER -->
    <div class="page-header bg-primary text-auto p-6"><h2 class="doc-title" id="content">Kontrakty</h2>
    </div>
    <!-- / HEADER -->

    <div class="page-content row p-12">

        <!-- STANDARD ALERTS -->
        <div class="col-12 col-md-12">

            <div class="profile-box info-box contact card mb-4">
                <header class="h6 row no-gutters align-items-center justify-content-between bg-primary text-auto p-4">
                    <div class="title">Lista kontraktów</div>
                    <a href="<?php echo site_url('kontrakt/add'); ?>"  class="btn btn bg-green more fuse-ripple-ready">Dodaj</a>
                </header>

                <div class="content p-4">
                    <?php echo $this->pagination->create_links(); ?>   
                    <table id="table" class="table table-striped table-bordered dataTable no-footer dtr-inline" cellspacing="0" width="100%">
                        <thead class="btn-primary bg-primary">
                            <tr>
                                <th width="80%">Nazwa</th>
                                <th width="10%">Kontrahent</th>
                                <th>Status</th>
                                <th>Czynności</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($kontrakty as $k) { ?>
                                <tr>
                                    <td><?php echo $k['knazwa']; ?></td>
                                    <td><?php echo $k['kontrahent']; ?></td>
                                    <td><?php echo ($k['zakonczony'] == 1) ? "Zakończony" : null; ?></td>
                                    <td>
                                        <a href="<?php echo site_url('kontrakt/edit/' . $k['id_kontraktu']); ?>" class="btn btn-info btn-xs">Edytuj</a> 
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
