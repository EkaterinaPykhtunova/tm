<?php define('TITLE', 'TEST API'); ?>
<?php include '../../config/settings.php'; ?>
<?php include '../../include/database.php'; ?>
<?php include '../../app/include.php'; ?>
<?php include '../../include/header.php'; ?>

<h2>TEST API</h2>

<table width="100%" border="1" cellpadding="10" style="margin-bottom: 20px;">
   <tr>
        <td colspan="3" align="center">
            PROJECTS
        </td>
   </tr>
    <tr>
        <td width="250" nowrap="nowrap" align="left">
            NAME
        </td>
        <td width="100" nowrap="nowrap" align="center">
            METHOD
        </td>
        <td width="100%" align="left">
            URL
        </td>
    </tr>
    <tr>
        <td align="left">
            FIND ALL
        </td>
        <td align="center">
            GET
        </td>
        <td align="left">
            <a href="/api/project/findAll/index.php" target="_blank">
            /api/project/findAll/index.php
            </a>
        </td>
    </tr>
    <tr>
        <td align="left">
            DELETE ALL
        </td>
        <td align="center">
            
        </td>
        <td align="left">
            <a href="/api/project/deleteAll/index.php" target="_blank">
            /api/project/deleteAll/index.php
            </a>
        </td>
    </tr>
    <tr>
        <td align="left">
            CREATE ONE BY DEFAULT
        </td>
        <td align="center">
            
        </td>
        <td align="left">
            <a href="/api/project/createOneByDefault/index.php" target="_blank">
            /api/project/createOneByDefault/index.php
            </a>
        </td>
    </tr>
    <tr>
        <td align="left">
            CREATE ONE BY NAME
        </td>
        <td align="center">
            POST
        </td>
        <td align="left">

            <div>/api/project/createOneByName/index.php</div>

            <div>
            <form method="POST" action="/api/project/createOneByName/index.php" target="_blank">
                NAME: <input name="name"></input>
                <button type="submit">SEND</button>
            </form>
            </div>

        </td>
    </tr>
    <tr>
        <td align="left">
            FIND ONE BY ID
        </td>
        <td align="center">
            GET
        </td>
        <td align="left">
            <div>/api/project/findOneById/index.php</div>

            <div>
            <form method="GET" action="/api/project/findOneById/index.php" target="_blank">
                ID: <input name="id"></input>
                <button type="submit">SEND</button>
            </form>
            </div>

        </td>
    </tr>
    <tr>
        <td align="left">
            DELETE ONE BY ID
        </td>
        <td align="center">
            POST
        </td>
        <td align="left">
            <div>/api/project/deleteOneById/index.php</div>

            <div>
            <form method="POST" action="/api/project/deleteOneById/index.php" target="_blank">
                ID: <input name="id"></input>
                <button type="submit">SEND</button>
            </form>
            </div>

        </td>
    </tr>
    <tr>
        <td align="left">
            UPDATE ONE BY ID
        </td>
        <td align="center">
            POST
        </td>
        <td align="left">
            <div>/api/project/updateOneById/index.php</div>

            <div>
            <form method="POST" action="/api/project/updateOneById/index.php" target="_blank">
                <div>ID: <input name="id"></input></div>
                <div>NAME: <input name="name"></input></div>
                <div>DESCRIPTION: <input name="description"></input></div>
                <button type="submit">SEND</button>
            </form>
            </div>

        </td>
    </tr>

</table>

