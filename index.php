<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Observatorio MOOCs UC</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Slider
    ================================================== -->
<link href="css/owl.carousel.css" rel="stylesheet" media="screen">
<link href="css/owl.theme.css" rel="stylesheet" media="screen">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/animate.min.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/modernizr.custom.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-80067116-1', 'auto');
  ga('send', 'pageview');

</script>

<!-- LOADING: http://smallenvelop.com/display-loading-icon-page-loads-completely/ -->

	<style type="text/css">
/* Paste this css to your style sheet file or under head tag */
/* This only works with JavaScript,
if it's not present, don't show loader */
.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url(loading.gif) center no-repeat #fff;
}
	</style>

	
	<style type="text/css">
        .navbar-nav.navbar-right{
            margin:0px;
        }
        #div_introduccion{
            font-size: 16px;
            padding-top: 20px;
            padding-left: 100px;
            padding-right: 100px;
            margin-bottom: 50px;
        }
        
        #div_introduccion p{
            font-size: 16px;
        }
		.fancybox-custom .fancybox-skin {
			box-shadow: 0 0 50px #222;
		}
.img_help{
	width: 2%;
}

	</style>
	<style type="text/css">
        .less_rigth{
          margin-left: -20%;
        }
        .created_div{

    width: 90%;
    margin-left: 5%;
    margin-right: 5%;
        }
        .created_by{
            float: left;
        }
        .created_by_logo{
            float: left;
        }

        .sponsored_by{
		/* replace for auspiciado_por */
        }
        .sponsored_by_logo{
        }

        .and_sponsored_by{

        }
        .and_sponsored_by_logo{
            height: 50px;
            position: relative;
        }
        .and_sponsored_by_img{
            margin: 0;
            /*background: yellow;*/
            position: absolute;
            top: 50%;
            left: 50%;
            margin-right: -50%;
            transform: translate(-50%, -50%);
        }
        .class_title{
            font-size: 48px;
            padding-top: 5px;
            padding-bottom: 5px;
        }
.centre
{
  display: flex;
  justify-content: center;
}

.logos{
    width: initial;
    height: 64px;
}
.2 {
/*    margin-right: -15px;*/
    margin-left: 15px;
}
.section{
    margin-top: 50px;
}

#menu.navbar-default .navbar-nav>.active>a {
    color: #555 !important;   
    background-color: white;
}
	</style>
	
</head>
<body>
<div class="se-pre-con"></div>



<!-- Navigation  ========================================== -->

<nav id="menu" class="navbar navbar-default navbar-fixed-top" style="
    background-color: #444 !important;
    padding: 0 !important;
