<?php
    session_start();

    require_once "processes.php";
    

    if(!isset($_SESSION['full_name'])){

        header("location: /cacttus-s3-basic-web/task-menagment/login_ajax.php");
        
    }

?>
<html>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<center>
        Welcome <b><?php echo $_SESSION['full_name'] ?></b>
        <button id="add_task">Add Task</button>
        <a href="/cacttus-s3-basic-web/task-menagment/signout.php">Sign Out</a>
         
        



</center>

</body>

<script>
    document.getElementById("add_task").onclick = function(){
        location.href="/cacttus-s3-basic-web/task-menagment/add_task.php";
    };
</script>

</html>