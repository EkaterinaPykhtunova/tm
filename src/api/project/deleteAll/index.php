<?php

include '../../../config/settings.php';
include '../../../include/database.php';

Application::getInstance()->getprojectService()->deleteAll();

$result = new stdclass();
$result->success = true;

http_response_code(200);
echo json_encode($result);