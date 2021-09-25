<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descuento</title>
</head>
<body>
<h1 align="center"> formulario cotizacion</h1>
<form action="descuento.php" method="POST">
<fieldset>
<legend > ingreso de datos </legend>
<label for="art1">Precio Articulo 1 </label>
<input type="text"placeholder="Escribe el precio referente" name ="art1" id="art1">
<br></br>  
<label for="art2">Precio Articulo 2</label>
<input type="text" placeholder="Escribe aqui el precio"  name ="art2" id="art2">
<br></br>
<label for="art3">Precio Articulo 3</label>
<input type="text" placeholder="Escribe el precio" name ="art3" id="art3">
<br></br>
<label for="desc">%Descuento</label> 
<input type="text" placeholder="%" name="desc" id="desc">
<br>
<input type="submit" value="Enviar" name=enviar id="enviar">
</fieldset>
</form>
<?php
//llamar vaiables de input
if(isset($_POST["enviar"])){
    $art1 = $_POST["art1"];
    $art2 = $_POST["art2"];
    $art3 = $_POST["art3"];
    $desc = $_POST["desc"];
    $total = $art1 + $art2 + $art3;
    $Descuento = ($desc/100) * $total;
    $totalf = $total - $Descuento;
//imprimiendo resultados
    echo "<h2>Totales.</h2> <br>";
    echo "total sin descuento:" . $total . "<br>";
    echo "Descuento: ". $Descuento."<br>";
    echo "Total Final:" .$totalf. "<br>";
    }
    ?>
    
</body>
</html>

