<?php
    session_start();
?>
<html>
<head>
    <title>Register</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
    <center>
        <h4>Task Menagment Tool - REGISTER</h4>
        <form onsubmit="return passwordCheck(); " method="POST" action="/cacttus-s3-basic-web/task-menagment/register_api.php">
            <label>Full Name:</label><br>
            <input id="id_fullname" type="text" name="full_name" required/><br>
            <label>Email:</label><br>
            <input id="id_email" type="email" name="email" required/><br>
            <label >Password:</label><br>     
            <input id="id_password" type="password" name="password"/><br>
            <span id="demo"></span>
            <br>
            <input  type="submit" value="Register"/>
        </form>
        <br>
        <a href="/cacttus-s3-basic-web/task-menagment/login_ajax.php">Log In</a>
    </center>

</body>
<script>
    function passwordCheck(){
        var pass = document.getElementById("id_password").value;
        if(pass == ""){
            document.getElementById("demo").innerHTML = "Fill the password field";
            document.getElementById("demo").style.color="Red";
            return false;
        }
        if(pass.length < 8){
            document.getElementById("demo").innerHTML = "Password must be have 8 char";
            document.getElementById("demo").style.color="Red";
            return false;
        }
        if(pass.length > 16){
            document.getElementById("demo").innerHTML = "Password must be until 16 char";
            document.getElementById("demo").style.color="Red";
            return false;
        }
        if(pass.search(/[A-Z]/i) < 0){
            document.getElementById("demo").innerHTML = "Password must be have at least one Uppercase char";
            document.getElementById("demo").style.color="Red";
            return false;
        }
        if(pass.search(/[a-z]/i) < 0){
            document.getElementById("demo").innerHTML = "Password must be have at least one Lowercase char";
            document.getElementById("demo").style.color="Red";
            return false;
        }
        if(pass.search(/[0-9]/) < 0){
            document.getElementById("demo").innerHTML = "Password must be have at least one Digit number";
            document.getElementById("demo").style.color="Red";
            return false;
        }
        if(pass.search(/[!@#$%^&*]/) < 0){
            document.getElementById("demo").innerHTML = "Password must be have at least one Special char";
            document.getElementById("demo").style.color="Red";
            return false;
        }
        
    }



</script>

</html>