
   
      google.charts.load("current", {packages:["imagepiechart"]});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
    	 // alert("hii");
    	  var jsonData = $.ajax({
              url: "getData.php",
              dataType: "json",
              async: false
              }).responseText;
    	  
    	  
    	  var jsonObj = JSON.parse(jsonData);
    	  //alert(jsonObj.length);
    	  var arraydata = [['District', 'Registrants']];
    	  for(var i = 0; i < jsonObj.length; i++) {
    		    var obj = jsonObj[i];
    		   //alert(obj.District+"-->"+obj.TotalReg);
    		   var dArray = [obj.District,parseInt(obj.TotalReg)];
    	        arraydata.push(dArray);
    		}
    	  
      
    	  var data = google.visualization.arrayToDataTable(arraydata);
    	  
    	    var options = {
    	           // title: 'District Wise Registrations' ,
    	            titleTextStyle: {
    	                color: ('blue', '#3E93D4'),    // any HTML string color ('red', '#cc00cc')
    	                fontName: 'Times New Roman', // i.e. 'Times New Roman'
    	                fontSize: 15, // 12, 18 whatever you want (don't specify px)
    	                bold: true,    // true or false
    	                italic: false   // true of false
    	            },
    	            legend: 'right',
    	            chartArea:{
    	                
    	                width:"80%",
    	                height:"80%"
    	            },
    	            
    	            is3D: true,
    	            pieSliceText: 'value',
    	            sliceVisibilityThreshold: 0
    	             
    	        };
    	        // align:'center';
    	        var chart = new google.visualization.PieChart(document.getElementById("chart_div"));
    	       
    	        chart.draw(data, options,dArray);
    	  
    	  
    	  /*
    	  

        var chart = new google.visualization.ImagePieChart(document.getElementById('chart_div'));

        chart.draw(data, {width: 430, height: 240, title: 'District Wise Registrations'});
        */
      }
   
