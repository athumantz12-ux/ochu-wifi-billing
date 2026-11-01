<?php
session_start();

if (!isset($_SESSION["admin"])) {
    header("Location: login.php");
    exit;
}

$customers = [];

if (isset($_POST["add_customer"])) {
    $name = htmlspecialchars($_POST["name"]);
    $phone = htmlspecialchars($_POST["phone"]);

    $customers[] = [
        "name" => $name,
        "phone" => $phone
    ];

    $message = "Customer added successfully!";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Ochu WiFi Customers</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body {
    font-family: Arial;
    background: #eef3f8;
    padding: 15px;
}
.container {
    max-width: 600px;
    margin: auto;
    background: white;
    padding: 20px;
    border-radius: 12px;
}
input, button {
    width: 100%;
    padding: 12px;
    margin: 10px 0;
    box-sizing: border-box;
}
button {
    background: #0755a5;
    color: white;
    border: none;
}
</style>
</head>

<body>
<div class="container">

<h2>Ochu WiFi - Customers</h2>

<?php if (isset($message)) echo "<p>$message</p>"; ?>

<form method="POST">

<label>Customer Name</label>
<input type="text" name="name" required>

<label>Phone Number</label>
<input type="tel" name="phone" required>

<button type="submit" name="add_customer">
Add Customer
</button>

</form>

<a href="dashboard.php">Back to Dashboard</a>

</div>
</body>
</html>
