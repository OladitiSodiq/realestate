  <?php
// include('functions.php');
//soooooooooooooo stupid

if (!isset($_SESSION['collector'])) {
  header('location:agent-login.php');
}

  $conn = new PDO("mysql:host=localhost;dbname=hostel_management", 'root', '');


$c = (int)$_SESSION['collector'];
 $query = 'SELECT ag_fullname FROM agentdetail WHERE agid = :i'; 
 $query = $conn->prepare($query);
 $query -> bindParam(':i', $c);
 $query-> execute();
 $result = $query->fetchAll(PDO::FETCH_ASSOC);


 // var_dump($result);
?>


<div class="navbar navbar-default navbar-fixed-top" role="navigation">
<!-- <nav class="navbar navbar-inverse"> -->
         <div class="container ">
          <!-- <div class="navbar-btn ">
            <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
          </div> -->
<div class="navbar-header ">
           
          <a class="navbar-brand" href="../index.php">
                    <img src="images/NEWS.png">
                </a>
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
             <a class="navbar-brand" href="#">Estate </a>
          </div>
          <div id="navbar-menu" class="navbar-collapse collapse">
            
           
            
            <ul class="nav navbar-nav navbar-right">
              
              
             <li><a><?php print $result[0]['ag_fullname']?> </a> </li>
              
           <li><a href="../logout.php"><span>Logout</span></a></li>
            </ul>
          </div>
        </div>
        </nav>
        </div>