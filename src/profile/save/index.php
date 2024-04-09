<?php 

include '../../config/settings.php';
include '../../include/database.php';
include '../../app/include.php';
include '../../include/auth.php';

$userID = Application::getInstance()->getAuthService()->getCurrentUserId();

$lastName = $_POST['lastName'];
$firstName = $_POST['firstName'];
$middleName = $_POST['middleName'];
$nickName = $_POST['nickName'];

Application::getInstance()->getUserService()->updateOneById(
    $userID,
    $lastName,
    $firstName,
    $middleName,
    $nickName
);

header('location: /profile');