<?php

include('config/database.php');
if (isset($_POST['guardarUsuario'])) {
    $NmbUsuario = $_POST['NmbUsuario'];
    $Login = $_POST['Login'];
    $Passwd = $_POST['Passwd'];
    $Tipouser =  $_POST['Tipouser'];
    $Estado = $_POST['Estado'];
    //$Tipouser = '0';

    $query = "INSERT INTO tblusuarios(NmbUsuario,Login,Passwd,Tipouser,Estado) VALUES ('$NmbUsuario','$Login','$Passwd','$Tipouser',$Estado)";
    $result = mysqli_query($conexion, $query);

    if(!$result){
        die("Error al guardar el usuario");
    }
    
    $_SESSION['message'] = 'Se ha registrado exitosamente';
    $_SESSION['message_type'] = 'success';

    header("Location: usuario.php");
    
}

?>