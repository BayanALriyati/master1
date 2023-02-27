<?php

 session_start();
 include ('../config/connect.php');
 include_once ('../functions/myfunctions.php') ;


if(isset($_POST['addCategory_btn'])){
   
    $name = $_POST['name'];
    $description = $_POST['description'];
    $image = $_FILES['image']['name'];
    $image_size = $_FILES['image']['size'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = '../Uploads/'.$image;

    //  The class name already exists ?
    $select_category =("SELECT * FROM `category` WHERE name='$name'");
    $select_category_run=mysqli_query ($con , $select_category);
 
    if(mysqli_num_rows($select_category_run)> 0)
     {
            $_SESSION ['message']="category name already exist!";
            header('Location: ../admin/addCategory.php');
     }
     else
      {

    //Insert Category 
       $insert_query = "INSERT INTO category (name , description , image) VALUE ('$name','$description','$image')";
       $insert_query_run=mysqli_query($con,$insert_query);
   
    if($insert_query_run){
        move_uploaded_file($image_tmp_name , $image_folder);
        $_SESSION ['message'] = "Category Added Successfully";
        header('Location: ../admin/category.php');
     }
     else
     {
         $_SESSION ['message'] = "Something went wrong";
         header('Location: ../admin/addCategory.php');
     }
  }

}

else if(isset($_POST['editCategory_btn'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $new_image = $_FILES['image']['name'];
    $image_size = $_FILES['image']['size'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = '../Uploads/'.$new_image; 
    $old_image = $_POST['image'];  

    if($new_image != ""){
       $update_image = $new_image ;
    }
    else
    {
        $update_image = $old_image ;
    }
 
 
    $update_query = "UPDATE `category` SET name='$name' , description='$name' , image='$update_image' WHERE id='$id'" ;
    $update_query_run = mysqli_query($con , $update_query);

     if ($update_query_run)
     {
        if($_FILES['image']['name'] != "")
       {
         move_uploaded_file($image_tmp_name , $image_folder);
         if(file_exists("../uploads/".$old_image))
         {
            unlink("../uploads/".$old_image);
         }
       }
        redirect("../admin/category.php" , "Category Update Successfully");
     }
} 

else if(isset($_POST['delateCategory_btn'])){
    // $id = mysqli_real_escape_string($con, $_POST['id']);
    //  $id = mysqli_real_escape_string($con , $_post['id']);
     $id =  $_POST['id'];
     $category_query = "SELECT * FROM category WHERE id= '$id' " ;
     $category_query_run = mysqli_query($con , $category_query) ;
     $category_data = mysqli_fetch_array($category_query_run) ;
     $image = $category_data['image'] ;
   //   echo "$image" ;

     $delate_query = " DELETE FROM `category` WHERE id = '$id' ";
     $delate_query_run = mysqli_query($con , $delate_query);

     if($delate_query_run)
     {
        if(file_exists("../uploads/".$image))
        {
           unlink("../uploads/".$image);
        }
        redirect("../admin/category.php" , "Category Deleted Successfully");
     }
     else{
        redirect("../admin/category.php" , "Something went wrong");
     }
}

else if(isset($_POST['addProduct_btn'])){

   $category_name = $_POST['category'];
   $name = $_POST['name'];
   $description = $_POST['description'];
   $price = $_POST['price'];
   $quantity = $_POST['quantity'];

   //       Image Main 
   $imageMain = $_FILES['imageMain']['name'];
   $imageMain_size = $_FILES['imageMain']['size'];
   $imageMain_tmp_name = $_FILES['imageMain']['tmp_name'];
   $imageMain_folder = '../Uploads/'.$imageMain;
   //      Image Thumbnail 1
   $thumbnail_1 = $_FILES['thumbnail_1']['name'];
   $thumbnail_1_size = $_FILES['thumbnail_1']['size'];
   $thumbnail_1_tmp_name = $_FILES['thumbnail_1']['tmp_name'];
   $thumbnail_1_folder = '../Uploads/'.$thumbnail_1;
   //      Image Thumbnail 2
   $thumbnail_2 = $_FILES['thumbnail_2']['name'];
   $thumbnail_2_size = $_FILES['thumbnail_2']['size'];
   $thumbnail_2_tmp_name = $_FILES['thumbnail_2']['tmp_name'];
   $thumbnail_2_folder = '../Uploads/'.$thumbnail_2;
   //      Image Thumbnail 3
   $thumbnail_3 = $_FILES['thumbnail_3']['name'];
   $thumbnail_3_size = $_FILES['thumbnail_3']['size'];
   $thumbnail_3_tmp_name = $_FILES['thumbnail_3']['tmp_name'];
   $thumbnail_3_folder = '../Uploads/'.$thumbnail_3;

   if($name != "" && $category_name != "" && $description != "" && $price != "" && $quantity && $price != "" && 
     $thumbnail_1 != "")
   {
     //Insert Products 
     $insert_query = "INSERT INTO product (category_id , name , description , price , quantity , imageMain , 
     thumbnail_1 , thumbnail_2 , thumbnail_3) VALUE ('$category_id' , '$name' , '$description' , '$price' , 
     '$quantity' , '$imageMain' , '$thumbnail_1' , '$thumbnail_2' ,'$thumbnail_3')";
     $insert_query_run=mysqli_query($con,$insert_query);
 
     if($insert_query_run){
         move_uploaded_file($imageMain_tmp_name , $imageMain_folder);
         move_uploaded_file($thumbnail_1_tmp_name , $thumbnail_1_folder);
         move_uploaded_file($thumbnail_2_tmp_name , $thumbnail_2_folder);
         move_uploaded_file($thumbnail_3_tmp_name , $thumbnail_3_folder);

         $_SESSION ['message'] = "Product Added Successfully";
         header('Location: ../admin/Product.php');
      }
      else
      {
          $_SESSION ['message'] = "Something went wrong";
          header('Location: ../admin/addProduct.php');
      }
   }
}

?>