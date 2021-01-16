<?php
    require_once "processes.php";

    signOut();
    echo json_encode([
        'success' => true,
        'message' => "User is Signout"
    ]);
    die();

?>