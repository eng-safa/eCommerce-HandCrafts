<?php  session_start() ;

if(isset($_SESSION['user_cust']))
{
//echo "مرحباً بك يا " . $_SESSION['user_cust'] ;
}
else 
      { 
        //echo '<script> alert ( "   لاتملك صلاحية لدخول هذة الصفحة "); </script>';
        echo "<script>window.open('login_cust.php','_self')</script>";
        exit();

      }
 
?>
<!doctype html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title> إتمام الشراء  </title>


     <!-- Bootstrap CSS -->
  <link  rel="stylesheet"  href="css/bootstrap.min.css"/>
  
  <link  rel="stylesheet"   href="css/all.min.css"/>
  <link  rel="stylesheet"   href="css/bootstrap.rtl.min.css"/>
  <link  rel="stylesheet"   href="css/fontawesome.min.css"/>
  <link  rel="stylesheet"  href="css/style.css"/>

    <style>
  .send
{
  text-align:center;
  background-color:green;
  padding: 10px;
  border:1px  solid #222f3e;
  font-size:20px;
  color:#fff;
}
</style>
    
  </head>
  <body>

  <?php include 'NavBar.php'; 
   include 'db/connect.php'; 
 

  ?>

  
<?php



$pay_method=@$_POST['pay_method'];
$delivery=@$_POST['delivery'];
$pay_conversion=@$_POST['pay_conversion'];
$Transfer_num=@$_POST['Transfer_num'];


$Transfer_notice_img=@$_FILES['Transfer_notice_img']['name'];
$image_tmp=@$_FILES['Transfer_notice_img']['tmp_name'];

// upload image ------------------------

move_uploaded_file($image_tmp,"Transfer/$Transfer_notice_img");
//----------------------------------





if(isset($_POST['add_pay']))
{
      
 
 
//---------------------------- pay -----------------------------------

      
 
   $insert_pay="INSERT INTO
    pay    (pay_method,pay_conversion,Transfer_num,delivery,Transfer_notice_img)
    VALUES('$pay_method','$pay_conversion','$Transfer_num','$delivery','$Transfer_notice_img')";
   $run_pay=mysqli_query($con,$insert_pay);

//------------------------------end pay --------------------------------------
   if(isset($run_pay))
   {
       echo "<div class='send'>تم الارسال بنجاح ... انتظر التاكيد   </div>";   
  }
  else 
  {
    echo "<div class='send'>لم يتم الحفظ  </div>";

  }
}



 ?>

    
<div class="container ">
      
      <div class="col-md-7 col-lg-8  " >
        <h4 class="mb-3 p-3"> الدفع</h4>
        <form class="needs-validation justify-content-sm-center" action="pay.php" method="post" novalidate>


          <hr class="my-4">
        
          <div class="row gy-3">
          <div class="col-md-6">
              <label for="country" class="form-label">طريقة الدفع</label>
              <select class="form-select" name="pay_method" required>
                <option value="">اختر طريقة الدفع </option>
                <option value="cash" name=""> نقد  </option>

                <option value="convert" name="">  تحويل </option>

              </select>
             
            </div>






            <div class="col-md-6">
              <label for="state" class="form-label">التوصيل</label>
              <select class="form-select" name="delivery" required>
              <option value="">اختر  </option>
              <option value="with ">مع التوصيل</option>
              <option value="without ">بدون التوصيل</option>
              </select>
             
        

            </div>
          </div>


            <hr class="my-4">


          <div class="row gy-3">
          <div class="col-md-4">
              <label for="state" class="form-label">شركة التحويل</label>
              <select class="form-select" name="pay_conversion" required>
                <option value="">اختر...</option>
               
                <?php
                  $show_camp="select * from conversion_company";
                     $run_camp=mysqli_query($con,$show_camp);

                 while($row_camp=mysqli_fetch_array($run_camp))

           {    
                 echo ' <option value="'.$row_camp['comp_id'].'">' .$row_camp['comp_name']. '</option>';
               }
              ?>

              </select>
              <div class="invalid-feedback">
                يرجى اختيار اسم منطقة صحيح.
              </div>
            </div>

            <div class="col-md-4">
              <label for="cc-number" class="form-label">رقم الحوالة </label>
              <input type="text" class="form-control" name="Transfer_num" placeholder="" required>
              
            </div>
            <div class="col-sm-4"> 
            <label for="cc-number" class="form-label">   صورة الاشعار </label> 
    
    
  <input class="form-control" type="file" name="Transfer_notice_img">
</div>


          <button class="w-100 btn btn-primary btn-lg" type="submit" name="add_pay"> تاكيد الدفع</button>
        </form>
      </div>
  
 
</div>
</div>

<?php include 'Footer.php'; ?>

   <!-- java scrpit-->
   <script src="js/jquery-3.6.0.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js" ></script>
      <script src="js/main.js"></script>  
      <script src="js/all.min.js"></script>  
    <script src="js/bootstrap.bundle.min.js"></script>

  
  </body>
</html>
