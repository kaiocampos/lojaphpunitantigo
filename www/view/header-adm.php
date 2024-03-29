<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- MAPBOX CSS -->
    <script src='https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.css' rel='stylesheet' />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo DIRCSS; ?>bootstrap.css">
    <link rel="stylesheet" href="<?php echo DIRCSS; ?>fontawesome/css/all.css">

    <link rel="stylesheet" href="<?php echo DIRCSS; ?>style.css">
    <title>DOE+</title>
</head>



<body>
    <!-- Just an image -->
    <div class="row ">
        <div class="col-md-1 col-sm-1 d-none d-sm-block">
            <nav class="navbar navbar-light headermenu d-flex justify-content-center ">
                <a class="navbar-brand" href="#">
                    <img src="<?php echo DIRIMG; ?>core-sl.png" width="30" height="30" alt="">
                </a>
            </nav>
        </div>
        <div class="col-md-2 col-sm-1">



        </div>
        <div class="col-md-1 col-sm-1">



        </div>
        <div class="col-md-4 col-sm-3 d-flex justify-content-center ">

            <nav class="navbar navbar-light ">
                <a class="navbar-brand" href="<?php echo BASEURL; ?>painel/adm">
                <i class="fas fa-chevron-right"></i>
                    Voltar
                </a>
            </nav>
            <nav class="navbar navbar-light ">
                <a class="navbar-brand" href="<?php echo BASEURL; ?>home">
                    <i class="fas fa-home"></i>
                    Home
                </a>
            </nav>
            <nav class="navbar navbar-light ">
                <a class="navbar-brand" href="<?php echo BASEURL; ?>login/adm">
                <i class="fas fa-sign-out-alt"></i>
                    Logoff
                </a>
            </nav>
        </div>
        <div class="col-md-2 col-sm-1 d-flex justify-content-center">
            <a href=""></i></i></a>

        </div>


    </div>
    </div>
    <hr style="background-color: red;  margin: 0;" class="d-none d-sm-block ">
    <div class="row justify-content-center ">
        <!-- <div class="col-md-12 d-flex "> -->
        <nav class="navbar navbar-expand-lg navbar-light d-none d-sm-block  ">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse catnav" id="navbarNav">
                <ul class="navbar-nav">

                    <!-- BOTAR PHP -->
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Cadastrar</a>
                        <div class="dropdown-menu">
                            <a href="<?php echo BASEURL ?>produto/cadastrar" class="dropdown-item">Produto</a>
                            <a href="<?php echo BASEURL ?>fornecedor/cadastrar" class="dropdown-item">Fornecedor</a>
                            <a href="<?php echo BASEURL ?>usuario/cadastrar" class="dropdown-item">Usuario</a>
                            <a href="<?php echo BASEURL ?>cliente/cadastrar" class="dropdown-item">Cliente</a>
                            <a href="<?php echo BASEURL ?>voluntario/cadastrar" class="dropdown-item">Voluntario</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Listar </a>
                        <div class="dropdown-menu">
                            <a href="<?php echo BASEURL ?>produto/listar" class="dropdown-item">Produto</a>
                            <a href="<?php echo BASEURL ?>fornecedor/listar" class="dropdown-item">Fornecedor</a>
                            <a href="<?php echo BASEURL ?>usuario/listar" class="dropdown-item">Usuario</a>
                            <a href="<?php echo BASEURL ?>cliente/listar" class="dropdown-item">Cliente</a>
                            <a href="<?php echo BASEURL ?>voluntario/listar" class="dropdown-item">Voluntario</a>
                        </div>
                    </li>
                    <!-- BOTAR PHP -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Ser voluntario
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo BASEURL; ?>produto/listar">Loja</a>
                    </li>
                </ul>

            </div>

    </div>



    <hr style="background-color: red; margin: 2px;">