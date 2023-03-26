<?php 
include_once('includes/header.php');
include_once('functions/userFunctions.php');
?>
<?php 

if (isset($_GET['product'])){
    $product_slug = $_GET['product'];
    $product_data = getSlugActive("product" , $product_slug);
    $product = mysqli_fetch_array($product_data);
    if($product){
        // $category_id = $category['category_id'];
        ?>
        
<section class="section product-detail">
    <div class="details container product-data">
        
        <div class="left">
            <div class="main">
                <img src="./uploads/<?= $product['imageMain']?>" alt="Image Main" id="ProductImg" />
            </div>
        <div class="thumbnails">
            <div class="thumbnail">
                <img src="./uploads/<?= $product['imageMain']?>" alt="Image Main" class="small-img"/>
            </div>
            <div class="thumbnail">
                <img src="./uploads/<?= $product['thumbnail_1']?>" alt="Thumbnail" class="small-img"/>
            </div>
            <div class="thumbnail">
                <img src="./uploads/<?= $product['thumbnail_2']?>" alt="Thumbnail" class="small-img"/>
            </div>
            <div class="thumbnail">
                <img src="./uploads/<?= $product['thumbnail_3']?>" alt="Thumbnail" class="small-img"/>
            </div>
        </div>
        </div>
        <div class="right">
        <h1><?= $product['productName']?></h1>
        <?php if ($product['is_discount'] == 1){ ?>

<div class="price">JD <?= $product['price_discount']?> <span>JD<?= $product['price']?></span> </div>
<?php } else { ?>
<div class="price"> JD<?= $product['price']?></div> <?php } ?> 
        <!-- <div class="price">JD <?= $product['price_discount']?> <span>JD<?= $product['price']?></span> </div> -->

        <!-- <div class="price"><?= $product['price_discount']?>JOD<span><?= $product['price']?>JOD</span> </div> -->

        <form class="form-view">  
             
         <div class="input-group mb-3">
            <buton type="button" class="input-group-text addCart decrement-btn">-</buton>
            <input type="text" class="form-control input-qty" value="1" disabled>
            <buton type="button" class="input-group-text addCart increment-btn">+</buton>
         </div>

            <!-- <input type="number" placeholder="1" /> -->
            <button href="./yourCart.html" class="addCart addCartBtn"><i class="fas fa-shopping-cart"></i>Add To Cart</button>
            <button href="./yourCart.html" class="addCart" class="fas fa-heart"><i class="fas fa-heart"></i>Add To Favorite</button>

        </form>
        <!-- <form class="form-view"> -->
            <p><label><?= $product['description']?></label></p>
            <!-- <textarea id="letter" class="letter" name="letter" rows="4" cols="50">Write the letter here</textarea> -->
            <br>
            <!-- <input type="submit" value="Add" class="add"> -->
            <!-- </form> -->
        </div>
    </div>
</section>
    <?php
        }

        else
        {
            echo "Don't found" ;

        }

}
    else{
        echo "Something Went Wrong";
    }

?>



<?php include('includes/footer.php') ?>
