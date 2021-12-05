<?php
include 'conexion.php';

$Titulo=$_POST['Titulo'];
$Autor=$_POST['Autor'];
$Editorial=$_POST['Editorial'];
$Libro=$_POST['Libro'];

$resIns=mysqli_query($conexion, ("INSERT INTO biblioteca(Titulo, Autor, Editorial, Libro)
VALUES ('$Titulo','$Autor','$Editorial','$Libro')"));
if($resIns){
  echo " <script> alert ('Datos enviados exitosamente, apartir de este moemento usted cuenta con 24 horas para depositar al numero de cuenta: 5204-1656-1355-2094 y enviar el recibo al correo: info@casarogelhospedaje.mx'); 
  location.href = '../subir_lib.php';
    </script>";
  }else{
      echo " <script> alert('Error al enviar los datos');
      location.href = '../subir_lib.php';
       </script>";
  }

?>