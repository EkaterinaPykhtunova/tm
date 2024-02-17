<?php 

include '../../config/settings.php';
include '../../include/database.php';
include '../../app/include.php';

Application::getInstance()->getprojectService()->createOneByDefault();

header('location: /projects');
