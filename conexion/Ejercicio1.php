<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Datos de registro</title>
  <!-- Importar Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <h1>Datos de registro</h1>
    <?php
    // Verificar si se enviaron los datos por POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Obtener los datos del formulario
      $nombre = $_POST["nombre"];
      $email = $_POST["email"];

      // Mostrar los datos en la página
      echo '<div class="alert alert-success">';
      echo '<strong>Nombre:</strong> ' . $nombre . '<br>';
      echo '<strong>Correo electrónico:</strong> ' . $email;
      echo '</div>';
    } else {
      // Si no se enviaron datos, mostrar un mensaje de error
      echo '<div class="alert alert-danger">';
      echo 'No se recibieron datos del formulario.';
      echo '</div>';
    }
    ?>
  </div>
  <!-- Importar jQuery y Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

