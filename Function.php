<?php
//include 'db/connect.php';
$con=mysqli_connect('localhost','root','','handicrafts');

// function get_cat()
// {
//     global $con;
//     $show_cat="select * from categories";
//     $run_cat =mysqli_query($con,$show_cat) or trigger_error(mysqli_error($con));
   
//     while($row_cat=mysqli_fetch_array($run_cat))

//     {    
//          //   echo '<li><a href="">'.$row_cat['cat_name'].'</a></li>';
//             echo '<li><a href="product.php?cat='.$row_cat['cat_id'].'">'.$row_cat['cat_name'].'</a></li>';

//     }
// }
function get_cat()
{
  global $con;

echo '<div  class="gallery">';
        
            $show_prod="select * from product order by RAND() LIMIT 0,6";
            $run_prod=mysqli_query($con,$show_prod);
         
            while($row_prod=mysqli_fetch_array($run_prod))
            {
          echo '
          <div class="content">
          <img class="img-p" src="admin/pic/'.$row_prod['image_prod'].'"/>
          <h3> '. $row_prod['prod_name'].' </h3>
          <p>'.$row_prod['desc_prod'].' </p>
          <h6>'.$row_prod['price_prod'].'</h6>
          <button class="buy">شراء الان</button>
        

      </div>';
      
            }
         
  echo' </div>';
          }
// ------------------------get ip -----------------------------

function getIp ()
 {
   $ip = $_SERVER['REMOTE_ADDR'];
   if(!empty($_SERVER['HTTP_CLINENT_IP']))
   {
    $ip = $_SERVER['HTTP_CLINENT_IP'];
   }
   elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
   {
    $ip =  $_SERVER['HTTP_X_FORWARDED_FOR'] ;
   }
   return $ip;
  }
   //-------------------------------------
//------------------any waya--------------------
  //  foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED') as $key){
  //   if (array_key_exists($key, $_SERVER) === true){
  //       foreach (explode(',', $_SERVER[$key]) as $ip){
  //           $ip = trim($ip); // just to be safe
  //           if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false){
  //               return $ip;
  //           }
  //       }
  //   }
  // }
  //--------------any away---------------------

  // static $ip_address = NULL;

  // if (!isset($ip_address)) {
  //   $ip_address = $_SERVER['REMOTE_ADDR'];
  //   if (variable_get('reverse_proxy', 0) && array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)) {
  //     // If an array of known reverse proxy IPs is provided, then trust
  //     // the XFF header if request really comes from one of them.
  //     $reverse_proxy_addresses = variable_get('reverse_proxy_addresses', array());
  //     if (!empty($reverse_proxy_addresses) && in_array($ip_address, $reverse_proxy_addresses, TRUE)) {
  //       // If there are several arguments, we need to check the most
  //       // recently added one, i.e. the last one.
  //       $ip_list = array_map('trim', explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']));
  //       $ip_address = array_pop($ip_list);
	// while(in_array($ip_address, $reverse_proxy_addresses)){
  // 			$ip_address = trim(array_pop($ip_list));
  // 	}
  //     }
  //   }}

  //----------------------------------------------
  
 //}

//------------------------get cart ------------------------------------
function cart ()
{    
    global $con;
   if(isset($_GET['add_cart']))
   {
      $ip = getIp();
      $prod_id = (int)$_GET['add_cart'];

      $cheak_cart = "select * from cart where ip_add='$ip' and prod_id = '$prod_id'";
      $run_cart =  mysqli_query($con,$cheak_cart);

      if(mysqli_num_rows($run_cart) > 0)
      {
        echo '';
      }
      else
      {
          $insert_cart = "INSERT INTO cart (prod_id,ip_add) VALUES ('$prod_id','$ip')";
          $run_insert = mysqli_query($con,$insert_cart);

        //  header('Loction : product.php');
        if(isset($run_insert))
        {
            echo '<meta http-equiv="refresh" content="0; url=\'product.php?cat=1\'" />';
        }
          
      }
   }
}

//------------------Total Item ----------------------------------------
 function total_Item ()
      {
        if(isset($_GET['add_cart']))
        {
               global $con;
               $ip =getIp ();
               $get_totle = "select * from cart where ip_add='$ip'";
               $run_totle = mysqli_query($con,$get_totle);
               $totle_item = mysqli_num_rows($run_totle);
        }
        else 
        {
            global $con;
               $ip =getIp ();
               $get_totle = "select * from cart where ip_add='$ip'";
               $run_totle = mysqli_query($con,$get_totle);
               $totle_item = mysqli_num_rows($run_totle);
        }
        echo  $totle_item;
      }
    
//------------------ get totle price-------------------

    function totle_price()
      {
        global $con ;
        $total = 0;
        $ip =getIp();

        $t_price = "select * from cart where ip_add = '$ip'";
        $run_price = mysqli_query($con,$t_price);

        while($row_price=mysqli_fetch_array($run_price))
        {
          $pro_id_t= $row_price['prod_id'];

          $price_pro = "select * from product where prod_id = '$pro_id_t'";
          $run_price_pro = mysqli_query($con,$price_pro);
          while($row_price_pro=mysqli_fetch_array($run_price_pro))
          {
            $pro_price=array($row_price_pro['price_prod']);
            $value=array_sum($pro_price);
            $total +=$value;
          }
        }
        echo $total ;
      }
    

         ?>
         
        

