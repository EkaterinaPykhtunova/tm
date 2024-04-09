<?php

include '../../../config/settings.php';
include '../../../include/database.php';
include '../../../app/include.php';
include '../../../include/auth-api.php';

if ((!isset($_GET) || empty($_GET['id'])) ) {
    $result = new stdclass();
    $result->success = false;

    http_response_code(500);
    echo json_encode($result);
    die();
}

$id = $_GET['id'];
$task = Application::getInstance()->getTaskService()->findOneById($id);   
if ($task == null) {
    $result = new stdclass();
    $result->success = false;
    $result->message = 'Error! Task not found...';

    http_response_code(404);
    echo json_encode($result);
    die();  
}

http_response_code(200);
echo json_encode($task);