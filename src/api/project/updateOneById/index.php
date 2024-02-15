<?php

include '../../../config/settings.php';
include '../../../include/database.php';

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

$stmt = mysqli_prepare(
    $connection, 
    "UPDATE `tm`.`tm_project` SET `name` = ?, `description` = ? WHERE `id` = ? "
);

mysqli_stmt_bind_param($stmt, "sss", $name, $description, $id);
mysqli_stmt_execute($stmt);

$result = new stdclass();
$result->success = true;

http_response_code(200);
echo json_encode($result);

