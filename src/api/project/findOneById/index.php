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

$stmt = mysqli_prepare(
    $connection, 
    "SELECT `name`,`description` FROM `tm`.`tm_project` WHERE id = ?; "
);

    mysqli_stmt_bind_param($stmt, "s", $id);

    $stmt->execute();
    $stmt->store_result();

    $stmt->bind_result($name, $description);
    
    $result = $stmt->fetch();
    if ($result == null) {
        $result = new stdclass();
        $result->success = false;
        $result->message = 'Error! Id is undefined...';
    
        http_response_code(404);
        echo json_encode($result);
        die();  
    }


    $project = new stdclass();
    $project->id = $id;
    $project->name = $name;
    $project->description = $description;

    http_response_code(200);
    echo json_encode($project);