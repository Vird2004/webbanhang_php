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
    margin: 50px auto;
    padding: 20px;
}

h1 {
    text-align: center;
    color: #6f4e37;
    margin-bottom: 30px;
}

.checkout-box {
    background-color: rgba(255, 255, 255, 0.95);
    border-radius: 15px;
    padding: 30px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

.form-group {
    margin-bottom: 20px;
}

label {
    font-weight: bold;
    color: #6f4e37;
}

input[type="text"],
textarea {
    width: 100%;
    padding: 10px;
    border-radius: 6px;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

textarea {
    resize: vertical;
    min-height: 100px;
}

.btn {
    padding: 10px 20px;
    border-radius: 5px;
    min-width: 120px;
}

.btn-primary {
    background-color: #8c5a40;
    border: none;
    color: #fff;
}

.btn-primary:hover {
    background-color: #6f4e37;
}

.btn-secondary {
    background-color: #bdc3c7;
    color: #2c3e50;
    border: none;
}

.btn-secondary:hover {
    background-color: #95a5a6;
}
</style>

<div class="container">
    <div class="checkout-box">
        <h1>Thanh toán</h1>
        <form method="POST" action="/webbanhang/Product/processCheckout">
            <div class="form-group">
                <label for="name">Họ tên:</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="phone">Số điện thoại:</label>
                <input type="text" id="phone" name="phone" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="address">Địa chỉ:</label>
                <textarea id="address" name="address" class="form-control" required></textarea>
            </div>
            <div class="text-center mt-4">
                <button type="submit" class="btn btn-primary">💳 Xác nhận thanh toán</button>
                <a href="/webbanhang/Product/cart" class="btn btn-secondary mt-2">🛒 Quay lại giỏ hàng</a>
            </div>
        </form>
    </div>
</div>

<?php include 'app/views/shares/footer.php'; ?>
