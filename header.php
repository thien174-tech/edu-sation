<!-- header.php -->
<div style="
    background-color:#0a1128;
    padding:10px;
    display:flex;
    align-items:center;
    justify-content:space-between;
    color:white;
    position:fixed;    /* Giữ cố định khi cuộn */
    top:0;             /* Dính ở phía trên */
    left:0;
    width:100%;        /* Trải full chiều ngang */
    z-index:1000;      /* Đè lên các phần khác */
">
    <div style="display:flex; align-items:center; gap:10px; margin-left:2cm;">
        <div style="background:linear-gradient(135deg, #2196F3, #4CAF50); color:white; font-weight:bold; border-radius:8px; width:40px; height:40px; display:flex; align-items:center; justify-content:center;">
            EL
        </div>
        <div>
            <div style="font-weight:bold;">EduStation</div>
            <div style="font-size:13px; color:#aaa;">Học tương tác, hiểu bản chất</div>
        </div>
    </div>
    <div style="display:flex; gap:20px; align-items:center; margin-right:30px;">
        <a href="station.php" style="color:#00C48C; text-decoration:none;">Tính năng</a>
        <a href="buy.php" style="color:#00C48C; text-decoration:none;">Gói phí</a>
        <a href="contact.php" style="color:#00C48C; text-decoration:none;">Liên hệ</a>
        <a href="dangnhap.php" style="color:#d6f5e3; text-decoration:none; font-weight:bold; background:rgba(255,255,255,0.1); padding:5px 12px; border-radius:8px;">Đăng nhập</a>
        <a href="dowload.php" style="background:#2d5eff; color:white; font-weight:bold; padding:6px 14px; border-radius:12px; text-decoration:none;">Dùng thử miễn phí</a>
    </div>
</div>

<!-- Thêm 1 div rỗng để tránh header che mất nội dung -->
<div style="height:65px;"></div>
