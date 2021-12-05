
<!DOCTYPE html>
<html lang="es-mx">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/Books_icon.png" type="image/x-icon">
    <title>Registro Libros | Biblioteca Virtual</title>
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 
</head>
<body>
<header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel"> 
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand"><a href="index.html"><img class="brand-logo-light" src="images/log-ayun.png" alt="" width="140" height="57" srcset="images/logo-default-280x113.png 2x"/></a></div>
                </div>
                <div class="rd-navbar-main-element">
                  <div class="rd-navbar-nav-wrap">
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                      <li class="rd-nav-item active"><a class="rd-nav-link" href="#">SALIR</a>
                      </li>
                  </div>
              </div>
            </div>
          </nav>
        </div>
    </header>
    <section class="section section-lg bg-default"> 
    <main>
        <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 align-self-end mb-4">
            </div>
        </div>
        <body>
    <form method="POST" action="conexion/insertar.php" id="libros">
        <form class="formulario" id="formulario">
         <div class="contenedor">
             
             <h2 class="Titulo">Espacio para Subir Libros</h2>
             <div class="formulario_lib" id="grupo__Titulo">
                 <label for="Titulo" class="formulario__label">Titulo</label>
                 <div class="formulario_lib-input">
                     <input type="text" class="formulario__input" name="Titulo" placeholder="Titulo" required>
                     <i class="formulario__validacion-estado fas fa-times-circle"></i>
                 </div>
                 <p class="formulario__input-error">El Titulo solo de contener letras</p>
             </div>
             <!--Grupo: Apellido-->
             <div class="formulario_lib" id="grupo__Autor">
                 <label for="Autor" class="formulario__label">Autor</label>
                 <div class="formulario_lib-input">
                     <input type="text" class="formulario__input" name="Autor" placeholder="Autor" required>
                     <i class="formulario__validacion-estado fas fa-times-circle"></i>
                 </div>
             </div>

             <!-- Grupo: Correo -->
             <div class="formulario_lib" id="grupo__Editorial">
                 <label for="Editorial" class="formulario__label">Editorial</label>
                 <div class="formulario_lib-input">
                     <input type="text" class="formulario__input" name="Editorial"  placeholder="Editorial" required>
                     <i class="formulario__validacion-estado fas fa-times-circle"></i>
                 </div>
             </div>

             <!-- Subir Libro -->
             <form action="../../form-result.php" method="POST" enctype="multipart/form-data" target="_blank">
             <label for="Libro" class="formulario__label">Libro</label>
                 <div class="formulario_lib-input">
                     <p>
                     Sube un archivo:
                    <input type="file" name="Libro">
                 </p>
                 </div>
             <div class="formulario_lib formulario_lib-btn-enviar">
                 <button type="submit" class="formulario__btn">Subir Libro</button>
             </div>  
         </div> 
        </form>
         </form>
</section>
</body>
        
<footer class="section footer-minimal context-dark">
        <div class="container wow-outer">
          <div class="wow fadeIn">
            <div class="row row-60">
              <div class="col-12"><a href="index.html"><img src="images/log-ayun.png" alt="" width="140" height="57" srcset="images/log-ayun.png"/></a></div>
              <div class="col-12">
                <ul class="footer-minimal-nav">
                  <li><a href="index.html">Inicio</a></li>
                  <li><a href="Registro.html">Registrate</a></li>
                  <li><a href="Busca.php">¿Que buscas?</a></li>
                  <li><a href="fisico.html">Ubicacion</a></li>
                </ul>
              </div>
              <div class="col-12">
                <ul class="social-list">
                  <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-facebook" href="#"></a></li>
                  <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-instagram" href="#"></a></li>
                  <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-twitter" href="#"></a></li>
                  <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-youtube-play" href="#"></a></li>
                  <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-pinterest-p" href="#"></a></li>
                </ul>
              </div>
            </div>
            <p class="rights"><span>&copy;&nbsp; </span><span class="copyright-year"></span><span>&nbsp;</span><span>Biblioteca Virtual</span><span>.&nbsp;</span><span>All Rights Reserved.</span><span>&nbsp;</span><a href="#">Privacy Policy</a>.<a href="#">Ciudad Hidalgo</a></p>
          </div>
        </div>
      </footer>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>