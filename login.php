<html>
<head>
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Gotu&display=swap" rel="stylesheet">
    <style>
    body{
        text-align: center;
        margin:0px auto;
        font-family: 'Gotu', sans-serif;
        font-size:26px;
        color:purple;
    }
    #heading{
        position:relative;
        top:16%;
        color:seagreen;
        text-decoration: underline;
        font-size:40px;
        font-family:algerian;
    }
    form{position:relative;
        margin:4px;
        top:30%;
        padding:4px;

    }
    #register{
        position:relative;
        top:35%;
    }
    button{margin-top:15px;
     height:28px;
     width:90px;
     font-size:18px;
     color:salmon;
    }
    button:hover{
        transform:scale(1.2);
        cursor: pointer;
        background-color:salmon;
        color:white;
    }
    </style>
</head>
<body>
<div id="heading">LOGIN</div>
<form method="post" action="login.php">
Enrollment-no:&nbsp;<input type="number" name="enroll-no" required><br/>
Password:&nbsp;<input type="password" name="password" required><br/>
<button name="login">Log In</button><br/>
</form>
<div id="register"> Not register yet? &nbsp; &nbsp;<a href="registration.php"><button name="register">Register</button></a><br/><br/></div>

<?php

$connection= new mysqli("localhost", "akanksha","Prakhar2105","info");
    $enroll = $_POST["enroll-no"];
    $password = $_POST["password"];

 if(isset($_POST["enroll-no"], $_POST["password"])){
    

   $result = "SELECT enroll,password FROM students WHERE enroll='$enroll' AND password='$password'" ;

 $query = mysqli_query($connection,$result);
  
   if($query)
   { $row = mysqli_num_rows($query);
    if($row >= 1)
    {echo('<script>location.href="user.php"</script>');}
   }
   else
   {
       echo 'The username or password are incorrect!';
   }
}


?>


</body>
</html>