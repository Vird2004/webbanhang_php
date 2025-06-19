<?php
class SessionHelper {
    public static function start() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    public static function isLoggedIn() {
        self::start();
        return isset($_SESSION['username']);
    }

    public static function isAdmin() {
        self::start();
        return isset($_SESSION['username']) && isset($_SESSION['role']) &&
               $_SESSION['role'] === 'admin';
    }

    public static function getRole() {
        self::start();
        return $_SESSION['role'] ?? 'guest';
    }

    // Thêm phương thức kiểm tra role cụ thể
    public static function hasRole($role) {
        self::start();
        return isset($_SESSION['role']) && $_SESSION['role'] === $role;
    }

    // ✅ Thêm phương thức flash message (mới)
    public static function setFlash($key, $message) {
        self::start();
        $_SESSION['flash'][$key] = $message;
    }

    public static function getFlash($key) {
        self::start();
        if (isset($_SESSION['flash'][$key])) {
            $message = $_SESSION['flash'][$key];
            unset($_SESSION['flash'][$key]); // xóa sau khi lấy
            return $message;
        }
        return null;
    }
}
?>
