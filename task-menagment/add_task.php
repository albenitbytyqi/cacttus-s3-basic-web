<?php
    session_start();


    require_once "processes.php";

    if(!isUserLoggedIn()){
        header("Location: /cacttus-s3-basic-web/task-menagment/login_ajax.php");
        die();
    }
  
?>
<html>

<head>
    <title>Add Task</title>

    <body>

        <center>
            <form method="POST" action="/cacttus-s3-basic-web/task-menagment/add_task_logic.php">
                <h2>Add New Task:</h2><br>
                <label>Title:</label><br>
                <input type="text" name="title" size="52"/><br>
                <label>Description:</label><br>
                <textarea rows="5" cols="40" name="description"></textarea><br><br>
                Status: <select name="status">
                <option>ToDo</option>
                <option>InProgress</option>
                <option>Done</option>
                </select><br><br>
                <input type="submit" value="Submit"/>
            </form>


        </center>

    </body>


</head>


</html>  