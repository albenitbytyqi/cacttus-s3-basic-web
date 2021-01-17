<?php
    require_once "processes.php";

    if(isset($_GET['delete'])){
        $id=$_GET['delete'];
        delete($id);      
    };
     header("Location: /cacttus-s3-basic-web/task-menagment/task_list.php");

?>