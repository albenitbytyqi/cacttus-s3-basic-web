<?php
    session_start();
    
    header('Content-Type: application/json');
    
    if($_SERVER['REQUEST_METHOD'] != 'POST'){
        echo json_encode([
            'success' => false,
            'message' => 'Post HTTP method required'
        ]);
        die();
    }

    require_once "processes.php";

    if(isUserLoggedIn()){
        echo json_encode([
            'success' => false,
            'message' => 'User is alredy authenticateed'
        ]);
        die();
    }

    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = checkUserByEmailAndPass($email,$password);

    if($user != null){
    
        $_SESSION['logged_in'] = true;
        $_SESSION['full_name'] = $user['full_name'];
        $_SESSION['email'] = $email;
        $_SESSION['user_id'] = $user["id"];


        echo json_encode([
            'success' => true,
            'message' => 'Authenticated'
        ]);
        die();
    }else {
        $_SESSION['logged_in'] = false;
        echo json_encode([
            'success' => false,
            'message' => 'Wrong Credentials'
        ]);
        die();
    }
    
      
    ?>