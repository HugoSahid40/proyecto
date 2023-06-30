<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_proyecto";


//crear la conexion 
$conn = mysqli_connect($servername,$username, $password, $dbname);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "CONEXION EXITOSA";

?>