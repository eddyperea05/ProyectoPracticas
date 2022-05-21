<?php
include('config/database.php');
include('includes/header.php');
?>
<div class="container">
    <h2>Gestionar de Usuarios</h2>
    <div class="row">
        <div class="col-md-4">

            <?php if (isset($_SESSION['message'])) { ?>
                <div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message'] ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php
                //session_unset();
                unset($_SESSION['message']);
                unset($_SESSION['message_type']);
            } ?>

            <div class="card card-body">
                <form action="guardarUsuarios.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="NmbUsuario" class="form-control" placeholder="Ingrese nombre del Usuario" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="Login" class="form-control" placeholder="Ingrese el login del usuario">
                    </div>
                    <div class="form-group">
                        <input type="password" name="Passwd" class="form-control" placeholder="Ingrese contraseña del usuario">
                    </div>
                    <div class="form-group">
                        <select name="Estado" id="" class="form-control">
                            <option value="">Selecione estado</option>
                            <option value="1">Activo</option>
                            <option value="2">Inactivo</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="Tipouser" id="" class="form-control">
                            <option value="">Selecione el tipo de usuario</option>
                            <option value="0">Administrador</option>
                            <option value="1">Usuario</option>
                        </select>
                    </div>
                    <input type="submit" name="guardarUsuario" class="btn btn-success btn-block" value="Guardar Usuario"></button>
                </form>
            </div>
        </div>
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nombre del usuario</th>
                        <th>Login</th>
                        <th>Password</th>
                        <th>Tipo de usuario</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = 'SELECT * FROM tblusuarios';
                    $result_usuarios = mysqli_query($conexion, $query);

                    while ($row = mysqli_fetch_array($result_usuarios)) { ?>
                        <tr>
                            <td><?php echo $row['NmbUsuario'] ?></td>
                            <td><?php echo $row['Login'] ?></td>
                            <td><?php echo $row['Passwd'] ?></td>
                            <td><?php if ($row['Tipouser'] == '0') {
                                    echo "Administrador";
                                } else {
                                    echo "Usuario";
                                } ?></td>
                            <td><?php if ($row['Estado'] == '1') {
                                    echo 'Activo';
                                } else {
                                    echo 'Inactivo';
                                }

                                ?></td>
                            <td>
                                <a href="editarUsuario.php?idusuario=<?php echo $row['Idusuario'] ?>" class="btn btn-secondary" title="Editar Usuario">
                                    <i class="fas fa-marker"></i>
                                </a>
                                <a href="cambiarEstadoUsuario.php?idusuario=<?php echo $row['Idusuario'] ?>&Estado=<?php echo $row['Estado'] ?>" class="btn btn-info" title="Cambiar estado">
                                    <i class="fas fa-exchange-alt"></i>
                                </a>
                                <a href="eliminarUsuario.php?idusuario=<?php echo $row['Idusuario'] ?>" class="btn btn-danger" title="Elimiar Usuario">
                                    <i class="far fa-trash-alt"></i>
                                </a>

                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include('includes/footer.php') ?>