<?php
 
 include_once ('../config/connect.php');

// read data from table
function getAll($table){
    global $con;
    $sql="SELECT *FROM $table";
    return $sql_run=mysqli_query($con,$sql);
}

// read  data from table by get id
function getById($table , $id){
    global $con;
    $sql="SELECT *FROM $table WHERE id='$id'";
    return $sql_run=mysqli_query($con,$sql);
}

function redirect($url,$message)
{
    $_SESSION ['message'] = $message;
    header('Location: ' .$url);
    exit();
}

?>