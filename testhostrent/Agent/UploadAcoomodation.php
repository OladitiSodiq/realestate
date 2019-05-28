 <?php
include('../functions.php');
//$conn = new PDO("mysql:host=localhost;dbname=hostel_management", 'root', '');
$er_msg = '';
session_start();
if (!isset($_SESSION['ag_name'])) {
  header('location:agent-login.php');
}
 if (isset($_POST['submit'])) {
  // print_r($_POST);
    $ag_name =$_SESSION['ag_name'];
    $address =  $_POST['address'];
    $description =  $_POST['description'];
    $category =  $_POST['category'];
    $noofbedroom =$_POST['noofbedroom'];
    $rentcategory=$_POST['rentcategory'];
    $noofbathtoi=$_POST['noofbathtoi'];
     $amount=$_POST['amount'];
      $facilities=$_POST['facilities'];
     $Policy="No Smoking | No Cultism Activities | No Alcohol | No Curfew | No Indiscipline Act";
    // $frontview=  $_POST['frontview'];
    // $rightsideview =  $_POST['rightsideview'];s
    // $leftsideview =  $_POST['leftsideview'];
    // $backview =  $_POST['backview'];
    // $innerview1 =  $_POST['innerview1'];
    // $innerview2 =  $_POST['innerview2'];
    // $innerview3 =  $_POST['innerview3'];


 // || empty($frontview) || empty($rightsideview) || empty($leftsideview) || empty($backview)|| empty($innerview1)  || empty($innerview2) || empty($innerview3)

  if (empty($ag_name) || empty($address) || empty($description)|| empty($category) || empty($noofbedroom) || empty($noofbathtoi) || empty($rentcategory)|| empty($amount) || empty($facilities)) 
  {
    $er_msg =  'You have to fill all this information to proceed';
  }else{

    if ((!isset($_FILES['frontview']['tmp_name'])) || (!isset($_FILES['rightsideview']['tmp_name'])) || (!isset($_FILES['leftsideview']['tmp_name'])) || (!isset($_FILES['backview']['tmp_name'])) || (!isset($_FILES['innerview1']['tmp_name'])) || (!isset($_FILES['innerview2']['tmp_name'])) || (!isset($_FILES['innerview3']['tmp_name'])))  {
   echo '';
  }else{
  $frontview=$_FILES['frontview']['tmp_name']; 
   $rightsideview=$_FILES['rightsideview']['tmp_name'];
    $leftsideview=$_FILES['leftsideview']['tmp_name'];
     $backview=$_FILES['backview']['tmp_name'];
      $innerview1=$_FILES['innerview1']['tmp_name'];
       $innerview2=$_FILES['innerview2']['tmp_name'];
        $innerview3=$_FILES['innerview3']['tmp_name'];



  $imagefrontview= addslashes(file_get_contents($_FILES['frontview']['tmp_name']));
   $imagerightsideview= addslashes(file_get_contents($_FILES['rightsideview']['tmp_name']));
    $imageleftsideview= addslashes(file_get_contents($_FILES['leftsideview']['tmp_name']));
     $imagebackview= addslashes(file_get_contents($_FILES['backview']['tmp_name']));
      $imageinnerview1= addslashes(file_get_contents($_FILES['innerview1']['tmp_name']));
       $imageinnerview2= addslashes(file_get_contents($_FILES['innerview2']['tmp_name']));
        $imageinnerview3= addslashes(file_get_contents($_FILES['innerview3']['tmp_name']));



  $image_frontview= addslashes($_FILES['frontview']['name']);
  $image_rightsideview= addslashes($_FILES['rightsideview']['name']);
  $image_leftsideview= addslashes($_FILES['leftsideview']['name']);
   $image_backview= addslashes($_FILES['backview']['name']);
    $image_innerview1= addslashes($_FILES['innerview1']['name']);
     $image_innerview2= addslashes($_FILES['innerview2']['name']);
      $image_innerview3= addslashes($_FILES['innerview3']['name']);
      
      move_uploaded_file($_FILES["frontview"]["tmp_name"],"photos/" . $_FILES["frontview"]["name"]);
       move_uploaded_file($_FILES["rightsideview"]["tmp_name"],"photos/" . $_FILES["rightsideview"]["name"]);
        move_uploaded_file($_FILES["leftsideview"]["tmp_name"],"photos/" . $_FILES["leftsideview"]["name"]);
         move_uploaded_file($_FILES["backview"]["tmp_name"],"photos/" . $_FILES["backview"]["name"]);
          move_uploaded_file($_FILES["innerview1"]["tmp_name"],"photos/" . $_FILES["innerview1"]["name"]);
           move_uploaded_file($_FILES["innerview2"]["tmp_name"],"photos/" . $_FILES["innerview2"]["name"]);
            move_uploaded_file($_FILES["innerview3"]["tmp_name"],"photos/" . $_FILES["innerview3"]["name"]);
      
      $frontview="photos/" . $_FILES["frontview"]["name"];
       $rightsideview="photos/" . $_FILES["rightsideview"]["name"];
        $leftsideview="photos/" . $_FILES["leftsideview"]["name"];
         $backview="photos/" . $_FILES["backview"]["name"];
          $innerview1="photos/" . $_FILES["innerview1"]["name"];
           $innerview2="photos/" . $_FILES["innerview2"]["name"];
            $innerview3="photos/" . $_FILES["innerview3"]["name"];
      // $caption=$_POST['caption'];
      
      // $save=mysql_query("INSERT INTO photos (location, caption) VALUES ('$location','$caption')");
      // header("location: index.php");

       $query = "INSERT INTO agentupload(ag_name,address,description,category,frontview,rightsideview,leftsideview,backview,innerview1,innerview2,innerview3,noofbedroom,rentcategory,noofbathtoi,amount,Facilities,Policy)
        values (:a,:ad ,:d,:c,:f,:r,:l,:b,:i1,:i2,:i3,:n,:re,:no,:am,:fa,:p)";
      $query = $conn->prepare($query);
      $query->execute([
          ':a' =>$ag_name,
          ':ad' => $address,
          ':d' => $description,
          ':c' => $category,
          ':f' =>$frontview,
          ':r' =>$rightsideview,
          ':l' => $leftsideview,
          ':b' => $backview,
          ':i1'=> $innerview1,
          ':i2'=> $innerview2,
          ':i3'=> $innerview3,
          ':n'=>$noofbedroom,
          ':re'=>$rentcategory,
          ':no'=>$noofbathtoi,
          ':am'=>$amount,
          ':fa'=>$facilities,
          ':p'=>$Policy

          
      ]);
      if ($query) {
        // print_r($query);
        // print_r($_FILES);
        print_r($_POST);
      // $er_msg = 'Students information insertion successful. ';
      // header("Refresh: 2; url=index.php");
      
    }
      $er_msg = 'Students information insertion not successful. ';
      exit();         
  }
    




































    

}



}
 // var_dump($result);