">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="./">Observatorio MOOCs UC</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">

        <li><a href="#about-section" class="page-scroll">Inicio</a></li>
          
        <li><a href="#world-section" class="page-scroll">Demografía</a></li>
        <li><a href="#ranking-global-section" class="page-scroll">Ranking</a></li>
        <li><a href="#languages-section" class="page-scroll">Idiomas</a></li>
        <li><a href="#domains-section" class="page-scroll">Dominios</a></li>
        <li><a href="#distribution-section" class="page-scroll">Visión General</a></li>
          

        <li>
            <a class="fancybox" href="#help_about">
                Acerca de
            </a>
            
	<div id="help_about" style="width:400px;display: none;">
            <h3>Observatorio MOOCs UC</h3>
            <p>El objetivo de este sitio es difundir el trabajo realizado en el estudio 
                
                <a href="http://www.mooc-maker.org/?dl_id=29" rel="nofollow">
                "Estado del arte de adopción de MOOCs en la Educación Superior en América Latina y Europa"</a>.
            </p>
            <p>                
                El informe es fruto del trabajo conjunto realizado por el equipo de la 
                <a href="http://www.uc.cl/" rel="nofollow">
                Pontificia Universidad Católica de Chile</a> y la 
                <a href="http://www.uc3m.es/" rel="nofollow">
                Universidad Carlos III de Madrid</a> (entre otros), en el que se realizó un levantamiento de los datos de cursos MOOCs existentes en Latinoamérica.
                Puedes acceder a la información recopilada de los datos de MOOCS para: 
                <a href="https://docs.google.com/spreadsheets/d/e/2PACX-1vSnqQDguE-OOiAUK9_K8xPW2jL532ggEEZt5O_-l4s0gC7BtR91cmNqPdR3NDH8p4fXBDebZqbRZga7/pubhtml" rel="nofollow"> América Latina 2015</a>
                , 
                <a href="https://docs.google.com/spreadsheets/d/e/2PACX-1vRwmJnYrm5S1Ezfb3d13Vh2Z0VkwQpa30UmB7FWQYQxfBhVYlcLv0KlDZ7Is4vZbz1P4-AsKYZJjhnA/pubhtml" rel="nofollow">América Latina 2016</a>
                y 
                <a href="https://docs.google.com/spreadsheets/d/e/2PACX-1vRpL4LGSJGauWC3Ee6vIsLga_uO20n_Lxrc-voR6K88coqpfq9VGDmfAZLAIS4FMAS5mvxag10v24_b/pubhtml">Europa 2015</a>.<br>
                En esta última región se ofrecen cursos disponibles en más de un idioma, los que fueron considerados como MOOCs distintos para cada idioma. Para unificar los datos se utilizó <a href="https://docs.google.com/spreadsheets/d/e/2PACX-1vQ7HBp9W9hv3TS3NsO_yHGPVhnpfYjx-yvFL98eYvDJNOjb_UBnnxqHfQb4fKjTkYy5SMu8rAay7FSO/pubhtml" rel="nofollow">esta tabla de conversion de dominios para los datos europeos</a>.
            </p>
            <p>
                Finalmente, al explorar este sitio encontrarás
                <a href="#world-section" class="page-scroll">la demografía de los cursos</a>,
                <a href="#ranking-global-section" class="page-scroll">un ranking de mayores países productores</a>,
                <a href="#ranking-institutions-section" class="page-scroll">un ranking mayores instituciones productoras para cada país</a>,
                <a href="#languages-section" class="page-scroll">la comparación de idiomas de América Latina y Europa</a>,
                <a href="#domains-section" class="page-scroll">la comparación de dominios de América Latina y Europa</a> y 
                <a href="#distribution-section" class="page-scroll">una visión general del estado actual de los cursos</a>.
            </p>
	</div>
            
            <!--a href="http://www.mooc-maker.org/" class="page-scroll">
            Acerca de
          <i class="fa fa-external-link" aria-hidden="true"></i>
            </a-->
            
          </li>
          
        <li><a href="#contact-section" class="page-scroll">Contacto</a></li>
          
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  
  <!-- /.container-fluid -->
</nav>




<!-- About Section -->
<div id="about-section">
      <div class="section-title text-center center">
            <img class="img-responsive img-centered" src="mooc2.png" alt="">
          
          
        <div id="div_introduccion" class="col-md-12">
            <h1>¡Bienvenido al Observatorio MOOCs UC! </h1>
            
        </div>
          
    </div>
</div>
    
<div class="clearfix"></div>

<!-- Mapa Section -->
<div id="world-section" class="text-center section">
    <div class="section-title center">
      <br>
      <h2>Demografía de los cursos MOOC <a class="fancybox" href="#help1"><img src="Information_icon.svg" 
class="img_help" alt="Ayuda para el mapa" title="Ayuda para el mapa."/></a> </h2>
      <hr>
      <div class="clearfix"></div>
    </div>

    <div class=" wow fadeInDown" data-wow-delay="200ms">
        <div class="col-md-12">

	<div id="help1" style="width:400px;display: none;">
		<h3>Demografía</h3>
		<p>Aquí puedes ver la información disponible en un contexto geográfico (mapa mundial), donde se encuentran coloreados los países que cuentan con MOOCs en la región seleccionada. Estos colores dependen de la cantidad producida. Junto a este encontrarás 2 gráficos que muestran la distribución de <b>Idiomas</b> y <b>Dominios</b>.
		</p>
		<p>Si seleccionas algún país de la lista se actualizarán los gráficos con la información de ese país. 
		</p>
		<p>En caso que no haya un país seleccionado, se mostrará la información de la región.
		</p>
	</div>
<br />
<br />
          <iframe  src="componentes/mapa/mapa_datos_2016.php" style="width: 100%; height: 750px; border: 0"></iframe>

        </div>
    </div>
