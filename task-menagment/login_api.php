<?php
    session_set_cookie_params(0);
    session_start();
    require_once "processes.php";
    
    header('Content-Type: application/json');
    
    if($_SERVER['REQUEST_METHOD'] != 'POST'){
        echo json_encode([
            'success' => false,
            'message' => 'Post HTTP method required'
        ]);
        die();
    }

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
        $_SESSION['user_id'] = $user["user_id"];


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