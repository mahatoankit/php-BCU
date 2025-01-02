<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Exercise 2</title>
</head>
<body>
<?php
    $i = 0;
    while ($i <= 9) {
        echo 'abc ';
        $i += 1;
    }
?>
<br>
<?php
    $i = 0;
    do{
        echo 'xyz ';
        $i += 1;
    }
    while ($i <= 9)
    
?>
<br>
<?php
for($i=1;$i<=9;$i++){
    echo $i;
    
}
?>

<hr>
<ol>
<?php
$letter = "A";
for ($i = 1; $i < 7; $i++) {
    echo "<li> item $letter</li>";
    $letter++;
}
?>
</ol>

<hr>
<ol>
<?php
$letter = "A";
$initial = 65;
for ($i = 1; $i < 7; $i++) {
    echo "<li> item $letter is $initial </li>";
    $letter++;
    $initial++;
}
?>
</ol>
</body>
</html>