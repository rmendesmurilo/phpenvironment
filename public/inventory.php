<?php
    include_once('../includes/vehicles.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory</title>
    <?php include_once("../includes/bootstrap.php") ?>
    <style>
        .card-img-top {
            height: 220px;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <?php include_once('../includes/nav.php'); ?>
    <div class="container p-5">
        <h1>Vehicle Inventory</h1>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

            <!-- Loop Inventory -->
                <div class="col">
                     <div class="card h-100 shadow">
                        <img src="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text">
                            
                            </p>
                            <p><strong>Year:</strong></p>
                            <p><strong>Type:</strong></p>
                            <a href="" class="btn btn-primary">View Details</a>
                        </div>
                     </div>
                </div>
            

        </div>
    </div>
</body>

</html>