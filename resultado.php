
<?php

$d1 = $_POST['codre'];
$d2 = $_POST['cadme'];
$d3 = $_POST['cadme1'];
$d4 = $_POST['cadme2'];
$d5 = $_POST['esdpa'];
$d6 = $_POST['codau'];
$d7a = $_POST['cadrin'];
$d7b = $_POST['cadrex'];
$d7c = $_POST['cadto'];
$d8 = $_POST['codau1'];


//Resuldato de la Métricas de interfaz
$r1=($d1+$d2)/5*100;
$ac1="Muy bueno";
$m1="Perfecto en todo en el apartado de complejidad de reconocimiento";
$m1a="Perfecto en todo en el apartado de carga de memoria (en el usuario)";
if($r1==100){
  $b1=$r1;
  $b1a=0;
$z1=100;$z1a=10;$z1b=10;$z1c=10;
}
else if($r1 <=99 && $r1 >=91){
   $b1=$r1;
   $b1a=100-$r1;
   $z1=100;$z1a=10;$z1b=10;$z1c=10;
 if($d1<3){
   $m1="Debe mejorar en el apartado de Complejidad de reconocimiento";
 }
 if($d2<2){
  $m1a="Debe mejorar en el apartado de Carga de memoria (en el usuario)";
 }
  }
else if($r1 <=90 && $r1 >=81){
  $b1=$r1;
  $b1a=100-$r1;
  $ac1="Aceptable";
  $z1=10;$z1a=100;$z1b=10;$z1c=10;
  if($d1<3){
    $m1="Debe mejorar en el apartado de Complejidad de reconocimiento";
  }
  if($d2<2){
   $m1a="Debe mejorar en el apartado de Carga de memoria (en el usuario)";
  }
 }
else if($r1 <=80 || $r1 >=55){
 $b1=$r1;
 $b1a=100-$r1;
 $ac1="Normal";
 $z1=10;$z1a=10;$z1b=10;$z1c=100;
 if($d1<3){
  $m1="Debe mejorar en el apartado de Complejidad de reconocimiento";
}
if($d2<2){
 $m1a="Debe mejorar en el apartado de Carga de memoria (en el usuario)";
}
}
else if($r1 <=54 ){
  $b1=$r1;
  $b1a=100-$r1;
  $ac1="No Aceptable";
  $z1=10;$z1a=10;$z1b=100;$z1c=10;
  if($d1<3){
    $m1="Debe mejorar en el apartado de complejidad de reconocimiento";
  }
  if($d2<2){
   $m1a="Debe mejorar en el apartado de carga de memoria (en el usuario)";
  }
}


//Resultado de la Métricas estéticas (diseño gráfico)

$r2=($d3+$d4)/6*100;
$ac2="Muy bueno";
$m2="Perfecto en todo en el apartado de Conteo de palabra";
$m2a="Perfecto en todo en el apartado de Conteo de colores";
if($r2==100){
  $b2=$r2;
  $b2a=0;
  $z2=100;$z2a=10;$z2b=10;$z2c=10;
}
else if($r2 <=99 && $r2 >=91){
   $b2=$r2;
   $b2a=100-$r2;
   $z2=100;$z2a=10;$z2b=10;$z2c=10;
   if($d3<3){
    $m2="Debe mejorar en el apartado de Conteo de palabra";
  }
  if($d4<3){
   $m2a="Debe mejorar en el apartado de Conteo de colores";
  }
  }
