<html> 
    <head>
        <title> My first php code </title>
    </head>
    <body>
        <?php echo "<strong> hello world2; </strong>" ?>
    </body>
</html>
<?php
//prueba introduccion-comentario

echo"prueba";
echo "prueba2";
echo "prueba3";

/* prueba comentario de 
multiple lineado */
?>
<php?
prueba variables
$name = "jhon"
$age = "23"
echo $name;
//outputs ""jhon"
?>

<?php
define("MSG", "Hi SoloLearners!");
echo MSG;
//outputs "Hi SoloLearners!"
?>

<?php
/* case intensive
define("MSG", "Hi SoloLearners!", TRUE);
echo MSG;
//outputs "Hi SoloLearners!"
*/
?>

<?php
  $string1 = "Hello world!"; //double quotes
  $string2 = 'Hello world!';  //single quotes
?>

<?php
 //variable int=entero sin comas ni puntos ni espacios
 $int1 = 42; // número positivo

 $int2 = -42; // número negativo

?>

<?php
//variable float numero decimal con punto
  $float = 42.168;
?>

<?php
//variable boolean verdad o falso, 1 o 0, si o no etc
$x = true; $y = false;
?>

<?php
//variable string and integrer
$str = "10";
$int = 20;
$sum = $str + $int;
echo ($sum);
//outputs 30
?>

<?php
//VARIABLE GLOBAL
$name = 'David';
function getName () {
    global $name;
    echo $name;
}
getName ();

// Error: Udefined Variable: name 
?> 

<?php
/*
variable local
$name = "David";
function getName () {
echo $name;
}
getName();
//Outputs "david"*/
?>

<?php 
$a= "hello";
$hello= "hi!";
echo $$a;

//outpots "hi"
?>

<?php
$num1 = 8;
$num2 = 6;
//addition
echo $num1 + $num2; 
?>
<?php
$num1 = 8;
$num2 = 6;
//subtraction
echo $num1 - $num2
?>
<?php
$num1 = 8;
$num2 = 6;
//multiplication
echo $num1 * $num2;
?>
<?php
$num1 = 8;
$num2 = 6;
echo $num1 * $num2;
//Division
echo $num1 / $num2;
?>
<?php
//modulo de division
$x = 9;
$y = 2;
echo $x % $y; // 2
?>
<?php
//incrementar el valor de una variable
$x++; // equivalent to $x = $x+1;
//decrementar el valor de una variable
$x--; // equivalent to $x = $x-1; 
?>
<?php
$x++; // post-increment 
$x--; // post-decrement 
++$x; // pre-increment 
--$x; // pre-decrement
?>
<?php
$a  = 2; $b = $a++; // $a=3,  $b=2
$a  = 2; $b = ++$a; // $a=3,  $b=3
?>
<?php
$x=50;
$x += 100;
echo $x;
//outputs: 150
?>
<?php
$name1 = "David"; 
$name2 = "Amy"; 
$name3 = "John"; 
$names = array("David", "Amy", "John");
$names[0] = "David";
$names[1] = "Amy";
$names[2] = "John";
echo $names[1]; //outputs "amy";
?>
<?php
$myArray[0]="jhon";
$myArray[1]="<strong>PHP</strong>";
$myArray[2]= 21;
echo "$myArray[0] is $myArray[2] and knows $myArray[1]";
//outputs "jhon is 21 and knows PHP"
?>
<?php
$people = array("David"=>"27", "Amy"=>"21", "John"=>"42");
// or
$people['David'] = "27";
$people['Amy'] = "21";
$people['John'] = "42";
?>
<?php
$people=array("David"=>"27","Amy"=>"21");
echo $people ["Amy"]; 
//outputs 21
?>
<?php
$people = array(
  'online'=>array('David', 'Amy'),
  'offline'=>array('John', 'Rob', 'Jack'),
  'away'=>array('Arthur', 'Daniel')
);
?>