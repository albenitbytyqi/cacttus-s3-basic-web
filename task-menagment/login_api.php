<?php
    session_start();

    require_once "processes.php";

    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = checkUserByEmailAndPass($email,$password);

    if($user != null){
        // logged in
        echo "Logged in!!!";
        $_SESSION['logged_in'] = true;
        $_SESSION['first_name'] = $user['first_name'];
        $_SESSION['email'] = $email;
        header("Location: /cacttus-s3-basic-web/task-menagment/add_task.php");
        die();
    }else {
        echo "Wrong Crendentials!";
        $_SESSION['logged_in'] = false;
    }
    
    
    ?>