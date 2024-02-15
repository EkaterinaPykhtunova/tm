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

$id = $_POST['id'];

$stmt = mysqli_prepare($connection, "DELETE FROM `tm`.`tm_project` WHERE id = ? ");
mysqli_stmt_bind_param($stmt, "s", $id);
mysqli_stmt_execute($stmt);

$result = new stdclass();
$result->success = true;

http_response_code(200);
echo json_encode($result);