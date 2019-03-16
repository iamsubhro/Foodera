<?php
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
include 'pdo.php';
session_start();
if(!empty($_SESSION['mobile_no'])){
  include 'user_header.php';  
}
else{
  include 'header.php';
}
?>
<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="w3.css">
    <link rel="stylesheet" href="search_resto.css">   
     <script src="bootstrap/jquery.min.js"></script>
      <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div class="w3-container">
  <div class="row">
    <div class="col-lg-8 col-lg-offset-2 col-md-9 col-sm-10 col-xs-12">
      <?php
            if(!empty($_POST['search_resto'])){
                $search_resto=$_POST['search_resto'];
                $city_name=$_POST['city_name'];
                foreach($db->query("SELECT * FROM restaurants WHERE city like '%$city_name%' AND name like '%$search_resto%'") as $row){   
               ?>
                <div class="w3-card-4">
                  <header class="w3-container w3-light-grey">
                    <h2 style="margin-left: 10%;"><?php echo $row['name']; ?></h2>
                  </header>
                  <div class="w3-container">      
                    <div class="row">
                      <div class="col-lg-4">
                          <img id="resto_img" src="<?php echo 'resto_pics/'.$row['image']; ?>" class="img-responsive" >
                      </div>
                      <div class="col-lg-4">
                          <p><?php echo "<b>Contact : </b>".$row["mob_no"]; ?></p>
                          <p><b>Address - </b><?php echo $row['street'].','.$row['district'].','.$row['city'].','.$row['city'].','.$row['state']; ?></p>
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
                  <form action="restaurants.php" method="post">
                    <button id="open_resto" style="margin-left: 40%;" class="btn btn-primary" name="resto_name" value="<?php echo $row['name']; ?>">Order Foods </button>
                  </form>
                </div>
                </div>
                   <?php
                }
              }
            else{
              foreach($db->query("SELECT * FROM restaurants") as $row){   
               ?>
                <div class="w3-card-4">
                  <header class="w3-container w3-light-grey">
                    <h2 style="margin-left: 10%;"><?php echo $row['name']; ?></h2>
                  </header>
                  <div class="w3-container">      
                    <div class="row">
                      <div class="col-lg-4">
                          <img id="resto_img" src="<?php echo 'resto_pics/'.$row['image']; ?>" class="img-responsive" >
                      </div>
                      <div class="col-lg-4">
                          <p><?php echo "<b>Contact : </b>".$row["mob_no"]; ?></p>
                          <p><b>Address - </b><?php echo $row['street'].','.$row['district'].','.$row['city'].','.$row['city'].','.$row['state']; ?></p>
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
                  <form action="restaurants.php" method="post">
                    <button id="open_resto" style="margin-left: 40%;" class="btn btn-primary" name="resto_name" value="<?php echo $row['name']; ?>">Order Foods </button>
                  </form>
                </div>
                </div>
                   <?php
                }
              }
                ?>    
  </div>
</div>
</div>
<div id="footer" class="container-fluid" >
    <a href=""> Terms and Conditions</a><a href=""> Privacy Policy </a><a href=""> © Copyright 2018 </a>
  </div>
</body>
</html>
