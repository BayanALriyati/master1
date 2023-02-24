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
else 
   if(isset($_POST['editCategory_btn'])){
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
         if(file_exists("../uploads".$old_image))
         {
            unlink("../uploads".$old_image);
         }
       }
        redirect("../admin/category.php" , "Category Update Successfully");
     }
} 

else 
   if(isset($_POST['delateCategory_btn'])){
    // $id = mysqli_real_escape_string($con, $_POST['id']);
    //  $id = mysqli_real_escape_string($con , $_post['id']);
    $id =  $_POST['id'];

     $delate_query = " DELETE FROM `category` WHERE id = '$id' ";
     $delate_query_run = mysqli_query($con , $delate_query);

     if($delate_query_run)
     {
        redirect("../admin/category.php" , "Category Deleted Successfully");
     }
     else{
        redirect("../admin/category.php" , "Something went wrong");
     }
}

?>