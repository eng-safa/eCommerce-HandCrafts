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
.badge
{
  background-color: red;
  border-radius: 10px;
  color:black;
  position:absolute;
  top:150px;
  left:310px;
  padding:1px 3px 1px 3px; 
}

</style>
  </head>
  <body>

  <?php include 'NavBar.php';  
             // if (file_exists("Function.php")) include "Function.php";

  ?>
 

  <div class="container">
  <div class="row g-3 justify-content-center">
      <div class="col-md-5 col-lg-8 order-md-last">

        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-muted">عربة التسوق</span>
          <span class="badge bg-secondary rounded-pill"><?php  total_Item ();?></span>
        </h4>
        <form action="" method="post">
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-sm">
            
             <h6 class="my-0">ازالة المنتج</h6>
             <h6 class="my-0">اسم المنتج </h6>
             <h6 class="my-0"> الكمية  </h6>
             <h6 class="my-0"> سعر المنتج  </h6>


          </li>
  <!---------------------------------------------------------->
  <?php
  include 'db/connect.php';
 // include 'Function.php';
 
  error_reporting(0);
  
  
   // global $con ;
    $ip =getIp();
    $total = 0;
   

    $t_price = "select * from cart where ip_add = '$ip'";
    $run_cart = mysqli_query($con,$t_price);

    while($row_price=mysqli_fetch_array($run_cart))
    {
      $pro_id_t= $row_price['prod_id'];

      $price_pro = "select * from product where prod_id = '$pro_id_t'";
      $run_price_pro = mysqli_query($con,$price_pro);
      while($row_price_pro=mysqli_fetch_array($run_price_pro))
      {
              $pro_price=array($row_price_pro['price_prod']);
              $pro_name = $row_price_pro['prod_name'];
              $pro_price_single = $row_price_pro['price_prod'];

             
              $value=array_sum($pro_price);
              $updte_qty = "select * from cart where prod_id='$pro_id_t'";
              $run_update_qty = mysqli_query($con,$updte_qty);
              $row_qty=mysqli_fetch_array($run_update_qty);
              $qty=$row_qty['quantity'] ;
             
              $values_qty= $values * $qty;
              $tot +=$values_qty;

              $total += $value;

            
     
  ?>
    
  <!---------------------------------------------------------------------------->

  
          <li class="list-group-item d-flex justify-content-between lh-sm">
          <div>
             <small class="text-muted"> 
                <input type="checkbox" name="remove[]" value="<?php echo $pro_id_t ; ?>"/> </small>
            </div>

            <div>
            <small class="text-muted"><?php echo $row_price_pro['prod_name']; ?></small>
            </div>
           
            <div class="justify-content-center ">
             <small class="text-muted "><input type="text" name="qty" size="5" value="<?php echo $qty; ?>"/></small>
            </div>
         
            <div>
             <small class="text-muted"><?php echo $row_price_pro['price_prod']; ?></small>
            </div>
         
          </li>
          <?php       }  }    ?>
          
          <li class="list-group-item d-flex justify-content-between bg-secondary">
          <h6 class="my-0"> المجموع  </h6>
            <strong><?php   echo $total  ; ?></strong>
          </li>
        </ul>
        
        <form class="card p-2 text-center"  action="" method="post">
          <div class="">
            <input type="submit" class="btn btn-secondary" name="update_cart" value="تحديث"/> 
          <a href="product.php"> <input type="button" class="btn btn-secondary" name="" value="متابعة التسوق"/></a> 
          <a href="end_cart.php">  <input type="button" class="btn btn-secondary" name="" value="إنهاء التسوق"/></a> 
                  </div>
        </form>

                    
 <?php 
            // function up_cart ()
            // {
            //   global $con;
            
            //     $ip = getIp();
            //     //$value = array($_POST['remove']);

               if(isset($_POST['update_cart']))
                  {
                foreach($_POST['remove'] as $id_remove)
                 { 
                   $delete_pro = "DELETE FROM cart where prod_id='$id_remove' AND ip_add= '$ip'";
                   $run_delete = mysqli_query($con, $delete_pro);
                   if($run_delete)
                 {
                       // header("Location : cart.php ");
                       echo "<script>window.open('cart.php','_self')</script>";
        }
    }
}
//               echo @$up_c = up_cart();
// }
?>
        </form> 



      </div>

</div>  
           
<!---------------------------------------------------------------------------->


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
