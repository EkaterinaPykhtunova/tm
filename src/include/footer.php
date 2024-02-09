</td>
        </tr>

        <tr>
            <td align="center" height="40px;">

            <table width="100%" border="0">
                <tr>
                    <td id="currentTime" width="200" nowrap="nowrap" align="center">
                        &nbsp;
                    </td>
                    <td align="center">
                    eegorova12@ya.ru 
                    </td>
                    <td width="200" nowrap="nowrap">
                        &nbsp;
                    </td>
                </tr>
            </table>

            <script>

                function showCurrentTime() {
                    const currentTime = document.getElementById('currentTime');
                    const time = new Date();
                    var hours = time.getHours();
                    if (hours < 10) hours = '0' + hours;
                    var minutes = time.getMinutes();
                    if (minutes < 10) minutes = '0' + minutes;
                    var seconds = time.getSeconds();
                    if (seconds < 10) seconds = '0' + seconds;
                    currentTime.innerHTML = hours + ":" + minutes + ":" + seconds;
                }
                
                showCurrentTime();
                setInterval(showCurrentTime, 1000);

                </script>


            </td>
        </tr>

    </table>
        
    </body>
</html>