</div>


    
<div class="clearfix"></div>

<!-- Ranking Global Section -->
<div id="ranking-global-section" class="text-center section">
    <div class="section-title center">
	<br>
      <h2>Ranking Global <a class="fancybox" href="#help2"><img src="https://upload.wikimedia.org/wikipedia/commons/3/35/Information_icon.svg" 
class="img_help" alt="Ayuda para el mapa" title="Ayuda para el mapa."/></a>
</h2>
      <hr>
      <div class="clearfix"></div>
      
    </div>

    <div class=" wow fadeInDown" data-wow-delay="200ms">
        <div class="col-md-12">
<!--  FANCY => --->

	<div id="help2" style="width:400px;display: none;">
		<h3>Ranking Global</h3>
		<p>Aquí podrás ver el listado de los 10 mayores productores para América Latina, Europa y ambas regiones.
		</p>
		<p>Además encontrarás un par de gráficos que indican cómo se distribuye los dominios e idiomas en su producción. 
		</p>
		<p>En caso que no haya un país seleccionado, se mostrará la información de la región.
		</p>
	</div>
<br />
<br />
            
            
            
          <iframe  src="componentes/ranking/ranking5.php" style="width: 100%; height: 750px; border: 0"></iframe>
            

        </div>
    </div>
</div>


<div class="clearfix"></div>

<!-- Ranking Institutions Section -->
<div id="ranking-institutions-section" class="text-center section">
  <!-- <div class="container"> -->
    <div class="section-title center">
<br>
      <h2>Ranking Institucional 
<a class="fancybox" href="#help3"><img src="https://upload.wikimedia.org/wikipedia/commons/3/35/Information_icon.svg" 
class="img_help" alt="Ayuda para el mapa" title="Ayuda para el mapa."/></a>
</h2>
      <hr>
      <div class="clearfix"></div>
    </div>

    <div class=" wow fadeInDown" data-wow-delay="200ms">

        <div class="col-md-12">
            
<!--  FANCY => --->
            
	<div id="help3" style="width:400px;display: none;">
		<h3>Ranking Institucional</h3>
		<p>Aquí podrás ver el listado de las 10 mayores instituciones productoras para cualquier país de América Latina o Europa que elijas.
		</p>
		<p>Además encontrarás un par de gráficos que indican cómo se distribuye los dominios e idiomas en su producción. 
		</p>
		<p>En caso que no haya un país seleccionado, se mostrará la información de la región.
		</p>
	</div>
<br />
<br />

            <iframe  src="componentes/ranking_u/ranking_u3.php" style="width: 100%; height: 750px; border: 0"></iframe>
        </div>
        

    </div>

  </div>


<div class="clearfix"></div>

<!-- Portfolio Section -->
<div id="languages-section" class="text-center section">
  <!-- <div class="container"> -->
    <div class="section-title center">
<br>
      <h2>Idiomas <a class="fancybox" href="#help4"><img src="https://upload.wikimedia.org/wikipedia/commons/3/35/Information_icon.svg" 
class="img_help" alt="Ayuda para el mapa" title="Ayuda para el mapa."/></a>
</h2>
      <hr>
      <div class="clearfix"></div>
    </div>

    <div class=" wow fadeInDown" data-wow-delay="200ms">

        <div class="col-md-12">


            
<!--  FANCY => --->

            
	<div id="help4" style="width:400px;display: none;">
		<h3>Idiomas</h3>
		<p>Aquí puedes comparar la producción de cada idioma en las regiones. Utiliza los botones para cambiar el tipo de gráfico: cantidades separadas, cantidades apiladas, o porcentajes.
		</p>
	</div>
<br />
<br />
            
          <iframe  src="componentes/comparacion/comparacion_idiomas20.php" style="width: 100%; height: 750px; border: 0"></iframe>
            

        </div>

    </div>

  </div>

<div class="clearfix"></div>

<!-- Portfolio Section -->
<div id="domains-section" class="text-center section">
  <!-- <div class="container"> -->
    <div class="section-title center">
<br>
      <h2>Dominios/Temáticas <a class="fancybox" href="#help5"><img src="https://upload.wikimedia.org/wikipedia/commons/3/35/Information_icon.svg" 
