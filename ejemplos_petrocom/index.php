
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  
  <link rel="stylesheet" type="text/css" href="/themes/materialize/css/icons.css" />
<link rel="stylesheet" type="text/css" href="/themes/materialize/css/custom/custom.css" />
<link rel="stylesheet" type="text/css" href="/themes/materialize/css/materialize.min.css" />
<link rel="stylesheet" type="text/css" href="/themes/materialize/css/materialize.css" />
<link rel="stylesheet" type="text/css" href="/themes/materialize/css/materialize.clockpicker.css" />
<script type="text/javascript" src="/assets/e9f2dfb6/jquery.js"></script>
<script type="text/javascript" src="/themes/materialize/js/materialize.min.js"></script>
<script type="text/javascript" src="/themes/materialize/js/plugins/materialize.clockpicker.js"></script>
<title>TecnoVum | Clientes</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="title" content="Simattir">
  <meta name="description" content="Sistema de monitoreo de alerta temprana en tiempo real">

  <meta name="author" content="Prime Developers Chile">
  

  <link href='http://fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>

  <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
            <!-- Fav and Touch and touch icons -->
      <link rel="shortcut icon" href="/images/logo-icon.png">
      <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/images/logo-icon.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/images/logo-icon.png">
      <link rel="apple-touch-icon-precomposed" href="/images/logo-icon.png">
      <!-- <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->

      <!-- Css custom & plugins js -->
      <!-- <link href="css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection"> -->
      <!-- <link href="css/layouts/page-center.css" type="text/css" rel="stylesheet" media="screen,projection"> -->
      <!-- <link href="js/plugins/prism/prism.css" type="text/css" rel="stylesheet" media="screen,projection"> -->
      <!-- <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection"> -->
      
      <!-- Flot Charts -->
      <!-- <script language="javascript" type="text/javascript" src="js/flot-charts/jquery.flot.js"></script> -->
      <!-- <link href="css/flot-charts.css" type="text/css" rel="stylesheet" media="screen,projection"> -->

      <!-- HighCharts -->
      <script src="https://code.highcharts.com/highcharts.js"></script>
      <script src="https://code.highcharts.com/highcharts-more.js"></script>
      <script src="https://code.highcharts.com/modules/exporting.js"></script>


            <!-- styles for style switcher -->
            <script src="http://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script> 
    </head>


    

    <body>
      <section id="navigation-main">   
        <!-- Require the navigation -->
        


<nav>
    <div class="nav-wrapper  grey lighten-5">
        <a href="/index.php?r=site/index" class="brand-logo">
            <img src="images/mini-logo2.png" width=""  alt="logo" data-original="images/bg.png"</img>
        </a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <!-- <li><a href="#"><i class="material-icons left">home</i>Inicio</a></li> -->
            <li><a href="/index.php?r=site/index"><i class="material-icons right">home</i> Inicio</a></li>
                        <li><a href="/index.php?r=usuario/updatePass">Niva Chile <i class="material-icons right">perm_identity</i></a></li>
            <li><a href="/index.php?r=site/logout">Desconectarse <i class="material-icons right">exit_to_app</i></a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
            <li><a href="#"><i class="material-icons right">home</i>Inicio</a></li>
            <ul class="collapsible collapsible-accordion">
                <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Ejemplo<i class="material-icons right">arrow_drop_down</i></a>
                  <div class="collapsible-body">
                    <ul>
                       <li><a href="/index.php?r=mortalidad/index">Registros</a></li>
                       <li><a href="#!">two</a></li>
                       <li class="divider"></li>
                       <li><a href="#!">three</a></li>
                   </ul>
                   </div>
               </li>
             </ul> 
             <!-- fin de dropdown -->
            <li><a href="/index.php?r=site/logout">Desconectarse <i class="material-icons right">exit_to_app</i></a></li>
   </ul>
</div>
</nav>

<script>
  $(document).ready(function(){
    $(".button-collapse").sideNav();
    $(".dropdown-button").dropdown();
    $('.collapsible').collapsible();
    $('select').material_select();
})
</script>
      </section><!-- /#navigation-main -->

      <section>
        <div class="">
          <!-- Include content pages -->
          <div id="content">
			<!-- breadcrumbs -->
        
	<script type="text/javascript" src="js/jquery.scrollTo.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<h4 class="center">PARGUA</h4>
<h5 class="center">Estación Meteorológica</h5>

