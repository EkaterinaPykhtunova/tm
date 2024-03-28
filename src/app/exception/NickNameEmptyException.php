<?php

class NickNameEmptyException extends Exception {
    
    public function __construct() {
        parent::__construct('Error! Nickname is empty...', 0);
    }
}