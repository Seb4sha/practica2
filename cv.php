<?php

// Iniciar la sesión
session_start();

// Comprobar si el usuario está autenticado
if (!isset($_SESSION["username"])) {
  // Si no está autenticado, mostrar mensaje de error y redirigir al inicio
  echo "Error: no tienes acceso a esta página. Serás redirigido al inicio en 10 segundos.";
  header("Refresh: 10; url=index.php");
  exit;
}

// Obtener el nombre y apellido del usuario activo
$username = $_SESSION["username"];
$user_data = get_user_data($username);
$name = $user_data["name"];
$surname = $user_data["surname"];

?>


<!-- Mostrar cv -->

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pràctica 1 - Aplicacions Web</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

    <style>
    img {
      border: 5px solid darkgray;
      margin-top: -135px;
    }

    progress {
        border: 1px solid;
        border-radius: 12px;
        width: 60px;
        height: 10px;
        background: gray;
    }

    progress {
        color: lightgray;
    }

    progress::-moz-progress-bar {
        background: lightgray;
    }

    progress::-webkit-progress-value {
        background: gray;
    }

    progress::-webkit-progress-bar {
     background: lightgray;
    }
    </style>
</head>
<body>
<div id="header">
  <p>Bienvenido/a, <?php echo "$name $surname"; ?></p>
  <a href="logout.php">Cerrar sesión</a>
</div>
<div class="jumbotron text-center" style="background-color:darkgray;">
  <h1 style="color:white;size:12px;">Germán Rossi</h1>
</div>

