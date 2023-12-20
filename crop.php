<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Image Cropper Example - Crop Image</title>
    <!-- Include Bootstrap CSS from node_modules -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/cropperjs/dist/cropper.css">
    <style>
        /* Adjust the styling of the cropper area */
        #cropper {
            width: 25%;
            height: auto;
            max-height: 25vh; /* Set a maximum height to maintain aspect ratio */
            margin: 0 auto;
            display: block;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4">Crop Image</h1>
    <?php
    // Check if 'image' parameter is provided in the URL
    if (isset($_GET['image'])) {
        $imagePath = "uploads/" . $_GET['image'];

        // Check if the file exists
        if (file_exists($imagePath)) {
            echo '<img id="cropper" src="' . $imagePath . '" alt="Croppable Image">';
        } else {
            echo '<p>Image not found</p>';
        }
    } else {
        echo '<p>Image parameter not provided</p>';
    }
    ?>
    <button class="btn btn-success" id="cropButton">Crop Image</button>
    <div id="croppedResult"></div>
</div>

<!-- Include Bootstrap JS and Popper.js from node_modules -->
<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="node_modules/cropperjs/dist/cropper.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function () {
        var cropper = new Cropper(document.getElementById('cropper'), {
            aspectRatio: NaN, // Set aspectRatio to NaN for a free aspect ratio
            viewMode: 1,
        });

        $('#cropButton').on('click', function () {
            // Get the cropped data
            var croppedData = cropper.getData();
            console.log(croppedData);

            // Create a new image element with the cropped data
            var croppedImage = new Image();
            croppedImage.src = cropper.getCroppedCanvas().toDataURL(); // Get the cropped data URL

            // Display the cropped image in the #croppedResult div
            var resultContainer = document.getElementById('croppedResult');
            resultContainer.innerHTML = ''; // Clear previous content
            resultContainer.appendChild(croppedImage);
        });
    });
</script>

</body>
</html>
