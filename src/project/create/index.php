<?php 

include '../../config/settings.php';
include '../../include/database.php';

$name = 'New Project';
$description = '';

$stmt = mysqli_prepare($connection, "INSERT INTO `tm`.`tm_project` (`name`,`description`) 
    VALUES (?,?); ");

mysqli_stmt_bind_param($stmt, "ss", $name, $description);
mysqli_stmt_execute($stmt);

header('location: /projects');
