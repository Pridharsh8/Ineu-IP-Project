<?php
   if(isset($_GET["sig"]))
   {
    $Name= $_GET["name"];
   $SP=$_GET["set"];
   $Mail=$_GET["mail"];
   $Phno=$_GET["ph"];
   $conn= mysqli_connect("localhost","root","","ineu");
   $ins= "Insert into register(Name,SetPassword,Mail,Phno) values('$Name','$SP','$Mail','$Phno');";
    mysqli_query($conn,$ins);
   }
?>