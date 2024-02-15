<?php

include '../../../config/settings.php';
include '../../../include/database.php';

$name = 'New Task';
$description = '';

$stmt = mysqli_prepare($connection, "INSERT INTO `tm`.`tm_task` (`name`,`description`) 
    VALUES (?,?); ");

mysqli_stmt_bind_param($stmt, "ss", $name, $description);
mysqli_stmt_execute($stmt);

$result = new stdclass();
$result->success = true;

http_response_code(200);
echo json_encode($result);