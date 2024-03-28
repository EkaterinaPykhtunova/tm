<?php define('TITLE', 'TASKS'); ?>
<?php include '../config/settings.php'; ?>
<?php include '../include/database.php'; ?>
<?php include '../include/header.php'; ?>

<h1>LOGIN</h1>

<form method="POST" action="/login/auth/">

<form name="mainForm" action="/registry/create/" method="POST">

<p>
    <div>USERNAME</div>
    <div><input id="username" name="username" type="text" style="width: 300px;" value="" /></div>
</p>

<p>
    <div>PASSWORD</div>
    <div><input id="password" name="password" type="password" style="width: 300px;" value="" /></div>
</p>

<button type="submit">LOGIN</button>

</form>

<?php include '../include/footer.php'; ?>