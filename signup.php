<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn ,"db_shop");

if(isset($_POST["submit"]))
{
    $name=$_POST['name'];
    $password = $_POST['password'];
    $email=$_POST['email'];
    mysqli_query($conn,"INSERT INTO `news` ( `name`, `password`, `email`) VALUES ( '$name', '$password', '$email');");
    header("location:login.php");   
}

?>

<html>
    <head>
        <style>
            body{
                background-image:url("background.jpg");
                padding-left:13cm;
                color:black;
                background-repeat:no-repeat;
                background:cover;
                        }
            form{
                border:2px solid white;
                height:8cm;
                width:8cm;
                background-color:black;
                color:white;

            }
            input[type=submit]{
                text-align:center;
                border:2px solid white;
                width:100%;
                background-color:black;
                color:white;

            }
            input[type=text]{
                border:2px solid white;
                width:100%;
                color:black;
            }
            input[type=password]
            {
                border:2px solid white;
                width:100%;
                color:black;
            }
            
            Name{border:1px white;}
            </style>
</head>
<body>
    <h3>REGISTRATION FORM</h3>
<form method="post" action="signup.php">
            
        <label for="name">Name</label><br><br>
        <input type="text" name="name" ><br><br>
        <label for="password">Password</label><br><br>
         <input type="password" name="password" ><br><br>
       <label for="email">Email ID</label><br><br>
        <input type="text" name="email" ><br><br><br>
     <input type="submit" name="submit">

</form>
<p>Already have an account<a href="login.php">Signin</a></p>
</body><div id="h">
<h3>Aboutus</h3>
        </div>
</html>

