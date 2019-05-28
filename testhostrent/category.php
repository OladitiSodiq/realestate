 <?php
// include('functions.php');

// session_start();
// if (!isset($_SESSION['idcollector'])) {
//   header('location:login.php');
// }

// $conn = new PDO("mysql:host=localhost;dbname=hostel_management", 'root', '');


// $m = (int)$_SESSION['idcollector'];
//  $query = 'SELECT fullname FROM student WHERE s_id = :i'; 
//  $query = $conn->prepare($query);
//  $query -> bindParam(':i', $m);
//  $query-> execute();
//  $result = $query->fetchAll(PDO::FETCH_ASSOC);
 // var_dump($result);
 session_start();
?>

    <style type="text/css">
    

    span{
      color: green;
    }
  </style>
  <?php include ('includes/head.php');?>
  <body>
 
   <?php

    if (!isset($_SESSION['idcollector'])) {
    include ('includes/header.php');
}
else{
   include ('includes/header2.php');
}
    ?>
    <br/> <br/>
     <br/> <br/>
    <div class="body">
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Hello,
        <?php 
        // print $result[0]['fullname']?> 
        
        </h1>
        <p>Welcome to  StudentMeetAgent</p>
         <p>This page allow you to select the categories of Accomodation you want and also get in contact with the agent of house you want.</p>
        <p><a class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>
      </div>
    </div>
 <br/>
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-3">
        <span>  <h2>Religious Area</h2> </span>
          <p><a class="btn btn-default" href="religious.php" role="button">View &raquo;</a></p>
        </div>
        <div class="col-md-3">
          <span>  <h2>Ghetto Area</h2></span>
          
          <p><a class="btn btn-default" href="ghetto.php" role="button">View &raquo;</a></p>
       </div>
        <div class="col-md-3">
          <span>  <h2>Market Area</h2></span>
          
          <p><a class="btn btn-default" href="market.php" role="button">View &raquo;</a></p>
        </div>
        <div class="col-md-3">
          <span>  <h2>Cool Area</h2></span>
          
          <p><a class="btn btn-default" href="cool.php" role="button">View &raquo;</a></p>
        </div>
      </div>
  </div>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br/>
  <?php include ('includes/footer.php');?>
  </body>
