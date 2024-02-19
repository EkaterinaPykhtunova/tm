<?php

include '../../config/settings.php';
include '../../include/database.php';
include '../../app/include.php';

$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];
Application::getInstance()->getTaskService()->updateOneById($id, $name, $description);

header('location: /tasks/');