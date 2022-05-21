<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUICK ACCESS</title>

    <style>
        body {
            font-family: 'Roboto Mono', monospace;

        }

        .login-desing {
            display: grid;
            grid-template-columns: repeat(2, 50%);
            height: 100vh;
        }

        .waves {
            background-image: url("../images/wave.png");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-data {

            text-align: center;
            width: 60%;



        }

        .login-data h1 {

            font-weight: 200;
            text-align: center;

        }

        .input-group {
            position: relative;
            width: 60%;
            margin: 0 auto;
            margin-bottom: 1.5rem;

        }

        .input-group2 {
            position: relative;
            width: 60%;
            margin: 0 auto;
            margin-bottom: 1.5rem;

        }

        .input-field input {
            border: none;
            border-bottom: 3px solid #062726;
            width: 100%;
            height: 2rem;
            font-size: 1.0625rem;
            padding-left: 2rem;
            line-height: 147.6%;
            padding-top: 1rem;
            padding-bottom: 0.5rem;

        }

        .input-field input:focus {
            outline: none;
            border-color: #6247AA;
        }

        .input-field input:hover {
            background-color: #E2CFEA;


        }

        .input-field input:focus+.input-label {

            top: 0;
            margin-bottom: 2rem;
            color: #6247AA;
        }

        .input-field input:focus~i {
            color: #6247AA;
        }

        .input-field .input-label {
            position: absolute;
            top: 15px;
            left: 28px;
            line-height: 147.6%;
            color: #062726;
            transition: top .2s;
            font-weight: 700;
        }

        .input-field2 .input-label2 {
            border: none;

            width: 100%;
            height: 2rem;
            font-size: 1.0625rem;
            padding-left: 2rem;
            line-height: 147.6%;
            padding-top: 1rem;
            padding-bottom: 0.5rem;

        }

        .input-field2 i {
            position: absolute;
            top: 2px;
            left: 60px;
            color: #062726;
            font-size: 1.5rem;
        }

        .input-field i {
            position: absolute;
            top: 19px;
            left: 0;
            color: #062726;
            font-size: 1.5rem;
        }

        .login-form a {
            display: block;
            width: 85%;
            text-align: right;
            text-decoration: none;
            color: #062726;
            margin-bottom: 1.3rem;
            font-weight: 700;
            transition: .3s ease-in-out;
            font-size: 18px;
        }

        .login-form a:hover {

            color: #A06CD5;
        }

        .btn {

            border-radius: 3rem;
            width: 45%;
            border: 1px solid #A06CD5;
            line-height: 1.5rem;
            font-size: 1rem;
            background-color: #A06CD5;
            color: #fff;
            padding: 0.5rem 0;
            transition: .3s ease-in-out all;
            font-weight: 500;

        }

        .btn:hover {

            cursor: pointer;
            background-color: #E2CFEA;
            color: #062726;
        }

        #menu ul li {
            cursor: pointer;
            background-color: #fff;
            color: #062726;
        }

        #menu ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        #menu ul a {
            border-radius: 3rem;
            width: 100%;
            line-height: 1.5rem;
            font-size: 1rem;
            background-color: #fff;
            padding: 0.5rem 0;
            transition: .3s ease-in-out all;
            font-weight: 500;
            color: #062726;
            text-decoration: none;
            font-weight: 400;
            font-size: 15px;
            padding: 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        #menu ul li {
            position: relative;
            float: left;
            margin: 0;
            padding: 0;
        }

        #menu ul li:hover {
            background: #fff;
        }

        #menu ul ul {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            padding: 0;
        }

        #menu ul ul li {
            float: none;
            width: 150px
        }

        #menu ul ul a {
            line-height: 120%;
            padding: 10px 15px;
        }

        #menu ul li:hover>ul {
            display: block;
        }
    </style>

    <!--BOOTSTRAP 4 -->
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">-->
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
    <!--<nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <?php if (isset($_SESSION['Idusuario'])) { ?>
                <a href="inicio.php" class="navbar-brand">Inicio</a>
                <?php if ($_SESSION['Tipouser'] == '0') { ?>
                    <a href="usuario.php" class="navbar-brand">Gestionar de Usuarios</a>
                <?php } ?>
                <!--<a href="producto.php" class="navbar-brand">Administrar Productos</a>-0->
                <a href="cerrarSesion.php"><i class="fas fa-power-off"></i></a>
            <?php }; ?>

        </div>
    </nav>-->
    <main class="login-desing">
    <nav class="">
        <div class="">
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