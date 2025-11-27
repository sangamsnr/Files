<?php
$connection = mysqli_connect("local host", "root","","cb1")
 if (!$connection)
 {
    die ("not connected!!".mysqli_connect_error());
}
else{
    echo "connected!!!.";
}
?>