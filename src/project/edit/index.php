<?php define('TITLE', 'EDIT PROJECT'); ?>
<?php include '../../config/settings.php'; ?>
<?php include '../../include/database.php'; ?>
<?php include '../../include/header.php'; ?>

<?php

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

<h2>EDIT PROJECT</h2>

<form id="mainForm" action="/project/save/" method="POST">

<input type="hidden" name="id" value="<?php echo $id; ?>" />

    <p>
        <div>NAME</div>
        <div><input id="inputName" name="name" type="text" style="width: 300px;" value="<?php echo $name; ?>" /></div>
    </p>

    <p>
        <div>DESCRIPTION</div>
        <div>
            <textarea id="inputDescription" name="description" style="width: 300px;"><?php echo $description; ?></textarea>
        </div>
    </p>

    <p>
        <button type="button" onclick="submitMainForm();" >
            SAVE
        </button>
    </p>

</form>

<?php include '../../include/footer.php'; ?>