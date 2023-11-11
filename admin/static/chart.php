<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body>
    <div class="row d-flex justify-content-center">
          <div id="myChart" style="width:100%px; max-width:600px; height:500px;"></div>
    <div id="myLine" style="width:100%; max-width:600px; height:500px;"></div>
    </div>
  
    <script>
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawPieChart);

        function drawPieChart() {
            const data = google.visualization.arrayToDataTable([
                ['Danh mục', 'Số lượng'],
                <?php
                foreach ($listStatic as $static) {
                    extract($static);
                    echo "['".$namecategory."', ".$countproduct."],";
                }
                ?>
            ]);

            const options = {
                title: 'Thống kê danh mục',
                is3D: true
            };

            const chart = new google.visualization.PieChart(document.getElementById('myChart'));
            chart.draw(data, options);
        }

        google.charts.setOnLoadCallback(drawLineChart);

        function drawLineChart() {
            // Set Data
            const data = google.visualization.arrayToDataTable([
                ['Price', 'Size'],
                <?php
                foreach ($listStatic as $static) {
                    extract($static);
                    echo "[".$avgprice.", ".$countproduct."],";
                }
                ?>
            ]);
            // Set Options
            const options = {
                title: 'Số lượng sản phẩm vs. Giá trung bình',
                hAxis: { title: 'Giá trung bình' },
                vAxis: { title: 'Số lượng sản phẩm' },
                legend: 'none'
            };
            // Draw
            const chart = new google.visualization.LineChart(document.getElementById('myLine'));
            chart.draw(data, options);
        }
    </script>
</body>
</html>