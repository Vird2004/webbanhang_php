<?php include 'app/views/shares/header.php'; ?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

<style>
    body {
        background: linear-gradient(to right, #6f4e37, #a1866f);
        font-family: Arial, sans-serif;
    }

    .register-card {
        max-width: 600px;
        margin: 50px auto;
        background-color: #3e2c23;
        border-radius: 1rem;
        color: #fff;
        padding: 2.5rem;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
    }

    .form-control {
        background-color: #5a3f2c;
        color: #fff;
        border: 1px solid #fff;
    }

    .form-control::placeholder {
        color: #ccc;
    }

    .form-control:focus {
        background-color: #6f4e37;
        color: #fff;
        border-color: #fff;
        box-shadow: 0 0 0 0.2rem rgba(255,255,255,0.25);
    }

    .form-group {
        position: relative;
    }

    .toggle-password {
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
        color: #ccc;
    }

    .btn-register {
        background-color: #6f4e37;
        border: none;
        padding: 0.75rem 2rem;
        font-weight: bold;
        color: white;
        transition: 0.3s ease;
        border-radius: 0.5rem;
    }

    .btn-register:hover {
        background-color: #a1866f;
        color: #fff;
    }

    .text-danger {
        color: #ff9999;
    }
</style>

<div class="register-card">
    <h2 class="text-center mb-4">Đăng ký tài khoản</h2>

    <?php if (isset($errors) && is_array($errors)): ?>
        <ul>
            <?php foreach ($errors as $err): ?>
                <li class='text-danger'><?= $err ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form action="/webbanhang/account/save" method="post">
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="text" class="form-control" name="username" placeholder="Tên đăng nhập" required>
            </div>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="fullname" placeholder="Họ và tên" required>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0 position-relative">
                <input type="password" class="form-control password-input" name="password" placeholder="Mật khẩu" required>
                <span class="fas fa-eye toggle-password"></span>
            </div>
            <div class="col-sm-6 position-relative">
                <input type="password" class="form-control password-input" name="confirmpassword" placeholder="Xác nhận mật khẩu" required>
                <span class="fas fa-eye toggle-password"></span>
            </div>
        </div>

        <div class="text-center mt-4">
            <button type="submit" class="btn btn-register">Đăng ký</button>
        </div>
    </form>
</div>

<script>
    document.querySelectorAll('.toggle-password').forEach(icon => {
        icon.addEventListener('click', () => {
            const input = icon.previousElementSibling;
            const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
            input.setAttribute('type', type);
            icon.classList.toggle('fa-eye');
            icon.classList.toggle('fa-eye-slash');
        });
    });
</script>

<?php include 'app/views/shares/footer.php'; ?>
