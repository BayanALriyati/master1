<?php 
include('includes/header.php');
// include('./middleware/adminMiddleware.php');

 ?>
  <div class="py-5"> 
    <div class="container">
        <div class="row">
            <div class="col-md-12">
      <?php
         if (isset($_SESSION ['message'])){
      ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
           <strong>Hallo</strong> <?= $_SESSION ['message']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
           <?php  
              unset($_SESSION ['message']);
              }
            ?>
          </div>
        </div>
     </div>
   </div>
<?php include('./includes/footer.php') ?>