<?php

require 'Conexion.php';

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$tipoDocumento = $_POST['tipoDocumento'];
$numeroDocumento = $_POST['NumeroDocumento'];
$departamento = $_POST['departamento'];
$cuidad = $_POST['ciudad'];
$correo = $_POST['correo'];
$correo = $_POST['drieccion'];
$contraseña = $_POST['contraseña'];


$errors = [];

// Validar campos vacíos
if (empty($nombres)) {
    $errors[] = "El campo nombres es obligatorio.";
}

if (empty($apellidos)) {
    $errors[] = "El campo apellidos es obligatorio.";
}
if (empty($tipoDocumento)) {
    $errors[] = "El campo tipo de documento es obligatorio.";
}
if (empty($numeroDocumento)) {
    $errors[] = "El campo documento es obligatorio.";
}
if (empty($departamento)) {
    $errors[] = "El campo departamento es obligatorio.";
}
if (empty($cuidad)) {
    $errors[] = "El campo ciudad es obligatorio.";
}
if (empty($direccion)) {
    $errors[] = "El campo direccion es obligatorio.";
}
if (empty($correo)) {
    $errors[] = "El campo correo es obligatorio.";
}
if (empty($contraseña)) {
    $errors[] = "El campo contraseña es obligatorio.";
}

// Si hay errores, mostrar mensajes y redirigir
if (!empty($errors)) {
    foreach ($errors as $error) {
        echo "<p>$error</p>";
    }
    echo '<script type="text/javascript">alert("Todos los campos son obligatorios y no pueden estar en blanco."); window.history.back();</script>';
    exit;
}

$contraseña = password_hash($contraseña, PASSWORD_DEFAULT);

// Ejemplo de uso de mysqli_query() con $conexion establecido previamente
$query = "INSERT INTO cliente (nombres, apellidos, tipo documento, numero documento, departamente, cuiad, correo, direccion, contraseña)
          VALUES ('$nombres', '$apellidos','$tipoDocumento', '$numeroDocumento', '$departamento', '$cuidad', '$correo', '$direccion'.'$contraseña')";

$ejecutar = mysqli_query($conexion, $query);
var_dump($ejecutar);



if($ejecutar){
            echo '<script type="text/javascript">alert("Usuario almacenado exitosamente"); window.location = "registro.html"</script>';
       
}else{
        echo '<script type="text/javascript">alert("Intentalo de nuevo, usuario no almacenado"); window.location = "registro.html"</script>';
        
}


?>
