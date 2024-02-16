<?php

class ConnectionUtill {

    public static function getConnection() {
        return mysqli_connect(
            MYSQL_HOST.':'.MYSQL_PORT, 
            MYSQL_USERNAME, 
            MYSQL_PASSWORD,
            MYSQL_DATABASE  
        );
    }

}