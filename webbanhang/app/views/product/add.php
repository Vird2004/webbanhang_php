<?php include 'app/views/shares/header.php'; ?>

<style>
  /* Style cho các khung nhập sử dụng tông màu cafe */
  body {
    background-image: url('/webbanhang/app/assets/images/a.jpg'); /* Thay đúng đường dẫn */
    background-size: cover;  /* Hiển thị toàn bộ ảnh */
    background-position: center; /* Căn giữa ảnh */
    background-repeat: no-repeat; /* Không lặp ảnh */
}
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
  /* Style cho input file */
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
      <h2 class="mb-0">Thêm sản phẩm mới</h2>
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
      <form method="POST" action="/webbanhang/Product/save" enctype="multipart/form-data" onsubmit="return validateForm();">
        <div class="form-group">
          <label for="name">Tên sản phẩm:</label>
          <input type="text" id="name" name="name" class="form-control" placeholder="Nhập tên sản phẩm" required>
        </div>
        <div class="form-group">
          <label for="description">Mô tả:</label>
          <textarea id="description" name="description" class="form-control" placeholder="Nhập mô tả sản phẩm" rows="4" required></textarea>
        </div>
        <div class="form-group">
          <label for="price">Giá:</label>
          <input type="number" id="price" name="price" class="form-control" placeholder="Nhập giá sản phẩm" step="0.01" required>
        </div>
        <div class="form-group">
          <label for="category_id">Danh mục:</label>
          <select id="category_id" name="category_id" class="form-control" required>
            <?php foreach ($categories as $category): ?>
              <option value="<?php echo $category->id; ?>">
                <?php echo htmlspecialchars($category->name, ENT_QUOTES, 'UTF-8'); ?>
              </option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="form-group">
          <label for="image">Hình ảnh:</label>
          <input type="file" id="image" name="image" class="form-control-file">
        </div>
        <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
        <a href="/webbanhang/Product/index" class="btn btn-secondary ml-2">Quay lại danh sách sản phẩm</a>
      </form>
    </div>
  </div>
</div>

<?php include 'app/views/shares/footer.php'; ?>
