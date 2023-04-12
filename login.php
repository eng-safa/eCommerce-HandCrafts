
<?php
  	session_start();

    if(isset($_SESSION['UserName']))
{
  echo "<script>window.open('dashboard.php','_self')</script>";

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
    <link  rel="stylesheet"  href="css/styles.css"/>

    <link  rel="stylesheet"  href="css/style.css"/>
    <link rel="stylesheet"   href="css/all.min.css"/>
  </head>
  <style>

  </style>
  <body>

  <?php
    
  if($_SERVER['REQUEST_METHOD']=='POST')
  {
    $username = $_POST['user'];
    $password = $_POST['pass'];
    //$hashpassword = shal($password);

    //check if user Exist in database
 
  $get_user="select * from users where user_name='$username'and password='$password'";
	$run_get_user=@mysqli_query($con,$get_user) ; 
  
	
  if($run_get_user > 0 )

  {
   $_SESSION['UserName']=$user;
  echo "<script>window.open('dashboard.php','_self')</script>";
  exit();
 }
   
 else 
 {
  $_SESSION['UserName']=!$user;
   echo '<script> alert ( "لاتملك صلاحية لدخول هذة الصفحة  "); </script>';
   echo '<meta http-equiv="refresh" content="0; url=login.php" />';

 }

  }

	
  ?>
  

  <div class="modal modal-signin position-static d-block bg-primary py-5" tabindex="-1" role="dialog" id="modalSignin">
  <div>
    <img class="rounded mx-auto d-block rounded-circle" src="images/logo4.png"  alt="YCH" width="100" height="100"/>
    </div>
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-4 shadow">
    
      <div class="modal-header p-5 pb-4 border-bottom-0">
        
   <h1 class="fw-bold mb-0 fs-2">تسجيل الدخول</h1>

   </div>

<div class="modal-body p-5 pt-0">
<form class="" action="<?php  echo $_SERVER['PHP_SELF'] ?>" method="post">
  <div class="form-floating mb-3">
    <input type="text" class="form-control rounded-3" name="user" id="floatingInput" placeholder="اسم">
    <label for="floatingInput"> اسم المستخدم</label>
  </div>
  <div class="form-floating mb-3">
    <input type="password" class="form-control rounded-3" name="pass" id="floatingPassword" placeholder="Password">
    <label for="floatingPassword">كلمة السر</label>
  </div>
  <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">تسجيل الدخول  </button>
  <div class="checkbox mb-3">
     <a href="signin.php"> <label> اذا لم يكن لديك حساب اشتراك من هنا  </label></a>
    </div>







     <!-- java scrpit-->
     <script src="js/jquery-3.6.0.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js" ></script>
      <script src="js/main.js"></script>  
      <script src="js/all.min.js"></script>  
    <script src="js/bootstrap.bundle.min.js"></script>

  </body>
</html>