class="img_help" alt="Ayuda para el mapa" title="Ayuda para el mapa."/></a>
</h2>
      <hr>
      <div class="clearfix"></div>
    </div>

    <div class=" wow fadeInDown" data-wow-delay="200ms">

        <div class="col-md-12">


<!--  FANCY => --->
            

	<div id="help5" style="width:400px;display: none;">
		<h3>Dominios/Temáticas</h3>
		<p>Aquí puedes comparar la producción de cada dominio (tema) en las regiones. Utiliza los botones para cambiar el tipo de gráfico: cantidades separadas, cantidades apiladas, o porcentajes.
		</p>
	</div>
<br />
<br />
<!-- <= FANCY --->
          <iframe  src="componentes/comparacion/comparacion_dominios3.php" style="width: 100%; height: 750px; border: 0"></iframe>
            
        </div>

    </div>

  </div>


<div class="clearfix"></div>

<!-- Portfolio Section -->
<div id="distribution-section" class="text-center section">
    <div class="section-title center">
<br>
      <h2>Visión General <a class="fancybox" href="#help6"><img src="https://upload.wikimedia.org/wikipedia/commons/3/35/Information_icon.svg" 
class="img_help" alt="Ayuda para el mapa" title="Ayuda para el mapa."/></a>
</h2>
      <hr>
      <div class="clearfix"></div>
    </div>

    <div class=" wow fadeInDown" data-wow-delay="200ms">

        <div class="col-md-12">
 
<!--  FANCY => --->

	<div id="help6" style="width:400px;display: none;">
		<h3>Visión General</h3>
		<p>Aquí puedes ver una visión general de la información disponible. Utiliza el <i>mouse</i> para explorar las relaciones.
		</p>
		<p>El grosor de la conexión indica refleja la producción. Al pasar el <i>mouse</i> se explica cada relación.
		</p>
	</div>
<br />
<br />
<!-- <= FANCY --->
          <iframe  src="componentes/sankey/sankey16.php" style="width: 100%; height: 750px; border: 0"></iframe>
            
        </div>
        
    </div>

  </div>

<div class="clearfix"></div> 
    
