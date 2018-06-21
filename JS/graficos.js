// Load the Visualization API and the corechart package.
google.charts.load('current', {'packages':['corechart']});

// Set a callback to run when the Google Visualization API is loaded.
google.charts.setOnLoadCallback(drawChart);

// Callback that creates and populates a data table,
// instantiates the pie chart, passes in the data and
// draws it.


      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Termos', 'Número de Vezes'],
          ['Preto',     1116],
          ['Vadia',      1144],
          ['Puta',  1160],
          ['Boiola', 556],
          ['Viado',    1102],
          ['Gordo',    432]
        ]);

        var options = {
          title: 'Termos Utilizados',
          is3D: true,
          width: 1400,
          height:600,
        };
        
        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);

        
      }
   
    
      google.charts.load('current', {packages: ['corechart', 'bar']});
      google.charts.setOnLoadCallback(drawBasic1);

      function drawBasic1() {

      var data = google.visualization.arrayToDataTable([
        ['Estado', 'Número de Tweets',],
        ['São Paulo', 1002],
        ['Bahia', 380],
        ['Rio de Janeiro', 549],
        ['Rio Grande do Sul', 209],
        ['Pernanbuco', 192]
      ]);

      var options = {
        title: 'Número de Tweets Negativos por Estado',
        chartArea: {width: '50%'},
        width: 1400,
        height:600,
        hAxis: {
          title: 'Estado ',
          minValue: 0,

        },
        vAxis: {
          title: 'Tweets'
           }
      };
           var chart = new google.visualization.BarChart(document.getElementById('chart_div'));

      chart.draw(data, options);
    }




    google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart2);

      function drawChart2() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Tweets' ],
          ['2015',  1500   ],
          ['2016',  2021   ],
          ['2017',  2608    ],
          ['2018',  984,  ]
        ]);

        var options = {
          title: 'Tweets por ano',
          curveType: 'function',
          legend: { position: 'bottom' },
          width: 1600,
          height:500,

        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }