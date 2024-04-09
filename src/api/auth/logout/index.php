<?php

include '../../../config/settings.php';
include '../../../include/database.php';
include '../../../app/include.php';

$result = new stdclass();
$result->success = false;

try {
    Application::getInstance()->getAuthService()->logout();
    $result->success = true;
} catch (Exception $e) {
    $result->success = false;
    $result->message = $e->getMessage();
}

echo json_encode($result);