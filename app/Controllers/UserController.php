<?php
namespace App\Controllers;
use App\Model\UserModel;

class UserController {
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    public function listUsers() {
        return $this->userModel->getAllUsers();
    }

    public function getUser($id) {
        return $this->userModel->getUserById($id);
    }
}
?>