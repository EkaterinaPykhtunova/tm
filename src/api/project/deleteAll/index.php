<?php

include '../../../config/settings.php';
include '../../../include/database.php';

$stmt = mysqli_prepare($connection, "DELETE FROM `tm`.`tm_project`");
mysqli_stmt_execute($stmt);

$result = new stdclass();
$result->success = true;

http_response_code(200);
echo json_encode($result);