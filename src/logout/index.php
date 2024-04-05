<?php 

include '../config/settings.php';
include '../include/database.php';
include '../app/include.php';

Application::getInstance()->getAuthService()->logout();

header('location: /login');