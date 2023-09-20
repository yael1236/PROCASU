<?php
error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");
session_start();
$con = new SQLite3("../app/data/archi.db") or die("Problemas para conectar");
$query = "SELECT * FROM files WHERE archivo";
$result = $con->query($query);
if ($result->fetchArray()) {
    // Inicio de sesión exitoso
    header("location: ../../registro.php");
    echo "Bienvendido";
} else {
    // Credenciales incorrectas
    echo "Credenciales incorrectas";
    header("location: ../../index.php");
    
}
$con -> close();
?>