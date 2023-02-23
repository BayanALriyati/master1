<?php
 
 include_once ('../config/connect.php');

function categoryAll($table){
    global $con;
    $sql="SELECT *FROM $table";
    return $sql_run=mysqli_query($con,$sql);
    // $sql_run->fetch_all(PDO::FETCH_ASSOC);
}

function redirect($url,$message)
{
    $_SESSION ['message'] = $message;
    header('Location: '.$url);
    exit();
}

?>