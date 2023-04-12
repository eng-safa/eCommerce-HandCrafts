

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
  .massage_error
  {
    border: 1px solid;
	margin: 10px auto;
	padding: 15px 10px 15px 50px;
	color: #D8000C;
			background-color: #FFBABA;
	max-width: 100%;
  text-align:center;
  }
  </style>
  <body>


<?php
include 'dashboard.php';
include 'db/connect.php';
$prod_name=@$_POST['prod_name'];
$price_prod=@$_POST['price_prod'];
$cat_name=@$_POST['cat_name'];
$desc_prod=@$_POST['desc_prod'];


$image_prod=@$_FILES['image_prod']['name'];
$image_tmp=@$_FILES['image_prod']['tmp_name'];

// upload image ------------------------

move_uploaded_file($image_tmp,"pic/$image_prod");
//----------------------------------


if(isset($_POST['add_prod']))
{
      
  if(empty($cat_name)|| empty($desc_prod)|| empty($price_prod)|| empty( $image_prod))
  {
        echo "<div class='massage_error'>يجب ملئ الحقول</div>";
  }
  else
  {
   $insert_prod="INSERT INTO product(prod_name,desc_prod,price_prod,image_prod
   ,cat_id) VALUES('$prod_name','$desc_prod','$price_prod','$image_prod','$cat_name')";
   $run_prod=mysqli_query($con,$insert_prod);
   if(isset($run_prod))
   {
       //header("Location:Categories.php");
       echo '<meta http-equiv="refresh" content="1; url=add_product.php" />';

       // echo "done";
   }
  }
}

?>

  
<h4 class="text-center p-2">بيانات المنتجات  </h4>
<div class="container  border rounded-1  bg-secondary bg-light ">
 

<form class="form-horizontal row g-3 p-2"  action="<?php  echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">


<label class="col-sm-2 control-label"> اسم المنتج </label> 
    <div class="col-sm-4"> 
        <input type="text" class="form-control" name="prod_name" value="<?php echo $fetch_edit['prod_name']; ?>" required="required" autocomplete="off">
 
    </div>

   

  <label class="col-sm-2 control-label">  سعر المنتج </label> 
    <div class="col-sm-4"> 
        <input type="text" class="form-control" name="price_prod" value="<?php echo $fetch_edit['price_prod']; ?>"  required="required" autocomplete="off">
</div> 
   
 
   <label class="col-sm-2 control-label">   التصنيف </label> 
    <div class="col-sm-4"> 

    <select class="form-select"  name="cat_name">
  <option selected>اختر التصنيف</option>
<?php
 $show_cat="select * from categories";
 $run_cat=mysqli_query($con,$show_cat);

 while($row_cat=mysqli_fetch_array($run_cat))

 {    
        echo ' <option value="'.$row_cat['cat_id'].'">' .$row_cat['cat_name']. '</option>';
 }
?>
 
  </select>

</div> 

<label class="col-sm-2 control-label">   صورة المنتج </label> 
    <div class="col-sm-4"> 
    
  <input class="form-control" type="file" name="image_prod">
</div>

<label class="col-sm-2 control-label">  وصف المنتج </label> 
    <div class="col-sm-10"> 
        <textarea  class="form-control" name="desc_prod"  value="<?php echo $fetch_edit['desc_prod']; ?>" required="required" autocomplete="off">
</textarea>
    </div>

      
 
  <!------------------------------------------>    



  <!------------------------------------------>

    <div class="col-sm-offset-2 col-sm-10 p-2"> 
        <input type="submit" value="اضافة صنف" name="add_prod" class="btn btn-primary btn-lg">

    </div>
    
    
</form>
</div>

<!-------------------------------------------->
  <h4 class="text-center">عرض المنتجات  </h4>

