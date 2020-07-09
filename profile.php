<?php $con = mysqli_connect("localhost","root","");
            mysqli_select_db($con,'user');

            $username = $_GET['username'];
            $connection = mysqli_connect("localhost", "root", "","user"); // Establishing Connection with Server
            //$db = mysql_select_db("user", $connection);
          //  $connection = mysql_connect("localhost", "root", "","user");
            $query = mysqli_query($connection,"SELECT * from users where username='$username' "); 
            echo "Returned rows are: " . mysqli_num_rows($query);
            $followingdata = $query->fetch_assoc();
            $mem=$followingdata['member'];
            $mem=strtoupper($mem);
            //$db = mysql_select_db("users", $connection);

            ?>
<html>
    <head>
        <title>Profile</title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <style>
        @import url('https://fonts.googleapis.com/css?family=Caudex&display=swap');
        img{
            
            width:3cm;
            height:3cm;
        }
        #new,#set1,#pas{
            text-align: center;
            margin: auto;
            border-style: solid;
            border-width: 1px;
            width: 40%;
        }
        body{
            font-family: 'Caudex', serif;
            text-align: center;
        }
        .loading{
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin-top: 200px;
        }
        .content{
            display: none;
        }
        @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,700italic,800);
        .mainmenu {
            list-style: none;
            text-align: center;
            border-bottom-style: solid;
            border-bottom-color: #124a58;
        }
        
        .nav {
            text-decoration: none;
            color: black;
            display: inline-block;
            height: 50px;
            width: 105px;
            line-height: 48px;
            text-align: center;
            font-family: "open sans";
            padding: 0 20px 0 20px;
            border-radius: 4px;
            border-bottom-right-radius: 0px;
            border-bottom-left-radius: 0px;
        }
        
        .nav:hover {
            /* transition: background-color 0.1s linear, color 0.1s linear;*/
            background-color: #124a58;
            color: white;
        }
        
        .nav.current {
            background-color: #124a58;
            color: white;
        }
        
        #login_btn {
            position: absolute;
            top: 20px;
            right: 10px;
            text-decoration: none;
            color: #124a58;
        }
        
        #login_btn:hover {
            color:white;
        }
        .logo{
            float:left;
            height:60px;
        }
        .logo-con {
        background-color:#124a58;
        height: 60px;
        width: 100%;
        }

        #new{
            color:white;
            background-color: rgb(0,0,0,0.5);
            border:#124a58;
            border-style: solid;
            width:32%;
        }
        body{
            background-image:url("beach.jpg");
            background-repeat: no-repeat;
            background-size: cover
            ;
        }
        </style>
    </head>
    <body>
        <div class="loading">
            <h1>Please Wait</h1>
            <img src="default.svg" alt="">
        </div>
        <br>
        <div class="content">
        <header>
        
            
                <!--<div class="logo-con">
                <img src="logo.svg" class="logo"style="display:inline-block" href="profile.php"><br><br>-->
                <div class="mainmenu">
                <a href="#" class="current nav">HOME</a>
            <a class="nav" href="#">QUIZ</a>
            <a href="#" class="nav">CATEGORIES</a>
            <a class="nav" href="#">ABOUT</a>
    </div>
                <a id="login_btn" href="logout.php">LOGOUT</a>
            </header>
        <div>
            <br><br>
        <div id="new" style="display:block">
            <br><br>
            <h1>User Profile</h1>
            <br>
        <div id="set" style="float: left;">
        <!--<a href="#" class="next" id="yay11" onclick="fun1()" >Settings </a>-->
        </div><br><br><br>
        <img src="lily.png" ><br><br>
        <!--<h1><em>Username</em></h1>-->
        <h4>Member</h4>
        <div>
        <!--<input type="text" id="user" style="text-align: center;" onclick="fun1()" value=""><br><br>-->
        <p><?php echo $_GET['username'].'-'. $mem?></p><br><br>
        </div>
        About you:<br>
        Enter your hobbies:<br>
        <!--<form method="POST" action="select.php">
        <input type="text" Name="name" id="hello" ><br><br>
        <input type="submit" class="btn btn-info" role="button" style="text-align: center;" onclick=fun2()>
    </form>
        <p id="hello" style="display:none"></p>-->
        <br><br>
        <a href="#" class="btn btn-info" role="button">Edit</a><br><br>
        <a href="chathead.html" class="btn btn-info" role="button">Access your chat</a><br><br>
        </div>
        </div>
        <div>
        </div>
            <br><br>
        

        <script>

        document.getElementById("user").value="Username"
        function fun1(){
            document.getElementById("user1").value="Username"
            document.getElementById("new").style.display="none";
            document.getElementById("set1").style.display="block";
        }
        function fun2(){
            document.getElementById("hello").style.display="block";
        }
        function fun3(){
            document.getElementById("set1").style.display="none";
            document.getElementById("pas").style.display="block";
        }
        function fun5(){
            document.getElementById("set1").style.display="block";
            document.getElementById("pas").style.display="none";
        }
        function fun6(){
            document.getElementById("new").style.display="block";
            document.getElementById("set1").style.display="none";
        }
        </script>
        <script>
        $('.loading').delay(3000).fadeOut(500,function(){
            $('.content').fadeIn(500);
        });
        </script>
    </body>
</html>