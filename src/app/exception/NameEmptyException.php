<?php

class NameEmptyException extends Exception {
    
    public function __construct() {
        parent::__construct('Error! Name is empty...', 0);
    }
}