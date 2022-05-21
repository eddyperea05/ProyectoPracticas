<?php

include('config/database.php');

if (isset($_GET['idusuario'])) {
    $Idusuario = $_GET['idusuario'];
    $Estado = ($_GET['Estado'] == '1') ? '2' : '1';
    echo $Estado;
    $query = "UPDATE tblusuarios SET Estado = $Estado WHERE Idusuario = $Idusuario";
    $result = mysqli_query($conexion, $query);

    if (!$result) {
        die("Error al cambiar el estado del usuario");
    }
    
    //Se manda mensaje a la pantalla usuarios

    $_SESSION['message'] = 'Se ha cambiado el estado del producto';
    $_SESSION['message_type'] = 'info';

    //Se encamina a la vista usuarios
    
    header("Location: usuario.php");
}?>