<div id="team-section">  
  <div class="container-fluid">
    <div class="">
      <div class="" style="">

        <div class="col-sm-6 col-md-2 col-lg-2   web " style="">
          <div class="portfolio-item wow fadeInDown animated animated" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInDown;">
            <div class="hover-bg"> 
                
                <div class="created_by">
                    <div>
                      <h3 class="created_label">
                        Creado por:
                      </h3>
                    </div>

                    <div class="">
                        <div class="created_by_logo col-sm-6 col-md-4 col-lg-4 web">
                            <a href="http://www.uc.cl">
                          <img class="logos" src="http://coleccionpatriciosanchez.cl/wordpress/wp-content/themes/cpsanchez/images/logouc-01.png" alt="Project Title"> 
                            </a>
                        </div>
                        <div class="created_by_logo col-sm-6 col-md-4 col-lg-4 web">
                            <a href="http://tech4dlearn.com/">
                                <img class="logos" src="logo_nosotros.jpg" alt="Project Title"> 
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>
          </div>
        </div>


        <div class="col-sm-6 col-md-4 col-lg-4 web " style="">
            <div class="portfolio-item wow fadeInDown animated animated" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInDown;">
            <div class="hover-bg"> 
                <div class="auspiciado_por">
                    <div>
                      <h3 class="created_label">
                      Con el apoyo de:
                      </h3>
                    </div>
                    <div class="">
                        <div class="sponsored_by_logo col-sm-6 col-md-7 col-lg-7 web">
                            <a href="https://ec.europa.eu/programmes/erasmus-plus/node_en">
                            <img id="comp-iqbb1yjsimgimage" alt="" src="https://static.wixstatic.com/media/43b932_8c334c96b1264ce4968dbf46044a15bb~mv2.png/v1/fill/w_234,h_67,al_c,usm_0.66_1.00_0.01/43b932_8c334c96b1264ce4968dbf46044a15bb~mv2.png" style="width: 234px; height: 67px; object-fit: cover;"></a>
                        </div>
                        <div class="sponsored_by_logo col-sm-6 col-md-4 col-lg-4 web">
                            
                            <a href="http://www.corfo.cl/">
                            <img id="comp-iqbazs4dimgimage" alt="" src="https://static.wixstatic.com/media/43b932_ee82d0dc0fb94daaa650b4fbb2b532ed~mv2.png/v1/fill/w_106,h_61,al_c,usm_0.66_1.00_0.01/43b932_ee82d0dc0fb94daaa650b4fbb2b532ed~mv2.png" style="width: 106px; height: 61px; object-fit: cover;">
                            </a>
                        </div>
                    </div>
                </div>
                
                
            </div>
          </div>
        </div>


        <div class="col-sm-6 col-md-5 col-lg-5 web " style="">
            
          <div class="portfolio-item wow fadeInDown animated animated" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInDown;">
            <div class="hover-bg"> 
                
                <div class="and_sponsored_by">
                    <div>
                      <h3 class="created_label">
                        Y el apoyo de:
                      </h3>
                    </div>
                    <div class="">
                        <div class="and_sponsored_by_logo col-sm-6 col-md-4 col-lg-4 web">
                            
                            
                            <a href="http://www.uc3m.es/">
                                <img id="comp-iq0ddrazimgimage" class="and_sponsored_by_img" alt="" src="https://static.wixstatic.com/media/43b932_8ae87dc03dd24342a757e618e77ba696~mv2.png/v1/fill/w_112,h_50,al_c,usm_0.66_1.00_0.01/43b932_8ae87dc03dd24342a757e618e77ba696~mv2.png" style="width: 112px; height: 50px; object-fit: cover;" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$comp-iq0ddraz.0.0.$image"></a>
                        </div>
                        <div class="and_sponsored_by_logo col-sm-6 col-md-3 col-lg-3 web">
                            <a href="http://www.upana.edu.gt/">
                            <img id="comp-iq0dki93imgimage" class="and_sponsored_by_img" alt="" src="https://static.wixstatic.com/media/43b932_ec06ee15de6b47c8876440d1b38f7d94~mv2.png/v1/fill/w_139,h_27,al_c,usm_0.66_1.00_0.01/43b932_ec06ee15de6b47c8876440d1b38f7d94~mv2.png" style="width: 139px; height: 27px; object-fit: cover;" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$comp-iq0dki93.0.0.$image">
                            </a>
                        </div>
                        <div class="and_sponsored_by_logo col-sm-6 col-md-3 col-lg-3 web">
                            
                            <a href="http://www.uchile.cl/">
                                <img id="comp-iq0dlkr1imgimage" class="and_sponsored_by_img" alt="" src="https://static.wixstatic.com/media/43b932_9de55812f9d0497baf8fc41a3ee7271c~mv2.png/v1/fill/w_84,h_60,al_c,usm_0.66_1.00_0.01/43b932_9de55812f9d0497baf8fc41a3ee7271c~mv2.png" style="width: 84px; height: 60px; object-fit: cover;" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$comp-iq0dlkr1.0.0.$image"></a>
                        </div>

                        <div class="and_sponsored_by_logo col-sm-6 col-md-2 col-lg-2 web">
                            <a href="http://www.unicauca.edu.co/">
                                <img id="comp-iq0dmcieimgimage" class="and_sponsored_by_img" alt="" src="https://static.wixstatic.com/media/43b932_ba6082c4c0ca4f06bac5ecba97881c1b~mv2.png/v1/fill/w_39,h_61,al_c,usm_0.66_1.00_0.01/43b932_ba6082c4c0ca4f06bac5ecba97881c1b~mv2.png" style="width: 39px; height: 61px; object-fit: cover;" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$comp-iq0dmcie.0.0.$image"></a>
                        </div>

                        <div class="and_sponsored_by_logo col-sm-6 col-md-4 col-lg-4 web">
                            
                            <a href="https://www.galileo.edu/">
                            <img id="comp-iq0dn76timgimage" class="and_sponsored_by_img" alt="" src="https://static.wixstatic.com/media/43b932_3bac8cc195be4a39a4bb4a58974e8cc8~mv2.png/v1/fill/w_112,h_43,al_c,usm_0.66_1.00_0.01/43b932_3bac8cc195be4a39a4bb4a58974e8cc8~mv2.png" style="width: 112px; height: 43px; object-fit: cover;" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$comp-iq0dn76t.0.0.$image">
                            </a>
                        </div>

                        <div class="and_sponsored_by_logo col-sm-6 col-md-3 col-lg-3 web">
                            
                            <a href="https://www.tugraz.at/home/">
                            <img id="comp-iq0df748imgimage" class="and_sponsored_by_img" alt="" src="https://static.wixstatic.com/media/43b932_184c0de9e8b349e3b617e97cb2d33ced~mv2.png/v1/fill/w_77,h_77,al_c,usm_0.66_1.00_0.01/43b932_184c0de9e8b349e3b617e97cb2d33ced~mv2.png" style="width: 77px; height: 77px; object-fit: cover;" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$comp-iq0df748.0.0.$image">
                            </a>
                        </div>

                        <div class="and_sponsored_by_logo col-sm-6 col-md-3 col-lg-3 web">
                            <a href="http://www.ucn.edu.co/">
                            
                                <img id="comp-iq0djv66imgimage" class="and_sponsored_by_img" alt="" src="https://static.wixstatic.com/media/43b932_5cba37edecd649708414eaa2372d7937~mv2.png/v1/fill/w_127,h_49,al_c,usm_0.66_1.00_0.01/43b932_5cba37edecd649708414eaa2372d7937~mv2.png" style="width: 127px; height: 49px; object-fit: cover;" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$comp-iq0djv66.0.0.$image"></a>
                        </div>
                    </div>
                </div>
                
                
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>
</div>

    
<div id="contact-section" class="section">
    <div class="section-title text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
      <h2>Contacto</h2>

	<span>
	      <i class="fa fa-map-marker fa-fw fa-2x info_uc"></i>Vicuña Mackenna 4860, Macul - Santiago - Chile
	</span>
	<span>
	      <i class="fa fa-envelope-o fa-fw fa-2x info_uc"></i>dei@ing.puc.cl
	</span>



    </div>

  </div>

