<?php

include('config/database.php');
if (isset($_GET['idusuario'])) {
    $idusuario = $_GET['idusuario'];
    $query = "SELECT * FROM tblUsuarios WHERE Idusuario = '$idusuario'";
    $result = mysqli_query($conexion, $query);
    if (mysqli_num_rows($result) == 1) {
        
        $row = mysqli_fetch_array($result);

        $NmbUsuario = $row['NmbUsuario'];
        $Login = $row['Login'];
        $Passwd = $row['Passwd'];
        
    }

}

if (isset($_POST['update'])) {

    $idusuario = $_GET['idusuario'];
    $NmbUsuario = $_POST['NmbUsuario'];
    $Login = $_POST['Login'];
    $Passwd = $_POST['Passwd'];
    $Tipouser = $_POST['Tipouser'];
    $Estado = $_POST['Estado'];

    $query = "UPDATE tblusuarios SET NmbUsuario = '$NmbUsuario', Login = '$Login', Passwd = '$Passwd', Tipouser = '$Tipouser', Estado = '$Estado' WHERE Idusuario = '$idusuario'";

    $result = mysqli_query($conexion, $query);

    if (!$result) {
        die("Error");
    }

    $_SESSION['message'] = 'Usuario Actualizado';
    $_SESSION['message_type'] = 'warning';

    header("Location: usuario.php");

}

?>

<?php include('includes/header.php');?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <h2>Editar Usuario</h2>
                <form action="editarUsuario.php?idusuario=<?= $_GET['idusuario']?>" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Actualizar nombre del Usuario" name="NmbUsuario" value="<?php echo $NmbUsuario ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Actualizar el login" name="Login" value="<?php echo $Login?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Actualizar el password" name="Passwd" value="<?php echo $Passwd?>">
                    </div>
                    <div class="form-group">
                        <select name="Tipouser" id="" class="form-control">
                            <option value="">Seleccionar tipo usuario</option>
                            <option value="0">Administrador</option>
                            <option value="1">Usuario</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="Estado" id="" class="form-control">
                            <option value="">Seleccionar estado</option>
                            <option value="1">Activo</option>
                            <option value="2">Inactivo</option>
                        </select>
                    </div>
                    <button class="btn btn-success" name="update">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
</div>


<?php include('includes/footer.php');?>