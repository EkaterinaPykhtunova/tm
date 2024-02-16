<?php include '../config/settings.php'; ?>
<?php include '../include/database.php'; ?>
<?php include '../app/include.php'; ?>

TEST

<?php

    echo json_encode(Application::getInstance()->getprojectService()->findAll());

?>

