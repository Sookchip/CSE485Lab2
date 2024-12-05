<?php
require 'controllers/AdminController.php';

// Kết nối cơ sở dữ liệu
try {
    $db = new PDO('mysql:host=localhost;dbname=tlunews', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Database connection failed: ' . $e->getMessage());
}

$controller = new AdminController($db);

// Router đơn giản
$action = $_GET['action'] ?? 'login';
if ($action === 'login') {
    $controller->login();
} elseif ($action === 'logout') {
    $controller->logout();
} else {
    echo "404 Not Found";
}
?>
