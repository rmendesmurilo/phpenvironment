<?php 
$oppList = ["add", "substract", "multiply", "divide"];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <?php include_once("../includes/bootstrap.php") ?>
</head>

<body>
    <?php include_once('../includes/nav.php'); ?>
    <div class="d-flex flex-row justify-content-around">
        <div class="card mt-3">
            <div class="card-header font-weight-bold">
                Calculator
            </div>
            <div class="card-body">
                <form method="post" action="answer.php">
 <!-- if you dont have a post method, a get method will be set by default from PHP -->

                    <div class="form-group">
                        <label for="val1">Value 1:</label>
                        <input class="form-control" type="text" id="val1" name="val1"/>
                    </div>
                    <div class="form-group">
                        <label for="val1">Value 2:</label>
                        <input class="form-control" type="text" id="val2" name="val2"/>
                    </div>
                    <h3>Operations</h3>
                    <div class="pb-3">
                        <!-- Loop operations here -->
                         <?php foreach($oppList as $op) :  ?>
                        <input type="radio" name="operation" value="<?= $op ?>"> <?= $op ?> 
                       <?php endforeach ?>
                       <!-- SYNTAX To avoid declaring echo -->
                    </div>
                    <button class="btn btn-primary" id="btnCalc">Calculate</button>
                </form>                
            </div>
        </div>
    </div>
</body>

</html>