else if($r2 <=90 && $r2 >=81){
  $b2=$r2;
  $b2a=100-$r2;
  $ac2="Aceptable";
  $z2=10;$z2a=100;$z2b=10;$z2c=10;
  if($d3<3){
    $m2="Debe mejorar en el apartado de Conteo de palabra";
  }
  if($d4<3){
   $m2a="Debe mejorar en el apartado de Conteo de colores";
  }
 }
 else if($r2 <=80 && $r2 >=55){
 $b2=$r2;
 $b2a=100-$r2;
 $ac2="Normal";
 $z2=10;$z2a=10;$z2b=10;$z2c=100;
 if($d3<3){
  $m2="Debe mejorar en el apartado de Conteo de palabra";
}
if($d4<3){
 $m2a="Debe mejorar en el apartado de Conteo de colores";
}
}
else if($r2 <=54 ){
  $b2=$r2;
  $b2a=100-$r2;
  $ac2="No Aceptable";
  $z2=10;$z2a=10;$z2b=100;$z2c=10;
  if($d3<3){
    $m2="Debe mejorar en el apartado de Conteo de palabra ";
  }
  if($d4<3){
   $m2a="Debe mejorar en el apartado de Conteo de colores";
  }
}
//Métrica Contenido
$r3=($d5+$d6)/6*100;
$ac3="Muy bueno";
$m3="Perfecto en todo en el apartado de Espera de Pagina";
$m3a="Perfecto en todo en el apartado de Complejidad de audio";
if($r3==100){
  $b3=$r3;
  $b3a=0;
  $z3=100;$z3a=10;$z3b=10;$z3c=10;
}
else if($r3 <=99 && $r3 >=91){
   $b3=$r3;
   $b3a=100-$r3;
   $z3=100;$z3a=10;$z3b=10;$z3c=10;
   if($d4<3){
    $m4="Debe mejorar en el apartado de Espera de Pagina";
  }
  if($d6<3){
   $m4a="Debe mejorar en el apartado de Complejidad de audio";
  }
}
else if($r3 <=90 && $r3 >=81){
  $b3=$r3;
  $b3a=100-$r3;
  $ac3="Aceptable";
  $z3=10;$z3a=100;$z3b=10;$z3c=10;
  if($d4<3){
    $m4="Debe mejorar en el apartado de Espera de Pagina";
  }
  if($d6<3){
   $m4a="Debe mejorar en el apartado de Complejidad de audio";
  }
 }
 else if($r3 <=80 && $r3 >=55){
  $b3=$r3;
  $b3a=100-$r3;
  $ac3="Normal";
  $z3=10;$z3a=10;$z3b=10;$z3c=100;
  if($d4<3){
    $m4="Debe mejorar en el apartado de Espera de Pagina";
  }
  if($d6<3){
   $m4a="Debe mejorar en el apartado de Complejidad de audio";
  }
}
else if($r3 <=54 ){
  $b3=$r3;
  $b3a=100-$r3;
  $ac3="No Aceptable";
  $z3=10;$z3a=10;$z3b=100;$z3c=10;
  if($d4<3){
    $m4="Debe mejorar en el apartado de Espera de Pagina";
  }
  if($d6<3){
   $m4a="Debe mejorar en el apartado de Complejidad de audio";
  }
}

//Métricas de navegación

$d7=($d7a+$d7b)/$d7c*100;

if ($d7 <= 5){
  $d7z=3;
}
else if ($d7 >= 6 && $d7 <= 15){
  $d7z=2;
}

else if ($d7 > 15){
  $d7z=1;
}

$r4=($d7z+$d8)/6*100;

$ac4="Muy bueno";
$m4="Perfecto en todo en el apartado de Enlaces Rotos de un Sitio";
$m4a="Perfecto en todo en el apartado de Complejidad de vinculación de página";
if($r4==100){
  $b4=$r4;
  $b4a=0;
  $z4=100;$z4a=10;$z4b=10;$z4c=10;
}
else if($r4 <=99 && $r4 >=91){
   $b4=$r4;
   $b4a=100-$r4;
   $z3=100;$z3a=10;$z3b=10;$z3c=10;
   if($d7z<3){
    $m4="Debe mejorar en el Porcentaje de Enlaces Rotos de un Sitio";
  }
  if($d8<3){
   $m4a="Debe mejorar en el apartado de Complejidad de vinculación de página";
  }
}
else if($r4 <=90 && $r4 >=81){
  $b4=$r4;
  $b4a=100-$r4;
  $ac4="Aceptable";
  $z3=10;$z3a=100;$z3b=10;$z3c=10;
  if($d7z<3){
    $m4="Debe mejorar en el Porcentaje de Enlaces Rotos de un Sitio";
  }
  if($d8<3){
   $m4a="Debe mejorar en el apartado de Complejidad de vinculación de página";
  }
 }
 else if($r4 <=80 && $r4 >=55){
  $b4=$r4;
  $b4a=100-$r4;
  $ac4="Normal";
  $z3=10;$z3a=10;$z3b=10;$z3c=109;
  if($d7z<3){
    $m4="Debe mejorar en el Porcentaje de Enlaces Rotos de un Sitio";
  }
  if($d8<3){
   $m4a="Debe mejorar en el apartado de Complejidad de vinculación de página";
  }
}
else if($r4 <=54 ){
  $b4=$r4;
  $b4a=100-$b4;
  $ac4="No Aceptable";
  $z3=10;$z3a=10;$z3b=100;$z3c=10;
  if($d7z<3){
    $m4="Debe mejorar en el Porcentaje de Enlaces Rotos de un Sitio";
  }
  if($d8<3){
   $m4a="Debe mejorar en el apartado de Complejidad de vinculación de página";
  }
}
///////////////////////////
$r5= ($d1+$d2+$d3+$d4+$d5+$d6+$d7z+$d8)/23*100;

