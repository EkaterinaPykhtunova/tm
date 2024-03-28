<?php

class AccessDeniedException extends Exception {
    
    public function __construct() {
        parent::__construct('Error! Access denied...', 0);
    }
}