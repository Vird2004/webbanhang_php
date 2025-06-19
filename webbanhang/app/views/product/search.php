<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Kết quả tìm kiếm</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>Kết quả tìm kiếm cho: "<?php echo htmlspecialchars($_GET['query'] ?? ''); ?>"</h1>
        <?php if (empty($products)): ?>
            <p>Không tìm thấy sản phẩm nào.</p>
        <?php else: ?>
            <div class="row">
                <?php foreach ($products as $product): ?>
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <?php if ($product->image): ?>
                                <img src="/webbanhang/<?php echo $product->image; ?>" class="card-img-top" alt="<?php echo htmlspecialchars($product->name); ?>">
                            <?php endif; ?>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo htmlspecialchars($product->name); ?></h5>
                                <p class="card-text"><?php echo htmlspecialchars($product->description); ?></p>
                                <p class="card-text"><?php echo number_format($product->price, 0, '', '.'); ?> đ</p>
                                <a href="/webbanhang/Product/show/<?php echo $product->id; ?>" class="btn btn-primary">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
