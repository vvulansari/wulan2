<?php
require('models/functions.php');
$user = mysqli_fetch_assoc($a);
$about = mysqli_fetch_assoc($b);
$projects = data("SELECT * FROM Project");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?= baseurl;?>/assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="<?= baseurl;?>/assets/img/favicon.png" />
    <title>Material Dashboard 2 by Creative Tim</title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="<?= baseurl;?>/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="<?= baseurl;?>/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="<?= baseurl;?>/assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
  </head>
  <body class="g-sidenav-show bg-gray-200">
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark" id="sidenav-main">
      <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
          <img src="<?=baseurl;?>/assets/img/<?= $user["Gambar"];?>" class="navbar-brand-img h-100" alt="main_logo"/>
          <span class="ms-1 font-weight-bold text-white">wulannnn</span>
        </a>
      </div>
      <hr class="horizontal light mt-0 mb-2"></hr>
      <div class="collapse navbar-collapse w-auto max-height-vh-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-white active bg-gradient-primary" href="?menu=profile">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">dashboard</i>
              </div>
              <span class="nav-link-text ms-1">Home</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="?menu=profile">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">person</i>
              </div>
              <span class="nav-link-text ms-1">Profile</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="?menu=about">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">assignment_ind</i>
              </div>
              <span class="nav-link-text ms-1">About</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="?menu=project">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">manage_search</i>
              </div>
              <span class="nav-link-text ms-1">Project</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="?menu=contact">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">contacts</i>
              </div>
              <span class="nav-link-text ms-1">Contact</span>
            </a>
          </li>
        </ul>
      </div>
      <div class="sidenav-footer position-absolute w-100 bottom-0">
        <div class="mx-3">
        </div>
      </div>
    </aside>