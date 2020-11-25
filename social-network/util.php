<?php
    require_once "db.php";

    function isUserLoggedIn() {
        return isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
    }

    function doesUserExistByEmail($email) {
            global $dbConnection;

            $sqlQuery = "SELECT * FROM `users` WHERE email=:email";
            $statemant = $dbConnection->prepare($sqlQuery);
            $statemant->bindParam(":email",$email);

            if($statemant->execute()){
                $user = $statemant->fatch(PDO::FETCH_ASSOC);
                return $user != false;
            }
            return false;
    }

    function findUserByEmailAndPassword($email, $password) {
        global $dbConnection;

        $sqlQuery = "SELECT * FROM `user` WHERE email =:email AND password=:password";
        $encryptedPassword = md5($password);
        $statemant = $dbConnection->prepare($sqlQuery);
        $statemant->bindParam(':email',$email);
        $statemant->bindParam(':password',$password);

        if($statemant->execute()){
            $user = $statemant->fetch(PDO::FETCH_ASSOC);
            if($user != false){
                return $user;
            }
        }
        return null;
    }

    function storeUserToFile(array $user) {
        global $dbConnection;

        $sqlQuery = "INSERT INTO users
        (first_name,last_name,email,password)
        VALUES(:firstName, :lastName, :email, :password)";

        $encryptedPassword = md5($user['password']);
        $statemant = $dbConnection->prepare($sqlQuery);
        $statemant->bindParam(':firsName',$user['first_name']);
        $statemant->bindParam(':lastName',$user['last_name']);
        $statemant->bindParam(':email',$user['email']);
        $statemant->bindParam(':password', $user['password']);
        if($statemant->execute()){
            return true;
        }else{
            return false;
        }
    }

    function getUsers() {
        $users = [];

        if (file_exists("users.db")) {
            $fileContent = file_get_contents("users.db");
            $users = json_decode($fileContent, true);
        }
        return $users;
    }

    function signOut() {
        session_start();
        session_destroy();
    }

    function storePostToFile(array $post) {
        global $dbConnection;

        $sqlQuery = "INSERT INTO `posts` ()
        VALUE()";
        $statemant = $dbConnection->prepare($sqlQuery);
        
    }

    function getPosts() {
        $posts = [];

        if (file_exists("posts.db")) {
            $postContent = file_get_contents("posts.db");
            $posts = json_decode($postContent, true);
        }
        return $posts;
    }

    function getUserPosts($email) {
        $posts = getPosts();
        $users_posts = [];
        foreach ($posts as $post) {
            if ($post['user_email'] == $email) {
                $users_posts[] = $post;
            }
        }
        return array_reverse($users_posts);
    }

?>