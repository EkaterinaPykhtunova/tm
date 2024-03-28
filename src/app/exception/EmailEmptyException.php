<?php

class EmailEmptyException extends Exception {
    
    public function __construct() {
        parent::__construct('Error! Email is empty...', 0);
    }
}