<?php
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
<link rel="stylesheet" href="myorders.css">
<script src="bootstrap/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<div class="container">
	<div class="row">
		<br><br><br><br>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h3><b>My Orders</b></h3>
			<br><br>
			<?php
			$mob_no=$_SESSION['mobile_no'];
			foreach($db->query("SELECT * FROM orders WHERE mob_no=$mob_no ORDER BY date1") as $row){

				     		$food_id=$row['food_id'];
				     		$name=$row['name'];
				     		$stmt=$db->prepare("SELECT * FROM $name WHERE food_id=:food_id");
				     		$stmt->bindParam(":food_id",$food_id);
				     		$stmt->execute();
				     		$result=$stmt->fetch();
				     		?>
			 	<div style="margin-left: 10%;margin-right:10%;" class="row w3-card w3-margin-top" >
			 		
				     	<header class="w3-container w3-blue">
				     		<h3><?php echo $row['name']; ?></h3>
				     	</header>
				     	<div class="container-fluid">
				     		<h6><b><?php echo $result['name'].' '; ?></b>
				     			<i><?php echo $row['date1']; ?></i>
				     			<div id="star">
									<h4 id="1" class="fa fa-star"></h4>
									<h4 id="2" class="fa fa-star"></h4>
									<h4 id="3" class="fa fa-star"></h4>
									<h4 id="4" class="fa fa-star"></h4>
									<h4 id="5" class="fa fa-star"></h4>
								</div>
								<script>
										var id_no=<?php echo $row['rating']; ?>;
										for(var i=id_no;i>0;i=i-1){
											var j="#"+i;
											$(j).addClass("checked");
										}
								</script>
				     		</h6>
				     		<p><?php echo $result['details']; ?></p>
				     		<h6><?php echo $result['price'].' Rs '.$result['quantity']; ?></h6>
				     	</div>
				     	
				     <br>
			     </div>
			     <?php
				}
				?>
			  </div>	
		</div>
	</div>
</div>
</body>
<?php require 'footer.html';?>