<?php
session_start();

if (!isset($_SESSION["admin"])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Ochu WiFi Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body {
    margin: 0;
    font-family: Arial;
    background: #eef3f8;
}
header {
    background: #0755a5;
    color: white;
    padding: 20px;
    text-align: center;
}
.container {
    padding: 20px;
    max-width: 700px;
    margin: auto;
}
.card {
    background: white;
    padding: 20px;
    margin: 15px 0;
    border-radius: 10px;
    box-shadow: 0 2px 5px #ccc;
}
a {
    display: block;
    padding: 15px;
    background: #0755a5;
    color: white;
    text-decoration: none;
    border-radius: 7px;
    margin-top: 10px;
    text-align: center;
}
.logout {
    background: #d62828;
}
</style>
</head>

<body>

<header>
<h1>Ochu WiFi</h1>
<p>Automatic Billing Management System</p>
</header>

<div class="container">

<div class="card">
<h2>Welcome Admin!</h2>
<p>Karibu kwenye mfumo wa Ochu WiFi.</p>
</div>

<div class="card">
<h3>System Management</h3>

<a href="customers.php">Manage Customers</a>

<a href="vouchers.php">Create WiFi Vouchers</a>

<a href="payments.php">Manage Payments</a>

<a href="reports.php">View Reports</a>

<a href="logout.php" class="logout">Logout</a>

</div>

</div>

</body>
</html>
