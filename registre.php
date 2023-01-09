<?php

// Comprueba si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Obtiene los datos del formulario
  $username = $_POST['username'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];

  // Comprueba que la contraseña y su confirmación sean iguales
  if ($password != $confirm_password) {
    echo '<p>La contraseña y su confirmación no coinciden. Por favor, vuelva a intentarlo.</p>';
  } else {
    // Registra al usuario y redirige al usuario a la página principal
    registerUser($username, $password);
    header('Location: index.php');
    exit;
  }
}

?>

<!-- Muestra el formulario de registro -->
<form method="post">
  <label for="username">Usuario:</label>
  <input type="text" name="username" required>
  <br>
  <label for="password">Contraseña:</label>
  <input type="password" name="password" required>
  <br>
  <label for="confirm_password">Confirmar contraseña:</label>
  <input type="password" name="confirm_password" required>
  <br>
  <input type="submit" value="Registrarse">
</form>