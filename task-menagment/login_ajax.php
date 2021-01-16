<?php
    session_start();

    require_once "processes.php";

    if(isUserLoggedIn()){
        header("Location: /cacttus-s3-basic-web/task-menagment/task_list.php");
        die();
    }
?>
<html>
<head>
    <title>Log In</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
    <center>
        <h4>Task Menagment Tool - LOGIN</h4>
        <form onsubmit="return login();">
            <label>Email:</label><br>
            <input id="login_email" type="email" name="email"/><br>
            <label>Password:</label><br>
            <input id="login_password" type="password" name="password"/>
            <br><br>
            <input type="submit" value="Log In"/>
        </form>
        <br>
        <a href="/cacttus-s3-basic-web/task-menagment/register_ajax.php">Register here!</a>
    </center>
</body>
<script>
    function login(){
        const email = $("#login_email").val();
        const password = $("#login_password").val();

        const apiEndpoint = "http://localhost/cacttus-s3-basic-web/task-menagment/login_api.php"

        $.post(apiEndpoint,{
            'email' : email,
            'password' : password
        }, function(response){
            if(response.success == false){
                alert(response.message);
            }else{
                location.reload();  
            }
        });
        
        return false;
    }
</script>
</html>