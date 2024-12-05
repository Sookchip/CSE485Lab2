<?php
require_once '../tlunews/config/config.php';
require_once APP_ROOT.'/tlunews/services/Userservices.php';

// Khởi tạo UserService
$userService = new Userservices();

// Lấy danh sách tất cả người dùng
$users = $userService->getAllUsers();

// Hiển thị dữ liệu
echo "<pre>";
print_r($users);
echo "</pre>";

