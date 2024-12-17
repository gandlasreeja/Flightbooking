<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
$server="localhost";
$username="root";
$password="";
$db="login";
$conn=mysqli_connect($server,$username,$password,$db);
$u=$_POST['uname'];
$p=$_POST['pass'];
$sql = "select * from login1 where username='$u' and password='$p'";

if(mysqli_query($conn,$sql)){
    echo "Successfully logged in";
    header('Location:Bookingflight.html');
    exit;
}
else{
    echo "Values are not inserted by some errors<br><b>Please check your code once</b>";
}
}
?>
<!DOCTYPE html>
<html>
    <head>
    <style>
        p{
            color: white;
            text-align: center;
            font-family: 'Courier New';
            font-size: xx-large;
        }
        .navbar {
            overflow: hidden;
            background-color:rgb(5, 42, 79);
            position: fixed; /* Set the navbar to fixed position */
            top: 0; /* Position the navbar at the top of the page */
            width: 100%; /* Full width */
            height:60px;
          }
          .navbar p{
    float: left;
    font-family: 'Times New Roman', Times, serif;
    padding-left: 50px;
    align-content: center;
  }
          
          /* Links inside the navbar */
          .navbar a {
            font-size: large;
            float: right;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
          }
          .navbar p{
    float: left;
    font-family: 'Times New Roman', Times, serif;
    padding-left: 50px;
    align-content: center;
  }
  .navbar img{
    width: 10%;
    height: 100%;
    float: left;
  }
          /* Change background on mouse-over */
          .navbar a:hover {
            background: #ddd;
            color: rgb(241, 19, 19);
          }
          
        
          body{
    background-image:url("airline5.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    height: 100%;
  
}
       
        p{
            color: white;
            text-align: center;
            font-family: 'Courier New';
            font-size: xx-large;
        }
       
        h1{
            color: blueviolet;
             text-align: center;
         
            
         }
         #login{
            text-align: center;
            border: 2px solid black;
            display: flex;
            flex-direction: row;
            align-items: center;
            padding: 7%;
            margin-right: 30%;
            margin-left: 30%;
           
         }
         label{
            font-size: x-large;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
         }
         input{
            border: 1px solid black;
            border-radius: 5px;
            height: 30px;
            width: 300px;
         }
         button{
            border: 2px solid black;
            border-radius: 5px;
            font-size: x-large;
            color: cadetblue;
         }
         #signup{
            border-radius: 5px;
            text-align: center;
         }
         #signup a{
            text-decoration: double;
            color: black;
            font-size: x-large;
            font-weight: bold;
         }
         #signup a:hover{
            color:#ddd;
            background-color:blueviolet;
         }
         .jumping-element {
  position: relative;
  animation: jump 1s ease infinite;
}

@keyframes jump {
  0%, 100% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-20px); /* Adjust the height of the jump */
  }
}
    </style>
    </head>
    <body>
        <h1 style="margin:100px;">Feelgood Airlines</h1>
        <p style="color:white; font-weight:600; font-family:Roboto;" class="jumping-element">Let's travel around
            Enjoy a lot by spending a little
            50% off on your bookings till Nov 14,2023
        </p>
        <div class="navbar">
        <img src="airline5.jpg" alt="">
            <p style="font-size: 20px;">Feelgood airlines</p>
            <a href=""><b>Book a flight</b></a>
            <a href="http://127.0.0.1/webtech/link4.php"><b>Log-in/Sign-up</b></a>
            <a href="http://127.0.0.1/webtech/link3.html"><b>Feedback</b></a>
            <a href="link2.html"><b>Contact us</b></a>
            <a href="link1.html"><b>About us</b></a>
            <a href="home.html"><b>Home</b></a>
          </div>
        <div id="signup"><a href="http://127.0.0.1/webtech/link4.php" >Sign up-If you are new user</a><br>
        <a href="http://127.0.0.1/webtech/login.php">Log-in or Sign_in -If you are already signed-up</a></div>
    <div id="login">
       <form action="" method="POST">
        <label for=""><b>Username:</b></label>
        <input type="text" name="uname" required><br>
        <label for=""><b>Password:</b></label>
        <input type="text" name="pass" required><br><br>
        <button>submit</button>
    
       </form>
        </div>
        <footer>
            <b>&copy; 2023 FeelGood Airlines. All rights reserved.</b>
        </footer>
    </body>
</html>

