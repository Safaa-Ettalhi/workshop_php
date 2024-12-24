<?php 
$host = "localhost";
$username = "root";
$password = "safaa";
$database = "bibliotheque";

$connection = mysqli_connect($host, $username, $password, $database);

if (!$connection) {
    die("Échec de connexion : " . mysqli_connect_error());
}



?>