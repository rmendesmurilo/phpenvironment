<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include_once("../includes/styles.php") ?>
</head>
<body>

<h1>Functions</h1>
<a href="/">Home</a>
<?php 

/**
 * Adds to values
 * @param int|float $x value 1
 * @param int|float $y value 2
 * @return float|int The sum of the values
 */
function add(int|float $x, int|float$y){
    return $x + $y;
}

function subtract(int|float $x, int|float $y){
    return $x - $y;
}

function multiply(int|float $x, int|float $y){
    return $x * $y;
}

function divide(int|float $x, int|float $y){
    return $x / $y;
}

function modulus (int|float $x, int|float $y){
    return $x % $y;
}


?>

    <div>
    Addition<br>
    3 + 4 = <?= add(3,4)?><br>
    
    Subtraction<br>

    10 - 3 = <?= subtract(10, 3)?><br>

    Multiply<br>
    5 x 5 = <?= multiply(5,5)?><br>

    Divide<br>
    10 / 2 = <?= divide(10, 2)?><br>

    <?php // DIVISION BY ZERO THROWS AN ERROR ?>


    Modulus<br>
    10 % 3 = <?= modulus(10, 3)?>
    </div>
</body>
</html>