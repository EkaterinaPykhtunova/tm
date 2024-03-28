<?php include '../config/settings.php'; ?>
<?php include '../include/database.php'; ?>
<?php include '../app/include.php'; ?>

TEST

<?php

    try {
        Application::getInstance()->getUserService()->check('test','test');
    //var_dump(Application::getInstance()->getUserService()->findOneByUsername('root'));  
    //Application::getInstance()->getProjectService()->createOneByName('');
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    //Application::getInstance()->getUserService()->createUserTest();
    //echo json_encode(Application::getInstance()->getUserService()->findAll());

    //echo json_encode(Application::getInstance()->gettaskService()->findAll());

?>


