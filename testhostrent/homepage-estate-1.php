
<?php




 include('functions.php');
$conn = new PDO("mysql:host=localhost;dbname=hostel_management", 'root', '');
    $stmt = $conn->prepare("SELECT * FROM agentupload"); 
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC); 
   
  
?>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <title>Boomerang 2 - MultiPurpose Template</title>

    <!-- Essential styles -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css"> 
    <link rel="stylesheet" href="assets/fancybox/jquery.fancybox8cbb.css?v=2.1.5" media="screen"> 
     
    <!-- Boomerang styles -->
        <link id="wpStylesheet" type="text/css" href="css/global-style.css" rel="stylesheet" media="screen">
        

    <!-- Favicon -->
    <link href="images/favicon.png" rel="icon" type="image/png">

    <!-- Assets -->
    <link rel="stylesheet" href="assets/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="assets/sky-forms/css/sky-forms.css">    
    <!--[if lt IE 9]>
        <link rel="stylesheet" href="assets/sky-forms/css/sky-forms-ie8.css">
    <![endif]-->

    <!-- Required JS -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-ui.min.js"></script>

    <!-- Page scripts -->
    
</head>
<body>
<!-- MODALS -->

<!-- MOBILE MENU - Option 2 -->
<!-- <section id="navMobile" class="aside-menu left">
    <form class="form-horizontal form-search">
        <div class="input-group">
            <input type="search" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
                <button id="btnHideMobileNav" class="btn btn-close" type="button" title="Hide sidebar"><i class="fa fa-times"></i></button>
            </span>
        </div>
    </form>
    <div id="dl-menu" class="dl-menuwrapper">
        <ul class="dl-menu"></ul>
    </div>
</section>  -->

<!-- SLIDEBAR -->
<!-- <section id="asideMenu" class="aside-menu right">
    <form class="form-horizontal form-search">
        <div class="input-group">
            <input type="search" class="form-control" placeholder="Search..." />
            <span class="input-group-btn">
                <button id="btnHideAsideMenu" class="btn btn-close" type="button" title="Hide sidebar"><i class="fa fa-times"></i></button>
            </span>
        </div>
    </form>
    
    <h5 class="side-section-title">Optional sidebar menu</h5>
    <div class="nav">
        <ul>
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">About us</a>
            </li>
            <li>
                <a href="#">Blog</a>
            </li>
            <li>
                <a href="#">Work</a>
            </li>
            <li>
                <a href="#">Online shop</a>
            </li>
        </ul>
    </div>
    
    <h5 class="side-section-title">Social media</h5>
    <div class="social-media">
        <a href="#"><i class="fa fa-facebook facebook"></i></a>
        <a href="#"><i class="fa fa-google-plus google"></i></a>
        <a href="#"><i class="fa fa-twitter twitter"></i></a>
    </div>
    
    <h5 class="side-section-title">Contact information</h5>
    <div class="contact-info">
        <h5>Address</h5>
        <p>5th Avenue, New York - United States</p>
        
        <h5>Email</h5>
        <p>hello@webpixels.ro</p>
        
        <h5>Phone</h5>
        <p>+10 724 1234 567</p>
    </div>
</section> --> 

