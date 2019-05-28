<?php
 include('functions.php');
session_start();
$err="";
   $c = $_GET['sta_a'];
    // $c = implode(' ', $_SESSION['View']);
     // print_r($c);
         $query = 'SELECT  *  FROM agentupload WHERE frontview = :i'; 
         $query = $conn->prepare($query);
         $query -> bindParam(':i', $c);
         $query-> execute();
         $i = $query->fetchAll(PDO::FETCH_ASSOC);
  
         $i = $i[0];


 $arryf =explode(",",$i['Facilities']);
 // $arr1 =  $arryf[0][1];

    $stmt = $conn->prepare("SELECT * FROM bookings where booked_h_img = :m"); 
    $stmt->execute([':m' => $c]);
    $count = $stmt->rowCount();
    $counts = $stmt->fetchAll(PDO::FETCH_ASSOC);
          if ($counts=0){
            $counts=0;
          }else{
             $counts = $counts[0];
          }
    $_SESSION['name'] = $counts['users_id'];



 if (isset($_SESSION['idcollector'])) {

        $c = $_GET['sta_a'];
 
$m = (int)$_SESSION['idcollector'];
 $query = 'SELECT fullname FROM student WHERE s_id = :i'; 
 $query = $conn->prepare($query);
 $query -> bindParam(':i', $m);
 $query-> execute();
 $result = $query->fetchAll(PDO::FETCH_ASSOC);

$full = $result[0]['fullname'];

$check = "SELECT * FROM bookings WHERE booked_h_img= :p AND users_id = :f";
    $check = $conn -> prepare($check);
    $check -> execute([':p' => $c, ':f' => $full ]);
    $checks = $check->fetchAll(PDO::FETCH_ASSOC);
    // print $result;

    if ($checks) {
       $err ="House already booked by u";
}
else {
  $querys= "INSERT INTO bookings(booked_h_img,users_id)
        values (:p,:f )";
      $querys = $conn->prepare($querys);
      $querys->execute([
          ':p' =>  $c,
            ':f' => $full
         
          
          
      ]); 

    if ($querys) {
      
      header("Refresh: 2; url=");
     // header("Refresh:2 ; url=");
    }
}

}
else{
    $err ="Login in new tab";
}


?>
 <?php include ('includes/head.php');?>
  <style type="text/css">
    

    .greena {
    color: #69AA46!important;
}
.reda {
    color: #DD5A43!important;
}
 .bluea {
    color: #478FCA!important;
}
  </style>
<style>
.borderBox {
    margin-top: 10px;
    margin-bottom: 10px;
    width: 100%;
    min-height: 100px;
    padding: 10px 20px 20px 20px;
    border-top: 1px solid #e3e3e3;
    -webkit-box-shadow: 0 -7px 1px -3px #f8f8f8 inset;
    box-shadow: 0 -7px 1px -3px #f8f8f8 inset;
    border: 1px solid #e3e3e3;
    border-bottom: 1px solid #bbb;
    background: #fff;
}
.headingView {
    height: 40px;
    border-bottom: 1px solid #d2d2d2;
    padding-bottom: 10px;
}
.infoList {
    padding-top: 15px;
    min-height: 40px;
    padding-bottom: 10px;
}
.infoList .infoListLeft {
    text-align: left;
    color: #717171;
    border-bottom: 1px solid #d2d2d2;
    margin-bottom: 10px;
    padding-bottom: 15px;
    padding-top: 10px;
    width: 100%;
}
.infoList .infoListLeft ul {
    margin: 0;
    padding: 0;
}
.infoList .infoListLeft ul li {
    float: left;
    display: block;
    min-width: 80px;
    margin-left: 11px;
    height: 30px !important;
    padding: 5px 5px 0 5px;
    margin-bottom: 5px;
    text-align: center;
    border-radius: 3px;
    -webkit-box-shadow: 0 -7px 1px -3px #f8f8f8 inset;
    box-shadow: 0 -7px 1px -3px #f8f8f8 inset;
    border: 1px solid #e3e3e3;
    border-bottom: 1px solid #bbb;
    background: #fff;
}
</style>

<body>

 <?php 
  if (!isset($_SESSION['idcollector'])) {
    include ('includes/header.php');
}
else{
  include ('includes/header2.php');
}
 ?>
