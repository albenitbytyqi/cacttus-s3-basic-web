<?php
    session_start();
    require_once "processes.php";

    $title = $_POST['title'];
    $desc = $_POST['description'];
    $status = $_POST['status'];
    $user_id = $_SESSION['user_id'];

    $tasks = [
        'title' => $title,
        'description' => $desc,
        'status' => $status,
        'user_id' => $user_id
    ];

    storeTaskToDb($tasks);


    header("Location: /cacttus-s3-basic-web/task-menagment/task_list.php")


?>