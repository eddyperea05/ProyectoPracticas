<?php include('config/database.php') ?>
<?php include('includes/header.php') ?>
<div class="waves">
    <img src="../images/mobile-removebg-preview.png" alt="">
</div>
<div class="login">
    <div class="login-data">
        <!--<div class="card card-body">-->
        <form action="" class="login-form">
        <h1>Información del usuario</h1>
        <br>
        <div class="form-group">
            <h4 id="user">Bienvenido <h2><?php echo $_SESSION['NmbUsuario'] ?></h2>
            </h4>
        </div>
        <div class="form-group">
            <h4>Tipo de usuario: <?php if ($_SESSION['Tipouser'] == '0') {
                                        echo "Administrador";
                                    } else {
                                        echo "Usuario";
                                    } ?></h4>
        </div>

        <!--QR-->
        <br>
        <img alt="Código QR" id="codigo">
        <br>
        <button id="btnDescargar">Descargar</button>
        <script>
            const $imagen = document.querySelector("#codigo"),
                $boton = document.querySelector("#btnDescargar")
            let nombre = document.querySelector('div.form-group > h2').textContent.trim();
            new QRious({
                element: $imagen,
                value: nombre, //"Mariana Arango", // La URL o el texto
                size: 250,
                backgroundAlpha: 0, // 0 para fondo transparente
                foreground: "#062726", // Color del QR
                level: "H", // Puede ser L,M,Q y H (L es el de menor nivel, H el mayor)
            });
            $boton.onclick = () => {
                const enlace = document.createElement("a");
                enlace.href = $imagen.src;
                enlace.download = "Código QR generado desde parzibyte.me.png";
                enlace.click();
            }
        </script>
        <!--</div>-->
        </form>
    </div>
</div>
<?php include('includes/footer.php') ?>