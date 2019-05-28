<?php
session_start();

include('../functions.php');

//
//$s = 'edit';
// $querys = "SELECT status FROM agentdetail WHERE status = 'edit'";
//     $querys = $conn -> query($querys);
//    $count = count($querys->fetchAll());
//     // $querys -> execute([':e' => $email);
//     // $results = $querys->fetch(PDO::FETCH_ASSOC);
//     // // print $result;

//     if ($count > 0 ) {




// $query = "SELECT * FROM agentdetail WHERE ag_username= :e AND ag_pword = :p";
//     $query = $conn -> prepare($query);
//     $query -> execute([':e' => $email, ':p' => $password ]);
//     $results = $query->fetch(PDO::FETCH_ASSOC);








if (!isset($_SESSION['collector'])) {
	header('location: agent-login.php');
}else{// select information about the person in the database
	
		$c = (int)$_SESSION['collector'];
		 $query = 'SELECT  *  FROM agentdetail WHERE agid = :i'; 
		 $query = $conn->prepare($query);
		 $query -> bindParam(':i', $c);
		 $query-> execute();
		 $i = $query->fetchAll(PDO::FETCH_ASSOC);
		 $i = $i[0];


}

 


//global variables used 
$msg = '';
$er_msg = '';

$conn = new PDO("mysql:host=localhost;dbname=hostel_management", 'root', '');

 if (isset($_POST['submit'])) {
 	// print_r($_POST);
 $ag_id = $_POST['ag_id'];
  $fullname =  $_POST['fullname'];

  $phone =  $_POST['phone'];
  	$address =  $_POST['address'];
  	$state =  $_POST['state'];
 	$email =  $_POST['email'];
 	 $username=  $_POST['username'];
 	$gender =  $_POST['gender'];
 	$status = '1';
 	
 


 

 	if (empty($fullname) || empty($phone) || empty($address) || empty($state) || empty($email) || empty($username) || empty($gender) ) 
 	{
 		$er_msg =  'You have to fill all this information to proceed';
 	}else{

 		$query = "UPDATE agentdetail SET  ag_fullname = :f, ag_phone = :p, ag_address = :a, ag_origin = :s, ag_email= :e, ag_username = :u, gender = :g, status = :t WHERE agid = :d";
 		
	   	$query = $conn->prepare($query);
		$query->execute([
			':d' => $ag_id,
			':f' => $fullname,
			':p' => $phone,
			':a' => $address,
			':s' => $state,
			':e' => $email,
			':u' => $username,
			':g' => $gender,
			':t' => $status
			

			
			]);	

		if ($query) {
			//print_r($query);

			$er_msg = 'Staff information edited successful. ';
			header("Refresh: 2; url=Dashboard.php");
		}

 	}
 	

 	
 



 }


// }
// else{
// 	header('location:index.php');
// }

?>


<style type="text/css">
		.form-input{
			margin-top: 30px;
		}

		span{
			color: green;
		}
	</style>

     <?php include('includes/head.php');?> 

  <body>
 
    <?php include('includes/header2.php');?>
  <div class="body">
      <br>
        <br>
          <br>
            <br>
	<div class="container top-margin">

					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark"> Edit profile </h6>

									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="table-wrap">
											<div> Fill form to edit profile </div>
										</div>


											<div class="holding-form col-md-6 col-md-offset-3" >
												
												<form class="form" action="edit-profile.php" method="post">

													    <div class="alert alert-danger">
													         <?php if ($er_msg != '') 
													         {
												                print $er_msg;
												              } ?>
													    </div>

													    <div class="col-md-6">
															<input type="hidden" name="ag_id" class="form-control" value=<?php print $i['agid']?>>
														</div>
													   


														<div class="form-input">
															<div class="input-desc">Fullname <span> <b>*</b> </span> </div>
															<input type="text" name="fullname" class="form-control" placeholder="full name"  value=<?php print $i['ag_fullname']?> >
														</div>

														<div class="form-input">
															<div class="input-desc"> Username <span> <b>*</b> </span> </div>
															<input type="text" name="username"  class="form-control" placeholder="Username" value=<?php print $i['ag_username']?> >
														</div>


														<div class="form-input">
															<div class="input-desc"> Phone <span> <b>*</b></span> </div>
															<input type="text" name="phone" class="form-control" placeholder="phone">
														</div>

														<div class="form-input">
															<div class="input-desc"> Email <span> <b>*</b></span> </div>
															<input type="text" name="email" class="form-control" placeholder="email address">
														</div>


														<div class="form-input">
															<div class="input-desc"> State  </div>
															<input type="text" name="state" class="form-control" placeholder="State">

														</div>

														<div class="form-input">
															<div class="input-desc"> Address </div>
															<input type="text" name="address" class="form-control" placeholder="State">

														</div>

														<div class="form-input">
															<div class="input-desc"> Gender  </div>
															<select name="gender" class="form-control">
																<option value=""> Select gender </option>

																<option 

																	

																	value="male"> Male 
																</option>

																<option 

																	
																	

																	value="female"> Female 
																</option>


															</select>
														</div>

														<div class="form-input">
															<input type="submit" name="submit" class="btn btn-success" value="Edit profile">
														</div>
												</form>
											</div>

									</div>	
								</div>
							</div>
						</div>
					</div>

	</div>

</div>
<?php include('includes/footer.php');?> 
</body>
