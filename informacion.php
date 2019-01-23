<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Seguimiento Digital | CALENDARIO</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon -->    
    <link rel="shortcut icon" type="image/x-icon" href="img/logo/favicon.png">

    <!-- all css here -->

    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.transitions.css">

    <!-- font-awesome css -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/icon.css">
    <link rel="stylesheet" href="css/flaticon.css">
        <!-- magnific css -->
        <link rel="stylesheet" href="css/zebra_datepicker.css">
    <!-- magnific css -->
        <link rel="stylesheet" href="css/magnific.min.css">
    <!-- venobox css -->
    <link rel="stylesheet" href="css/venobox.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- modernizr css -->
    <script src="js/marco/modernizr-2.8.3.min.js"></script>
        <style type="text/css">
            .calendario:hover{
              box-shadow: 0 8px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.2);
              cursor: pointer;
            }
            .inps {
              width: 100%;
              padding: 0 12px;
              border: solid 1px #b1b1b1;
              height: 48px;
              margin-bottom: 15px;
            }
            .bot{
                  border: 2px solid #4db7fe;
    color: #fff;
    cursor: pointer;
    display: inline-block;
    font-size: 14px;
    font-weight: 700;
    margin-top: 20px;
    padding: 10px 22px;
    text-align: center;
    text-transform: uppercase;
    transition: all 0.4s ease 0s;
    z-index: 222;
    background: #4db7fe;
    border-radius: 3px;
    width: 20%;
            }
        </style>
  </head>
    <body>

    <!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

        <div id="preloader"></div>
        <!-- header -->
        <?php 
            include("mainMenu.php");
        ?>
      <section class="page-breadcrumb">
         <div class="page-section-restaurant">
            <div class="container">
               <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                     <div class="breadcrumb text-center">
                        <div class="section-titleBar white-headline text-center">
                           <h3>CALENDARIO</h3>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="nav-path">
            <div class="container">
               <div class="row">
                  <ul>
                     <li class="home-bread">INICIO</li>
                     <li>CALENDARIO</li>
                  </ul>
               </div>
            </div>
         </div>
      </section>
      <!-- End Slider section -->

        <section class="offer-section sec-padding">
            <div class="container" style="height: 800px;">
              <div class="row col-md-12">
                <div class="col-md-6">
                  <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                      <input type="text" class="inps" id="nombre" placeholder="Nombre">
                      </div>
                  </div>
                  <div class="col-md-6">
                    <?php 
                      if($_GET["f2"] == 0){
                      ?>
                      <div class="form-group">
                      <input type="fecha" class="inps" id="fecha" value="<?php echo $_GET['f1'] ?>" disabled >
                      </div>
                      <?php
                      }else{
                      ?>
                      <div class="form-group">
                        <select class="inps" id="sel1">
                          <option>Selecciona Fechas</option>
                          <option><?php echo $_GET['f1'] ?></option>
                          <option><?php echo $_GET['f2'] ?></option>
                        </select>
                      </div>
                      <?php
                      }
                      ?>
                  </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                      <input type="text" class="inps" id="empresa" placeholder="Empresa">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                      <input type="text" class="inps" id="puesto" placeholder="Puesto">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                      <input type="email" class="inps" id="correo" placeholder="Correo">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                      <textarea class="inps" data-delay="500" rows="15" id="mensaje" placeholder="Mensaje" style="height: 150px;"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row" style="text-align: right;">
                    <div class="col-md-12">
                      <div class="form-group">
                      <button class="bot">Enviar</button>
                      </div>
                    </div>
                  </div> 
                </div>
                <div class="col-md-6">
                  <h3>INFORMACION</h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum semper eget ex sit amet porta. Pellentesque congue maximus suscipit. Phasellus aliquet mi at enim porta, a elementum sem volutpat. Vestibulum vehicula rutrum turpis id aliquam. Morbi varius, nisl in laoreet egestas, enim leo varius sapien, ut porttitor sapien nunc et sapien. Nulla eu dolor et diam sagittis egestas. Mauris in lorem risus.
                  </p>
                </div>
              </div>
            </div>
        </section>        
        <!-- header end -->
        <!-- Main menu -->
        <!-- MAin menu ends -->
        <!-- Start breadcumb section -->
        <!-- <section class="page-breadcrumb">
            <div class="page-section">
                <div class="breadcumb-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcrumb text-center">
                                <div class="section-titleBar white-headline text-center">
                                    <h3>Offers & Deals</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="nav-path">
                <div class="container">
                    <div class="row">
                        <ul>
                            <li class="home-bread">INICIO</li>
                            <li>CALENDARIO</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- End breadcumb section -->

        <!-- Start single room section -->
        <!-- <section class="offer-section sec-padding">
            <div class="container">
                <div class="row">
                   <div class="col-md-6 col-sm-6">
                       <div class="tour">
                           <a href="tour-place.html" class="tour-img">
                               <img src="img/tours/tour-1.jpg" alt="tour-img">
                               <p class="price">
                                   <span>$1500</span>
                                   <small>/ 3 Days</small>
                               </p>
                           </a>
                           <div class="desc">
                               <h4>Family Tour in Greece</h4>
                               <p>Our development opt in to the projects they genuinely want to work on, committing wholeheartedly to delivering.</p>
                               <div class="rating">
                                   <i class="fa fa-star voted"></i>
                                   <i class="fa fa-star voted"></i>
                                   <i class="fa fa-star voted"></i>
                                   <i class="fa fa-star"></i>
                                   <i class="fa fa-star"></i>
                                   <small>(145)</small>
                               </div>
                                    <a class="thm-btn" href="#">BOOK NOW</a>
                           </div>
                       </div>
                   </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="tour">
                            <a href="tour-place.html" class="tour-img">
                                <img src="img/tours/tour-2.jpg" alt="tour-img">
                                <p class="price">
                                    <span>$1500</span>
                                    <small>/ 3 Days</small>
                                </p>
                            </a>
                            <div class="desc">
                                <h4>Family Tour in Greece</h4>
                                <p>Our development opt in to the projects they genuinely want to work on, committing wholeheartedly to delivering.</p>
                                <div class="rating">
                                    <i class="fa fa-star voted"></i>
                                    <i class="fa fa-star voted"></i>
                                    <i class="fa fa-star voted"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <small>(145)</small>
                                </div>
                                <a class="thm-btn" href="#">BOOK NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="tour">
                            <a href="tour-place.html" class="tour-img">
                                <img src="img/tours/tour-3.jpg" alt="tour-img">
                                <p class="price">
                                    <span>$1500</span>
                                    <small>/ 3 Days</small>
                                </p>
                            </a>
                            <div class="desc">
                                <h4>Family Tour in Greece</h4>
                                <p>Our development opt in to the projects they genuinely want to work on, committing wholeheartedly to delivering.</p>
                                <div class="rating">
                                    <i class="fa fa-star voted"></i>
                                    <i class="fa fa-star voted"></i>
                                    <i class="fa fa-star voted"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <small>(145)</small>
                                </div>
                                <a class="thm-btn" href="#">BOOK NOW</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="tour">
                            <a href="tour-place.html" class="tour-img">
                                <img src="img/tours/tour-4.jpg" alt="tour-img">
                                <p class="price">
                                    <span>$1500</span>
                                    <small>/ 3 Days</small>
                                </p>
                            </a>
                            <div class="desc">
                                <h4>Family Tour in Greece</h4>
                                <p>Our development opt in to the projects they genuinely want to work on, committing wholeheartedly to delivering.</p>
                                <div class="rating">
                                    <i class="fa fa-star voted"></i>
                                    <i class="fa fa-star voted"></i>
                                    <i class="fa fa-star voted"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <small>(145)</small>
                                </div>
                                <a class="thm-btn" href="#">BOOK NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="tour">
                            <a href="tour-place.html" class="tour-img">
                                <img src="img/tours/tour-1.jpg" alt="tour-img">
                                <p class="price">
                                    <span>$1500</span>
                                    <small>/ 3 Days</small>
                                </p>
                            </a>
                            <div class="desc">
                                <h4>Family Tour in Greece</h4>
                                <p>Our development opt in to the projects they genuinely want to work on, committing wholeheartedly to delivering.</p>
                                <div class="rating">
                                    <i class="fa fa-star voted"></i>
                                    <i class="fa fa-star voted"></i>
                                    <i class="fa fa-star voted"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <small>(145)</small>
                                </div>
                                <a class="thm-btn" href="#">BOOK NOW</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="tour">
                            <a href="tour-place.html" class="tour-img">
                                <img src="img/tours/tour-2.jpg" alt="tour-img">
                                <p class="price">
                                    <span>$1500</span>
                                    <small>/ 3 Days</small>
                                </p>
                            </a>
                            <div class="desc">
                                <h4>Family Tour in Greece</h4>
                                <p>Our development opt in to the projects they genuinely want to work on, committing wholeheartedly to delivering.</p>
                                <div class="rating">
                                    <i class="fa fa-star voted"></i>
                                    <i class="fa fa-star voted"></i>
                                    <i class="fa fa-star voted"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <small>(145)</small>
                                </div>
                                <a class="thm-btn" href="#">BOOK NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- End single room section -->



        <?php 
       include("footer.php");
       ?>
    
    <!-- all js files -->

    <!-- jquery latest version -->
    <script src="js/marco/jquery-1.12.4.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- owl.carousel js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Counter js -->
    <script src="js/jquery.counterup.min.js"></script>
    <!-- waypoint js -->
    <script src="js/waypoints.js"></script>
    <!-- isotope js -->
        <script src="js/isotope.pkgd.min.js"></script>
        <!-- stellar js -->
        <script src="js/jquery.stellar.min.js"></script>
        <!-- stellar js -->
        <script src="js/imagelightbox.min.js"></script>
    <!-- magnific js -->
        <script src="js/magnific.min.js"></script>
    <!-- venobox js -->
    <script src="js/venobox.min.js"></script>
        <!-- meanmenu js -->
        <script src="js/jquery.meanmenu.js"></script>
        <!-- tabs js -->
        <script src="js/tabs.js"></script>
    <!-- Form validator js -->
    <script src="js/form-validator.min.js"></script>
    <!-- plugins js -->
    <script src="js/plugins.js"></script>
        <!-- datapicker js -->
        <script src="js/zebra_datepicker.min.js"></script>
    <!-- main js -->
    <script src="js/main.js"></script>
  </body>
</html>