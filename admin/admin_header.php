<?php
session_start();

if(isset($_SESSION['admin_session']))
{

    $link = "";
if(isset($_GET['link']))
    $link = $_GET['link'];
  
switch ($link) {
    case "lessons":
        $page_title="Sva predavanja";
        break;
    case "companies":
        $page_title="Sve kompanije";
        break;
    case "instructors":
        $page_title="Svi instruktori";
        break;
    default:
         require("admin_main.php");
         $page_title = "Home";
        break;
}

}
else
{
      $page_title="Ulogujte se";
       
}

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> <?= $page_title ?> </title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="../css/freelancer.css" rel="stylesheet">

  </head>
  
  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php">Usavrši me</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Meni
          <i class="fa fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
           
           <?php if (isset($_SESSION['admin_session'])) {
            ?>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="?link=companies">Lista kompanija</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="?link=instructors">Lista instruktora</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="?link=lessons">Lista predavanja</a>
            </li>
            <?php

              }

             ?>


            <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Nalog
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <?php
          //If user is not logged in
          if(!isset($_SESSION['admin_session']))
          {
            ?>

            <a style="cursor: pointer; " class="dropdown-item login_button_modal" href="?link=login">Prijava</a>
        <?php
          }

          else
          {
            // If user is logged in
            ?>

             <a class="dropdown-item" href="admin_logout.php">Odjavi se</a>

            <?php

          }

           ?>
          

        </div>
      </li>
          </ul>
        </div>
      </div>
    </nav>
