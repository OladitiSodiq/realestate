
<?php 

include('../functions.php');
//global variables used 
$msg = '';
$er_msg = '';



 if (isset($_POST['s_ave'])) 
 {
  // print_r($_POST);


  $fullnames =  $_POST['fullname'];
  $usernames=  $_POST['username'];
  $passwords =  $_POST['pword'];
  $confirms =$_POST['cpwd'];
  $status ='edit';
  
  
 


  if (empty($fullnames)   ||empty($usernames)   || empty($passwords) || empty($confirms)){
    $er_msg =  'You have to fill all this information to proceed';
  }
  elseif ($passwords != $confirms ) {
     $er_msg = 'Password field must be the same as confirm password field';
  }
  else
  {


    $query = "INSERT INTO agentdetail(ag_fullname,ag_username,ag_pword,status)
        values (:f,:u ,:c,:s )";
      $query = $conn->prepare($query);
      $query->execute([
          ':f' => $fullnames,
          ':u' => $usernames,
          ':c' => $passwords,
          ':s' => $status
      ]); 

    if ($query) {
      $er_msg = 'Students information insertion successful. ';
      header("Refresh: 2; url=agent-login.php");
      
    }

  }
  

  
 



 }




?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/homestyle.css">
      <link rel="stylesheet" href="../assets/css/vendor/icon-sets.css">

   

  <body>
    <?php include('../includes/header.php');?>
    <br>
    <br>
    <br>
<div class="container">
      <h2>Registration Form</h2>
      <form role="form" name="reg_form" action="agent-prereg.php" method="post" enctype="multipart/form-data">
      <div style="font-weight: bold; font-size: ; color: red; margin-top: 20px;" class="text-center">
              <?php if ($er_msg != '') {
                print $er_msg;
              } ?>
            </div>

             <div class="form-group">
          <label for="">fullname:</label>
          <input type="text" class="form-control" name="fullname" placeholder="Enter fullname">
        </div>

         <div class="form-group">
          <label for="">Username:</label>
          <input type="text" class="form-control"   name="username" placeholder="Enter username">
        </div>



        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" id="pwd" name="pword" placeholder="Enter password">
        </div>

        <div class="form-group">
          <label for="">Confirm Password:</label>
          <input type="password" class="form-control" id="pwd" name="cpwd" placeholder="Confirm password">
        </div>

        <hr/>

        



        
 


        
        <button type="submit" class="btn btn-default" name="s_ave">Save</button>
        <br>
        <br>
      </form>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../assets/js/jquery/jquery-2.1.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../assets/js/bootstrap.min.js"></script>
  </body>
