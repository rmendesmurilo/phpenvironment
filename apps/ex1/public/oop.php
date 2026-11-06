<?php include_once '../includes/student.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
    <?php include_once '../includes/styles.php' ?>
</head>
<body>

    <h1>OOP And Classes</h1>
    <a href="/">Home</a>

    <?php
    $student1 = new Student("Dave", "Burchill");
    
    echo $student1->firstName;

    $student1->firstName = "David";

    echo "<br>";

    echo $student1->getFullName();

    $student2 = new Student("Roman", "Pelhik");
    $student3 = new Student("Gilles", "Roibichaud");
    $student4 = new Student("Linda", "Moore");

    $students = [$student1, $student2, $student3];

    array_push($students, $student4);
    ?>

    <ol>
        <?php 
            for($i = 0; $i < count($students); $i++){
                echo "<li>" . $students[$i]->getFullName() . "</li>";
            }
        ?>
    </ol>
    <ul>
        <?php 
        //for foreach the collction is first then the interative var
        // as == "in" in C#
        foreach($students as $student){
            echo "<li>". $student->getFullName() ."</li> ";
        }

        ?>
    </ul>
</body>
</html>