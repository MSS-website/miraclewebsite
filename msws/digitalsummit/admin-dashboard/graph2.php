  <html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
           google.charts.load('current', {'packages':['line']});
      google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = new google.visualization.DataTable();
      data.addColumn('date', 'Day');
      data.addColumn('number', 'Unique');
      data.addColumn('number', 'Events');
   //   data.addColumn('number', 'Transformers: Age of Extinction');

      data.addRows([
        [new Date('2017-11-11'),  , 80.8],
        [new Date('2017-11-12'),  30.9, 69.5],
        [new Date('2017-11-13'),  25.4,   57],
        [new Date('2017-11-14'),  11.7, 18.8],
        [new Date('2017-11-15'),  11.9, 17.6],
        [new Date('2017-11-16'),   8.8, 13.6],
        [new Date('2017-11-17'),   7.6, 12.3],
        [new Date('2017-11-18'),  12.3, 29.2],
        [new Date('2017-11-19'),  16.9, 42.9],
        [new Date('2017-11-20'), 12.8, 30.9],
        [new Date('2017-11-21'),  5.3,  7.9],
        [new Date('2017-11-22'),  6.6,  8.4],
        [new Date('2017-11-23'),  4.8,  6.3],
        [new Date('2017-11-24'),  4.2,  6.2]
      ]);

      var options = {
       /* chart: {
          title: 'Box Office Earnings in First Two Weeks of Opening',
          subtitle: 'in millions of dollars (USD)'
        },*/
        width: 900,
        height: 500
      };

      var chart = new google.charts.Line(document.getElementById('curve_chart'));

      chart.draw(data, google.charts.Line.convertOptions(options));
    }
    </script>
  </head>
  <body>
  
  
  
    <div id="curve_chart" style="width: 900px; height: 500px"></div>
  </body>
</html>