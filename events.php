<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="event.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/6133dcca2b.js" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
                    $(".reg").click(function(){
                        $(".field").fadeIn("slow");
                    })
                })
        $(document).ready(function(){
                    $("#close").click(function(){
                        $(".field").fadeOut("slow");
                    })
                })
            </script>
            <style>
                .field{
                    background: linear-gradient(pink,blue);
                    border:1px solid black;
                    margin-top:25%;
                    margin-left:50%;
                    transform: translate(-50%,-50%);
                }
                .field input{
                    color:black;
                }
                .rad{
                    display:flex;
                    flex-direction:column;
                    
                }
                #sig{
                    margin-left:17%;
                    border:1px solid black;
                    border-radius:10px;
                }
                #et{
                    margin-left:22%;
                }
            </style>
</head>
<body>

<?php
   if(isset($_POST["submit"]))
   {
    $Name= $_POST["name"];
   $Mail=$_POST["mail"];
   $Roll=$_POST["roll"];
   $selectedValues = $_POST['event'];
   $csvString = implode(', ', $selectedValues);
   $conn= mysqli_connect("localhost","root","","ineu");
   $ins= "Insert into events(Name,Mail,Rollno,Event) values('$Name','$Mail','$Roll','$csvString')";
    mysqli_query($conn,$ins);
   }
