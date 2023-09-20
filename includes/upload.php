<?php

<?php

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");

// Variables del fomrulario
$usuario = isset($_POST['usuario']) ? $_POST['usuario'] : '';
$nc = isset($_POST['nc']) ? $_POST['nc'] : '';
$rs = md5(isset($_POST['rs']) ? $_POST['rs'] : '');
$nd = md5( isset($_POST['nd']) ? $_POST['nd'] : '');
$archivo =md5( isset($_POST['archivo']) ? $_POST['archivo'] : '');
$archivo1 =md5( isset($_POST['archivo1']) ? $_POST['archivo1'] : '');
$archivo2 =md5( isset($_POST['archivo2']) ? $_POST['archivo2'] : '');
$archivo3 =md5( isset($_POST['archivo3']) ? $_POST['archivo3'] : '');
// Conexion a Data
$con = new SQLite3("../data/cotCORSEC.db") or die("Problemas para conectar");

// Consulta a SQL
$cs = $con -> query("INSERT INTO registro (Nombre, Apellido, Email, password, password1) VALUES ('$Nombre', '$Apellido', '$Email', '$password', '$password1')");

// Close Conexion
$con -> close();

// html
echo "
<script>
    window.location='../../index.php'
</script>


";

?>







// Comprobar si se ha cargado un archivo
if (isset($_FILES['archivo'], $_FILES['archivo1'], $_FILES['archivo2'], $_FILES['archivo3'], $_FILES['archivo4'])) {
    extract($_POST);
    $usuario = $_POST['usuario'];
    $nc = $_POST['nc'];
    $rs = $_POST['rc'];
    $nd = $_POST['nd'];

    // Definir la carpeta de destino
    $carpeta_destino = "docs/";

    // Obtener el nombre y la extensión del archivo
    $nombre_archivo = basename($_FILES["archivo"]["name"]);
    $extension = strtolower(pathinfo($nombre_archivo, PATHINFO_EXTENSION));
    $nombre_archivo1 = basename($_FILES["archivo1"]["name1"]);
    $extension = strtolower(pathinfo($nombre_archivo1, PATHINFO_EXTENSION));
    $nombre_archivo = basename($_FILES["archivo2"]["name2"]);
    $extension2 = strtolower(pathinfo($nombre_archivo2, PATHINFO_EXTENSION));
    $nombre_archivo3 = basename($_FILES["archivo3"]["name3"]);
    $extension = strtolower(pathinfo($nombre_archivo, PATHINFO_EXTENSION));
    $nombre_archivo4 = basename($_FILES["archivo4"]["name4"]);
    $extension = strtolower(pathinfo($nombre_archivo4, PATHINFO_EXTENSION));

    // Validar la extensión del archivo
    if ($extension == "pdf" || $extension == "doc" || $extension == "mp4"|| $extension == "pnj"|| $extension == "jpg"|| $extension == "jpeg") {


        // Mover el archivo a la carpeta de destino
        if (move_uploaded_file($_FILES["archivo"]["tmp_name"],$_FILES['archivo1']["tmp_name"], $_FILES['archivo2']["tmp_name"], $_FILES['archivo3']["tmp_name"], $_FILES['archivo4']["tmp_name"], $carpeta_destino . $nombre_archivo)) {
            // Insertar la información del archivo en la base de datos
            include "db.php";
            $sql = "INSERT INTO files.db (usuario,nc,rs,nd,archivo,archivo1,archivo2,archivo3,archivo4 )
            VALUES ( '$usuario', '$nc','$rs','$nd','$nombre_archivo','$nombre_archivo1','$nombre_archivo2','$nombre_archivo3''$nombre_archivo4')";
            $resultado = new SQLite3($conexion, $sql);
            if ($resultado) {
                echo "<script language='JavaScript'>
                alert('Archivo Subido');
                location.assign('../views/index.php');
                </script>";
            } else {

                echo "<script language='JavaScript'>
                alert('Error al subir el archivo: ');
                location.assign('../views/index.php');
                </script>";
            }
        } else {
            echo "<script language='JavaScript'>
            alert('Error al subir el archivo. ');
            location.assign('../views/index.php');
            </script>";
        }
    } else {
        echo "<script language='JavaScript'>
        alert('Solo se permiten archivos PDF, DOC y DOCX.');
        location.assign('../views/index.php');
        </script>";
    }
}
