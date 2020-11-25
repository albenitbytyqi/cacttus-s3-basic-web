<?php
    
    $dns = "mysql:host=localhost;dbname=social_networkdb";
    $username = "root";
    $password = "";

    $dbConnection = null;

    try{
        $dbConnection = new PDO($dns,$username,$password);
    }catch(PDOException $e){
        echo "Not connected".$e->getMessage();
    }




?>