?>
<style type="text/css">
    
.modal-footer {
    margin-top: 0;
    padding: 15px;
    text-align: right;
    border-top: 1px solid #e5e5e5;
    box-shadow: none;
    background-color: #EFF3F8;
}
.wizard-actions {
    text-align: right;
}
.btn-success{
  background-color: #87B87F!important;
}
.btn{
  color: #FFF!important;
    text-shadow: 0 -1px 0 rgba(0,0,0,.25);
    background-image: none!important;
    transition: background-color .15s,border-color .15s,opacity .15s;
    margin: 0;
    position: relative;
}
</style>

     <?php include('includes/head.php');?>  

  <body>
 
      <?php
  include('includes/header2.php');?>
      <br>
        <br>
          <br>
            <br>
<div class="body">

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
                      <div> Fill form to </div>
                    </div>
                     <form class="form" action="UploadAcoomodation.php" enctype="multipart/form-data" method="post">


                  <div class="holding-form col-md-6 col-md-offset-3" >
                    
                   

                    
                            <div class="alert alert-danger"> <?php if ($er_msg != '') {
                print $er_msg;
              } ?></label>   
                          </div>

                          
                         


                      <div class="form-input">
                        <div class="input-desc">Address <span> <b>*</b> </span> </div>
                        <input type="text" name="address" class="form-control" placeholder="Address" >
                      </div>

                      <div class="form-input">
                        <div class="input-desc"> Description <span> <b>*</b> </span> </div>
                         <textarea class="form-control" name = "description" rows="4" id="comment" placeholder="Description" ></textarea>
                      </div>

                     <div class="form-input">
                        <div class="input-desc"> Category  </div>
                        <select name="category" class="form-control">
                          <option value=""> Select Category </option>

                          <option  value="Religious"> Religious Area</option>

                          <option value="Ghetto"> Ghetto Area  </option>
                          <option value="Market"> Market Area  </option>
                          <option value="Cool"> Cool Area  </option>


                        </select>
                      </div>

                      <br/>
                      <div class="row">
                       <div class="col-xs-4">
                      <div class="input-desc"> Rent Category</div>

                      <select name="rentcategory" class="form-control">
                          <option value=""> Rent Category </option>

                          <option  value="Bedroom Flat"> Bedroom Flat </option>

                          <option value="Face me & Face you"> Face me & Face you </option>
                         
                      </select>
                       </div >
                      <div class="col-xs-4">
                      <div class="input-desc"> No of Bedroom</div>

                      <select name="noofbedroom" class="form-control">
                          <option value=""> No of Bedroom </option>

                          <option  value="1"> 1 </option>

                          <option value="2"> 2 </option>
                          <option value="3"> 3 </option>
                          
                      </select>
                       </div > 


                       <div class="col-xs-4">
                      <div class="input-desc"> Toilet & Bathroom</div>

                      <select name="noofbathtoi" class="form-control">
                          <option value=""> No of Toilet </option>

                          <option  value="1"> 1 </option>

                          <option value="2"> 2 </option>
                          <option value="3"> 3 </option>
                       
                      </select>
                       </div >
                                            
                                           
                      </div>
                      <div class="form-input">
                        <div class="input-desc">Amount/Year <span> <b>*</b> </span> </div>
                        <input type="text" name="amount" class="form-control" placeholder="Amount/Year" >
                      </div>
                       <div class="form-input">
                        <div class="input-desc">Facilities <span> <b>*</b> </span> </div>
                        <input type="text" name="facilities" class="form-control" placeholder="facilities" >
                      </div>

      
    </div>
    
