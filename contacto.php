<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>CCADE | Contacto</title>
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
	</head>
		<body>

		<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

        <div id="preloader"></div>
         <!-- header -->
        <!-- header end -->
       <!-- Main menu -->
        <?php 
            include("mainMenu.php");
        ?>
        <!-- MAin menu ends -->
        <!-- Start breadcumb section -->
        <section class="page-breadcrumb">
            <div class="page-section-contacto">
                <div class="breadcumb-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcrumb text-center">
                                <div class="section-titleBar white-headline text-center">
                                    <h3>CONTÁCTANOS</h3>
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
                            <li class="home-bread">Incio</li>
                            <li>Contacto</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcumb section -->

        <!-- Start map section -->
        <!-- <section class="map-section sec-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div class="our-location">
                            <div class="map"><iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Envato+Pty+Ltd,+Elizabeth+Street,+Melbourne,+Victoria,+Australia&amp;aq=0&amp;oq=envato+&amp;sll=37.0625,-95.677068&amp;sspn=39.235538,86.572266&amp;ie=UTF8&amp;hq=Envato+Pty+Ltd,&amp;hnear=Elizabeth+St,+Melbourne+Victoria+3000,+Australia&amp;ll=-37.817942,144.964977&amp;spn=0.01918,0.008866&amp;t=m&amp;output=embed"></iframe></div>
                            <div class="get-directions">
                                <form action="http://maps.google.com/maps" method="get" target="_blank">
                                    <input type="text" name="saddr" placeholder="Enter Your Address" />
                                    <input type="hidden" name="daddr" value="Envato Pty Ltd, Elizabeth Street, Melbourne, Victoria, Australia" />
                                    <input type="submit" value="Get directions" class="direction-btn" />
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            
        </section> -->
        <!-- End map section -->

        <section class="contact-us bg-color sec-padding">
            <div class="container">

                <div class="rox">
                    <div class="col-md-7">

                        <div class="main-title">
                            <h3>REGISTRATE Y RECIBE INFORMACIÓN DE INTERÉS</h3>
                            <p></p>
                        </div>

                        <div class="form">
                            <div class="row">
                                <p class="success" id="success"></p>
                                <p class="error" id="error"></p>
                                    <div class="col-md-6"><input type="text" data-delay="300" placeholder="Empresa" name="contact_empresa" id="empresa" class="input"></div>
                                    <div class="col-md-6"><input type="text" data-delay="300" placeholder="Nombre" name="contact_name" id="nombre" class="input"></div>
                                    <div class="col-md-6"><input type="text" data-delay="300" placeholder="Puesto" name="contact_puesto" id="puesto" class="input"></div>
                                    <div class="col-md-6"><input type="text" data-delay="300" placeholder="Correo" name="contact_email" id="email" class="input"></div>
                                    <div class="col-md-12"><textarea data-delay="500" class="required valid" placeholder="Mensaje" name="message" id="mensaje"></textarea></div>
                                    <div class="col-md-3"><input name="Enviar" type="button" value="Enviar" onclick="enviarCorreo()" style="border: 2px solid #4db7fe;color: #fff;cursor: pointer;display: inline-block;font-size: 14px;font-weight: 700;
                                    margin-top: 20px;padding: 10px 22px;text-align: center;text-transform: uppercase;transition: all 0.4s ease 0s;z-index: 222;background: #4db7fe;border-radius: 3px;width: 100%;"></div>

                            </div>
                        </div>


                    </div>

                    <div class="col-md-5">

                        <div class="contact-get">
                            <div class="main-title">
                                <h3><span>CONTACTO</span></h3>
                                <p></p>
                            </div>

                            <div class="get-in-touch">
                                <div class="detail">
                                    <span><b>Teléfono:</b> (442) 213 5724 / (442) 213 5802</span>
                                    <span><b>Email:</b> <a href="#.">acesores@ccade.com.mx</a></span>
                                    <!-- <span><b>Web:</b> <a href="#.">www.marco.com</a></span>
                                    <span><b>Address:</b> 12345 North Main Street, New York, NY</span> -->
                                </div>

                                <div class="social-icons">
                                    <a href="#." class="fb"><i class="icon-euro"></i></a>
                                    <a href="#." class="tw"><i class="icon-yen"></i></a>
                                    <a href="#." class="gp"><i class="icon-google-plus"></i></a>
                                    <a href="#." class="vimeo"><i class="icon-vimeo4"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section>

        <!-- Start welcome section -->

        <!-- End welcome section -->

        <!-- Start Footer bottom section -->
        <footer class="footer sec-padding" style="background:#f7f7f7;">
                <div class="container">
                  <div class="row">
                   <!--  <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <div class="footer-widget about-widget"><a class="logo" href="index.html"><img src="img/logo/logo2.png" alt="Awesome Image"></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean malesuada fringilla sem, at dictum lectus ultricies quis. Etiam eu bibendum orci. Aliquam erat volutpat.</p>
                        <div class="link"><a href="#">MORE ABOUT US</a> </div>
          
                      </div>
                    </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="footer-widget links-widget links-widget-pac">
                          <div class="title">
                            <h4>Services</h4>
                    
                          </div>
                          <div class="row">
                            <div class="col-md-12 col-sm-12">
                              <ul>
                                <li><a href="#">Hotel Growth</a></li>
                                <li><a href="#">Hotel Loan</a></li>
                                <li><a href="#">Financial Planning</a></li>
                                <li><a href="#">Insurance Consulting</a></li>
                                <li><a href="#">Retirenment Planing</a></li>
                                <li><a href="#">Tax Planing</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
          
                    </div> -->
          
                    <!-- <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <div class="footer-widget subscribe-widget">
                        <div class="title">
                          <h4>Subscribe Newsletter</h4>
                        </div>
                        <form action="#">
                          <p>Get latest updates and offers.</p>
                          <div class="newsletter-widget">
                            <input type="text" placeholder="Enter your email address">
                            <button type="submit" class="ped-btn-footer">SUBSCRIBE US</button>
                          </div>
                        </form>
          
                      </div>
                    </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="footer-widget subscribe-widget">
                          <div class="title">
                            <h4>Contact Us</h4>
                          </div>
                          <div class="tel-box">
                            <div class="icon"><i class="fa fa-map-marker"></i></div>
                            <div class="text">
                              <p>Apple St, New York, NY 10012, USA</p>
                            </div>
                          </div>
                          <div class="tel-box">
                            <div class="icon"><i class="fa fa-phone"></i></div>
                            <div class="text">
                              <p>( 018) 65 524 8503  /  (125) 954 7854</p>
                            </div>
                          </div>
                          <div class="tel-box">
                            <div class="icon"><i class="fa fa-envelope"></i></div>
                            <div class="text">
                              <p><a href="#">contact@lamarena.com</a></p>
                            </div>
                          </div>
          
                          <ul class="social list-inline">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </div> -->
          
                  </div>
                </div>
              </footer>
        <!-- End Footer bottom section -->
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
		<!-- Form validator js -->
		<script src="js/form-validator.min.js"></script>
        <!-- tabs js -->
        <script src="js/tabs.js"></script>
		<!-- plugins js -->
		<script src="js/plugins.js"></script>
        <!-- datapicker js -->
        <script src="js/zebra_datepicker.min.js"></script>
		<!-- main js -->
		<script src="js/main.js"></script>
        <script type="text/javascript">
        function enviarCorreo()
        {
        $.ajax({ 
            url:"enviarCorreo.php",  
            type:"POST", 
            data:{
                "nombre" : $('#nombre').val(), 
                "empresa" : $('#empresa').val(), 
                "correo" : $('#correo').val(), 
                "puesto" : $('#puesto').val(), 
                "mensaje" : $('#mensaje').val()
            },    
            dataType:"json", 
            success:function(response)   
            { 
               //console.log(response);
               alert(response.message);
               $('#nombre').val('');
               $('#empresa').val('');
               $('#correo').val('');
               $('#puesto').val('');
               $('#mensaje').val('');
            },   
             error: function(result) {
               console.log(result.error);
               //alert(result.error);    
            } 
        });
        }
        </script>
	</body>
</html>