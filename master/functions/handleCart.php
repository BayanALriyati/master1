<?php
// session_start();
include_once ('../config/connect.php');
include_once ('../functions/authCode.php');


if(isset($_SESSION['auth']))
{
    if(isset($_SESSION['auth_user']))
{
   $user_id = $_SESSION['auth_user']['user_id'];
   $productId = $_POST['product_id'];
   $product_name = $_POST['name'];
   $product_price = $_POST['price'];
   $product_image = $_POST['image'];
   $product_qty = $_POST['qty'];
   $send_to_cart ="INSERT INTO cart (user_id , product_id , product_name , product_price , product_image , product_qty)
   VALUES ('$user_id', '$productId' , '$product_name' , '$product_price','$product_image' , '$product_qty')";
   $send_to_cart = mysqli_query($con , $send_to_cart) ;
}
   else
   {
       $_SESSION ['message']="Don't found";
       header('Location: ../index.php');
    // echo 401 ;
    // http_response_code(401);

}
}
// if(isset($_SESSION['auth']))
// { 
//     if(isset($_POST['scope']))
// {
//    $scope = $_POST['scope'];
//    switch($scope)
//    {
//     case "add":
    
//         $product_id = $_POST['product_id'];
//         $product_qty = $_POST['product_qty'];
//         $user_id = $_SESSION['auth_user']['user_id'];

//         $sql = "INSERT INTO carts (user_id , product_id , product_qty) VALUES ('$user_id' , '$product_id' , '$product_qty')"
//         $sendCart = mysqli_query($con , $sql) ;
//         if ($sendCart){
//             echo 201 ;
//             // http_response_code(201);
//         }
//         else{
//             echo 500 ; 
//             // http_response_code(500);
//         }
//         break ;
//         default :
//         echo 500 ;
//         // http_response_code(500);

//    }
//  }
// }
//    else
//    {
//     echo 401 ;
//     // http_response_code(401);

// }
?>

<!-- <?php 
include_once ('./includes/footer.php');

?> -->
