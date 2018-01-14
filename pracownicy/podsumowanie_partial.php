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
    $.ajax({
        type: "POST",
        url: "<?PHP echo base_url();?>Pracownicy/Podsumowaniejson",
        data: {
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>',
            customMonth: $('#month_picker').val(),
            customYear: $('#year_picker').val()
        },
        success: function (data) {
          //  $("#tablec").html(data);
            console.log(data);
        }
    });
</script>

