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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


    <body>

        <center>
            <form method="POST" action="/cacttus-s3-basic-web/task-menagment/add_task_logic.php">
                <h2>Add New Task:</h2><br>
                <label>Title:</label><br>
                <input type="text" name="title" size="42"/><br>
                <label>Description:</label><br>
                <textarea rows="5" cols="40" name="description"></textarea><br><br>
                Status: <select name="status">
                <option>ToDo</option>
                <option>InProgress</option>
                <option>Done</option>
                </select><br><br>
                <input class="btn btn-success" type="submit" value="Submit"/>
            </form>


        </center>

    </body>


</head>


</html>  