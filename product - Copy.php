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
  body{
    margin: 0;
    font-family: sans-serif;
   
}
h3{
    text-align: center;
    font-size: 30px;
    margin: 0;
    padding-top: 10px;
    color:#606066;

}
a{
    text-decoration: none;
}

.gallery
{
    display: flex;
    flex-wrap: wrap;
    width: 100%;
    justify-content: center;
    align-items: center;
    margin: 50px 0;
}
.content
{
    width:20%;
    margin: 15px;
    box-sizing: border-box;
    float: right;
    text-align: center;
    border-radius: 20px;
    cursor: pointer;
    padding-top: 10px;
    box-shadow: 0 14px 28px rgba(0,0,0,25),0 10px 10px rgba(0,0,0,0.22);
  transition: .4s;
  color:#f2f2f2;
}
.content:hover{
    box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
    transform: translate(0px , -8px);
}
.img-p{
    width: 200px;
    height: 200px;
    border-radius: 20px;
    text-align: center;
    margin: 0 auto;
    display: block;
}

p{
    text-align: center;
    color:#b2bec3;
    padding-top: 0 8px;
}

h6{
    font-size: 26px;
    text-align: center;
    color:#222f3e;
    margin: 0;
}

.buy{
    text-align: center;
    font-size: 24px;
    color:#fff;
    width: 100%;
    padding: 15px;
    border: 0;
    outline: none;
    cursor: pointer;
    margin-top: 5px;
    border-bottom-right-radius: 20px;
    border-bottom-left-radius: 20px;
}

.buy{
    background: #2183a2;
}

@media(max-width:1000px)
{
    .content{
        width: 45%;
        
    }
    .img-p{ width:45%;}
}

@media(max-width:750px)
{
    .content{ width: 100%; }
    .img-p{ width:100%;}
}

.notfound
{
  text-align:center;
  background-color:#222f3e;
  padding: 10px;
  border:1px  solid #222f3e;
  font-size:20px;
  color:#fff;
}
</style>
  </head>
  <body>

  
  <?php include 'NavBar.php'; 
        include 'SideNavProduct.php';
       // include 'Function.php';
        
       
      //----------------------------------------------------------------
     

  ?>

  
    
<!--------------------------------------------------->
<div  class="gallery">
  
  <?php
           if(isset($_GET['cat']))
           {
               $cat = (int)$_GET['cat'];
               $get_pro ="select * from product where cat_id='$cat'";
               $run_pro =mysqli_query($con,$get_pro) or trigger_error(mysqli_error($con));
               if(mysqli_num_rows($run_pro) > 0)
               {
              
//---------------------------------------------------         
          while($row_pro=mysqli_fetch_array($run_pro))
          {
            echo '
            <div class="content">
            <img class="img-p" src="admin/pic/'.$row_pro['image_prod'].'"/>
           <a href="details.php?id='.$row_pro['prod_id'].'"> <h3> '.$row_pro['prod_name'].' </h3> </a>
            <p>'.$row_pro['desc_prod'].' </p>
            <h6>'.$row_pro['price_prod'].'</h6>
            <a href="product.php?add_cart='.$row_pro['prod_id'].'"><button class="buy" type="submit" >شراء الان</button></a>
        </div>';
        
              }
            }

              else
              {
                  echo "<div class='notfound'>لايوجد منتجات في هذا القسم </div>";
              }
          }
       
             ?>
     </div>
      <!------------------------- ترقيم الصفحات ------------------------->

<div class="pagination justify-content-center pt-4">
        <nav aria-label="page pagination">
          <ul class="pagination pagination-sm flex-wrap ">
            <li class="page-item disabled">
              <a class="page-link">السابق</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active" aria-current="page">
              <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#">التالى</a>
            </li>
          </ul>
        </nav>

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