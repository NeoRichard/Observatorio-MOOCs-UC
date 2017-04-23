<html><head>
    <style>

    </style>
    
    <style type="text/css">
        .class_select{
            border-bottom-left-radius: 3px;
            border-top-left-radius: 3px;
            background: #f6f6f6;
            font-weight: normal;
            color: #454545;
            padding: 5px 10px !important;
            font-family: Arial,Helvetica,sans-serif;
            border: 1px solid #c5c5c5 !important;

        }        
        .charts-menu-button-inner-box {
            border-width: 0 0px !important;
        }
        
        .class_title{
            font-size: 24px;
        }
        .label_regiones{
        width: 31%;
        }

        .centre
        {
          display: flex;
          justify-content: center;
        }

        .left75{
            width:75%;
            float:left;
        }
        .right25{
            width:25%;
            float:right;
        }
        
        .float_left{
        float:left;   
        }
        .float_right{
        float:right;   
        }
        
      .google-visualization-table-td {
          text-align: center !important;
      }
    </style>
    
    </head>
<body>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- PARA EL AUTOCOMPLETE, Y HAY MÁS OPCIONES -->
  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
<!--
-->
    
    <script src="https://www.gstatic.com/charts/loader.js"></script>
<script src="http://www.google.com/jsapi?dummy=.js"></script>
    
    
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <script type="text/javascript">
        /*
google.load('visualization', '1', {'packages': ['table', 'corechart', 'controls']});
        */
        
        google.load('visualization', '1.1', {
            'packages': ['table', 'corechart', 'controls'],
            'language': 'es'
        });
        
google.setOnLoadCallback(drawDashBoardMQ);
        var region = 'América Latina';
        
        var dataMQ;
        var dashboardMQ;

function drawDashBoardMQ() {
    var queryMQ = new google.visualization.Query(
       
        // 'https://docs.google.com/spreadsheets/d/1BItrERrBD0WB69L7eZ5zrJlXgepO59rCJpS8FuEzrdY/edit#gid=1576267016'); // ESTA
         'https://docs.google.com/spreadsheets/d/1AmommtTTMfPMbC-ATm7zZm6Rp8OhbO7iTjvglLXT_bs/edit#gid=1576267016'); 
    
    queryMQ.send(handleQueryResponseMQ);
};

