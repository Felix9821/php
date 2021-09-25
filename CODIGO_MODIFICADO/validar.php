<?php

//Dentro de esta seccion podremos ver como mediate las primeras variablesque son "usuario" y "contraseña" que podremos ver para utilizar los datos que lleguen del index.php

include('db.php');
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

// Creacion del formulario que albergara los datos de cada uauario en la base da datos de MySQL

$consulta="SELECT*FROM login where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);


if($filas){
  
  header("location:Home Bandai Namco.php");

}

else{
  ?>
  <?php
  include("index.html");

?>

<big class="bad">Error de autentiacion </big>
<?php
}

mysqli_free_result($resultado);
mysqli_close($conexionn);
