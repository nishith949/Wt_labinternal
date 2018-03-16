<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn ,"hafa");


    if(isset($_POST["sub"])) 
    {
        $name=$_POST['name'];
        $pass=$_POST['password'];
        $qry = "SELECT * FROM news WHERE  `name`='$name' AND `password`='$pass';";
        $sql = mysqli_query($conn,$qry) or die("Connection failed: " . mysqli_error());
        if(mysqli_num_rows($sql)>0) 
        {
            $row=mysqli_fetch_assoc($sql);
            $_SESSION['user_id']=$row['user_id'];
            $msg = "You are logged in";
           
        } 
        else 
        {
            $msg = "Invalid login";
        }
        header("location:home.html"); 
    }

?><html>
    <head>
        <title>Login</title>
        <style>
            body{
                background-image:url("background.jpg");
                padding-left:13cm;
                color:black;
                background-repeat:no-repeat;
                background:cover;
                        }
            form{
                border:2px solid black;
                height:7cm;
                width:8cm;
                padding-top:2cm;
               text-decoration:bold;
                color:white;

            }
            input[type=submit]{
                text-align:center;
                border:2px solid black;
                width:100%;
                background-color:grey;
                color:white;

            }
            input[type=text]{
                border:2px solid black;
                width:100%;
                color:black;
            }
            input[type=password]
            {
                border:2px solid black;
                width:100%;
                color:black;
            }
            Name{border:1px white;}
            h3{
                padding-top:8cm;
                padding-left:3cm;
            }
            h1{
                padding-left:3cm;
            }
            </style>
      
    </head>
    <body>
        <h1>Signin</h1>
        <form>
            Username:<br><br>
            <input type="text" name="name" placeholder="name"><br><br>
            Password:<br><br>
            <input type="password" name="password" placeholder="password"><br><br>
            <input type="submit" name="signin" value="Signin">
            <p>Not Registered??<a href="signup.php">Signup</a></p>
        </form>
        
    </body>
    <h3>Aboutus</h3>
</html>
