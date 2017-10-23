<div id="container" style="height: 300px; max-width: 100%; margin: 0 auto"></div>
<script>
    Highcharts.chart('container', {
        chart: {
            type: 'column'
        },
        title: {
            text: '<?PHP echo $i_title; ?>'
        },
        xAxis: {
            categories: [
<?PHP echo $i_cat; ?>
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Wydatek (zł)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} zł</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
                name: 'Ten miesiąc',
                data: [<?PHP echo $i_data; ?>],

            },
            <?PHP if(!empty($i_data_1)) { ?>
            {

                name: 'Zeszły miesiąc',
                data: [<?PHP echo $i_data_1; ?>],
               
            },
            <?PHP } ?>
             <?PHP if(!empty($i_data_2)) { ?>
            {
               
                name: 'Dwa miesiące temu',
                data: [<?PHP echo $i_data_2; ?>],
              
            }
     <?PHP } ?>
    ]
    });
</script>