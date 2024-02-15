<?php

include '../../config/settings.php';
include '../../include/database.php';

$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];

$stmt = mysqli_prepare(
    $connection, 
    "UPDATE `tm`.`tm_project` SET `name` = ?, `description` = ? WHERE `id` = ? "
);

mysqli_stmt_bind_param($stmt, "sss", $name, $description, $id);
mysqli_stmt_execute($stmt);

header('location: /projects/');