<?php 

include '../../config/settings.php';
include '../../include/database.php';
include '../../app/include.php';

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$lastName = $_POST['lastName'];
$firstName = $_POST['firstName'];
$middleName = $_POST['middleName'];
$nickName = $_POST['nickName'];

Application::getInstance()->getUserService()->registry(
    $username,
    $password,
    $email,
    $lastName,
    $firstName,
    $middleName,
    $nickName
);

header('location: /login');