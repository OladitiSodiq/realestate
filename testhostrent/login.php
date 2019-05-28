
<?php
include('functions.php');
$l_msg = '';

?>

<?php if (isset($_POST['login-submit'])) {
  $email = $_POST['username'];
  $password = $_POST['pwd'];

  if (empty($email) || empty($password)) {
    $l_msg = 'Fill form properly to login';
  }else{
    $query = "SELECT * FROM student WHERE username= :e AND pword = :p";
    $query = $conn -> prepare($query);
    $query -> execute([':e' => $email, ':p' => $password ]);
    $results = $query->fetchAll(PDO::FETCH_ASSOC);
    // print $result;

    if ($results) {

        $results = $results[0];
      session_start();
      $_SESSION['idcollector'] = $results['s_id'];
     
    if (!isset($_SESSION['View'])) {
  $_SESSION['Viewpage'] =$_SESSION['View'];
  header('location:category.php');
     
}else{
     
      header('location:estate-property.php');
    }
if (!isset($_SESSION['View2'])) {
   $_SESSION['Viewpage'] =$_SESSION['View'];
  header('location:category.php');
}
      else{
     
      header('location:estate-property.php');
    }
  }
  else{
      $l_msg = 'Wrong email/password combination';
      // print $result;
    }

  }
} ?>
 
 <?php
     include('includes/head.php');?> 
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
             <a class="navbar-brand" href="#">Student meet Agent</a>
          </div>
          <div id="navbar-menu" class="navbar-collapse collapse">
             <ul class="nav navbar-nav navbar-center">
           
            </ul>
           
            
            <ul class="nav navbar-nav navbar-right">
              
              
            
              
           <li><a href="../login.php"><span>Login</span></a></li>
            </ul>
          </div>
        </div>
        </nav>
        </div>
        <br> <br>
  <body>
   <div class="body">
   <section class="slice slice-lg bg-image" 
   >
   <!-- style="background-image:url(images/backgrounds/full-bg-1.png);
   " -->
          <div class="wp-section">
              <div class="container">
                  <div class="row">
                      <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                          <div class="wp-block default user-form user-form-alpha no-margin"> 
                              <div class="form-header">
                                  <h2>Sign in to your account</h2>
                              </div>

                              <div class="form-body">
                                  <form action="login.php" method="post" id="frmLogin" class="sky-form">                                    
                                      <fieldset>
                                          <section>
                                              <div style="font-weight: bold; color: red; margin-bottom: 15px;" class="text-center">
                                                <?php if ($l_msg != '') {
                                                print $l_msg;
                                                } ?>
                                              </div>
                                          </section>                  
                                          <section>
                                              <div class="form-group">
                                                  <label class="label">Username</label>
                                                  <label class="input">
                                                      <i class="icon-append fa fa-user"></i>
                                                      <input type="text" name="username" placeholder="Enter username">
                                                  </label>
                                              </div>     
                                          </section>
                                          <section>
                                              <div class="form-group">
                                                  <label class="label">Password</label>
                                                  <label class="input">
                                                      <i class="icon-append fa fa-lock"></i>
                                                      <input type="password" name="pwd" placeholder="Enter password">
                                                  </label>
                                              </div>     
                                          </section> 
                                          <section>
                                              <div class="row">
                                                  <div class="col-md-12">
                                                      <label class="checkbox"><input type="checkbox" name="remember" checked><i></i>Keep me logged in</label>
                                                  </div>
                                              </div>
                                          </section>

                                          <section>
                                              <button class="btn btn-base btn-icon btn-icon-right btn-sign-in pull-right" type="submit" name="login-submit" >
                                                  <span>Next Step</span>
                                              </button>
                                          </section>
                                      </fieldset>  
                                  </form>  
                              </div>
                              <div class="form-footer">
                                  <p>Lost your password? <a href="#">Click here to recover.</a></p>
                              </div>
                              <div class="form-footer light">
                                <p>Already have an account? <a href="user.php">Click here to sign in.</a></p>
                            </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
   </section>

  </div>
  </body>