<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
var_dump($_SESSION); // Add this line for debugging
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header('Location: index.php');
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Fixus</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <style>
    .nav-link { font-weight: bold; }
    .nav-link:hover { color: blue !important; }
    .flag-icon { margin-left: 8px; vertical-align: middle; }
    .btn-primary { font-size: 24px; padding: 15px 40px; border-radius: 0; white-space: nowrap; margin-right: 20px; }
    .navbar-shadow { box-shadow: 0 4px 12px -4px rgba(0,0,0,0.15); }
    .extra-padding { padding-left: 5vw; padding-right: 5vw; }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-sm bg-white navbar-light sticky-top navbar-shadow">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="assets/Fixus-logo-1.png" class="rounded" alt="Fixus Logo" height="60px">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="#section1">AVALEHT</a></li>
          <li class="nav-slash"><span class="nav-link disabled">/</span></li>
          <li class="nav-item"><a class="nav-link" href="#section2">AUTOKAUBAD</a></li>
          <li class="nav-slash"><span class="nav-link disabled">/</span></li>
          <li class="nav-item"><a class="nav-link" href="#section3">RATTAPOED</a></li>  
          <li class="nav-slash"><span class="nav-link disabled">/</span></li>
          <li class="nav-item"><a class="nav-link" href="#section3">AUTOTEENINDUS</a></li>  
          <li class="nav-slash"><span class="nav-link disabled">/</span></li>
          <li class="nav-item"><a class="nav-link" href="#section3">KLIENDIKAART</a></li>  
          <li class="nav-slash"><span class="nav-link disabled">/</span></li>
          <li class="nav-item"><a class="nav-link" href="#section3">FIXUS</a></li>  
          <li class="nav-slash"><span class="nav-link disabled">/</span></li>
          <li class="nav-item"><a class="nav-link" href="#section3">BLOGI</a></li>  
        </ul>
        <div class="d-flex align-items-center ms-auto">
          <li class="nav-item dropdown list-unstyled m-0">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
              Eesti keel <img src="assets/Flag_of_Estonia.svg.png" height="20px" alt="Estonian Flag" class="flag-icon">
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="#logo">
                  Vene keel <img src="assets/Flag_of_Russia.svg" height="20px" alt="Russian Flag" class="flag-icon">
                </a>
              </li>
            </ul>
          </li>
          <button type="button" class="btn btn-primary ms-3" style="background-color: #164da8;">E-POOD</button>
        </div>
      </div>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <h1>Welcome to the Dev Page!</h1>
        <a href="index.php?logout=1">Log out</a>
      </div>
    </div>
  </div>
</body>
</html>

