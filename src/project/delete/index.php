<?php 

include '../../config/settings.php';
include '../../include/database.php';
include '../../app/include.php';

$id = $_POST['id'];
Application::getInstance()->getProjectService()->deleteOneById($id);

header('location: /projects/');
