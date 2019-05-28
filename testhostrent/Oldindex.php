<?php




 include('functions.php');
$conn = new PDO("mysql:host=localhost;dbname=hostel_management", 'root', '');
    $stmt = $conn->prepare("SELECT * FROM agentupload"); 
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC); 

     $stmts = $conn->prepare('SELECT * FROM agentupload  WHERE category="Market"'); 
    $stmts->execute();
    $results = $stmts->fetchAll(PDO::FETCH_ASSOC); 
    // $results = $results[0];
    if (isset($_POST['view'])) 
      {
      session_start();
      $_SESSION['View'] =$_POST['view2'];

      header('location:login.php');
      }
  if (isset($_POST['view3']))
        {
          session_start();
          $_SESSION['View2'] =$_POST['view4'];

          header('location:login.php');
        }
   if (isset($_POST['sorting'])) 
      {
         session_start();
        $_SESSION['pricerange'] =$_POST['prange'];
        $_SESSION['roomn'] =$_POST['roomn'];
        $_SESSION['typeh'] =$_POST['typeh'];


        header('location:search.php');
      }
?>
<head>
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
    <link rel="stylesheet" href="assets/layerslider/css/layerslider.css" type="text/css">


</head>
  <?php
   //include('includes/head.php');?> 
     
<body>

    <?php
     include('includes/header.php');?> 

<!-- SLIDEBAR -->

<!-- MAIN WRAPPER -->
<div class="body">
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
                                                <br/>
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
                                                 <br/>
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
                                     <br/>
                                      <br/> <br/> <br/>
                                    <form class="form-base" role="form" action="index.php" method="post"> <br/>
                                     <div class="panel-heading panel-heading-lg">Find a House of your Choice</div>
                                        <div class="panel-body" style="padding:25px;">
                                       
                                           <!--  <div class="form-group">
                                                <input type="text" class="form-control input-lg" placeholder="I would like to buy ...">
                                            </div> -->
                                         
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="form-group form-group-lg field_select">
                                                        <label class="">Price Range</label>
                                                        <select class="form-control select_styled base no-padding" name="prange">
                                                        <option value="">------</option>
                                                            <option value="18000">18000</option>
                                                            <option value="20000">20000</option>
                                                            <option value="3">$3000</option>
                                                            <option value="4">$4000</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- <div class="col-md-6">
                                                    <div class="form-group form-group-lg field_select">
                                                        <label class="">Maximum Price</label>
                                                        <select class="form-control select_styled base no-padding">
                                                            <option value="1">$2000</option>
                                                            <option value="2">$3000</option>
                                                            <option value="3">$4000</option>
                                                            <option value="4">$5000</option>
                                                        </select>
                                                    </div>
                                                </div> -->
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-group-lg field_select">
                                                        <label class="">Property Type</label>
                                                        <select class="form-control select_styled base no-padding" name="typeh">
                                                            <option value="">------</option>
                                                            <option value="Face me & Face you">Face me & Face you</option>
                                                            <option value="Bedroom Flat">Bedroom Flat</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group form-group-lg field_select">
                                                        <label class="">Bedrooms</label>
                                                        <select class="form-control select_styled base no-padding" name="roomn">
                                                        <option value=""> -----</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" name="sorting" class="btn btn-xl btn-block-bm btn-alt btn-icon btn-icon-right btn-icon-go btn-square">
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
    
    <!-- MAIN CONTENT -->
   

