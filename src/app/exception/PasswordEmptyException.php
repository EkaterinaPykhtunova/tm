<?php

class PasswordEmptyException extends Exception {
    
    public function __construct() {
        parent::__construct('Error! Password is empty...', 0);
    }
}