<div id="social-section">
  <!-- <div class="container"> -->
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<div class="addthis_inline_share
            _toolbox"></div>

  </div>

<div id="footer" class="text-center">
  <!-- <div class="container"> -->
    <p>Sitio desarrollado por Ricardo Rendich</p>
  </div>

<!-- Portfolio Modals -->
<!-- Use the modals below to showcase details about your portfolio projects! -->

<!-- Portfolio Modal 1 -->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-content">
    <div class="close-modal" data-dismiss="modal">
      <div class="lr">
        <div class="rl"> </div>
      </div>
    </div>
    <!-- <div class="container"> -->
      <div class="2">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="modal-body">
            <!-- Project Details Go Here -->
            <h2>Project Title</h2>
            <p class="item-intro">Lorem ipsum dolor sit amet consectetur.</p>
            <img class="img-responsive img-centered" src="img/portfolio/01-preview.jpg" alt="">
            <p>Lorem ipsum dolor sit amet, sea essent iisque iudicabit te, pro no justo delicata inimicus et oblique docendi laboramus eum. Ei minim fabulas pertinacia pro graeco urbanitas reformidans quoid.</p>
            <ul class="list-inline">
              <li><span>Client</span>: John Doe</li>
              <li><span>Service</span>: Web Design</li>
            </ul>
            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
          </div>
        </div>
      </div>
<!--
</div>
-->
  </div>
</div>
<!-- Portfolio Modal 2 -->
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-content">
    <div class="close-modal" data-dismiss="modal">
      <div class="lr">
        <div class="rl"> </div>
      </div>
    </div>
    <!-- <div class="container"> -->
      <div class="2">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="modal-body">
            <!-- Project Details Go Here -->
            <h2>Project Title</h2>
            <p class="item-intro">Lorem ipsum dolor sit amet consectetur.</p>
            <img class="img-responsive img-centered" src="img/portfolio/02-preview.jpg" alt="">
            <p>Lorem ipsum dolor sit amet, sea essent iisque iudicabit te, pro no justo delicata inimicus et oblique docendi laboramus eum. Ei minim fabulas pertinacia pro graeco urbanitas reformidans quoid.</p>
            <ul class="list-inline">
              <li><span>Client</span>: John Doe</li>
              <li><span>Service</span>: Web Design</li>
            </ul>
            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
          </div>
        </div>
      </div>
