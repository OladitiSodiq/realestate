
<?php 

include('functions.php');
//global variables used 
$msg = '';
$er_msg = '';

 
 if (isset($_POST['s_ave'])) 
 {
  // print_r($_POST);


 $fullnames =  $_POST['fullname'];
  $phonenos =  $_POST['phone'];
  $addresss =  $_POST['address'];
  $states=  $_POST['state'];
   $city=  $_POST['city'];
  $religions =  $_POST['religion'];
  $emails =  $_POST['email'];
  $usernames=  $_POST['username'];
  $passwords =  $_POST['pword'];
  $confirms =$_POST['cpwd'];
  
  
 


  if (empty($fullnames) || empty($phonenos)  || empty($addresss)  || empty($states) || empty($city) || empty($religions)|| empty($emails) ||  empty($usernames)   || empty($passwords) || empty($confirms)){
    $er_msg =  'You have to fill all this information to proceed';
  }
  elseif ($passwords != $confirms ) {
     $er_msg = 'Password field must be the same as confirm password field';
  }
  else
  {


    $query = "INSERT INTO student(fullname,s_phone,address,origin,city,religion,s_email,username,pword)
        values (:f ,:p ,:a ,:s , :ct ,:r ,:e ,:u ,:c )";
      $query = $conn->prepare($query);
      $query->execute([
          ':f' => $fullnames,
          ':p' => $phonenos,
          ':a' => $addresss,
          ':s' => $states,
          ':ct' => $city,
          ':r' => $religions,
          ':e' => $emails,
          ':u' => $usernames,
          ':c' => $passwords
      ]); 

    if ($query) {
      session_start();
       if (isset($_SESSION['View'])) {
      $_SESSION['View'] =$_SESSION['Viewrs'];
            header("Refresh: 2; url=estate-property.php");
      }
      else{
        header("Refresh: 2; url=login.php");

      }
   }
  }
}



?>

 <?php
     //include('includes/head.php');?> 
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
 

  <body>
   <div class="body">
   <!-- <section class="slice bg-white"> -->
    <section class="slice slice-lg bg-image">
        <div class="wp-section">
            <div class="container">
                <div class="row mb-40">
                    <div class="col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-3">                   
                        <div class="wp-block default user-form no-margin">
                            <div class="form-header">
                                <h2>Create your own account</h2>
                            </div>
                            <div class="form-body">
                                <form action="#" id="frmRegister" class="sky-form" action="user.php" method="post">       
                                <div class="alert alert-danger">
                                   <?php if ($er_msg != '') 
                                   {
                                        print $er_msg;
                                      } ?>
                              </div>                              
                                    <fieldset class="no-padding">           
                                        <section>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="label">Fullname</label>
                                                        <label class="input">
                                                            <i class="icon-append fa fa-user"></i>
                                                            <input type="text" name="fullname" placeholder="">
                                                            <b class="tooltip tooltip-bottom-right">Needed to enter the website</b>
                                                        </label>
                                                    </div>               
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <label class="label">E-mail</label>
                                                            <label class="input">
                                                                <i class="icon-append fa fa-envelope-o"></i>
                                                                <input type="email" name="email" placeholder="">
                                                                <b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
                                                            </label>
                                                        </div>  
                                                    </div>               
                                                </div>
                                            </div>   
                                            <div class="row">
                                             <div class="col-md-6">
                                                    <div class="form-group">
                                                     <label class="label">Religion</label>
                                                        <label class="select">
                                                   
                                                    <select name="religion" class="form-control">
                                                       <option value="0" selected="">Religion</option>
                                                        <option value="islam"> islam</option>
                                                        <option value="christen">christen</option>
                                                      </select>
                                                    
                                                    <i></i>
                                                </label>
                                                    </div>               
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="label">Username</label>
                                                        <label class="input">
                                                            <i class="icon-append fa fa-lock"></i>
                                                            <input type="text" name="username" placeholder="">
                                                            <b class="tooltip tooltip-bottom-right">Needed to enter the website</b>
                                                        </label>
                                                    </div>               
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="label">Password</label>
                                                        <label class="input">
                                                            <i class="icon-append fa fa-lock"></i>
                                                            <input type="password" name="pword" placeholder="">
                                                            <b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
                                                        </label>
                                                    </div>               
                                                </div>
                                                 <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="label">Password</label>
                                                        <label class="input">
                                                            <i class="icon-append fa fa-lock"></i>
                                                            <input type="password" name="cpwd" placeholder="">
                                                            <b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
                                                        </label>
                                                    </div>               
                                                </div>
                                            </div>   
                                        </section>
                                    </fieldset>
                                    
                                    <fieldset>
                                        <div class="row">
                                            <section class="col-xs-5">
                                                <label class="select">
                                                    <select  name="state" class="form-control">
                                                        <option value="0" selected="">State Of Origin</option>
                                                       
                                                        <option value="American Samoa">American Samoa</option>
                                                        <option value="Andorra">Andorra</option>
                                                        <option value="Angola">Angola</option>
                                                        
                                                    </select>
                                                    <i></i>
                                                </label>
                                            </section>
                                            
                                            <section class="col-xs-4">
                                                <label class="input">
                                                    <input type="text" name="city" placeholder="City">
                                                </label>
                                            </section>
                                            
                                           
                                        </div>
                                        
                                        <section>
                                            <label for="file" class="input">
                                                <input type="text" name="address" placeholder="Address">
                                            </label>
                                        </section>
                                        
                                        <section>
                                         <label class="input">
                                                        <i class="icon-append fa fa-phone"></i>
                                                        <input type="tel" name="phone" placeholder="Phone">
                                                    </label>
                                              
                                        </section>
                                        <section>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <label class="checkbox">
                                                        <input type="checkbox" name="subscription" id="subscription">
                                                        <i></i> I accept the <a href="#">terms and conditions</a>.
                                                    </label>
                                                </div>
                                                <div class="col-md-4">
                                                    <button class="btn btn-light btn-icon btn-icon-right btn-icon-go pull-right" type="submit" name="s_ave">
                                                        <span>Register now</span>
                                                    </button>
                                                </div>
                                        </section>
                                    </fieldset>
                                </form>   
                            </div>
                            <div class="form-footer light">
                                <p>Already have an account? <a href="login.php">Click here to sign in.</a></p>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </section>
    </div>
    </body>