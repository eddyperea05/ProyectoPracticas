<?php

include('config/database.php');

if (isset($_GET['idusuario'])) {
    $idusuario = (int) $_GET['idusuario'];

    $query = "DELETE FROM tblusuarios WHERE idusuario = $idusuario";
    $result = mysqli_query($conexion, $query);

    if (!$result) {
        die("Error al eliminar al usuario");
    }

    $_SESSION['message'] = 'Se puedo elimiar exitosamente';
    $_SESSION['message_type'] = 'danger';

    header("Location: usuario.php");
}

?>