</div>
<div class="container">
      <hr>
 <h2> External/Outside View</h2>

          <div class="col-md-3">
            <div class="form-group">
            <label for=""  value="Front View">Front View</label>

           <input type="file" name="frontview" class="ed">

            </div>
         </div>
         <div class="col-md-3">
            <div class="form-group">
            <label for="" value="Right Side View">Right Side View</label>

           <input type="file" name="rightsideview" class="ed">

            </div>
         </div>


         <div class="col-md-3">
            <div class="form-group">
            <label for="" value="Left Side View">Left Side View</label>

           <input type="file" name="leftsideview" class="ed">

            </div>
         </div>
        
        


          <div class="col-md-3">
                    <div class="form-group">
                    <label for=""  value="Back View">Back View</label>

                   <input type="file" name="backview" class="ed">

                    </div>
          </div>





          <h2> Internal View</h2>

         <div class="col-md-4">
            <div class="form-group">
            <label for=""  value="Front View">Inner View</label>

           <input type="file" name ="innerview1" class="ed">

            </div>
         </div>
         <div class="col-md-4">
                    <div class="form-group">
            <label for=""  value="Front View">Inner View</label>

           <input type="file" name ="innerview2" class="ed">

            </div>
          </div>



         <div class="col-md-4">
            <div class="form-group">
            <label for=""  value="Front View">Inner View</label>

           <input type="file" name ="innerview3" class="ed">

            </div>
         </div>




    </div>
<div class="modal-footer wizard-actions">
                        <input type="submit" name="submit" class="btn btn-success" value="Save">
                      </div>



    </form>
  </div>
            </div>
          </div>

  </div>
  </div>
</div>
 <?php include('includes/footer.php');?>
  
  </body>
