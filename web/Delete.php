<?php
require ('connection.php');
$id = $ GET ['id'];
$query = "DELETE FROM login WHERE id = $id";
$result = mysqli_query ($connection, $query) or die (mysqli_error(connection));

header("Location: view.php");
exit();
?>