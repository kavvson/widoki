 $(".inputKategoria").select2({
            theme: "bootstrap",
            // minimumInputLength: 1,
            width: '100%',
            language: "pl",
            ajax: {
                type: "GET",
                url: '<?PHP echo base_url(); ?>Wydatki/s2_kategorie_wydatku',
                dataType: 'json',
                delay: 250,
                data: function (params) {
                    return {
                        term: params.term,
                        page_limit: 100,

                    };
                },
                processResults: function (data) {
                    return {
                        results: data
                    };
                }
            },
        });
        $("#inputKontrakt").select2({
            theme: "bootstrap",
            //minimumInputLength: 1,
            width: '100%',
            language: "pl",
            ajax: {
                type: "GET",
                url: '<?PHP echo base_url(); ?>Kontrakt/lista_kontraktow',
                dataType: 'json',
                delay: 250,
                data: function (params) {
                    return {
                        term: params.term,
                        page_limit: 100,
<?php echo $this->security->get_csrf_token_name(); ?>: '<?php echo $this->security->get_csrf_hash(); ?>',
                    };
                },
                processResults: function (data) {
                    return {
                        results: data
                    };
                }
            },
        });
      $("#inputKupiecf").select2({
            theme: "bootstrap",
            width: '100%',
            language: "pl",
            ajax: {
                type: "GET",
                url: '<?PHP echo base_url(); ?>Pracownicy/s2_lista',
                dataType: 'json',
                delay: 250,
                data: function (params) {
                    return {
                        term: params.term,
                        page_limit: 100,
                    };
                },
                processResults: function (data) {
                    return {
                        results: data
                    };
                }
            },
        });
        $("#inputKontrahentf,#inputNaRzecz").select2({
            theme: "bootstrap",
            width: '100%',
            language: "pl",
            ajax: {
                type: "GET",
                url: '<?PHP echo base_url(); ?>Kontrahent/lista_kontrahentow',
                dataType: 'json',
                delay: 250,
                data: function (params) {
                    return {
                        term: params.term,
                        page_limit: 100,
                    };
                },
                processResults: function (data) {
                    return {
                        results: data
                    };
                }
            },
        });
        $("#inputRejonf").select2({
            theme: "bootstrap",
            //minimumInputLength: 1,
            width: '100%',
            language: "pl",
            ajax: {
                type: "GET",
                url: '<?PHP echo base_url(); ?>Rejon/lista_rejonow',
                dataType: 'json',
                delay: 250,
                data: function (params) {
                    return {
                        term: params.term,
                        page_limit: 100,
                    };
                },
                processResults: function (data) {
                    return {
                        results: data
                    };
                }
            },
        });
           $("#inputPojazd").select2({
            theme: "bootstrap",
            width: '100%',
            language: "pl",
            ajax: {
                type: "GET",
                url: '<?PHP echo base_url(); ?>Pojazdy/s2_lista',
                dataType: 'json',
                delay: 250,
                data: function (params) {
                    return {
                        term: params.term,
                        page_limit: 100,

                    };
                },
                processResults: function (data) {
                    return {
                        results: data
                    };
                }
            },
        });
         function init_radio() {

            $("input[name=inputPriorytet][value='<?PHP echo $wydatki->priorytet; ?>']").attr('checked', 'checked');
            $("input[name=inputStatus][value='<?PHP echo $wydatki->status; ?>']").attr('checked', 'checked');
            $("input[name=inputMetoda][value='<?PHP echo $wydatki->metoda_platnosci; ?>']").attr('checked', 'checked');
            calculateGrandTotal();
        }
        init_radio();
       
        
        function initSel2() {

            $('#faktura_t > tbody  > tr').each(function (i) {
            
                $(this).find('.inputKategoria').select2({
                    theme: "bootstrap",
                    // minimumInputLength: 1,
                    width: '100%',
                    language: "pl",
                    ajax: {
                        type: "GET",
                        url: '<?PHP echo base_url(); ?>Wydatki/s2_kategorie_wydatku',
                        dataType: 'json',
                        delay: 250,
                        data: function (params) {
                            return {
                                term: params.term,
                                page_limit: 100,

                            };
                        },
                        processResults: function (data) {
                            return {
                                results: data
                            };
                        }
                    },
                });
                revalidate_select();
            });

        }
        $("#nowyWydatek").bind("keyup change", function (e) {
            calculateGrandTotal();
           // revalidate_select();
        });
        function calculateGrandTotal() {

            var grandTotal = 0;
            var pbrutto = 0;
            var wartosc_vat = 0;
            var cnetto = 0;
            $('#faktura_t > tbody  > tr').each(function (i) {
                //grandTotal += +$(this).val();
                // if (i > 0) {
                var qty_field_current = 1;
                var vatfield_current;
                var nettofield_current = (Number(jQuery(this).find('.p_cnetto').val().replace("Zł ", "").replace(",", "")));

                if ($(this).find('.p_pvat').val() === "Oo" || $(this).find('.p_pvat').val() === "Zw")
                {

                    vatfield_current = 0;

                } else {
                    vatfield_current = (Number(jQuery(this).find('.p_pvat').val()));

                }


                cnetto = cnetto + (nettofield_current * qty_field_current);
                wartosc_vat = wartosc_vat + (nettofield_current * vatfield_current) / 100;
                wartosc_vat = wartosc_vat * qty_field_current;
                console.log("netto " + nettofield_current + " brutto " + nettofield_current + wartosc_vat + " vat " + wartosc_vat);
                //}
            });
            pbrutto = cnetto + wartosc_vat;
            $("#curr_brutto_add").html("Brutto : " + pbrutto.toFixed(2) + " zł");
            $("#curr_netto_add").html("Netto : " + cnetto.toFixed(2) + " zł");
            $("#curr_vat_add").html("Vat : " + wartosc_vat.toFixed(2) + " zł");
            // console.log(grandTotal);
            // $("#grandtotal").text(grandTotal.toFixed(2));
        }