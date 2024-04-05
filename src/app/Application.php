<?php

class Application {

    public static $instance = null;

    function __construct(
        public $projectService = new ProjectService(),
        public $taskService = new TaskService(),
        public $userService = new UserService(),
        public $authService = new AuthService(),
        public $sessionService = new SessionService()
    ) {}

    public static function getInstance() {
        if(!isset(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getProjectService() {
        return $this->projectService;
    }

    public function getTaskService() {
        return $this->taskService;
    }

    public function getUserService() {
        return $this->userService;
    }

    public function getAuthService() {
        return $this->authService;
    }

    public function getSessionService() {
        return $this->sessionService;
    }
    
}