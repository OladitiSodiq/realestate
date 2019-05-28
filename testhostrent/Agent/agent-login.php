
<?php
include('../functions.php');
$l_msg = '';

?>

<?php if (isset($_POST['login-submit'])) {
  $email = $_POST['username'];
  $password = $_POST['pwd'];

  if (empty($email) || empty($password)) {
    $l_msg = 'Fill form properly to login';
  }else{
    // $query = "SELECT * FROM agentdetail ";
  $query = "SELECT * FROM agentdetail WHERE ag_username= :e AND ag_pword = :p";
    $query = $conn -> prepare($query);
    $query -> execute([':e' => $email, ':p' => $password ]);
    $results = $query->fetchAll(PDO::FETCH_ASSOC);
    // $results = $results[0];


    // print json_encode($results);
    //print $results['agid'];

    if ($results) {

      $results = $results[0];
      session_start();
       $_SESSION['status'] = $results['status'];
       
       

       if ($_SESSION['status'] == 1)
       {
        $_SESSION['ag_name'] = $results['ag_fullname'];
        $_SESSION['collector'] = $results['agid'];
         header('location:Dashboard.php');
       }
       else{
        $_SESSION['collector'] = $results['agid'];
         $_SESSION['ag_name'] = $results['ag_fullname'];
        header('location:edit-profile.php');

       }
     
     
      // print 'the esectution has gottine here';
    }else{
      $l_msg = 'Wrong email/password combination';
      // print $result;
    }

  }
} ?>

   <?php
     include('includes/head.php');?> 

  <body>
   <div class="body">
   <section class="slice slice-lg bg-image" style="background-image:url(images/backgrounds/full-bg-1.png);">
          <div class="wp-section">
              <div class="container">
                  <div class="row">
                      <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                          <div class="wp-block default user-form user-form-alpha no-margin"> 
                              <div class="form-header">
                                  <h2>Sign in to your account</h2>
                              </div>

                              <div class="form-body">
                                  <form action="agent-login.php" method="post" id="frmLogin" class="sky-form">                                    
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
                          </div>
                      </div>
                  </div>
              </div>
          </div>
   </section>

  </div>
  </body>