<?php
	// Añadimos las librerías
	/**include("bd/config.php");
    include("bd/conexionbd.php");**/

    $sql_host="database-1.cboaw64sudj5.us-east-1.rds.amazonaws.com";
    $sql_usuario="admin";
    $sql_pass="Magic_813!";
    $sql_db="prueba";

    echo 'hola';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Inicial</title>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
</head>
<body>
    <div class="grid-container">
      <header class="grid-header">
        <div>
          <ul >
            <li class="text"><a href="iniciarsesion.html" class="links">Iniciar sesión</a></li>
          </ul>
        </div>
        <nav>
          <div>
            <img src="img/Logo.svg" class="logo" alt="logo">
          </div>
          <ul class="ul-nav">
            <li class="text"><a href="contacto.html" class="links">Quienes Somos</a></li>
            <li class="text"><a href="" class="links">Reserva</a></li>
            <li class="text"><a href="index.php" class="links">Inicio</a></li>
          </ul>
        </nav>
      </header>
      <footer class="grid-footer">  
          <div class="">
              <a href="http://www.facebook.com"><img src="img/fb.png" alt="facebook" class="social"></a>
              <a href="http://www.instagram.com"><img src="img/ig.png" alt="instagram" class="social"></a>
              <a href="http://www.twitter.com"><img src="img/tw2.png" alt="twitter" class="social"></a>
              <a href="Contacto.html"><img src="img/contact.png" alt="contacto" class="social"></a>
          </div>
      </footer>
    </div>
</body>
</html>
<?php include("bd/desconectarbd.php"); ?>