<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Throwing an exception</title>
    <?php include('../includes/styles.php');?>
</head>
<body>
    <h1>Throwing Exceptions</h1>
    <a href="/">Home</a>
    <div>
        <?php 
        try{
            echo "<h2>Hello. Everything is fine. </h2>";
            
            throw new Exception("Something went wrong!");

            echo "<h2>Hello. Everything is not fine.</h2>";

        } catch (Exception $e){

            echo "Error: " . $e->getMessage();

        }
        ?>
    </div>
</body>
</html>