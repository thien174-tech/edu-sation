<?php
$plan = $_POST['plan'] ?? 'month';

$price = $plan === 'year' ? '1.500.000đ' : '300.000đ';
$label = $plan === 'year' ? 'Gói Năm' : 'Gói Tháng';
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Thanh toán QR</title>
  <style>
    body {
      background: #0b1220;
      color: #fff;
      font-family: Arial, sans-serif;
      text-align: center;
      padding: 0;
      margin: 0;
    }
    .qr-box {
      background: rgba(15,23,42,.7);
      padding: 30px;
      border-radius: 16px;
      display: inline-block;
      box-shadow: 0 8px 25px rgba(0,0,0,0.5);
      margin-top: 60px;
    }
    .qr-box img {
      width: 250px;
      height: 250px;
      margin: 20px 0;
    }
  </style>
</head>
<body>
  <?php include 'header.php'; ?>

  <div class="qr-box">
    <h1>Thanh toán <?= $label ?></h1>
    <p>Số tiền: <b><?= $price ?></b></p>
    <img src="qr-demo.png" alt="QR Code thanh toán">
    <p>Vui lòng quét QR để thanh toán</p>
  </div>
  
</body>
</html>