?>

    <header>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="news.php">News</a></li>
            <li><a href="events.php">Events</a></li>
            <li><a href="about.php">AboutUs</a></li>
            <li><a href="fp.html"><i class="fa-solid fa-power-off"></i></a></li>
        </ul>
        <video autoplay loop muted class="logo" src="Neu (3).mp4"></video>
    </header>
        <h1 style="color: aliceblue; font-family: cursive; font-size: xx-large; text-align: center;">TECHNICAL EVENTS</h1>
    <div class="events">
        <div class="box">
           <div class="c1">
            <img src="code wars.png" alt="">
            <br>
            <input type="submit"  class="reg" value="REGISTER">
           </div>

                <div class="info">
                    <p>Join us for an exhilarating journey into the world of coding at CodeQuest 2023, where innovation, creativity, and collaboration converge to create a digital odyssey like no other! </p>
                    <br>
                    <p>Date="9:10:202"</p>
                    <br>
                    <p>Venue="Purple Hall"</p>
                    <br>
                    <p>Time="8.00-10.00"</p>
                </div>
        </div>
        <div class="box">
          <div class="c1">
            <img src="code wars (3).png" alt="">
            <br>
            <input type="submit" class="reg" value="REGISTER">
          </div>

                <div class="info">
                    <p>Join us for an exhilarating journey into the world of coding at CodeQuest 2023, where innovation, creativity, and collaboration converge to create a digital odyssey like no other! </p>
                    <p>Date="9:10:202"</p>
                    <br>
                    <p>Venue="Purple Hall"</p>
                    <br>
                    <p>Time="8.00-10.00"</p>
                </div>
        </div>
        <div class="box">
           <div class="c1">
            <img src="code wars.png" alt="">
            <br>
            <input type="submit" class="reg" value="REGISTER">
           </div>

                <div class="info">
                    <p>Join us for an exhilarating journey into the world of coding at CodeQuest 2023, where innovation, creativity, and collaboration converge to create a digital odyssey like no other! </p>
                    <br>
                    <p>Date="9:10:202"</p>
                    <br>
                    <p>Venue="Purple Hall"</p>
                    <br>
                    <p>Time="8.00-10.00"</p>
                </div>
        </div>
    </div>
    <h1 style="color: aliceblue; font-family: cursive; font-size: xx-large; text-align: center;">NONTECHNICAL EVENTS</h1>
    <div class="events">
        <div class="box">
           <div class="c1">
            <img src="code wars.png" alt="">
            <br>
            <input type="submit" class="reg" value="REGISTER">
           </div>

                <div class="info">
                    <p>Join us for an exhilarating journey into the world of coding at CodeQuest 2023, where innovation, creativity, and collaboration converge to create a digital odyssey like no other! </p>
                    <br>
                    <p>Date="9:10:202"</p>
                    <br>
                    <p>Venue="Purple Hall"</p>
                    <br>
                    <p>Time="8.00-10.00"</p>
                </div>
        </div>
        <div class="box">
          <div class="c1">
            <img src="code wars (3).png" alt="">
            <br>
            <input type="submit" class="reg" value="REGISTER">
          </div>

                <div class="info">
                    <p>Join us for an exhilarating journey into the world of coding at CodeQuest 2023, where innovation, creativity, and collaboration converge to create a digital odyssey like no other! </p>
                    <p>Date="9:10:202"</p>
                    <br>
                    <p>Venue="Purple Hall"</p>
                    <br>
                    <p>Time="8.00-10.00"</p>
                </div>
        </div>
        <div class="box">
           <div class="c1">
            <img src="code wars.png" alt="">
            <br>
            <input type="submit" class="reg" value="REGISTER">
           </div>

                <div class="info">
                    <p>Join us for an exhilarating journey into the world of coding at CodeQuest 2023, where innovation, creativity, and collaboration converge to create a digital odyssey like no other! </p>
                    <br>
                    <p>Date="9:10:2023"</p>
                    <br>
                    <p>Venue="Purple Hall"</p>
                    <br>
                    <p>Time="8.00-10.00"</p>
                </div>
        </div>
    </div>

    <!-- form -->
    <div class="field">
        <div class="top">
         <h3>Register</h3>
         <p style="color: white; font-size: x-large;cursor: pointer;" id="close">X</p>
        </div>
         <form action="" method="post">
             <div class="icon">
                 <i style="color: white; font-size: x-large; margin-left: 15%;" class="fa-solid fa-user"></i>
                 <input type="text" name="name" placeholder="Username:">
             </div>
             <div class="icon">
                 <i style="color: white; font-size: x-large; margin-left: 15%;" class="fa-solid fa-envelope"></i>
                 <input type="text" name="mail" placeholder="Mail:">
             </div>
             <div class="icon">
                 <i style="color: white; font-size: x-large; margin-left: 15%;" class="fa-solid fa-phone"></i>
                 <input type="text" name="roll" placeholder="RollNO:">
             </div>
             <br>
             <div class="rad">
            <input type="checkbox" name="event[]"value="CodeGraze" id=""><p id="et">CodeGraze</p>
             <input type="checkbox" name="event[]" value="CodeWars" id=""><p id="et">CodeWars</p>
             <input type="checkbox" name="event[]" value="TechTalkie" id=""><p id="et">TechTalkie</p>
             
             </div>

             <input type="submit" name="submit" id="sig" value="REGISTER" >
         </form>
     </div>









    <!-- footer -->
    <footer>
        <h2>Follow Us</h2>
        <div class="icons">
        <span><i class="fa-brands fa-instagram fa-beat"></i></span>
        <span><i class="fa-brands fa-twitter fa-beat"></i></span>
        <span><i class="fa-brands fa-linkedin fa-beat"></i></span>
        <span><i class="fa-brands fa-square-facebook fa-beat"></i></span>
        </div>
        <div class="copy">
            <span class="copy"><i class="fa-solid fa-copyright"></i></span>
        <p>All rights reserved</p>
        </div>
       </footer>



       <!-- mail -->
       <?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'SMTP.php';

 
if(isset($_POST["submit"])){
    $user_email = $_POST['mail'];

    $mail = new PHPMailer(true);

    // Configure the email server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // Your SMTP server
    $mail->Port = 465;
    $mail->SMTPAuth = true;
    $mail->Username = 'pridharsh2693@gmail.com';
    $mail->Password = 'husk jphb ynpr lbcl';
    $mail->SMTPSecure = 'ssl';

    // Compose the email
    $mail->setFrom('pridharsh2693@gmail.com', 'INEU Club');
    $mail->addAddress($user_email);
    $mail->Subject = 'Registration Successfull!';
    $mail->Body = 'Your resgistration was completed. Stay connected for more updates';
   

    if ($mail->send()) {
        echo 'Email sent successfully.';
    } else {
        echo 'Email could not be sent.';
    }
}

?>
</body>
</html>