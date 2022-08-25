
<?php
   $pid=$_GET['pid'];
   session_start();
   $client_id=$_SESSION['client_id']; 

   include_once '../shared/config.php';

   $cmd="insert into cart(client_id,pdt_id) values('$client_id','$pid')";
   $sql_res=mysqli_query($conn,$cmd);
   if($sql_res)
   {
    header('location:view.php');
   }
   else
   {
     echo "Error in Adding the products";
   }
?>