<?php  session_start() ;

if(isset($_SESSION['user_cust']))
{
  echo "<script>window.open('pay.php','_self')</script>";

}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>إبداعات اليمن للحرف اليدوية

   
    </title>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link  rel="stylesheet"  href="css/bootstrap.min.css"/>
  
    <link  rel="stylesheet"  href="css/style.css"/>
    <link rel="stylesheet"   href="css/all.min.css"/>
    <link href="css/bootstrap.rtl.min.css" rel="stylesheet">
    <link href="css/fontawesome.min.css" rel="stylesheet">


  </head>

  <style>
  .send
{
  text-align:center;
  background-color:#222f3e;
  padding: 10px;
  border:1px  solid #222f3e;
  font-size:20px;
  color:#fff;
}
</style>


  <body>
  <?php include 'NavBar.php'; 
   include 'db/connect.php'; 

  ?>

  
<?php


     $ip =getIp ();
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $user_cust = $_POST['cus_first_name'];
        $pass_cust = $_POST['cus_pass'];

       $get_user="select * from customers where cus_first_name='$user_cust' and cus_pass='$pass_cust' Limit 1";
       $run_login=@mysqli_query($con,$get_user) ; 

       $check_login=mysqli_num_rows($run_login);

      //  if($check_login == 0)
      //  {
      //   echo '<script> alert ( "البيانات المدخلة غير صحيحة "); </script>';
      //  exit();
      //  }


      $run_cart=mysqli_query($con,"select * from cart where ip_add='$ip'");
      $check_cart=mysqli_num_rows($run_cart);

       //if($check_login > 0 && $check_cart == 0)
       if($check_login > 0 )

       {
        $_SESSION['user_cust']=$user_cust;
        //echo '<script> alert ( ">>>تم تسجيل الدخول بنجاح "); </script>';
       echo "<script>window.open('pay.php','_self')</script>";
       exit();
      // header('Location: pay.php');
      }
    //   else
    //   {
    //      echo '<script> alert ( "لم يتم تسجيل الدخول "); </script>';
    // }
       else 
       {
       echo '<meta http-equiv="refresh" content="0; url=login_cust.php" />';

       }

    } 

?>

<div class="container ">

      
      <div class="col-md-7 col-lg-8  " >
        <h4 class="mb-3 p-3"> تسجيل الدخول</h4>
        <hr class="my-4">
<div class="row gy-3">

        <form class="needs-validation justify-content-sm-center" action="login_cust.php" method="POST" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label"> اسم المستخدم </label>
              <input type="text" class="form-control" name="cus_first_name" placeholder="" value="" required>
              <div class="invalid-feedback">
                يرجى إدخال اسم المستخدم  .
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label"> كلمة المرور</label>
              <input type="password" class="form-control" name="cus_pass" placeholder="" value="" required>
              <div class="invalid-feedback">
                يرجى إدخال  كلمة المرور.
              </div>
            </div>

           
          </div>

          <button class="w-100 btn btn-primary btn-lg" type="submit" name="login_cust"> تسجيل الدخول</button>
        </form>
      
            </div>
            </div>
            </div>
      


    



<?php

  
include 'Footer.php';
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
