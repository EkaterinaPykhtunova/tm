<?php include '../config/settings.php'; ?>
<?php include '../include/database.php'; ?>
<?php include '../app/include.php'; ?>

TEST

<?php

    Application::getInstance()->getUserService()->createUserTest();
    //echo json_encode(Application::getInstance()->getUserService()->findAll());

    //echo json_encode(Application::getInstance()->gettaskService()->findAll());

?>


