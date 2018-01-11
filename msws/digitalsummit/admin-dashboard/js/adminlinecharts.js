      
      
      //alert("adminline chart.js");
      google.charts.load('current', {'packages':['corechart']});
      //google.charts.setOnLoadCallback(drawChart);
      google.charts.setOnLoadCallback(drawLineChart);

      function drawChart() {
    	  //alert("line chart function");
        var data = google.visualization.arrayToDataTable([
          ['Date', 'Unique', 'Events'],
          ['2004',  1000,      400],
          ['2005',  1170,      460],
          ['2006',  660,       1120],
          ['2007',  1030,      540]
        ]);
   //alert("after data");
        var options = {
          title: 'Event Registrations',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
      
      
      
      function drawLineChart() {
    	  $("#loadMessage").show();
    	  var jsonData = $.ajax({
              url: "getLineChartData.php",
              dataType: "json",
              async: false
              }).responseText;
    	  
    	  
    	  var jsonObj = JSON.parse(jsonData);
    	  //alert(jsonObj.length);
    	  var arraydata = [['Date','Unique', 'Events']];
    	  for(var i = 0; i < jsonObj.length; i++) {
    		    var obj = jsonObj[i];
    		  // alert(obj.Date+"-->"+obj.Unique+"-->"+obj.Events);
    		   var dArray = [obj.Date,parseInt(obj.Unique),parseInt(obj.Events)];
    	        arraydata.push(dArray);
    		}
    	  var data = google.visualization.arrayToDataTable(arraydata);
    	  var options = {
    	          title: 'Event Registrations',
    	          curveType: 'function',
    	          legend: { position: 'bottom' }
    	        };

    	        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

    	        chart.draw(data, options);
    	        $("#loadMessage").hide();
    	  
      }