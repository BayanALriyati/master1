   <!-- Remove the container if you want to extend the Footer to full width. -->
   <div class="container-fluid my-5">
   
       <footer class="bg-danger-subtle text-center text-lg-start text-white">
         <!-- Grid container -->
         <div class="container p-4">
           <!--Grid row-->
           <div class="row my-4">
             <!--Grid column-->
             <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
     
               <div class="rounded-circle bg-white shadow-1-strong d-flex align-items-center justify-content-center mb-4 mx-auto" style="width: 100px; height: 100px;">
                   <img src="assets/images/logo-color.png" alt="logo" style="width: 100px; height: 100px;" loading="lazy" />
               </div>
     
               <p class="text-center text-black fs-1">The Best Gifts</p>
       
             </div>
             <!--Grid column-->
     
             <!--Grid column-->
             <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
               <h5 class="text-uppercase text-black mb-4 fs-2">Quick links</h5>
     
               <ul class="list-unstyled">
                 <li class="mb-2">
                   <a href="./index.html" class="text-black fs-3"><i class="fas fa-home pe-3 fs-3"></i>Home</a>
                 </li>
                 <li class="mb-2">
                   <a href="./yourGift.html" class="text-black fs-3"><i class="fas fa-gift pe-3 fs-3"></i>Your Gift</a>
                 </li>
                 <li class="mb-2">
                   <a href="./aboutUs.html" class="text-black fs-3"><i class="fas fa-question pe-3 fs-3"></i>About US</a>
                 </li>
                 <li class="mb-2">
                   <a href="./contactUs.html" class="text-black fs-3"><i class="fas fa-address-card pe-3 fs-3"></i>Contact Us</a>
                 </li>
               </ul>
             </div>
             <!--Grid column-->
             
             <!--Grid column-->
             <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
               <h5 class="text-uppercase text-black mb-4 fs-2">Our Social</h5>
     
               <ul class="list-unstyled">
                 <li class="mb-2">
                  <a class="text-black px-2 fs-3" href="https://www.facebook.com/" target="_blank">
                    <i class="fab fa-twitter pe-3 fs-3"></i>facebook
                  </a>
                 </li>
                 <li class="mb-2">
                  <a class="text-black px-2 fs-3" href="https://twitter.com/" target="_blank">
                    <i class="fab fa-twitter pe-3 fs-3"></i>twitter
                  </a>
                 </li>
                 <li class="mb-2">
                  <a class="text-black px-2 fs-3" href="https://www.instagram.com/" target="_blank">
                    <i class="fab fa-instagram pe-3 fs-3"></i>instagram
                  </a>
                 </li>
                 <li class="mb-2">
                  <a class="text-black ps-2 fs-3" href="https://web.whatsapp.com/" target="_blank">
                    <i class="fab fa-whatsapp pe-3 fs-3"></i>whatsapp
                  </a>
                 </li>
               </ul>
             </div>
             <!--Grid column-->
             
             
             
             
             <!--Grid column-->
             <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
               <h5 class="text-uppercase text-black mb-4 fs-2">Contact us</h5>
     
               <ul class="list-unstyled">
                 <li>
                   <p class="text-black fs-3"><i class="fas fa-map-marker-alt pe-3 fs-3"></i>Aqaba-Jordan</p>
                 </li>
                 <li>
                   <p class="text-black fs-3"><i class="fas fa-phone pe-3  fs-3"></i>0786324604</p>
                 </li>
                 <li>
                   <p class="text-black fs-3"><i class="fas fa-envelope pe-3 fs-3"></i>gift@gmail.com</p>
                 </li>
               </ul>
             </div>
             <!--Grid column-->
           </div>
           <!--Grid row-->
         </div>
         <!-- Grid container -->
     
         <!-- Copyright -->
         <div class="text-center p-3 fs-3" style="background-color:#621147">
           © 2020 Copyright:
           <a class="text-white fs-3" href="https://mdbootstrap.com/">THE BEST GIFT</a>
         </div>
         <!-- Copyright -->
       </footer>
     
     </div>
     <!-- End of .container -->
   
   <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
   
   <script src="../assets/js/script.js"></script>
   <script src="../assets/js/silder.js"></script>
    <!-- Alertify Js -->
   <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
   <script>
     <?php 
     if (isset($_SESSION ['message']))
     { ?>
         alertify.set('notifier' , 'position' , 'top-center');
         alertify.success('<?= $_SESSION ['message']?>');
     <?php 
         unset($_SESSION ['message']);
     } 
     ?>
  </script>

   </body>
   </html>
