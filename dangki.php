<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Signup Page</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      background: url("https://images.unsplash.com/photo-1501785888041-af3ef285b470?auto=format&fit=crop&w=1500&q=80") no-repeat center center/cover;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .signup-container {
      display: flex;
      width: 800px;
      height: 500px;
      background: #fff;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 20px rgba(0,0,0,0.3);
    }

    .welcome-section {
      flex: 1;
      background: url("https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=800&q=80") no-repeat center center/cover;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      color: #fff;
      text-align: center;
      padding: 20px;
    }

    .welcome-section h2 {
      font-size: 26px;
      margin-bottom: 10px;
    }

    .welcome-section p {
      font-size: 14px;
      max-width: 250px;
      line-height: 1.4;
    }

    .form-section {
      flex: 1;
      padding: 40px;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .form-section h2 {
      margin-bottom: 20px;
      text-align: center;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group input {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 6px;
      outline: none;
      transition: border-color 0.3s;
    }

    .form-group input:focus {
      border-color: #00bcd4;
    }

    .btn {
      width: 100%;
      padding: 12px;
      border: none;
      border-radius: 6px;
      background: #00bcd4;
      color: #fff;
      font-size: 16px;
      cursor: pointer;
      transition: 0.3s;
    }

    .btn:hover {
      background: #0097a7;
    }

    .login-link {
      text-align: center;
      margin-top: 20px;
      font-size: 14px;
    }

    .login-link a {
      color: #00bcd4;
      text-decoration: none;
    }
  </style>
</head>
<body>
      <?php include 'header.php'; ?>

  <div class="signup-container">
    <!-- Welcome Section -->
    <div class="welcome-section">
      <h2>Welcome!</h2>
      <p>Create your account to get started with us.</p>
    </div>

    <!-- Form Section -->
    <div class="form-section">
      <h2>SIGN UP</h2>
      <form id="signupForm">
        <div class="form-group">
          <input type="text" placeholder="Họ và tên" required>
        </div>
        <div class="form-group">
          <input type="date" required>
        </div>
        <div class="form-group">
          <input type="tel" placeholder="Số điện thoại" required pattern="[0-9]{9,11}">
        </div>
        <div class="form-group">
          <input type="email" placeholder="Email" required>
        </div>
        <div class="form-group">
          <input type="password" placeholder="Password" required>
        </div>
        <button type="submit" class="btn">Sign Up</button>
        <div class="login-link">
          Already have an account? <a href="login.html">Login</a>
        </div>
      </form>
    </div>
  </div>

  <script>
    document.getElementById("signupForm").addEventListener("submit", function(e) {
      e.preventDefault();

      // Demo thông báo
      alert("Đăng ký thành công! Hãy đăng nhập để tiếp tục.");

      // Chuyển sang form login
      window.location.href = "dangnhap.php";
    });
  </script>

</body>
</html>
