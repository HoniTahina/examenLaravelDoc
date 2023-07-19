
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          <?php echo $value; ?>
        ]);

        var options = {
          title: 'Tous les demandes',
          pieHole: 0.4,
          
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
   <div id="piechart" style="width: 2000px; height: 1000px;margin-top: 2%; margin-left: 10%"></div>
  </body>
