<?php
    session_start();

    require_once "processes.php";


    $fullName = $_POST['full_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = [
        'full_name' => $fullName,
        'email' => $email,
        'password' => $password
    ];

    storeUserToDb($user);
 //   header("location: /cacttus-s3-basic-web/task-menagment/register.php");
?>