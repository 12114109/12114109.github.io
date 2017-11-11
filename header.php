<?php
$link = "";
if(isset($_GET['link']))
    $link = $_GET['link'];
switch ($link) {
    case "lessions":
        $page_title="Sva predavanja";
        break;
    case "login":
        $page_title="Uloguj se";
        break;
    case "register":
        $page_title="Registruj se";
        break;
    case "register":
        $page_title="Moj profil";
        break;
    default:
        $page_title="Početna";
        break;
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $page_title ?> </title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.css" rel="stylesheet">

  </head>
  
  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
      <a  class="hidden-sm-down" class="navbar-brand js-scroll-trigger" href="index.php">
        <img  src="./img/logo.png" width="50" height="50" alt="logo">
        </a>
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Usavrši me</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Meni
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Popularna predavanja</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">O nama</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Kontakt</a>
            </li>
            <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Nalog
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <?php
          //If user is not logged in
          if(!isset($_SESSION))
          {
            ?>

            <a class="dropdown-item" data-target="#loginmodal" data-toggle="modal">Prijava</a>
            <a class="dropdown-item" data-target="#registrationmodal" data-toggle="modal" >Registracija</a>

        <?php
          }

          else
          {
            // If user is logged in
            ?>

             <a class="dropdown-item" href="logout.php">Odjavi se</a>
             <a class="dropdown-item" href="?link=profile" data-toggle="modal" >Moj profil</a>

            <?php

          }

           ?>
          

        </div>
      </li>
          </ul>
        </div>
      </div>
    </nav>
