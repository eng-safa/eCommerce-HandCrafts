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


$ip =getIp();
$cus_first_name=@$_POST['cus_first_name'];
$cus_name=@$_POST['cus_name'];
$cus_email=@$_POST['cus_email'];
$cus_phone=@$_POST['cus_phone'];
$cus_pass=@$_POST['cus_pass'];
$cus_city_id=@$_POST['cus_city_id'];
$region_id=@$_POST['region_id'];
$cus_address=@$_POST['cus_address'];

if(isset($_POST['add_cust']))
{
      
 
   $insert_cust="INSERT INTO customers(cus_first_name,cus_name,cus_pass,cus_email,cus_phone
   ,cus_city_id,region_id,cus_address,cus_ip)VALUES('$cus_first_name','$cus_name','$cus_pass','$cus_email','$cus_phone','$cus_city_id','$region_id','$cus_address','$ip')";
   $run_cust=mysqli_query($con,$insert_cust);

   if(isset($run_cust))
   {
       //header("Location:Categories.php");
       echo "<div class='send'>تم الاشتراك بنجاح </div>";
         
       // echo "done";
   
  }
  exit;
}

?>

<div class="container ">

      
      <div class="col-md-7 col-lg-8  " >
        <h4 class="mb-3 p-3"> اشتراك</h4>
        <hr class="my-4">
<div class="row gy-3">

        <form class="needs-validation justify-content-sm-center" action="signin_cust.php" method="post" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">الاسم الأول</label>
              <input type="text" class="form-control" name="cus_first_name" placeholder="" value="" required>
              <div class="invalid-feedback">
                يرجى إدخال اسم أول صحيح.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">الاسم كامل</label>
              <input type="text" class="form-control" name="cus_name" placeholder="" value="" required>
              <div class="invalid-feedback">
                يرجى إدخال اسم عائلة صحيح.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="firstName" class="form-label">البريد الاكتروني </label>
              <input type="eamil" class="form-control" name="cus_email" placeholder="" value="" required>
              <div class="invalid-feedback">
                يرجى إدخال البريد  صحيح.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">رقم الهاتف </label>
              <input type="phone" class="form-control" name="cus_phone" placeholder="" value="" required>
              <div class="invalid-feedback">
                يرجى إدخال رقم الهاتف  صحيح.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="firstName" class="form-label"> كلمة المرور </label>
              <input type="eamil" class="form-control" name="cus_pass" placeholder="" value="" required>
              <div class="invalid-feedback">
                يرجى إدخال  كلمة المرور.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label"> اعادة كلمة المرور </label>
              <input type="phone" class="form-control" name="cus_pass2" placeholder="" value="" required>
              <div class="invalid-feedback">
                يرجى  ادخال كلمة المرور.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">العنوان</label>
              <input type="text" class="form-control" name="cus_address" placeholder="1234 الشارع الأول" required>
              <div class="invalid-feedback">
                يرجى إدخال عنوان الشحن الخاص بك.
              </div>
            </div>

            <div class="col-md-6">
              <label for="country" class="form-label">المدينة</label>
              <select class="form-select" name="city_id" required>
                <option value="">اختر المدينة </option>
                <?php
                  $show_city="select * from city";
                     $run_city=mysqli_query($con,$show_city);

                 while($row_city=mysqli_fetch_array($run_city))

           {    
                 echo ' <option value="'.$row_city['city_id'].'">' .$row_city['city_name']. '</option>';
               }
              ?>
              </select>
              <div class="invalid-feedback">
                يرجى اختيار المدينة صحيح.
              </div>
            </div>

            <div class="col-md-6">
              <label for="state" class="form-label">المنطقة</label>
              <select class="form-select" name="region_id" required>
              <option value="">اختر المنطقة </option></option>
              <?php
                  $show_region="select * from region";
                     $run_region=mysqli_query($con,$show_region);

                 while($row_region=mysqli_fetch_array($run_region))

           {    
                 echo ' <option value="'.$row_region['region_id'].'">' .$row_region['region_name']. '</option>';
               }
              ?>
              </select>
              <div class="invalid-feedback">
                يرجى اختيار المنطقة الصحيح.
              </div>
            </div>

           
          
          </div>

          <button class="w-100 btn btn-primary btn-lg" type="submit" name="add_cust"> اشتراك</button>
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
