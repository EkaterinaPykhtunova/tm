<?php

class AuthService {

    public function login($username, $password) {
        $result = false;
        try {
            $user = Application::getInstance()->getUserService()->check($username,$password);
            Application::getInstance()->getSessionService()->open($user);
            $result = true;
        } catch (Exception $e) {
            $result = false;
        }
        return $result;
    }

    public function isAuth() {
        return Application::getInstance()->getSessionService()->isAuth();
    }

    public function logout() {
        Application::getInstance()->getSessionService()->close();
    }

} 