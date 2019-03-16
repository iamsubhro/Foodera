<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="w3.css">
    <link rel="stylesheet" href="add_image.css">
     <script src="bootstrap/jquery.min.js"></script>
      <script src="bootstrap/js/bootstrap.min.js"></script>
<?php
session_start();
include 'headerv1.html';
include 'pdo.php';
?>
<div class="container">
  <br><br><br><br><br><br><br><br><br>
  <div class="row">
    <div class="c0l-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
      <h3 style="color:#138015;"> Upload any image of your restaurant or any delicious food </h3>
            <hr>
        <form  action="add_image.php" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-lg-6">
                <!--  image uploading -->
                 <input required type="file" name="file"/>
              </div>
              <div class="col-lg-6">
                <button id="upload_btn" type="submit" class="btn btn-default">Upload Picture</button>
              </div>
            </div>
        </form>
            <?php
            if(isset($_FILES['file'])&&!empty($_FILES['file'])){
                $name=$_FILES['file']['name'];
                $size=$_FILES['file']['size'];
                $tmp_name=$_FILES['file']['tmp_name'];
                $extension = strtolower(substr($name,strpos($name,'.')+1));
                $loc="resto_pics/";
                $newname=$loc.$_SESSION['name'].".".$extension;
                $name2=$_SESSION['name'].'.'.$extension;
                if($size>1000000){
                  echo "file is too large";
                }
                if(!($extension=='jpeg'||$extension=='jpg'||$extension=='png')){
                  echo "Such file format is not allowed to upload";
                }
                else if(move_uploaded_file($tmp_name,$newname)){
                  ?>
                    <div class="alert alert-success ">
                      <h3>Image uploaded successfully</h3>                      
                  </div>
                <a id="next" class="btn btn-default" href="home.php"> Next </a>
                  </br>
                    <?php
                    $stmt=$db->prepare("UPDATE restaurants set image=:image WHERE name=:name");
                    $stmt->bindParam(":name",$_SESSION['name']);
                    $stmt->bindParam(":image",$name2);
                    $stmt->execute();
                  }
            }
            ?>
    </div>
  </div>
  </div>
  <?php require 'footer.html';?>