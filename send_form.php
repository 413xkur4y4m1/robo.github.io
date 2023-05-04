<?php
if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    date_default_timezone_set('America/Mexico_City');
    $fecha = date('m/d/Y h:i:s a', time());
    $estado = "Activo";

    $con = mysqli_connect("localhost","root","","registro") or die(mysqli_error());
    $query = "INSERT INTO `datos de registro`(`ID de usuario`, `Nombre de usuario`, `Correo electronico`, `Contraseña`, `Fecha de registro`, `Estado de cuenta`) VALUES ('$id','$nombre','$correo','$contrasena','$fecha','$estado')";
    mysqli_query($con,$query);

    echo "Datos insertados correctamente";
}
?>
