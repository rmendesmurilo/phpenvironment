<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
    <?php include_once("../includes/bootstrap.php") ?>
</head>

<body>
    <?php include_once('../includes/nav.php'); ?>
    <div class="container text-center pt-5">Upload our Application Logo</div>

    <div class="d-flex flex-row justify-content-around">
        <div class="card mt-3">
            <div class="card-header font-weight-bold">
                Calculator
            </div>
            <div class="card-body">
                <form method="POST" >
                    <div>
                        <label for="image">Select an image:</label>
                        <input type="file" name="image" id="image">
                    </div>

                    <button class="btn btn-primary" type="submit">Upload</button>

                </form>
            </div>
        </div>
    </div>    
</body>

</html>