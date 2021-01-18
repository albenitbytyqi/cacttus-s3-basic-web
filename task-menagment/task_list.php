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
        <br>
        Welcome <b><?php echo $_SESSION['full_name'] ?></b>
        <button id="add_task">Add Task</button>
        <a href="/cacttus-s3-basic-web/task-menagment/signout.php">Sign Out</a><br><br>
         
          
<?php

$userId = $_SESSION['user_id'];

$tasks = getTasksFromDb(); //getUserPosts($userId);

if (empty($tasks)) {
?>
    <div>
        There are no posts by this user.
    </div>

    <?php

} else {
    foreach ($tasks as $task) {
    ?>
    <div class="container">
    <div class="row justify-content-center">
    <table class="table">
        <thead>
        <tr>

        <td>Title: <?php echo $task['taskTitle']; ?><br> Descrption: <?php echo $task['taskDescription']; ?> 
        <br> Status: <?php echo $task['status'] ?> 
        </td>
        <td> 
        <?php
        if ($_SESSION['user_id'] == $task['user_id']) {
        ?>
        <td>
            <a href='delete.php?delete= <?php echo $task['taskID'] ?>' class="btn btn-danger">Delete</a>
        </td>
        <?php
        }
        ?>
        
        </tr>
        </thead>
        </div>
        </div>
                
        
        <hr>
<?php
    }
}

?>

</center>  


</body>

<script>
    document.getElementById("add_task").onclick = function(){
        location.href="/cacttus-s3-basic-web/task-menagment/add_task.php";
    };
</script>

</html>