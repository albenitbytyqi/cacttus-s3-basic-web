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
            Welcome <b><?php echo $_SESSION['full_name'] ?></b>
            <a href="/cacttus-s3-basic-web/task-menagment/signout_api.php">Sign Out</a>
            <form>
                <h2>New Post:</h2><br>
                <label>Title:</label><br>
                <input type="text" name="title" size="52"/><br>
                <label>Description:</label><br>
                <textarea rows="5" cols="40" name="description">

                </textarea>
            </form>
        </center>

    </body>


</head>


</html>  