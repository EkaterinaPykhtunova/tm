<?php

include '../../../config/settings.php';
include '../../../include/database.php';
include '../../../app/include.php';
include '../../../include/auth-api.php';

$user = Application::getInstance()->getAuthService()->getCurrentUser();
echo json_encode($user);