<div class="container  border rounded-1  bg-secondary bg-light p-2 mb-1">


      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
          <form class="d-flex mt-3 mt-lg-0" role="search" action="search.php" method="get">
            <input class="form-control me-2" type="search" placeholder="اسم المنتج" name="ser_name" aria-label="Search">
            <button class="btn btn-outline-primary" type="submit" name="search">بحث</button>
          </form>
          <button class="btn btn-outline-danger" type="submit" name="delete_all" value="Remove">حذف </button>


            <tr>
             <th><input type="checkbox" name="deleteAll[]" value=""> تحديد الكل </th>
              <th scope="col">رقم المنتج</th>
              <th scope="col">اسم المنتج</th>
              <th scope="col">وصف المنتج</th>
              <th scope="col">سعر المنتج</th>
              <th scope="col">صورة المنتج</th>
              <th scope="col">  التصنيف</th>
              <th scope="col"> حذف</th>
              <th scope="col">  تعديل</th>

            </tr>
          </thead>
          <?php
            $show_prod="select * from product";
            $run_prod=mysqli_query($con,$show_prod);
         
            while($row_prod=mysqli_fetch_array($run_prod))
            {
          ?>
          <tbody>
        
            <tr>
             
            <td><input type="checkbox" name="deleteAll[]" value="<?php echo $row_prod['prod_id']; ?>">  </td>

              <td> <?php  echo $row_prod['prod_id']; ?></td>
              <td> <?php  echo $row_prod['prod_name']; ?></td>
              <td> <?php  echo $row_prod['desc_prod']; ?></td>
              <td> <?php  echo $row_prod['price_prod']; ?></td>

              <td> <?php  echo'<img src="admin/pic/'.$row_prod['image_prod'].'" width="40" hieght="40">'?></td>
              <td> <?php  echo $row_prod['cat_id']; ?></td>
              <td><a href="add_product.php?do=edit_product&product_id=<?php  $row_prod['prod_id'];?>">

           <!--   <td><a href="add_product.php?action=edit_product&product_id=<?php echo $row_prod['prod_id'];?>"> -->
              <button type="button" class="btn btn-success">تعديل</button></a></td>

              <td><a href="add_product.php?action=view_pro&delete_product=<?php echo $row_prod['prod_id'];?>">
              <button type="button" class="btn btn-danger">حذف</button></a>
               </td>
            </tr>
            <?php
            }
           ?>
           
          </tbody>
        </table>
      </div>
    
  </div>

  <?php
  // Delete Proudct
     if(isset($_GET['delete_product']))
     {
      $delet_product =mysqli_query($con,"Delete from product where prod_id='$_GET[delete_product]' ");
       if($delet_product)
       {
        echo "<script> alert('تم الحذف')</script>";
        echo '<meta http-equiv="refresh" content="1; url=add_product.php" />';

       }
    }
    //------------------ Delete by select --------------------------------------
    // if(isset($_GET['deleteAll']))
    // {
    //   $remove=$_GET['deleteAll'];
    //   foreach($remove as $key)
      
    //   $run_remove=mysqli_query($con,"Delete from product where prod_id='$key' ");
    //   if($run_remove)
    //   {
    //   echo "<script> alert('تم الحذف')</script>";
    //   echo '<meta http-equiv="refresh" content="1; url=add_product.php" />';
    //   }
    //   else
    //   {
    //    echo "<script> alert('errir! ')</script>";

    //   }
    // }

      //-------------------------
      if(isset($_POST['deleteAll']))
                  {
                foreach($_POST['remove'] as $remove)
                 { 
                   $delete_pro = "Delete from product where prod_id='$remove'";
                   $run_remove = mysqli_query($con, $delete_pro);
                   if($run_remove)
                 {
                       // header("Location : cart.php ");
                       echo "<script>window.open('add_product.php','_self')</script>";
                 }
                }
              }

    //------------------ update  --------------------------------------
    // if(isset($_GET['delete_product']))
    //  {
    $edit_product=mysqli_query($con,"select * from product where prod_id='$_POST[product_id]' ");
    $fetch_edit=mysqli_fetch_assoc($edit_product);

    // }

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


<?php

?>