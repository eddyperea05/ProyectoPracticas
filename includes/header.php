<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto</title>
    <!--BOOTSTRAP 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!--QR-->
    <script src="https://unpkg.com/qrious@4.0.2/dist/qrious.js"></script>


    <!-- Font Awasone -->
    <script src="https://kit.fontawesome.com/71974af09d.js" crossorigin="anonymous"></script>

    <!--Styles-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,500;0,700;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" integrity="sha384-/frq1SRXYH/bSyou/HUp/hib7RVN1TawQYja658FEOodR/FQBKVqT9Ol+Oz3Olq5" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/main.css" />
    <link rel="stylesheet" href="../styles/normalize.css" />
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <?php if (isset($_SESSION['Idusuario'])) { ?>
                <a href="inicio.php" class="navbar-brand">Inicio</a>
                <?php if ($_SESSION['Tipouser'] == '0') { ?>
                    <a href="usuario.php" class="navbar-brand">Gestionar de Usuarios</a>
                <?php } ?>
                <!--<a href="producto.php" class="navbar-brand">Administrar Productos</a>-->
                <a href="cerrarSesion.php"><i class="fas fa-power-off"></i></a>
            <?php }; ?>

        </div>
    </nav>