<?php
if (isset($_GET['name']) && !empty($_GET['name'])) {
    $name = $_GET['name'];
} else {
    $name = "Sangam";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>

<h2>Hello, <?php echo htmlspecialchars($name); ?>!</h2>

</body>
</html>
