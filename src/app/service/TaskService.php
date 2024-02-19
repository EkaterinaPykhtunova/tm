<?php

class TaskService {

    function __construct(
        public $taskRepository = new TaskRepository(),
    ) {}

    public function findAll() {
        $connection = ConnectionUtill::getConnection();
        return $this->taskRepository->findAll($connection);
    }

    public function findOneById($id) {
        $connection = ConnectionUtill::getConnection();
        return $this->taskRepository->findOneById($connection,$id);
    }

    public function createOneByDefault() {
        $connection = ConnectionUtill::getConnection();
        $this->taskRepository->createOneByDefault($connection);
    }

    public function createOneByName($name) {
        $connection = ConnectionUtill::getConnection();
        $this->taskRepository->createOneByName($connection, $name);
    }

    public function createOneByNameAndDescription($name, $description) {
        $connection = ConnectionUtill::getConnection();
        $this->taskRepository->createOneByNameAndDescription($connection, $name, $description);
    }

    public function updateOneById($id, $name, $description) {
        $connection = ConnectionUtill::getConnection(); 
        $this->taskRepository->updateOneById($connection, $id, $name, $description);
    }

    public function deleteOneById($id) {
        $connection = ConnectionUtill::getConnection();
        $this->taskRepository->deleteOneById($connection, $id);
    }

    public function deleteAll() {
        $connection = ConnectionUtill::getConnection();
        $this->taskRepository->deleteAll($connection);
    }

}