<?php

$conexion=mysqli_connect("localhost","root","","login2");


?>
<fieldset>
<h1> CONECTADO </h1>

<?php
// aqui se agrega el estado del servidor para mantener al usuario al tanto del estado de este
$bueno="bueno";
$malo="malo";
$estat="bueno";
if ($estat=="malo"){
    echo "El estado del servidor es infuncional";}
elseif ($estat=="bueno"){
    echo "El estado del servidor es funcional";
}
// se implementa en el siguiente codigo el uso de la tabla de usuarios que pueden ingresar
?>
</fieldset>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descuento</title>
</head>
<body>
<h1 align="center"> Por favor digite su numero de usuario </h1>
<form action="db.php" method="POST">
<fieldset>
<legend > ingreso de datos </legend>
<label for="art1">ID USUARIO </label>
<input type="text"placeholder="Ingrese el numero de usuario" name ="art1" id="art1">
<br></br>  
<input type="submit" value="Enviar" name=enviar id="enviar">
</fieldset>
</form>
<?php
//llamar vaiables de if
if(isset($_POST["enviar"])){
$art1=$_POST["art1"];
if ($art1 > 3000){
    echo "Usted no puede ingresar ahora";}
elseif ($art1 < 3000){
    echo "Usted puede ingresar ahora";}
}
?>    
</body>
</html>