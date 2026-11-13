<?php include_once('../includes/vehicles.php'); ?>
<?php 
    $id = $_GET["id"] ?? null;

    $vehicle = Vehicle::getVehicle($vehicles, $id);

    //Check if the vehicle was found 

    // Uses the vehicle class bringing the getVehicle function

    if(!isset($vehicle)){
        // Vehicle not found, redirect to inventory
        header("Location: inventory.php");
        exit;
    }

?>
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
        <h1> <?php $vehicle->make . " " . $vehicle->model?></h1>
        <img src="<?= $vehicle->image ?>">
        <p><?= $vehicle->image ?></p>
<!--The < ? = is a shortcut for < ? php ? > but just for outputs, its the same
as opening it with the conventional tag and writing echo. -->
        <p>
            <strong>MSRP: <?= "$" . number_format($vehicle->msrp, 2) ?></strong>            
        </p>
        <div>
            <a href="inventory.php">Back to Inventory</a>
        </div>
    </div>
</body>

</html>