<?php
namespace App\Model;

class UserModel {
    private $users = [
        ['id' => 1, 'name' => 'Alice'],
        ['id' => 2, 'name' => 'Bob'],
        ['id' => 3, 'name' => 'Charlie'],
    ];

    public function getAllUsers() {
        return $this->users;
    }

    public function getUserById($id) {
        foreach ($this->users as $user) {
            if ($user['id'] === $id) {
                return $user;
            }
        }
        return null;
    }
}
?>