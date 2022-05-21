<?php include('config/database.php'); ?>
<?php include('includes/header.php'); ?>

<div class="waves">
    <img src="../images/maecita-removebg-preview.png" alt="">
</div>
<div class="login">
    <div class="login-data">
        <!--<div class="">-->
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
            <!--<div class="">-->
                <h1>Login</h1>
                <br>
                <form action="ingreso.php" method="POST" class="login-form">
                    <div class="input-group">
                        <label class="input-field">
                            <input type="text" name="Login" placeholder="Por favor ingresar login" class="form-control" autofocus>
                        </label>
                    </div>
                    <br>
                    <div class="input-group">
                        <label class="input-field">
                            <input type="password" name="Passwd" placeholder="Por favor ingrese contraseña" class="form-control">
                        </label>
                    </div>
                    <br>
                    <div class="col text-center">
                        <input type="submit" name="Ingresar" class="btn" value="Ingresar Usuario">
                    </div>
                </form>
            <!--</div>-->
        <!--</div>-->
    </div>
</div>

<?php include('includes/footer.php'); ?>