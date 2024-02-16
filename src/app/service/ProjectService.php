<?php

class ProjectService {

    function __construct(
        public $projectRepository = new ProjectRepository(),
    ) {}

    public function findAll() {
        $connection = ConnectionUtill::getConnection();
        return $this->projectRepository->findAll($connection);
    }

    public function findOneById($id) {
        $connection = ConnectionUtill::getConnection();
        return $this->projectRepository->findOneById($connection,$id);

    }

    public function createOneByDefault() {
        $connection = ConnectionUtill::getConnection();
        $this->projectRepository->createOneByDefault($connection);
    }

    public function createOneByName($name) {
        $connection = ConnectionUtill::getConnection();
        $this->projectRepository->createOneByName($connection, $name);
    }

    public function createOneByNameAndDescription($name, $description) {
        $connection = ConnectionUtill::getConnection();
        $this->projectRepository->createOneByNameAndDescription($connection, $name, $description);
    }

    public function updateOneById($id, $name, $description) {
        $connection = ConnectionUtill::getConnection(); 
        $this->projectRepository->updateOneById($connection, $id, $name, $description);
    }

    public function deleteOneById($id) {
        $connection = ConnectionUtill::getConnection();
        $this->projectRepository->deleteOneById($connection, $id);
    }

    public function deleteAll() {
        $connection = ConnectionUtill::getConnection();
        $this->projectRepository->deleteAll($connection);
    }

}