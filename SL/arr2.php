<?php
$stud = array("Abebe", "Almaz", "Kebede");
Echo "CoSc students: " . $stud[0] . "," . $stud[1] . "," . $stud[2] . ".";
?>

<?php
$student = array('Abebe', 'Almaz', 'Kebede');
$arrlength = count($student); 
echo "List of students using for loop is:<br>";
for ($i = 0; $i < $arrlength; $i++) {
    echo $student[$i];
    echo "<br>";
}
?>