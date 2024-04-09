<?php

include '../../../config/settings.php';
include '../../../include/database.php';
include '../../../app/include.php';

$result = new stdclass();
$result->success = false;

try {
    $username = $_POST['username'];
    $password = $_POST['password'];
    Application::getInstance()->getAuthService()->login($username, $password);
    $result->success = true;
} catch (Exception $e) {
    $result->success = false;
    $result->message = $e->getMessage();
}

echo json_encode($result);