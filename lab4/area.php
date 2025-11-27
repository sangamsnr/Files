<?php
function calculateArea($radius) {
    return pi() * $radius * $radius; 
}

$radius = 5; 
$area = calculateArea($radius);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Circle Area</title>
</head>
<body>

<h2>Area of a Circle</h2>

<?php
echo "Radius: " . $radius . "<br>";
echo "Area: " . $area;
?>

</body>
</html>
