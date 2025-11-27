<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $cars = array(1,3,3,4,5,6,7,8,9,0,1,23,45,67,87,12,56,12,12,12);
    for ($i = 0; $i < count($cars); $i++) {
        echo $cars[$i] . "<br>";
    }
    
?>
</body>
</html>