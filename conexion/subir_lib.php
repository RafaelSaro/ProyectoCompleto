<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="conexion/insrtarlib.php" id="libros">
        <form class="formulario" id="formulario">
         <div class="contenedor">
             
             <h2 class="titulo">Espacio para Subir Libros</h2>
             <div class="formulario__grupo" id="grupo__Titulo">
                 <label for="Titulo" class="formulario__label">Titulo</label>
                 <div class="formulario__grupo-input">
                     <input type="text" class="formulario__input" name="Titulo" placeholder="Titulo" required>
                     <i class="formulario__validacion-estado fas fa-times-circle"></i>
                 </div>
                 <p class="formulario__input-error">El Titulo solo de contener letras</p>
             </div>
             <!--Grupo: Apellido-->
             <div class="formulario__grupo" id="grupo__Autor">
                 <label for="Autor" class="formulario__label">Autor</label>
                 <div class="formulario__grupo-input">
                     <input type="text" class="formulario__input" name="Autor" placeholder="Autor" required>
                     <i class="formulario__validacion-estado fas fa-times-circle"></i>
                 </div>
             </div>

             <!-- Grupo: Correo -->
             <div class="formulario__grupo" id="grupo__Editorial">
                 <label for="Editorial" class="formulario__label">Editorial</label>
                 <div class="formulario__grupo-input">
                     <input type="text" class="formulario__input" name="Editorial"  placeholder="Editorial" required>
                     <i class="formulario__validacion-estado fas fa-times-circle"></i>
                 </div>
             </div>

             <!-- Subir Libro -->
             <form action="../../form-result.php" method="post" enctype="multipart/form-data" target="_blank">
             <label for="Editorial" class="formulario__label">Libro</label>
                 <div class="formulario__grupo-input">
                     <p>
                     Sube un archivo:
                    <input type="file" name="Libro">
                 </p>
                 </div>
             <div class="formulario__grupo formulario__grupo-btn-enviar">
                 <button type="submit" class="formulario__btn">Subir Libro</button>
             </div>  
         </div> 
        </form>
         </form>
</body>
</html>