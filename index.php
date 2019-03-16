<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="w3.css">
     <script src="bootstrap/jquery.min.js"></script>
      <script src="bootstrap/js/bootstrap.min.js"></script>
<?php
    require 'pdo.php';
    require 'header.html';
?>
<body>

<link rel="stylesheet" type="text/css" href="index.css"> 
    <script type="text/javascript">
        function login_alert(){
            alert("Login to continue");
            window.location = 'login.php';
        }
    </script>

<img id="background" src="menubg3.jpg" class="img-responsive" width=100%>
<div class="container">
        <div class="row">
            <div class="col-xs-12 hidden-lg hidden-md hidden-sm">
                <h4 style="margin-top: 0px;color:#ea5b31;font-size: 16px;"><b> Find the Nearest Restaurants Here</b></h4>
                <form action="index.php" method="post">
                <div id="search" class="input-group" style="width:100%;">
                    <select style="width:50%;font-size:12px;height: 30px;font-family: 300;" id="cityId" name="city_name" class="form-control" placeholder="Enter a city">
                        
                        <option value="choose one city">Choose one City</option>
                        <option value="chandigarh">Chandigarh</option>
                        <option value="chennai">Chennai</option>
                        <option value="delhi">Delhi</option>
                        <option value="gurgaon">Gurgaon</option>
                        <option value="hyderabad">Hyderabad</option>
                        <option value="kolkata">Kolkata</option>
                        <option value="mumbai">Mumbai</option>
                        <option value="nagpur">Nagpur</option>
                        <option value="noida">Noida</option>
                        <option value="pune">Pune</option>           
                    </select>
                    <input style="width:50%;font-size: 12px;height: 30px;font-family:200;" name="search_resto" type="text" placeholder="Enter any Restaurant Name (Optional)" class="form-control"/>
                </div>
                <br>
                <button name="search_btn" style="background-color: #20ac76;font-weight:300;color:white;font-size:16px;" class="btn-btn-primary form-control">Search </button>
               </form>
            </div>
            <div class="hidden-xs col-lg-12 col-md-12 col-sm-12">
               <h1 id="find"> Find the Nearest Restaurants Here</h1>
           </br></br></br></br></br></br>
              <!-- <label for="cityId" class="required">Enter your city</label> -->
              <form action="index.php" method="post">
                <div class="input-group" style="width:100%;height: 20px;">
                    <select style="width:30%;font-size: 18px;font-family: 300;" id="cityId" name="city_name" class="form-control" placeholder="Enter a city">
                        <option value=": Enter Valid City">Choose one city</option>
                        <option value="chandigarh">Chandigarh</option>
                        <option value="chennai">Chennai</option>
                        <option value="delhi">Delhi</option>
                        <option value="gurgaon">Gurgaon</option>
                        <option value="hyderabad">Hyderabad</option>
                        <option value="kolkata">Kolkata</option>
                        <option value="mumbai">Mumbai</option>
                        <option value="nagpur">Nagpur</option>
                        <option value="noida">Noida</option>
                        <option value="pune">Pune</option>           
                    </select>
                    <input style="width:40%;font-size: 18px;font-weight:400;" name="search_resto" type="text" placeholder="Enter any Restaurant Name (Optional)" class="form-control"/>
                    <button name="search_btn" style="width:20%;background-color: #20ac76;font-weight: 500;color:white;font-size: 20px;" class="btn-btn-primary form-control">Search </button>
                </div>
               </form>
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="row" style="margin-top:32%;">
          <br><br><br><br>
                <?php
            if(isset($_POST['search_btn'])){
                $search_resto=$_POST['search_resto'];
                $city_name=$_POST['city_name'];
                if(!empty($search_resto)){
                  $query="SELECT * FROM restaurants WHERE city like '%$city_name%' AND name like '%$search_resto%'";
                }
                else if(empty($search_resto)){
                  $query="SELECT * FROM restaurants WHERE city like '%$city_name%'";
                }
              }
              else{
                $query="SELECT * FROM restaurants";
              }
              $status=0;
                foreach($db->query($query) as $row){  
                  $status=1;
               ?>

                <div class="w3-card-4">
                  <header class="w3-container w3-light-grey">
                    <h1 style="margin-left: 10%;"><?php echo $row['name']; ?></h1>
                  </header>
                  <div class="w3-container">      
                    <div class="row">
                      <div class="col-lg-4">
                          <img id="resto_img" src="<?php echo 'resto_pics/'.$row['image']; ?>" class="img-responsive" >
                      </div>
                      <div class="col-lg-4">
                          <p><?php echo "<b>Contact : </b>".$row["mob_no"]; ?></p>
                          <p><b>Address - </b><?php echo $row['street'].','.$row['district'].'<br>'.$row['city'].','.$row['city'].'<br>'.$row['state']; ?></p>
                          <div class="dropdown">
                          <button id="time_btn" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Opens <?php echo $row['from1']; ?>
                          <span class="caret"></span></button>
                          <ul class="dropdown-menu" >
                              <li><h5>Monday <?php echo $row['from1'].'-'.$row['to1']; ?></h5></li>
                              <li><h5>Tuesday <?php echo $row['from2'].'-'.$row['to2']; ?></h5></li>
                              <li><h5>Wednesday <?php echo $row['from3'].'-'.$row['to3']; ?></h5></li>
                              <li><h5>Thursday <?php echo $row['from4'].'-'.$row['to4']; ?></h5></li>
                              <li><h5>Friday <?php echo $row['from5'].'-'.$row['to5']; ?></h5></li>
                              <li><h5>Saurday <?php echo $row['from6'].'-'.$row['to6']; ?></h5></li>
                              <li><h5>Sunday <?php echo $row['from7'].'-'.$row['to7']; ?></h5></li>
                          </ul>
                        </div>                
                    </div>
                  </div>
                    <button id="open_resto" onclick="login_alert();" style="margin-left: 35%;margin-top: 0px;margin-bottom: 10px;" class="btn btn-primary">Order Foods </button>
                </div>
                </div>
                   <?php
                    echo "<br>";
                }
                if($status==0){
                  echo "<h4 style='color:red;'>No restaurant found in ".$city_name.'</h4>';
                }
             ?>
        </div>
        </div>
    </div>
    <?php require 'footer.html';?>
</body>