<?php
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === "admin" && $password === "1234") {
        $message = "<p style='color: green;'>Login Successful! Welcome, admin.</p>";
    } else {
        $message = "<p style='color: red;'>Invalid username or password.</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple Login</title>
</head>
<body>

<h2>Login Form</h2>

<form action="" method="POST">
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <button type="submit">Login</button>
</form>

<br>
<?php echo $message; ?>

</body>
</html>
