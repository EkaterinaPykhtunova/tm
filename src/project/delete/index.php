<?php 

include '../../config/settings.php';
include '../../include/database.php';
include '../../app/include.php';
include '../../include/auth.php';

$id = $_POST['id'];
Application::getInstance()->getProjectService()->deleteOneById($id);

header('location: /projects/');
