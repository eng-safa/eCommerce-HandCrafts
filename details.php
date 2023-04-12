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
  
  <link  rel="stylesheet"   href="css/all.min.css"/>
  <link  rel="stylesheet"   href="css/bootstrap.rtl.min.css"/>
  <link  rel="stylesheet"   href="css/fontawesome.min.css"/>
  <link  rel="stylesheet"  href="css/style.css"/>

  <style>

</style>
  </head>
  <body>

  <?php include 'NavBar.php';   ?>
  
  <?php
  include 'db/connect.php';
  global $con;


  $prod_id = (int)$_GET['id'];
  if(isset($_GET['id']))
  {
    $get_pro_id =  "select * from  product where prod_id ='$prod_id'";
    $run_pro_id = mysqli_query($con,$get_pro_id);
    $row_pro = mysqli_fetch_array($run_pro_id);
  }
       
      //----------------------------------------------------------------
     

  ?>
  <!---------------------------------------------------------------------------->


  <div class="container pt-3">
    <div class="d-grid gap-3" style="grid-template-columns: 2fr 1fr;">
      
       
      <div class="bg-wight border rounded-3 ">
        
       <div class="p-title p-2 text-center h1"> <h6> <?php echo $row_pro['prod_name']; ?></h6></div>

       <div class="p-body  text-center">

       <img class="img-p " src=" <?php echo 'admin/pic/'.$row_pro['image_prod']; ?>" width="300" hight="300"/>

       </div>
       <div class="p-body p-2"> <p><?php echo $row_pro['desc_prod']; ?> </p> </div>
     

      </div>

      <div class="bg-wight border rounded-3">
      <div class="p-cat p-2"> الصنف :

      <?php 
          $cat =$row_pro['cat_id'];

          $get_cat =  "select * from categories where cat_id='$cat'";
          $run_cat = mysqli_query($con,$get_cat);
          $row_cat= mysqli_fetch_array($run_cat);
          
         echo $row_cat['cat_name'];
      ?>

    
      </div>
      <div class="p-qun p-2">  سعر المنتج :
     <?php echo $row_pro['price_prod']; ?>

    </div>
       <div class="p-price p-2">الكمية  :
      <?php echo $row_pro['price_prod']; ?>
       </div>
       <div class="col-sm-offset-2 col-sm-10 p-2"> 
        <input type="submit" value="شراء" name="add_prod" class="btn btn-primary">

    </div>
       
       
      </div>
      
    </div>
  </div>
  
           
<!---------------------------------------------------------------------------->


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
