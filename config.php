<?php

// Constantes para la conexión a la base de datos
define('DB_USER', '295167_admin');
define('DB_PASSWORD', 'Latumbadepele97');
define('DB_NAME', 'sebastianc_cv');
define('DB_HOST', 'mysql-sebastianc.alwaysdata.net');

// Variable para almacenar la conexión a la base de datos
$conn = null;

// Función para conectarse a la base de datos
function connectToDB() {
  global $conn;

  // Crea la conexión a la base de datos
  $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

  // Comprueba si la conexión ha fallado
  if (mysqli_connect_errno()) {
    die('Error al conectarse a la base de datos: ' . mysqli_connect_error());
  }
}

// Función para desconectarse de la base de datos
function disconnectFromDB() {
  global $conn;

  // Cierra la conexión a la base de datos
  mysqli_close($conn);
}

?>
