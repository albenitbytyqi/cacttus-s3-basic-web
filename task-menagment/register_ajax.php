<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
    <center>
        <h4>Task Menagment Tool - REGISTER</h4>
        <form method="POST" action="/cacttus-s3-basic-web/task-menagment/register_api.php">
            <label>Full Name:</label><br>
            <input id="id_fullname" type="text" name="full_name"/><br>
            <label>Email:</label><br>
            <input id="id_email" type="email" name="email"/><br>
            <label >Password:</label><br>
            <p id="demo">a</p> 
            <input id="id_password" type="password" name="password"/>
            <br><br>
            <input type="submit" value="Register"/>
        </form>
        <br>
        <a href="/cacttus-s3-basic-web/task-menagment/login_ajax.php">Log In</a>
    </center>

</body>
<script>
    check = function(validate){
        var pass = document.getElementById("id_password").value;
        if(pass.length < 8){
            document.getElementById("demo").innerHTML = "Password Length Must Be 8 Char";
            document.getElementById("demo").style.color="Red";
            return("Too_Short");
        }
    }
    // function register(){
    //    const fullname = $("#id_fullname").val();
    //    const email = $("#id_email").val();
    //    const password = $("#id_password").val();

    //    const apiEndpoint = "http://localhost/cacttus-s3-basic-web/task-menagment/register_api.php" 

    //    $.post(apiEndpoint,{
    //        'full_name' : fullname,
    //        'email' : email,
    //        'password' : password
    //    },function(response){
    //         if(response.success == false){
    //             alert(response.message);
    //         }else{
    //             alert(response.message);
    //         }
    //    });

    // }


</script>

</html>