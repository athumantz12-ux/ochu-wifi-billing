<?php
session_start();

$username = "admin";
$password = "12345";

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["username"];
    $pass = $_POST["password"];

    if ($user == $username && $pass == $password) {
        $_SESSION["admin"] = $username;
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Username au Password si sahihi!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Ochu WiFi Admin Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body {
    font-family: Arial;
    background: #0755a5;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}
.login {
    background: white;
    padding: 30px;
    border-radius: 12px;
    width: 300px;
}
input, button {
    width: 100%;
    padding: 12px;
    margin-top: 12px;
    box-sizing: border-box;
}
button {
    background: #0755a5;
    color: white;
    border: none;
}
.error {
    color: red;
}
</style>
</head>

<body>
<div class="login">
<h2>Ochu WiFi</h2>
<h3>Admin Login</h3>

<p class="error"><?php echo $error; ?></p>

<form method="POST">
<input type="text" name="username"
placeholder="Username" required>

<input type="password" name="password"
placeholder="Password" required>

<button type="submit">LOGIN</button>
</form>
</div>
</body>
</html>
