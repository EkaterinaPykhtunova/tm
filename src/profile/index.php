<?php define('TITLE', 'TASKS'); ?>
<?php include '../config/settings.php'; ?>
<?php include '../include/database.php'; ?>
<?php include '../app/include.php'; ?>
<?php include '../include/auth.php'; ?>
<?php include '../include/header.php'; ?>

<?php

$user = Application::getInstance()->getAuthService()->getCurrentUser();

?>


<h1>PROFILE</h1>

</script>

<p>
    <div>USERNAME</div>
    <div><input id="username" name="username" type="text" style="width: 300px;" value="<?php echo $user->username;?>" /></div>
</p>

<p>
    <div>EMAIL</div>
    <div><input id="email" name="email" type="text" style="width: 300px;" value="<?php echo $user->email;?>" /></div>
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

<?php include '../include/footer.php'; ?>