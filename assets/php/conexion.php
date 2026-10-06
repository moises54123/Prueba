<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "prueba";

$conn = mysqli_connect($host, $user, $pass, $db);

if (mysqli_connect_errno()) {

    die("Hay un error: " . mysqli_connect_error());
} else {
    echo "conectando";
}
?>