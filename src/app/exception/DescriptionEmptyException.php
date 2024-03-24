<?php

class DescriptionEmptyException extends Exception {
    
    public function __construct() {
        parent::__construct('Error! Description is empty...', 0);
    }
}