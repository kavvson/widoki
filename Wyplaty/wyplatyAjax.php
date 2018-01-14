<table class="table table-striped table-bordered dataTable no-footer dtr-inline"
       id="my-cart-table">
    <thead class="btn-primary bg-primary">
    <tr>
        <th>Pracownik</th>
        <th>Numer konta</th>
        <th>Tytuł przelewu</th>
        <th>Gotówka</th>
        <th>Przelew</th>
    </tr>
    </thead>
    <tbody>
    <?PHP
    if (count($wyplaty) > 0) {

        foreach ($wyplaty as $v) {
            $konto = ($v['konto']) ? $v['konto'] : '<span class="text-red"><i class="icon-exclamation text-red s-5"></i> Nie podano</span>';
            $extra_przelew = "";
            $extra_gotowke = "";
            $extra_przelew_kolor = "has-success";
            $extra_gotowke_kolor = "has-success";
            $id = $v['id'];

            $field_name_gotowka = "name=\"oplac[$id][gotowka][]\"";
            $field_name_przelew = "name=\"oplac[$id][przelew][]\"";

            if ($v['oplacono_przelew'] == "1") {
                $extra_przelew = "checked disabled";
                $extra_przelew_kolor = "";
                $field_name_przelew = ""; // skip
            }
            if ($v['oplacono_gotowke'] == "1") {
                $extra_gotowke = "checked disabled";
                $extra_gotowke_kolor = "has-error";
                $field_name_gotowka = ""; // skip
            }

            $checkboxgotowki = '<div class="form-check form-check-inline  ' . $extra_gotowke_kolor . '">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" ' . $extra_gotowke . '  ' . $field_name_gotowka . '">
                                <span class="checkbox-icon fuse-ripple-ready"></span>
                            </label>
                        </div>';
            $checkbox = '<div class="form-check form-check-inline ' . $extra_przelew_kolor . '">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" ' . $extra_przelew . ' ' . $field_name_przelew . '>
                                <span class="checkbox-icon fuse-ripple-ready"></span>
                            </label>
                        </div>';
            echo '<tr>
                                                    <td>' . $v['pracownik'] . '</td>
                                                    <td><b>' . $konto . '</b></td>
                                                    <td>Wynagrodzenie za <span class="smm"></span> / <span class="syy"></span> </td>
                                                    <td>' . $checkboxgotowki . ' ' . $v['kwota_gotowki'] . '</td>
                                                    <td>' . $checkbox . ' ' . $v['kwota_przelewu'] . '</td>
                                                </tr>';
        }
    } else {
        echo '  <tr class="alert alert-danger" role="alert" id="my-cart-empty-message">
                    <td colspan="4">Brak wypłat na dany miesiąc</td>
                </tr>';
    }
    ?>

    </tbody>
</table>
<div class="form-group">
    <div class="col-xs-5 col-xs-offset-3">
        <button type="submit" class="btn btn-primary fuse-ripple-ready">Opłać</button>
    </div>
</div>
<script>
    $('.smm').text($('#month_picker').val());
    $('.syy').text($('#year_picker').val());
</script>