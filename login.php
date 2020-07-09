
<?php

          if(isset($_POST['login']))
          {
            $con = mysqli_connect("localhost","root","");
            mysqli_select_db($con,'user');

            $username = $_POST['username'];
            $password = $_POST['password'];
            $query = "SELECT * FROM users where username='$username' and  password='$password'";

            $query_run = mysqli_query($con,$query);
            if($query_run){
              if(mysqli_num_rows($query_run) > 0)
              {
                //session_start(); 
                $_SESSION['username'] = $username;
               header('Location: profile.php?username=' . $_SESSION['username'] .'');
                echo "<script type='text/javascript'> alert('Successfully logged in')
                window.location.href = 'http://localhost/User/registration.html';
                </script>";
              }
              else{
                echo "<script type='text/javascript'> alert('Invalid Credentials') 
                window.location.href = 'http://localhost/User/registration.html';
                </script>";
              }
            }
            else{
              echo '<script type="text/javascript"> alert("database error") </script>';
            }
          }

?>
