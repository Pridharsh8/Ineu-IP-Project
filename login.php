<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="fp.css">
    <link rel="stylesheet" href="home.css">
    <script src="https://kit.fontawesome.com/6133dcca2b.js" crossorigin="anonymous"></script>
    sde
    <style>
        #log{
            border: 1px solid white;
            border-radius: 10px;
            margin-left: 65px;
        }
        .dis{
            color:black;
            font-size:x-large;
            font-family:cursive;
            height;200px;
            width: 200px;
            background-color:beige;
            border:1px solid black;
            border-radius:10px;
            margin-left:45%;
            

        }
    </style>
     <?php
   if(isset($_POST["login"]))
   {
    $mail= $_POST["lmail"];
   $Pass=$_POST["lpassword"];
   $conn= mysqli_connect("localhost","root","","ineu");
//    $hashedPassword = md5($Pass);
   $query = "SELECT * FROM register WHERE Mail = '$mail' AND SetPassword = '$Pass'";
    $result = mysqli_query($conn,$query);
    if ($result->num_rows == 1) {
        echo '<div class="dis">';
        echo "Login Successful";
        echo '</div>';
        header("Location: home.php");
    } 
    else{
        echo '<div class="dis">';
        echo "Login Unsuccessful";
        echo '</div>';
    }
   }
   ?>
</head>
<body>
    <div class="pop" id="popup1">
        <div class="field" id="login">
           <div class="top">
            <h3>Login</h3>
           </div>
            <form action="" method="post">
                <div class="icon">
                    <i style="color: white; font-size: x-large; margin-left: 15%;" class="fa-solid fa-user"></i>
                    <input type="text" name="lmail" placeholder="Username:">
                </div>
                <div class="icon">
                    <i style="color: white; font-size: x-large; margin-left: 15%;" class="fa-solid fa-lock"></i>
                    <input type="text" name="lpassword" placeholder="Password:">
                </div>
                <input type="submit" name="login" id="log" value="Login">
                <br>
                <p style="color:white; margin-top:5px; text-align:center;">Don't have an account?</p>
                <br>
                <a href="sign.html" style="color: aliceblue; text-decoration: none; font-size: x-large; margin-left: 40%;">Sign Up</a>
            </form>
        </div>
    </div>
</body>
</html>