<!--
</div>
-->
  </div>
</div>
<!-- Portfolio Modal 3 -->
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-content">
    <div class="close-modal" data-dismiss="modal">
      <div class="lr">
        <div class="rl"> </div>
      </div>
    </div>
    <!-- <div class="container"> -->
      <div class="2">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="modal-body">
            <!-- Project Details Go Here -->
            <h2>Project Title</h2>
            <p class="item-intro">Lorem ipsum dolor sit amet consectetur.</p>
            <img class="img-responsive img-centered" src="img/portfolio/03-preview.jpg" alt="">
            <p>Lorem ipsum dolor sit amet, sea essent iisque iudicabit te, pro no justo delicata inimicus et oblique docendi laboramus eum. Ei minim fabulas pertinacia pro graeco urbanitas reformidans quoid.</p>
            <ul class="list-inline">
              <li><span>Client</span>: John Doe</li>
              <li><span>Service</span>: Web Design</li>
            </ul>
            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
          </div>
        </div>
      </div>
<!--
</div>
-->
  </div>
</div>
<!-- Portfolio Modal 4 -->
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-content">
    <div class="close-modal" data-dismiss="modal">
      <div class="lr">
        <div class="rl"> </div>
      </div>
    </div>
    <!-- <div class="container"> -->
      <div class="2">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="modal-body">
            <!-- Project Details Go Here -->
            <h2>Project Title</h2>
            <p class="item-intro">Lorem ipsum dolor sit amet consectetur.</p>
            <img class="img-responsive img-centered" src="img/portfolio/04-preview.jpg" alt="">
            <p>Lorem ipsum dolor sit amet, sea essent iisque iudicabit te, pro no justo delicata inimicus et oblique docendi laboramus eum. Ei minim fabulas pertinacia pro graeco urbanitas reformidans quoid.</p>
            <ul class="list-inline">
              <li><span>Client</span>: John Doe</li>
              <li><span>Service</span>: Web Design</li>
            </ul>
            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
          </div>
        </div>
      </div>
<!--
</div>
-->
  </div>
</div>
<!-- Portfolio Modal 5 -->
<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-content">
    <div class="close-modal" data-dismiss="modal">
      <div class="lr">
        <div class="rl"> </div>
      </div>
    </div>
    <!-- <div class="container"> -->
      <div class="2">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="modal-body">
            <!-- Project Details Go Here -->
            <h2>Project Title</h2>
            <p class="item-intro">Lorem ipsum dolor sit amet consectetur.</p>
            <img class="img-responsive img-centered" src="img/portfolio/05-preview.jpg" alt="">
            <p>Lorem ipsum dolor sit amet, sea essent iisque iudicabit te, pro no justo delicata inimicus et oblique docendi laboramus eum. Ei minim fabulas pertinacia pro graeco urbanitas reformidans quoid.</p>
            <ul class="list-inline">
              <li><span>Client</span>: John Doe</li>
              <li><span>Service</span>: Web Design</li>
            </ul>
            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
          </div>
        </div>
      </div>
<!--
</div>
-->
  </div>
</div>
<!-- Portfolio Modal 6 -->
<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-content">
    <div class="close-modal" data-dismiss="modal">
      <div class="lr">
        <div class="rl"> </div>
      </div>
    </div>
    <!-- <div class="container"> -->
      <div class="2">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="modal-body">
            <!-- Project Details Go Here -->
            <h2>Project Title</h2>
            <p class="item-intro">Lorem ipsum dolor sit amet consectetur.</p>
            <img class="img-responsive img-centered" src="img/portfolio/06-preview.jpg" alt="">
            <p>Lorem ipsum dolor sit amet, sea essent iisque iudicabit te, pro no justo delicata inimicus et oblique docendi laboramus eum. Ei minim fabulas pertinacia pro graeco urbanitas reformidans quoid.</p>
            <ul class="list-inline">
              <li><span>Client</span>: John Doe</li>
              <li><span>Service</span>: Web Design</li>
            </ul>
            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
          </div>
        </div>
      </div>
<!--
</div>
-->
  </div>
