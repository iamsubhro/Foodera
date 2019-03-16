  <?php
include 'headerv1.html';
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
  ?>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="w3.css">
    <link rel="stylesheet" href="open_resto.css">
     <script src="bootstrap/jquery.min.js"></script>
      <script src="bootstrap/js/bootstrap.min.js"></script>
      
   <div class="container">
        <div class="row">
          <br><br><br><br><br><br><br>
            <div class="col-lg-8 col-lg-offset-2 col-md-9 col-sm-10 col-xs-12">
            <form id="addr" action="add_foods.php" method="post">    
                <h2>Adding my restaurant online</h2>
                </br>
                <h4 >Name of restaurant </h4>
                  <input required name="name" class="form-control" type="text" placeholder="Name" />
                  <h4>Email Address</h4>
                  <input required name="email" class="form-control" type="email" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" 
                  placeholder="Email Address"/>
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
                  <input required name="street" class="form-control" type="text" placeholder="Street Address name"/>
                <h4>Colony</h4>
                  <input required name="district" class="form-control" type="text" placeholder="Colony name"/>
                <h4>City</h4>
                  <input required name="city" class="form-control" type="text" placeholder="City name"/>
                <h4>State</h4>
                  <input required name="state" class="form-control" type="text" placeholder="State  name"
                   />
                <h4>Zip Code</h4>
                  <input required name="zipcode" class="form-control" type="text" placeholder="Zip Code name"  pattern="^\d{6}$"  title="Enter 6 digits zipcode"/>
                 <h4>Country</h4>
                  <input required name="country" class="form-control" type="text" placeholder="Country name"/>
                  <br>
                  <h4>Home Delivery <input  class="w3-check" name="delivery" type="checkbox" checked="checked" /> </h4>
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
                        <h4><input value = "9 AM " name="from1" class="form-control" type="text" placeholder="From"/></h4>
                        <h4><input value = "9 AM " name="from2" class="form-control" type="text" placeholder="From"/></h4>                                         
                        <h4><input value = "9 AM " name="from3" class="form-control" type="text" placeholder="From"/></h4>                                         
                        <h4><input value = "9 AM " name="from4" class="form-control" type="text" placeholder="From"/></h4>                                         
                        <h4><input value = "9 AM " name="from5" class="form-control" type="text" placeholder="From"/></h4>                                         
                        <h4><input value = "9 AM " name="from6" class="form-control" type="text" placeholder="From"/></h4>                                         
                        <h4><input value = "9 AM " name="from7" class="form-control" type="text" placeholder="From"/></h4>                                         
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
                        <h4><input value = "9 PM " name="to1" class="form-control" type="text" placeholder="to"/><h4>                  
                        <h4><input value = "9 PM " name="to2" class="form-control" type="text" placeholder="to"/><h4>                  
                        <h4><input value = "9 PM " name="to3" class="form-control" type="text" placeholder="to"/><h4>                  
                        <h4><input value = "9 PM " name="to4" class="form-control" type="text" placeholder="to"/><h4>                  
                        <h4><input value = "9 PM " name="to5" class="form-control" type="text" placeholder="to"/><h4>                  
                        <h4><input value = "9 PM " name="to6" class="form-control" type="text" placeholder="to"/><h4>                  
                        <h4><input value = "9 PM " name="to7" class="form-control" type="text" placeholder="to"/><h4>                  
                    </div>
                </div>
                </br>
                <button class="btn btn-prmary" type="submit" id="add_btn">Add</button>               
            </form>
            </div>            
        </div>
    </div>
    </br></br></br></br></br></br></br></br>
    <?php require 'footer.html';?>
