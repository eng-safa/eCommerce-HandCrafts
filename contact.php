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
  <body>

    

    
   

    

<?php
include 'NavBar.php'; 
include 'db/connect.php';

$con_name=@$_POST['con_name'];
$con_email_cus=@$_POST['con_email_cus'];
$con_message=@$_POST['con_message'];

if(isset($_POST['send']))
{
      
  if(empty($con_name)|| empty($con_email_cus)|| empty($con_message))
  {
        echo "<div class='massage_error'>يجب ملئ الحقول</div>";
  }
  else
  {
   $insert_con="INSERT INTO contact(con_name,con_email_cus,con_email_user,con_message) VALUES('$con_name','$con_email_cus','handicart@gmail.com','$con_message')";
   $run_con=mysqli_query($con,$insert_con);
   if(isset($run_con))
   {
       //header("Location:Categories.php");
       echo '<meta http-equiv="refresh" content="1; url=contact.php" />';

       // echo "done";
   }
  }
}

?>
?>

<body>
     
<h4 class="text-center p-2"> اتصل بنا  </h4>
<div class="container  border rounded-1  bg-secondary bg-light ">
 

<form class="form-horizontal row g-3 p-2"  action="<?php  echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">


<label class="col-sm-2 control-label">  الاسم </label> 
    <div class="col-sm-4"> 
        <input type="text" class="form-control" name="con_name" required="required" autocomplete="off">
 
    </div>

   

  <label class="col-sm-2 control-label">  الايميل  </label> 
    <div class="col-sm-4"> 
        <input type="text" class="form-control" name="con_email_cus" required="required" autocomplete="off">
</div> 
<label class="col-sm-2 control-label">  محتوى الرسالة  </label> 
    <div class="col-sm-10"> 
        <textarea class="form-control" name="con_message" required="required" autocomplete="off">
</textarea>
    </div> 
<div class="col-sm-offset-2 col-sm-10 p-2"> 
        <input type="submit" value=" ارسال" name="send" class="btn btn-primary btn-sm">

    </div>
    
    
</form>
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
