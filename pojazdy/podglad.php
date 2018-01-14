<div class="row">
                        <div class="about col-12 col-md-12 col-xl-12">

                            <div class="profile-box info-box general card mb-4">

                                <header class="h6 row no-gutters align-items-center justify-content-between bg-primary text-auto p-4">
                                    <div class="title">Podstawowe informacje</div>
                                    <button type="button" id="btn-attach-fv" data-toggle="modal"
                                            data-target="#attach-skan" class="btn btn bg-green more"> Załącz plik
                                    </button>
                                </header>

                                <div class="content p-4">
                                    <div class="form-group row">
                                        <label for="inputDokument" class="col-sm-4 col-form-label">Ubezpieczenie
                                            OC</label>
                                        <div class="col-sm-8">
                                            <?PHP echo (empty($oc[0]['waznosc']))? "Brak" : $oc[0]['waznosc']; echo (empty($oc[0]['path']))? "" : "<a href='".base_url($oc[0]['path'])."'><i class='icon-paperclip has-attachment s-4'></i></a>";?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputDokument" class="col-sm-4 col-form-label">Ubezpieczenie
                                            AC</label>
                                        <div class="col-sm-8">
                                            <?PHP echo (empty($ac[0]['waznosc']))? "Brak" : $ac[0]['waznosc'];  echo (empty($ac[0]['path']))? "" : "<a href='".base_url($ac[0]['path'])."'><i class='icon-paperclip has-attachment s-4'></i></a>"; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputDokument"
                                               class="col-sm-4 col-form-label">Przegląd</label>
                                        <div class="col-sm-8">
                                            <?PHP echo (empty($przeglad[0]['waznosc']))? "Brak" : $przeglad[0]['waznosc'];  echo (empty($przeglad[0]['path']))? "" : "<a href='".base_url($przeglad[0]['path'])."'><i class='icon-paperclip has-attachment s-4'></i></a>"; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputDokument"
                                               class="col-sm-4 col-form-label">Wyposażenie</label>
                                        <div class="col-sm-8">
                                            <?PHP
                                            if ($pojazd->path) {
                                                echo "<a target='_blank' href='" . base_url() . "" . $pojazd->path . "'>" . $pojazd->nazwa . "</a> ( dodano " . $pojazd->data_dodania . " )";
                                            } else {
                                                echo "Nie załączono";
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputDokument" class="col-sm-4 col-form-label">Stawka
                                            VAT</label>
                                        <div class="col-sm-8">
                                            <?PHP
                                            switch ($pojazd->stawka_vat) {
                                                case 0 :
                                                    echo "Nie określono";
                                                    break;
                                                case 1 :
                                                    echo "50%";
                                                    break;
                                                case 2 :
                                                    echo "100%";
                                                    break;
                                            }

                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputDokument"
                                               class="col-sm-4 col-form-label">Przebieg</label>
                                        <div class="col-sm-8">
                                            <a href="#" data-toggle="tooltip"
                                               title="Przebieg w dniu wprowadzenia pojazdu do systemu">
                                                <?PHP
                                                echo $pojazd->przebieg . " km";
                                                ?>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputDokument"
                                               class="col-sm-4 col-form-label">Aktualny przebieg</label>
                                        <div class="col-sm-2">
                                            <div id="akt_przebieg"><img
                                                        src="<?PHP echo base_url("assets/Spinner.gif"); ?>"
                                                        style="width: 32px;height: 32px;"></div>
                                        </div>
                                        <div class="col-sm-2">
                                            <button type="button" id="btn-reset" data-toggle="modal"
                                                    data-target="#rozliczKilometry" class="btn btn bg-green more">
                                                Aktualizuj przebieg
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="profile-box info-box work card mb-4">

                                <header class="h6 bg-primary text-auto p-4">
                                    <div class="title">Dodatkowe informacje</div>
                                </header>

                                <div class="content p-4">

                                    <!-- start-->



                                    <script type="text/javascript">

                                    </script>

                                    <div id="visualization" style="width: 100%;height:200px;"></div>


                                </div>
                            </div>

                        </div>


                    </div>

<script>
    $(document).ready(function () {
        $('#attach-skan').on('hidden.bs.modal', function () {
            $(this).removeData('modal');
        });
        $("#attach-skan").off().on("show.bs.modal", function(e) {
            setTimeout(
                function () {
                    $.ajax({
                        url: '<?PHP echo base_url() . "Pojazdy/zalacz_skan/".$id; ?>',
                        method: 'POST',
                        data: {
                            title: 'Załącz plik',
                            button: 'Dodaj',
                            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
                        },
                        success: function (data) {
                            $("#attach-skan").find(".modal-body").html(data);
                        }
                    });

                }, 1000);
        });

        $(document).on('hidden.bs.modal', '#attach-fv', function () {
            $("#attach-skan > div > div > div.modal-body").html('<div class="loader"></div>');
            $("#attach-skan").removeData();

        });

        google.charts.load("current", {packages: ["timeline"], 'language': 'PL'});
        google.charts.setOnLoadCallback(drawChart);
        $('#month_picker').off().on('change', function () {

            drawChart();
        });
        function drawChart() {

            $.ajax({
                url: '<?PHP echo base_url() . "Pojazdy/wydatki/" . $id;?>',
                type: "POST",
                data: {
                    customMonth: $('#month_picker').val(),
                    customYear: $('#year_picker').val(),
                    '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
                },
                dataType: 'json',
                success: function (responseText) {
                    var container = document.getElementById('visualization');
                    var chart = new google.visualization.Timeline(container);
                    var dataTable = new google.visualization.DataTable(responseText);

                    chart.draw(dataTable);


                },
                beforeSend: function () {
                    $("#visualization").html('<img src="<?PHP echo base_url("assets/Spinner.gif"); ?>" style="width: 64px;height: 64px;">');
                }
            });

            $.ajax({
                url: '<?PHP echo base_url() . "Pojazdy/przebiegi/" . $id;?>',
                type: "POST",
                data: {
                    customMonth: $('#month_picker').val(),
                    customYear: $('#year_picker').val(),
                    '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
                },
                dataType: 'json',
                success: function (responseText) {
                    $("#akt_przebieg").tooltip({
                        selector: '[data-toggle="tooltip"]'
                    });
                    if (!responseText.wartosc) {
                        $("#akt_przebieg").html("<a href=\"#\" data-toggle=\"tooltip\" title=\"Nie odnaleziono przebiegu na dany miesiąc\">Brak informacji</a>");
                    } else {
                        $("#akt_przebieg").html("<a href=\"#\" data-toggle=\"tooltip\" title=\"Przebieg na dzień " + responseText.kiedy + "\">" + responseText.wartosc + " km</a>");
                    }

                },
                beforeSend: function () {
                    $("#akt_przebieg").html('<img src="<?PHP echo base_url("assets/Spinner.gif"); ?>" style="width: 32px;height: 32px;">');
                }


            });


        }


        var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
        var $form = $("#reKil");

        $("#inputKM").inputmask({alias: "numeric", prefix: "km "});
        $("#oplacCzesciowobtn").click(function (e) {
                $.ajax({
                    url: '<?PHP echo base_url(); ?>Pojazdy/Przebieg',
                    method: 'POST',
                    data: $form.serialize() + "&" + csrfName + "=" + csrfHash + "&dot_pojazdu= <?PHP echo $id; ?>",
                    success: function (data) {
                        $(this).closest('form').find("input[type=text]").val("");
                        if (data.response.status) {
                            if (data.response.message === "Dodano") {
                                $(this).closest('form').find("input[type=text]").val("");
                                $('#oplacCzesciowobtn').trigger("reset");

                                setTimeout(
                                    function () {
                                        location.reload();
                                        $('#rozliczKilometry').modal('hide');
                                    }, 500);
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
                                        click: function (notice) {
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
                e.preventDefault();
            }
        );

        $('#inputUbezp_oc').bootstrapMaterialDatePicker({weekStart: 0, time: false}).on('change', function (e) {
            $('#modyfikacjaPojazdufrm').formValidation('revalidateField', 'inputUbezp_oc');
        });

        $('#inputUbezp_ac').bootstrapMaterialDatePicker({weekStart: 0, time: false}).on('change', function (e) {
            $('#modyfikacjaPojazdufrm').formValidation('revalidateField', 'inputUbezp_ac');
        });
        $('#inputPrzeglad').bootstrapMaterialDatePicker({weekStart: 0, time: false}).on('change', function (e) {
            $('#modyfikacjaPojazdufrm').formValidation('revalidateField', 'inputPrzeglad');
        });

        $("#inputwartosc_pojazdu").inputmask({alias: "currency", prefix: "Zł "});
        var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';


        $('#modyfikacjaPojazdufrm').formValidation({
            framework: 'bootstrap',
            icon: {

            },
            fields: {
                stawka_vat: {
                    validators: {
                        notEmpty: {
                            message: 'Pole jest wymagane'
                        },
                    }
                },
                inputModel: {
                    validators: {
                        notEmpty: {
                            message: 'Pole jest wymagane'
                        },
                        stringLength: {
                            min: 3,
                            max: 50,
                            message: 'Musi zawierać od %s do %s znaków'
                        }

                    }
                },
                inputMarka: {
                    validators: {
                        notEmpty: {
                            message: 'Pole jest wymagane'
                        },
                        stringLength: {
                            min: 3,
                            max: 50,
                            message: 'Musi zawierać od %s do %s znaków'
                        }

                    }
                },
                inputNr_rej: {
                    validators: {
                        notEmpty: {
                            message: 'Pole jest wymagane'
                        },
                        stringLength: {
                            min: 5,
                            max: 10,
                            message: 'Musi zawierać od %s do %s znaków'
                        }

                    }
                }, inputwartosc_pojazdu: {
                    validators: {
                        notEmpty: {
                            message: 'Pole jest wymagane'
                        },
                    }
                },
                inputUbezp_oc: {
                    validators: {
                        notEmpty: {
                            message: 'Pole jest wymagane'
                        },
                        date: {
                            format: 'YYYY-MM-DD',
                            message: 'Nieprawidłowy format daty'
                        },
                    }
                },
                inputUbezp_ac: {
                    validators: {
                        notEmpty: {
                            message: 'Pole jest wymagane'
                        },
                        date: {
                            format: 'YYYY-MM-DD',
                            message: 'Nieprawidłowy format daty'
                        },
                    }
                },
                inputPrzeglad: {
                    validators: {
                        notEmpty: {
                            message: 'Pole jest wymagane'
                        },
                        date: {
                            format: 'YYYY-MM-DD',
                            message: 'Nieprawidłowy format daty'
                        }

                    }
                },

            }
        }).on('success.form.fv', function (e) {


            var $form = $(e.target),
                fv = $form.data('formValidation');
            var formData = new FormData(this);
            formData.append(csrfName, csrfHash);

            e.preventDefault();
            $.ajax({
                url: '<?PHP echo base_url(); ?>Pojazdy/Modyfikuj_pojazd',
                type: "POST",
                data: formData,
                mimeType: "multipart/form-data",
                contentType: false,
                dataType: 'json',
                cache: false,
                processData: false,

                success: function (data) {
                    $(this).closest('form').find("input[type=text]").val("");
                    csrfName = data.regen.csrfName;
                    csrfHash = data.regen.csrfHash;
                    if (data.response.status)
                    {
                        if (data.response.message === "Powodzenie") {
                            $(this).closest('form').find("input[type=text]").val("");
                            $('#modyfikacjaPojazdufrm').data('formValidation').resetForm();
                            $('#modyfikacjaPojazdufrm').trigger("reset");
                            setTimeout(
                                function () {
                                    location.reload();
                                    $('#modyfikacjaPojazdu').modal('hide');
                                }, 500);
                        }

                    }
                    new PNotify({
                        text: data.response.message,
                        confirm: {
                            confirm: true,
                            buttons: [
                                {
                                    text: 'Zakmnij',
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
</script>