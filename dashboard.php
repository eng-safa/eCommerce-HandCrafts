<?php
	// session_start();
  //   if(isset($_SESSION['UserName']))
  //   {
  //       // echo "مرحباً بك يا " . $_SESSION['UserName'];
  //   }
  //   else 
  //   {
  //       echo "لاتملك صلاحية لدخول هذة الصفحة " ;
  //       header('Location:login.php');
  //       exit();

  //   }
    include 'db/connect.php';
?>
<!doctype html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>ابداعات اليمن للحرف اليدوية</title>
      <!-- Required meta tags -->
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link  rel="stylesheet"  href="css/bootstrap.min.css"/>
  
    <link  rel="stylesheet"  href="css/style.css"/>
    <link rel="stylesheet"   href="css/all.min.css"/>
    <link href="css/bootstrap.rtl.min.css" rel="stylesheet">
    <link href="css/fontawesome.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="js/dashboard.rtl.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">
    
<?php

//         echo "مرحباً بك يا " . $_SESSION['UserName'];

?>
</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="عرض/إخفاء لوحة التنقل">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-75 rounded-0 border-0" type="text" placeholder="بحث" aria-label="بحث">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="#" text-primary>تسجيل الخروج</a>
      <?php
      //include "logout.php";
      ?>
    </div>
   
  </div>
  <!----
  <div class="flex-shrink-0 dropdown">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small shadow">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
          </ul>
        </div>
        ---->
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="profile.php">
              <span data-feather="home" class="align-text-bottom"></span>
              البيانات الاساسية 
            </a>
            <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
              المدن
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
              شركات التحويل
            </a>
          </li>
          </li>

        
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
              الاصناف
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="add_product.php">
              <span data-feather="users" class="align-text-bottom"></span>
              المنتجات
            </a>
    </li>

    <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
              بيانات الدفع
            </a>
          </li>


        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
          <span>التقارير  </span>
          <a class="link-secondary" href="#" aria-label="إضافة تقرير جديد">
            <span data-feather="plus-circle" class="align-text-bottom"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              تقارير المخزن
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
               تقارير المبيعات
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
               مبيعات نهاية الشهر
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              مبيعات نهاية العام
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">البيانات  الاساسية</h1>
       
      </div>
    

<?php


?>

     <!-- java scrpit-->
     <script src="js/jquery-3.6.0.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js" ></script>
      <script src="js/main.js"></script>  
      <script src="js/all.min.js"></script>  
    <script src="js/bootstrap.bundle.min.js"></script>

  </body>
</html>
