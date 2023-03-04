<?php 
include_once('includes/header.php');
include_once('functions/userFunctions.php');



 ?>
  <!-- <div> 
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
   </div> -->

<div class="heading-video">
    <div>
    <h1 class="head-h1">The Best GIFT</h1>
    <p class="head-p">Your gift is on us and the visit is on you.</p>
    <a href="./yourGift.html" class="btnCart" target="_blank">Discover More</a>
    </div>
 
    <video class="video-bg" autoplay muted loop>
    <source src="./assets/images/videos.mp4" type="video/mp4">
    </video>

</div>

<!-- category section starts  -->

<section class="category" id="category">
              
   <h1 class="heading">Our Category</h1>

   <div class="box-container">
   <?php
                    
                    $category = getAllActive("category");
                    // $sql="SELECT *FROM category";
                    // $category=mysqli_query($con,$sql);
                    if(mysqli_num_rows($category)> 0 )
                    {
                      foreach($category as $item)
                    {
                ?>

      <div class="box">
        <a href="gifts.php?category=<?= $item['slug']?>">
         <img src="./uploads/<?= $item['image']?>" alt="">
         <div class="content">
        <h3>Choose <?= $item['categoryName']?></h3>
      </div>
    </a>
    </div>
     
     <?php
                          }
                        }
                        else
                        {
                        
                          redirect("index.php","Don't found");
                          // $_SESSION ['message']="Don't found";
                          // header('Location: ../category.php');
                        }
                    ?>
   </div>
  
</section>

<!-- category section ends  -->


<!-- header section ends -->
<?php include('includes/footer.php') ?>
