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

if ((!isset($_POST) || empty($_POST['name'])) ) {
    $result = new stdclass();
    $result->success = false;
    $result->message = 'Error! Name is undefined...';

    http_response_code(500);
    echo json_encode($result);
    die();
}

if ((!isset($_POST) || empty($_POST['description'])) ) {
    $result = new stdclass();
    $result->success = false;
    $result->message = 'Error! Description is undefined...';

    http_response_code(500);
    echo json_encode($result);
    die();
}

$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];

Application::getInstance()->getprojectService()->updateOneById($id, $name, $description);

$result = new stdclass();
$result->success = true;

http_response_code(200);
echo json_encode($result);

