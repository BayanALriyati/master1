<?php
include_once ('./includes/header.php');
include_once  ('./config/connect.php');
// include_once('./includes/navbar.php') ;

// session_start();
// if(isset ($_SESSION ['auth'])){

//     unset( $_SESSION ['auth'] );
//     unset($_SESSION ['auth_user'] );
    // session_start();
    session_unset();
    session_destroy();
    $_SESSION ['message']="Logged Out Successfully";
    (header("Location: index.php"));
    // exit;

// }

// header('location: /index.php');
// (header("Location: index.php"));
// exit;



?>

<?php
require('includes/footer.php')
?>