<?php

include_once ('../config/connect.php');


if(isset($_SESSION['auth']))
{
    if(isset($_SESSION['scope']))
{
   $scope = $_POST['scope'];
   switch($scope)
   {
    case "add":
    
        $product_id = $_POST['product_id'];
        $product_qty = $_POST['product_qty'];
        $user_id = $_POST['auth_user']['id'];
       break;
       default :
         echo 500 ;
   }
}
}
else
{
 echo 401 ;
}
?>