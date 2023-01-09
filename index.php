<?php

// Comprueba si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Obtiene los datos del formulario
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Comprueba si el usuario y la contraseña son válidos
  if (checkCredentials($username, $password)) {
    // Inicia la sesión y redirige al usuario a la página principal
    session_start();
    $_SESSION['username'] = $username;
    header('Location: index.php');
    exit;
  } else {
    // Muestra un mensaje de error y redirige al usuario a la página de registro
    echo '<p>Usuario o contraseña inválidos. Por favor, regístrese para continuar.</p>';
    header('Location: registre.php');
    exit;
  }
}

function checkCredentials($username, $password) {
  // Conexión a la base de datos
  $conn = new mysqli("mysql-sebastianc.alwaysdata.net", "295167_admin", "Latumbadepele97", "sebastianc_cv");
  if ($conn->connect_error) {
      die("La conexión a la base de datos ha fallado: " . $conn->connect_error);
  }
  
  // Consulta para obtener el usuario y la contraseña hasheada y salteada
  $sql = "SELECT username, password FROM users WHERE username = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s", $username);
  $stmt->execute();
  $stmt->bind_result($db_username, $db_password);
  $stmt->fetch();
  
  // Verificamos si el usuario existe y si la contraseña es válida
  if ($db_username == $username && password_verify($password, $db_password)) {
      return true;
  } else {
      return false;
  }
}



?>

<!-- Muestra el formulario de inicio de sesión -->
<!DOCTYPE html>
<html>
<head>
  <title>Bienvenidos</title>
</head>
<body>
<form method="post">
  <label for="username">Usuario:</label>
  <input type="text" name="username" required>
  <br>
  <label for="password">Contraseña:</label>
  <input type="password" name="password" required>
  <br>
  <input type="submit" value="Iniciar sesión">
</form>
<br>
  <a href="registre.php">No estoy registrado</a>
</body>
</html>