<?php
    session_start();

    require_once "processes.php";

    // header('Content-Type: application/json');
    
    // if($_SERVER['REQUEST_METHOD'] != 'POST'){
    //     echo json_encode([
    //         'success' => false,
    //         'message' => 'Post HTTP method required'
    //     ]);
    //     die();
    // }

    // if(isUserLoggedIn()){
    //     echo json_encode([
    //         'success' => false,
    //         'message' => 'User is alredy authenticateed'
    //     ]);
    //     die();
    // }


    $fullName = $_POST['full_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = [
        'full_name' => $fullName,
        'email' => $email,
        'password' => $password
    ];

    if(checkUserByEmail($email)){
        echo "User is Already registred";
        die();
    }

    // if (checkUserByEmail($email)) {
    //     echo json_encode([
    //         'success' => false,
    //         'message' => "This User Is Alredy Registred!"
    //     ]);
    //     die();
   // }

    storeUserToDb($user);

    // if(storeUserToDb($user)){
    //     echo json_encode([
    //         'success' => true,
    //         'message' => "Welcome"
    //     ]);
    //     die();
    // }
    header("location: /cacttus-s3-basic-web/task-menagment/register_ajax.php");
?>