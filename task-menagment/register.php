<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <center>
        <h4>Task Menagment Tool - REGISTER</h4>
        <form method="POST" action="/cacttus-s3-basic-web/task-menagment/register_logic.php">
            <label>Full Name:</label><br>
            <input type="text" name="full_name"/><br>
            <label>Email:</label><br>
            <input type="email" name="email"/><br>
            <label>Password:</label><br>
            <input type="password" name="password"/>
            <br><br>
            <button>Register</button>
        </form>
        <br>
        <a href="/cacttus-s3-basic-web/task-menagment/login.php">Log In</a>
    </center>
</body>
</html>