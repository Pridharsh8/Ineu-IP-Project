<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$directory = 'path/to/your/new/directory';
if (!is_dir($directory)) {
    mkdir($directory, 0755, true); // Recursive creation with 0755 permissions
    echo "Directory created successfully.";
} else {
    echo "Directory already exists.";
}
?>

</body>
</html>