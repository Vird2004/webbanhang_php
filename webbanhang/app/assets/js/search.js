$(document).ready(function() {
    $("#search-form").submit(function(e) {
        e.preventDefault(); // Ngăn form reload trang

        var query = $("#search-input").val(); // Lấy từ khóa từ input

        $.ajax({
            url: "/webbanhang/Product/searchAjax",
            method: "GET",
            data: { query: query },
            dataType: "json",
            success: function(response) {
                var productList = $("#product-list"); // Chọn danh sách sản phẩm
                productList.empty(); // Xóa danh sách cũ trước khi hiển thị kết quả mới

                if (response.length > 0) {
                    $.each(response, function(index, product) {
                        productList.append(`
                            <div class="col-md-4">
                                <div class="card mb-4">
                                    <img src="/webbanhang/${product.image}" class="card-img-top" alt="${product.name}">
                                    <div class="card-body">
                                        <h5 class="card-title">${product.name}</h5>
                                        <p class="card-text">${product.description}</p>
                                        <p class="card-text">${product.price.toLocaleString()} đ</p>
                                        <a href="/webbanhang/Product/show/${product.id}" class="btn btn-primary">Xem chi tiết</a>
                                    </div>
                                </div>
                            </div>
                        `);
                    });
                } else {
                    productList.html("<p>Không tìm thấy sản phẩm nào.</p>");
                }
            },
            error: function(xhr, status, error) {
                console.error("Lỗi khi tải kết quả tìm kiếm:", error);
            }
        });
    });
});
