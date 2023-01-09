<?php

// Función para conectarse a la base de datos
function connect() {
  // Datos de conexión a la base de datos
  $host = "mysql-sebastianc.alwaysdata.net";
  $username = "295167_admin";
  $password = "Latumbadepele97";
  $dbname = "sebastianc_cv";

  // Crea la conexión
  $conn = mysqli_connect($host, $username, $password, $dbname);

  // Verifica si la conexión es exitosa
  if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
  }

  return $conn;
}

// Función para añadir un usuario a la base de datos
function add_user($username, $password) {
  // Conectarse a la base de datos
  $conn = connect();

  // Crear la consulta para insertar el usuario
  $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
  $stmt = mysqli_prepare($conn, $sql);
  mysqli_stmt_bind_param($stmt, "ss", $username, $password);

  // Ejecutar la consulta y cerrar la conexión
  mysqli_stmt_execute($stmt);
  mysqli_close($conn);
}

// Función para eliminar un usuario de la base de datos
function delete_user($username) {
  // Conectarse a la base de datos
  $conn = connect();

  // Crear la consulta para eliminar el usuario
  $sql = "DELETE FROM users WHERE username = ?";
  $stmt = mysqli_prepare($conn, $sql);
  mysqli_stmt_bind_param($stmt, "s", $username);

  // Ejecutar la consulta y cerrar la conexión
  mysqli_stmt_execute($stmt);
  mysqli_close($conn);
}

// Función para obtener la contraseña de un usuario
function get_user_passwd($username) {
  // Conectarse a la base de datos
  $conn = connect();

  // Crear la consulta para obtener la contraseña del usuario
  $sql = "SELECT password FROM users WHERE username = ?";
  $stmt = mysqli_prepare($conn, $sql);
  mysqli_stmt_bind_param($stmt, "s", $username);

  // Ejecutar la consulta y obtener el resultado
  mysqli_stmt_execute 