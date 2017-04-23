<html><head>
    <style>

    </style>
    
    <style type="text/css">

/*********************************/

body {
overflow: hidden;
}
        h4.cc-selector{
            margin-top: 0px; 
            margin-bottom: 0px; 
        }
.titulo_selector{
	    font-size: 18px;
    padding-top: 20px;
    font-weight: bold;
}

.cc-selector input{
    margin:0;padding:0;
    -webkit-appearance:none;
       -moz-appearance:none;
            appearance:none;
}

.grouped{
    background-image:url(btn1_2.png);
    background-position: center top;
    background-size: 10% auto;
    
    
  width: 30px;
  height: 30px;
  text-shadow: white 0px 0px 2px;
  font-size: 16px;
   -moz-border-radius: 70px; 
   -webkit-border-radius: 70px; 
   border-radius: 70px;
    
        }
.stacked{
    background-image:url(btn2_2.png);
    background-position: center top;
    background-size: 10% auto;
    
    
  width: 30px;
  height: 30px;
  text-shadow: white 0px 0px 2px;
  font-size: 16px;
   -moz-border-radius: 70px; 
   -webkit-border-radius: 70px; 
   border-radius: 70px;
        }
.percent{
    background-image:url(btn3_2.png);
    background-position: center top;
    background-size: 10% auto;
    
    
  width: 30px;
  height: 30px;
  text-shadow: white 0px 0px 2px;
  font-size: 16px;
   -moz-border-radius: 70px; 
   -webkit-border-radius: 70px; 
   border-radius: 70px;
        }

.cc-selector input:active +.drinkcard-cc{opacity: .9;}
.cc-selector input:checked +.drinkcard-cc{
    -webkit-filter: none;
       -moz-filter: none;
            filter: none;
}
        .radio_button{
               /* margin: 25px 0px 25px 0px;*/
        }
.drinkcard-cc{
    
    
    cursor:pointer;
    background-size:contain;
    background-repeat:no-repeat;
    display:inline-block;
    width:70px;height:50px;
    -webkit-transition: all 100ms ease-in;
       -moz-transition: all 100ms ease-in;
            transition: all 100ms ease-in;
    -webkit-filter: brightness(1.8) grayscale(1) opacity(.7);
       -moz-filter: brightness(1.8) grayscale(1) opacity(.7);
            filter: brightness(1.8) grayscale(1) opacity(.7);
}
.drinkcard-cc:hover{
    -webkit-filter: brightness(1.2) grayscale(.5) opacity(.9);
       -moz-filter: brightness(1.2) grayscale(.5) opacity(.9);
            filter: brightness(1.2) grayscale(.5) opacity(.9);
}
        
.drinkcard-cc.grouped{
}



.cc-selector{
margin: auto;
   width: 50%;
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
    
    <!--
https://maps.googleapis.com/maps/api/js?key=AIzaSyDuBEidKGDuQo7Bzf1uRg47MPaRRlEesw0&callback=initMap

    <script src="https://www.google.com/jsapi"></script>
    <script src="http://www.google.com/jsapi?ext.js"></script>
<script src="http://www.google.com/jsapi?dummy=.js"></script>


<script src="https://www.google.com/jsapi?key=AIzaSyCLashRsAacU5z2ZZxrdNTrRGeCAj1-C_w"></script>
    -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <script type="text/javascript">
    google.load("visualization", '1', {packages:['corechart', 'table', 'controls']});
    google.setOnLoadCallback(drawGID);
        
        var chart;
        var data;
        var datas = [];
        var current = 0;
        var options = 
        {
            
            'chartArea': {
                //left: -20,
                top: 20,
                //width: '100%',
                //height: '80%'
            },
            //'title': 'Comparación de Dominios',
            legend: { 
                position: 'right', //right//top // 'bottom'
                alignment: 'start' 
            },
            isStacked: false, 
            height: 600 ,
            animation:{
                duration: 1000,
                easing: 'out'
            }
            
        };

        
    // [START gid]
    function drawGID() {
        
        
      var queryString = encodeURIComponent('SELECT B, count(A), I group by B, I pivot D');
        
      var queryMQ = new google.visualization.Query('https://docs.google.com/spreadsheets/d/1AmommtTTMfPMbC-ATm7zZm6Rp8OhbO7iTjvglLXT_bs/gviz/tq?gid=1576267016&tq=' + queryString);
        
        
      queryMQ.send(handleQueryResponse);
    }

    function handleQueryResponse(response) {
      if (response.isError()) {
        alert('Error in query: ' + response.getMessage() + ' ' + response.getDetailedMessage());
        return;
      }
    data = response.getDataTable();
    data.sort({column: 0, desc: true});
    data.removeColumn(data.getNumberOfColumns()-1);

    datas[0] = data.clone();
    datas[0].removeRow(3);
    datas[0].removeRow(1);
    datas[1] = data.clone();
    datas[1].removeRow(2);
    datas[1].removeRow(0);

    chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));

    chart.draw(datas[current], options);



    //var table = new google.visualization.Table(document.getElementById('table_div'));
    //table.draw(datas[current], {showRowNumber: true, width: '100%'});

    }
    // [END gid]

        
        $(window).resize(function(){
            chart.draw(datas[current], options);
        });
        
    </script>
    
<script>
$(document).ready(function(){
    
    
            $('input[name="credit-card"]').change(function () {
                var forma = $('input[name="credit-card"]:checked').val();
                options["isStacked"] = forma;
                chart.draw(datas[current], options);
            });
    
            $('#select_fecha').change(function () {
                current = $( "#select_fecha option:selected" ).val();
                chart.draw(datas[current], options);
            });
    
});

</script>
    
    <div id="content">
        <div >

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

<div class="cc-selector">
        <div style="float: left;padding-top: 5px !important;padding-left: 120;"><h4>Elige el tipo de gráfico:</h4></div>
        <div style="float: left;" id="div_grouped" class="radio_button">
            <input id="grouped" type="radio" name="credit-card" value=false checked/>
            <label class="drinkcard-cc grouped" for="grouped"></label>
        </div>
        
        <div style="float: left;" id="div_stacked" class="radio_button">
            <input id="stacked" type="radio" name="credit-card" value=true />
            <label class="drinkcard-cc stacked"for="stacked"></label>
        </div>
        
        <div style="float: left;" id="div_percent" class="radio_button">
            <input id="percent" type="radio" name="credit-card" value="percent" />
            <label class="drinkcard-cc percent"for="percent"></label>
        </div>
        
    </div>


	   </div>

            <div class="col-sm-12 col-md-12 col-lg-12 ">
		      <div id="chart_div"></div>
            </div>

        </div>
    </div>    

    
</body>
</html>
