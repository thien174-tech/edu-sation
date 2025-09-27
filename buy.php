<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Thanh toán</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #0b1220;
      color: #fff;
      margin: 0;
      padding: 40px;
    }
    .pricing {
      display: flex;
      gap: 20px;
      justify-content: center;
      flex-wrap: wrap;
    }
    .card {
      background: linear-gradient(180deg, rgba(15,23,42,.6),rgba(2,6,23,.8));
      border: 1px solid rgba(167,243,208,.25);
      border-radius: 16px;
      padding: 24px;
      width: 300px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.4);
      transition: transform .2s;
    }
    .card:hover { transform: translateY(-5px); }
    .price-tag {
      font-size: 28px;
      font-weight: bold;
      color: #4ade80;
    }
    h2 { margin-top: 0; }
    ul {
      padding: 0;
      list-style: none;
      margin: 16px 0;
    }
    ul li {
      margin: 8px 0;
      color: #cbd5e1;
    }
    .btn {
      display: block;
      text-align: center;
      padding: 12px;
      border-radius: 8px;
      font-weight: bold;
      text-decoration: none;
      margin-top: 16px;
      transition: 0.2s;
    }
    .btn.buy {
      background: linear-gradient(135deg, #2563eb, #10b981);
      color: #fff;
    }
    .btn.buy:hover {
      opacity: 0.9;
    }
  </style>
</head>
<body>
      <?php include 'header.php'; ?>
  <h1 style="text-align:center; margin-bottom:30px;">Chọn gói thanh toán</h1>
  <div class="pricing">

    <!-- Gói tháng -->
    <div class="card">
      <h2>Gói Tháng</h2>
      <div class="price-tag">300.000đ / tháng</div>
      <ul>
        <li>✔ Truy cập toàn bộ nội dung</li>
        <li>✔ Gamification & bảng xếp hạng</li>
        <li>✔ Phân tích cá nhân hóa</li>
        <li>✔ Hỗ trợ 24/7 trong tháng</li>
      </ul>
      <form action="qr.php" method="post">
        <input type="hidden" name="plan" value="month">
        <button type="submit" class="btn buy">Mua ngay</button>
      </form>
    </div>

    <!-- Gói năm -->
    <div class="card">
      <h2>Gói Năm</h2>
      <div class="price-tag">1.500.000đ / năm</div>
      <ul>
        <li>✔ Toàn bộ lợi ích của gói tháng</li>
        <li>✔ Tiết kiệm 50% so với trả tháng</li>
        <li>✔ Ưu tiên hỗ trợ kỹ thuật</li>
        <li>✔ Nhiều tài nguyên bổ sung đặc biệt</li>
      </ul>
      <form action="qr.php" method="post">
        <input type="hidden" name="plan" value="year">
        <button type="submit" class="btn buy">Mua ngay</button>
      </form>
    </div>

  </div>
</body>
</html>
