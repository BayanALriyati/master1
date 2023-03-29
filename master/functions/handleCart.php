<?php
// session_start();
include_once ('../config/connect.php');
include_once ('../functions/authCode.php');

if(isset($_POST['addTOcart'])){
    if(isset($_SESSION['auth']))
  {
//     if(isset($_SESSION['auth_user']))
// {
   $user_id = $_SESSION['auth_user']['user_id'];
   $productId = $_POST['product_id'];
   $product_name = $_POST['name'];
   $product_price = $_POST['price'];
   $product_image = $_POST['image'];
   $product_qty = $_POST['qty'];
   $send_to_cart = "INSERT INTO cart (user_id , product_id , product_name , product_price , product_image , product_qty)
   VALUES ('$user_id', '$productId' , '$product_name' , '$product_price','$product_image' , '$product_qty')";
// $send_to_cart = "INSERT INTO carts (user_id , product_id , product_qty)
// VALUES ('$user_id', '$productId' ,'$product_qty')";
   $send_to_cart = mysqli_query($con , $send_to_cart) ;
   if($insert_query_run){
    // move_uploaded_file($image_tmp_name , $image_folder);
      $_SESSION ['message'] = "Product Added Successfully";
      header('Location: ../product_view.php');
 }
 else
 {
      $_SESSION ['message'] = "Something went wrong";
      header('Location: ../index.php');
 }
}
   else
   {
       $_SESSION ['message']="Don't found";
       header('Location: ../login.php');
    // echo 401 ;
    // http_response_code(401);

// }
}
}

?>

<?php 
include_once ('./includes/footer.php');

?>
