<?php

class UserRepository {

    public function createOne($connection, $username, $passwordHash, $email, $lastName = '', $firstName = '', $middleName = '', $nickName = '') {
        $stmt = mysqli_prepare($connection, "INSERT INTO `tm`.`tm_user` (`username`,`passwordHash`, `email`, `lastName`, `firstName`, `middleName`,`nickName`) VALUES (?,?,?,?,?,?,?); ");
        
        mysqli_stmt_bind_param($stmt, "sssssss", $username, $passwordHash, $email, $lastName, $firstName, $middleName, $nickName);
        mysqli_stmt_execute($stmt);

    }

    public function findAll($connection) {
        $sql = 'SELECT `id`,`username`,`passwordHash`,`email`, `lastName`, `firstName`,`middleName`,`nickName` FROM `tm`.`tm_user`; ';
        $result = $connection->query($sql);
        $users = array();

        while($row = $result->fetch_object()) {
            $user = new User();
            $user->id = $row->id;
            $user->username = $row->username;
            $user->passwordHash = $row->passwordHash;
            $user->email = $row->email;
            $user->lastName = $row->lastName;
            $user->firstName = $row->firstName;
            $user->middleName = $row->middleName;
            $user->nickName = $row->nickName;

            $users[] = $user;
        }

        return $users;

    }

    public function findOneById($connection, $id) {
        $sql = 'SELECT `id`,`username`,`passwordHash`,`email`, `lastName`, `firstName`,`middleName`,`nickName` FROM `tm`.`tm_user` WHERE id = ?; ';
        $stmt = mysqli_prepare($connection, $sql);
        
        mysqli_stmt_bind_param($stmt, "s", $id);
    
        $stmt->execute();
        $stmt->store_result();
    
        $stmt->bind_result($id, $username,$passwordHash,$email, $lastName, $firstName,$middleName,$nickName);
        
        $result = $stmt->fetch();
        if ($result == null) return null;

        $user = new User();
        $user->id = $id;
        $user->username = $username;
        $user->passwordHash = $passwordHash;
        $user->passwordHash = $passwordHash;
        $user->email = $email;
        $user->lastName = $lastName;
        $user->firstName = $firstName;
        $user->middleName = $middleName;
        $user->nickName = $nickName;

        return $user;

    }

    public function findOneByUsername($connection, $username) {
        $sql = 'SELECT `id`,`username`,`passwordHash`,`email`, `lastName`, `firstName`,`middleName`,`nickName` FROM `tm`.`tm_user` WHERE username = ?; ';
        $stmt = mysqli_prepare($connection, $sql);
        
        mysqli_stmt_bind_param($stmt, "s", $username);
    
        $stmt->execute();
        $stmt->store_result();
    
        $stmt->bind_result($id, $username,$passwordHash,$email, $lastName, $firstName,$middleName,$nickName);
        
        $result = $stmt->fetch();
        if ($result == null) return null;

        $user = new User();
        $user->id = $id;
        $user->username = $username;
        $user->passwordHash = $passwordHash;
        $user->passwordHash = $passwordHash;
        $user->email = $email;
        $user->lastName = $lastName;
        $user->firstName = $firstName;
        $user->middleName = $middleName;
        $user->nickName = $nickName;

        return $user;

    }

    public function findOneByEmail($connection, $email) {
        $sql = 'SELECT `id`,`username`,`passwordHash`,`email`, `lastName`, `firstName`,`middleName`,`nickName` FROM `tm`.`tm_user` WHERE email = ?; ';
        $stmt = mysqli_prepare($connection, $sql);
        
        mysqli_stmt_bind_param($stmt, "s", $email);
    
        $stmt->execute();
        $stmt->store_result();
    
        $stmt->bind_result($id, $username,$passwordHash,$email, $lastName, $firstName,$middleName,$nickName);
        
        $result = $stmt->fetch();
        if ($result == null) return null;

        $user = new User();
        $user->id = $id;
        $user->username = $username;
        $user->passwordHash = $passwordHash;
        $user->passwordHash = $passwordHash;
        $user->email = $email;
        $user->lastName = $lastName;
        $user->firstName = $firstName;
        $user->middleName = $middleName;
        $user->nickName = $nickName;

        return $user;

    }

    public function existsOneByUsername($connection, $username) {

    }

    public function existsOneByEmail($connection, $email) {

    }

    public function updateOneById($connection, $id, $lastName, $firstName, $middleName, $nickName) {

    }

    public function deleteOneById($connection, $id) {
        $stmt = mysqli_prepare($connection, "DELETE FROM `tm`.`tm_user` WHERE id = ? ");
        mysqli_stmt_bind_param($stmt, "s", $id);
        mysqli_stmt_execute($stmt);
    }

}