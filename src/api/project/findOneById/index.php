<?php

include '../../../config/settings.php';
include '../../../include/database.php';



if ((!isset($_GET) || empty($_GET['id'])) ) {
    $result = new stdclass();
    $result->success = false;

    http_response_code(500);
    echo json_encode($result);
    die();
}

$id = $_GET['id'];

$project = $projects = Application::getInstance()->getprojectService()->findOneById($id);

    if ($projects == null) {
        $result = new stdclass();
        $result->success = false;
        $result->message = 'Error! Project not found...';
    
        http_response_code(404);
        echo json_encode($result);
        die();  
    }

    http_response_code(200);
    echo json_encode($project);