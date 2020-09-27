<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Required meta tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Link Icon page-->
    <link rel="icon" type="image/png" href="<?= base_url("img/vetores/logo-estrelas-site-2.png"); ?>">

    <!-- Bootstrap CSS -->
    <!--<link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
          crossorigin="anonymous">-->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.css');?>">

    <!-- Reset CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url("css/reset.css"); ?>">

    <!-- Personal CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url("css/" . $caminhoCss); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url("css/nav.css"); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url("css/rodape.css"); ?>">

    <link rel="stylesheet" href="<?= base_url('css/lightbox.css');?>">

    <!-- Google Fonts -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Roboto&family=Source+Sans+Pro&family=Fredoka+One&display=swap" >

    <title>Carlos do Posto 55</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img width="30px"
                     src="<?= base_url("img/vetores/logo-estrelas-site-2.png"); ?>"
                     alt="Logo psd"/>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="<?=base_url("")?>">Início <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Administração</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                           role="button"
                           data-toggle="dropdown"
                           aria-haspopup="true"
                           aria-expanded="false">
                            Agricultura
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Agricultura</a>
                            <a class="dropdown-item" href="#">Estradas Rurais</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Assistência Social</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Educação
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?=base_url("index.php/educacao")?>">Educação</a>
                            <a class="dropdown-item" href="#">Esportes</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                           href="">
                            Saúde
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Governo
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item"
                               href="<?=base_url("index.php/educacao")?>">
                                Cultura e Turismo
                            </a>
                            <a class="dropdown-item" href="">Obras</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sobre</a>
                    </li>
                </ul>
                <!--<form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>-->
            </div>
        </div>
    </nav>
</header>