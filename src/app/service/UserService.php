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
        if (empty($username)) throw new UsernameEmptyException();
        if (empty($password)) throw new PasswordEmptyException();
        if (empty($email)) throw new EmailEmptyException();
        
        $passwordHash = PasswordUtil::hash($password);
        $connection = ConnectionUtill::getConnection();
        $this->userRepository->createOne($connection, $username, $passwordHash, $email);
    }

    public function registry($username, $password, $email, $lastName, $firstName, $middleName, $nickName) {
        if (empty($username)) throw new UsernameEmptyException();
        if (empty($password)) throw new PasswordEmptyException();
        if (empty($email)) throw new EmailEmptyException();
        if (empty($lastName)) throw new LastNameEmptyException();
        if (empty($firstName)) throw new FirstNameEmptyException();
        if (empty($middleName)) throw new MiddleNameEmptyException();
        if (empty($nickName)) throw new NickNameNameEmptyException();
        
        $passwordHash = PasswordUtil::hash($password);
        $connection = ConnectionUtill::getConnection();
        $this->userRepository->createOne($connection, $username, $passwordHash, $email, $lastName, $firstName, $middleName, $nickName);
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