<?php

include '../../../config/settings.php';
include '../../../include/database.php';
include '../../../app/include.php';

$tasks = Application::getInstance()->gettaskService()->findAll();

http_response_code(200);
echo json_encode($tasks);