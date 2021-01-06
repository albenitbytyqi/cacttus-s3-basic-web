<?php
    require_once "db_con.php";

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
?>