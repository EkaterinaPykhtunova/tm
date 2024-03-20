<?php

class PasswordUtil {

    public static $SECRET = 'fghdgfhdfghdhfg';

    public static function hash($password) {
        return md5(PasswordUtil::$SECRET . $password . PasswordUtil::$SECRET);
    }

}