$ac5="Muy bueno";
$m5="Perfecte en Todo en el apartado de Métricas de interfaz";
$m5a="Perfecte en Todo en el apartado de Métricas estéticas (diseño gráfico)";
$m5b="Perfecte en Todo en el apartado de  Métrica Contenido";
$m5c="Perfecte en Todo en el apartado de Métricas de navegación";
if($r5==100){
  $b5=$r5;
  $b5a=0;

}
else if($r5 <=99 && $r5 >=91){
   $b5=$r5;
   $b5a=100-$r5;
 if($b1<100){
    $m5="Debe mejorar en el apartado de Métricas de interfaz";
  }
  if($b2<100){
   $m5a="Debe mejorar en el apartado de Resultado de la Métricas estéticas (diseño gráfico)";
  }
  if($b3<100){
    $m5b="Debe mejorar en el apartado de Métrica Contenido";
   }
   if($b4<100){
    $m5c="Debe mejorar en el apartado Métricas de navegación";
   }
}
else if($r5 <=90 && $r5 >=81){
  $b5=$r5;
  $b5a=100-$r5;
  $ac5="Aceptable";
  if($b1<100){
    $m5="Debe mejorar en el apartado de Métricas de interfaz";
  }
  if($b2<100){
   $m5a="Debe mejorar en el apartado de Resultado de la Métricas estéticas (diseño gráfico)";
  }
  if($b3<100){
    $m5b="Debe mejorar en el apartado de Métrica Contenido";
   }
   if($b4<100){
    $m5c="Debe mejorar en el apartado Métricas de navegación";
   }
 }
 else if($r5 <=80 && $r5 >=55){
  $b5=$r5;
  $b5a=100-$r5;
  $ac5="Normal";
  if($b1<100){
    $m5="Debe mejorar en el apartado de Métricas de interfaz";
  }
  if($b2<100){
   $m5a="Debe mejorar en el apartado de Resultado de la Métricas estéticas (diseño gráfico)";
  }
  if($b3<100){
    $m5b="Debe mejorar en el apartado de Métrica Contenido";
   }
   if($b4<100){
    $m5c="Debe mejorar en el apartado Métricas de navegación";
   }
}
else if($r5 <=54 ){
  $b5=$r5;
  $b5a=100-$b5;
  $ac5="No Aceptable";
  if($b1<100){
    $m5="Debe mejorar en el apartado de Métricas de interfaz";
  }
  if($b2<100){
   $m5a="Debe mejorar en el apartado de Resultado de la Métricas estéticas (diseño gráfico)";
  }
  if($b3<100){
    $m5b="Debe mejorar en el apartado de Métrica Contenido";
   }
   if($b4<100){
    $m5c="Debe mejorar en el apartado Métricas de navegación";
   }
}
///////////////////////////
?>


<!doctype html>
<html lang="en">
  <head>

        <meta charset="utf-8">
        <title>Resultado</title>

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

    <!--Estadistica-->
      <script src="chart/Chart.min.js"></script>
      <script src="chart/utils.js"></script>
        <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
    <meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


      <style>
        .bd-placeholder-img {
          font-size: 1.125rem;
          text-anchor: middle;
          -webkit-user-select: none;
          -moz-user-select: none;
          -ms-user-select: none;
          user-select: none;
        }

        @media (min-width: 768px) {
          .bd-placeholder-img-lg {
            font-size: 3.5rem;
          }
        }
      </style>
      <!-- Custom styles for this template -->
      <link href="form-validation.css" rel="stylesheet">
