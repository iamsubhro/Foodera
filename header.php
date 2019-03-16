<script>
        function w3_open() {
            document.getElementById("mySidebar").style.display = "block";
            $('#search').hide();
        }
        function w3_close() {
            document.getElementById("mySidebar").style.display = "none";
            $('#search').show();
        }
    </script>
    <head>
          <title>Foodera</title>
      </head>
<body onload="w3_close();">

   <div class="hidden-lg hidden-md hidden-sm">
        <div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left" style="width:200px;"   id="mySidebar">
            <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>
            <a href="login.php" class="w3-bar-item w3-button">Login or Sign Up</a>
        </div>
    </div>

    <nav style="background-color: #ea5b31;border-color:#ea5b31; " class="navbar navbar-default">
        <div style="background-color: #ea5b31" class="navbar-top-fixed"> 
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
                <li  style="margin-right:80px;" id="login_btn" ><a style="color:white;" href="login.php" >Login or Sign Up</a></li>
                <!--data-toggle="modal" href="#loginModal"-->
            </ul>
          </div>
        </div>
    </nav>


   </div>
</div>
</body>
</html>
