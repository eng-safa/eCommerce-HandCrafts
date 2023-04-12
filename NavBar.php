<?php  
session_start() ;


?>
<!doctype html>
<html lang="en">
  <head>
    <title>إبداعات اليمن للحرف اليدوية

   
    </title>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link  rel="stylesheet"  href="css/bootstrap.min.css"/>
  
  <link rel="stylesheet"   href="css/all.min.css"/>
  <link href="css/bootstrap.rtl.min.css" rel="stylesheet">
  <link href="css/fontawesome.min.css" rel="stylesheet">
<style>
.address
{
    padding-right:20px;
    padding-left:140px;


}

.headr-second .text-end
{
    padding-left:200px;
    padding-right:50px;

}
.form-control
{
    padding-right:200px;
}
.number
{
  color:black;
  font-weight:bold;
}
.form-control-dark {
  border-color: var(--bs-gray);
}
.form-control-dark:focus {
  border-color: #fff;
  box-shadow: 0 0 0 .25rem rgba(255, 255, 255, .25);
}

.text-small {
  font-size: 85%;
}

.dropdown-toggle {
  outline: 0;
}

.form-control-dark {
  border-color: var(--bs-gray);
}
.form-control-dark:focus {
  border-color: #fff;
  box-shadow: 0 0 0 .25rem rgba(255, 255, 255, .25);
}

.text-small {
  font-size: 85%;
}

.dropdown-toggle:not(:focus) {
  outline: 0;
}


</style>



<!-------------------------------------------------------------------------->
<?php
include 'db/connect.php';

//----------------------- get total item -------------------------

?>

<header>

    <div class="px-3 py-2 text-bg-dark">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <img src="images/logo4.png" class="rounded-circle"  alt="YCH" width="75" height="75"/>
          </a>
          <b class="address"> ابداعات اليمن للحرف اليدوية</b>
         

          <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
            <li>
              <a href="index.php" class="nav-link text-white">
              <i class="fa-solid fa-house-user bi d-block mx-auto mb-1"></i>
                الصفحة الرئيسية 
              </a>
            </li>
            <li>
              <a href="product.php" class="nav-link text-white">
              <i class="fa-brands fa-product-hunt bi d-block mx-auto mb-1">

              </i>                المنتجات
        
              </a>
            </li>
            <li>
              <a href="learn.php" class="nav-link text-white">
              <i class="fa-solid fa-book-open-reader bi d-block mx-auto mb-1">

              </i>                تعلم
              </a>
            </li>
            <li>
              <a href="about.php" class="nav-link text-white">
              <i class="fa-solid fa-users bi d-block mx-auto mb-1" ></i>
                من نحن
              </a>
            </li>
            <li>
              <a href="contact.php" class="nav-link text-white">
              <i class="fa-solid fa-address-book bi d-block mx-auto mb-1" ></i>
                اتصل بناء 
              </a>
            </li>
          </ul>

         
      <ul class="nav mt-5">

      <li class="nav-item dropdown ms-auto">
        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"> 
          <?php

// if(isset($_SESSION['user_cust']))
// {
    echo $_SESSION['user_cust'];
//}
        ?>
        </a>
        <div class="dropdown-menu dropdown-menu-end">
            <a href="#" class="dropdown-item">تسجيل الدخول</a>
            <a href="#" class="dropdown-item">ملفي</a>
            <div class="dropdown-divider"></div>
            <a href="logout_cust.php" class="dropdown-item">تسجيل الخروج</a>
        </div>
    </li>
      </ul>


          
        </div>

       

        </div>
      </div>
    </div>

    <?
       include 'db/connect.php'; 

    $select_user=mysqli_query($con,"select * from users where id='$_SESSION[cus_id]'");
    $data_user =mysqli_fetch_array($select_user);
    ?>

    <div class="headr-second">
    <div class="px-2 py-2 border-bottom mb-2">
      <div class="container d-flex flex-wrap justify-content-center">
      <form class="d-flex mt-3 mt-lg-0" role="search" action="search.php" method="get">
            <input class="form-control me-2" type="search" placeholder="اسم المنتج" name="ser_name" aria-label="Search">
            <button class="btn btn-outline-primary" type="submit" name="search">بحث</button>
          </form>


        <div class="text-end">

        <a href="login_cust.php"> <button type="button" class="btn btn-light text-dark me-2">تسجيل الدخول</button></a>
        <a href="signin_cust.php"><button type="button" class="btn btn-primary">الاشتراك</button></a>
          <a href="cart.php"><button type="button" class="btn btn-success">
           
            عدد المنتجات   
         
          <h7 class="number">
            <?php 
             
             if (file_exists("Function.php")) include "Function.php";
            // if (!function_exists('cart') ){ cart ();}
            cart();
            total_Item ();
           
            ?>
          </h7>

          <i class="fa-solid fa-cart-plus"></i>
          </button>
          </a>
          <button type="button" class="btn btn-info">الاجمالي : 
          <?php 
             
             //if (file_exists("Function.php")) include "Function.php";
            // require_once "Function.php";
            // if (!function_exists('totle_price') ) {  totle_price();}
           totle_price();
            ?>
          </button>

          </div>
        </div>
      </div>
    </div>
  </header>




        <!-- java scrpit-->
        <script src="js/jquery-1.10.2.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js" ></script>
      <script src="js/main.js"></script>  
      <script src="js/all.min.js"></script>  
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/bootstrap.bundle.js"></script>

      




    </body>
</html>