</head>
<body class="bg-light">
 <div class="container">
      <div class="jumbotron bg-secondary text-white" style="padding-top: 0px; margin-bottom: 0px;">
        <div class="py-5 text-center">
          <img class="img-fluid" src="image/a.png" alt="" width="372" height="372">
          <h2>Sistema de Aplicación de Métricas de diseño para WebApps</h2>
        </div>
      </div>
  </div>

    <div class="container">

     <div class="jumbotron" style="margin-bottom: 0px;">

      <div class="row">

        <div class="col-md-8 order-md-1">


            <br>
            <hr class="mb-4">

            <h4 class="mb-3">Resuldato de la interfaz</h4>

  <!---EMpeiza-->

  <div>
   <h5><i class="material-icons" style="font-size:15px;color:gray;" >fiber_manual_record</i> Calidad <?php echo $ac1;  ?></h5>
    <div id="canvas-holder1" style="width:100%">
      <canvas id="chart-area1"></canvas>
    </div>
    <script>




      var config1 = {
        type: 'pie',
        data: {
          datasets: [{
            data: [
              <?php echo $b1;  ?>,
              <?php echo $b1a;  ?>

            ],
            backgroundColor: [
              window.chartColors.green,
              window.chartColors.red


            ],
            label: 'Dataset 1'
          }],
          labels: [
            'Porcertanje de buena Calidad',
            'Porcentaje de mala calidad'
          ]
        },
        options: {
          responsive: true
        }
      };



    </script>
     <h5><i class="material-icons" style="font-size:15px;color:gray;" >fiber_manual_record</i> <?php echo $m1;  ?></h5>
     <br>
     <h5><i class="material-icons" style="font-size:15px;color:gray;" >fiber_manual_record</i> <?php echo $m1a;  ?></h5>
  </div>
    <!--Termina-->
            <br>
            <hr class="mb-4">

            <h4 class="mb-3">Resultado de la estética (diseño gráfico)</h4>
  <div>
   <h5><i class="material-icons" style="font-size:15px;color:gray;" >fiber_manual_record</i> Calidad <?php echo $ac2;  ?></h5>
    <div id="canvas-holder2" style="width:100%">
      <canvas id="chart-area2"></canvas>
    </div>
    <script>




      var config2 = {
        type: 'pie',
        data: {
          datasets: [{
            data: [
              <?php echo $b2;  ?>,
              <?php echo $b2a;  ?>

            ],
            backgroundColor: [
              window.chartColors.green,
              window.chartColors.red


            ],
            label: 'Dataset 1'
          }],
          labels: [
            'Porcertanje de buena Calidad',
            'Porcentaje de mala calidad'
          ]
        },
        options: {
          responsive: true
        }
      };



    </script>
     <h5><i class="material-icons" style="font-size:15px;color:gray;" >fiber_manual_record</i> <?php echo $m2;  ?></h5>
     <br>
     <h5><i class="material-icons" style="font-size:15px;color:gray;" >fiber_manual_record</i> <?php echo $m2a;  ?></h5>
  </div>

            <br>
            <hr class="mb-4">

            <h4 class="mb-3">Resultado del contenido</h4>
             <!---EMpeiza-->

  <div>
   <h5><i class="material-icons" style="font-size:15px;color:gray;" >fiber_manual_record</i> Calidad <?php echo $ac3;  ?></h5>
    <div id="canvas-holder3" style="width:100%">
      <canvas id="chart-area3"></canvas>
    </div>
    <script>




      var config3 = {
        type: 'pie',
        data: {
          datasets: [{
            data: [
              <?php echo $b3;  ?>,
              <?php echo $b3a;  ?>

            ],
            backgroundColor: [
              window.chartColors.green,
              window.chartColors.red


            ],
            label: 'Dataset 1'
          }],
          labels: [
            'Porcertanje de buena Calidad',
            'Porcentaje de mala calidad'
          ]
        },
        options: {
          responsive: true
        }
      };



    </script>
     <h5><i class="material-icons" style="font-size:15px;color:gray;" >fiber_manual_record</i> <?php echo $m3;  ?></h5>
     <br>
     <h5><i class="material-icons" style="font-size:15px;color:gray;" >fiber_manual_record</i> <?php echo $m3a;  ?></h5>
  </div>
    <!--Termina-->

            <br>
            <hr class="mb-4">

            <h4 class="mb-3">Resultado de navegación</h4>
             <!---EMpeiza-->

  <div>
   <h5><i class="material-icons" style="font-size:15px;color:gray;" >fiber_manual_record</i> Calidad <?php echo $ac4;  ?></h5>
    <div id="canvas-holder4" style="width:100%">
      <canvas id="chart-area4"></canvas>
    </div>
    <script>




      var config4 = {
        type: 'pie',
        data: {
          datasets: [{
            data: [
              <?php echo $b4;  ?>,
              <?php echo $b4a;  ?>

            ],
            backgroundColor: [
              window.chartColors.green,
              window.chartColors.red


            ],
            label: 'Dataset 1'
          }],
          labels: [
            'Porcertanje de buena Calidad',
            'Porcentaje de mala calidad'
          ]
        },
        options: {
          responsive: true
        }
      };



    </script>
     <h5><i class="material-icons" style="font-size:15px;color:gray;" >fiber_manual_record</i> <?php echo $m4;  ?></h5>
     <br>
     <h5><i class="material-icons" style="font-size:15px;color:gray;" >fiber_manual_record</i> <?php echo $m4a;  ?></h5>
  </div>
    <!--Termina-->
            <br>
            <hr class="mb-4">

            <h4 class="mb-3">Resultado Total del diseño de la WebbApp</h4>

            <!---EMpeiza-->

  <div>
   <h6><i class="material-icons" style="font-size:15px;color:gray;" >fiber_manual_record</i> Calidad <?php echo $ac5;  ?></h5>
    <div id="canvas-holder5" style="width:100%">
      <canvas id="chart-area5"></canvas>
    </div>
    <script>




      var config5 = {
        type: 'pie',
        data: {
          datasets: [{
            data: [
              <?php echo $b5;  ?>,
              <?php echo $b5a;  ?>


            ],
            backgroundColor: [
              window.chartColors.green,
              window.chartColors.red


            ],
            label: 'Dataset 1'
          }],
          labels: [
            'Porcentaje de buena Calidad',
            'Porcentaje de mala calidad'
          ]
        },
        options: {
          responsive: true
        }
      };



    </script>
     <h5><i class="material-icons" style="font-size:15px;color:gray;" >fiber_manual_record</i> <?php echo $m5;  ?></h5>
     <h5><i class="material-icons" style="font-size:15px;color:gray;" >fiber_manual_record</i> <?php echo $m5a;  ?></h5>
     <h5><i class="material-icons" style="font-size:15px;color:gray;" >fiber_manual_record</i> <?php echo $m5b;  ?></h5>
     <h5><i class="material-icons" style="font-size:15px;color:gray;" >fiber_manual_record</i> <?php echo $m5c;  ?></h5>

  </div>
    <!--Termina-->
    <br>
    <hr class="mb-4">
