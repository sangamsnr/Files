<?php
$result = "";
if (isset($_REQUEST["age"]) && $_REQUEST["age"] !== "") {

    $age = (int) $_REQUEST["age"];

    if ($age >= 18) {
        $result = "<p style='color: green;'>You are an adult.</p>";
    } else {
        $result = "<p style='color: red;'>You are a minor.</p>";
    }

}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Age Check</title>
</head>
<body>

<h2>Check if you are Adult or Minor</h2>

<form action="" method="POST">
    Enter Age: <input type="number" name="age" required>
    <button type="submit">Submit</button>
</form>

<br>

<?php echo $result; ?>

</body>
</html>
