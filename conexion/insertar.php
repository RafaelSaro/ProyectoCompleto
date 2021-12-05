<?php
include 'conexion.php';
$Titulo=$_POST['Titulo'];
$Autor=$_POST['Autor'];
$Editorial=$_POST['Editorial'];
$Libro=$_POST['Libro'];

$resIns=mysqli_query($conexion, ("INSERT INTO biblioteca(Titulo, Autor, Editorial, Libro)
VALUES ('$Titulo','$Autor','$Editorial','$Libro')"));
if($resIns){
  echo " <script> alert ('Libro Registrado'); 
  location.href = '../RegisLib.php';
    </script>";
  }else{
      echo " <script> alert('Libro Registrado');
      location.href = '../RegisLib.php';
       </script>";
  }

?>