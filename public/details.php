<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details for <?php echo $vehicle->make." ".$vehicle->model; ?></title>
    <?php include_once("../includes/bootstrap.php") ?>
</head>

<body>
    <?php include_once('../includes/nav.php'); ?>
    <div class="container p-5">
        <h1></h1>
        <img src="">
        <p></p>
        <p>
            <strong>MSRP:</strong>            
        </p>
        <div>
            <a href="inventory.php">Back to Inventory</a>
        </div>
    </div>
</body>

</html>