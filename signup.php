<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="w3.css">
    <link rel="stylesheet" href="signup.css">
 <script src="../bootstrap/jquery.min.js"></script>
      <script src="../bootstrap/js/bootstrap.min.js"></script>
      <?php
    require 'header.html';
    require 'pdo.php';
?>

<img id="background" src="menubg3.jpg" class="img-responsive" width=100%>
    <div class="container">
      	<div class="row">
      		<div style="margin-top:40px;" class="col-lg-8 col-lg-offset-3 col-md-9 col-sm-12 col-xs-12 ">
            <?php
              $allow=1;
              if(isset($_POST['name'])&&isset($_POST['mob_no'])&&isset($_POST['pass'])){
                if(!empty($_POST['name'])&&!empty($_POST['mob_no'])&&!empty($_POST['pass'])){
                    foreach($db->query("SELECT mob_no FROM users") as $row){
                        if($row['mob_no']==$_POST['mob_no']){
                          $allow=0;
                          ?>
                          <div class="alert alert-warning">
                              <h4 style='color:red;'>Username already exist</h4>
                          </div>
                          <?php
                          break;
                        }
                      }
                  if($allow==1){
                    $stmt=$db->prepare("INSERT INTO users(name,mob_no,password) VALUES(:name,:mob_no,:pass)");
                    $stmt->bindParam(":name",$_POST['name']);
                    $stmt->bindParam(":mob_no",$_POST['mob_no']);
                    $stmt->bindParam(":pass",$_POST['pass']);
                    $stmt->execute();
                    $_SESSION['mobile_no']=$_POST['mob_no'];
                    ?>
                    <script type="text/javascript">
                      window.location = "home.php";
                    </script>
                    <?php
                  }
                }
              }
          ?>
                  <br>
                  <br><br><br><br><br>
                  <form action="signup.php" method="post">
                    <h4>Your Name</h4>
                    <input required id="login_el" name="name" class="form-control" type="text" placeholder="Name"/>
                    <br><br>
                    <h4>Registered Mobile Number</h4>
                    <input required id="login_el" type="tel" pattern="^\d{10}$"  name="mob_no"  class="form-control" title="Must contain exactly 10 digits" placeholder="Mobile Number"/>
                    <br><br>
                    <h4>Your Password </h4>
                    <input required id="login_el" name="pass" class="form-control" pattern="^(?=.*\d).{4,15}$" title="Password expression. Password must be between 4 and 15 digits long and include at least one numeric digit." type="password" placeholder="Password" style="font-size:18px" />
                    <button id="signup_btns" style="background-color: #5ab55d;width: 80%;" type="submit" class="btn btn-default btn-block" href="#">Sign-Up</button>
                  </form>
                </div>
      			</div>
			  </div>
		</div>

    <?php require 'footer.html';?>
	</div>
