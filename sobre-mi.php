<?php
    $pg = "sobre-mi";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UVA-Comatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre mí</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body id="sobre-mi" class="d-flex flex-column h-100">
  <header class="container">
  <?php include_once "menu.php"; ?>
</header>
    <main class="container">
      <section class="container" id="descripcion">
        <div class="row">
          <div class="col-12 col-sm-7">
            <h1 class="pb-5 pt-3">Sobre mí</h1>
            <p>Apasionado por la tecnologia</p>
            <a href="contacto.html" class="btn-rojo my-5 d-none d-sm-block w-25">Enviar mensaje</a>
          </div>
          <div class="col-12 col-sm-5">
            <img src="imagenes/th.jpg" alt="yo">
          </div>
        </div>
      </section>
      <section id="stack-tecnologico">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h2>Stack tecnologico <br><br></h2>
            </div>
            <div class="col-6 col-sm-2">
              <div class="tecnologia mb-4 pt-5">
                <h3>Javascript</h3>
                <img src="imagenes/logo javascrip.jpg" alt="Javascript">
              </div>
            </div>
            <div class="col-6 col-sm-2">
              <div class="tecnologia mb-4 pt-5">
                <h3>PHP</h3>
                <img src="imagenes/logo php.jpg" alt="PHP">
              </div>
            </div>
            <div class="col-6 col-sm-2">
              <div class="tecnologia mb-4 pt-5">
                <h3>HTML5</h3>
                <img src="imagenes/logo html.jpg" alt="HTML5">
              </div>
            </div>
            <div class="col-6 col-sm-2">
              <div class="tecnologia mb-4 pt-5">
                <h3>React.js</h3>
                <img src="imagenes/logo react js.jpg" alt="React.js">
              </div>
            </div>
            <div class="col-6 col-sm-2">
              <div class="tecnologia mb-4 pt-5">
                <h3>jQuery</h3>
                <img src="imagenes/logo jquery.jpg" alt="jQuery">
              </div>
            </div>
            <div class="col-6 col-sm-2">
              <div class="tecnologia mb-4 pt-5">
                <h3>Bootstrap</h3>
                <img src="imagenes/logo bootstrap.jpg" alt="Bootstrap">
              </div>
            </div>
            <div class="col-6 col-sm-2">
              <div class="tecnologia mb-4 pt-5">
                <h3>Laravel</h3>
                <img src="imagenes/logo laravel.jpg" alt="Laravel">
              </div>
            </div>
            <div class="col-6 col-sm-2">
              <div class="tecnologia mb-4 pt-5">
                <h3>MySQL</h3>
                <img src="imagenes/logo MySQL.jpg" alt="MySQL">
              </div>
            </div>
            <div class="col-6 col-sm-2">
              <div class="tecnologia mb-4 pt-5">
                <h3>CSS</h3>
                <img src="imagenes/logo css.jpg" alt="CSS">
              </div>
            </div>
            <div class="col-6 col-sm-2">
              <div class="tecnologia mb-4 pt-5">
                <h3>Git</h3>
                <img src="imagenes/logo git.jpg" alt="Git">
              </div>
            </div>
            <div class="col-6 col-sm-2">
              <div class="tecnologia mb-4 pt-5">
                <h3>Apache</h3>
                <img src="imagenes/logo apache.jpg" alt="Apache">
              </div>
            </div>
            <div class="col-6 col-sm-2">
              <div class="tecnologia mb-4 pt-5">
                <h3>Mercadopago</h3>
                <img src="imagenes/logo mercado pago.jpg" alt="Mercadopago">
              </div>
            </div>
          </div>
      </section>
      <section id="experiencia">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h2><i class="fa-solid fa-briefcase"></i>Experiencia laboral <br><br></h2>
            </div>
            <div class="row shadow">
            <div class="col-sm-2 d-none d-sm-block p-5">
              <img src="imagenes/sin-logo.png" alt="trabajo" class="img-fluid">
            </div>
            <div class="col-sm-10 col-12 my-3">
              <h3>"puesto de trabajo"</h3>
              <h4>"lugar de trabajo"</h4>
              <h5>"tiempo trabajado"</h5>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore molestiae soluta officia! Debitis eligendi obcaecati illo, totam iure quis nesciunt provident ducimus aperiam ipsam omnis! Nesciunt distinctio veritatis vero fugit.</p>
            </div>
        </div> 
      </div>     
      </section>
      <section id="cursos">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h2>Cursos <br><br></h2>
            </div>
        <div class="row shadow">
          <div class="col-sm-2 d-none d-sm-block p-5">
              <img src="imagenes/sin-logo.png" alt="trabajo" class="img-fluid">
          </div>
          <div class="col-sm-10 col-12 my-3">
              <h3>Programación Web Full Stack</h3>
              <h4>depcsuite</h4>
              <h5>01/09/23 al 28/02/24</h5>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore molestiae soluta officia! Debitis eligendi obcaecati illo, totam iure quis nesciunt provident ducimus aperiam ipsam omnis! Nesciunt distinctio veritatis vero fugit.</p>
          </div>
        </div>
      </div>
      </section>
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
              <a href="mailto:info@nelsontarche.com.ar">info@nelsontarche.com.ar</a>
          </div>
      </div>
      <a href="https://api.whatsapp.com/send?phone=+541162442898" target="_blank"><i class="fa-brands fa-whatsapp px-3 pt-3 pb-4"></i></a>
  </footer>
</body>
</html>