<?php
	// session_start();
    // if(isset($_SESSION['UserName']))
    // {
    //      echo "مرحباً بك يا " . $_SESSION['UserName'];
    // }
    // else 
    // {
    //     echo "لاتملك صلاحية لدخول هذة الصفحة " ;
    //     header('Location:login.php');
    //     exit();

    // }
    // include 'db/connect.php';
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
    
  <?php 
       
       include 'db/connect.php';

       $show_cat="select * from categories";
   $run_cat =mysqli_query($con,$show_cat) or trigger_error(mysqli_error($con));

   $show_cat_f="select * from categories";
   $run_cat_f=mysqli_query($con,$show_cat_f) or trigger_error(mysqli_error($con));
  
  
 ?>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
        <?php 
         echo ' <li class="nav-item">';
           
         echo '<a class="nav-link" aria-current="page" href="" text-block> رجال</a>' ;

             while($row_cat=mysqli_fetch_array($run_cat))

             {
              echo ' 
            <a class="nav-link" aria-current="page" href="product.php?cat='.$row_cat['cat_id'].'">


              <span data-feather="home" class="align-text-bottom">
              '.$row_cat['cat_name'].'
              </span>
            
            </a>
          </li>
             
                  ';


             }
             //-----------------------------------------------------
             
             
             echo ' <li class="nav-item">';
             echo '<a class="nav-link" aria-current="page" href="" text-success> نساء</a>' ;
             while($row_cat_f=mysqli_fetch_array($run_cat_f))

             {
              echo ' 
            <a class="nav-link" aria-current="page" href="product.php?cat='.$row_cat_f['cat_id'].'">


              <span data-feather="home" class="align-text-bottom">
              '.$row_cat_f['cat_name'].'
              </span>
            
            </a>
          </li>
             
                  ';


             }

         ?>
        

       
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2">
     
    
    

        

     <!-- java scrpit-->
     <script src="js/jquery-3.6.0.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js" ></script>
      <script src="js/main.js"></script>  
      <script src="js/all.min.js"></script>  
    <script src="js/bootstrap.bundle.min.js"></script>

  </body>
</html>
