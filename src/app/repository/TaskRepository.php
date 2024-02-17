<?php

class TaskRepository {

    public function findAll($connection) {

        $result = $connection->query('SELECT `id`,`name`,`description` FROM `tm`.`tm_task`; ');
        $projects = array();
    
            while($row = $result->fetch_object()) {
                $task = new Task();
                $task->id = $row->id;
                $task->name = $row->name;
                $task->description = $row->description;
    
                $tasks[] = $task;
            }
    
            return $tasks;
    
        }
    
        public function findOneById($connection, $id) {
        
            $stmt = mysqli_prepare(
            $connection, 
            "SELECT `name`,`description` FROM `tm`.`tm_task` WHERE id = ?; "
        );
        
            mysqli_stmt_bind_param($stmt, "s", $id);
        
            $stmt->execute();
            $stmt->store_result();
        
            $stmt->bind_result($name, $description);
            
            $result = $stmt->fetch();
            if ($result == null) return null;
    
            $task = new Task();
            $task->id = $id;
            $task->name = $name;
            $task->description = $description;
    
            return $task;
    }
    
        public function createOneByDefault($connection) {
    
            $name = 'New Task';
            $description = '';
    
            $stmt = mysqli_prepare($connection, "INSERT INTO `tm`.`tm_task` (`name`,`description`) 
            VALUES (?,?); ");
    
            mysqli_stmt_bind_param($stmt, "ss", $name, $description);
            mysqli_stmt_execute($stmt);
    
        }
    
        public function createOneByName($connection, $name) {
            $description = '';
            $stmt = mysqli_prepare($connection, "INSERT INTO `tm`.`tm_task` (`name`,`description`) 
            VALUES (?,?); ");
            mysqli_stmt_bind_param($stmt, "ss", $name, $description);
            mysqli_stmt_execute($stmt);
        }
    
        public function createOneByNameAndDescription($connection, $name, $description) {
    
            $stmt = mysqli_prepare($connection, "INSERT INTO `tm`.`tm_task` (`name`,`description`) 
            VALUES (?,?); ");
            mysqli_stmt_bind_param($stmt, "ss", $name, $description);
            mysqli_stmt_execute($stmt);
        }
    
        public function updateOneById($connection, $id, $name, $description) {
    
            $stmt = mysqli_prepare(
                $connection, 
                "UPDATE `tm`.`tm_task` SET `name` = ?, `description` = ? WHERE `id` = ? "
            );
            
            mysqli_stmt_bind_param($stmt, "sss", $name, $description, $id);
            mysqli_stmt_execute($stmt);
    
        }
    
        public function deleteOneById($connection, $id) {
    
            $stmt = mysqli_prepare($connection, "DELETE FROM `tm`.`tm_task` WHERE id = ? ");
            mysqli_stmt_bind_param($stmt, "s", $id);
            mysqli_stmt_execute($stmt);
    
        }
    
        public function deleteAll($connection) {
    
            $stmt = mysqli_prepare($connection, "DELETE FROM `tm`.`tm_task`");
            mysqli_stmt_execute($stmt);
    
        }
    
    }