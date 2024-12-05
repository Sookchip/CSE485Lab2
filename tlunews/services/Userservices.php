<?php
require_once APP_ROOT . '/tlunews/model/User.php';

class UserServices {
    public function getAllUsers() {
        // Kết nối database
        try {
            $conn = new PDO("mysql:host=localhost;dbname=tlunews", "root", "");
            $sql = "SELECT * FROM users";
            $stmt = $conn->query($sql);

            // Xử lý kết quả trả về
            $users = [];
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $user = new User($row['id'], $row['username'], $row['password'],$row['role']);
                $users[] = $user;
            }
            return $users;
        }catch (PDOException $e) {
                return $users = [];
        }
    }
}
