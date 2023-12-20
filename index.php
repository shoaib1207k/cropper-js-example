<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Image Cropper Example</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/cropperjs/dist/cropper.css">
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4">Image Cropper Example</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="imageInput" class="form-label">Choose an image to upload:</label>
            <input type="file" class="form-control" id="imageInput" name="image" accept="image/*" required>
        </div>
        <button type="submit" class="btn btn-primary">Upload Image</button>
    </form>
</div>

<script src="node_modules/cropperjs/dist/cropper.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
