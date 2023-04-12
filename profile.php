

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
  </head>
  <style>

  </style>
  <body>


<?php
include 'dashboard.php';
include 'db/connect.php';


 //check if user cooming form HTTP Post Requset
  if($_SERVER['REQUEST_METHOD']=='POST')
  {
    $username = $_POST['user'];
    $password = $_POST['pass'];
    //$hashpassword = shal($password);

    //check if user Exist in database
 
  $get_user="select * from users where user_name='$username'and password='$password'";
	$sql=mysqli_query($con,$get_user) ; 
	$count=mysqli_num_rows($sql)   ;
  
	if($count>1)
	{
    $row=mysqli_fetch_array($sql);
	
    $un= $row['user_name'];
	  $pa= $row['password'];

    }  

}


?>
    
  
<h4 class="text-center">بيانات المستخدم  </h4>
<div class="container">

<form class="form-horizontal" action="<?php  echo $_SERVER['PHP_SELF'] ?>" method="post">


<div class="form-group"><label class="col-sm-2 control-label"> اسم المستخدم </label> 
    <div class="col-sm-10 col-md-4"> 
        <input type="text" class="form-control" name="user" required="required" autocomplete="off">
</div> 
    </div>

    
<div class="form-group"><label class="col-sm-2 control-label">  كلمة المرور </label> 
    <div class="col-sm-10 col-md-4"> 
        <input type="password" class="form-control" name="pass" required="required"  autocomplete="new-password">
</div> 
    </div>

    
<div class="form-group"><label class="col-sm-2 control-label">  الايميل </label> 
    <div class="col-sm-10 col-md-4"> 
        <input type="email" class="form-control" required="required"  name="email">
</div> 
    </div>

    
<div class="form-group"><label class="col-sm-2 control-label">  الاسم بالكامل  </label> 
    <div class="col-sm-10 col-md-4"> 
        <input type="text" class="form-control" required="required"  name="fullname">
</div> 
    </div>

        
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10"> 
        <input type="submit" value="حفظ" class="btn btn-primary">
</div> 
    </div>
    
    
</form>
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

