<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "assad";

$conn = mysqli_connect($host, $user, $password, $dbname);

if(!$conn){
    die("ERREUR DE CONNEXION A LA BASE DE DONNEES");
}else{
    echo "RESUSUSUSUSUS";
}
?>