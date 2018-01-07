<?php require '../reports/require/load_monthly_patient.php'?>
<script type="text/javascript"> 
    window.onload = function(){ 
        $("#patient_population").CanvasJSChart({
            theme: "light2",
            zoomEnabled: true,
            zoomType: "x",
            panEnabled: true,
            animationEnabled: true,
            animationDuration: 1000,
            exportFileName: "Monthly Population", 
            exportEnabled: true,
            toolTip: {
                shared: true  
            },
            title: { 
                text: "Patient Population as of Year <?php echo $year?>",
                fontSize: 20
            },
            legend: {
                cursor: "pointer",
                itemclick: function (e) {
                    if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                        e.dataSeries.visible = false;
                    } else {
                        e.dataSeries.visible = true;
                    }
                    e.chart.render();
                }
            },
            axisX: {		       
                gridDashType: "dot",
                gridThickness: 1,
                labelFontColor: "black",
                crosshair: {
                    enabled: true 
                }
            },
            axisY: { 
                title: "Total Population", 
                includeZero: false,
                labelFontColor: "black",
                crosshair: {
                    enabled: true,
                    snapToDataPoint: true
                }
            }, 
            data: [ 
                { 
                    type: "column", 
                    showInLegend: true, 
                    legendText: "Total Number of Patients",
                    name: "Total Patients this month",
                    color: "#7E8F74",
                    dataPoints: [ 
                        { label: "January", y: <?php echo $fjan['total']?> },
                         { label: "February", y: <?php echo $ffeb['total']?> },
                        { label: "March", y: <?php echo $fmar['total']?> },
                         { label: "April", y: <?php echo $fapr['total']?> },
                        { label: "May", y: <?php echo $fmay['total']?> },
                         { label: "June", y: <?php echo $fjun['total']?> },
                        { label: "July", y: <?php echo $fjul['total']?> },
                         { label: "August", y: <?php echo $faug['total']?> },
                        { label: "September", y: <?php echo $fsep['total']?> },
                         { label: "October", y: <?php echo $foct['total']?> },
                        { label: "November", y: <?php echo $fnov['total']?> },
                         { label: "December", y: <?php echo $fdec['total']?> }
                    ] 
                },

                { 
                    type: "line", 
                    showInLegend: true, 
                    legendText: "Children",
                    name: "Children", 
                    dataPoints: [ 
                        { label: "January", y: <?php echo $c1['total']?> },
                         { label: "February", y: <?php echo $c2['total']?> },
                        { label: "March", y: <?php echo $c3['total']?> },
                         { label: "April", y: <?php echo $c4['total']?> },
                        { label: "May", y: <?php echo $c5['total']?> },
                         { label: "June", y: <?php echo $c6['total']?> },
                        { label: "July", y: <?php echo $c7['total']?> },
                         { label: "August", y: <?php echo $c8['total']?> },
                        { label: "September", y: <?php echo $c9['total']?> },
                         { label: "October", y: <?php echo $c10['total']?>},
                        { label: "November", y: <?php echo $c11['total']?> },
                         { label: "December", y: <?php echo $c12['total']?> }
                    ] 
                },
                { 
                    type: "line", 
                    showInLegend: true, 
                    legendText: "Adult",
                    name: "Adult", 
                    dataPoints: [ 
                        { label: "January", y: <?php echo $a1['total']?> },
                         { label: "February", y: <?php echo $a2['total']?> },
                        { label: "March", y: <?php echo $a3['total']?> },
                         { label: "April", y: <?php echo $a4['total']?> },
                        { label: "May", y: <?php echo $a5['total']?> },
                         { label: "June", y: <?php echo $a6['total']?> },
                        { label: "July", y: <?php echo $a7['total']?> },
                         { label: "August", y: <?php echo $a8['total']?> },
                        { label: "September", y: <?php echo $a9['total']?> },
                         { label: "October", y: <?php echo $a10['total']?>},
                        { label: "November", y: <?php echo $a11['total']?> },
                         { label: "December", y: <?php echo $a12['total']?> }
                    ] 
                }
            ] 
        }); 
    }
</script>