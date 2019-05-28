<?php  
if (isset($_POST['sorting'])) 
      {
         session_start();
        $_SESSION['categ'] =$_POST['category'];
        $_SESSION['bedr'] =$_POST['bedrooms'];
        $_SESSION['pric'] =$_POST['price'];
         $_SESSION['locat'] =$_POST['location'];


        header('location:search.php');
      }
?>
 <div class="col-md-3">
                            <div class="sidebar ">
                                <!-- FILTERS -->
                                <div class="panel panel-default panel-sidebar-1">
                                    <div class="panel-heading"><h2>Filter by</h2></div>
                                    <div class="panel-body">
                                        <form class="form-light"  action="search-side.php" method="get" role="form">
                                            <div class="form-group">
                                                <label>Search for House</label>
                                               <!--  <input type="text" class="form-control" placeholder="I want to find..." hidefocus="true"> -->
                                            </div>
                                            <div class="form-group">
                                                <label>Category</label>
                                                <select class="form-control" name="category">
                                                     <option value="">  </option>
                                                            <option value="Face me & Face you">Face me & Face you</option>
                                                            <option value="Bedroom Flat">Bedroom Flat</option>
                                                            <option value="Boyz quaters">Boyz quaters</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>No of Bedrooms</label>
                                                <select class="form-control" name="bedrooms">
                                                     <option value=""> </option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                        </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Price</label>
                                                <select class="form-control" name="price">
                                                     <option value="">  </option>
                                                            <option value="18000">18000</option>
                                                            <option value="20000">20000</option>
                                                            <option value="30000">$30000</option>
                                                            <option value="40000">$4000</option>
                                                        </select>
                                            </div>
                                                    <div class="form-group">
                                                        <label>Location</label>
                                                        <select class="form-control" name="location">
                                                            <option> </option>
                                                            <option value="Religious">Religious </option>
                                                            <option value="Ghetto">Ghetto</option>
                                                            <option value="Cool">Cool</option>
                                                            <option value="Market">Market</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                            
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <button type="submit" name="sorting" class="btn btn-block btn-base btn-icon btn-icon-right btn-search">
                                                        <span>Search</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>

                              
                                
                            </div>
                        </div>