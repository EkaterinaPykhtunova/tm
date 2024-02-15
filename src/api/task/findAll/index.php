<?php

include '../../../config/settings.php';
include '../../../include/database.php';

$result = $connection->query('SELECT `id`,`name`,`description` FROM `tm`.`tm_task`; ');
$projects = array();

        while($row = $result->fetch_object()) {
            $project = new stdclass();
            $project->id = $row->id;
            $project->name = $row->name;
            $project->description = $row->description;

            $projects[] = $project;
        }

http_response_code(200);
echo json_encode($projects);