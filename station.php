<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>EduStation — Học tương tác, hiểu bản chất</title>
  <meta name="description" content="EduStation - Ứng dụng học tập tương tác với gamification và mô phỏng 3D/AR." />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <style>
    :root{
      --blue: #2563eb;           /* xanh dương chủ đạo */
      --blue-700:#1d4ed8;
      --green: #a7f3d0;          /* xanh lá nhạt (mint) */
      --green-deep:#10b981;      /* xanh lá đậm cho hover */
      --bg:   #0b1220;           /* nền đen xanh */
      --text: #e5ecff;           /* chữ sáng */
      --muted:#94a3b8;           /* chữ phụ */
      --card:#0f172a80;          /* nền thẻ trong suốt */
      --stroke: rgba(167,243,208,.18);
      --radius-xl: 1.25rem;
      --radius-lg: .9rem;
      --shadow-lg: 0 10px 25px rgba(2,6,23,.45);
      --shadow-sm: 0 6px 16px rgba(2,6,23,.35);
      --maxw: 1160px;
    }
    *{box-sizing:border-box}
    html,body{margin:0;padding:0;background:var(--bg);color:var(--text);font-family:Inter,system-ui,-apple-system,Segoe UI,Roboto,Arial,sans-serif}
    a{color:var(--green-deep);text-decoration:none}
    .container{max-width:var(--maxw);margin:0 auto;padding:0 20px}

    /* Header */
    header{position:sticky;top:0;backdrop-filter:saturate(180%) blur(10px);background:rgba(11,18,32,.65);border-bottom:1px solid rgba(167,243,208,.15);z-index:20}
    .nav{display:flex;align-items:center;justify-content:space-between;padding:14px 0}
    .brand{display:flex;gap:10px;align-items:center;font-weight:800;letter-spacing:.3px}
    .logo{width:38px;height:38px;border-radius:12px;background:linear-gradient(135deg,var(--blue),var(--green-deep));display:grid;place-items:center;box-shadow:var(--shadow-sm)}
    .logo span{font-size:18px;font-weight:900;color:white}
    .menu{display:flex;gap:18px}
    .menu a{opacity:.92; padding:10px 0;}
    .cta{background:var(--blue);color:#fff;padding:10px 16px;border-radius:14px;font-weight:600;box-shadow:var(--shadow-sm);border:1px solid rgba(255,255,255,.08)}
    .cta:hover{transform:translateY(-1px);background:linear-gradient(135deg,var(--blue),var(--green-deep))}

    /* Hero */
    .hero{position:relative;padding:72px 0 36px;overflow:hidden}
    .bg-grad{position:absolute;inset:-40%;background:radial-gradient(800px 400px at 20% 20%, rgba(37,99,235,.25), transparent 60%),radial-gradient(900px 420px at 80% 0%, rgba(16,185,129,.22), transparent 60%)}
    .hero-grid{position:relative;display:grid;grid-template-columns:1.15fr .85fr;gap:28px;align-items:center}
    .headline{font-size:46px;line-height:1.05;margin:0 0 14px;font-weight:800}
    .sub{font-size:18px;color:var(--muted);margin-bottom:22px}
    .pill{display:inline-flex;gap:8px;align-items:center;background:rgba(167,243,208,.14);color:#d1fae5;border:1px solid rgba(167,243,208,.25);padding:8px 12px;border-radius:999px;font-weight:600;margin-bottom:12px}
    .hero-card{background:linear-gradient(180deg, rgba(15,23,42,.6),rgba(2,6,23,.6));border:1px solid var(--stroke);border-radius:var(--radius-xl);padding:24px;box-shadow:var(--shadow-lg)}
    .hero-cta{display:flex;gap:12px;margin-top:8px;flex-wrap:wrap}
    .btn{padding:8px 12px;border-radius:14px;border:1px solid rgba(255,255,255,.1);font-weight:700}
    .btn.primary{background:linear-gradient(135deg,var(--blue),var(--green-deep));color:#fff}
    .btn.ghost{background:rgba(167,243,208,.08);color:#d1fae5}

    /* Feature cards */
    .features{padding:26px 0 10px}
    .grid3{display:grid;grid-template-columns:repeat(3,1fr);gap:18px}
    .card{background:linear-gradient(180deg, rgba(13,19,33,.65),rgba(13,19,33,.42));border:1px solid var(--stroke);border-radius:20px;padding:18px;box-shadow:var(--shadow-sm)}
    .card h3{margin:6px 0 8px}
    .badge{display:inline-block;font-size:12px;background:rgba(167,243,208,.12);border:1px solid rgba(167,243,208,.25);padding:6px 10px;border-radius:999px;color:#ccfbf1}

    /* Pricing */
    .pricing{padding:26px 0}
    .pricing-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:18px}
    .price{background:linear-gradient(180deg, rgba(15,23,42,.6),rgba(2,6,23,.55));border:1px solid var(--stroke);border-radius:24px;padding:22px;box-shadow:var(--shadow-lg)}
    .price .tag{font-size:32px;font-weight:800}
    .price ul{list-style:none;padding:0;margin:10px 0}
    .price a{display:block;margin-top:0.5cm;width:2cm;text-align:center;}
    .price li{margin:8px 0;color:var(--muted)}

    /* Contact */
    .contact{padding:26px 0 60px}
    form{display:grid;grid-template-columns:1fr 1fr;gap:12px}
    form .full{grid-column:1/-1}
    input,textarea{width:100%;padding:12px 14px;border-radius:14px;border:1px solid rgba(255,255,255,.08);background:rgba(167,243,208,.06);color:var(--text)}
    textarea{min-height:120px;resize:vertical}
    .submit{background:var(--blue);color:#fff;font-weight:700;border:none;cursor:pointer}
    .submit:hover{background:linear-gradient(135deg,var(--blue),var(--green-deep))}

    /* Footer */
    footer{border-top:1px solid rgba(167,243,208,.12);padding:20px 0 40px;color:var(--muted)}

    /* Responsive */
    @media (max-width: 960px){
      .hero-grid{grid-template-columns:1fr}
      .grid3,.pricing-grid{grid-template-columns:1fr}
      .headline{font-size:36px}
    }
  </style>
</head>
<body>
  <header>
    <div class="container nav">
      <div class="brand">
        <div class="logo" aria-hidden="true"><span>ES</span></div>
        <div>
          <div style="font-weight:800">EduStation</div>
          <div style="font-size:12px;color:var(--muted)">Học tương tác, hiểu bản chất</div>
        </div>
      </div>
      <nav class="menu" aria-label="Main">
        <a href="#tinh-nang">Tính năng</a>
        <a href="#goi-phi">Gói phí</a>
        <a href="#lien-he">Liên hệ</a>
        <a class="cta" href="#dang-ky">Dùng thử miễn phí</a>
      </nav>
    </div>
  </header>

  <section class="hero">
    <div class="bg-grad" aria-hidden="true"></div>
    <div class="container hero-grid">
      <div>
        <div class="pill">Xanh dương + Xanh lá nhạt • Gamification • 3D/AR</div>
        <h1 class="headline">Biến mỗi bài học thành hành trình nhập vai tương tác</h1>
        <p class="sub">EduStation kết hợp mô phỏng 3D/AR, gamification và phân tích cá nhân hóa để giúp học sinh hiểu bản chất kiến thức — không còn học vẹt.</p>
        <div class="hero-cta">
          <a class="btn primary" href="#dang-ky">Bắt đầu miễn phí</a>
          <a class="btn ghost" href="#tinh-nang">Xem tính năng</a>
        </div>
      </div>
      <aside class="hero-card" role="img" aria-label="Minh họa mô phỏng học tập">
        <h3 style="margin-top:0">Mô phỏng nhanh</h3>
        <p class="sub">Điều chỉnh thông số &rarr; quan sát kết quả tức thì</p>
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:10px">
          <div class="card">
            <div class="badge">Vật lý</div>
            <h4>Gia tốc rơi tự do</h4>
            <p class="sub">Thay đổi khối lượng &amp; độ cao để xem thời gian rơi.</p>
          </div>
          <div class="card">
            <div class="badge">Hóa học</div>
            <h4>Phản ứng trung hòa</h4>
            <p class="sub">Chọn tỉ lệ axit/bazơ đúng để “gỡ bom”.</p>
          </div>
        </div>
      </aside>
    </div>
  </section>

  <section id="tinh-nang" class="features">
    <div class="container">
      <h2 style="margin:0 0 14px">Tính năng nổi bật</h2>
      <div class="grid3">
        <div class="card">
          <div class="badge">Lịch sử</div>
          <h3>Nhập vai nhân vật</h3>
          <p class="sub">Ra quyết định chiến lược và so sánh với lịch sử thực.</p>
        </div>
        <div class="card">
          <div class="badge">Vật lý</div>
          <h3>Mô phỏng thí nghiệm</h3>
          <p class="sub">Tùy chỉnh thông số, quan sát hệ quả ngay lập tức.</p>
        </div>
        <div class="card">
          <div class="badge">Hóa học</div>
          <h3>Thí nghiệm an toàn</h3>
          <p class="sub">Mini game phương trình phản ứng, học mà chơi.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="goi-phi" class="pricing">
    <div class="container">
      <h2 style="margin:0 0 14px">Gói phí</h2>
      <div class="pricing-grid">
        <div class="price">
          <div class="tag">Free</div>
          <ul>
            <li>Truy cập nội dung cơ bản</li>
            <li>Bài học demo</li>
            <li>Không giới hạn thời gian</li>
          </ul>
          <a class="btn ghost" href="#dang-ky">Dùng thử</a>
        </div>
        <div class="price" style="border-color:rgba(37,99,235,.45)">
          <div class="tag">Pro</div>
          <ul>
            <li>Mở khóa toàn bộ môn học</li>
            <li>Gamification &amp; bảng xếp hạng</li>
            <li>Phân tích cá nhân hóa</li>
          </ul>
          <a class="btn primary" href="#dang-ky">Mua ngay</a>
        </div>
        <div class="price">
          <div class="tag">Trường học</div>
          <ul>
            <li>Triển khai theo lớp/khối</li>
            <li>Quản trị giáo viên</li>
            <li>Hỗ trợ tích hợp LMS</li>
          </ul>
          <a class="btn ghost" href="#dang-ky">Liên hệ</a>
        </div>
      </div>
    </div>
  </section>

  <section id="lien-he" class="contact">
    <div class="container">
      <h2 style="margin:0 0 14px">Liên hệ</h2>
      <p class="sub">Điền thông tin để nhận demo và tài liệu chi tiết.</p>
      <form id="contact-form" novalidate>
        <div>
          <label for="name" class="sub">Họ tên</label>
          <input id="name" name="name" placeholder="Nguyễn Văn A" required />
        </div>
        <div>
          <label for="email" class="sub">Email</label>
          <input id="email" name="email" type="email" placeholder="ban@congty.com" required />
        </div>
        <div class="full">
          <label for="message" class="sub">Nội dung</label>
          <textarea id="message" name="message" placeholder="Mình muốn trải nghiệm bản demo…" required></textarea>
        </div>
        <input type="text" id="website" name="website" style="display:none" tabindex="-1" autocomplete="off" />
        <div class="full">
          <button class="btn submit" type="submit">Gửi yêu cầu</button>
        </div>
        <p id="notice" class="sub" role="status"></p>
      </form>
    </div>
  </section>

  <footer>
    <div class="container" style="display:flex;align-items:center;justify-content:space-between;gap:16px;flex-wrap:wrap">
      <small>© <span id="y"></span> EduStation. All rights reserved.</small>
      <small>Theme: Xanh dương + Xanh lá nhạt.</small>
    </div>
  </footer>

  <script>
    // Năm hiện tại
    document.getElementById('y').textContent = new Date().getFullYear();

    // Xử lý form (demo, không gửi thật)
    const form = document.getElementById('contact-form');
    const notice = document.getElementById('notice');
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      const data = new FormData(form);
      if (data.get('website')) { // honeypot
        notice.textContent = 'Có lỗi xảy ra. Vui lòng thử lại.';
        return;
      }
      const name = (data.get('name')||'').trim();
      const email = (data.get('email')||'').trim();
      const msg = (data.get('message')||'').trim();
      if (!name || !email || !msg) {
        notice.textContent = 'Vui lòng điền đầy đủ thông tin.';
        return;
      }
      notice.textContent = '✅ Cảm ơn bạn! Thông tin đã được gửi (demo).';
      form.reset();
    });
  </script>
</body>
</html>
