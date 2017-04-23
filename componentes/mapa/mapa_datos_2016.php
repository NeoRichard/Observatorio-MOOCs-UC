
<html><head>
    <style>

    </style>
    
    <style type="text/css">
        

/*
<text text-anchor="start" x="50" y="45" font-family="Arial" font-size="20" font-weight="bold" stroke="none" stroke-width="0" fill="#000000">Top 10 de organismos líderes en la producción de MOOCs en LATAM</text>
*/
#titulo{
    text-align: center;
    font-size: 20px;
    font-family: Arial;
    font-weight: bold;
    stroke: none;
    margin-top: 12px;
}
        
        
        .class_pie{
            margin-top: 15px;
        }
        
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://www.gstatic.com/charts/loader.js"></script>
<script src="http://www.google.com/jsapi?dummy=.js"></script>
    
    
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <script type="text/javascript">
        
        google.load('visualization', '1.1', {
            'packages': ['table', 'corechart', 'controls'],
            'language': 'es'
        });

    var dashboardMQ;
    var dataMQ;
    
google.setOnLoadCallback(drawDashBoardMQ);

function drawDashBoardMQ() {
    var queryMQ = new google.visualization.Query(
        
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
            'filterColumnLabel': 'Region',
                'ui': {
                    'labelStacking': 'vertical',
                    'allowTyping': false,
                    'allowNone': false,
                    'allowMultiple': true,
                    'caption': 'Selecciona Región',
                    'label': '',
                    selectedValuesLayout: 'aside'
            },
        },
            'state': {
            'selectedValues': ['Latinoamerica', 'Europa']
                
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
            'selectedValues': ['2015']
                
        }
    });


    
    var SubSegmentFilter = new google.visualization.ControlWrapper({
        'controlType': 'CategoryFilter',
            'containerId': 'CountryFilter',
            'options': {
            'filterColumnLabel': 'MOOCs',
            'ui': {
                'labelStacking': 'vertical',
                'allowTyping': true,
                'allowNone': true,
                'allowMultiple': true,
                'caption': 'Selecciona País',
                'label': '',
                    selectedValuesLayout: 'below'
            },
            'displayMode': 'text'
        }
    });

    // Define a Column chart
    var TheGeoChart = new google.visualization.ChartWrapper({
        'chartType': 'GeoChart',
            'containerId': 'geo_div',
            'options': {
            'chartArea': {
                width: '100%',
                height: '100%'
            },
          colorAxis: {colors: ['orange', 'red']},
          //colorAxis: {colors: ['orange', 'red']},
                magnifyingGlass: {
                  enable: true, zoomFactor: 7.5  
                },
                datalessRegionColor: '#F6F6F6',
          defaultColor: '#f5f5f5',
  
            },
    });
    //////////////////////////////////////////////////////////////
    // SEGUIR ESTE EJEMPLO: http://jsfiddle.net/asgallant/psvpp/1/
    //////////////////////////////////////////////////////////////
    google.visualization.events.addListener(TheGeoChart, 'select', function () {
        
        
        document.getElementById("geo_div").onclick = function() {
        
            
            var tmpData = TheGeoChart.getChart();
            
        };
    });
    
    
    var proxyTable = new google.visualization.ChartWrapper({
        chartType: 'Table',
        containerId: 'TableProxy',
        options: {
            page: 'enable',
            pageSize: 1
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
        }]);
        TheGeoChart.setDataTable(groupedData);
        TheGeoChart.draw();
        
    });

    
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
        TheGeoChart.setDataTable(groupedData0);
        TheGeoChart.draw();

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
        ////////// MOSTRAR TABLA
        
        var groupedDataDominio = google.visualization.data.group(
            dt, 
            [0,1,2], 
            [{
                column: 'Dominio', // Lenguaje
                type: 'number',
                aggregation: google.visualization.data.count
            }]);
        
        var table = new google.visualization.Table(document.getElementById('table_divDominio'));
        table.draw(groupedDataDominio, {showRowNumber: false, width: '100%', height: '100%'});
        
        var groupedDataLenguaje = google.visualization.data.group(
            dt, 
            [0,1,3], 
            [{
                column: 'Lenguaje', // Lenguaje
                type: 'number',
                aggregation: google.visualization.data.count
            }]);
        
        var table = new google.visualization.Table(document.getElementById('table_divLenguaje'));
        table.draw(groupedDataLenguaje, {showRowNumber: false, width: '100%', height: '100%'});
        //////////

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
        
        $("#RegionFilter>div>div>div").addClass("class_select");
        $("#YearFilter>div>div>div").addClass("class_select");
        
        
    });
    
    
///////////////////////////

    dashboardMQ.bind(YearFilter, SegmentFilter).bind(SegmentFilter, SubSegmentFilter);
    dashboardMQ.bind(SegmentFilter, SubSegmentFilter).bind(SubSegmentFilter, [proxyTable]);
    
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
            
                <div class="col-sm-8 col-md-8 col-lg-8">

                    <!--h2 id="titulo">
                        Demografía de los cursos de MOOC
                    </h2-->

                    <div id="geo_div"></div>

                    <div id="TableProxy" style="display: none;"></div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                
                <div class ="class_pie" id="PieChartDiv"></div>      
                <div class ="class_pie" id="PieChartDiv2"></div>
                <div id="dash_divMQ" >
                            <div id="RegionFilter"></div>
                            <div id="CountryFilter"></div>
                    
                    
                        
                </div>
            </div>
                            <div id="table_divDominio" style="display: none;"></div>
                            <div id="table_divLenguaje" style="display: none;"></div>

        </div>
    </div>    
    
</body>
</html>
