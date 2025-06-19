<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

<style>
  footer {
    background-color: #f7e0c2;
    width: 100%;
    font-family: Arial, sans-serif;
  }

  .footer-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 1.5rem 2rem;
    max-width: 1200px;
    margin: 0 auto;
  }

  .footer-section {
    flex: 1 1 200px;
    margin-bottom: 1rem;
    padding: 0 1rem;
  }

  .footer-section h5 {
    color: #6f4e37;
    margin-bottom: 0.75rem;
    font-size: 1.05rem;
  }

  .footer-text,
  .footer-link {
    color: #6f4e37;
    font-size: 0.9rem;
    line-height: 1.5;
  }

  .footer-link {
    text-decoration: none;
    display: inline-block;
    margin-bottom: 0.3rem;
  }

  .footer-link:hover {
    text-decoration: underline;
  }

  .social-icons a {
    margin-right: 0.5rem;
    font-size: 1.1rem;
    color: #6f4e37;
  }

  .social-icons a:hover {
    color: #3b2c22;
  }

  iframe {
    width: 100%;
    height: 150px;
    border-radius: 8px;
    border: 0;
  }

  .copyright {
    background-color: #6f4e37;
    color: #fff;
    text-align: center;
    padding: 0.75rem;
    font-size: 0.85rem;
  }

  @media (max-width: 768px) {
    .footer-container {
      flex-direction: column;
      padding: 1.5rem;
    }

    .footer-section {
      padding: 0;
      margin-bottom: 1.5rem;
    }
  }
</style>

<footer>
  <div class="footer-container">
    <div class="footer-section">
      <h5>Giới thiệu</h5>
      <p class="footer-text">
        Quản lý sản phẩm nhanh chóng, tiện lợi và hiệu quả. Dễ dàng thêm, sửa và theo dõi sản phẩm của bạn.
      </p>
    </div>

    <div class="footer-section">
      <h5>Liên kết nhanh</h5>
      <a href="/webbanhang/product/" class="footer-link">Danh sách sản phẩm</a><br />
      <a href="/webbanhang/product/add" class="footer-link">Thêm sản phẩm</a>
    </div>

    <div class="footer-section">
      <h5>Kết nối</h5>
      <div class="social-icons">
        <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://www.youtube.com" target="_blank"><i class="fab fa-youtube"></i></a>
      </div>
    </div>

    <div class="footer-section">
      <h5>Liên hệ</h5>
      <p class="footer-text">Địa chỉ: 123 Đường ABC, Quận XYZ, Tp. HCM</p>
      <p class="footer-text">
        Email: <a href="mailto:contact@quansanpham.com" class="footer-link">contact@quansanpham.com</a>
      </p>
      <p class="footer-text">Điện thoại: 0123-456-789</p>
    </div>

    <div class="footer-section">
      <h5>Bản đồ</h5>
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.4897371835434!2d106.70042311480062!3d10.773374192322386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f196377471f%3A0x6e3f5bc9e16b7f3d!2zMTIzIMSQxrDhu51uZyBBQkMsIFF14bqtbiBYWlksIFRow6BuaCBwaOG7kSBI4buNYyBN4bu5!5e0!3m2!1sen!2s!4v1717684087585!5m2!1sen!2s"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
      ></iframe>
    </div>
  </div>

  <div class="copyright">
    © 2025 Quản lý sản phẩm. All rights reserved.
  </div>
</footer>