<!-- MAIN WRAPPER -->
<br>
<br>
<br>
<div class="body">
   
    <section class="slice bg-white bb">
        <div class="wp-section estate">
            <div class="container">
                <div class="row">        
                    <div class="col-md-12">
                       <div class="row">
                           <div class="col-md-7">
                                <div class="product-gallery">
                                    <div class="primary-image">
                                        <a href="<?php echo'Agent/'.$i['frontview'].'';?>"  class="theater" rel="group">

                                            <img src="<?php echo'Agent/'.$i['frontview'].'';?>" class="img-responsive img-center" alt="">
                                        </a>
                                    </div>
                                    
                                    <div class="owl-carousel owl-carousel-5 thumbnail-images style-2">
                                        <div class="item">
                                            <a href="<?php echo'Agent/'.$i['innerview1'].'';?>"  class="theater" rel="group">
                                                <img src="<?php echo'Agent/'.$i['innerview1'].'';?>" alt="">
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="<?php echo'Agent/'.$i['rightsideview'].'';?>"  class="theater" rel="group">
                                                <img src="<?php echo'Agent/'.$i['rightsideview'].'';?>" alt="">
                                            </a>
                                        </div>
                                       <div class="item">
                                            <a href="<?php echo'Agent/'.$i['leftsideview'].'';?>"  class="theater" rel="group">
                                                <img src="<?php echo'Agent/'.$i['leftsideview'].'';?>" alt="">
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="<?php echo'Agent/'.$i['backview'].'';?>"  class="theater" rel="group">
                                                <img src="<?php echo'Agent/'.$i['backview'].'';?>" alt="">
                                            </a>
                                        </div>
                                         <div class="item">
                                            <a href="<?php echo'Agent/'.$i['innerview1'].'';?>"  class="theater" rel="group">
                                                <img src="<?php echo'Agent/'.$i['innerview1'].'';?>" alt="">
                                            </a>
                                        </div>  <div class="item">
                                            <a href="<?php echo'Agent/'.$i['innerview2'].'';?>"  class="theater" rel="group">
                                                <img src="<?php echo'Agent/'.$i['innerview2'].'';?>" alt="">
                                            </a>
                                        </div>
                                          <div class="item">
                                            <a href="<?php echo'Agent/'.$i['innerview3'].'';?>"  class="theater" rel="group">
                                                <img src="<?php echo'Agent/'.$i['innerview3'].'';?>" alt="">
                                            </a>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                         
                            <div class="col-md-5">
                                <div class="product-info">

                                    <h3>Full Details</h3>
                                    <div class="wp-block property list no-border">
                                        <div class="wp-block-content clearfix">
                                            <small>10 days only</small>
                                            <h4 class="content-title">Special Offer</h4>
                                           
                                            <span class="pull-left">
                                                <span class="price">#N <?php print $i['amount']; ?></span> 
                                                <span class="period">per/year</span>
                                            </span>
                                            <span class="pull-right">
                                                <span class="capacity">
                                                    <i class="fa fa-user"></i>
                                                    <i class="fa fa-user"></i>
                                                </span>
                                            </span>
                                        </div>
                                       <hr>
                                         <div class="product-short-info">
                                                <p><i class="fa fa-inbox"></i><strong> Category</strong>: <?php print $i['category']; ?> Area</p>
                                                <p><i class="fa fa-check"></i><strong> Address</strong>: <?php print $i['address']; ?></p>
                                                
                                        </div>
                                         <hr>

                                         <hr>
                                        <div class="wp-block-footer style2 mt-15">
                                            <ul class="aux-info">
                                               
                                                <li><i class="fa fa-user"></i> <?php print $i['noofbedroom']; ?> Bedrooms</li>
                                                <li><i class="fa fa-tint"></i><?php print $i['noofbathtoi']; ?> Bathrooms</li>
                                                 <li><i class="fa fa-tint"></i><?php print  $count; ?> No of Bookings</li>
                                                <li><i class="fa fa-eye"></i><?php print $i['noofbathtoi']; ?> No of Views</li>

                                                
                                            </ul>  </div>
                                            
                                            <br>
                                           
                                               <button name="booking" class="btn btn-sm btn-base btn-icon btn-cart pull-right"  <a  href=<?php print  'estate-property.php?sta_a='. $i['frontview'];?>>  
                                               <span>Book</span>
                                               </button> 
                                               
                                               <h3>Contact Us</h3>

                                               <div class="product-short-info">
                                               
                                                <p><i class="fa fa-whatsapp greena"></i><strong> Whatsapp </strong>: +2348102458866</p>
                                                <p><i class="fa fa-facebook bluea"></i><strong> Facebook</strong>: <?php print $i['address']; ?></p>
                                                <p><i class="fa fa-phone reda"></i><strong> Phone No</strong>: +2348102458866 , +2347034643685</p>
                                        </div>

                                      
                                               <div style="font-weight: bold; color: red; margin-bottom: 15px;" class="text-center">
                                                <?php if ($err != '') {
                                                print $err;
                                                } ?>
                                              </div>
                                                                                        
                                       

                                    </div>
                                    
                                    
                                  
                                    
                                </div>
                            
                        </div>
            </div>
        </div>
       
    </section>
     <div class="container" id="facilities">
        <div class="borderBox" style="">
            <div class="headingView">
                <h5>Discription and Facilities</h5>
            </div>
            <div class="col-sm-8" id="borderRight">
                <div style=" border-bottom: 1px solid #d2d2d2; min-height:100px">
                    <p style="color: #323232; padding-top: 20px;">
                      <?php print $i['description']; ?>.                    </p>
                </div>

                <div class="infoList" style="">
                 <strong>Facilities</strong>
                    <div class="infoListLeft" style="width: 100%; float:right; ">



                        <ul>
                              
                            
                                <?php foreach($arryf as $value):?>
                                  <li><?php print $value; ?></li>
                                <?php endforeach?>
                             
                             

                                                                                        </ul>
                    </div>
                </div>


                <div class="infoList">
                    <strong> Policy</strong>
                    <div class="infoListLeft">
                      <?php print $i['Policy']; ?></div>
                </div>
            </div>

            <!--  -->
            <div class="clearfix"></div>
        </div>
    </div> <?php include ('includes/footer.php');?>
    </div>
</body>
