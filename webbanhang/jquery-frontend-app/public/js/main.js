// File: /jquery-frontend-app/jquery-frontend-app/public/js/main.js

$(document).ready(function() {
    $('#add-product-form').on('submit', function(event) {
        event.preventDefault();
        const formData = $(this).serializeArray();
        const jsonData = {};
        $.map(formData, function(n) {
            jsonData[n['name']] = n['value'];
        });

        $.ajax({
            url: '/webbanhang/api/product',
            type: 'POST',
            contentType: 'application/json',
            data: JSON.stringify(jsonData),
            success: function(data) {
                if (data.message === 'Product created successfully') {
                    window.location.href = '/webbanhang/Product';
                } else {
                    alert('Thêm sản phẩm thất bại');
                }
            },
            error: function(xhr, status, error) {
                console.error('Error:', error);
                alert('Lỗi: Không thể gửi dữ liệu tới máy chủ.');
            }
        });
    });
});