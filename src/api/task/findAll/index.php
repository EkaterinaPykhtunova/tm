<?php

include '../../../config/settings.php';
include '../../../include/database.php';
include '../../../app/include.php';

$tasks = Application::getInstance()->getTaskService()->findAll();

http_response_code(200);
echo json_encode($tasks);