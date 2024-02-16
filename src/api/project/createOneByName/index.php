<?php

include '../../../config/settings.php';
include '../../../include/database.php';
include '../../../app/include.php';

if (!isset($_POST) || empty($_POST['name'])) {
    $result = new stdclass();
    $result->success = false;
    $result->message = 'Error! Name is undefined...';

    http_response_code(500);
    echo json_encode($result);
    die();
}
$name = $_POST['name'];

Application::getInstance()->getprojectService()->createOneByName($name);

$result = new stdclass();
$result->success = true;

http_response_code(200);
echo json_encode($result);