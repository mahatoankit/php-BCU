<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calculate area of a circle</h1>
    <?php

    define("PI", 3.141592);
    $radius = 20;
    $area = PI * $radius * $radius;
    echo "The area of the circle is $area<br>";

    $a = 9;
    $b = 6; 
    $hypotenuse = sqrt($a * $a + $b * $b);
    echo "The hypotenuse of the right-angled triangle is $hypotenuse";
    ?>
</body>
</html>