<section class="slice white animate-hover-slide bg-3">
    <div class="wp-section">
        <!-- <div class="container"> -->
            <div class="section-title-wr no-margin">
                <h3 class="section-title left"><span>New products</span></h3>
            </div>

              <form  action="index.php" method="post">
             <div class="no-margin owl-carousel owl-carousel-4" data-owl-pagination="smth"> 
             
                <?php foreach($result as $img):?>
                    <div class="item">
                        <div class="wp-block default product style-2 ">
                            <div class="figure">
                               <img alt="" <?php echo' < img src="Agent/'.$img['frontview'].'" class="img-responsive img-banner-fluid-1 img-center">';?>
                                <span class="wp-block-date-over alpha"><strong>Sep 25</strong></span>
                                <div class="figcaption bg-base"></div>
                                <div class="figcaption-btn">
                                    <?php echo'<a href="Agent/'.$img['frontview'].'" class="btn btn-xs btn-b-white theater">';?><i class="fa fa-plus-circle"></i>Zoom</a>
                                   <a class="btn"><button class="btn btn-xs btn-b-white" name="view"><i class="fa fa-link"></i> View</button></a>
                                
                                    
                                </div>
                            </div>
                           
                            <div class="wp-block-footer ">
                            <span class="cell price-wr">
                                <span class="price">#<?php print $img['amount']; ?></span>
                            </span>
                            <span class="cell width-20 add" title="No of Bedroom">
                                <a href="#">
                                   <?php print $img['noofbedroom']; ?><i class="fa fa-bed"></i>
                                </a>
                            </span>
                            <span class="cell width-20 whishlist" title="No of Toilet">
                                <a href="#">
                                    <?php print $img['noofbathtoi']; ?><i class="fa fa-heart"></i>
                                </a>
                            </span>
                            <span class="cell width-20 compare" title="View Full Details" >
                                <a href="#">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </span>
                        </div>
                        </div>
                    </div>
                    
                     <input type="hidden" name="view2"  readonly="TRUE" value=<?php print $img['frontview']?> >
                       <?php endforeach?>
        
                </div>

               


           
        </div>
         </form>
    </div>
</section>

<section class="slice white no-padding">
    <div class="wp-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img src="images/prv/fashion/img-banner-fluid-1.jpg" class="img-responsive" alt="">
                </div>
            </div>
        </div>
    </div>
</section>






<section class="slice animate-hover-slide bg-white">
        <div class="wp-section">
            <div class="container">
                <div class="section-title-wr">
                    <h3 class="section-title left">
                        <span>Latest news</span>
                        <small>Lorem ipsum dolor sit amet</small>
                    </h3>
                </div>
                 <form  action="index.php" method="post">
                 <div class="no-margin owl-carousel owl-carousel-4" data-owl-pagination="smth">
                <?php foreach($results as $imgs):?>
                   <div class="item"> 
                        <div class="wp-block default product style-2 ">
                            <div class="figure">
                               <img alt="" <?php echo' < img src="Agent/'.$imgs['frontview'].'" class="img-responsive img-banner-fluid-1 img-center">';?>
                                <span class="wp-block-date-over alpha"><strong>Sep 25</strong></span>
                                <div class="figcaption bg-base"></div>
                                 <div class="figcaption-btn">
                                    <?php echo'<a href="Agent/'.$imgs['frontview'].'" class="btn btn-xs btn-b-white theater">';?><i class="fa fa-plus-circle"></i>Zoom</a>
                                   <a class="btn"><button class="btn btn-xs btn-b-white" name="view3"><i class="fa fa-link"></i> View</button></a>
                                
                                    
                                </div>
                            </div>
                           
                            <div class="wp-block-footer ">
                            <span class="cell price-wr">
                                <span class="price">#<?php print $imgs['amount']; ?></span>
                            </span>
                            <span class="cell width-20 add">
                                <a href="#">
                                   <?php print $imgs['noofbedroom']; ?><i class="fa fa-shopping-cart"></i>
                                </a>
                            </span>
                            <span class="cell width-20 whishlist">
                                <a href="#">
                                    <?php print $imgs['noofbathtoi']; ?><i class="fa fa-heart"></i>
                                </a>
                            </span>
                            <span class="cell width-20 compare">
                                <a href="#">
                                    <i class="fa fa-bars"></i>
                                </a>
                            </span>
                        </div>
                        </div>
                    </div>
                     
                      <input type="hidden" name="view4"  readonly="TRUE" value=<?php print $img['frontview']?> >
                       <?php endforeach?>
        
                </div>
                </form>
            </div>
        </div>
    </section>









<!-- CLIENTS -->
    

    <!-- FOOTER -->
      <?php
     include('includes/footer.php');?> 
</div>


</body>