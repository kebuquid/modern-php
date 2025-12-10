<?php

require __DIR__ . '/vendor/autoload.php';

use App\Controllers\UserController;
use App\Utils\Slugger;

// $userController = new UserController();

// foreach ($userController->listUsers() as $user) {
//     echo "User ID: " . $user['id'] . ", Name: " . $user['name'] . PHP_EOL;
// }

$slugger = new Slugger();
echo $slugger->slug("Hello World from Modern PHP!") . PHP_EOL;

?>