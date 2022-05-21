<?php include('config/database.php');

if (isset($_POST['Ingresar'])) {

    $Login = $_POST['Login'];
    $Passwd = $_POST['Passwd'];
    
    echo "Entro";

    $query = "SELECT * FROM tblusuarios WHERE Login = '$Login' AND Passwd = '$Passwd'";

    $result = mysqli_query($conexion, $query);

    if (!$result) {
        //Pues no entro
            $_SESSION['message'] = "Acesso denegado, Por favor validar el usuario y/o contraseña nuevamente.";
            $_SESSION['message_type'] = "warning";
            header('Location: index.php');
        } else {
            $row = mysqli_fetch_array($result);
    
            //$NmbUsuario = $row['NmbUsuario'];
            //$Tipouser = $row['Tipouser'];
            $Estado = $row['Estado'];
    
            if ($Estado == '1') {
                $_SESSION['Idusuario'] = $row['Idusuario'];
                $_SESSION['NmbUsuario'] = $row['NmbUsuario'];
                $_SESSION['Tipouser'] = $row['Tipouser'];
                $_SESSION['Estado'] = $Estado;
                header('Location: inicio.php');
            } else {
                //Pues el usuario no esta activo
                $_SESSION['message'] = "Acesso denegado, Por favor validar el estado del usuario con el administrador.";
                $_SESSION['message_type'] = "warning";
                header('Location: index.php');
            }
            
        }
}?>
