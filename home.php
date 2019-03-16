<?php
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();  
include 'pdo.php';
include 'headerv1.html';
?>
<!DOCTYPE html >
<html>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="w3.css">
     <link rel="stylesheet" href="home.css">
     <script src="bootstrap/jquery.min.js"></script>
      <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>


<div class="w3-container">
  <br><br><br><br>
  <div class="row">
    <div class="col-lg-8 col-lg-offset-2 col-md-9 col-sm-10 col-xs-12">
      <br><br><br>
      <form action="home.php" method="post" style="text-align: center;">
                <div id="search" class="input-group" style="width:100%;">
                    <select style="width:40%;font-size: 16px;" id="cityId" name="city_name" class="form-control" placeholder="Enter a city">
                        <option value="choose one">Choose one</option>
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
                    <input style="width:60%;" name="search_resto" type="text" placeholder="Enter any Restaurant Name (Optional)" class="form-control"/>             
                </div><br>
                <button id="search_btn" name="search_btn" class="btn-btn-primary">Search Restaurants</button>
                <br>
      </form>
      <?php
            if(isset($_POST['search_btn'])){
                $search_resto=$_POST['search_resto'];
                $city_name=$_POST['city_name'];
                if(!empty($search_resto)){
                  $query="SELECT * FROM restaurants WHERE city like '%$city_name%' AND (district like '%$search_resto%' OR street like '%$search_resto%' OR name like '%$search_resto%')";
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
                    <h2 style="margin-left: 10%;"><?php echo $row['name']; ?></h2>
                  </header>
                  <div class="w3-container">      
                    <div class="row">
                      <div class="col-lg-4">
                          <img id="resto_img" src="<?php echo 'resto_pics/'.$row['image']; ?>" class="img-responsive" >
                      </div>
                      <div class="col-lg-4">
                        <?php
                        $name=$row['name'];
                        $i=0;
                        $count=0;
                        foreach($db->query("SELECT rating from orders WHERE name='$name'") as $ratings){  
                          if($ratings['rating']!=0){
                              $count=$count+1;
                              $i=$i+$ratings['rating']; 
                            }
                        }
                        if($count!=0){
                              $avg=$i/$count;
                          }
                        ?>
                          <div id="star">
                            <h4 id="1" class="fa fa-star"></h4>
                            <h4 id="2" class="fa fa-star"></h4>
                            <h4 id="3" class="fa fa-star"></h4>
                            <H4 id="4" class="fa fa-star"></h4>
                            <h4 id="5" class="fa fa-star"></h4>
                          </div>

                        <script type="text/javascript">
                          var id_no=<?php echo $avg; ?>;
                          for(var i=id_no;i>0;i=i-1){
                            var j="#"+i;
                            $(j).addClass("checked");
                          }
                        </script>
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
                  <form action="restaurants.php" method="post">
                    <button id="open_resto" style="margin-left: 35%" class="btn btn-primary" name="resto_name" value="<?php echo $row['name']; ?>">Order Foods </button>
                  </form>
                </div>
                </div>
                   <?php
                }
                if($status==0){
                  echo "<h4 style='color:red;'>No restaurant found in ".$city_name.' like '.$search_resto.'</h4>';
                }
             ?>
  </div>
</div>
</div>
<?php require 'footer.html';?>
</body>
</html>
