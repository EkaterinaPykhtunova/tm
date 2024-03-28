<?php 

include '../../config/settings.php';
include '../../include/database.php';
include '../../app/include.php';

$username = $_POST['username'];
$password = $_POST['password'];
$result = false;

try {
    Application::getInstance()->getUserService()->check($username,$password);
    $result = true;
} catch (Exception $e) {
    $result = false;

}


if ($result) header('location: /profile');
else header('location: /login');