<h3> Porcentaje de Cada Métrica </h3>
          <!---EMpeiza-->

 <div>
    <div id="canvas-holder" style="width:100%">
		<canvas id="chart-area"></canvas>
	  </div>

        <script>


          var chartColors = window.chartColors;
          var color = Chart.helpers.color;
          var config = {
            data: {
              datasets: [{
                data: [
                  <?php echo $r1;  ?>,
                  <?php echo $r2;  ?>,
                  <?php echo $r3;  ?>,
                  <?php echo $r4;  ?>

                ],
                backgroundColor: [
                  color(chartColors.red).alpha(0.5).rgbString(),
                  color(chartColors.orange).alpha(0.5).rgbString(),
                  color(chartColors.yellow).alpha(0.5).rgbString(),
                  color(chartColors.green).alpha(0.5).rgbString(),

                ],
                label: 'My dataset' // for legend
              }],
              labels: [
                'Métricas de interfaz',
                'Métricas estéticas',
                'Métrica Contenido',
                'Métricas de navegación',
              ]
            },
            options: {
              responsive: true,
              legend: {
                position: 'right',
              },
              title: {
                display: false,
                text: 'Porcentaje de Cada Metrica'
              },
              scale: {
                ticks: {
                  beginAtZero: true
                },
                reverse: false
              },
              animation: {
                animateRotate: false,
                animateScale: true
              }
            }
          };

          window.onload = function() {
            var ctxz = document.getElementById('chart-area');
            window.myPolarArea = Chart.PolarArea(ctxz, config);
                var ctx = document.getElementById('chart-area1').getContext('2d');
              window.myPie = new Chart(ctx, config1);
              var ctx2 = document.getElementById('chart-area2').getContext('2d');
              window.myPie = new Chart(ctx2, config2);
              var ctx3 = document.getElementById('chart-area3').getContext('2d');
              window.myPie = new Chart(ctx3, config3);
              var ctx4 = document.getElementById('chart-area4').getContext('2d');
              window.myPie = new Chart(ctx4, config4);
              var ctx5 = document.getElementById('chart-area5').getContext('2d');
              window.myPie = new Chart(ctx5, config5);

              };
            </script>

    </div>
    <br>
    <hr class="mb-4">
    <!--Termina-->
    <br>
    <a class="btn btn-info btn-lg btn-block" role="button" href="index.php">Regresar al Inicio</a>
        </div>
      </div>
    </div>
  </div>

<div class="footer-copyright text-center py-3 bg-secondary text-white">
  <p class="mb-1">2020 @Calidad de Software</p>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
<script src="form-validation.js"></script>
</body>
</html>