function handleQueryResponseMQ(responseMQ) {
    if (responseMQ.isError()) {
        alert('Error in query: ' + responseMQ.getMessage() + ' ' + responseMQ.getDetailedMessage());
        return;
    }

    dashboardMQ = new google.visualization.Dashboard(document.getElementById('dash_divMQ'));


    // Create a filter, passing some options
    var SegmentFilter = new google.visualization.ControlWrapper({
        'controlType': 'CategoryFilter',
            'containerId': 'RegionFilter',
            'options': {
                
      animation:{
        duration: 5000,
        easing: 'inAndOut',
      },
            'filterColumnLabel': 'Region',
                'ui': {
                    'labelStacking': 'vertical',
                    'allowTyping': false,
                    'allowNone': false,
                    'allowMultiple': true,
                    'caption': 'Selecciona Región',
                    'label': '',
                selectedValuesLayout: 'aside'//'below'
            },
        },
            'state': {
            'selectedValues': ['Latinoamerica']
                
        }
    });
    
    
    
    // Create a filter, passing some options
    var YearFilter = new google.visualization.ControlWrapper({
        'controlType': 'CategoryFilter',
            'containerId': 'YearFilter',
            'options': {
            'filterColumnLabel': 'Fecha',
                'ui': {
                    'labelStacking': 'vertical',
                    'allowTyping': false,
                    'allowNone': false,
                    'allowMultiple': false,
                    'caption': 'Selecciona Fecha',
                    'label': '',
                    selectedValuesLayout: 'below'
            },
        },
            'state': {
//            'selectedValues': ['South America']
            'selectedValues': ['2015']
                
        }
    });

    
    
    // Define a Column chart
    var TheGeoChart = new google.visualization.ChartWrapper({
        'chartType': 'ColumnChart',
            'containerId': 'geo_div',
            'options': {
//'title': 'Top 10 de organismos líderes en la producción de MOOCs en '+region,
  'title': 'Top 10 de países líderes en la producción de MOOCs',
                'titlePosition': 'out',//'in'//'out'//'none'
                legend: { 
                    position: 'top', //right//top
                    alignment: 'start' 
                },
                'chartArea': {
                    left: 50,
//                    top: 20,
                    width: '80%',
//                    height: '90%'
                },
                titleTextStyle: {
                    color: 'black', 
                    fontSize: 20, 
                    'slantedText': true 
                },
            width : 1050,
            height : 500,
            },
        
    });

    var proxyTable = new google.visualization.ChartWrapper({
        chartType: 'Table',
        containerId: 'TableProxy',
        options: {
            page: 'enable',
            pageSize: 10
        },
        
        view: {
            columns: [0]
        }
    });

    var columnaA = 0;
    google.visualization.events.addListener(proxyTable, 'ready', function () {
        
        var dt = proxyTable.getDataTable();
        var groupedData = google.visualization.data.group(
            dt, 
            [0], 
            [{
                column: columnaA,
                type: 'number',
              
                aggregation: google.visualization.data.count

            }]
        );
        
        
      var data = groupedData;
        
    all_data = new google.visualization.DataTable();
        
    all_data.addColumn('string', 'País');
    all_data.addColumn('number', 'Cantidad de MOOCs');
        
    TheGeoChart.setDataTable(all_data);
    all_data.sort({column: 1, desc: true}); // ordenados por cantidad
        ////////
        $("#RegionFilter>div>div>div").addClass("class_select");
        $("#YearFilter>div>div>div").addClass("class_select");
        
        
    });
    
    

///////////////////////////
    // DEFINIR FONT-SIZE 14 PARA LOS TITULOS
    
    // Define a Pie chart
    var ThePieChart = new google.visualization.ChartWrapper({
        'chartType': 'PieChart',
            'containerId': 'PieChartDiv',
            'options': {
            'chartArea': {
                left: -20,
                //top: 20,
                width: '100%',
                height: '80%'
            },
                titleTextStyle: {
                    color: 'black', 
                    fontSize: 14, 
                    'slantedText': true 
                },
                legend: {
                    //position: 'top', 
                    textStyle: {fontSize: 14}
                },
          title: 'Idiomas de los MOOCs',
          tooltip: { trigger: 'selection' },
          pieHole: 0.4,
            },
    });
////
    // Define a Pie chart
    var ThePieChart2 = new google.visualization.ChartWrapper({
        'chartType': 'PieChart',
            'containerId': 'PieChartDiv2',
            'options': {
            'chartArea': {
                left: -20,
                //top: 20,
                width: '100%',
                height: '80%'
            },
                titleTextStyle: {
                    color: 'black', 
                    fontSize: 14, 
                    'slantedText': true 
                },
                legend: {
                    //position: 'top', 
                    textStyle: {fontSize: 14}
                },
                tooltip: {
                    textStyle:  {
                        color: 'red',
                        fontName: 'TimesNewRoman',
                        fontSize: 16,
                        bold: false
                    }
                },
          title: 'Dominio de los MOOCs',
          tooltip: { trigger: 'selection' },
          pieHole: 0.4,
            },
    });
//////

        var index = 3;
        var index2 = 2;
    
    google.visualization.events.addListener(proxyTable, 'ready', function () {
        var dt = proxyTable.getDataTable();

        var groupedData0 = google.visualization.data.group(
            dt, 
            [0], 
            [{
                column: 'MOOCs', // Lenguaje
                type: 'number',
                aggregation: google.visualization.data.count
            }]);
        /////////////////
        
      var data = groupedData0;
        
    all_data = new google.visualization.DataTable();
    all_data.addColumn('string', 'País');
    all_data.addColumn('number', 'Cantidad de MOOCs');    
        
        
            var csv = google.visualization.dataTableToCsv(data);
            var splited = csv.split("\n");
        
          for (var j = 0; j < splited.length-1; j++){
                var t = splited[j].split(",");
                //all_data.addRow([t[0], parseInt(t[1]), ''+t[0]+' ha producido '+parseInt(t[1]) + ' MOOCs.']);
              all_data.addRow([t[0], parseInt(t[1])]);
            }
        
        
    TheGeoChart.setDataTable(all_data);
    all_data.sort({column: 1, desc: true}); // ordenados por cantidad
        
        
        var myRowsArr = new Array();
        for ( i=0; i < groupedData0.getNumberOfRows() && i < 10; i++){
            myRowsArr.push(i);
        }
        
        TheGeoChart.setView({
            //rows: [0,1,2,3,4,5,6,7,8,9] // LOS PRIMEROS 10 groupedData0.getNumberOfRows()
           rows: myRowsArr 
        });
        TheGeoChart.draw(); // PREVIO
        
        
        
        var groupedData = google.visualization.data.group(
            dt, 
            [index], 
            [{
                column: 'Lenguaje', // Lenguaje
                type: 'number',
                aggregation: google.visualization.data.count
            }]);
        
        options1 = {
          title: 'Idiomas de los MOOCs',//+pais,
          pieHole: 0.4,
        };
        
        ThePieChart.setDataTable(groupedData);
        ThePieChart.draw();
        var aaa = $("#PieChartDiv>div>div>div");
        aaa.addClass("class_title");
        
        

        var groupedData2 = google.visualization.data.group(
            dt, 
            [index2], 
            [{
                column: 'Dominio', // Dominio
                type: 'number',
                aggregation: google.visualization.data.count
            }]);
        ThePieChart2.setDataTable(groupedData2);
        ThePieChart2.draw();
    });
    
    
    
    dashboardMQ.bind(YearFilter, SegmentFilter).bind(SegmentFilter, [proxyTable]);
    
    
    // Get the data   
    dataMQ = responseMQ.getDataTable();

    // Publish everything through the dashboard
    dashboardMQ.draw(dataMQ)
}

        
        $(window).resize(function(){
            dashboardMQ.draw(dataMQ)
        });
    </script>
    
    <div id="content">
        <div >
                <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="cc-selector" style="margin: auto;width: 50%;">
                            <div class="col-sm-3 col-md-3 col-lg-3"></div>
                            <div class="col-sm-6 col-md-6 col-lg-6" style="background-color: #F6F6F6;border-radius: 5px;
    margin: auto;
    width: 50%;">
                                <div style="float: left;padding-right: 10px;padding-top: 3px;padding-left: 15px;">
                                    <h4>Datos hasta el año: </h4>
                                </div>
                                <div id="YearFilter" style="float: left;"></div>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3"></div>
                        </div>
                </div>
            
            
            
            <div class="col-sm-8 col-md-8 col-lg-8 ">
                <!--
                <div id="geo_div"style="width: 100%; height: 400px;"></div>-->
                <div id="geo_div"style="width: 100%; height: 560px;"></div>
                <div id="TableProxy" style="display: none;"></div>
                
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 ">
                <div id="dash_divMQ" >
                        <div id="RegionFilter"></div>
                    <!--
                        <div id="CountryFilter"></div>
                    -->
                    
                </div>
                <div id="PieChartDiv"></div>      
                <div id="PieChartDiv2"></div>
            </div>

        </div>
    </div>    

    
</body>
</html>