<div class="container">
    <div class="row">
    <div class="col-sm-4">
        <img src="https://th.bing.com/th/id/R.c6b482f5e343903955234a1f60e9ecda?rik=m789TZQTh%2fzXPA&riu=http%3a%2f%2fsunrift.com%2fwp-content%2fuploads%2f2014%2f12%2fBlake-profile-photo-square.jpg&ehk=KPaRRdhK2539xSF1ZlhKY25YNeohbiAO9FGYmnQIC7U%3d&risl=&pid=ImgRaw&r=0" class="img-circle" width="205" height="205">
        <br><br>
        <h4><i class="bi bi-chevron-double-right"></i> <b>Datos personales</b></h4>
        <hr>
        <ul style="list-style-type:none;">
            <li><i class="bi bi-person-fill"></i> Germán Rossi</li>
            <li><i class="bi bi-house-door-fill"></i> Calle</li>
            <li><i class="bi bi-telephone-fill"></i> Num</li>
            <li><i class="bi bi-at"></i> Mail</li>
            <li><i class="bi bi-calendar3"></i> 04/01/1995</li>
            <li><i class="bi bi-flag-fill"></i> Argentina</li>
            <li><i class="bi bi-phone"></i> Num</li>
            <li><i class="bi bi-people"></i> Soltero</li>
            <li><i class="bi bi-5-square"></i> Clase C</li>
        </ul>
        <br>
        <h4><i class="bi bi-chevron-double-right"></i> <b>Habilidades</b></h4>
        <hr>
        <div class="row">
            <div class="col-sm-3">
                Disciplinado
                <br>
                Liderazgo
                <br>
                Visionario
                <br>
                Habilidad numérica
                <br>
                Relaciones públicas
            </div>
            <div class="col-sm-3">
                <div>
                    <progress min="0" max="100" value="75">
                </div>

                <div>
                    <progress min="0" max="100" value="75">
                </div>

                <div>
                    <progress min="0" max="100" value="75">
                </div>

                <div>
                    <progress min="0" max="100" value="100">
                </div>

                <div>
                    <progress min="0" max="100" value="45">
                </div>

            </div>
        </div>

        <br>

        <h4><i class="bi bi-chevron-double-right"></i> <b>Idiomas</b></h4>
        <hr>
        <div class="row">
            <div class="col-sm-3">
                Español
                <br>
                Inglés
                <br>
                Francés
                <br>
                Portugués
            </div>

            <div class="col-sm-3">
                <div>
                    <progress min="0" max="100" value="100">
                </div>

                <div>
                    <progress min="0" max="100" value="75">
                </div>

                <div>
                    <progress min="0" max="100" value="75">
                </div>

                <div>
                    <progress min="0" max="100" value="45">
                </div>
            </div>
        </div>

        <br>

        <h4><i class="bi bi-chevron-double-right"></i> <b>Informática</b></h4>
        <hr>
        <div class="row">
            <div class="col-sm-3">
                Microsoft Excel
                <br>
                Microsoft Word
                <br>
                Software DelSol
                <br>
                Contalux
                <br>
                Cegit
            </div>
            <div class="col-sm-3">
                <div>
                    <progress min="0" max="100" value="100">
                </div>

                <div>
                    <progress min="0" max="100" value="75">
                </div>

                <div>
                    <progress min="0" max="100" value="45">
                </div>

                <div>
                    <progress min="0" max="100" value="75">
                </div>

                <div>
                    <progress min="0" max="100" value="25">
                </div>

            </div>
        </div>

        <br>

        <h4><i class="bi bi-chevron-double-right"></i> <b>Competencias</b></h4>
        <hr>
            <ul style="list-style-type:none;">
                <li><i class="bi bi-caret-right-fill"></i> Comunicación</li>
                <li><i class="bi bi-caret-right-fill"></i> Trabajo en equipo</li>
            </ul>
    </div>

    <div class="col-sm-8">
      <h4><i class="bi bi-chevron-double-right"></i> <b>Perfil</b></h4>
      <hr>
        <p>Experiencia en diferentes proyectos de implementación y mantenimiento post implementación, como así también tareas de mantenimiento correctivo y evolutivo. Proactivo, orientado a resultado, con 4 años de experiencia en áreas administrativo-contables, y más de 4 años de experiencia como consultor.</p>

        <br>
      <h4><i class="bi bi-chevron-double-right"></i> <b>Experiencias personales</b></h4>
      <hr>

        <div class="row">
            <div class="col-sm-4">

            <h5>01/2017 - Presente</h5>
            <br><br><br><br><br><br>
            <h5>08/2016 - 12/2016</h5>
            <br><br><br><br><br><br><br><br><br><br>
            <h5>01/2015 - 07/2016</h5>

            </div>
            <div class="col-sm-8">
              <h4>Consultor 8AP</h4>
              <i>Bunge Cono Bur </i>
              <br><br>
              <p>Mantenimiento Correctivo / evolutivo Modulos FI-CO-TRM. implementación interfase con bancos para registro de cobranzas por cuentas recaudadoras. implementación del registro de recaudaciones a traces de sistema Lapos. Lider Funcional FICO para proyecto Upgrade.</p>

              <h4>Consultor 8AP FICO 8R. </h4>
              <i>Softtek - La Plata, Buenos Aires</i>
              <br><br>
              <p>Como consultor 8AP FICO, participé activamente en los siguientes proyectos:</p>
              <ul>
                <li>Banco Hipotecario - Upgrade de versión 5.0 a 6.0</li>
                <li>PC Arts Argentina (BANGHO) - implementación: 8AP ALL IN ONE</li>
                <li>Laboratorios Banofi Aventis - Soporte para LATAM</li>
                <li>Investigación y desarrollo de casos de estudio sobre parametrización y aplicación del módulo TRM - PlazosFijos</li>
              </ul>
              <br>



              <h4>Especialista 8AP FI</h4>
              <i>Accenture Argentina</i>
              <br><br>
              <p>Consultor funcional del modulo FI creación de nuevas sociedades FI, configuración de operaciones bancarias de extractos automáticos, configuración de nuevas estructuras de balances, configuración de nuevas cuentas bancarias en las distintas sociedades del grupo empresas, configuración parcial módulo activo fijo, configuración de nuevos indicadores de impuestos, soporte funcional a usuarios del módulo FI-AR, FI-TR, FI-GL, FI-AP</p>




            </div>
      <h4><i class="bi bi-chevron-double-right"></i> <b>Educación</b></h4>
      <hr>

          <div class="row">
            <div class="col-sm-4">

          <h5>08/2009 - Presente</h5>



            </div>
            <div class="col-sm-8">
          <h4>Contador Público</h4>
          <i>Universidad de Buenos Aires (UBA) - Buenos Aires - Promedio: 8 </i>
          <br><br>
          <p>Durante mi formación me he capacitado para asesorar personas y empresas en las áreas financiera, impositiva, contable, laboral, de costos y societaria. Diseñar, interpretar e implementar sistemas de información contables, dentro de las organizaciones públicas y privadas, para la toma de decisiones.</p>




            </div>
          </div>
    </div>
  </div>
</div>

</body>
</html>
