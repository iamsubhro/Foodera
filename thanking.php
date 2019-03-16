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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="thanking.css">
<script src="bootstrap/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
   	<body>
   	<div class="container">
   		<br><br><br>
   		<div class="row">
   			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

   				<br><br><br><br><br>
   				
	   				<?php
	   				$ordered=0;
	   				$name=$_SESSION['resto_name'];
	   				$stmt2=$db->prepare("SELECT * FROM users WHERE mob_no=:mob_no");
	   				$stmt2->bindParam(":mob_no",$_SESSION['mobile_no']);
	   				$stmt2->execute();
	   				$res2=$stmt2->fetch();
	   				$username=$res2["name"];
   				if(isset($_POST['preorder2'])){
   					$_SESSION['timing']=$_POST['timing'];
   					$total=0;
   					foreach($_SESSION['food'] as $selected){
            			foreach($db->query("SELECT * FROM $name WHERE food_id=$selected") as $row){
            				$total=$total+$row['price'];
            			}
            		}
            		$stmt=$db->prepare("SELECT premoney from restaurants WHERE name=:name");
            		$stmt->bindParam(":name",$name);
            		$stmt->execute();
            		$result=$stmt->fetch();
            		$amount=$result['premoney'];
            		$money=$total*($amount/100);
            		$left=$total-$money;
            		$_SESSION['money']=$money;
            		$_SESSION['left']=$left;
            		?>
            		<h4> You have to pay Rs <?php echo $money; ?></h4>
            		<h4> <?php echo 'Rs '.$left; ?> will be paid later</h4>
            			<br>
            		<h3><b>Log into Paytm to continue Payment</b></h3>
            			<form style="width: 50%;" action="payment.php" method="post">
						     <h4><b>Mobile No</b></h4>
						     <input required type="text" class="form-control" name="paytm_no">
						     <h4><b>Password</b></h4>
						     <input required type="password" class="form-control" name="password">
						     <br>
						     <button style="height: 40px; font-size: 18px;" class="btn btn-primary" type="submit">Login</button>
						 </form>
            		<?php
   				}
   				if(isset($_POST['preorder'])){
   					$_SESSION['left']=0;
   					?>
   					<h3>Order before you Arrive</h3>
   					<hr>
   					<form action="thanking.php" method="post">
   						<h4>Select the time limit of your arrival</h4>
   						<select name="timing" id="interval" class="form-control">
   							<option value="10 minutes">Within 10 minutes</option>
   							<option value="20 minutes">Within 20 minutes</option>
   							<option value="30 minutes">Within 30 minutes</option>
   							<option value="45 minutes">Within 45 minutes</option>
   							<option value="1 hour">Within 1 hour</option>
   							<option value="2 hour">Within 2 hour</option>
   							<option value="3 hour">Within 3 hour</option>
   						</select>
   						<br>
   						<button name="preorder2" class="btn btn-primary" type="submit"> Order Now </button>
   					</form>
   					<?php
				}
				if(isset($_POST['preorder_order'])){
					$ordered=1;
					$stmt=$db->prepare("SELECT email FROM restaurants WHERE name=:name");
					$stmt->bindParam(":name",$name);
					$stmt->execute();
					$res1=$stmt->fetch();
							     $to = $res1['email'];
									$subject = "New Food Order";
							foreach($_SESSION['food'] as $selected){

								$stmt2=$db->prepare("INSERT INTO orders(mob_no,name,food_id,type,date1) VALUES(:mob_no,:name,:food_id,:type,CURDATE())");
            						$stmt2->bindParam(":mob_no",$_SESSION['mobile_no']);
            						$stmt2->bindParam(":name",$name);
            						$stmt2->bindParam(":food_id",$selected);
            						$stmt2->bindValue(":type","preorder");
            						$stmt2->execute();

            					foreach($db->query("SELECT * FROM $name WHERE food_id=$selected") as $row){

									$message1 = "
									<html>
									<head>
									<title>Food Order</title>
									</head>
									<body>
									<p>An <b> Pre-order</b> from ".$username." </p>
									<p><b>Contact : </b>".$_SESSION['mobile_no']."</p>
									<p> Arriving within ".$_SESSION['timing'].".";
									$message2="
									<p><b>Name of food</b></p>
									<p>".$row['name']."</p>
									<p><b>Details</b></p>
									<p>".$row['details']."</p>
									<b>Price </b>
									<p>".$row['price']." Rs ".$row['quantity']."</p>
									<b>Price to be payable Rs ".$_SESSION['left']." </b>
									<hr>
									</body>
									</html>
									";
								}
							}
									// Always set content-type when sending HTML email
									$headers = "MIME-Version: 1.0" . "\r\n";
									$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

									// More headers
									$headers .= 'From: <foodera@foodbooking.com>' . "\r\n";									
									$message=$message1.$message2;
									mail($to,$subject,$message,$headers);
								?>
	   					<div class="alert alert-success ">
							<h3>Thank You for Your<b> Pre-Order.</b></h3>
							<h4> Your order will be ready on time :)</h4>
						</div>
	   					<?php
				}
				if(isset($_POST['order'])){
					?>
					<form id="order" style="width: 60%;" action="thanking.php" method="post">
						<h3>Enter delivery address</h3>
						<hr>
						<h4>Mobile Number</h4>
						<input type="text" name="mob" class="form-control"><br><br>
						<h4>House No.</h4>
						<input type="text" name="hno" class="form-control"><br><br>
						<h4>Street Name</h4>
						<input type="text" name="street" class="form-control"><br><br>
						<h4>Village Name</h4>
						<input type="text" name="village" class="form-control"><br><br>
						<h4> Zipcode </h4>
						<input type="text" name="zipcode" class="form-control"><br>
						<button id="deli_btn" name="deli_btn" class="btn btn-primary" type="submit" > Order Now </button>
					</form>
					<?php
				}
				if(isset($_POST['deli_btn'])){
					$ordered=1;
					$stmt=$db->prepare("SELECT email FROM restaurants WHERE name=:name");
						$stmt->bindParam(":name",$name);
						$stmt->execute();
						$res1=$stmt->fetch();
								     $to = $res1['email'];
										$subject = "New Food Order";
							$message1 = "
										<html>
										<head>
										<title>Food Order</title>
										</head>
										<body>
										<p>An order from ".$username." for home delivery </p>
										<p><b>Contact : </b>".$_POST['mob']."</p>
										<p> House Number: ".$_POST['hno']." </p>
										<p> Street Number :".$_POST['street']."</p>
										<p> Village : ".$_POST['village']."</p>
										<p> Zipcode : ".$_POST['zipcode']."</p>
										";
							$message2="";
								foreach($_SESSION['food'] as $selected){

									$stmt2=$db->prepare("INSERT INTO orders(mob_no,name,food_id,type,date1) VALUES(:mob_no,:name,:food_id,:type,CURDATE())");
            						$stmt2->bindParam(":mob_no",$_SESSION['mobile_no']);
            						$stmt2->bindParam(":name",$name);
            						$stmt2->bindParam(":food_id",$selected);
            						$stmt2->bindValue(":type","delivery");
            						$stmt2->execute();

	            					foreach($db->query("SELECT * FROM $name WHERE food_id=$selected") as $row){

										$message2.="
										<p><b>Name of food</b></p>
										<p>".$row['name']."</p>
										<p><b>Details</b></p>
										<p>".$row['details']."</p>
										<b>Price </b>
										<p>".$row['price']." Rs ".$row['quantity']."</p>
										<hr>
										</body>
										</html>
										";
									}
								}
										// Always set content-type when sending HTML email
										$headers = "MIME-Version: 1.0" . "\r\n";
										$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

										// More headers
										$headers .= 'From: <foodera@foodbooking.com>' . "\r\n";									
										$message=$message1.$message2;
										//mail($to,$subject,$message,$headers);
									?>
		   					<div class="alert alert-success ">
								<h3>Thank You for Your<b> Order.</b></h3>
								<h4> Your order will be delivered soon :)</h4>
							</div>

		   					<?php
					}
				if(isset($_POST['liveorder'])&&!empty($_POST['food'])){
					$ordered=1;
					$stmt=$db->prepare("SELECT email FROM restaurants WHERE name=:name");
					$stmt->bindParam(":name",$name);
					$stmt->execute();
					$res1=$stmt->fetch();
							     $to = $res1['email'];
									$subject = "New Food Order";
							foreach($_POST['food'] as $selected){
								$stmt2=$db->prepare("INSERT INTO orders(mob_no,name,food_id,type,date1) VALUES(:mob_no,:name,:food_id,:type,CURDATE())");
            						$stmt2->bindParam(":mob_no",$_SESSION['mobile_no']);
            						$stmt2->bindParam(":name",$name);
            						$stmt2->bindParam(":food_id",$selected);
            						$stmt2->bindValue(":type","liveorder");
            						$stmt2->execute();

            					foreach($db->query("SELECT * FROM $name WHERE food_id=$selected") as $row){

									$message1 = "
									<html>
									<head>
									<title>Food Order</title>
									</head>
									<body>
									<p>An <b> Live order </b> from ".$username." </p>
									<p><b>Contact : </b>".$_SESSION['mobile_no']."</p>";
									$message2="
									<p><b>Name of food</b></p>
									<p>".$row['name']."</p>
									<p><b>Details</b></p>
									<p>".$row['details']."</p>
									<b>Price </b>
									<p>".$row['price']." Rs ".$row['quantity']."</p>
									<hr>
									</body>
									</html>
									";
								}
							}
									// Always set content-type when sending HTML email
									$headers = "MIME-Version: 1.0" . "\r\n";
									$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

									// More headers
									$headers .= 'From: <foodera@foodbooking.com>' . "\r\n";
									$message=$message1.$message2;
									mail($to,$subject,$message,$headers);
								?>
	   					<div class="alert alert-success ">
							<h3>Thank You for Your<b> Live Order.</b></h3>
							<h4> Your order is getting prepared :)</h4>
						</div>
	   					<?php
				}

				// List of food item selected
					echo '<br>';
					echo "<h3> Selected food items :</h3>";
					echo "<hr>";
					if(!empty($_POST['food'])){
						$_SESSION['food']=$_POST['food'];
						foreach($_POST['food'] as $selected){
	            			foreach($db->query("SELECT * FROM $name WHERE food_id=$selected") as $row){?>
		            			<div style="margin:20px;" class="row w3-margin-top" id="myTable">
							     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							     	<h4><?php echo $row['name']; ?></h4>
							     	<h6 id="details"><?php echo $row['details']; ?></h6>
							     </div>
							     <div style="text-align: center;" class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							     	<h6><?php echo $row['price'].' Rs '.$row['quantity']; ?></h6>
							     </div>
							  </div>
							  <hr>
	            			<?php
	            			} 
						}
					}
					else if(!empty($_SESSION['food'])){
						$_SESSION['food']=$_SESSION['food'];
						foreach($_SESSION['food'] as $selected){
	            			foreach($db->query("SELECT * FROM $name WHERE food_id=$selected") as $row){?>
		            			<div style="margin:20px;" class="row w3-margin-top" id="myTable">
							     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							     	<h4><?php echo $row['name']; ?></h4>
							     	<h6 id="details"><?php echo $row['details']; ?></h6>
							     </div>
							     <div style="text-align: center;" class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							     	<h6><?php echo $row['price'].' Rs '.$row['quantity']; ?></h6>
							     </div>
							  </div>
							  <hr>
	            			<?php
	            			} 
						}
					}
					else{
						echo "<h3>Nothing selected to order</h3>";
					}								
				?>
   			</div>
   			<div class="row">
   				<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
   					<?php if($ordered==1){?>
   					<h4>Please give us the feedback to improve the service </h4>
   					<script>
						var id_no=-1;
						$(document).ready(function(){
							$("#star").children('h4').click(function(){
								if($("#star").children('h4').hasClass("fa-star")){
									id_no=this.id;
									for(var i=id_no;i>0;i=i-1){
										var j="#"+i;
										$(j).addClass("checked");
									}
								}
							});
						});
						function submit_star(){
							window.location.href="rating.php?rate="+id_no;
						}
					</script>
				   	<div id="star" style="font-size: 40px;" >
						<h4 id="1" class="fa fa-star"></h4>
						<h4 id="2" class="fa fa-star"></h4>
						<h4 id="3" class="fa fa-star"></h4>
						<h4 id="4" class="fa fa-star"></h4>
						<h4 id="5" class="fa fa-star"></h4>
					</div>
					<br>
					<button id="submit_star" class="btn btn-primary" onclick="submit_star()" > submit</button>	
					<?php } ?>
   				</div>
   			</div>
   		</div>
   	</div>
   	<?php require 'footer.html';?>
   	</body>