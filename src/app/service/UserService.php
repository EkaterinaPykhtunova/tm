<?php

class UserService {

    function __construct(
        public $userRepository = new UserRepository(),
    ) {}

    public function init() {
        $this->createUserRoot();
        $this->createUserTest();
    }

    public function createOne($username, $password, $email) {
        $passwordHash = PasswordUtil::hash($password);
        $connection = ConnectionUtill::getConnection();
        $this->userRepository->createOne($connection, $username, $passwordHash, $email);
    }

    public function createUserRoot() {
        $this->createOne('root', 'root', 'root@tm');

    }

    public function createUserTest() {
        $this->createOne('test', 'test', 'test@tm');

    }

    public function findAll() {
        $connection = ConnectionUtill::getConnection();
        return $this->userRepository->findAll($connection);

    }

}