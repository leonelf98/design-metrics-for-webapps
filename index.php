<!doctype html>
<html lang="en">
  <head>

      <meta charset="utf-8">
      <title>Home</title>

      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
    <meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">



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

      #contenedor {
        box-shadow: 0 0 10px black;
        padding: 0px;
        border-radius: 0px;
      }


    </style>

    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>

  <body class="bg-light">

  <div class="container" id="contenedor">
      <div class="jumbotron bg-secondary text-white" style="padding-top: 0px; margin-bottom: 0px; border-radius: 0px;">
        <div class="py-5 text-center">
          <img class="img-fluid" src="image/a.png" alt="" width="372" height="372">
          <h2>Sistema de Aplicación de Métricas de diseño para WebApps</h2>
        </div>
      </div>
  </div>

  <div class="container" id="contenedor">

   <div class="jumbotron" style="margin-bottom: 0px; border-radius: 0px;">

    <div class="row">
    <div class="col-md-8 order-md-1">
      <form form action="resultado.php" method="post" id="form" enctype="multipart/form-data">

        <br>
        <hr class="mb-4">

        <h4 class="mb-3">Métricas de interfaz</h4>

        <div class="mb-3">
          <label class="lead" ><strong>Complejidad de reconocimiento</strong></label><br>

          <label>El diseño muestra claramente donde se encuentra el usuario</label><br>
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="codre" value="3">
                  <label class="form-check-label" for="exampleRadios1">
                      Sí, el diseño muestra de manera clara donde esta el usuario
                  </label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="codre" value="2">
                  <label class="form-check-label" for="exampleRadios2">
                      Sí se muestra donde esta el usuario, pero no de forma clara
                  </label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="codre" value="1">
                  <label class="form-check-label" for="exampleRadios2">
                      No se muestra donde esta el usuario
                  </label>
              </div>
        </div>

        <br>

        <div class="mb-3">
          <label class="lead" ><strong>Carga de memoria (en el usuario)</strong></label><br>
          <label>Durante el uso de la aplicación, Es posible reconocer donde se encuentra el usuario</label>
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="cadme" value="2">
                  <label class="form-check-label" for="exampleRadios1">
                      Sí
                  </label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="cadme" value="1">
                  <label class="form-check-label" for="exampleRadios2">
                      No
                  </label>
              </div>
        </div>

        <hr class="mb-4">

        <h4 class="mb-3">Métricas de estéticas (diseño gráfico)</h4>

          <div class="mb-3">
            <label class="lead" ><strong>Conteo de palabra</strong></label><br>
            <label>¿Cuantas palabra utiliza cada pagina?</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="cadme1" value="3">
                    <label class="form-check-label" for="exampleRadios1">
                        2,0000 - 2,5000
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="cadme1" value="2">
                    <label class="form-check-label" for="exampleRadios2">
                       2,600 - 3,0000
                    </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="cadme1" value="1">
                  <label class="form-check-label" for="exampleRadios2">
                     3,1000 a +
                  </label>
              </div>
          </div>

          <div class="mb-3">
            <label class="lead" ><strong>Conteo de colores</strong></label><br>
            <label>¿Cuantas colores utiliza por pagina?</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="cadme2" value="3">
                    <label class="form-check-label" for="exampleRadios1">
                        2 - 4
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="cadme2" value="2">
                    <label class="form-check-label" for="exampleRadios2">
                       5 - 8
                    </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="cadme2" value="1">
                  <label class="form-check-label" for="exampleRadios2">
                    9 o +
                  </label>
              </div>
        </div>

        <hr class="mb-4">

        <h4 class="mb-3">Métrica de Contenido</h4>

        <div class="mb-3">
          <label class="lead" ><strong>Espera de Pagina</strong></label><br>
          <label>Cuanto tiempo la página se carga a una velocidad de 100mB/s</label>
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="esdpa" value="3">
                  <label class="form-check-label" for="exampleRadios1">
                      0 - 3
                  </label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="esdpa" value="2">
                  <label class="form-check-label" for="exampleRadios2">
                      4 - 7
                  </label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="esdpa" value="1">
                  <label class="form-check-label" for="exampleRadios2">
                      8 o +
                  </label>
              </div>
        </div>

        <div class="mb-3">
          <label class="lead" ><strong>Complejidad de audio</strong></label><br>
          <label>Promedio de imagen por pagina</label>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="codau" value="3">
              <label class="form-check-label" for="exampleRadios1">
                  0 - 4
              </label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="codau" value="2">
              <label class="form-check-label" for="exampleRadios2">
                  5 - 9
              </label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="codau" value="1">
              <label class="form-check-label" for="exampleRadios2">
                  10 o +
              </label>
          </div>

      </div>

        <hr class="mb-4">

        <h4 class="mb-3">Métricas de navegación</h4>

          <div class="mb-3">
            <label class="lead" ><strong>Porcentaje de Enlaces Rotos de un Sitio </strong></label><br>
            <label>Es la cantidad de enlaces rotos tanto externos como internos.</label><br>
            <br>
            <label>Cantidad de enlaces rotos internos</label>
            <input type="Number" class="form-control" name="cadrin" value="" required>
            <br>
            <label>Cantidad de enlaces rotos externos</label>
            <input type="Number" class="form-control" name="cadrex" value="" required>
            <br>
            <label>Cantidad de enlaces total (Ya sean rotos o no)</label>
            <input type="Number" class="form-control" name="cadto" value="" required>
          </div>

          <div class="mb-3">
            <label class="lead" ><strong>Complejidad de vinculación de página</strong></label><br>
            <label>Número de vínculos por página</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="codau1" value="3">
                <label class="form-check-label" for="exampleRadios1">
                    <strong>Bajo</strong> | 5 vínculos o menos
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="codau1" value="2">
                <label class="form-check-label" for="exampleRadios2">
                    <strong>Medio</strong> | 6 a 15 vínculos
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="codau1" value="1">
                <label class="form-check-label" for="exampleRadios2">
                    <strong>Alto</strong> | más de 15 vínculos
                </label>
            </div>

        </div>
        <hr class="mb-4">

        <button class="btn btn-info btn-lg btn-block" type="submit">Enviar</button>
      </form>
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