<!-- MAIN WRAPPER -->
<div class="body-wrap">
    <!-- This section is only for demonstration purpose only. Check out the docs for more informations" -->
    
            <!-- HEADER -->
        <?php
        // include('includes/header.php');?>

        <!-- Optional header components (ex: slider) -->
         
     <?php
     include('includes/header.php');?> 
     <br>

    <!-- MAIN CONTENT -->
        <section class="slice no-padding bb">
        <div class="wp-section">
            <div class="container-fluid no-padding">
                <div class="row">
                    <div class="col-md-12">
                        <!-- JumboTron -->
                        <div class="jumbotron">
                            <div class="jumbotron-left">
                                <div id="homepageCarousel" class="carousel carousel-1 carousel-fixed-height slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        
                                        <div class="item item-dark active" style="background-image:url(images/prv/estate/estate-slider-bg-1.jpg);">
                                            <div class="mask mask-1"></div>  
                                            <div class="container">
                                                <div class="description-left">
                                                    <span class="title c-white text-uppercase strong-700">Boomerang for Real Estate agencies</span>
                                                    <span class="subtitle-sm">We want to offer you the best platform so you could expand you business and ideas to the next level in the online world.</span>
                                                    <ul class="list-carousel mb-20">
                                                        <li><i class="fa fa-check-square"></i> Lorem Ipsum is simply dummy</li>
                                                        <li><i class="fa fa-check-square"></i> Printer took a galley</li>
                                                        <li><i class="fa fa-check-square"></i> It has survived not only</li>
                                                        <li><i class="fa fa-check-square"></i> Electronic typesetting</li>
                                                    </ul>
                                                    <a href="#" class="btn btn-lg btn-white btn-icon fa-eye">
                                                        <span>Seen enough</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div> 
                                        
                                        <div class="item item-light" style="background-image:url(images/prv/estate/estate-slider-bg-3.jpg);">
                                            <div class="mask mask-1"></div>  
                                            <div class="container">
                                                <div class="description-left">
                                                    <span class="title c-white text-uppercase strong-700">Boomerang for Real Estate agencies</span>
                                                    <span class="subtitle-sm">We want to offer you the best platform so you could expand you business and ideas to the next level in the online world.</span>
        
                                                </div>
                                            </div>
                                        </div>       
                                    </div>
                                    
                                    <!-- Controls -->
                                    <a class="left carousel-control" href="#homepageCarousel" data-slide="prev">
                                        <i class="fa fa-angle-left"></i>
                                    </a>
                                    <a class="right carousel-control" href="#homepageCarousel" data-slide="next">
                                        <i class="fa fa-angle-right"></i>
                                    </a>     
                                </div>
                            </div>
                            <div class="jumbotron-right">
                                <!-- FIND property list WIDGET -->
                                <div class="panel panel-base no-margin">
                                    <div class="panel-heading panel-heading-lg">Find a property</div>
                                    <form class="form-base" role="form">
                                        <div class="panel-body" style="padding:25px;">
                                        
                                            <div class="form-group">
                                                <input type="text" class="form-control input-lg" placeholder="I would like to buy ...">
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-group-lg field_select">
                                                        <label class="">Minimum Price</label>
                                                        <select class="form-control select_styled base no-padding">
                                                            <option value="1">$1000</option>
                                                            <option value="2">$2000</option>
                                                            <option value="3">$3000</option>
                                                            <option value="4">$4000</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group form-group-lg field_select">
                                                        <label class="">Maximum Price</label>
                                                        <select class="form-control select_styled base no-padding">
                                                            <option value="1">$2000</option>
                                                            <option value="2">$3000</option>
                                                            <option value="3">$4000</option>
                                                            <option value="4">$5000</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-group-lg field_select">
                                                        <label class="">Property Type</label>
                                                        <select class="form-control select_styled base no-padding">
                                                            <option value="1">Apartament</option>
                                                            <option value="2">House</option>
                                                            <option value="3">Flats</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group form-group-lg field_select">
                                                        <label class="">Bedrooms</label>
                                                        <select class="form-control select_styled base no-padding">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-xl btn-block-bm btn-alt btn-icon btn-icon-right btn-icon-go btn-square">
                                            <span>Start searching</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="slice bg-white bb">
        <div class="wp-section">
            <div class="container">
                <div class="section-title-wr">
                    <h3 class="section-title left"><span>Latest listed properties</span></h3>
                    <div class="aux-nav">
                        <!-- Auxiliary content comes here -->
                    </div>
                </div>
           <div class="no-margin owl-carousel owl-carousel-4" data-owl-pagination="smth">
                    

                 
            <?php foreach($result as $img):?>
           
                   <div class="item">
                        <div class="wp-block property list">
                            <div class="wp-block-title">
                                <h3><a href="#"><?php print $img['ag_name']; ?></a></h3>
                            </div>
                            <div class="wp-block-body">
                                <div class="wp-block-img">
                                    <a href="#">
                                   
                                      <?php  
                                    

                                      echo' <img src="Agent/'.$img['frontview'].'">';
                                      ?>
                                    </a>
                                </div>
                                <div class="wp-block-content">
                                    <small>days only</small>
                                    <h4 class="content-title">Special Offer</h4>
                                    <!-- <p class="description" maxlength="105"  ><?php 
                                    // print $img['description']; ?></p> -->
                                    <span class="pull-left">
                                        <span class="price">#<?php print $img['amount']; ?></span> 
                                        <span class="period">per year</span>
                                    </span>
                                    <span class="pull-right">
                                    <span class="capacity">
                                        <i class="fa fa-user"></i>
                                        <i class="fa fa-user"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="wp-block-footer">
                                <ul class="aux-info">
                                   
                                    <li><i class="fa fa-user"></i> <?php print $img['noofbedroom']; ?> Bedrooms</li>
                                    <li><i class="fa fa-tint"></i> <?php print $img['noofbathtoi']; ?> Bathrooms</li>
                                    <!-- <li><i class="fa fa-car"></i> 3 Garages</li> -->
                                </ul>
                            </div>
                        </div>
                    </div>

        <?php endforeach?>
                

               
                    </div>
                </div>

               <!--  <div class="row">
                    

                    <div class="col-md-6">
                        <div class="wp-block property list">
                            <div class="wp-block-title">
                                <h3><a href="#">3015 Grand Avenue, CocoWalk</a></h3>
                            </div>
                            <div class="wp-block-body">
                                <div class="wp-block-img">
                                    <a href="#">
                                        <img src="images/prv/estate/item-2.jpg" alt="">
                                    </a>
                                </div>
                                <div class="wp-block-content">
                                    <small>10 days only</small>
                                    <h4 class="content-title">Special Offer</h4>
                                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipisg elitm Ut tincidunt purus iaculis ipsum dctum non dtum quam.</p>
                                    <span class="pull-left">
                                        <span class="price">$230</span> 
                                        <span class="period">per month</span>
                                    </span>
                                    <span class="pull-right">
                                    <span class="capacity">
                                        <i class="fa fa-user"></i>
                                        <i class="fa fa-user"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="wp-block-footer">
                                <ul class="aux-info">
                                    <li><i class="fa fa-building"></i>2300<sup>2</sup> Feet</li>
                                    <li><i class="fa fa-user"></i> 5 Bedrooms</li>
                                    <li><i class="fa fa-tint"></i> 2 Bathrooms</li>
                                    <li><i class="fa fa-car"></i> 3 Garages</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
