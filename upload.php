<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

    // Redirect to the crop page with the uploaded image path
    header("Location: crop.php?image=" . basename($target_file));
    exit();
}
?>
