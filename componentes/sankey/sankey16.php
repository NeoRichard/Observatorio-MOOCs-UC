<html><head>

    
  <title>Distribución</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- PARA EL AUTOCOMPLETE, Y HAY MÁS OPCIONES -->
  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
<!--
-->
    <style type="text/css">
        
svg path[fill-opacity="0.8"] {
	fill:#e6e6e6;
}
        
        
        
        
/* Extras */
a:visited{color:#888}
a{color:#444;text-decoration:none;}
p{margin-bottom:.3em;}
/*********************************/
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
    
        
  <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
    google.load("visualization", '1', {packages:['corechart', 'sankey',  'table']});
    google.setOnLoadCallback(drawGID);

        
      var chart;
        var table;
        var datas = [];
        var current = 0;
        var options = {
        
        height: 550,
        tooltip: {isHtml: true},
        sankey: {
            node: {
                pattern: '$### m',
                interactivity: true,
            },
            link: {
                interactivity: true,
            },
            allowHtml: 'true',
            tooltip: {
                isHtml: 'true'
            }
        }
    };
        
        
    function drawGID() {
        
    var csv;
        
        
    //var queryString = encodeURIComponent("select B, A, C, D where I=2015 limit 10");
    var queryString1 = encodeURIComponent("select B, A, C, D where I=2015");
    var query1 = new google.visualization.Query('https://docs.google.com/spreadsheets/d/1AmommtTTMfPMbC-ATm7zZm6Rp8OhbO7iTjvglLXT_bs/gviz/tq?gid=1576267016&tq=' + queryString1);
    query1.send(handleQueryResponse);
        
        
    var queryString2 = encodeURIComponent("select B, A, C, D where I=2016");
    var query2 = new google.visualization.Query('https://docs.google.com/spreadsheets/d/1AmommtTTMfPMbC-ATm7zZm6Rp8OhbO7iTjvglLXT_bs/gviz/tq?gid=1576267016&tq=' + queryString2);
    query2.send(handleQueryResponse);
        
        
    current = 0;
    }
        

    function handleQueryResponse(response) {
      if (response.isError()) {
        alert('Error in query: ' + response.getMessage() + ' ' + response.getDetailedMessage());
        return;
      }

      var dt = response.getDataTable();
        
        
    all_data = new google.visualization.DataTable();
        
    all_data.addColumn('string', 'From');
    all_data.addColumn('string', 'To');
    all_data.addColumn('number', 'Revenues');
    all_data.addColumn({type: 'string', role: 'tooltip', 'p': {'html': true}});
        
        
        
        ///////////////////////////// GENERAR FUNCION //////////////////
    var groupedDataDominio = google.visualization.data.group(
        dt, 
        [0,1], 
        [{
            //column: 'Region', // Lenguaje
            column: 1, // Lenguaje
            type: 'number',
            aggregation: google.visualization.data.count
        }]);
        


    data  = groupedDataDominio;
        

    csv = google.visualization.dataTableToCsv(data);
    var splited = csv.split("\n");

    for (var j = 0; j < splited.length-1; j++){
        var t = splited[j].split(",");
        var s = [t[0], t[1], parseInt(t[2]), '<h4>Del total de MOOCs en <i>'+t[0]+'</i>, se han producido '+t[2]+' en <i>'+t[1]+'</i>.</h4>'];
        all_data.addRow(s);
    }
        
        
    var groupedDataDominio2 = google.visualization.data.group(
        dt, 
        [1,2], 
        [{
            //column: 'Region', // Lenguaje
            column: 1, // Lenguaje
            type: 'number',
            aggregation: google.visualization.data.count
        }]);
        


    data  = groupedDataDominio2;
        

    csv = google.visualization.dataTableToCsv(data);
    var splited = csv.split("\n");

    for (var j = 0; j < splited.length-1; j++){
        var t = splited[j].split(",");
        var s = [t[0], t[1], parseInt(t[2]), '<h4>Del total de MOOCs en <i>'+t[0]+'</i>, se han producido '+t[2]+' en <i>'+t[1]+'</i>.</h4>'];
        all_data.addRow(s);
    }
        
    var groupedDataDominio3 = google.visualization.data.group(
        dt, 
        [2,3], 
        [{
            //column: 'Region', // Lenguaje
            column: 1, // Lenguaje
            type: 'number',
            aggregation: google.visualization.data.count
        }]);
        


    data  = groupedDataDominio3;
        

    csv = google.visualization.dataTableToCsv(data);
    var splited = csv.split("\n");

    for (var j = 0; j < splited.length-1; j++){
        var t = splited[j].split(",");
        var s = [t[0], t[1], parseInt(t[2]), '<h4>Del total de MOOCs en <i>'+t[0]+'</i>, se han producido '+t[2]+' en <i>'+t[1]+'</i>.</h4>'];
        all_data.addRow(s);
    }
    datas[current] =  all_data;   



    current++;


        if(current == 2){
            current=0;
            chart = new google.visualization.Sankey(document.getElementById('chart_div'));
            chart.draw(datas[current], options);


            //table = new google.visualization.Table(document.getElementById('table_div'));
            //table.draw(datas[current], {showRowNumber: true, width: '100%', height: '100%'});
            }
    }
        
        
        $(window).resize(function(){
            chart.draw(datas[current], options);
        });
  </script>
<script>
$(document).ready(function(){
    
            $('#select_fecha').change(function () {
                current = $( "#select_fecha option:selected" ).val();
                chart.draw(datas[current], options);
                //table.draw(datas[current], {showRowNumber: true, width: '100%', height: '100%'});
            });
    
});

</script>
</head>
<body>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    
	
          <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="cc-selector" style="margin: auto;width: 50%;">
                            <div class="col-sm-3 col-md-3 col-lg-3"></div>
                            <div class="col-sm-6 col-md-6 col-lg-6" style="background-color: #F6F6F6;border-radius: 5px;margin: auto;width: 50%;">
                                <div style="float: left;padding-right: 10px;padding-top: 3px;padding-left: 15px;">
                                    <h4>Datos hasta el año: </h4>
                                </div>
				<div id="select_fecha" style="float: left;padding: 0px !important;margin-top: 10px;" class="class_select">
					<select style="border: 0;background-color: transparent;padding: 7px 10px;">
				                <option value=0>2015</option>
				                <option value=1>2016</option>
			              </select>
		            </div>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3"></div>
                        </div>
                </div>
	<br><br><br>
            
	   <div class="col-sm-12 col-md-12 col-lg-12">

    
            <div class="col-sm-10 col-md-10 col-lg-12 ">
              <div id="chart_div"></div>
              <!--<div id="table_div" style="display:none;"></div>-->
              <div id="table_div" style=";"></div>
            </div>
    
    <br />
    <br />
    <br />
</body>
</html>


    