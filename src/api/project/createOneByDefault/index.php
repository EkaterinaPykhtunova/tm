<?php

include '../../../config/settings.php';
include '../../../include/database.php';
include '../../../app/include.php';
include '../../../include/auth-api.php';

Application::getInstance()->getProjectService()->createOneByDefault();

$result = new stdclass();
$result->success = true;

http_response_code(200);
echo json_encode($result);