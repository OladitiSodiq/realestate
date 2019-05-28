
 <?php




 include('functions.php');
$imgcons = img_con($conn);
  
    // $stmts = $conn->prepare('SELECT * FROM agentupload  WHERE category="Market"'); 
    // $stmts->execute();
    // $results = $stmts->fetchAll(PDO::FETCH_ASSOC); 
    // // return $results;

    


    

      //   if (isset($_POST['view'])) 
      // {
      
     
      // }
        
      //   if (isset($_POST['viewr'])) 
      // {
         
       
      //  }


   if (isset($_POST['sorting'])) 
      {
         session_start();
        $_SESSION['pricerange'] =$_POST['prange'];
        $_SESSION['roomn'] =$_POST['roomn'];
        $_SESSION['typeh'] =$_POST['typeh'];


        header('location:search.php');
      }
     

?>
 <?php
   //   include('includes/head.php');?>
    <!--  -->
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
<body>
<style type="text/css">
    

    span{
      color: green;
    }
  </style>
    <?php
      include('includes/header.php');?> 

<!-- SLIDEBAR -->

<!-- MAIN WRAPPER -->
<br><br>
<div class="body">

    <section class="bg-white bb white ">
            <div class="wp-section">
                <!-- <div class="container"> -->
                    <div class="row">
                        <div class="col-md-9">
                          <div id="homepageCarousel" class="carousel carousel-1 carousel-fixed-height slide" data-ride="carousel" style="padding:6">
                                    <div class="carousel-inner">
                                        
                                        <div class="item item-dark active" style="background-image:url(images/backgrounds/full-bg-20.jpg);">
                                            <div class="mask mask-1"></div>  
                                            <div class="container">
                                                
                                            </div>
                                        </div> 
                                        
                                        <div class="item item-light" style="background-image:url(images/prv/estate/estate-slider-bg-3.jpg");">
                                            <div class="mask mask-1"></div>  
                                            <div class="container">
                                               
                                            </div>
                                        </div>   
                                         <div class="item item-light" style="background-image:url(images/prv/estate/estate-slider-bg-1.jpg");">
                                            <div class="mask mask-1"></div>  
                                            <div class="container">
                                               
                                            </div>
                                        </div> 
                                         <div class="item item-light" style="background-image:url(images/backgrounds/full-bg-20.jpg);">
                                            <div class="mask mask-1"></div>  
                                            <div class="container">
                                               
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
 
                        <?php
     include('search-side.php');?> 
                    </div>
                </div>
           
<section class="bb white animate-hover-slide bg-3">
   <div class="wp-section" >
       <!-- <div class="container">  -->
           

<!-- <form  action="index.php" method="post">
 -->
    <section class="bg-white bb">
        <div class="wp-section">
            <!-- <div class="container"> -->
                <div class="section-title-wr">
                    <h3 class="section-title left"><span>Latest listed properties</span></h3>
                    <div class="aux-nav">
                        <!-- Auxiliary content comes here -->
                    </div>
                </div>
                
                <div class="row">
                <?php $x=0?>
                <?php foreach($imgcons as $img):?>
                   
                  <?php $x++?>

                    <div class="col-md-6">
                     
                        <div class="wp-block property list">
                            <div class="wp-block-title">
                                <h3><a href="#">3015 Grand Avenue, CocoWalk</a></h3>
                            </div>
                            <div class="wp-block-body">
                                <div class="wp-block-img">
                                    <a href="#">
                                        <!-- <img src="images/prv/estate/item-1.jpg" alt=""> -->
                                         <img alt="" <?php 
                                          echo' < img src="Agent/'.$img['frontview'].'">';?> 
                                    </a>
                                </div>
                                <div class="wp-block-content">
                                    <small> <?php print $x;?>
                                        
                                    </small>
                                    <h4 class="content-title">Special Offer</h4>
                                    <p style="max-height:100px;min-height:100px"class="description "><?php print $img['description']; ?>.</p>
                                    <span class="pull-left">
                                        <span class="price">N <?php print $img['amount']; ?></span> 
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
                                    <li><i class="fa fa-building"></i>2300<sup>2</sup> Feet</li>
                                    <li><i class="fa fa-user"></i><?php print $img['noofbedroom']; ?>. Bedrooms</li>
                                    <li><i class="fa fa-tint"></i> <?php print $img['noofbathtoi']; ?>. Bathrooms</li>
                                     <li><button class="btn-b-white" name="viewr" >


                                        <a  href=<?php print  'estate-property.php?sta_a='. $img['frontview'];?>><i class="fa fa-eye"></i>View Full Details</a>

                                    </button></li>
                                </ul>
                            </div>
                        </div>

                    </div> 
                <?php endforeach?>
                         </div>
        </div>
    </section>

                <section class="slice white animate-hover-slide bg-3">
                    <div class="wp-section">
                        <!-- <div class="container"> -->
                            <div class="section-title-wr no-margin">
                                <h3 class="section-title left"><span>New products</span></h3>
                            </div>

                              <!-- <form  action="index.php" method="post"> -->
                             <div class="no-margin owl-carousel owl-carousel-4" > 
                             
                                <?php foreach($imgcons as $img):?>
                                    <div class="item">
                                        <div class="wp-block default product style-2 ">
                                            <div class="figure">
                                             <img alt="" <?php 
                                                echo' < img src="Agent/'.$img['frontview'].'" class="img-responsive img-banner-fluid-1 img-center">';?> 
                                               <!-- ?<img src="images/prv/estate/item-1.jpg" alt=""> -->
                                                <span class="wp-block-date-over alpha"><strong>Sep 25</strong></span>
                                                <div class="figcaption bg-base"></div>
                                                <div class="figcaption-btn">
                                                    <?php echo'<a href="Agent/'.$img['frontview'].'" class="btn btn-xs btn-b-white theater">';?>
                                                    
                                                    <i class="fa fa-plus-circle"></i>Zoom</a>
                                                   <a class="btn"><button class="btn btn-xs btn-b-white" name="viewr"><i class="fa fa-link"></i> View</button></a>
                                                
                                                    
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
                                    
                                    
                                       <?php endforeach?>
                        
                                </div>

                               


                           
                    
                    </div>
                </section>
 </form>
   
    </div>

    </section>
 <?php
     include('includes/footer.php');?> 
</body>