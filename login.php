
<?php
  $username = $_POST["username"];
  $password = $_POST["password"];

  if ($username == "carolina" && $password == "hola") {
    echo "¡Bienvenida, Carolina!";
  } else {
    echo "Nombre de usuario o contraseña incorrectos.";
  }
?>