</div>
<!-- Portfolio Modal 7 -->
<div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-content">
    <div class="close-modal" data-dismiss="modal">
      <div class="lr">
        <div class="rl"> </div>
      </div>
    </div>
    <!-- <div class="container"> -->
      <div class="2">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="modal-body">
            <!-- Project Details Go Here -->
            <h2>Project Title</h2>
            <p class="item-intro">Lorem ipsum dolor sit amet consectetur.</p>
            <img class="img-responsive img-centered" src="img/portfolio/07-preview.jpg" alt="">
            <p>Lorem ipsum dolor sit amet, sea essent iisque iudicabit te, pro no justo delicata inimicus et oblique docendi laboramus eum. Ei minim fabulas pertinacia pro graeco urbanitas reformidans quoid.</p>
            <ul class="list-inline">
              <li><span>Client</span>: John Doe</li>
              <li><span>Service</span>: Web Design</li>
            </ul>
            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
          </div>
        </div>
      </div>
<!--
</div>
-->
  </div>
</div>
<!-- Portfolio Modal 8 -->
<div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-content">
    <div class="close-modal" data-dismiss="modal">
      <div class="lr">
        <div class="rl"> </div>
      </div>
    </div>
    <!-- <div class="container"> -->
      <div class="2">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="modal-body">
            <!-- Project Details Go Here -->
            <h2>Project Title</h2>
            <p class="item-intro">Lorem ipsum dolor sit amet consectetur.</p>
            <img class="img-responsive img-centered" src="img/portfolio/08-preview.jpg" alt="">
            <p>Lorem ipsum dolor sit amet, sea essent iisque iudicabit te, pro no justo delicata inimicus et oblique docendi laboramus eum. Ei minim fabulas pertinacia pro graeco urbanitas reformidans quoid.</p>
            <ul class="list-inline">
              <li><span>Client</span>: John Doe</li>
              <li><span>Service</span>: Web Design</li>
            </ul>
            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
          </div>
        </div>
      </div>
<!--
</div>
-->
  </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.1.11.1.js"></script>

<!-- LOADING -->
	<script type="text/javascript">
// Para LOADING
$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
</script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/SmoothScroll.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/jquery.counterup.js"></script>
<script type="text/javascript" src="js/waypoints.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script>
<script type="text/javascript" src="js/contact_me.js"></script>
<script type="text/javascript" src="js/owl.carousel.js"></script>

<!-- Fancy ->
    ================================================== -->

	<!-- Add jQuery library -->
<!--
	<script type="text/javascript" src="fancyapps_fancyBox/lib/jquery-1.10.1.min.js"></script>
-->
	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="fancyapps_fancyBox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="fancyapps_fancyBox/source/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="fancyapps_fancyBox/source/jquery.fancybox.css?v=2.1.5" media="screen" />

	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="fancyapps_fancyBox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="fancyapps_fancyBox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

	<!-- Add Thumbnail helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="fancyapps_fancyBox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="fancyapps_fancyBox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

	<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="fancyapps_fancyBox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>


	<script type="text/javascript">

//window.onload = function () { alert("It's loaded!") }
// TRUCO TRICK HINT DESDE http://stackoverflow.com/questions/9899372/pure-javascript-equivalent-to-jquerys-ready-how-to-call-a-function-when-the
r(function(){
//		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */
    
			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				openEffect : 'none',

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(238,238,238,0.85)'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});


			/*
			 *  Thumbnail helper. Disable animations, hide close button, ars and slide to next gallery item if clicked
			 */

			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				ars    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

			/*
			 *  Media helper. Group items, disable animations, hide ars, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					ars : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

			/*
			 *  Open manually
			 */

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('1_b.jpg');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'iframe.html',
					type : 'iframe',
					padding : 5
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : '1_b.jpg',
						title : 'My title'
					}, {
						href : '2_b.jpg',
						title : '2nd title'
					}, {
						href : '3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});

$('button').on('click', function() {
    $.fancybox($("a.fancybox"));
});
//		});
    });
    function r(f){/in/.test(document.readyState)?setTimeout('r('+f+')',9):f()}


	</script>
	

<!-- Fancy <-
    ================================================== -->

<!-- Javascripts
    ================================================== -->
<script type="text/javascript" src="js/main.js"></script>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-57fe96294a2081a6"></script>

</body>
</html>
