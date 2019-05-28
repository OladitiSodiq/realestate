 <?php
// include('functions.php');

session_start();
if (!isset($_SESSION['ag_name'])) {
  header('location:login.php');
}

$conn = new PDO("mysql:host=localhost;dbname=hostel_management", 'root', '');


$m = $_SESSION['ag_name'];
 $_SESSION['agentfulln']=$m;
// print_r($m);
 $query = 'SELECT fullname FROM agentdetail WHERE agid = :i'; 
 $query = $conn->prepare($query);
 $query -> bindParam(':i', $m);
 $query-> execute();
 $result = $query->fetchAll(PDO::FETCH_ASSOC);
 // var_dump($result);
?>



    <style type="text/css">
    

    span{
      color: green;
    }
    .greena {
    color: #69AA46!important;
}
 .bluea {
    color: #478FCA!important;
}
 
  </style>
  
 
  <?php
  include('includes/head.php');?>


  
  <body>
 
    <?php
  include('includes/header2.php');?>
<div class="body">
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <br/>
    <br/>
    <br/>
    <br/>
    <div class="jumbotron">
      <div class="container">
        <h1>Hello,
        <?php print $result[0]['ag_fullname']?> 
        </h1>
       <!--  <p>Welcome to  StudentMeetAgent</p>
         <p>This page allow you to select the categories of Accomodation you want and also get in contact with the agent of house you want.</p>
        <p><a class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p> -->
      </div>
    </div>

   
    <br/>
    <br/>
      <section class="slice light-gray bb">
        <div class="wp-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="wp-block hero white no-margin">
                            <div class="thmb-img">
                                <i class="fa fa-eye bluea"></i>
                            </div>
                            
                             <h2> <span><b>View Uploaded House</b></span></h2>
                            <p class="text-center"> <a class="btn btn-default" href="view.php" role="button">Go &raquo;</a></p>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="wp-block hero white no-margin">
                            <div class="thmb-img">
                                <i class="fa fa-upload greena"></i>
                            </div>
                            
                            <h2>Add New House</h2>
                           <p class="text-center"> <a class="btn btn-default" href="UploadAcoomodation.php" role="button">Go &raquo;</a></p>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="wp-block hero white no-margin">
                            <div class="thmb-img">
                                <i class="fa fa-close reda"></i>
                            </div>
                            
                            <h2>Delete Uploaded House</h2>
                           <p class="text-center"> <a class="btn btn-default" href="#" role="button">Go &raquo;</a></p>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="wp-block hero white no-margin">
                            <div class="thmb-img">
                                <i class="fa fa-edit"></i>
                            </div>
                            
                            <h2>Edit Your Profile</h2>
                            <p class="text-center"> <a class="btn btn-default" href="edit-profile.php" role="button">Go &raquo;</a></p>
                        </div>
                    </div>
                        
                </div>
            </div>
        </div>
    </section>


 <br/>
    <br/>
  

      <hr>

      
     <!-- /container -->

</div>
 <br/>

  <?php include ('includes/footer.php');?>
  </body>
