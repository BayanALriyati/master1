<?php

 session_start();
 include ('../config/connect.php');

 if(isset($_POST['addCategory_btn'])){
   
    $name = $_POST['name'];
    $description = $_POST['description'];
    // $image = $_FILES['image']['name'];
    // $path = "../Uploads";

    // $image_exe = pathinfo($image , PATHINFO_EXTENSION);
    // $filename = time().'.'.$image_exe;
    $image = $_FILES['image']['name'];
    $image_size = $_FILES['image']['size'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = '../Uploads/'.$image;


    $select_category =("SELECT name FROM `category` WHERE name='$name'");
    $select_category_run=mysqli_query ($con , $select_category);
 
    if(mysqli_num_rows($select_category_run)> 0)
     {
            $_SESSION ['message']="category name already exist!";
            header('Location: addCategory.php');
     }
     else
      {

    //Insert Category 
       $category_query = "INSERT INTO category (name , description , image) VALUE ('$name','$description','$image')";
       $category_query_run=mysqli_query($con,$category_query);
   
    if($category_query_run){
        move_uploaded_file($image_tmp_name , $image_folder);
        $_SESSION ['message'] = "Category Added Successfully";
        header('Location: addCategory.php');
    }
    else
    {
        $_SESSION ['message'] = "Something went wrong";
        header('Location: addCategory.php');
    }
}

 }




?>