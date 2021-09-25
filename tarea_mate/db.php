<?php
$conn = new mysqli("localhost","root","","base");
	
if($conn->connect_error)
{
	echo "No conecta: (" . $conn->connect_error . ") " . $conn->connect_error;
}
?>