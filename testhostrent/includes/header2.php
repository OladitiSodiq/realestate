  <?php
// include('functions.php');

//session_start();
if (!isset($_SESSION['idcollector'])) {
  header('location:login.php');
}

$conn = new PDO("mysql:host=localhost;dbname=hostel_management", 'root', '');


$m = (int)$_SESSION['idcollector'];
 $query = 'SELECT fullname FROM student WHERE s_id = :i'; 
 $query = $conn->prepare($query);
 $query -> bindParam(':i', $m);
 $query-> execute();
 $result = $query->fetchAll(PDO::FETCH_ASSOC);
 // var_dump($result);

  $_SESSION['name']=$result[0]['fullname'];

?>



 

    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
<!-- <nav class="navbar navbar-inverse"> -->
        <div class="container ">
          <!-- <div class="navbar-btn ">
            <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
          </div> -->
<div class="navbar-header ">
           
          <a class="navbar-brand" href="index-2.html" title="Boomerang | One template. Infinite solutions">
                    <img src="images/NEWS.png" alt="Boomerang | One template. Infinite solutions">
                </a>
          
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
             <a class="navbar-brand" href="#">my real estate test LTD </a>
          </div>
          <div id="navbar-menu" class="navbar-collapse collapse">
             <ul class="nav navbar-nav navbar-center">
            <li><a href="booked_item.php"><i class="fa fa-eye"></i>View Booked House</a></li>
            </ul>
           
            
            <ul class="nav navbar-nav navbar-right">
              
              
             <li><a><?php print $result[0]['fullname']?></a> </li>
              
           <li><a href="../logout.php"><span>Logout</span></a></li>
            </ul>
          </div>
        </div>
        </nav>
        </div>
 
