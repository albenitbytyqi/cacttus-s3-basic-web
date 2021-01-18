<?php
    require_once "db_con.php";
    
    function isUserLoggedIn() {
        return isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
    }

    function storeUserToDb(array $user){
        global $dbconn;

        $sqlQuery = "INSERT INTO `users` (`full_name`,`email`,`password`)
        VALUES (:fullName,:email,:password)";


        $passEncrypt = md5($user['password']);
        $statement = $dbconn->prepare($sqlQuery);
        $statement->bindparam(":fullName", $user['full_name']);
        $statement->bindParam(":email", $user['email']);
        $statement->bindParam(":password", $passEncrypt);

        if($statement->execute()){
            return true;
        }else{
            echo "Wrong";
            return false;
            die();
        }
    }

    function checkUserByEmailAndPass($email,$password){
        global $dbconn;

        $sqlQuery = "SELECT * FROM `users` WHERE email = :email AND password = :password";
        
        $passEncrypt = md5($password);

        $statement = $dbconn->prepare($sqlQuery);
        $statement->bindParam(":email",$email);
        $statement->bindParam(":password",$passEncrypt);

        if($statement->execute()){
            $user = $statement->fetch(PDO::FETCH_ASSOC);
            if($user != false){
                return $user;
            }
            
        }
        return null;
    }
    function signOut() {
        session_start();
        session_destroy();
    }
    function checkUserByEmail($email){
        global $dbconn;

        $sqlQuery = "SELECT * FROM `users` WHERE email=:email";
        $statement = $dbconn->prepare($sqlQuery);
        $statement->bindParam(':email', $email);
        if($statement->execute()){
            $user = $statement->fetch(PDO::FETCH_ASSOC);
            return $user !==  false;
        }
        return false;
    }
    function storeTaskToDb(array $task){
        global $dbconn;

        $sqlQuery = "INSERT INTO `tasks` (taskTitle,taskDescription,status,user_id)
        VALUES (:task_title,:task_description,:status,:user_id)";

        $statement = $dbconn->prepare($sqlQuery);

        $statement->bindparam(":task_title", $task['title']);
        $statement->bindParam(":task_description", $task['description']);
        $statement->bindParam(":status", $task['status']);
        $statement->bindParam(":user_id",$_SESSION['user_id']);

       

    

        if($statement->execute()){
            echo "mire";
        }else{
            print_r($statement->errorInfo());
            die();
        }
    }
    function getTasksFromDb(){
        global $dbconn;
        $sqlQuery = "Select * from tasks where user_id = " . $_SESSION['user_id'];

        $statemant = $dbconn->prepare($sqlQuery);

        if($statemant->execute()){
            return $statemant->fetchAll(PDO::FETCH_ASSOC);;
        }else{
            return [];;
        }
    }
    function delete($id){
        global $dbconn;

        $sqlQuery = "DELETE FROM tasks Where taskID =:id";

        $statemant = $dbconn->prepare($sqlQuery);
        $statemant->bindparam(':id',$id);

        if($statemant->execute()){
           return true;
        }else {
            return false;
        }
    }
?>