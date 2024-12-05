<?php
class User {
    // Thuộc tính
    private $id;
    private $name;

    private $password;
    private $role;

    // Phương thức khởi tạo
    public function __construct($id, $name, $password, $role) {
        $this->id = $id;
        $this->name = $name;

        $this->password = $password;
        $this->role = $role;
    }

    // Getter
    public function getId() {
        return $this->id;
    }
    public function getName() {
        return $this->name;
    }

    public function getPassword() {
        return $this->password;
    }
    public function getRole() {
        return $this->role;
    }

    // Setter
    public function setId($id) {
        $this->id = $id;
    }
    public function setName($name) {
        $this->name = $name;
    }

    public function setPassword($password) {
        $this->password = $password;
    }
    public function setRole($role) {
        $this->role = $role;
    }
}
?>
