<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculadora</title>
</head>
<body>
   <h1 align="center"> PROGRAMACALCULADORA </h1> 

<fieldset>
</body>
</html>

<?php
//variables get  
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];
$ecuacion = $_GET['ecuacion'];

//condicionales if operaciones
if($ecuacion == "sumar"){
$solucion = $numero1 + $numero2;
}else if($ecuacion == "restar"){
$solucion = $numero1 - $numero2;
}else if($ecuacion == "multiplicar"){
$solucion = $numero1 * $numero2;
}else if($ecuacion == "dividir"){
$solucion = $numero1 / $numero2;
}
echo "La solución es: ".$solucion; 
?>
<br> </br> <br> </br>
<form method="get" action="calculadora.php">
<input type="text" name="numero1">
<select name="ecuacion">
<option value="sumar">sumar
</option>
<option value="restar">restar
</option>
<option value="multiplicar">multiplicar
</option>
<option value="dividir">dividir
</option>
</select>
<input type="text" name="numero2">
<input type="submit" value="send">
</form>
</fieldset>
