<?php

class UsernameEmptyException extends Exception {
    
    public function __construct() {
        parent::__construct('Error! Username is empty...', 0);
    }
}