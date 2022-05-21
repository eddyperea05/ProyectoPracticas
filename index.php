<?php include('config/database.php'); ?>
<?php include('includes/header.php'); ?>
<main class="login-desing">
    <div class="waves">
        <img src="../img/maecita-removebg-preview.png" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <?php if (isset($_SESSION['message'])) { ?>
                    <div class="alert alert-<?php echo $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
                        <?php echo $_SESSION['message'] ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php
                    unset($_SESSION['message']);
                    unset($_SESSION['message_type']);
                } ?>
                <div class="card card-body">
                    <h2>Login</h2>
                    <br>
                    <form action="ingreso.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="Login" placeholder="Por favor ingresar login" class="form-control" autofocus>
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="password" name="Passwd" placeholder="Por favor ingrese contraseña" class="form-control">
                        </div>
                        <br>
                        <div class="col text-center">
                            <input type="submit" name="Ingresar" class="btn btn-success btn-block" value="Ingresar Usuario">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include('includes/footer.php'); ?>