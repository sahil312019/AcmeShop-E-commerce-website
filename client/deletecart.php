<?php

   session_start();
   $client_id=$_SESSION['client_id']; 
   $pid=$_GET['pid'];
   include_once '../shared/config.php';

   $cmd="delete from cart where client_id=$client_id and pdt_id=$pid";
   
   echo "cmd=$cmd";
   
   $sql_res=mysqli_query($conn,$cmd);
   if($sql_res)
   {
    header('location:view.php');
    // redirect to view cart
   }
   else
   {
     echo "unable to remove from cart .. Try again";
   }


?>