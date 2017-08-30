<?php
//Activamos el almacenamiento en el buffer
ob_start();
session_start();

if (!isset($_SESSION["nombre"]))
{
  header("Location: login.html");
}
else
{
require 'header.php';

if ($_SESSION['escritorio']==1)
{
  require_once "../modelos/Consultas.php";
  $consulta = new Consultas();//creo mi objeto consulta y hago una instancia a mi clase consultas
  $rsptac = $consulta->totalcomprahoy();//declaro variable $rsptac hago referencia a $consulta y a su metodo totalcomprahoy (funcion dela clase consulta)
  $regc=$rsptac->fetch_object();//declaro variable $regc y con el metodo fetch_object(), envio todos los valores a mi variable $rsptac
  $totalc=$regc->total_compra;//declaro variable $totalc y digo que mi objeto $regc extraigo lo que tengo en propiedad total_compra

  $rsptav = $consulta->totalventahoy();
  $regv=$rsptav->fetch_object();
  $totalv=$regv->total_venta;

  //Datos para mostrar el gráfico de barras de las compras
  $compras10 = $consulta->comprasultimos_10dias();//declaro un objeto $compras10 aqui almaceno todos los valores que se devuelvas desde la funcion comprasultimos_10dias() del objeto consulta
  $fechasc='';//se almacena a manera de texto las fechas de compra de los ultimos 10 dias
  $totalesc='';//almacena a manera de texto los totales  de las ultomas 10 dias
  /*declaro objeto $regfechac y este recorre a todo el objeto $compra10 utilizando el metodo fetch_object */
  while ($regfechac= $compras10->fetch_object()) {
    /*la variable $fechasc va a ser igual a lo que ya tiene la variable $fechasc, le concateno "" y luego la concateno con la propiedad fecha de mi objeto $regfechac y por ultimo concateno con otras comillas para que queda la fehca entre ""*/
    $fechasc=$fechasc.'"'.$regfechac->fecha .'",';
    /*$totalesc es igual a lo que ya tiene $totalesc, lo concateno con propiedad total y despues con una ,*/
    $totalesc=$totalesc.$regfechac->total .','; 
  }

  //Quitamos la última coma
  $fechasc=substr($fechasc, 0, -1);
  $totalesc=substr($totalesc, 0, -1);

   //Datos para mostrar el gráfico de barras de las ventas
  $ventas12 = $consulta->ventasultimos_12meses();
  $fechasv='';
  $totalesv='';
  while ($regfechav= $ventas12->fetch_object()) {
    $fechasv=$fechasv.'"'.$regfechav->fecha .'",';
    $totalesv=$totalesv.$regfechav->total .','; 
  }

  //Quitamos la última coma
  $fechasv=substr($fechasv, 0, -1);
  $totalesv=substr($totalesv, 0, -1);

?>
<!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">        
        <!-- Main content -->
        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">
                          <h1 class="box-title">Escritorio </h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <div class="small-box bg-aqua"><!--con esto le doy estilo a el grafico small-box bg-aqua-->
                              <div class="inner">
                                <h4 style="font-size:17px;">
                                  <strong><?php echo $totalc; ?></strong><!--aqui mostramos la estadistica en el resctangulo-->
                                </h4>
                                <p>Total del día</p>
                              </div>
                              <div class="icon">
                                <i class="ion ion-bag"></i>
                              </div>
                              <a href="#" class="small-box-footer">Temperatura<i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <div class="small-box bg-green">
                              <div class="inner">
                                <h4 style="font-size:17px;">
                                  <strong><?php echo $totalv;"<br>" ?></strong>
                                </h4>
                                <p>Total del día</p>
                              </div>
                              <div class="icon">
                                <i class="ion ion-bag"></i>
                              </div>
                              <a href="comprasfecha.php" class="small-box-footer">Resumen <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                  <center><div class="col s12" "><!--style="margin: 10px 10px 40px 230px;-->
                          <h2>Elegir estación</h2>
                              <span id="type">
                                <input onClick="buscar();" value="t" id="type_0" checked="checked" type="radio" name="type" /> 
                                    <label for="type_0" style="color:#3C3C3C;"><h4>Temperatura</h4></label>
                                <input onClick="buscar();" value="h" id="type_1" type="radio" name="type" />
                                    <label for="type_1" style="color:#3C3C3C;"><h4>humedad</h4></label> 
                                <input onClick="buscar();" value="ts" id="type_2" type="radio" name="type" />
                                    <label for="type_2" style="color:#3C3C3C;"><h4>Temp. Suelo</h4></label>
                                <input onClick="buscar();" value="s" id="type_3" type="radio" name="type" /> 
                                    <label for="type_3" style="color:#3C3C3C;"><h4>Hum. Suelo</h4></label> 
                                <input onClick="buscar();" value="p" id="type_4" type="radio" name="type" />
                                    <label for="type_4" style="color:#3C3C3C;"><h4>Presión Atm.</h4></label> 
                                <input onClick="buscar();" value="uv" id="type_5" type="radio" name="type" />
                                    <label for="type_5" style="color:#3C3C3C;"><h4>UV</h4></label>
                                <input onClick="buscar();" value="ll" id="type_6" type="radio" name="type" /> 
                                    <label for="type_6" style="color:#3C3C3C;"><h4>Agua Caída</h4></label> 
                                <input onClick="buscar();" value="vel" id="type_7" type="radio" name="type" /> 
                                    <label for="type_7" style="color:#3C3C3C;"><h4>Vel. Viento</h4></label>
                              </span>         
                  </div></center>
                    <div class="panel-body">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <div class="box box-primary">
                              <div class="box-header with-border">
                                 Últimos 10 días
                              </div>
                              <div class="box-body">
                                <canvas id="compras" width="400" height="300"></canvas><!--esta etiqueta se utiliza para mostrar graficos y es solo un contenedor de los graficos -->
                              </div>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <div class="box box-primary">
                              <div class="box-header with-border">
                                Últimos 12 meses
                              </div>
                              <div class="box-body">
                                <canvas id="ventas" width="400" height="300"></canvas><!--esta etiqueta se utiliza para mostrar graficos y es solo un contenedor de los graficos -->
                              </div>
                          </div>
                        </div>

                    </div>

                    <!--Fin centro -->
                  </div><!-- /.box -->
              </div><!-- /.col -->
          </div><!-- /.row -->

      </section><!-- /.content -->

    </div><!-- /.content-wrapper -->
  <!--Fin-Contenido-->

<?php
}
else
{
  require 'noacceso.php';
}

require 'footer.php';
?>
<script type="text/javascript" src="scripts/categoria.js"></script>
<script src="../public/js/chart.min.js"></script><!--hacemos referencia a archivo para ver graficos-->
<script src="../public/js/Chart.bundle.min.js"></script><!--hacemos referencia a archivo para ver graficos--> 
<script type="text/javascript">
//inserto "compras" porque es el id del canvas 
var ctx = document.getElementById("compras").getContext('2d');
//creo objeto compras enviandole al metodo chart
var compras = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [<?php echo $fechasc; ?>],
        datasets: [{
            label: 'T°',
            data: [<?php echo $totalesc; ?>],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});

var ctx = document.getElementById("ventas").getContext('2d');
var ventas = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [<?php echo $fechasv; ?>],
        datasets: [{
            label: 'T°',
            data: [<?php echo $totalesv; ?>],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>


</script>


<?php 
}
ob_end_flush();
?>


<!--quede en la seccion 13 clase 76-->