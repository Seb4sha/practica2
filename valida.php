<?php

// Incluir el archivo donde se definen las funciones de gestión de la base de datos
include "config.php";

// Si se ha enviado el formulario de inicio de sesión
if (isset($_POST["submit"])) {
  // Recoger los datos del formulario
  $username = $_POST["username"];
  $password = $_POST["password"];

  // Validar los datos del formulario
  $errors = array();
  if (empty($username)) {
    $errors[] = "El nombre de usuario no puede estar vacío";
  }
  if (empty($password)) {
    $errors[] = "La contraseña no puede estar vacía";
  }

  // Si no hay errores, comprobar si el usuario es válido y crear sesión
  if (empty($errors)) {
    $user_passwd = get_user_passwd($username);
    if ($user_passwd == $password) {
      session_start();
      $_SESSION["username"] = $username;
      header("Location: cv.php");
    } else {
      $errors[] = "Nombre de usuario o contraseña incorrectos";
    }
  }

  // Si hay errores, mostrar mensaje de error
}

