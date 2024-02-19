<?php 

include '../../config/settings.php';
include '../../include/database.php';
include '../../app/include.php';

Application::getInstance()->getProjectService()->createOneByDefault();

header('location: /projects');
