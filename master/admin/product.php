<?php 
include_once ('includes/header.php');
include_once ('../middleware/adminMiddleware.php');
include_once ('../config/connect.php') ;
// include_once ('../functions/code.php') ;

?>



     <!-- CONTENT -->
	<section id="content">
		<!-- MAIN -->
		<main>
		<div class="head-title">
				<div class="left">
					<h1>Product</h1>
				</div>
				<a href="addProduct.php" class="btn-download">
				<i class="fa-solid fa-plus"></i>
				<span class="text">Add New Product</span>
				</a>
			</div>
		<!-- _____________ -->

        <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Product</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Category</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Add sale</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Remove Sale</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                         
                        // $category = getAll("category");

                        // if(mysqli_num_rows($category)> 0 )
                        // {
                        //   foreach($category as $item)
                        //   {
                        //     ?>
                            <tr></tr>
                            <td>
                              <div class="d-flex px-2 py-1">
                                <div>
                                  <!-- ../uploads/<?= $item['image']?> -->
                                  <img src="" class="avatar avatar-sm me-3 border-radius-lg" alt="image">
                                </div>
                                <div class="d-flex flex-column justify-content-center">
                                <!-- <?= $item['name']?> -->
                                  <h6 class="mb-0 text-sm"></h6>
                                  <!-- <?= $item['description']?> -->
                                  <p class="text-xs text-secondary mb-0"></p>
                                </div>
                              </div>
                            </td>
                            <td class="align-center text-center text-sm">
                              <a href=""><i class="fa-solid fa-square-plus"></i></a>
                            </td>
                            <td class="align-center text-center text-sm">
                              <a href=""><i class="fa-solid fa-square-minus delete1"></i></a>
                            </td>
                            <td class="align-center text-center text-sm">
                            <!-- editCategory.php?id=<?= $item['id']?> -->
                                <button><a href=""><i class="fa-solid fa-pen-to-square fa-solid"></i></a></button>
                                <form action="../functions/code.php" method="POST">
                                <!-- <?= $item['id']?> -->
                                 <input type="hidden" name="id" value=""/>
                                 <!-- <a href="../functions/code.php?delete=<?=$item['id']; ?>"><i class="fa-solid fa-trash delete1"></i></a> -->
                                <button type="submit" name="delateCategory_btn"><i class="fa-solid fa-trash delete1"></i></button>
                                </form>
                            </td>
                          </tr>
                      <?php
                    //       }
                    //     }
                    //     else
                    //     {
                        
                    //       // redirect("../category.php","Don't found");
                    //       $_SESSION ['message']="Don't found";
                    //       // header('Location: ../category.php');
                    //     }
                    // ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
		</main>
	</section>
	<!-- CONTENT -->

<?php
  include ('./includes/footer.php');
?>
