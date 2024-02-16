<?php

class Application {

    public static $instance = null;

    function __construct(
        public $projectService = new ProjectService(),
        public $taskService = new TaskService()
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
}