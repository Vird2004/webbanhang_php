<?php include 'app/views/shares/header.php'; ?>

<style>
body {
    background-image: url('/webbanhang/app/assets/images/a.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.container {
    max-width: 600px;
    margin: 60px auto;
    padding: 20px;
}

.confirmation-box {
    background-color: rgba(255, 255, 255, 0.95);
    border-radius: 15px;
    padding: 40px 30px;
    text-align: center;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

h1 {
    color: #6f4e37;
    margin-bottom: 20px;
}

p {
    font-size: 18px;
    color: #333;
    margin-bottom: 30px;
}

.btn-primary {
    background-color: #8c5a40;
    border: none;
    color: #fff;
    padding: 10px 20px;
    border-radius: 6px;
    text-decoration: none;
    display: inline-block;
    min-width: 180px;
}

.btn-primary:hover {
    background-color: #6f4e37;
}
</style>

<div class="container">
    <div class="confirmation-box">
        <h1>🎉 Xác nhận đơn hàng</h1>
        <p>Cảm ơn bạn đã đặt hàng! Đơn hàng của bạn đã được xử lý thành công.</p>
        <a href="/webbanhang/Product/index" class="btn btn-primary">🛒 Tiếp tục mua sắm</a>
    </div>
</div>

<?php include 'app/views/shares/footer.php'; ?>
