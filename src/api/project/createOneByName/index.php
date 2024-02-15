<?php

include '../../../config/settings.php';
include '../../../include/database.php';

if (!isset($_POST) || empty($_POST['name'])) {
    $result = new stdclass();
    $result->success = false;
    $result->message = 'Error! Name is undefined...';

    http_response_code(500);
    echo json_encode($result);
    die();
}
$name = $_POST['name'];

$description = '';

$stmt = mysqli_prepare($connection, "INSERT INTO `tm`.`tm_project` (`name`,`description`) 
    VALUES (?,?); ");

mysqli_stmt_bind_param($stmt, "ss", $name, $description);
mysqli_stmt_execute($stmt);

$result = new stdclass();
$result->success = true;

http_response_code(200);
echo json_encode($result);