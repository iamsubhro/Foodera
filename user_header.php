<html lang="en">
  <head>
        <link rel="stylesheet" href="user_header.css">
    <title>Foodera</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <script>
        function w3_open() {
            document.getElementById("mySidebar").style.display = "block";
            $("#search").hide();
        }
        function w3_close() {
            document.getElementById("mySidebar").style.display = "none";
            $("#search").show();
        }
    </script>
  </head>
  <body onload="w3_close();">
    <div class="hidden-lg hidden-md hidden-sm">
        <div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left" style="width:200px;"   id="mySidebar">
            <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>
            <a href="home.php" class="w3-bar-item w3-button">Find Restaurants</a>   
            <a href="myorders.php" class="w3-bar-item w3-button">My Orders</a>            
            <a href="edit_resto_details.php" class="w3-bar-item w3-button">My Restaurant</a>
            <a href="open_resto.php" class="w3-bar-item w3-button">Add My restaurant</a>
            <a href="index.php" id="signout" name="signout" class="w3-bar-item w3-button">Sign-out</a>
        </div>
    </div>
    <nav style="background-color: #ea5b31;border-color:#ea5b31; " class="navbar navbar-default">
        <div style="background-color: #ea5b31" class="w3-card"> 
            <ul class="nav navbar-nav visible-xs inline btn-group">
                <li class="inline btn-group"><a id="slider" class="btn" onclick="w3_open()"> &#9776;</a>
                    <a id="logo_xs" style="color:white;" class="btn" href="#" >Foodera</a>
                </li>
            </ul>
            <div class="navbar-header navbar-left hidden-xs">
              <a id="logo" class="navbar-brand" href="#">Foodera</a>
            </div></p> 
          <div class="navbar-header navbar-right">            
            <ul class="nav navbar-nav visible-sm visible-md visible-lg">
                <li id="headitems" ><a style="color:#fff; background-color: #ea5b31;" href="home.php">Find Restaurants</a></li>
                <li  style="margin-right:80px;" id="login_btn" ><a class="dropdown-toggle" style="color:#fff;
            background-color: #ea5b31;" data-toggle="dropdown">My Account<span class="caret"></span></a>
                <ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="menu1">
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="edit_resto_details.php">My Restaurant</a></li>
                  <li role="presentation" class="divider"></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="myorders.php">My Orders</a></li>
                  <li role="presentation" class="divider"></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="open_resto.php">Add My restaurant</a></li>
                  <li role="presentation" class="divider"></li>
                  <li role="presentation"><a  id="signout" name="signout" role="menuitem" tabindex="-1" href="index.php">Sign-out</a></li>
                </ul></li>

            </ul>
          </div>
        </div>
    </nav>
    <div class="hidden-lg hidden-md hidden-sm">
    <div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left" style="width:200px;"   id="mySidebar">
        <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>
        <a href="open_resto.php">Add my restaurant</a>
        <a href="#" class="w3-bar-item w3-button">Help</a>
        <a href="#" class="w3-bar-item w3-button">Login or Sign Up</a>
    </div>
</div>
</body>
</html>