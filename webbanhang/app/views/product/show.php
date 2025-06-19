    <?php include 'app/views/shares/header.php'; ?>
    <!-- CSS cho giao diện chi tiết sản phẩm -->
    <style>
    <style>
    body {
        background-image: url('/webbanhang/app/assets/images/a.jpg'); /* Thay đúng đường dẫn */
        background-size: cover;  /* Hiển thị toàn bộ ảnh */
        background-position: center; /* Căn giữa ảnh */
        background-repeat: no-repeat; /* Không lặp ảnh */
    }
        .container {
            max-width: 960px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            color: #6f4e37; /* Màu nâu đậm cho tiêu đề */
            text-align: center;
            margin-top: 20px;
            margin-bottom: 30px;
        }
        .list-group-item {
            background-color: #faf3e0; /* Màu nền nhẹ */
            border: 1px solid #d4c0a1;
            border-radius: 10px;
            margin-bottom: 15px;
            padding: 20px;
            box-shadow: 2px 2px 5px rgba(0,0,0,0.1);
        }
        .btn-secondary {
            background-color: #8c5a40;
            border-color: #6f4e37;
            color: #fff;
            border-radius: 5px;
            min-width: 150px;
            margin-top: 10px;
        }
        .btn-secondary:hover {
            background-color: #6f4e37;
            border-color: #4e3224;
        }
        img {
            border-radius: 6px;
            max-width: 100px;
        }
    </style>
        .container {
            max-width: 960px;
            margin: 0 auto;
            padding: 20px;
        }
        .card {
            background-color: #faf3e0;
            border: 1px solid #d4c0a1;
            border-radius: 10px;
            box-shadow: 2px 2px 5px rgba(0,0,0,0.1);
        }
        .card-header {
            background-color: #6f4e37 !important; /* Màu cafe đậm */
            color: #fff !important;
            text-align: center;
        }
        .btn-success {
            background-color: #c2a878 !important; /* Màu be nâu nhẹ */
            border-color: #a89066 !important;
            color: #fff !important;
            border-radius: 5px;
        }
        .btn-success:hover {
            background-color: #b29565 !important;
            border-color: #90784a !important;
        }
        .btn-secondary {
            background-color: #d2b48c !important; /* Màu be nhẹ nhàng */
            border-color: #b2976b !important;
            color: #6f4e37 !important;
            border-radius: 5px;
            min-width: 150px;
        }
        .btn-secondary:hover {
            background-color: #c3a377 !important;
            border-color: #a38158 !important;
        }
        img {
            border-radius: 6px;
            max-width: 100%;
        }
    </style>

    <div class="container mt-4">
        <div class="card shadow-lg">
            <div class="card-header">
                <h2 class="mb-0">Chi tiết sản phẩm</h2>
            </div>
            <div class="card-body">
                <?php if ($product): ?>
                    <div class="row">
                        <div class="col-md-6">
                            <?php if ($product->image): ?>
                                <img src="/webbanhang/<?php echo htmlspecialchars($product->image, ENT_QUOTES, 'UTF-8'); ?>" 
                                    class="img-fluid rounded" 
                                    alt="<?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?>">
                            <?php else: ?>
                                <img src="/webbanhang/images/no-image.png" class="img-fluid rounded" alt="Không có ảnh">
                            <?php endif; ?>
                        </div>
                        <div class="col-md-6">
                            <h3 class="card-title text-dark font-weight-bold">
                                <?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?>
                            </h3>
                            <p class="card-text">
                                <?php echo nl2br(htmlspecialchars($product->description, ENT_QUOTES, 'UTF-8')); ?>
                            </p>
                            <p class="text-danger font-weight-bold h4">
                                💰 <?php echo number_format($product->price, 0, ',', '.') . ' đ'; ?>
                            </p>
                            <p><strong>Danh mục:</strong>
                                <span class="badge bg-info text-white">
                                    <?php echo !empty($product->category_name) 
                                        ? htmlspecialchars($product->category_name, ENT_QUOTES, 'UTF-8') 
                                        : 'Chưa có danh mục'; ?>
                                </span>
                            </p>
                            <div class="mt-4">
                                <a href="/webbanhang/Product/addToCart/<?php echo $product->id; ?>" 
                                class="btn btn-success px-4">➕ Thêm vào giỏ hàng</a>
                                <a href="/webbanhang/Product/index" 
                                class="btn btn-secondary px-4 ml-2">Quay lại danh sách</a>
                            </div>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="alert alert-danger text-center">
                        <h4>Không tìm thấy sản phẩm!</h4>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <?php include 'app/views/shares/footer.php'; ?>
