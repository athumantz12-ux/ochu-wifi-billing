<?php
session_start();

if (!isset($_SESSION["admin"])) {
    header("Location: login.php");
    exit;
}

$message = "";

if (isset($_POST["payment"])) {
    $name = htmlspecialchars($_POST["customer"]);
    $amount = (float) $_POST["amount"];
    $method = htmlspecialchars($_POST["method"]);

    if ($amount > 0) {
        $message = "Payment recorded successfully!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Ochu WiFi Payments</title>
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
input, select, button {
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

<h2>Ochu WiFi Payments</h2>

<p><?php echo $message; ?></p>

<form method="POST">

<label>Customer Name</label>
<input type="text" name="customer" required>

<label>Amount (TSh)</label>
<input type="number" name="amount" required min="1">

<label>Payment Method</label>
<select name="method">
<option value="M-Pesa">M-Pesa</option>
<option value="Tigo Pesa">Tigo Pesa</option>
<option value="Airtel Money">Airtel Money</option>
<option value="HaloPesa">HaloPesa</option>
<option value="Cash">Cash</option>
</select>

<button type="submit" name="payment">
Record Payment
</button>

</form>

<a href="dashboard.php">Back to Dashboard</a>

</div>
</body>
</html>
