  <?php
 include('../functions.php');
 
 session_start();

    if (!isset($_SESSION['agentfulln'])) {
    header('location: agent-login.php');
}else{// select information about the person in the database
    
        $c =$_SESSION['agentfulln'];
         $query = 'SELECT  *  FROM agentupload WHERE ag_name = :i'; 
         $query = $conn->prepare($query);
         $query -> bindParam(':i', $c);
         $query-> execute();
         $i = $query->fetchAll(PDO::FETCH_ASSOC);

}

  ?>
 <?php
     include('includes/head.php');?> 
<style type="text/css">
.#loginmodal {
  width: 300px;
  padding: 15px 20px;
  background: #f3f6fa;
  
  border-radius: 6px;
  
  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.5);
}

.#loginform { /* no default styles */ }

.#loginform label { display: block; font-size: 1.1em; font-weight: bold; color: #7c8291; margin-bottom: 3px; }
</style>
  <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
  <script type="text/javascript" charset="utf-8" src="js/jquery.leanModal.min.js"></script>

<body>

    <?php
     include('includes/header2.php');?> 

<!-- SLIDEBAR -->

<!-- MAIN WRAPPER -->
<br><br><br>
<div class="body">

    <section class="slice bg-white bb">
            <div class="wp-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <!-- PAGINATION & FILTERS -->
                            <div class="wp-block default product-list-filters light-gray">
                                <ul class="pagination pagination pull-left">
                                    <li><a href="#" hidefocus="true">«</a></li>
                                    <li class="active"><a href="#" hidefocus="true">1</a></li>
                                    <li><a href="#" hidefocus="true">2</a></li>
                                    <li><a href="#" hidefocus="true">3</a></li>
                                    <li><a href="#" hidefocus="true">4</a></li>
                                    <li><a href="#" hidefocus="true">5</a></li>
                                    <li><a href="#" hidefocus="true">»</a></li>
                                </ul>
                                <div class="filter sort-filter pull-right">
                                    <label>Sort by</label>
                                    <select>
                                        <option>Price low</option>
                                        <option>Price high</option>
                                        <option>Property type</option>
                                    </select>
                                </div>
                            </div>
                            <!-- PROPERTY LISTING -->
                            <?php foreach($i as $imgs):?>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="wp-block property list">
                                            <div class="wp-block-title">
                                                <h3><a href="#" hidefocus="true">3015 Grand Avenue, CocoWalk</a></h3>
                                            </div>
                                            <div class="wp-block-body">
                                                <div class="wp-block-img">
                                                    <a href="#" hidefocus="true">
                                                        <img alt="" <?php echo' < img src="'.$imgs['frontview'].'">';?>
                                                    </a>
                                                </div>
                                                <div class="wp-block-content clearfix">
                                                    <small>10 days only</small>
                                                    <h4 class="content-title">Special Offer</h4>
                                                    <p class="description"><?php print $imgs['description']; ?></p>
                                                    <span class="pull-left">
                                                        <span class="price">#N <?php print $imgs['amount']; ?></span> 
                                                        <span class="period">per/Year</span>
                                                    </span>
                                                    <span class="pull-right">
                                                    <span class="capacity">
                                                        <i class="fa fa-user"></i>
                                                        <i class="fa fa-user"></i>
                                                    </span>
                                                </span></div>
                                            </div>
                                            <div class="wp-block-footer">
                                                <ul class="aux-info">
                                                    <li><i class="fa fa-building"></i>2300 Sq Feet</li>
                                                    <li><i class="fa fa-user"></i>  <?php print $imgs['noofbedroom']; ?>  Bedrooms</li>
                                                    <li><i class="fa fa-tint"></i> <?php print $imgs['noofbathtoi']; ?>  Bathrooms</li>
                                                    <li> <a href="#loginmodal" id="modaltrigger"><i class="fa fa-close"></i>Delete</a></li>
                                                    <li> <a href="" ><i class="fa fa-edit"></i>Edit</a></li>
                                                    <li> <a href="" ><i class="fa fa-eye"></i>View Full Details</a></li>
                                                </ul>


                                            </div>

                                        </div>
                                    </div>
                                </div>

                            <?php endforeach?>

                           
                        </div>
                        <?php
     include('search-side.php');?> 
                    </div>
                </div>
            </div>
    </section>
</div>
 <div id="loginmodal" >
   
    <form id="loginform" name="loginform" method="post" action="index.html">
     <div  class="text-center">
              <input type="hidden" name="idp_form_id" >
              <input type="submit" name="delete_idp" class="btn btn-danger" value="YES">
            <a href="all_idp.php"><button class="btn btn-success"> NO </button></a>
            </div>
    </form>
  </div>
 <?php
     include('includes/footer.php');?> 

     <script type="text/javascript">
$(function(){
  $('#loginform').submit(function(e){
    return false;
  });
  
  $('#modaltrigger').leanModal({ top: 110, overlay: 0.45, closeButton: ".hidemodal" });
});
</script>
</body>