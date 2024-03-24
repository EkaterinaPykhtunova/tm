<?php

class IdEmptyException extends Exception {
    
    public function __construct() {
        parent::__construct('Error! Id is empty...', 0);
    }
}