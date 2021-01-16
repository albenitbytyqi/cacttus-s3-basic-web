<?php
    require_once "processes.php";

    header('Content-Type: application/json');
    
    if ($_SERVER['REQUEST_METHOD'] != 'POST') {
        echo json_encode([
            'success' => false,
            'message' => 'POST HTTP Method required!'
        ]);
        die();
    }

    signOut();
    
    echo json_encode([
        'success' => true,
        'message' => "User is Signout"
    ]);
    die();

?>