$(document).on('ready', function(){
    
    'use strict';
     
   /*
    $("#loadMessage").show();
	  var jsonData = $.ajax({
        url: "getLineChartData.php",
        dataType: "json",
        async: false
        }).responseText;
	  
	  
	  var jsonObj = JSON.parse(jsonData);
	  var arrayUniquedata = new Array ( );
	  var arrayEventsdata  = new Array ( );
	  
	  for(var i = 0; i < jsonObj.length; i++) {
		    var obj = jsonObj[i];
		  // alert(obj.Date+"-->"+obj.Unique+"-->"+obj.Events);
		  // var dArray = [obj.Date,parseInt(obj.Unique),parseInt(obj.Events)];
	       // arraydata.push(dArray);
	        var duniqueArr = new Array (parseInt(obj.Date),parseInt(obj.Unique));
	        var myJSON1 = JSON.stringify(duniqueArr);
	       arrayUniquedata.push(duniqueArr);
	        //arrayUniquedata[i] = myJSON1;
	        
	        var deventsArr = new Array (parseInt(obj.Date),parseInt(obj.Events));
	       // var myJSON2 = JSON.stringify(deventsArr);
	        arrayEventsdata.push(deventsArr);
	       // arrayEventsdata[i] = myJSON2
	        
		}
	// alert(JSON.stringify(arrayUniquedata));
	 
	 alert(JSON.stringify(arrayEventsdata));
	  var graphData = [{
		  data: JSON.stringify(arrayUniquedata),
          color: '#474c60'
     }, {
    	 data: JSON.stringify(arrayEventsdata),
          color: '#ed6b75',
          points: { radius: 4, fillColor: '#ffffff' }
     }
];
	  
	  $("#loadMessage").hide();
	*/
   
 /*   var graphData = [{
               data: [ [20, 800], [20, 1100], [30, 1000], [40, 1500], [50, 1300], [60, 1900], [70, 1700], [80, 1950], [90, 1900], [100, 2000] ],
               color: '#474c60'
          }, {
               data: [ [10, 500], [20, 600], [30, 550], [40, 600], [50, 800], [60, 900], [70, 800], [80, 850], [90, 830], [100, 1000] ],
               color: '#ed6b75',
               points: { radius: 4, fillColor: '#ffffff' }
          }
     ];
     */
   /*  $.plot($('#graph-lines'), graphData, {
          series: {
               points: {
                    show: true,
                    radius: 5
               },
               lines: {
                    show: true
               },
               shadowSize: 0
          },
          grid: {
               color: '#646464',
               borderColor: 'transparent',
               borderWidth: 20,
               hoverable: true
          },
          xaxis: {
               tickColor: 'transparent',
               tickDecimals: 0
          },
          yaxis: {
               tickSize: 1000
          }
     });
     $.plot($('#graph-bars'), graphData, {
          series: {
               bars: {
                    show: true,
                    barWidth: .9,
                    align: 'center'
               },
               shadowSize: 0
          },
          grid: {
               color: '#646464',
               borderColor: 'transparent',
               borderWidth: 20,
               hoverable: true
          },
          xaxis: {
               tickColor: 'transparent',
               tickDecimals: 2
          },
          yaxis: {
               tickSize: 1000
          }
     });
     $('#graph-bars').hide();
     $('#lines').on('click', function (e) {
          $('#bars').removeClass('active');
          $('#graph-bars').fadeOut();
          $(this).addClass('active');
          $('#graph-lines').fadeIn();
          e.preventDefault();
     });
     $('#bars').on('click', function (e) {
          $('#lines').removeClass('active');
          $('#graph-lines').fadeOut();
          $(this).addClass('active');
          $('#graph-bars').fadeIn().removeClass('hidden');
          e.preventDefault();
     });
     function showTooltip(x, y, contents) {
          $('<div id="tooltip">' + contents + '</div>').css({
               top: y - 16,
               left: x + 20
          }).appendTo('body').fadeIn();
     }
     var previousPoint = null;
     $('#graph-lines, #graph-bars').bind('plothover', function (event, pos, item) {
          if (item) {
               if (previousPoint != item.dataIndex) {
                    previousPoint = item.dataIndex;
                    $('#tooltip').remove();
                    var x = item.datapoint[0],
                         y = item.datapoint[1];
                         showTooltip(item.pageX, item.pageY, y + ' visitors at ' + x + '.00h');
               }
          } else {
               $('#tooltip').remove();
               previousPoint = null;
          }
     });
     
     */
     
     function getRndInteger(min, max) {
    	    return Math.floor(Math.random() * (max - min) ) + min;
    	}
     
     $(function(){
    	 
    	  var jsonData = $.ajax({
              url: "getData.php",
              dataType: "json",
              async: false
              }).responseText;
    	  
    	  
    	  var jsonObj = JSON.parse(jsonData);
    	  //alert(jsonObj.length);
    	  var arraydata = [];
    	  
    	  var arrayColors = ['#00aae7','#8c8c8c','#232527','#0d416b','#b7b2b3','#a79bfd','#303030'];
    	  for(var i = 0; i < jsonObj.length; i++) {
    		  var colorCode=getRndInteger(0,6);
    		    var obj = jsonObj[i];
    		    var myObj = { title:obj.District, value:parseInt(obj.TotalReg), color:arrayColors[colorCode] };
    		   //alert(obj.District+"-->"+obj.TotalReg);
    		   //var dArray = [obj.District,parseInt(obj.TotalReg)];
    	       // arraydata.push(dArray);
    		    arraydata.push(myObj);
    		}
    	 // alert(arraydata);
    	  $('#pieChart').drawPieChart(arraydata);
    	  
          /*  $('#pieChart').drawPieChart([
               { title: 'Google Chrome',         value : 180,  color: '#00aae7' },
               { title: 'Firefox', value:  60,   color: '#8c8c8c' },
               { title: 'Opera',        value : 50,   color: '#232527' },
               { title: 'Safari',      value:  30,   color: '#0d416b' },
               { title: 'IE',        value : 20,   color: '#b7b2b3' },
               { title: 'Rockmelt',        value : 20,   color: '#a79bfd' },
               { title: 'Social',         value : 7,    color: '#303030' }
            ]);
            
            */
            
          });

          $(function(){
            $('#doughnutChart').drawDoughnutChart([
               { title: 'Tokyo',         value : 120,  color: '#a79bfd' },
               { title: 'San Francisco', value:  80,   color: '#a79bfd' },
               { title: 'New York',      value:  70,   color: '#a79bfd' },
               { title: 'London',        value : 50,   color: '#a79bfd' },
               { title: 'Sydney',        value : 40,   color: '#D7DADB' },
               { title: 'Berlin',        value : 20,   color: '#a79bfd' }
            ]);
          });
          
     //**** Rickshaw Chart ****//
     var graph;
          var seriesData = [ [], []];
          var random = new Rickshaw.Fixtures.RandomData(50);
          for (var i = 0; i < 50; i++) {
          random.addData(seriesData);
          }
          graph = new Rickshaw.Graph( {
          element: document.querySelector("#serverload-chart"),
          height: 300,
          renderer: 'area',
          series: [
          {
          data: seriesData[0],
          color: '#474c60',
          name:'New Visitors'
          },{
          data: seriesData[1],
          color: '#e6e6e6',
          name:'Returning Visitors'
          }
          ]
          } );
          var hoverDetail = new Rickshaw.Graph.HoverDetail( {
          graph: graph,
          });
          setInterval( function() {
          random.removeData(seriesData);
          random.addData(seriesData);
          graph.update();
     },1000);

     //**** Flot Spline ****//
      var d0 = [
          [0,0],[1,0],[2,1],[3,2],[4,15],[5,5],[6,12],[7,10],[8,55],[9,13],[10,25],[11,10],[12,12],[13,6],[14,2],[15,0],[16,0]
          ];
          var d00 = [
          [0,0],[1,0],[2,1],[3,0],[4,1],[5,0],[6,2],[7,0],[8,3],[9,1],[10,0],[11,1],[12,0],[13,2],[14,1],[15,0],[16,0]
          ];
          $("#flot-sp1ine").length && $.plot($("#flot-sp1ine"), [
          d0, d00
          ],
          {
          series: {
          lines: {
          show: false
          },
          splines: {
          show: true,
          tension: 0.4,
          lineWidth: 1,
          fill: 0.8
          },
          points: {
          radius: 0,
          show: true
          },
          shadowSize: 2
          },
          grid: {
          hoverable: true,
          clickable: true,
          tickColor: "#d9dee9",
          borderWidth: 1,
          color: '#cec8ff'
          },
          colors: ["#8878ff", "#6f7685"],
          xaxis:{
          },
          yaxis: {
          ticks: 4
          },
          tooltip: true,
          tooltipOpts: {
          content: "chart: %x.1 is %y.4",
          defaultTheme: false,
          shifts: {
          x: 0,
          y: 20
          }
          }
        }
      );

     //**** Activity Chart ****//
     var monthNames = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
          var d1 = [];
          for (var i = 0; i <= 11; i += 1) {
          d1.push([i,((Math.floor(Math.random() * (1 + 20 - 10))) + 10)]);
          }
          $('#chart').length && $.plot($('#chart'), [{
          data: d1
          }], 
          {
          series: {
               lines: {
               show: true,
               lineWidth: 1,
               fill: true,
               fillColor: {
               colors: [{
               opacity: 0.3
          }, {
               opacity: 0.3
          }]
          }
          },
               points: {
               radius: 3,
               show: true
          },
          grow: {
               active: true,
               steps: 50
          },
          shadowSize: 2
          },
               grid: {
               hoverable: true,
               clickable: true,
               tickColor: '#f0f0f0',
               borderWidth: 1,
               color: '#eeeeee'
          },
          colors: ['#e6e6e6'],
          xaxis:{
          },
          yaxis: {
               ticks: 5
          },
          tooltip: true,
          tooltipOpts: {
               content: 'chart: %x.1 is %y.4',
               defaultTheme: false,
          shifts: {
          x: 0,
          y: 20
          }
          }
          }
     );

     $("#sparkline").sparkline([5,9,3,-6,10,10,-6,-10,-5,-9,-3,6,10,6,5,7,9,10,6,5,-7,-9,-5,-9,10,6,-10,5,-9,-3,-6,10,3,6,10,6,5,5,9,3,6,10,7,9,5,7,9,10,6,5,7,9,5,9,3,-6,-10,-6,-5,-9,-3,-5,-10,-6,-10,5,9,3,6,10,3,6,10,6,-5,9,3,6,10,6,-10,-5,7,9], {
    type: 'bar',
    height: '100',
    negBarColor: '#ed6b75',
    barColor: '#33b7a0'});

    //**** Activity Chart ****//
     var monthNames = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
          var d1 = [];
          for (var i = 0; i <= 11; i += 1) {
          d1.push([i,((Math.floor(Math.random() * (1 + 20 - 10))) + 10)]);
          }
          $('#chart').length && $.plot($('#chart2'), [{
          data: d1
          }], 
          {
          series: {
               lines: {
               show: true,
               lineWidth: 1,
               fill: true,
               fillColor: {
               colors: [{
               opacity: 0.3
          }, {
               opacity: 0.3
          }]
          }
          },
               points: {
               radius: 3,
               show: true
          },
          grow: {
               active: true,
               steps: 50
          },
          shadowSize: 2
          },
               grid: {
               hoverable: true,
               clickable: true,
               tickColor: '#d1d2d6',
               borderWidth: 1,
               color: '#d1d2d6'
          },
          colors: ['#848aa2'],
          xaxis:{
          },
          yaxis: {
               ticks: 5
          },
          tooltip: true,
          tooltipOpts: {
               content: 'chart: %x.1 is %y.4',
               defaultTheme: false,
          shifts: {
          x: 0,
          y: 20
          }
          }
          }
     );

     $("#pie").sparkline([1,1,2], {
    type: 'pie',
    width: '40',
    height: '40',
    sliceColors: ['#2dcb73','#fd6a59','#17c3e5','#109618','#66aa00','#dd4477','#0099c6','#990099 ']});
     
     $("#pie2").sparkline([2,2,2], {
    type: 'pie',
    width: '40',
    height: '40',
    sliceColors: ['#2dcb73','#fd6a59','#17c3e5','#109618','#66aa00','#dd4477','#0099c6','#990099 ']});
     
     $("#pie3").sparkline([1,1,2,3,2], {
    type: 'pie',
    width: '40',
    height: '40',
    sliceColors: ['#2dcb73','#fd6a59','#17c3e5','#109618','#66aa00','#dd4477','#0099c6','#990099 ']});

     $("#quick-visit").sparkline([1,5,2,7,9,6,7,11,9,13,12,15,14,18], {
    type: 'line',
    width: '94',
    height: '40',
    lineColor: '#556b8d',
    fillColor: '#eef0f3',
    minSpotColor: '#556b8d',
    maxSpotColor: '#556b8d'});

     $("#quick-view").sparkline([6,4,7,2,9,8,2,5,4], {
    type: 'line',
    width: '94',
    height: '40',
    lineColor: '#5793de',
    fillColor: '#edf3fb',
    minSpotColor: '#5793de',
    maxSpotColor: '#5793de'});

    $("#quick-page").sparkline([7,3,5,7,8,9,3,5,6], {
    type: 'line',
    width: '94',
    height: '40',
    lineColor: '#acb5c6',
    fillColor: '#f6f7f9',
    minSpotColor: '#acb5c6',
    maxSpotColor: '#acb5c6'});

    $("#quick-time").sparkline([7,5,2,6,7,8,5,8,7], {
    type: 'line',
    width: '94',
    height: '40',
    lineColor: '#85c744',
    fillColor: '#f3f9ec',
    minSpotColor: '#85c744',
    maxSpotColor: '#85c744'});

    $("#quick-returning").sparkline([4,6,7,8,3,5,8,6,5], {
    type: 'line',
    width: '94',
    height: '40',
    lineColor: '#efa335',
    fillColor: '#fdf5ea',
    minSpotColor: '#efa335',
    maxSpotColor: '#efa335'});

    $("#quick-rate").sparkline([2,7,7,11,9,13,12,5,7], {
    type: 'line',
    width: '94',
    height: '40',
    lineColor: '#e74c3c',
    fillColor: '#fdedeb',
    minSpotColor: '#e74c3c',
    maxSpotColor: '#e74c3c'});

});