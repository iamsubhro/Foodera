<?php
			session_start();
			include 'pdo.php';
			include 'user_header.php';
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="w3.css">
     <script src="bootstrap/jquery.min.js"></script>
      <script src="bootstrap/js/bootstrap.min.js"></script>
      <div class="container">
      	<div class="row">
      		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

			      <?php
			foreach($_SESSION['food'] as $selected){
				if(!empty($_GET['rate'])){
					$stmt=$db->prepare("UPDATE orders SET rating=:rating WHERE mob_no=:mob_no AND food_id=:food_id");
					$stmt->bindParam(":rating",$_GET['rate']);
					$stmt->bindParam(":mob_no",$_SESSION['mobile_no']);
					$stmt->bindParam(":food_id",$selected);
					$stmt->execute();
					
				}
			}
			echo "<div class='alert alert-success '>
							<h3>Thanks for your Feedback</h3>
						</div>";
			?>	
      		</div>
      	</div>
      </div>