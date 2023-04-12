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

  
  <?php include 'NavBar.php'; 
  include 'db/connect.php';
 // include 'Function.php';


  ?>

  <!--------------------------------------------------->
  

  

      
  
      <div class=" text-center p-2">

      <h3>المنتجات المتوفر </h3>
      </div>
 <!--------------------------------------------------->
 <div  class="gallery">
        
 <?php
           if(isset($_GET['search']))
           {
            $ser_name=$_GET['ser_name'];
            $get_search="select * from product where prod_name like'%$ser_name%'";
            $run_search =mysqli_query($con,$get_search) or trigger_error(mysqli_error($con));
               if(mysqli_num_rows($run_search) > 0)
               {
              
//---------------------------------------------------         
          while($row_search=mysqli_fetch_array($run_search))
          {
            echo '
            <div class="content">
            <img class="img-p" src="admin/pic/'.$row_search['image_prod'].'"/>
            <h3> '.$row_search['prod_name'].' </h3>
            <p>'.$row_search['desc_prod'].' </p>
            <h6>'.$row_search['price_prod'].'</h6>
            <button class="buy">شراء الان</button>
          
  
        </div>';
        
              }
            }

              else
              {
                  echo "<div class='notfound'>لايوجد منتج بهذا الاسم  </div>";
              }
          }
             ?>
     </div>
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

<!---------------------------------------------------------->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    
    
    
   
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