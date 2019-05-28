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
      {http://localhost/testhostrent/new.php#homepageCarousel
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
 <?php
     include('includes/head.php');?> 
<body>

    <?php
     include('includes/header.php');?> 

<!-- SLIDEBAR -->

<!-- MAIN WRAPPER -->
<br><br>
<div class="body">

    <section class="slice bg-white bb slice white ">
            <div class="wp-section">
                <!-- <div class="container"> -->
                    <div class="row">
                        <div class="col-md-9">
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
                             <div class="section-title-wr no-margin">
                <h3 class="section-title left"><span>New products</span></h3>
            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="sidebar">
                                <!-- FILTERS -->
                                <div class="panel panel-default panel-sidebar-1">
                                    <div class="panel-heading"><h2>Filter by</h2></div>
                                    <div class="panel-body">
                                        <form class="form-light" role="form">
                                            <div class="form-group">
                                                <label>Search for properties</label>
                                                <input type="text" class="form-control" placeholder="I want to find..." hidefocus="true">
                                            </div>
                                            <div class="form-group">
                                                <label>Category</label>
                                                <select class="form-control">
                                                    <option>Phones</option>
                                                    <option>Laptops</option>
                                                    <option>Cameras</option>
                                                    <option>Tablets</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Location</label>
                                                <select class="form-control">
                                                    <option>Phones</option>
                                                    <option>Laptops</option>
                                                    <option>Cameras</option>
                                                    <option>Tablets</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Category</label>
                                                <select class="form-control">
                                                    <option>Phones</option>
                                                    <option>Laptops</option>
                                                    <option>Cameras</option>
                                                    <option>Tablets</option>
                                                </select>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Min Rooms</label>
                                                        <select class="form-control">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Max Rooms</label>
                                                        <select class="form-control">
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <button type="submit" class="btn btn-block btn-base btn-icon btn-icon-right btn-search">
                                                        <span>Search</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                              
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </section>
<section class="slice no-padding bb white animate-hover-slide bg-3">
   <div class="wp-section">
        <!-- <div class="container"> -->
           

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
    </section>

</div>
 <?php
     include('includes/footer.php');?> 
</body>