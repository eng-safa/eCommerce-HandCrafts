<?php session_start();



if(isset($_SESSION['cus_first_name']))
   {
    include('pay.php');
   
   }
   else
   { 
    include('login_cust.php');
   }
     

?>

      


    

