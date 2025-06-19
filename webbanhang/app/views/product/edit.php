<?php include 'app/views/shares/header.php'; ?>

<style>
  /* Style cho các khung nhập sử dụng tông màu cafe */
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
  .form-control, 
  select.form-control {
    border-radius: 10px;                /* Bo tròn góc */
    border: 1px solid #d4c0a1;            /* Viền nhạt */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Bóng nhẹ */
    padding: 10px;
    background-color: #f9f5ee !important; /* Màu nền cho ô nhập */
    color: #6f4e37;                     /* Màu chữ */
  }
  .form-control:focus, 
  select.form-control:focus {
    border-color: #6f4e37;              /* Viền đổi màu khi focus */
    box-shadow: 0 0 8px rgba(111, 78, 55, 0.2);
  }
  /* Style cho ô file upload */
  .form-control-file {
    border-radius: 10px;
    border: 1px solid #d4c0a1;
    padding: 5px;
    box-shadow: none;
    background-color: #f9f5ee !important;
    color: #6f4e37;
  }
  
  /* Style cho tiêu đề và label */
  label {
    color: #6f4e37;
    font-weight: 500;
  }
  
  /* Style cho các nút */
  .btn-primary {
    background-color: #6f4e37 !important;
    border-color: #6f4e37 !important;
    color: #fff !important;
    border-radius: 10px;
  }
  .btn-primary:hover {
    background-color: #8c5a40 !important;
    border-color: #8c5a40 !important;
  }
  .btn-secondary {
    background-color: #d4c0a1 !important;
    border-color: #d4c0a1 !important;
    color: #6f4e37 !important;
    border-radius: 10px;
  }
  .btn-secondary:hover {
    background-color: #c5b49e !important;
    border-color: #c5b49e !important;
  }
</style>

<div class="container mt-5">
  <div class="card shadow-sm">
    <div class="card-header" style="background-color: #f7e0c2; color: #6f4e37;">
      <h2 class="mb-0">Sửa sản phẩm</h2>
    </div>
    <div class="card-body">
      <?php if (!empty($errors)): ?>
      <div class="alert alert-danger">
        <ul class="mb-0">
          <?php foreach ($errors as $error): ?>
          <li><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <?php endif; ?>
      <form method="POST" action="/webbanhang/Product/update" enctype="multipart/form-data" onsubmit="return validateForm();">
        <input type="hidden" name="id" value="<?php echo $product->id; ?>">
        <div class="form-group">
          <label for="name">Tên sản phẩm:</label>
          <input type="text" id="name" name="name" class="form-control" placeholder="Nhập tên sản phẩm" value="<?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?>" required>
        </div>
        <div class="form-group">
          <label for="description">Mô tả:</label>
          <textarea id="description" name="description" class="form-control" placeholder="Nhập mô tả sản phẩm" rows="4" required><?php echo htmlspecialchars($product->description, ENT_QUOTES, 'UTF-8'); ?></textarea>
        </div>
        <div class="form-group">
          <label for="price">Giá:</label>
          <input type="number" id="price" name="price" class="form-control" placeholder="Nhập giá sản phẩm" step="0.01" value="<?php echo htmlspecialchars($product->price, ENT_QUOTES, 'UTF-8'); ?>" required>
        </div>
        <div class="form-group">
          <label for="category_id">Danh mục:</label>
          <select id="category_id" name="category_id" class="form-control" required>
            <?php foreach ($categories as $category): ?>
              <option value="<?php echo $category->id; ?>" <?php echo $category->id == $product->category_id ? 'selected' : ''; ?>>
                <?php echo htmlspecialchars($category->name, ENT_QUOTES, 'UTF-8'); ?>
              </option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="form-group">
          <label for="image">Hình ảnh:</label>
          <input type="file" id="image" name="image" class="form-control-file">
          <input type="hidden" name="existing_image" value="<?php echo $product->image; ?>">
          <?php if ($product->image): ?>
            <img src="/<?php echo $product->image; ?>" alt="Product Image" style="max-width: 100px;margin-top:10px;">
          <?php endif; ?>
        </div>
        <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
      </form>
      <a href="/webbanhang/Product/list" class="btn btn-secondary mt-2">Quay lại danh sách sản phẩm</a>
    </div>
  </div>
</div>

<?php include 'app/views/shares/footer.php'; ?>
