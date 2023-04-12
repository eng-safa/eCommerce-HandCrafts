

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
include 'Function.php';

//--------------------Insert cat_name-----------------------
 $cat_name=@$_POST['cat_name'];

 if(isset($_POST['add_cat']))
 {
    $insert_cat="INSERT INTO categories(cat_name) VALUES('$cat_name')";
    $run_cat=mysqli_query($con,$insert_cat);
    if(isset($run_cat))
    {
        //header("Location:Categories.php");
        echo '<meta http-equiv="refresh" content="1; url=Categories.php" />';

        // echo "done";
    }
    // else
    // {
    //     echo "no";
    // }
 }
//--------------------- view Categories-----------------------------

 
   
     
    
   

?>
    
  
<h4 class="text-center">بيانات الصنف  </h4>
<div class="container  border rounded-1  bg-secondary bg-light">

<form class="form-horizontal" action="<?php  echo $_SERVER['PHP_SELF'] ?>" method="post">


<div class="form-group p-2"><label class="col-sm-2 control-label"> اسم الصنف </label> 
    <div class="col-sm-10 col-md-6"> 
        <input type="text" class="form-control" name="cat_name" required="required" autocomplete="off">
</div> 
    </div>


 

        
<div class="form-group p-2">
    <div class="col-sm-offset-2 col-sm-10"> 
        <input type="submit" value="اضافة صنف" name="add_cat" class="btn btn-primary">
</div> 
    </div>
    
    
</form>
  </div>
  

  <h4 class="text-center">عرض الاصناف  </h4>

  <div class="container  border rounded-1  bg-secondary bg-light">
  <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              
              <th scope="col">رقم الصنف</th>
              <th scope="col">اسم الصنف</th>
             
              <th scope="col"> العملية</th>
              <th scope="col">  العميلة</th>

            </tr>
          </thead>
          <?php
            $show_cat="select * from categories";
            $run_cat=mysqli_query($con,$show_cat);
         
            while($row_cat=mysqli_fetch_array($run_cat))
            {
          ?>
          <tbody>
            <tr>
             
                    
     
              <td> <?php  echo $row_cat['cat_id']; ?></td>
              <td> <?php  echo $row_cat['cat_name']; ?></td>
              
             
              <td><button type="button" class="btn btn-success">تعديل</button></td>

              <td>
              <button type="button" class="btn btn-danger">حذف</button>
               </td>
            </tr>
           <?php
            }
           ?>
           
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>


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

