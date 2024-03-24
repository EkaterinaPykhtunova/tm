<?php define('TITLE', 'TASKS'); ?>
<?php include '../config/settings.php'; ?>
<?php include '../include/database.php'; ?>
<?php include '../include/header.php'; ?>

<script>

    function registry() {
        const form = document.forms['mainForm'];

        if (document.getElementById('username').value === '') {
            showError('Error! Username is empty...');
            return;
        }

        if (document.getElementById('password').value === '') {
            showError('Error! Password is empty...');
            return;
        }

        if (document.getElementById('email').value === '') {
            showError('Error! Email is empty...');
            return;
        }

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

<h1>REGISRATION</h1>

<form name="mainForm" action="/registry/create/" method="POST">

<p>
    <div>USERNAME</div>
    <div><input id="username" name="username" type="text" style="width: 300px;" value="" /></div>
</p>

<p>
    <div>PASSWORD</div>
    <div><input id="password" name="password" type="password" style="width: 300px;" value="" /></div>
</p>

<p>
    <div>EMAIL</div>
    <div><input id="email" name="email" type="text" style="width: 300px;" value="" /></div>
</p>

<p>
    <div>LASTNAME</div>
    <div><input id="lastName" name="lastName" type="text" style="width: 300px;" value="" /></div>
</p>

<p>
    <div>FIRSTNAME</div>
    <div><input id="firstName" name="firstName" type="text" style="width: 300px;" value="" /></div>
</p>

<p>
    <div>MIDDLENAME</div>
    <div><input id="middleName" name="middleName" type="text" style="width: 300px;" value="" /></div>
</p>

<p>
    <div>NICKNAME</div>
    <div><input id="nickName" name="nickName" type="text" style="width: 300px;" value="" /></div>
</p>

<p>
    <button onclick="registry():">CREATE USER</button>
</p>

</form>

<?php include '../include/footer.php'; ?>