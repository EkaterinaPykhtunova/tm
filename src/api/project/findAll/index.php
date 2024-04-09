<?php

include '../../../config/settings.php';
include '../../../include/database.php';
include '../../../app/include.php';
include '../../../include/auth-api.php';

$projects = Application::getInstance()->getProjectService()->findAll();

http_response_code(200);
echo json_encode($projects);