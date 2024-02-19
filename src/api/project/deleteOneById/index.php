<?php

include '../../../config/settings.php';
include '../../../include/database.php';
include '../../../app/include.php';

if ((!isset($_POST) || empty($_POST['id'])) ) {
    $result = new stdclass();
    $result->success = false;
    $result->message = 'Error! Id is undefined...';

    http_response_code(500);
    echo json_encode($result);
    die();
}

$id = $_POST['id'];
Application::getInstance()->getProjectService()->deleteOneById($id);

$result = new stdclass();
$result->success = true;

http_response_code(200);
echo json_encode($result);