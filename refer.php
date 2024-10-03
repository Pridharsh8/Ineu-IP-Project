<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .photo-container {
    display: flex; /* Use a flex container to arrange photos horizontally */
    flex-wrap: nowrap; /* Prevent wrapping to the next row */
    overflow: auto; /* Enable horizontal scrolling if necessary */
}

.photo-block {
    margin-right: 10px; /* Add some spacing between photos */
}
body.blurred {
    filter: blur(4px); /* Apply a blur effect to the entire window */
}

#popup {
    display: none;
    /* Style your popup here */
}

    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function() {
    const popup = $('#popup');

    function openPopup() {
        $('body').addClass('blurred'); // Add the "blurred" class to the body
        popup.show();
    }

    function closePopup() {
        $('body').removeClass('blurred'); // Remove the "blurred" class from the body
        popup.hide();
    }

    // Trigger the openPopup function when the document is ready
    openPopup();

    // Attach event listeners to your popup open and close buttons
    $('#open-popup-button').click(openPopup);
    $('#close-popup-button').click(closePopup);
});
</script>

</head>
<body>
<?php
// if (isset($_POST['submit'])) {
//         // Get an array of selected gender values
//         $selectedGenders = $_POST['gender'];

//         // Process or store the $selectedGenders array as needed
//         // For example, you can save it to a database, display it, or perform any other actions
//         $csvString = implode(', ', $selectedGenders);
//         // echo "Selected genders: " . implode(', ', $selectedGenders);
//         $conn= mysqli_connect("localhost","root","","ineu");
//    $ins= "Insert into refer(Event) values('$csvString')";
//     mysqli_query($conn,$ins);
    
// }
// ?>
<form method="post" action="">
    <label>
        <input type="checkbox" name="gender[]" value="male"> Male
    </label>
    <label>
        <input type="checkbox" name="gender[]" value="female"> Female
    </label>
    <label>
        <input type="checkbox" name="gender[]" value="other"> Other
    </label>
    <input type="submit" name="submit" value="Submit">
</form>


<div id="popup">
    <div id="popup">
        <h2>Popup Content</h2>
        <!-- Add your popup content here -->
        <button id="close-popup-button">Close</button>
    </div>
</div>





    <!-- <h2>Upload Your Photo</h2>

    <form method="post" action="" enctype="multipart/form-data">
        <input type="file" name="image" accept="image/*" required>
        <input type="submit" name="submit" value="Upload">
    </form>

    <php
    if (isset($_POST['submit'])) {
        if (isset($_FILES['image'])) {
            $uploadDirectory = 'uploads/pic';

            // Create the uploads directory if it doesn't exist
            if (!is_dir($uploadDirectory)) {
                mkdir($uploadDirectory, 0755, true);
            }

            $targetFile = $uploadDirectory . basename($_FILES['image']['name']);
            $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

            // Check if the file is an actual image
            $check = getimagesize($_FILES['image']['tmp_name']);
            if ($check !== false) {
                // Check file size (you can change the size limit as needed)
                if ($_FILES['image']['size'] > 5 * 1024 * 1024) { // 5MB limit
                    echo "Sorry, your file is too large.";
                } else {
                    // Move the uploaded file to the uploads directory
                    if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
                        echo "Image uploaded successfully!";
                        echo '<img src="' . $targetFile . '" alt="Uploaded Image">';
                    } else {
                        echo "Error uploading image.";
                    }
                }
            } else {
                echo "File is not an image.";
            }
        }
    }
    ?> -->
   
    <h2>Upload and Display Multiple Photos</h2>
    <form method="post" action="" enctype="multipart/form-data">
        <input type="file" name="images[]" accept="image/*" multiple required>
        <input type="submit" name="submit" value="Upload">
    </form>
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
            echo '<img src="' . $uploadDirectory . $image . '" alt="Uploaded Image" width="200" height="150"><br>';
            echo '</div>';
        }
    }
    echo '</div>';
}
?>







</body>
</html>

