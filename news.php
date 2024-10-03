<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home.css">
    <script src="https://kit.fontawesome.com/6133dcca2b.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="news.css">
    <script>
        var myCarousel = document.querySelector('#myCarousel')
        var carousel = new bootstrap.Carousel(myCarousel)
    </script>
    <style>
      img{
        height: 250px;
        margin-top: 10%;
      }
        .photo-container {
    display: flex; /* Use a flex container to arrange photos horizontally */
    flex-wrap: nowrap; /* Prevent wrapping to the next row */
    overflow: auto;
    margin-top:20px; /* Enable horizontal scrolling if necessary */
}

.photo-block {
  border:1px solid white;
  padding: 5px;
    border-radius:10px;
    margin-right: 10px; /* Add some spacing between photos */
}
#pic{
  color:white;
  background:none;
  border:none;
  height:40px;
  width: 240px;
  padding: 10px;
 
}
.ph{
  height:90px;
  width: 300px;
  background:none;
  border:1px solid white;
  border-radius:10px;
  margin-left:40%;
}
.ph input{
  margin-top:5px;
  margin-left:30px;
  background:none;
  color: white;
  border:1px solid white;
  height:30px;
  width: 80px;
  border-radius:10px;

}


    </style>
</head>
<body>
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
    <!-- Carousel -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="Welcome to the iclub! (1).png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="We're open daily!.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="Screenshot 2023-11-03 133924.png" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
<!-- upload photos -->


<h2 style="color:white;text-align:center; margin-top:10px; font-family:cursive;">UPLOAD YOUR TASKS</h2>
   <div class="ph">
   <form method="post" action="" enctype="multipart/form-data">
        <input id="pic" type="file" name="images[]" accept="image/*" multiple required>
        <input style="margin-left:35%;" type="submit" name="submit" id="upl" value="Upload">
    </form>
   </div>
    <?php
if (isset($_POST['submit'])) {
    $uploadDirectory = 'uploads/';

    if (!is_dir($uploadDirectory)) {
        mkdir($uploadDirectory, 0755, true);
    }

    $imageFiles = $_FILES['images'];

    foreach ($imageFiles['name'] as $key => $filename) {
        $tempFilePath = $imageFiles['tmp_name'][$key];
        $newFilename = uniqid() . '_' . $filename;
        $uploadPath = $uploadDirectory . $newFilename;

        if (move_uploaded_file($tempFilePath, $uploadPath)) {
            // Image uploaded successfully
        } else {
            echo "Error uploading image: " . $filename . "<br>";
        }
    }
}
?>
<?php
$uploadDirectory = 'uploads/';
if (is_dir($uploadDirectory)) {
    $images = scandir($uploadDirectory);
    $images = array_reverse($images); 
    echo '<div class="photo-container">';
    foreach ($images as $image) {
        if ($image !== '.' && $image !== '..') {
            $imagePath = $uploadDirectory . $image;
            echo '<div class="photo-block">';
            echo '<img src="' . $uploadDirectory . $image . '" alt="Uploaded Image" width="300" height="10"><br>';
            echo '</div>';
        }
    }
    echo '</div>';
}
?>



      <!-- footer -->
      <footer>
        <h2>Follow Us</h2>
        <div class="icons">
        <span><i id="insta" class="fa-brands fa-instagram fa-beat"></i></span>
        <span><i id="tweet" class="fa-brands fa-twitter fa-beat"></i></span>
        <span><i id="li" class="fa-brands fa-linkedin fa-beat"></i></span>
        <span><i id="fb" class="fa-brands fa-square-facebook fa-beat"></i></span>
        </div>
        <div class="copy">
            <span class="copy"><i class="fa-solid fa-copyright"></i></span>
        <p>All rights reserved</p>
        </div>
       </footer>
</body>
</html>