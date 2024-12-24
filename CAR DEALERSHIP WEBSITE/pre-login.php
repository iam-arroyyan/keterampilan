<!DOCTYPE html>
<html lang="en">
<head>

   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">

   <link rel="icon" href="images/logos.png" type="image/png">

   <!-- BOOTSTRAP CSS -->

   <link rel="stylesheet" href="css/bootstrap.min.css">

   <!-- MAIN CSS -->

   <link rel="stylesheet" href="css/style.css">

   <!-- GOOGLE FONT -->

   <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">

   <!-- FONT AWESOME -->

   <script src="js/all.js"></script>

   <link
   href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
   rel="stylesheet"
   />
 
   <title>Bersaudara Motor</title>

</head>
<body>
   <!-- PRELOADER -->

   <div class="preloader d-flex justify-content-center align-items-center">

      <img src="images/gear.gif" alt="preloader">

   </div>

   <!-- END OF PRELOADER -->


   <!-- NAV -->

   <nav class="navbar navbar-expand-lg px-3" id="navBar">
         <a href="#" class="navbar-brand">
               <img src="images/logos.png" alt="logo">
               <a>BERSAUDARA MOTOR</a>
         </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNav" >

               <span class="navbar-icon">
                  <i class="fas fa-bars"></i>
               </span>

            </button>

               <div class="collapse navbar-collapse" id="myNav">

                  <ul class="navbar-nav mx-auto">
                     <li class="nav-item active">
                        <a href="#navBar" class="nav-link">Home</a>
                         
                     </li>
                     <li class="nav-item ">
                              <a href="#product" class="nav-link">Product</a>
                               
                      </li>
                      <li class="nav-item">
                                 <a href="#location" class="nav-link">Location</a>
                                  
                     </li>
                  </ul>

                  <!-- LOGIN -->
                  <div class="nav-icons d-none d-lg-block">

                     <a href="login.php" class="nav-icon">
                        <i>LOGIN</i>
                     </a>
                  </div>
               </div>        

   </nav>



   <!-- HEADER -->

   <header class="header" id="header">

      <div class="container-fluid">
         <div class="row height-max align-items-center">
            <div class="col col-md-9 ml-auto text-right pr-5">
               <h5 class="title-heading d-inline-block p-2 text-uppercase">the all new</h5>
               <h2 class="text-uppercase my-2 title">NINJA 500 DAN Z500 2024</h2>
               <h3 class="text-uppercase">model name</h3>
               <h6 class="text-capitalize">starts from</h6>
               <h2>Rp. 50.000.000 <a href="" class="title-icon d-inline-block mx-2">
                  <i class="fas fa-play"></i>
               </a></h2>

            </div>

         </div>
      </div>

   </header>
      <!-- PRODUCT -->

      <section class="product py-5" id="product">
         <div class="container">

            <div class="row mb-5">
               <div class="col d-flex-wrap text-uppercase justify-content-center">
                  <h1 class="font-weight-bold align-self-center mx-1">our </h1>
                  <h1 class="section-title--special mx-1">product</h1>
               </div>
             </div>

             <div class="row mb-3">
                <div class="col-10 mx-auto col-md-12 col-xs-4 d-flex justify-content-end">
                   <button class="btn btn-outline-secondary text-uppercase mx-1 filter-btn" data-filter="all">all</button>
                   <button class="btn btn-outline-secondary text-uppercase mx-1 filter-btn" data-filter="american">american</button>
                   <button class="btn btn-outline-secondary text-uppercase mx-1  filter-btn" data-filter="german">german</button>
                </div>
             </div>

             <!-- MOTOR -->

            <div class="row product-container">

               <div class="col 10 mx-auto my-3 col-md-6 col-lg-4">
                  <div class="card car-card">

                     <img src="images/car2.jpeg" class="card-img-top car-img" alt="car">

                     <div class="card-body">
                        <div class="car-info d-flex justify-content-between">

                           <div class="car-text text-uppercase">
                              <h6 class="font-weight-bold">Honda</h6>
                              <h6>Vario 125 CBS ISS 2023</h6>
                           </div>

                           <h5 class="car-value align-self-center py-2 px-3">Rp
                              <span class="car-price">20.000.000</span>
                           </h5>

                        </div>

                     </div>

                     <div class="card-footer text-capitalize d-flex justify-content-between">
                        <p><span><i class="fas fa-motorcycle"></i></span>Matic</p>
                        <p><span><i class="fas fa-history"></i></span>5.000 KM</p>
                        <p><span><i class="fas fa-calendar-alt	"></i></span>2023</p>
                        <p><span><i class="fa fa-paint-brush"></i></span>Putih</p>
                     </div>

                  </div>

               </div>

               <div class="col 10 mx-auto my-3 col-md-6 col-lg-4">
                     <div class="card car-card">
   
                        <img src="images/car2.jpeg" class="card-img-top car-img" alt="car">
   
                        <div class="card-body">
                           <div class="car-info d-flex justify-content-between">
   
                              <div class="car-text text-uppercase">
                                 <h6 class="font-weight-bold">car maker</h6>
                                 <h6>model</h6>
                              </div>
   
                              <h5 class="car-value align-self-center py-2 px-3">$
                                 <span class="car-price">10000</span>
                              </h5>
   
                           </div>
   
                        </div>
   
                        <div class="card-footer text-capitalize d-flex justify-content-between">
                           <p><span><i class="fas fa-motorcycle"></i></span>Matic</p>
                           <p><span><i class="fas fa-history"></i></span>5.000 KM</p>
                           <p><span><i class="fas fa-calendar-alt	"></i></span>2023</p>
                           <p><span><i class="fa fa-paint-brush"></i></span>Putih</p>
                        </div>
   
                     </div>
   
                  </div>
                  <div class="col 10 mx-auto my-3 col-md-6 col-lg-4">
                        <div class="card car-card">
      
                           <img src="images/car2.jpeg" class="card-img-top car-img" alt="car">
      
                           <div class="card-body">
                              <div class="car-info d-flex justify-content-between">
      
                                 <div class="car-text text-uppercase">
                                    <h6 class="font-weight-bold">car maker</h6>
                                    <h6>model</h6>
                                 </div>
      
                                 <h5 class="car-value align-self-center py-2 px-3">$
                                    <span class="car-price">10000</span>
                                 </h5>
      
                              </div>
      
                           </div>
      
                           <div class="card-footer text-capitalize d-flex justify-content-between">
                              <p><span><i class="fas fa-motorcycle"></i></span>Matic</p>
                              <p><span><i class="fas fa-history"></i></span>5.000 KM</p>
                              <p><span><i class="fas fa-calendar-alt	"></i></span>2023</p>
                              <p><span><i class="fa fa-paint-brush"></i></span>Putih</p>
                           </div>
      
                        </div>
      
                     </div>
                     <div class="col 10 mx-auto my-3 col-md-6 col-lg-4">
                           <div class="card car-card">
         
                              <img src="images/car2.jpeg" class="card-img-top car-img" alt="car">
         
                              <div class="card-body">
                                 <div class="car-info d-flex justify-content-between">
         
                                    <div class="car-text text-uppercase">
                                       <h6 class="font-weight-bold">car maker</h6>
                                       <h6>model</h6>
                                    </div>
         
                                    <h5 class="car-value align-self-center py-2 px-3">$
                                       <span class="car-price">10000</span>
                                    </h5>
         
                                 </div>
         
                              </div>
         
                              <div class="card-footer text-capitalize d-flex justify-content-between">
                                 <p><span><i class="fas fa-motorcycle"></i></span>Matic</p>
                                 <p><span><i class="fas fa-history"></i></span>5.000 KM</p>
                                 <p><span><i class="fas fa-calendar-alt	"></i></span>2023</p>
                                 <p><span><i class="fa fa-paint-brush"></i></span>Putih</p>
                              </div>
         
                           </div>
         
                        </div>
                        <div class="col 10 mx-auto my-3 col-md-6 col-lg-4">
                              <div class="card car-card">
            
                                 <img src="images/car2.jpeg" class="card-img-top car-img" alt="car">
            
                                 <div class="card-body">
                                    <div class="car-info d-flex justify-content-between">
            
                                       <div class="car-text text-uppercase">
                                          <h6 class="font-weight-bold">car maker</h6>
                                          <h6>model</h6>
                                       </div>
            
                                       <h5 class="car-value align-self-center py-2 px-3">$
                                          <span class="car-price">10000</span>
                                       </h5>
            
                                    </div>
            
                                 </div>
            
                                 <div class="card-footer text-capitalize d-flex justify-content-between">
                                    <p><span><i class="fas fa-motorcycle"></i></span>Matic</p>
                                    <p><span><i class="fas fa-history"></i></span>5.000 KM</p>
                                    <p><span><i class="fas fa-calendar-alt	"></i></span>2023</p>
                                    <p><span><i class="fa fa-paint-brush"></i></span>Putih</p>
                                 </div>
            
                              </div>
            
                           </div>
                           <div class="col 10 mx-auto my-3 col-md-6 col-lg-4">
                                 <div class="card car-card">
               
                                    <img src="images/car2.jpeg" class="card-img-top car-img" alt="car">
               
                                    <div class="card-body">
                                       <div class="car-info d-flex justify-content-between">
               
                                          <div class="car-text text-uppercase">
                                             <h6 class="font-weight-bold">car maker</h6>
                                             <h6>model</h6>
                                          </div>
               
                                          <h5 class="car-value align-self-center py-2 px-3">$
                                             <span class="car-price">10000</span>
                                          </h5>
               
                                       </div>
               
                                    </div>
               
                                    <div class="card-footer text-capitalize d-flex justify-content-between">
                                       <p><span><i class="fas fa-motorcycle"></i></span>Matic</p>
                                       <p><span><i class="fas fa-history"></i></span>5.000 KM</p>
                                       <p><span><i class="fas fa-calendar-alt	"></i></span>2023</p>
                                       <p><span><i class="fa fa-paint-brush"></i></span>Putih</p>
                                    </div>
               
                                 </div>
               
                              </div>


             </div>

         </div>

      </section>

         <!-- MAPS -->

         <section class="location py-5" id="location">
         <div class="row mb-5">
            <div class="col d-flex-wrap text-uppercase justify-content-center">
               <h1 class="font-weight-bold align-self-center mx-1">our </h1>
               <h1 class="section-title--special mx-1">Location</h1>
            </div>
          </div>
         <div class="map-container" id="maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.30427504609167!2d112.7372555303476!3d-7.368644228251636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e56b48688b63%3A0x17aea2c0aa75c47a!2sUD.%20Dv%20Bersaudara%20Motor!5e0!3m2!1sid!2sid!4v1734413195308!5m2!1sid!2sid" 
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>          

         <!-- FOOTER -->

      <footer class="footer py-4">

         <div class="footer-icon d-flex justify-content-around">

            <a href="#" class="footer-icon">
               <i class="fab fa-facebook"></i>
            </a>
            
            <a href="#" class="footer-icon">
               <i class="fab fa-twitter"></i>
            </a>
            
            <a href="#" class="footer-icon">
               <i class="fab fa-instagram"></i>
            </a>
            
            <a href="#" class="footer-icon">
               <i class="fab fa-linkedin"></i>
            </a>
            
            <a href="#" class="footer-icon">
               <i class="fab fa-google-plus"></i>
            </a>
         </div>

      </footer>

   <!-- JQUERY -->

   <script src="js/jquery.min.js"></script>

   <!-- BOOTSTRAP JS -->

   <script src="js/bootstrap.min.js"></script>

   <!-- MAIN JS -->

   <script src="js/script.js"></script>



</body>
</html>