  <?php
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
  session_start();
include 'headerv1.html';
include 'pdo.php';
  ?>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="w3.css">
    <link rel="stylesheet" href="edit_resto_details.css">
     <script src="bootstrap/jquery.min.js"></script>
      <script src="bootstrap/js/bootstrap.min.js"></script>
      
   <div class="container">
        <div class="row">
        </br></br></br></br></br></br></br>
            <div class="col-lg-8 col-lg-offset-2 col-md-9 col-sm-10 col-xs-12">
              <?php
              if(isset($_POST['name'])&&isset($_POST['street'])&&isset($_POST['district'])&&isset($_POST['city'])&&isset($_POST['state'])&&isset($_POST['zipcode'])&&isset($_POST['country'])){
  if(isset($_POST['working1'])&&isset($_POST['working2'])&&isset($_POST['working3'])&&isset($_POST['working4'])&&isset($_POST['working5'])&&isset($_POST['working6'])&&isset($_POST['working7'])){
      if(!empty($_POST['name'])&&!empty($_POST['street'])&&!empty($_POST['district'])&&!empty($_POST['city'])&&!empty($_POST['state'])&&!empty($_POST['zipcode'])&&!empty($_POST['country'])){
          if(!empty($_POST['working1'])&&!empty($_POST['working2'])&&!empty($_POST['working3'])&&!empty($_POST['working4'])&&!empty($_POST['working5'])&&!empty($_POST['working6'])&&!empty($_POST['working7'])){
            
                $stmt=$db->prepare("UPDATE restaurants SET name=:name,email=:email,delivery=:delivery,preorder=:preorder,liveorder=:liveorder,street=:street,district=:district,city=:city,state=:state,zipcode=:zipcode,country=:country,working1=:working1,working2=:working2,working3=:working3,working4=:working4,working5=:working5,working6=:working6,working7=:working7,from1=:from1,from2=:from2,from3=:from3,from4=:from4,from5=:from5,from6=:from6,from7=:from7,to1=:to1,to2=:to2,to3=:to3,to4=:to4,to5=:to5,to6=:to6,to7=:to7 WHERE mob_no=:mob_no");

                $stmt->bindParam(":name",$_POST['name']);
                $stmt->bindParam(":mob_no",$_SESSION['mobile_no']);
                $stmt->bindParam(":email",$_POST['email']);
                $stmt->bindParam(":delivery",$_POST['delivery']);
                $stmt->bindParam(":preorder",$_POST['preorder']);
                $stmt->bindParam(":liveorder",$_POST['liveorder']);
                $stmt->bindParam(":street",$_POST['street']);
                $stmt->bindParam(":district",$_POST['district']);
                $stmt->bindParam(":city",$_POST['city']);
                $stmt->bindParam(":state",$_POST['state']);
                $stmt->bindParam(":zipcode",$_POST['zipcode']);
                $stmt->bindParam(":country",$_POST['country']);
                
                $stmt->bindParam(":working1",$_POST['working1']);
                $stmt->bindParam(":working2",$_POST['working2']);
                $stmt->bindParam(":working3",$_POST['working3']);
                $stmt->bindParam(":working4",$_POST['working4']);
                $stmt->bindParam(":working5",$_POST['working5']);
                $stmt->bindParam(":working6",$_POST['working6']);
                $stmt->bindParam(":working7",$_POST['working7']);
                
                $stmt->bindParam(":from1",$_POST['from1']);
                $stmt->bindParam(":from2",$_POST['from2']);
                $stmt->bindParam(":from3",$_POST['from3']);
                $stmt->bindParam(":from4",$_POST['from4']);
                $stmt->bindParam(":from5",$_POST['from5']);
                $stmt->bindParam(":from6",$_POST['from6']);
                $stmt->bindParam(":from7",$_POST['from7']);

                $stmt->bindParam(":to1",$_POST['to1']);
                $stmt->bindParam(":to2",$_POST['to2']);
                $stmt->bindParam(":to3",$_POST['to3']);
                $stmt->bindParam(":to4",$_POST['to4']);
                $stmt->bindParam(":to5",$_POST['to5']);
                $stmt->bindParam(":to6",$_POST['to6']);
                $stmt->bindParam(":to7",$_POST['to7']);
                
                $stmt->execute();
                echo "<div class='alert alert-success '>
                <h3>Data updated successfully ...</h3>
              </div>";
              }
            }
          }
        }

              ///commenting details

              $mob_no=$_SESSION['mobile_no'];
              $status=0;
            foreach($db->query("SELECT * FROM restaurants WHERE mob_no='$mob_no'") as $row){   ;
              $status=1;
              ?>
              <a href="add_foods.php" class="btn btn-primary">Add more food items</a>
                <br>
            <form id="addr" action="edit_resto_details.php" method="post"> 
                <h2>Update my Restaraunt data</h2>
                </br>
                <h4 >Name of restaurant </h4>
                  <input value="<?php echo $row['name']; ?>" required name="name" class="form-control" type="text" placeholder="Name"/>
                  <h4>Email Address</h4>
                  <input value="<?php echo $row['email']; ?>" required name="email" class="form-control" type="text" placeholder="Email Address
                  "/>
                </br>
                <h3>Food Type</h3><hr>
                    <select class="form-control">
                        <option>Veg/Non-Veg</option>
                        <option>Veg</option>
                        <option>Non-Veg</option>
                    </select>
                </br>
                <h3  >Address Details</h3><hr>
                <h4>Street Address</h4>
                  <input value="<?php echo $row['street']; ?>" required name="street" class="form-control" type="text" placeholder="Street Address name"/>
                <h4>Calony</h4>
                  <input value="<?php echo $row['district']; ?>" required name="district" class="form-control" type="text" placeholder="Calony name"/>
                <h4>City</h4>
                  <input value="<?php echo $row['city']; ?>" required name="city" class="form-control" type="text" placeholder="City name"/>
                <h4>State</h4>
                  <input value="<?php echo $row['state']; ?>" required name="state" class="form-control" type="text" placeholder="State  name"/>
                <h4>Zip Code</h4>
                  <input value="<?php echo $row['zipcode']; ?>" required name="zipcode" class="form-control" type="text" placeholder="Zip Code name"/>
                 <h4>Country</h4>
                  <input  value="<?php echo $row['country']; ?>" required name="country" class="form-control" type="text" placeholder="Country name"/>
                  <br>
                  <h4> Enable Home Delivery <input class="w3-check" name="delivery" type="checkbox" /> </h4>
                  <hr>
                  <h4> Enable Pre-order <input class="w3-check" name="preorder" type="checkbox"/> </h4>
                  <hr>
                  <h4> Live Order <input class="w3-check" name="liveorder" type="checkbox" /> </h4>
                  <hr>
                  <br>
                  <h3>Opening Details</h3><hr>
                <div class="row">
                     <h4 style="margin-left:50%;"><pre>Open Time         Close Time</pre></h4>
                    <div id="time_day" class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                        <h4>Monday</h4>
                        <h4>Tuesday</h4>
                        <h4>Wednesday</h4>
                        <h4>Thursday</h4>
                        <h4>Friday</h4>
                        <h4>Saturday</h4>
                        <h4>Sunday</h4>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                         <h4><select required name="working1" class="form-control">
                            <option value="open" >Openning</option><option value="close">Closed</option></select> </h4>
                         <h4><select required name="working2" class="form-control">
                            <option value="open">Openning</option><option value="close">Closed</option></select> </h4>
                         <h4><select required name="working3" class="form-control">
                            <option value="open" >Openning</option><option value="close">Closed</option></select> </h4>
                         <h4><select required name="working4" class="form-control">
                            <option value="open" >Openning</option><option value="close">Closed</option></select> </h4>
                         <h4><select required name="working5" class="form-control">
                            <option value="open" >Openning</option><option value="close">Closed</option></select> </h4>
                         <h4><select required name="working6" class="form-control">
                            <option value="open" >Openning</option><option value="close">Closed</option></select> </h4>
                         <h4><select required name="working7" class="form-control">
                            <option value="open" >Openning</option><option value="close">Closed</option></select> </h4>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <h4><input name="from1" class="form-control" type="text" placeholder="From"
                           value="<?php echo $row['from1']; ?>"/></h4>
                        <h4><input name="from2" class="form-control" type="text" placeholder="From"
                          value="<?php echo $row['from2']; ?>"/></h4>                                         
                        <h4><input name="from3" class="form-control" type="text" placeholder="From"
                          value="<?php echo $row['from3']; ?>"/></h4>                                         
                        <h4><input name="from4" class="form-control" type="text" placeholder="From"
                          value="<?php echo $row['from4']; ?>"/></h4>                                         
                        <h4><input name="from5" class="form-control" type="text" placeholder="From"
                          value="<?php echo $row['from5']; ?>"/></h4>                                         
                        <h4><input name="from6" class="form-control" type="text" placeholder="From"
                          value="<?php echo $row['from6']; ?>"/></h4>                                         
                        <h4><input name="from7" class="form-control" type="text" placeholder="From"
                          value="<?php echo $row['from7']; ?>"/></h4>                                         
                    </div>
                    <div id="to" class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                        <h4> to </h4>                                         
                        <h4> to </h4>                                         
                        <h4> to </h4>                                         
                        <h4> to </h4>                                         
                        <h4> to </h4>                                         
                        <h4> to </h4>                                         
                        <h4> to </h4>                                         
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <h4><input name="to1" class="form-control" type="text" placeholder="to"
                          value="<?php echo $row['to1']; ?>"/><h4>                  
                        <h4><input name="to2" class="form-control" type="text" placeholder="to"
                          value="<?php echo $row['to2']; ?>"/><h4>                  
                        <h4><input name="to3" class="form-control" type="text" placeholder="to"
                          value="<?php echo $row['to3']; ?>"/><h4>                  
                        <h4><input name="to4" class="form-control" type="text" placeholder="to"
                          value="<?php echo $row['to4']; ?>"/><h4>                  
                        <h4><input name="to5" class="form-control" type="text" placeholder="to"
                          value="<?php echo $row['to5']; ?>"/><h4>                  
                        <h4><input name="to6" class="form-control" type="text" placeholder="to"
                          value="<?php echo $row['to6']; ?>"/><h4>                  
                        <h4><input name="to7" class="form-control" type="text" placeholder="to"
                          value="<?php echo $row['to7']; ?>"/><h4>                  
                    </div>
                </div>
                </br>
                <button class="btn btn-prmary" type="submit" id="add_btn">Save Changes</button>               
            </form>
            <?php
          }
          if($status==0){
            echo "<h4>you don't have any restaurant opened here ..<a href='open_resto.php'>open my restaurant here </a></h4>";
          }
          ?>
            </div>            
        </div>
    </div>
    </br></br></br></br></br></br></br>
      <?php require 'footer.html';?>