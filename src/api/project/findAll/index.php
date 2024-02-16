<?php

include '../../../config/settings.php';
include '../../../include/database.php';

$projects = Application::getInstance()->getprojectService()->findAll();

http_response_code(200);
echo json_encode($projects);