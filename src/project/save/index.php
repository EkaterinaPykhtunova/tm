<?php

include '../../config/settings.php';
include '../../include/database.php';
include '../../app/include.php';
include '../../include/auth.php';

$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];
Application::getInstance()->getProjectService()->updateOneById($id, $name, $description);

header('location: /projects/');