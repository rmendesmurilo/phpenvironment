<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Request Handling</title>
    <?php include_once("../includes/bootstrap.php") ?>
</head>
<body>
    <?php include_once('../includes/nav.php'); ?>
    <div class="container text-center pt-5">
        <h1>This is the home page. Handling <strong>Post Requests</strong> in PHP.</h1>
        <?php 
        // Logo dispay logic
        $logo = null;

        // check if we have uploads/logo

        if (file_exists("uploads/logo.png")) {
            $logo = "uploads/logo.png";
        } else if (file_exists("uploads/logo.jpg")){
            $logo = "uploads/logo.jpg";
        } else if (file_exists("uploads/logo.jpeg")){
            $logo = "uploads/logo.jpeg";
        }
        ?>
        <?php if($logo!==null) : ?>

            <div class="text-center">
                <img src="<?= $logo ?>" style="max-width:300px">
            </div>

            <?php endif ?>
    </div>  
</div>
</body>
</html>