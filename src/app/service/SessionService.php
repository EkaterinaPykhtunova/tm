<?php

class SessionService {
    
    public function open($user) {
        
        $_SESSION['USERID'] = $user->id;
        $_SESSION['USERNAME'] = $user->username;
    }

    public function getUserId() {
        if (!array_key_exists('USERID', $_SESSION)) return null;
        return $_SESSION['USERID'];
    }

    public function getUsername() {
        if (!array_key_exists('USERNAME', $_SESSION)) return null;
        return $_SESSION['USERNAME'];
    }

    public function isAuth() {
        return array_key_exists('USERID', $_SESSION);
    }

    public function close() {
        session_destroy();
    }
}