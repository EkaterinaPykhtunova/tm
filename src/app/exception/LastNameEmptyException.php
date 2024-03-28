<?php

class LastNameEmptyException extends Exception {
    
    public function __construct() {
        parent::__construct('Error! Lastname is empty...', 0);
    }
}