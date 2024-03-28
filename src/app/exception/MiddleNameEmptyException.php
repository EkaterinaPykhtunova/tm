<?php

class MiddleNameEmptyException extends Exception {
    
    public function __construct() {
        parent::__construct('Error! Middlename is empty...', 0);
    }
}