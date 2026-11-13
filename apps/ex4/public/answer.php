<?php 
    $errors = []; // using for validation
    $answer = null; // For default it is null

    // Check if the request made to the page is a POST
    // This just allows the user to go into the page +
    // + if they calculate, they cannot access through the URL

    if($_SERVER["REQUEST_METHOD"] === "POST"){
        //Do my work
        //Accessing post params
        $val1 = $_POST["val1"] ?? "";
        $val2 = $_POST["val2"] ?? "";
        $op = $_POST["operation"] ?? null;

        // Validate the input
        if(!is_numeric($val1)){
            array_push($errors, "Value1 must be numeric");
            //Same as array.push in javascript
        }
        if(!is_numeric($val2)){
            // Also pushes an element into an array
            $errors[] = "Value 2 must be numeric";
            //Focus on using this one
            //Simpler Syntax and easier to be read
        }
        if(!isset($op)){
            $errors[] = "Please select an operation";
        }

        // If there's no errors, do the math
        //Count is the same as errors.length
        if(count($errors) === 0){
            switch($op){
                case "add":
                    $answer = $val1 + $val2;
                    break;
                    case "substract":
                        $answer = $val1 - $val2;
                        break;
                    case "multiply":
                        $answer = $val1 * $val2;
                        break;
                        case "divide":
                            if($val2 == 0){
                                $errors[] = "Cannot divide by zero";
                            } else{
                                $answer = $val1 / $val2;
                            }
                            break;  
            }
        }
        
    } else{
        header("Location: calculator.php");
        exit;
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <?php include_once("../includes/bootstrap.php") ?>
    <style>
        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
    </style>
</head>

<body>
    <?php include_once('../includes/nav.php'); ?>

    <div class="text-center">
        <?php if($answer !== null) : ?>
        <h1 class="display-2 grey text-center mt-10">You answer is <?= $answer ?> </h1>
            <?php endif ?>
            <!-- End if is the same as the for loop -->

        <!-- Show errors here -->
         <?php if(count($errors) > 0) : ?>
        <div id="errors" class="text-danger pt-3">
            <ul class="alert alert-danger">
                <?php foreach($errors as $err) : ?>
                        <li><?= $err ?></li>
                <?php endforeach ?>
            </ul>
        </div>
            <?php endif ?>
        <div><a href="/calculator.php">Back to the calculator page</a></div>
    </div>
</body>

</html>