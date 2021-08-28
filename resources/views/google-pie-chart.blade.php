<!DOCTYPE html>
<html>

<head>
    <title>laravel google pie chart tutorial example - nicesnippets.com</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <style type="text/css">
        .box {
            width: 800px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="panel-body" align="center">
        <div id="pie_chart" style="width:750px; height:450px;">

        </div>
    </div>
    <script type="text/javascript">
        var analytics = <?php echo $kota; ?>

        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable(analytics);
            var options = {
                title: 'Percentage of Students Courses(BCA,BCOM,BSC)'
            };
            var chart = new google.visualization.PieChart(document.getElementById('pie_chart'));
            chart.draw(data, options);
        }
    </script>
</body>

</html>