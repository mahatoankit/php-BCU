<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable Type Test</title>
</head>
<body>
    <?php
    $whatsit = 42;
    echo "Value is " . gettype($whatsit) . "<br/>";

    $whatsit = "Hello World";
    echo "Value is " . gettype($whatsit) . "<br/>";

    $whatsit = 3.14;
    echo "Value is " . gettype($whatsit) . "<br/>";

    $whatsit = true;
    echo "Value is " . gettype($whatsit) . "<br/>";

    $whatsit = null;
    echo "Value is " . gettype($whatsit) . "<br/>";
    ?>
</body>
</html>