</section>
   
    <!-- FOOTER -->
    <footer class="footer">
        <div class="container">
            
            
            <hr>
            
            <div class="row">
                <div class="col-lg-9 copyright">
                    2014 © Web Pixels. All rights reserved.
                    <a href="#">Terms and conditions</a>
                </div>
                <div class="col-lg-3">
                    <a href="http://www.webpixels.ro/" title="Made with love by Web Pixels" target="_blank" class="">
                        <img src="images/webpixels-footer-logo.png" alt="Web Pixels - Designing Forward | Logo" class="pull-right">
                    </a>
                </div>
            </div>
        </div>
    </footer>
</div>

<!-- Essentials -->
<script src="js/modernizr.custom.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="js/jquery.mousewheel-3.0.6.pack.js"></script>
<script src="js/jquery.easing.js"></script>
<script src="js/jquery.metadata.js"></script>
<script src="js/jquery.hoverup.js"></script>
<script src="js/jquery.hoverdir.js"></script>
<script src="js/jquery.stellar.js"></script>

<!-- Boomerang mobile nav - Optional  -->
<script src="assets/responsive-mobile-nav/js/jquery.dlmenu.js"></script>
<script src="assets/responsive-mobile-nav/js/jquery.dlmenu.autofill.js"></script>

<!-- Forms -->
<script src="assets/ui-kit/js/jquery.powerful-placeholder.min.js"></script> 
<script src="assets/ui-kit/js/cusel.min.js"></script>
<script src="assets/sky-forms/js/jquery.form.min.js"></script>
<script src="assets/sky-forms/js/jquery.validate.min.js"></script>
<script src="assets/sky-forms/js/jquery.maskedinput.min.js"></script>
<script src="assets/sky-forms/js/jquery.modal.js"></script>

<!-- Assets -->
<script src="assets/hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
<script src="assets/page-scroller/jquery.ui.totop.min.js"></script>
<script src="assets/mixitup/jquery.mixitup.js"></script>
<script src="assets/mixitup/jquery.mixitup.init.js"></script>
<script src="assets/fancybox/jquery.fancybox.pack8cbb.js?v=2.1.5"></script>
<script src="assets/waypoints/waypoints.min.js"></script>
<script src="assets/milestone-counter/jquery.countTo.js"></script>
<script src="assets/easy-pie-chart/js/jquery.easypiechart.js"></script>
<script src="assets/social-buttons/js/rrssb.min.js"></script>
<script src="assets/nouislider/js/jquery.nouislider.min.js"></script>
<script src="assets/owl-carousel/owl.carousel.js"></script>
<script src="assets/bootstrap/js/tooltip.js"></script>
<script src="assets/bootstrap/js/popover.js"></script>

<!-- Sripts for individual pages, depending on what plug-ins are used -->

<!-- Boomerang App JS -->
<script src="js/wp.app.js"></script>
<!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
<![endif]-->

<!-- Temp -- You can remove this once you started to work on your project -->
<script src="js/jquery.cookie.js"></script>
<script src="js/wp.switcher.js"></script>
<script type="text/javascript" src="js/wp.ga.js"></script>


</body>

