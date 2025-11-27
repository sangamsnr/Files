<?php

$marks = array( "Ram"=>90,
    "Sita"=> 85,
    "Gita"=> 95
);

$keys = array_keys($marks);
$length = count($keys);
for ($i = 0; $i < $length; $i++) {
    $name = $keys[$i];
    echo $name."scored".$marks[$name]."<br>";
}

?>