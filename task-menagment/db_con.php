<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbName = "task_menagment_db";


    $dbconn = null;

    try{
        $dbconn = new PDO('mysql:host='.$host.';dbname='.$dbName, $user, $password);
    }catch(Exception $e){
        echo "Connection Failed". $e->getMessage();
        die();
    }
    if(!$dbconn){
        echo "No Connection";
        die();
    }
?>