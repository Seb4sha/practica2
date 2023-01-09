<?php

// Incluir el archivo donde se definen las funciones de gestión de la base de datos
include "config.php";

// Si se ha enviado el formulario de alta
if (isset($_POST["submit"])) {
  // Recoger los datos del formulario
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $password_confirm = $_POST["password_confirm"];

  // Validar los datos del formulario
  $errors = array();
  if (empty($username)) {
    $errors[] = "El nombre de usuario no puede estar vacío";
  }
  if (empty($email)) {
    $errors[] = "El correo electrónico no puede estar vacío";
  }
  if (empty($password)) {
    $errors[] = "La contraseña no puede estar vacía";
  }
  if ($password != $password_confirm) {
    $errors[] = "Las contraseñas no coinciden";
  }
  if (strlen($password) > 8) {
    $errors[] = "La contraseña no puede tener más de 8 caracteres";
  }
  if (user_exists($username)) {
    $errors[] = "El nombre de usuario ya está en uso";
  }
  if (email_exists($email)) {
    $errors[] = "El correo electrónico ya está en uso";
  }

  // Si no hay errores, dar de alta al usuario y enviar correo de bienvenida
  if (empty($errors)) {
    add_user($username, $password);
    send_welcome_email($email);
    echo "¡Bienvenido/a! Alta realizada correctamente.";
  } else {
    echo "Alta no realizada.";
  }
}

// Función para comprobar si un nombre de usuario ya existe en la base de datos
function user_exists($username) {
  // Conectarse a la base de datos
  $conn = connect();

  // Crear la consulta para comprobar si el nombre de usuario existe
  $sql = "SELECT * FROM users WHERE username = ?";
  $stmt = mysqli_prepare($conn, $sql);
  mysqli_stmt_bind_param($stmt, "s", $username);

  // Ejecutar la consulta y obtener el resultado
  mysqli_stmt_execute($stmt);
  $result = mysqli_st ;

}
// Función para enviar un correo de bienvenida al usuario
function send_welcome_email($email) {
    // Credenciales de la cuenta de correo
    $from = "sebastianc@hotmail.com";
    $from_name = "sebastianc";
    $password = "Latumbadepele97";
  
    // Configurar el correo
    $to = $email;
    $subject = "Bienvenido/a a mi sitio web";
}
