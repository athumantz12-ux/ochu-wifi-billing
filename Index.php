<?php
session_start();

$host = "localhost";
$user = "root";
$password = "";
$database = "ochu_wifi";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Database connection failed");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ochu WiFi Billing System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial;
            background: #eef3f8;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 12px;
            text-align: center;
        }
        h1 {
            color: #0755a5;
        }
        .menu {
            display: block;
            background: #0755a5;
            color: white;
            padding: 15px;
            margin: 12px 0;
            text-decoration: none;
            border-radius: 8px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Ochu WiFi</h1>
    <h2>Billing System</h2>

    <p>Welcome to Ochu WiFi Billing System</p>

    <a class="menu" href="#">Dashboard</a>
    <a class="menu" href="#">Manage Customers</a>
    <a class="menu" href="#">Create WiFi Vouchers</a>
    <a class="menu" href="#">Payments</a>
    <a class="menu" href="#">Reports</a>

    <p>System Version 1.0</p>
</div>

</body>
</html>
