<html>
    <head>
        <title><?php echo TITLE; ?> | TASK MANAGER</title>
        <style>
        h1 {
            padding:0;
            margin:0;
        }
        body {
            padding:0;
            margin:0;
        }
        a {
            color: black;
        }
        table {
            border-collapse: collapse;
        }
        </style>

        <script>
            function showError(message) {
                const errorBlock = document.getElementById('errorBlock');
                errorBlock.innerHTML = message;
                errorBlock.style.display = 'block';
            }

            function hideError() {
                const errorBlock = document.getElementById('errorBlock');
                errorBlock.style.display = 'none';
            }
        
        </script>

    </head>
    <body>

    <table width="100%" height="100%" border="0">
    <tr>
            <td>

                <table width="100%" border="0" cellpadding="5">
                    <tr>
                        <td width="100%">
                            <a href="/">
                                <h1>TASK MANAGER</h1>
                            </a>
                        </td>
                        <td>
                            <a href="/">MAIN</a>
                        </td>
                        <td>
                            <a href="/projects">PROJECTS</a>
                        </td>
                        <td>
                            <a href="/tasks">TASKS</a>
                        </td>
                        <td>
                            <a href="/about">ABOUT</a>
                        </td>

                        <?php if (!Application::getInstance()->getAuthService()->isAuth()) { ?>
                        <td>
                            <a href="/login">LOGIN</a>
                        </td>
                        <td>
                            <a href="/registry">REGISTRY</a>
                        </td>
                        <?php } ?>
                        
                        <?php if (Application::getInstance()->getAuthService()->isAuth()) { ?>
                        <td>
                            <a href="/profile">PROFILE</a>
                        </td>
                        <td>
                            <a href="/logout">LOGOUT</a>
                        </td>
                        <?php } ?>
                    
                    </tr>
                </table>
                
            </td>
        </tr>
    
        <tr>
            <td height="100%" valign="top" style="padding: 20px;">

            <div id="errorBlock" style="display: none; background-color: lightpink; padding: 20px; font-size: 18 px; text-align: center; border: 1px solid black; " >
                ERROR MESSAGE
            </div>