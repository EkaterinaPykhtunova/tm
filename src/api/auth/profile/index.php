<?php

include '../../../config/settings.php';
include '../../../include/database.php';
include '../../../app/include.php';

$user = Application::getInstance()->getAuthService()->getCurrentUser();
echo json_encode($user);

