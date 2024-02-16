<?php

class ProjectRepository {

    public function findAll($connection) {

    $result = $connection->query('SELECT `id`,`name`,`description` FROM `tm`.`tm_project`; ');
    $projects = array();

        while($row = $result->fetch_object()) {
            $project = new Project();
            $project->id = $row->id;
            $project->name = $row->name;
            $project->description = $row->description;

            $projects[] = $project;
        }

        return $projects;

    }

    public function findOneById($id) {
    
        $stmt = mysqli_prepare(
        $connection, 
        "SELECT `name`,`description` FROM `tm`.`tm_project` WHERE id = ?; "
    );
    
        mysqli_stmt_bind_param($stmt, "s", $id);
    
        $stmt->execute();
        $stmt->store_result();
    
        $stmt->bind_result($name, $description);
        
        $result = $stmt->fetch();
        if ($result == null) return null;
}

    public function createOneByDefault($connection) {

        $name = 'New Project';
        $description = '';

        $stmt = mysqli_prepare($connection, "INSERT INTO `tm`.`tm_project` (`name`,`description`) 
        VALUES (?,?); ");

        mysqli_stmt_bind_param($stmt, "ss", $name, $description);
        mysqli_stmt_execute($stmt);

    }

    public function createOneByName($connection, $name) {

        $stmt = mysqli_prepare($connection, "INSERT INTO `tm`.`tm_project` (`name`,`description`) 
        VALUES (?,?); ");
        mysqli_stmt_bind_param($stmt, "ss", $name, '');
        mysqli_stmt_execute($stmt);
    }

    public function createOneByNameAndDescription($connection, $name, $description) {

        $stmt = mysqli_prepare($connection, "INSERT INTO `tm`.`tm_project` (`name`,`description`) 
        VALUES (?,?); ");
        mysqli_stmt_bind_param($stmt, "ss", $name, $description);
        mysqli_stmt_execute($stmt);
    }

    public function updateOneById($connection, $id, $name, $description) {

        $stmt = mysqli_prepare(
            $connection, 
            "UPDATE `tm`.`tm_project` SET `name` = ?, `description` = ? WHERE `id` = ? "
        );
        
        mysqli_stmt_bind_param($stmt, "sss", $name, $description, $id);
        mysqli_stmt_execute($stmt);

    }

    public function deleteOneById($connection, $id) {

        $stmt = mysqli_prepare($connection, "DELETE FROM `tm`.`tm_project` WHERE id = ? ");
        mysqli_stmt_bind_param($stmt, "s", $id);
        mysqli_stmt_execute($stmt);

    }

    public function deleteAll($connection) {

        $stmt = mysqli_prepare($connection, "DELETE FROM `tm`.`tm_project`");
        mysqli_stmt_execute($stmt);

    }

}