<div class="row col s12">
				<!-- Modal Trigger -->
			<div id="modal1" class="modal">
				<div class="modal-content">
					<h4>PARGUA</h4>
					<p>Seleccione las fechas para exportar datos</p>
					<div class="center" style="margin-bottom: 1%;">
						<div class="col m6 s12">
							<label for="fecha_iniG">Fecha Inicial</label>							<input class="center" type="text" value="" name="fecha_iniG" id="fecha_iniG" />				
						</div>
						<div class="col m6 s12">
							<label for="fecha_finG">Fecha Final</label>							<input class="center" type="text" value="" name="fecha_finG" id="fecha_finG" />						</div>
						<input id="exportAll" class="btn waves-effect waves-light center" name="yt0" type="button" value="Exportar" />					</div>
					*Si no se encuentra información, será exportado el último día de funcionamiento.
				</div>
				<div class="modal-footer">
					<a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
				</div>
			</div>
			<div class="center">
				<a class="waves-effect waves-light btn" href="#modal1">Exportar datos PARGUA</a>
			</div>
			<br>
			<!-- fin modal -->
			<div class="col s12 center">
				<div class="col s12">
					<div class="col s12 m12 center" style="display:none;" id="error">
						<i class="small material-icons">warning</i> Debe seleccionar las fechas.
					</div>
					<div class="col s12 m6 center">
						<label for="fecha_ini">Fecha Inicial</label>						<input class="center" type="text" value="" name="fecha_ini" id="fecha_ini" />					</div>
					<div class="col s12  m6 center">
						<label for="fecha_fin">Fecha Final</label>						<input class="datepicker center" data-value="2017/08/29" type="text" value="" name="fecha_fin" id="fecha_fin" />					</div>
				</div>
				<div class="col s12 center">
					<input type="hidden" value="10" name="ub" id="ub" /><input id="buscar" class="btn waves-effect waves-light" name="yt1" type="button" value="Ver" />				</div>
				<div class="col s12">
					<span id="type"><input onClick="buscar();" value="t" id="type_0" checked="checked" type="radio" name="type" /> <label for="type_0">Temperatura</label> <input onClick="buscar();" value="h" id="type_1" type="radio" name="type" /> <label for="type_1">humedad</label> <input onClick="buscar();" value="ts" id="type_2" type="radio" name="type" /> <label for="type_2">Temp. Suelo</label> <input onClick="buscar();" value="s" id="type_3" type="radio" name="type" /> <label for="type_3">Hum. Suelo</label> <input onClick="buscar();" value="p" id="type_4" type="radio" name="type" /> <label for="type_4">Presión Atm.</label> <input onClick="buscar();" value="uv" id="type_5" type="radio" name="type" /> <label for="type_5">UV</label> <input onClick="buscar();" value="ll" id="type_6" type="radio" name="type" /> <label for="type_6">Agua Caída</label> <input onClick="buscar();" value="vel" id="type_7" type="radio" name="type" /> <label for="type_7">Vel. Viento</label></span>					</div>
				</div>
				<br>
				<div class="row">
					<div class="col s12 grey lighten-4">
						<!-- panel de variables actuales -->
						<div class="col s12 m3">
							<div class="card-panel teal" id="datos-actuales">
								<h5> Medición Actual</h5>
								<span class="white-text">
									<table class="responsive-table">
										<tr>
											<td>Temperatura </td>
											<td>10,5 ºC</td>
										</tr>
										<tr>
											<td>Humedad </td>
											<td>49,0 %</td>
										</tr>
										<tr>
											<td>Temperatura de suelo </td>
											<td>0,0 ºC</td>
										</tr>
										<tr>
											<td>Humedad de suelo </td>
											<td>0,0 %</td>
										</tr>
										<tr>
											<td>Presión </td>
											<td>1.041,0 hPa</td>
										</tr>
										<tr>
											<td>UV </td>
											<td>0,0 mW/cm<sup>2</sup></td>
										</tr>
										<tr>
											<td>Agua caída </td>
											<td>0,0 mm de Agua</td>
										</tr>
										<tr>
											<td>Velocidad viento </td>
											<td>3,2 Km/hr</td>
										</tr>
										<tr>
											<td>Dirección viento </td>
											<td> S</td>
										</tr>
										
									</table>
								</span>
							</div>
							<div class="row center" id="ultimo-dato"> 29 Agosto, 17:55 hrs.</div>
							
						</div>
						<!-- panel de graficos -->
						<div class="col m9 s12">
							<div class="card">
								<div class="card-content">
									<span class="card-title activator grey-text text-darken-4">Datos<i class="material-icons right">more_vert</i></span>
									<div id="containerT" style="height: 25%;width: 100%"></div>
									<div id="containerH" style="height: 25%;width: 100%"></div>
								</div>
								<div class="card-reveal">
									<span class="card-title grey-text text-darken-4">Datos de Ubicación <i class="material-icons right">close</i></span>
									<table class="responsive-table centered">
										<thead>
											<tr>
												<!-- <th data-field="id">Fecha registro</th> -->
												<th>Fecha</th><th>Temperatura<br>(ºC)</th><th>Húmedad<br>(%)</th><th>Temperatura de Suelo<br>(ºC)</th><th>Humedad de Suelo<br>(%)</th><th>Presión Atmosférica<br>(hPa)</th><th>UV<br>(mW/cm<sup>2</sup>)</th><th>Agua Caída<br>(mm)</th><th>Vel. Viento<br>(Km/hr)</th><th>Dir. Viento</th>											</tr>
										</thead>
										<tbody id="contenidoTabla">
											<tr><td>29 Agosto, 0:03 am</td><td>8,0</td><td>79,2</td><td>0,0</td><td>0,0</td><td>1.035,0</td><td>0,0</td><td>0,0</td><td>2,2</td><td> S</td></tr><tr><td>29 Agosto, 0:08 am</td><td>8,0</td><td>79,5</td><td>0,0</td><td>0,0</td><td>1.034,0</td><td>0,0</td><td>0,0</td><td>2,5</td><td> S</td></tr><tr><td>29 Agosto, 0:13 am</td><td>8,0</td><td>79,3</td><td>0,0</td><td>0,0</td><td>1.034,0</td><td>0,0</td><td>0,0</td><td>0,0</td><td> S</td></tr><tr><td>29 Agosto, 0:18 am</td><td>7,9</td><td>79,1</td><td>0,0</td><td>0,0</td><td>1.035,0</td><td>0,0</td><td>0,0</td><td>0,0</td><td> S</td></tr><tr><td>29 Agosto, 0:23 am</td><td>7,8</td><td>79,0</td><td>0,0</td><td>0,0</td><td>1.035,0</td><td>0,0</td><td>0,0</td><td>0,0</td><td> S</td></tr><tr><td>29 Agosto, 0:44 am</td><td>7,6</td><td>79,4</td><td>0,0</td><td>0,0</td><td>1.035,0</td><td>0,0</td><td>0,0</td><td>0,0</td><td> S</td></tr><tr><td>29 Agosto, 0:48 am</td><td>7,6</td><td>79,9</td><td>0,0</td><td>0,0</td><td>1.035,0</td><td>0,0</td><td>0,0</td><td>0,0</td><td> S</td></tr><tr><td>29 Agosto, 0:59 am</td><td>7,6</td><td>81,3</td><td>0,0</td><td>0,0</td><td>1.035,0</td><td>0,0</td><td>0,0</td><td>2,4</td><td> S</td></tr><tr><td>29 Agosto, 1:03 am</td><td>7,6</td><td>81,4</td><td>0,0</td><td>0,0</td><td>1.035,0</td><td>0,0</td><td>0,0</td><td>2,7</td><td> S</td></tr><tr><td>29 Agosto, 1:18 am</td><td>7,7</td><td>81,0</td><td>0,0</td><td>0,0</td><td>1.035,0</td><td>0,0</td><td>0,0</td><td>3,0</td><td> S</td></tr><tr><td>29 Agosto, 1:34 am</td><td>7,7</td><td>80,6</td><td>0,0</td><td>0,0</td><td>1.035,0</td><td>0,0</td><td>0,0</td><td>3,0</td><td> S</td></tr><tr><td>29 Agosto, 1:39 am</td><td>7,7</td><td>80,3</td><td>0,0</td><td>0,0</td><td>1.035,0</td><td>0,0</td><td>0,0</td><td>3,2</td><td> S</td></tr><tr><td>29 Agosto, 1:49 am</td><td>7,8</td><td>79,7</td><td>0,0</td><td>0,0</td><td>1.035,0</td><td>0,0</td><td>0,0</td><td>2,7</td><td> S</td></tr><tr><td>29 Agosto, 2:04 am</td><td>7,8</td><td>78,5</td><td>0,0</td><td>0,0</td><td>1.035,0</td><td>0,0</td><td>0,0</td><td>3,8</td><td> S</td></tr><tr><td>29 Agosto, 2:19 am</td><td>7,8</td><td>77,1</td><td>0,0</td><td>0,0</td><td>1.035,0</td><td>0,0</td><td>0,0</td><td>2,8</td><td> S</td></tr><tr><td>29 Agosto, 2:34 am</td><td>7,8</td><td>76,8</td><td>0,0</td><td>0,0</td><td>1.036,0</td><td>0,0</td><td>0,0</td><td>2,5</td><td> S</td></tr><tr><td>29 Agosto, 2:49 am</td><td>7,6</td><td>76,6</td><td>0,0</td><td>0,0</td><td>1.036,0</td><td>0,0</td><td>0,0</td><td>1,9</td><td> S</td></tr><tr><td>29 Agosto, 3:05 am</td><td>7,6</td><td>71,5</td><td>0,0</td><td>0,0</td><td>1.036,0</td><td>0,0</td><td>0,0</td><td>5,1</td><td> S</td></tr><tr><td>29 Agosto, 3:09 am</td><td>7,6</td><td>69,5</td><td>0,0</td><td>0,0</td><td>1.036,0</td><td>0,0</td><td>0,0</td><td>4,1</td><td> S</td></tr><tr><td>29 Agosto, 3:20 am</td><td>7,7</td><td>71,0</td><td>0,0</td><td>0,0</td><td>1.036,0</td><td>0,0</td><td>0,0</td><td>3,6</td><td> S</td></tr><tr><td>29 Agosto, 3:24 am</td><td>7,7</td><td>70,6</td><td>0,0</td><td>0,0</td><td>1.036,0</td><td>0,0</td><td>0,0</td><td>3,1</td><td> S</td></tr><tr><td>29 Agosto, 3:40 am</td><td>7,5</td><td>68,3</td><td>0,0</td><td>0,0</td><td>1.036,0</td><td>0,0</td><td>0,0</td><td>4,3</td><td> S</td></tr><tr><td>29 Agosto, 4:05 am</td><td>7,3</td><td>70,0</td><td>0,0</td><td>0,0</td><td>1.036,0</td><td>0,0</td><td>0,0</td><td>0,0</td><td> S</td></tr><tr><td>29 Agosto, 4:10 am</td><td>7,2</td><td>70,5</td><td>0,0</td><td>0,0</td><td>1.036,0</td><td>0,0</td><td>0,0</td><td>0,0</td><td> S</td></tr><tr><td>29 Agosto, 4:35 am</td><td>7,4</td><td>69,9</td><td>0,0</td><td>0,0</td><td>1.036,0</td><td>0,0</td><td>0,0</td><td>5,1</td><td> S</td></tr><tr><td>29 Agosto, 4:50 am</td><td>7,5</td><td>68,6</td><td>0,0</td><td>0,0</td><td>1.036,0</td><td>0,0</td><td>0,0</td><td>4,7</td><td> S</td></tr><tr><td>29 Agosto, 5:01 am</td><td>7,3</td><td>67,7</td><td>0,0</td><td>0,0</td><td>1.036,0</td><td>0,0</td><td>0,0</td><td>5,1</td><td> S</td></tr><tr><td>29 Agosto, 5:05 am</td><td>7,2</td><td>67,1</td><td>0,0</td><td>0,0</td><td>1.036,0</td><td>0,0</td><td>0,0</td><td>5,6</td><td> S</td></tr><tr><td>29 Agosto, 5:20 am</td><td>6,8</td><td>67,8</td><td>0,0</td><td>0,0</td><td>1.036,0</td><td>0,0</td><td>0,0</td><td>3,5</td><td> S</td></tr><tr><td>29 Agosto, 5:31 am</td><td>6,6</td><td>68,0</td><td>0,0</td><td>0,0</td><td>1.036,0</td><td>0,0</td><td>0,0</td><td>3,1</td><td> S</td></tr><tr><td>29 Agosto, 5:36 am</td><td>6,5</td><td>68,6</td><td>0,0</td><td>0,0</td><td>1.036,0</td><td>0,0</td><td>0,0</td><td>2,7</td><td> S</td></tr><tr><td>29 Agosto, 5:41 am</td><td>6,5</td><td>68,9</td><td>0,0</td><td>0,0</td><td>1.036,0</td><td>0,0</td><td>0,0</td><td>3,7</td><td> S</td></tr><tr><td>29 Agosto, 5:56 am</td><td>6,5</td><td>68,8</td><td>0,0</td><td>0,0</td><td>1.036,0</td><td>0,0</td><td>0,0</td><td>3,0</td><td> S</td></tr><tr><td>29 Agosto, 6:06 am</td><td>6,7</td><td>68,6</td><td>0,0</td><td>0,0</td><td>1.036,0</td><td>0,0</td><td>0,0</td><td>3,1</td><td> S</td></tr><tr><td>29 Agosto, 6:21 am</td><td>6,8</td><td>66,2</td><td>0,0</td><td>0,0</td><td>1.037,0</td><td>0,0</td><td>0,0</td><td>3,2</td><td> S</td></tr><tr><td>29 Agosto, 6:31 am</td><td>6,8</td><td>65,0</td><td>0,0</td><td>0,0</td><td>1.037,0</td><td>0,0</td><td>0,0</td><td>2,9</td><td> S</td></tr><tr><td>29 Agosto, 6:46 am</td><td>6,9</td><td>65,6</td><td>0,0</td><td>0,0</td><td>1.037,0</td><td>0,0</td><td>0,0</td><td>4,1</td><td> S</td></tr><tr><td>29 Agosto, 6:51 am</td><td>6,9</td><td>65,0</td><td>0,0</td><td>0,0</td><td>1.037,0</td><td>0,0</td><td>0,0</td><td>2,7</td><td> S</td></tr><tr><td>29 Agosto, 7:07 am</td><td>6,8</td><td>62,4</td><td>0,0</td><td>0,0</td><td>1.037,0</td><td>0,0</td><td>0,0</td><td>2,5</td><td> S</td></tr><tr><td>29 Agosto, 7:11 am</td><td>6,8</td><td>62,9</td><td>0,0</td><td>0,0</td><td>1.037,0</td><td>0,0</td><td>0,0</td><td>3,4</td><td> S</td></tr><tr><td>29 Agosto, 7:27 am</td><td>6,9</td><td>62,6</td><td>0,0</td><td>0,0</td><td>1.037,0</td><td>0,0</td><td>0,0</td><td>3,4</td><td> S</td></tr><tr><td>29 Agosto, 7:42 am</td><td>6,8</td><td>63,9</td><td>0,0</td><td>0,0</td><td>1.037,0</td><td>0,0</td><td>0,0</td><td>0,0</td><td> S</td></tr><tr><td>29 Agosto, 7:52 am</td><td>6,9</td><td>64,5</td><td>0,0</td><td>0,0</td><td>1.038,0</td><td>0,0</td><td>0,0</td><td>0,0</td><td> S</td></tr><tr><td>29 Agosto, 8:07 am</td><td>6,9</td><td>64,7</td><td>0,0</td><td>0,0</td><td>1.038,0</td><td>0,0</td><td>0,0</td><td>2,1</td><td> S</td></tr><tr><td>29 Agosto, 8:17 am</td><td>6,9</td><td>65,2</td><td>0,0</td><td>0,0</td><td>1.038,0</td><td>0,0</td><td>0,0</td><td>2,0</td><td> S</td></tr><tr><td>29 Agosto, 8:22 am</td><td>6,9</td><td>65,9</td><td>0,0</td><td>0,0</td><td>1.038,0</td><td>0,0</td><td>0,0</td><td>2,5</td><td> S</td></tr><tr><td>29 Agosto, 8:32 am</td><td>6,9</td><td>65,9</td><td>0,0</td><td>0,0</td><td>1.038,0</td><td>0,0</td><td>0,0</td><td>2,3</td><td> S</td></tr><tr><td>29 Agosto, 8:47 am</td><td>6,9</td><td>68,6</td><td>0,0</td><td>0,0</td><td>1.038,0</td><td>0,0</td><td>0,0</td><td>2,9</td><td> S</td></tr><tr><td>29 Agosto, 8:58 am</td><td>6,9</td><td>70,1</td><td>0,0</td><td>0,0</td><td>1.038,0</td><td>0,0</td><td>0,0</td><td>2,5</td><td> S</td></tr><tr><td>29 Agosto, 9:12 am</td><td>7,0</td><td>72,7</td><td>0,0</td><td>0,0</td><td>1.039,0</td><td>0,0</td><td>0,0</td><td>4,5</td><td> S</td></tr><tr><td>29 Agosto, 10:21 am</td><td>14,8</td><td>47,4</td><td>0,0</td><td>0,0</td><td>1.040,0</td><td>0,0</td><td>0,0</td><td>0,0</td><td> S</td></tr><tr><td>29 Agosto, 10:31 am</td><td>17,2</td><td>41,8</td><td>0,0</td><td>0,0</td><td>1.040,0</td><td>0,0</td><td>0,0</td><td>0,0</td><td> S</td></tr><tr><td>29 Agosto, 10:46 am</td><td>17,3</td><td>38,8</td><td>0,0</td><td>0,0</td><td>1.040,0</td><td>0,0</td><td>0,0</td><td>0,0</td><td> S</td></tr><tr><td>29 Agosto, 10:56 am</td><td>16,8</td><td>38,6</td><td>0,0</td><td>0,0</td><td>1.040,0</td><td>0,0</td><td>0,0</td><td>1,7</td><td> S</td></tr><tr><td>29 Agosto, 11:11 am</td><td>19,1</td><td>35,4</td><td>0,0</td><td>0,0</td><td>1.040,0</td><td>0,0</td><td>0,0</td><td>0,0</td><td> S</td></tr><tr><td>29 Agosto, 11:22 am</td><td>22,2</td><td>29,7</td><td>0,0</td><td>0,0</td><td>1.040,0</td><td>0,0</td><td>0,0</td><td>0,0</td><td> S</td></tr><tr><td>29 Agosto, 11:37 am</td><td>24,8</td><td>28,3</td><td>0,0</td><td>0,0</td><td>1.041,0</td><td>0,0</td><td>0,0</td><td>0,0</td><td> S</td></tr><tr><td>29 Agosto, 11:47 am</td><td>24,0</td><td>28,1</td><td>0,0</td><td>0,0</td><td>1.040,0</td><td>0,0</td><td>0,0</td><td>0,0</td><td> S</td></tr><tr><td>29 Agosto, 12:02 pm</td><td>20,5</td><td>28,7</td><td>0,0</td><td>0,0</td><td>1.041,0</td><td>0,0</td><td>0,0</td><td>2,0</td><td> S</td></tr><tr><td>29 Agosto, 12:17 pm</td><td>19,0</td><td>31,8</td><td>0,0</td><td>0,0</td><td>1.041,0</td><td>0,0</td><td>0,0</td><td>0,0</td><td> S</td></tr><tr><td>29 Agosto, 12:27 pm</td><td>17,3</td><td>35,2</td><td>0,0</td><td>0,0</td><td>1.041,0</td><td>0,0</td><td>0,0</td><td>2,3</td><td> S</td></tr><tr><td>29 Agosto, 12:32 pm</td><td>16,7</td><td>36,6</td><td>0,0</td><td>0,0</td><td>1.041,0</td><td>0,0</td><td>0,0</td><td>0,0</td><td> S</td></tr><tr><td>29 Agosto, 12:42 pm</td><td>18,8</td><td>36,1</td><td>0,0</td><td>0,0</td><td>1.041,0</td><td>0,0</td><td>0,0</td><td>0,0</td><td> S</td></tr><tr><td>29 Agosto, 12:47 pm</td><td>21,3</td><td>33,4</td><td>0,0</td><td>0,0</td><td>1.041,0</td><td>0,0</td><td>0,0</td><td>0,0</td><td> S</td></tr><tr><td>29 Agosto, 12:57 pm</td><td>25,6</td><td>28,7</td><td>0,0</td><td>0,0</td><td>1.041,0</td><td>0,0</td><td>0,0</td><td>0,0</td><td> S</td></tr><tr><td>29 Agosto, 13:07 pm</td><td>28,7</td><td>25,3</td><td>0,0</td><td>0,0</td><td>1.041,0</td><td>0,0</td><td>0,0</td><td>0,0</td><td> S</td></tr><tr><td>29 Agosto, 13:33 pm</td><td>19,2</td><td>29,4</td><td>0,0</td><td>0,0</td><td>1.041,0</td><td>0,0</td><td>0,0</td><td>4,8</td><td> S</td></tr><tr><td>29 Agosto, 13:37 pm</td><td>17,5</td><td>31,5</td><td>0,0</td><td>0,0</td><td>1.041,0</td><td>0,0</td><td>0,0</td><td>4,4</td><td> S</td></tr><tr><td>29 Agosto, 13:48 pm</td><td>16,0</td><td>35,6</td><td>0,0</td><td>0,0</td><td>1.041,0</td><td>0,0</td><td>0,0</td><td>3,9</td><td> S</td></tr><tr><td>29 Agosto, 14:13 pm</td><td>17,0</td><td>33,6</td><td>0,0</td><td>0,0</td><td>1.041,0</td><td>0,0</td><td>0,0</td><td>2,9</td><td> S</td></tr><tr><td>29 Agosto, 14:23 pm</td><td>16,8</td><td>33,9</td><td>0,0</td><td>0,0</td><td>1.041,0</td><td>0,0</td><td>0,0</td><td>2,5</td><td> S</td></tr><tr><td>29 Agosto, 14:33 pm</td><td>17,9</td><td>33,5</td><td>0,0</td><td>0,0</td><td>1.041,0</td><td>0,0</td><td>0,0</td><td>3,1</td><td> S</td></tr><tr><td>29 Agosto, 14:48 pm</td><td>19,2</td><td>32,1</td><td>0,0</td><td>0,0</td><td>1.041,0</td><td>0,0</td><td>0,0</td><td>2,6</td><td> S</td></tr><tr><td>29 Agosto, 14:59 pm</td><td>19,7</td><td>30,5</td><td>0,0</td><td>0,0</td><td>1.041,0</td><td>0,0</td><td>0,0</td><td>0,0</td><td> S</td></tr><tr><td>29 Agosto, 15:03 pm</td><td>18,5</td><td>31,4</td><td>0,0</td><td>0,0</td><td>1.041,0</td><td>0,0</td><td>0,0</td><td>0,0</td><td> S</td></tr><tr><td>29 Agosto, 15:14 pm</td><td>17,4</td><td>32,6</td><td>0,0</td><td>0,0</td><td>1.041,0</td><td>0,0</td><td>0,0</td><td>4,1</td><td> S</td></tr><tr><td>29 Agosto, 15:29 pm</td><td>16,3</td><td>35,1</td><td>0,0</td><td>0,0</td><td>1.041,0</td><td>0,0</td><td>0,0</td><td>1,8</td><td> S</td></tr><tr><td>29 Agosto, 15:39 pm</td><td>17,2</td><td>34,3</td><td>0,0</td><td>0,0</td><td>1.041,0</td><td>0,0</td><td>0,0</td><td>3,8</td><td> S</td></tr><tr><td>29 Agosto, 15:54 pm</td><td>17,5</td><td>34,8</td><td>0,0</td><td>0,0</td><td>1.041,0</td><td>0,0</td><td>0,0</td><td>0,0</td><td> S</td></tr><tr><td>29 Agosto, 16:09 pm</td><td>17,5</td><td>33,4</td><td>0,0</td><td>0,0</td><td>1.041,0</td><td>0,0</td><td>0,0</td><td>2,0</td><td> S</td></tr><tr><td>29 Agosto, 16:19 pm</td><td>16,4</td><td>36,1</td><td>0,0</td><td>0,0</td><td>1.041,0</td><td>0,0</td><td>0,0</td><td>2,0</td><td> S</td></tr><tr><td>29 Agosto, 16:24 pm</td><td>15,7</td><td>36,8</td><td>0,0</td><td>0,0</td><td>1.041,0</td><td>0,0</td><td>0,0</td><td>3,7</td><td> S</td></tr><tr><td>29 Agosto, 16:39 pm</td><td>15,0</td><td>38,5</td><td>0,0</td><td>0,0</td><td>1.041,0</td><td>0,0</td><td>0,0</td><td>1,8</td><td> S</td></tr><tr><td>29 Agosto, 16:49 pm</td><td>17,4</td><td>34,5</td><td>0,0</td><td>0,0</td><td>1.041,0</td><td>0,0</td><td>0,0</td><td>2,3</td><td> S</td></tr><tr><td>29 Agosto, 17:09 pm</td><td>14,6</td><td>38,2</td><td>0,0</td><td>0,0</td><td>1.041,0</td><td>0,0</td><td>0,0</td><td>0,0</td><td> S</td></tr><tr><td>29 Agosto, 17:20 pm</td><td>14,2</td><td>39,3</td><td>0,0</td><td>0,0</td><td>1.041,0</td><td>0,0</td><td>0,0</td><td>1,9</td><td> S</td></tr><tr><td>29 Agosto, 17:40 pm</td><td>12,0</td><td>43,5</td><td>0,0</td><td>0,0</td><td>1.041,0</td><td>0,0</td><td>0,0</td><td>3,0</td><td> S</td></tr><tr><td>29 Agosto, 17:50 pm</td><td>10,9</td><td>46,9</td><td>0,0</td><td>0,0</td><td>1.040,0</td><td>0,0</td><td>0,0</td><td>3,8</td><td> S</td></tr><tr><td>29 Agosto, 17:55 pm</td><td>10,5</td><td>49,0</td><td>0,0</td><td>0,0</td><td>1.041,0</td><td>0,0</td><td>0,0</td><td>3,2</td><td> S</td></tr>										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					
					
				</div>
					</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.collapsible').collapsible();
			$('.modal').modal();
		});
	</script>
	<script type="text/javascript">
		$( "#fecha_ini" ).datepicker({
			autoSize: true,
			showWeek: true,
			currentText: 'Hoy',
			monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
			'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
			monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun',
			'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
			dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
			dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mié;', 'Juv', 'Vie', 'Sáb'],
			dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
			weekHeader: 'Sm',
			dateFormat: 'yy-mm-dd',
		});
		$( "#fecha_fin" ).datepicker({
			autoSize: true,
			showWeek: true,
			currentText: 'Hoy',
			monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
			'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
			monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun',
			'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
			dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
			dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mié;', 'Juv', 'Vie', 'Sáb'],
			dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
			weekHeader: 'Sm',
			dateFormat: 'yy-mm-dd',
		});
		$( "#fecha_iniG" ).datepicker({
			autoSize: true,
			showWeek: true,
			currentText: 'Hoy',
			monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
			'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
			monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun',
			'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
			dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
			dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mié;', 'Juv', 'Vie', 'Sáb'],
			dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
			weekHeader: 'Sm',
			dateFormat: 'yy-mm-dd',
		});
		$( "#fecha_finG" ).datepicker({
			autoSize: true,
			showWeek: true,
			currentText: 'Hoy',
			monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
			'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
			monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun',
			'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
			dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
			dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mié;', 'Juv', 'Vie', 'Sáb'],
			dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
			weekHeader: 'Sm',
			dateFormat: 'yy-mm-dd',
		});

	</script>

	<script type="text/javascript">
		var highchartsOptions = Highcharts.setOptions({
			lang: {
				loading: 'Cargando...',
				months: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
				weekdays: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
				shortMonths: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
				exportButtonTitle: "Exportar",
				printButtonTitle: "Importar",
				rangeSelectorFrom: "Desde",
				rangeSelectorTo: "Hasta",
				rangeSelectorZoom: "Período",
				downloadPNG: 'Descargar imagen PNG',
				downloadJPEG: 'Descargar imagen JPEG',
				downloadPDF: 'Descargar imagen PDF',
				downloadSVG: 'Descargar imagen SVG',
				printChart: 'Imprimir',
				resetZoom: 'Reiniciar zoom',
				resetZoomTitle: 'Reiniciar zoom',
				thousandsSep: ",",
				decimalPoint: '.'
			}
		});

		eval("var chartG = Highcharts.chart('containerT', {chart: {zoomType: 'x'},credits: {enabled: false},title: {text: 'Temperatura'},subtitle: {text: document.ontouchstart === undefined ?'Seleccione el área que desee amplificar.' : 'Seleccione el área que desee amplificar.'},xAxis: {type: 'datetime'},yAxis: {title: {text: 'Temperatura (C°)'}},legend: {enabled: false},plotOptions: {area: {fillColor: {linearGradient: {x1: 0,y1: 0,x2: 0,y2: 1},stops: [[0, Highcharts.getOptions().colors[0]],[1, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]]},marker: {radius: 2},lineWidth: 1,states: {hover: {lineWidth: 1}},threshold: null}},series: [{type: 'area',name: 'Temperatura (Cº)',data: ([[Date.UTC(2017,8-1,29,0,03),8],[Date.UTC(2017,8-1,29,0,08),8],[Date.UTC(2017,8-1,29,0,13),8],[Date.UTC(2017,8-1,29,0,18),7.9],[Date.UTC(2017,8-1,29,0,23),7.8],[Date.UTC(2017,8-1,29,0,44),7.6],[Date.UTC(2017,8-1,29,0,48),7.6],[Date.UTC(2017,8-1,29,0,59),7.6],[Date.UTC(2017,8-1,29,1,03),7.6],[Date.UTC(2017,8-1,29,1,18),7.7],[Date.UTC(2017,8-1,29,1,34),7.7],[Date.UTC(2017,8-1,29,1,39),7.7],[Date.UTC(2017,8-1,29,1,49),7.8],[Date.UTC(2017,8-1,29,2,04),7.8],[Date.UTC(2017,8-1,29,2,19),7.8],[Date.UTC(2017,8-1,29,2,34),7.8],[Date.UTC(2017,8-1,29,2,49),7.6],[Date.UTC(2017,8-1,29,3,05),7.6],[Date.UTC(2017,8-1,29,3,09),7.6],[Date.UTC(2017,8-1,29,3,20),7.7],[Date.UTC(2017,8-1,29,3,24),7.7],[Date.UTC(2017,8-1,29,3,40),7.5],[Date.UTC(2017,8-1,29,4,05),7.3],[Date.UTC(2017,8-1,29,4,10),7.2],[Date.UTC(2017,8-1,29,4,35),7.4],[Date.UTC(2017,8-1,29,4,50),7.5],[Date.UTC(2017,8-1,29,5,01),7.3],[Date.UTC(2017,8-1,29,5,05),7.2],[Date.UTC(2017,8-1,29,5,20),6.8],[Date.UTC(2017,8-1,29,5,31),6.6],[Date.UTC(2017,8-1,29,5,36),6.5],[Date.UTC(2017,8-1,29,5,41),6.5],[Date.UTC(2017,8-1,29,5,56),6.5],[Date.UTC(2017,8-1,29,6,06),6.7],[Date.UTC(2017,8-1,29,6,21),6.8],[Date.UTC(2017,8-1,29,6,31),6.8],[Date.UTC(2017,8-1,29,6,46),6.9],[Date.UTC(2017,8-1,29,6,51),6.9],[Date.UTC(2017,8-1,29,7,07),6.8],[Date.UTC(2017,8-1,29,7,11),6.8],[Date.UTC(2017,8-1,29,7,27),6.9],[Date.UTC(2017,8-1,29,7,42),6.8],[Date.UTC(2017,8-1,29,7,52),6.9],[Date.UTC(2017,8-1,29,8,07),6.9],[Date.UTC(2017,8-1,29,8,17),6.9],[Date.UTC(2017,8-1,29,8,22),6.9],[Date.UTC(2017,8-1,29,8,32),6.9],[Date.UTC(2017,8-1,29,8,47),6.9],[Date.UTC(2017,8-1,29,8,58),6.9],[Date.UTC(2017,8-1,29,9,12),7],[Date.UTC(2017,8-1,29,10,21),14.8],[Date.UTC(2017,8-1,29,10,31),17.2],[Date.UTC(2017,8-1,29,10,46),17.3],[Date.UTC(2017,8-1,29,10,56),16.8],[Date.UTC(2017,8-1,29,11,11),19.1],[Date.UTC(2017,8-1,29,11,22),22.2],[Date.UTC(2017,8-1,29,11,37),24.8],[Date.UTC(2017,8-1,29,11,47),24],[Date.UTC(2017,8-1,29,12,02),20.5],[Date.UTC(2017,8-1,29,12,17),19],[Date.UTC(2017,8-1,29,12,27),17.3],[Date.UTC(2017,8-1,29,12,32),16.7],[Date.UTC(2017,8-1,29,12,42),18.8],[Date.UTC(2017,8-1,29,12,47),21.3],[Date.UTC(2017,8-1,29,12,57),25.6],[Date.UTC(2017,8-1,29,13,07),28.7],[Date.UTC(2017,8-1,29,13,33),19.2],[Date.UTC(2017,8-1,29,13,37),17.5],[Date.UTC(2017,8-1,29,13,48),16],[Date.UTC(2017,8-1,29,14,13),17],[Date.UTC(2017,8-1,29,14,23),16.8],[Date.UTC(2017,8-1,29,14,33),17.9],[Date.UTC(2017,8-1,29,14,48),19.2],[Date.UTC(2017,8-1,29,14,59),19.7],[Date.UTC(2017,8-1,29,15,03),18.5],[Date.UTC(2017,8-1,29,15,14),17.4],[Date.UTC(2017,8-1,29,15,29),16.3],[Date.UTC(2017,8-1,29,15,39),17.2],[Date.UTC(2017,8-1,29,15,54),17.5],[Date.UTC(2017,8-1,29,16,09),17.5],[Date.UTC(2017,8-1,29,16,19),16.4],[Date.UTC(2017,8-1,29,16,24),15.7],[Date.UTC(2017,8-1,29,16,39),15],[Date.UTC(2017,8-1,29,16,49),17.4],[Date.UTC(2017,8-1,29,17,09),14.6],[Date.UTC(2017,8-1,29,17,20),14.2],[Date.UTC(2017,8-1,29,17,40),12],[Date.UTC(2017,8-1,29,17,50),10.9],[Date.UTC(2017,8-1,29,17,55),10.5]])}]})");
	</script>
	<script type="text/javascript">
		$('#buscar').click(function () {
			if($("#fecha_ini").val() != '' && $("#fecha_fin").val() != '')
			{
				$("#error").hide();
				var variable  = 0;
				var typeArray = document.getElementsByName("type");
				var resultado = '';
				for(var i=0;i<typeArray.length;i++)
					if(typeArray[i].checked)
						resultado=typeArray[i].value;
					
					$.ajax({
						url: '/index.php?r=servicio/actualizarGraficoEstacion',
						data: 
						{
							'ini': $("#fecha_ini").val(),
							'fin': $("#fecha_fin").val(),
							'id' : $("#ub").val(),
							'typ': resultado
						},
						type: 'post',
						success: function(data)
						{
							var json  = JSON.parse(data);
							var strG  = json.strG;
							var title = json.title;
							var legend= json.legend;

							eval("var chartG = Highcharts.chart('containerT', {chart: {zoomType: 'x'},credits: {enabled: false},title: {text: '"+title+"'},subtitle: {text: document.ontouchstart === undefined ?'Seleccione el área que desee amplificar.' : 'Seleccione el área que desee amplificar.'},xAxis: {type: 'datetime'},yAxis: {title: {text: '"+legend+"'}},legend: {enabled: false},plotOptions: {area: {fillColor: {linearGradient: {x1: 0,y1: 0,x2: 0,y2: 1},stops: [[0, Highcharts.getOptions().colors[0]],[1, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]]},marker: {radius: 2},lineWidth: 1,states: {hover: {lineWidth: 1}},threshold: null}},series: [{type: 'area',name: '"+legend+"',data: "+strG+"}]})");
						},
						error: function(data) { },
					});

					$.ajax({
						url: '/index.php?r=servicio/actualizarTablaEstacion',
						data: 
						{
							'ini': $("#fecha_ini").val(),
							'fin': $("#fecha_fin").val(),
							'id' : $("#ub").val()
						},
						type: 'post',
						success: function(data)
						{
							$("#contenidoTabla").html(data);
						},
						error: function(data) { },
					});

								// Actualiza tabla con información consolidada
					$.ajax({
						url: '/index.php?r=servicio/ActualizarInformacionEstacion',
						data: 
						{
							'ini': $("#fecha_ini").val(),
							'fin': $("#fecha_fin").val(),
							'id' : $("#ub").val()
						},
						type: 'post',
						success: function(data)
						{
							$("#datos-actuales").html(data);
							$("#datos-actuales").removeClass("teal").addClass("light-blue");
							$("#ultimo-dato").html("");

						},
						error: function(data) { },
					});
				}
				else
				{
					$("#error").show();
				}
			});
		
		// asociado a los radio-button
		function buscar()
		{
			$("#error").hide();
			var variable  = 0;
			var typeArray = document.getElementsByName("type");
			var resultado = '';
			var ini 	  = 0;
			var fin 	  = 0;
			for(var i=0;i<typeArray.length;i++)
				if(typeArray[i].checked)
					resultado=typeArray[i].value;
				
				if($("#fecha_ini").val() == '' && $("#fecha_fin").val() == '')
				{
					var hoy = new Date();
					var dd = hoy.getDate();
				var mm = hoy.getMonth()+1; //hoy es 0!
				var yyyy = hoy.getFullYear();
				if(dd<10) {
					dd='0'+dd
				} 

				if(mm<10) {
					mm='0'+mm
				} 

				hoy = yyyy+'-'+mm+'-'+dd;
				ini = hoy;
				fin = hoy;
			}
			else
			{
				ini = $("#fecha_ini").val();
				fin = $("#fecha_fin").val();
			}

			$.ajax({
				url: '/index.php?r=servicio/actualizarGraficoEstacion',
				data: 
				{
					'ini': ini,
					'fin': fin,
					'id' : $("#ub").val(),
					'typ': resultado
				},
				type: 'post',
				success: function(data)
				{
					var json  = JSON.parse(data);
					var strG  = json.strG;
					var title = json.title;
					var legend= json.legend;

					eval("var chartG = Highcharts.chart('containerT', {chart: {zoomType: 'x'},credits: {enabled: false},title: {text: '"+title+"'},subtitle: {text: document.ontouchstart === undefined ?'Seleccione el área que desee amplificar.' : 'Seleccione el área que desee amplificar.'},xAxis: {type: 'datetime'},yAxis: {title: {text: '"+legend+"'}},legend: {enabled: false},plotOptions: {area: {fillColor: {linearGradient: {x1: 0,y1: 0,x2: 0,y2: 1},stops: [[0, Highcharts.getOptions().colors[0]],[1, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]]},marker: {radius: 2},lineWidth: 1,states: {hover: {lineWidth: 1}},threshold: null}},series: [{type: 'area',name: '"+legend+"',data: "+strG+"}]})");
				},
				error: function(data) { },
			});

			$.ajax({
				url: '/index.php?r=servicio/actualizarTablaEstacion',
				data: 
				{
					'ini': ini,
					'fin': fin,
					'id' : $("#ub").val()
				},
				type: 'post',
				success: function(data)
				{
					$("#contenidoTabla").html(data);
				},
				error: function(data) { },
			});


		}
	</script>
	<script type="text/javascript">
		$('#exportAll').click(function ()
		{
			var id  = $("#ub").val();
			var ini = 0;
			var fin = 0;
			var temp= "/index.php?r=servicio/exportarExcelAllEstacion";
			if($("#fecha_iniG").val() != '' && $("#fecha_finG").val() != '')
			{
				ini = $("#fecha_iniG").val();
				fin = $("#fecha_finG").val();
			}
			var url = temp+'&id='+id+'&ini='+ini+'&fin='+fin;
			window.location.href = url;
		});
	</script>
</div><!-- content -->
        </div>
      </section>      
      <!-- JS 
      <script type="text/javascript" src="js/plugins/prism/prism.js"></script>
      <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
      <script type="text/javascript" src="js/plugins.min.js"></script>
      <script type="text/javascript" src="js/custom-script.js"></script>
-->
      </body>


      </html