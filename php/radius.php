<!DOCTYPE html>
<html>
<head>
    <title>Calculate Area of Circle</title>
</head>
<body>

<?php
// Function to calculate the area of a circle
function calculateArea($radius) {
    $area = pi() * pow($radius, 2); // Area = πr²
    return $area;
}

// Example usage
$radius = 5; // You can change the value of radius
$area = calculateArea($radius);

// Display the result
echo "<h2>Area of Circle Calculation</h2>";
echo "Radius: " . $radius . "<br>";
echo "Area: " . number_format($area, 2);
?>

</body>
</html>
