<?php define('TITLE', 'TASKS'); ?>
<?php include '../config/settings.php'; ?>
<?php include '../include/database.php'; ?>
<?php include '../app/include.php'; ?>
<?php include '../include/auth.php'; ?>
<?php include '../include/header.php'; ?>

<script>

    function save() {
        const form = document.forms['mainForm'];

        if (document.getElementById('lastName').value === '') {
            showError('Error! Lastname is empty...');
            return;
        }

        if (document.getElementById('firstName').value === '') {
            showError('Error! Firstname is empty...');
            return;
        }

        if (document.getElementById('middleName').value === '') {
            showError('Error! Middlename is empty...');
            return;
        }

        if (document.getElementById('nickName').value === '') {
            showError('Error! Nickname is empty...');
            return;
        }

        form.submit();
    }

</script>

<?php

$user = Application::getInstance()->getAuthService()->getCurrentUser();

?>

<h1>PROFILE</h1>

<form id="mainForm" name="mainForm" action="/profile/save/" method="POST">

<p>
    <div>USERNAME</div>
    <div><input id="username" readonly="readonly" name="username" type="text" style="width: 300px;" value="<?php echo $user->username;?>" /></div>
</p>

<p>
    <div>EMAIL</div>
    <div><input id="email" name="email" readonly="readonly" type="text" style="width: 300px;" value="<?php echo $user->email;?>" /></div>
</p>

<p>
    <div>LASTNAME</div>
    <div><input id="lastName" name="lastName" type="text" style="width: 300px;" value="<?php echo $user->lastName;?>" /></div>
</p>

<p>
    <div>FIRSTNAME</div>
    <div><input id="firstName" name="firstName" type="text" style="width: 300px;" value="<?php echo $user->firstName;?>" /></div>
</p>

<p>
    <div>MIDDLENAME</div>
    <div><input id="middleName" name="middleName" type="text" style="width: 300px;" value="<?php echo $user->middleName;?>" /></div>
</p>

<p>
    <div>NICKNAME</div>
    <div><input id="nickName" name="nickName" type="text" style="width: 300px;" value="<?php echo $user->nickName;?>" /></div>
</p>

<p>
    <button type="button" onclick="save();">SAVE</button>
</p>

</form>

<?php include '../include/footer.php'; ?>