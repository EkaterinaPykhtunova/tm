<?php

class FirstNameEmptyException extends Exception {
    
    public function __construct() {
        parent::__construct('Error! Firstname is empty...', 0);
    }
}