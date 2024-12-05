<?php
session_start();
require_once 'models/User.php';

class AdminController {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    // Xử lý đăng nhập
    public function login() {
        $error = ''; // Biến lưu lỗi nếu có
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $userModel = new User($this->db);
            $user = $userModel->login($username, $password);

            if ($user && $user['role'] == 1) {
                // Lưu thông tin vào session
                $_SESSION['admin'] = $user;
                header('Location: /admin/dashboard');
                exit;
            } else {
                $error = 'Invalid username or password.';
            }
        }

        // Hiển thị giao diện đăng nhập
        require 'views/admin/login.php';
    }

    // Xử lý đăng xuất
    public function logout() {
        session_destroy();
        header('Location: /admin/login');
        exit;
    }
}
?>
