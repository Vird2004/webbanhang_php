<?php
session_start();
header('Content-Type: application/json');

// Kiểm tra giỏ hàng có tồn tại không
$cartCount = isset($_SESSION['cart']) ? array_sum(array_column($_SESSION['cart'], 'quantity')) : 0;

// Trả về dữ liệu JSON cho AJAX
echo json_encode(['count' => $cartCount]);
?>
