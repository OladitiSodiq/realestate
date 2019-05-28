 <?php
 include('functions.php');
 
 
    // $result = BAM_con($conn);
            session_start(); 

  if ((isset($_SESSION['name']))) { 
     $name= $_SESSION['name'];
     $stmtss= $conn->prepare("SELECT * FROM bookings WHERE users_id=:e"); 
     // $stmtss -> bindParam(':p', $name);
     $stmtss->execute([':e' => $name]);
     $resultss = $stmtss->fetchAll(PDO::FETCH_ASSOC); 
      print_r($resultss);
       // $resultss=$resultss[0];
 // print_r($resultss);
 // return $resultss;
// allahumo laka liamdu anta nuru 
  // $resultss=$resultss[0];
   // $m = $resultss[0]['booked_h_img'];
// $resultss = explode('', $value['booked_h_img']);
   foreach ($resultss as $value) {
 // if ($resultss ){
 
  // explode ('$m ',);
    // $m = explode('', $value['booked_h_img']);      
     $m = $value['booked_h_img'];
     $s = array($m);
    print_r($m);
    $stmts = $conn->prepare("SELECT  *  FROM agentupload WHERE frontview = :i"); 
      // $stmts -> bindParam(':i', $m);
    $stmts->execute([':i' => $m]);
    $value = $stmts->fetchAll(PDO::FETCH_ASSOC);
   // $value = $value[0];
 // print_r($value);
    
// print_r($value);
        // $value = $value[0];
  
        // }
    } 
   // }
 }
     else{
  
 header('location:index.php');
}


      





?>
 <?php
     include('includes/head.php');?> 
<body>

    <?php
     
    if (!isset($_SESSION['idcollector'])) {
    include ('includes/header.php');
}
else{
   // include ('includes/header2.php');
}
     ?> 

<!-- SLIDEBAR -->

<!-- MAIN WRAPPER -->
<br><br><br>
<div class="body">

    <section class="slice bg-white bb">
            <div class="wp-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <!-- PAGINATION & FILTERS -->
                            <div class="wp-block default product-list-filters light-gray">
                                <ul class="pagination pagination pull-left">
                                    <li><a href="#" hidefocus="true">«</a></li>
                                    <li class="active"><a href="#" hidefocus="true">1</a></li>
                                    <li><a href="#" hidefocus="true">2</a></li>
                                    <li><a href="#" hidefocus="true">3</a></li>
                                    <li><a href="#" hidefocus="true">4</a></li>
                                    <li><a href="#" hidefocus="true">5</a></li>
                                    <li><a href="#" hidefocus="true">»</a></li>
                                </ul>
                                <div class="filter sort-filter pull-right">
                                    <label>Sort by</label>
                                    <select>
                                        <option>Price low</option>
                                        <option>Price high</option>
                                        <option>Property type</option>
                                    </select>
                                </div>
                            </div>
                            <!-- PROPERTY LISTING -->
                             <form  action="booked_item.php" method="post" >
                              <?php $x=0?> <?php 
                               // foreach($resultss as $imgs):?>

                                 <?php 
                                 foreach($resultss as $imgss):?>
                            <?php 
                            // if ($value) {
                                          $x++;?>
                                          <?php 
                                          foreach($value as $imgs):?>


                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="wp-block property list">
                                            <div class="wp-block-title">
                                                <h3><a href="#" hidefocus="true">3015 Grand Avenue, CocoWalk</a></h3>
                                            </div>
                                            <div class="wp-block-body">
                                                <div class="wp-block-img">
                                                    <a href="#" hidefocus="true">
                                                        <img alt="" <?php echo' < img src="Agent/'.$imgss['booked_h_img'].'">';?>
                                                    </a>
                                                </div>
                                                <div class="wp-block-content clearfix">
                                                    <small><?php print $x;?> days only</small>
                                                    <h4 class="content-title">Special Offer</h4>
                                                    <p class="description"><?php print $imgss['booked_h_img']; ?></p>
                                                    
                                                      <span class="pull-left">
                                                      <span class="price">#N <?php print $imgs['amount']; ?></span> 
                                                      <span class="period">per/Year</span>
                                                    </span>
                                                    <span class="pull-right">
                                                    <span class="capacity">
                                                        <i class="fa fa-user"></i>
                                                        <i class="fa fa-user"></i>
                                                    </span>
                                                </span></div>
                                            </div>
                                            <div class="wp-block-footer">
                                                <ul class="aux-info">
                                                    <li><i class="fa fa-building"></i>2300 Sq Feet</li>
                                                    <li><i class="fa fa-user"></i>  <?php print $imgs['noofbedroom']; ?>  Bedrooms</li>
                                                    <li><i class="fa fa-tint"></i> <?php print $imgs['noofbathtoi']; ?>  Bathrooms</li>
                                                      <li><button class="btn-b-white" name="viewr" > <a  href=<?php print  'estate-property.php?sta_a='. $imgss['booked_h_img'];?>><i class="fa fa-eye"></i>View Full Details</a></button></li>
                                                        <!-- <li><i class="fa fa-car"></i> 3 Garages</li> -->
                                                    </ul>
                                                </div>
                                               
                                            </div>
                                             
                                       
                                    </div>
                                </div>
                                <?php 
                                 endforeach?>
                               <?php
                                // }?>
                           <!--  <?php 
                            // endforeach?> -->
                        <?php 
                        endforeach?>
                          
</form>
                            
                        </div>
                       <?php
     include('search-side.php');?> 
                    </div>
                </div>
            </div>
    </section>
</div>
 <?php
     include('includes/footer.php');?> 
</body>