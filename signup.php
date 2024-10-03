<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sign.css">
    <link rel="stylesheet" href="home.css">
    <script src="https://kit.fontawesome.com/6133dcca2b.js" crossorigin="anonymous"></script>
    <?php
   if(isset($_POST["sig"]))
   {
    $Name= $_POST["name"];
   $SP=$_POST["set"];
   $Mail=$_POST["mail"];
   $Phno=$_POST["ph"];
   $conn= mysqli_connect("localhost","root","","ineu");
   $ins= "Insert into register(Name,SetPassword,Mail,Phno) values('$Name','$SP','$Mail','$Phno')";
    mysqli_query($conn,$ins);
   }
   ?>
   
</head>
<body>
    <div class="pop" id="popup">
        <div class="field">
           <div class="top">
            <h3>Register</h3>
           </div>
            <form action="" method="post">
                <div class="icon">
                    <i style="color: white; font-size: x-large; margin-left: 15%;" class="fa-solid fa-user"></i>
                    <input type="text" name="name" placeholder="Username:" required>
                </div>
                <div class="icon">
                    <i style="color: white; font-size: x-large; margin-left: 15%;" class="fa-solid fa-lock"></i>
                    <input type="text" name="set" placeholder="Set Password:" required>
                </div>
                <div class="icon">
                    <i style="color: white; font-size: x-large; margin-left: 15%;" class="fa-solid fa-lock"></i>
                    <input type="text" name="confirm" placeholder="Confirm Password:" required> 
                </div>
                <div class="icon">
                    <i style="color: white; font-size: x-large; margin-left: 15%;" class="fa-solid fa-envelope"></i>
                    <input type="text" name="mail" placeholder="Mail:" required>
                </div>
                <div class="icon">
                    <i style="color: white; font-size: x-large; margin-left: 15%;" class="fa-solid fa-phone"></i>
                    <input type="text" name="ph" placeholder="Mob NO:" required>
                </div>
                <input type="submit" name="sig" id="sign" value="Sign Up">
                <br>
                <p style="color:white; margin-top:5px; text-align:center;">Already have an account?</p>
                <br>
                <a href="login.php" style="color: aliceblue; text-decoration: none; font-size: x-large; margin-left: 45%;">Login</a>
               
                
            </form>
        </div>
    </div>
</body>
</html>