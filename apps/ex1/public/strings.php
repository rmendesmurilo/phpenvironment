<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
    <?php include_once("../includes/styles.php"); ?>
</head>

<body>
    <h1 class="blue">Strings</h1>
    <a href="index.php">Home</a>
    <?php
    $name = "Murilo Mendes";
    $campus = "Moncton";
    $course = "Software Development";
    $message = "My name is " . $name . " and I am a " . $course . " student at NBCC " . $campus . " and I am studying PHP.";
    $messageStringInterpolation = "My name is $name and I am a $course student at NBCC $campus and I am studying PHP";
    ?>
    <h1>Using String Concatenation with the dot operator</h1>
    <h2 class="green"><?php echo $message ?></h2>
    <h1>Using String Interpolation</h1>
    <h2 class="blue"> <?= $messageStringInterpolation ?></h2>
</body>

</html>