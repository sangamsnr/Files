<?php
session_start();
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $email    = $_POST['email']; 

    if ($username === "sangam" && $password === "1234") {

        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;

        header("Location: welcome.php"); 
    } else {
        $message = "<p style='color:red;'>Invalid username or password.</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Login Page</h2>

<form action="" method="POST">
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    <button type="submit">Login</button>
</form>

<?php echo $message; ?>

</body>
</html>
