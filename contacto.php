<?php
    $pg = "contacto";

  if($_POST){
    $nombre = $_POST["txtNombre"];
    $correo = $_POST["txtCorreo"];
    $telefono = $_POST["txtTelefono"];
    $mensaje = $_POST["txtMensaje"];

    $para = "joelcolombo35@gmail.com";
    $titulo = "Recibiste un mensaje desde tu web";

    // mensaje
    $cuerpo = "
    Nombre: $nombre <br>
    Correo: $correo <br>
    Telefono: $telefono <br>
    Mensaje: $mensaje
    ";

    $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
    $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

  // Cabeceras adicionales
  $cabeceras .= 'To: joelcolombo35@gmail.com' . "\r\n";
  $cabeceras .= 'From: //dominio' . "\r\n";

  // Enviarlo
  mail($para, $título, $mensaje, $cabeceras);

  }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UVA-Comatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body id="contacto" class="d-flex flex-column h-100">
    <header class="container">
    <?php include_once "menu.php"; ?>
    </header>
    <main class="container">
      <div class="row">
        <div class="col-12 pt-3 pb-5">
          <h1>Contacto</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-6">
          <p>Te invito a que te contactes enviandome un mensaje o bien via whastapp.</p>
        </div>
        <div class="col-6">
          <form action="" method="POST">
            <div class="pb-3">
            <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre" class="form-control">
            </div>
            <div class="pb-3">
            <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo" class="form-control">
            </div> 
            <div class="pb-3">
            <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Teléfono/whastapp" class="form-control">
            </div>
            <div class="pb-3">
            <textarea name="txtMensaje" id="txtMensaje" placeholder="Escribe aquí tu mensaje" class="form-control"></textarea>
          </div>
        <div class="pb-3">
            <button type="submit" id="btnEnviar" class="btn-blanco">ENVIAR</button> 
        </div>
      </div>
    </form>
        </div>
      </div>
    </main>
    <footer class="container mt-auto py-4">
      <div class="row">
          <div class="col-sm-3 col-12">
              <a href="https://github.com"><i class="fa-brands fa-github"></i></a>
              <a href="https://linkedin.com"><i class="fa-brands fa-linkedin-in"></i></a>
          </div>
          <div class="col-sm-3 col-12">
              Sponsor <a href="https://depcsuite.com">DePC Suite</a>
          </div>
          <div class="col-sm-3 col-12">
             <a href="//dominio">joelcolombo@gmail.com</a>
          </div>
      </div>
      <a href="https://api.whatsapp.com/send?phone=+541162442898" target="_blank"><i class="fa-brands fa-whatsapp px-3 pt-3 pb-4"></i></a>
  </footer>
</body>
</html>