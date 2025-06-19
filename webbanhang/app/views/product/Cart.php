<?php include 'app/views/shares/header.php'; ?>

<style>
body {
    background-image: url('/webbanhang/app/assets/images/a.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}
.container {
    max-width: 960px;
    margin: 0 auto;
    padding: 20px;
}
h1 {
    color: #6f4e37;
    text-align: center;
    margin-top: 20px;
    margin-bottom: 30px;
}
.cart-box {
    background-color: rgba(255, 255, 255, 0.95);
    border-radius: 15px;
    padding: 25px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
}
.list-group-item {
    background-color: #faf3e0;
    border: 1px solid #d4c0a1;
    border-radius: 10px;
    margin-bottom: 15px;
    padding: 20px;
    box-shadow: 2px 2px 5px rgba(0,0,0,0.1);
}
.btn {
    border-radius: 5px;
    min-width: 100px;
    padding: 6px 12px;
}
.btn-secondary {
    background-color: #8c5a40;
    border: none;
    color: #fff;
}
.btn-secondary:hover {
    background-color: #6f4e37;
}
.btn-danger {
    background-color: #c0392b;
    border: none;
    color: #fff;
}
.btn-danger:hover {
    background-color: #a93226;
}
img {
    border-radius: 6px;
    max-width: 100px;
}
.quantity-form {
    display: flex;
    align-items: center;
    gap: 10px;
    flex-wrap: wrap;
    margin-top: 10px;
    margin-bottom: 10px;
}
input[type="number"] {
    width: 80px;
    padding: 5px;
    border-radius: 5px;
    border: 1px solid #ccc;
}
.alert {
    padding: 15px;
    margin-bottom: 20px;
    border-radius: 5px;
    font-weight: bold;
}
.alert-success {
    background-color: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
}
.action-buttons {
    display: flex;
    justify-content: center;
    gap: 15px;
    flex-wrap: wrap;
    margin-top: 30px;
}
</style>

<div class="container">
    <h1>Giỏ hàng</h1>

    <!-- Flash Message -->
    <?php if ($message = SessionHelper::getFlash('success')): ?>
        <div class="alert alert-success text-center">
            <?php echo htmlspecialchars($message); ?>
        </div>
    <?php endif; ?>

    <?php if (!empty($cart)): ?>
        <?php
            $total = 0;
            foreach ($cart as $item) {
                $total += $item['price'] * $item['quantity'];
            }
        ?>

        <div class="cart-box">
            <ul class="list-group">
                <?php foreach ($cart as $id => $item): ?>
                    <li class="list-group-item">
                        <h2><?php echo htmlspecialchars($item['name'], ENT_QUOTES, 'UTF-8'); ?></h2>

                        <?php if ($item['image']): ?>
                            <img src="/webbanhang/<?php echo $item['image']; ?>" alt="Product Image">
                        <?php endif; ?>

                        <p>Giá: <?php echo number_format($item['price'], 0, '', '.') . ' đ'; ?></p>

                        <!-- Form cập nhật số lượng và xóa sản phẩm -->
                        <div class="quantity-form">
                            <form action="/webbanhang/Product/updateQuantity" method="post" style="display: flex; gap: 10px;">
                                <label for="quantity_<?php echo $id; ?>">Số lượng:</label>
                                <input type="number" name="quantity" id="quantity_<?php echo $id; ?>" value="<?php echo $item['quantity']; ?>" min="1" required>
                                <input type="hidden" name="product_id" value="<?php echo $id; ?>">
                                <button type="submit" class="btn btn-secondary">Cập nhật</button>
                            </form>

                            <form action="/webbanhang/Product/removeItem" method="post" onsubmit="return confirm('Bạn có chắc muốn xóa sản phẩm này?');">
                                <input type="hidden" name="product_id" value="<?php echo $id; ?>">
                                <button type="submit" class="btn btn-danger">Xóa</button>
                            </form>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>

            <!-- Tổng tiền -->
            <div class="text-end mt-3" style="text-align: right; font-size: 18px; font-weight: bold; color: #6f4e37;">
                Tổng tiền: <?php echo number_format($total, 0, '', '.') . ' đ'; ?>
            </div>
        </div>

        <!-- Nút hành động -->
        <div class="action-buttons">
            <a href="/webbanhang/Product" class="btn btn-secondary">🛒 Tiếp tục mua</a>
            <a href="/webbanhang/Product/checkout" class="btn btn-secondary">💳 Thanh toán</a>

            <form action="/webbanhang/Product/clearCart" method="post" onsubmit="return confirm('Bạn có chắc muốn xóa toàn bộ giỏ hàng?');">
                <button type="submit" class="btn btn-danger">🗑️ Xóa tất cả</button>
            </form>
        </div>
    <?php else: ?>
        <p>Giỏ hàng của bạn đang trống.</p>
        <div class="text-center mt-3">
            <a href="/webbanhang/Product" class="btn btn-secondary">🛒 Tiếp tục mua sắm</a>
        </div>
    <?php endif; ?>
</div>

<?php include 'app/views/shares/footer.php'; ?>
