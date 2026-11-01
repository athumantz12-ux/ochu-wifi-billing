<?php
session_start();

if (!isset($_SESSION["admin"])) {
    header("Location: login.php");
    exit;
}

$vouchers = [];

if (isset($_POST["generate"])) {
    $quantity = (int)$_POST["quantity"];
    $price = (float)$_POST["price"];
    $duration = $_POST["duration"];

    if ($quantity > 0 && $quantity <= 100) {
        for ($i = 0; $i < $quantity; $i++) {
            $code = strtoupper(bin2hex(random_bytes(4)));

            $vouchers[] = [
                "code" => $code,
                "price" => $price,
                "duration" => $duration
            ];
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Ochu WiFi Vouchers</title>
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
    border-radius: 6px;
}
.voucher {
    padding: 12px;
    background: #e1f0ff;
    margin: 10px 0;
    border-radius: 6px;
}
a {
    color: #0755a5;
}
</style>
</head>

<body>
<div class="container">

<h2>Ochu WiFi Voucher Generator</h2>

<form method="POST">

<label>Number of Vouchers</label>
<input type="number" name="quantity" min="1" max="100" required>

<label>Price (TSh)</label>
<input type="number" name="price" min="0" required>

<label>Duration</label>
<select name="duration">
<option value="1 Hour">1 Hour</option>
<option value="6 Hours">6 Hours</option>
<option value="12 Hours">12 Hours</option>
<option value="24 Hours">24 Hours</option>
<option value="7 Days">7 Days</option>
<option value="30 Days">30 Days</option>
</select>

<button type="submit" name="generate">
Generate Vouchers
</button>

</form>

<?php foreach ($vouchers as $voucher): ?>
<div class="voucher">
<strong>Code:</strong>
<?php echo htmlspecialchars($voucher["code"]); ?><br>

<strong>Price:</strong>
TSh <?php echo number_format($voucher["price"]); ?><br>

<strong>Duration:</strong>
<?php echo htmlspecialchars($voucher["duration"]); ?>
</div>
<?php endforeach; ?>

<br>
<a href="dashboard.php">Back to Dashboard</a>

</div>
</body>
</html>
