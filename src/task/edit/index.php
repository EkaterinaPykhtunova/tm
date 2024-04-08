<?php define('TITLE', 'EDIT TASK'); ?>
<?php include '../../config/settings.php'; ?>
<?php include '../../include/database.php'; ?>
<?php include '../../app/include.php'; ?>
<?php include '../../include/auth.php'; ?>
<?php include '../../include/header.php'; ?>

<?php

 $id = $_GET['id'];
 $task = Application::getInstance()->getTaskService()->findOneById($id);

 ?>

 <script>

    function submitMainForm() {
        hideError();
        const mainForm = document.getElementById('mainForm');
        
        const inputName = document.getElementById('inputName');
        const valueName = inputName.value;

        if (valueName === '') {
            showError('Error! Name value is empty...');
            return;
        }
        
        const inputDescription = document.getElementById('inputDescription');
        const valueDescription = inputDescription.value;

        if (valueDescription === '') {
            showError('Error! Description value is empty...');
            return;
        }

        mainForm.submit();
    }

    </script>

<h2>EDIT TASK</h2>

<form id="mainForm" action="/task/save/" method="POST">

<input type="hidden" name="id" value="<?php echo $id; ?>" />

    <p>
        <div>NAME</div>
        <div><input id="inputName" name="name" type="text" style="width: 300px;" value="<?php echo $task->name; ?>" /></div>
    </p>

    <p>
        <div>DESCRIPTION</div>
        <div>
            <textarea id="inputDescription" name="description" style="width: 300px;"><?php echo $task->description; ?></textarea>
        </div>
    </p>

    <p>
        <button type="button" onclick="submitMainForm();">
            SAVE
        </button>   
    </p>

</form>

<?php include '../../include/footer.php'; ?>