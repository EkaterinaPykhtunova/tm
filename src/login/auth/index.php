<?php 

include '../../config/settings.php';
include '../../include/database.php';
include '../../app/include.php';

$username = $_POST['username'];
$password = $_POST['password'];

$result = Application::getInstance()->getAuthService()->login($username, $password);

if ($result) header('location: /profile');
else header('location: /login');