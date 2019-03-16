<!DOCTYPE html>
<html>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="w3.css">
    <link rel="stylesheet" href="add_foods.css">
     <script src="bootstrap/jquery.min.js"></script>
      <script src="bootstrap/js/bootstrap.min.js"></script>
<?php
session_start();
include 'headerv1.html';
include 'pdo.php';
if(isset($_POST['name'])&&isset($_POST['street'])&&isset($_POST['district'])&&isset($_POST['city'])&&isset($_POST['state'])&&isset($_POST['zipcode'])&&isset($_POST['country'])){
	if(isset($_POST['working1'])&&isset($_POST['working2'])&&isset($_POST['working3'])&&isset($_POST['working4'])&&isset($_POST['working5'])&&isset($_POST['working6'])&&isset($_POST['working7'])){
			if(!empty($_POST['name'])&&!empty($_POST['street'])&&!empty($_POST['district'])&&!empty($_POST['city'])&&!empty($_POST['state'])&&!empty($_POST['zipcode'])&&!empty($_POST['country'])){
					if(!empty($_POST['working1'])&&!empty($_POST['working2'])&&!empty($_POST['working3'])&&!empty($_POST['working4'])&&!empty($_POST['working5'])&&!empty($_POST['working6'])&&!empty($_POST['working7'])){
							
								$stmt=$db->prepare("INSERT INTO restaurants(mob_no,email,delivery,name,street,district,city,state,zipcode,country,working1,working2,working3,working4,working5,working6,working7,from1,from2,from3,from4,from5,from6,from7,to1,to2,to3,to4,to5,to6,to7) VALUES(:mob_no,:email,:delivery,:name,:street,:district,:city,:state,:zipcode,:country,:working1,:working2,:working3,:working4,:working5,:working6,:working7,:from1,:from2,:from3,:from4,:from5,:from6,:from7,:to1,:to2,:to3,:to4,:to5,:to6,:to7)");

								$stmt->bindParam(":name",$_POST['name']);
								$stmt->bindParam(":email",$_POST['email']);
								$stmt->bindParam(":mob_no",$_SESSION['mobile_no']);
								$stmt->bindParam(":delivery",$_POST['delivery']);
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
								include 'pdo.php';
								$resto_name = $_POST['name'];
								$_SESSION['resto_name'] = $resto_name;
								$resto_name = strtolower($resto_name);
								$resto_name = str_replace(' ', '', $resto_name);
								$query="CREATE TABLE $resto_name (food_id int PRIMARY KEY AUTO_INCREMENT,name varchar(60),details varchar(400),price int,quantity varchar(30),rating int)";
								$stmt=$db->prepare($query);
								$stmt->execute();
								?>
								<?php
							}
					}
		}
}

?>
<body>
	<div class="w3-container">	 
		<br><br><br><br><br><br><br><br><br><br>

	    <div class="row">
	    	<div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-10 scol-xs-12">
	    		<?php
		    		if(isset($_POST['food_name'])&&isset($_POST['details'])&&isset($_POST['price'])&&isset($_POST['quantity'])){
						if(!empty($_POST['food_name'])&&!empty($_POST['details'])&&!empty($_POST['price'])&&!empty($_POST['quantity'])){
							$tablename=$_SESSION['resto_name'];
							$stmt=$db->prepare("INSERT INTO $tablename (name,details,price,quantity) VALUES(:name,:details,:price,:quantity)");
							$stmt->bindParam(":name",$_POST['food_name']);
							$stmt->bindParam(":details",$_POST['details']);
							$stmt->bindParam(":price",$_POST['price']);
							$stmt->bindParam(":quantity",$_POST['quantity']);
							$stmt->execute();
							?>
							<div class="alert alert-success ">
								<h3>Item has been added to your restaurant..add more items</h3>
							</div>
							<?php
						}
					}
	    		?>
	    		 <form id="add_item" action="add_foods.php" method="post">
				  	<h3> Enter  the food items that you want to add in your restaurant</h3>
				  	<hr>
				  	<h4>Name of food item</h4>
				  	<input type="text" name="food_name" class="form-control" placeholder="e.g- Veg. Manchurian" />
				  	<h4> More about the item</h4>
				  	<input type="text" name="details" class="form-control" placeholder="Deep-fried mixed vegetable balls sautéed with ginger-garlic paste, chilli sauce and chopped vegetables" />
				  	<h4>Price (INR)</h4>
				  	<input type="text" name="price" class="form-control" style="width:200px;" placeholder="e.g- 150" />
				  	<h4>Quantity of Item in above price </h4>
				  	<input type="text" name="quantity" class="form-control" placeholder="1 Plate" />
				  		</br>
			  	 	<button id="add_btn" type="submit" class="btn btn-primary"> Add to shop</button>
			  	 	<a id="next" class="btn btn-default " href="add_image.php" > Next</a>
			  	</form>
			</div>
		</div>
	</body>
	<?php require 'footer.html';?>
	</html>
