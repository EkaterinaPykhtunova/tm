<?php 

include '../../config/settings.php';
include '../../include/database.php';
include '../../app/include.php';
include '../../include/auth.php';

Application::getInstance()->getTaskService()->createOneByDefault();

header('location: /tasks/');