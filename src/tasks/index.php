<?php define('TITLE', 'TASKS'); ?>
<?php include '../config/settings.php'; ?>
<?php include '../include/database.php'; ?>
<?php include '../app/include.php'; ?>
<?php include '../include/auth.php'; ?>
<?php include '../include/header.php'; ?>
                
<h2>TASKS</h2>

<table width="100%" border="1" cellpadding="10" style="margin-bottom: 20px;">
    <tr>
        <th width="40" nowrap="nowrap">№</th>
        <th width="200" nowrap="nowrap" align="left">NAME</th>
        <th width="100%" align="left">DESCRIPTION</th>
        <th width="40" nowrap="nowrap"></th>
        <th width="40" nowrap="nowrap"></th>
    </tr>

    <?php
        $index = 1;
        $tasks = Application::getInstance()->getTaskService()->findAll();
        foreach ($tasks as $row)  {
    ?>
    <tr>
        <td align="center"><?php echo $index; ?>.</td>
        <td align="left"><?php echo $row->name; ?></td>
        <td align="left"><?php echo $row->description; ?></td>
        <td align="center">
            <a href="/task/edit/?id=<?php echo $row->id; ?>">
                <img src="/images/edit_icon.png" width="32" />
            </a>
        <td align="center">
            <form name="formDelete<?php echo $row->id; ?>" action="/task/delete/" method="POST" style="display:none;">
                <input type="hidden" name="id" value="<?php echo $row->id; ?>"/>
            </form>
            <a href="#" onclick="if (confirm('Are you sure you want to delete task <?php echo $row->name ?> ?')) document.forms['formDelete<?php echo $row->id; ?>'].submit();">
                <img src="/images/trash_icon.png" width="32" />
            </a>
        </td>
    </tr>
    <?php
        $index++;
        }
    
    ?>
</table>

<form action="/task/create/" method="POST">
    <button type="submit">
        CREATE TASK
    </button>
</form>

<?php include '../include/footer.php'; ?>