<table width="100%" border="1" cellpadding="10" style="margin-bottom: 20px;">
   <tr>
        <td colspan="3" align="center">
            TASKS
        </td>
   </tr>
    <tr>
        <td width="250" nowrap="nowrap" align="left">
            NAME
        </td>
        <td width="100" nowrap="nowrap" align="center">
            METHOD
        </td>
        <td width="100%" align="left">
            URL
        </td>
    </tr>
    <tr>
        <td align="left">
            FIND ALL
        </td>
        <td align="center">
            GET
        </td>
        <td align="left">
            <a href="/api/task/findAll/index.php" target="_blank">
            /api/task/findAll/index.php
            </a>
        </td>
    </tr>
    <tr>
        <td align="left">
            DELETE ALL
        </td>
        <td align="center">
            
        </td>
        <td align="left">
            <a href="/api/task/deleteAll/index.php" target="_blank">
            /api/task/deleteAll/index.php
            </a>
        </td>
    </tr>
    <tr>
        <td align="left">
            CREATE ONE BY DEFAULT
        </td>
        <td align="center">
            
        </td>
        <td align="left">
            <a href="/api/task/createOneByDefault/index.php" target="_blank">
            /api/task/createOneByDefault/index.php
            </a>
        </td>
    </tr>
    <tr>
        <td align="left">
            CREATE ONE BY NAME
        </td>
        <td align="center">
            POST
        </td>
        <td align="left">

            <div>/api/task/createOneByName/index.php</div>

            <div>
            <form method="POST" action="/api/task/createOneByName/index.php" target="_blank">
                NAME: <input name="name"></input>
                <button type="submit">SEND</button>
            </form>
            </div>

        </td>
    </tr>
    <tr>
        <td align="left">
            FIND ONE BY ID
        </td>
        <td align="center">
            GET
        </td>
        <td align="left">
            <div>/api/task/findOneById/index.php</div>

            <div>
            <form method="GET" action="/api/task/findOneById/index.php" target="_blank">
                ID: <input name="id"></input>
                <button type="submit">SEND</button>
            </form>
            </div>

        </td>
    </tr>
    <tr>
        <td align="left">
            DELETE ONE BY ID
        </td>
        <td align="center">
            POST
        </td>
        <td align="left">
            <div>/api/task/deleteOneById/index.php</div>

            <div>
            <form method="POST" action="/api/task/deleteOneById/index.php" target="_blank">
                ID: <input name="id"></input>
                <button type="submit">SEND</button>
            </form>
            </div>

        </td>
    </tr>
    <tr>
        <td align="left">
            UPDATE ONE BY ID
        </td>
        <td align="center">
            POST
        </td>
        <td align="left">
            <div>/api/task/updateOneById/index.php</div>

            <div>
            <form method="POST" action="/api/task/updateOneById/index.php" target="_blank">
                <div>ID: <input name="id"></input></div>
                <div>NAME: <input name="name"></input></div>
                <div>DESCRIPTION: <input name="description"></input></div>
                <button type="submit">SEND</button>
            </form>
            </div>

        </td>
    </tr>

</table>

<table width="100%" border="1" cellpadding="10" style="margin-bottom: 20px;">
   <tr>
        <td colspan="3" align="center">
            AUTH
        </td>
   </tr>
   <tr>
        <td align="left">
            LOGIN
        </td>
        <td align="center">
            POST
        </td>
        <td align="left">
            <div>/api/auth/login/index.php</div>

            <div>
            <form method="POST" action="/api/auth/login/index.php" target="_blank">               
                <div>USERNAME: <input name="username"></input></div>
                <div>PASSWORD: <input name="password"></input></div>
                <button type="submit">SEND</button>
            </form>
            </div>

        </td>
    </tr>
    <tr>
        <td align="left">
            LOGOUT
        </td>
        <td align="center">
            POST
        </td>
        <td align="left">
            <div>/api/auth/logout/index.php</div>

            <div>
            <form method="POST" action="/api/auth/logout/index.php" target="_blank">               
                <button type="submit">SEND</button>
            </form>
            </div>

        </td>
    </tr>
    <tr>
        <td align="left">
            PROFILE
        </td>
        <td align="center">
            GET
        </td>
        <td align="left">
            <div>/api/auth/profile/index.php</div>

            <div>
            <form method="GET" action="/api/auth/profile/index.php" target="_blank">               
                <button type="submit">SEND</button>
            </form>
            </div>

        </td>
    </tr>
</table>

<?php include '../../include/footer.php'; ?>