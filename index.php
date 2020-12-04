<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crop with jquery</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropper/4.1.0/cropper.min.css">
</head>
<body>

<div class="container">

    <div class="row">

        <div class="col-md-3"></div>
        <div class="col-md-6">

            <br>
            <h1>How to crop with jQuery</h1>
            <hr>
            <h2>1. Select File</h2>

            <div>
                <input type="file" name="img_file" id="img_file">
                <button id="crop" class="btn btn-primary">Crop</button>
            </div>

            <h2>2. Crop</h2>

            <div>
                <canvas id="canvas">
                    Your Browser does not support HTML5 Canvas
                </canvas>
            </div>

            <h2>3. Result</h2>

            <div id="result">

            </div>

            <h2>4. Upload Cropped Image</h2>

            <form action="upload-img.php" method="post">


                <input type="hidden" name="cropped_img" id="cropped_img">
                <input type="hidden" name="file_name" id="file_name">
                <button class="btn btn-success" name="upload_img" id="upload_img" disabled>Upload</button>
            </form>

        </div>
        <div class="col-md-3">


            <?php

            if (isset($_GET['file_upload_sucess'])) {
                echo '    <div class="alert alert-success" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Success!</strong> image Upload successfully!
</div>             ';
            }


            ?>


        </div>


    </div>


</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropper/4.1.0/cropper.min.js"></script>
<script src="js/scripts.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

<script>
    window.setTimeout(function () {
        $(".alert").fadeTo(500, 0).slideUp(500, function () {
            $(this).remove();
        });
    }, 4000);


</script>


</body>

</html>
