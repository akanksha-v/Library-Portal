<html>
    <head>
        <title>Register</title>
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
        top:25%;
        padding:4px;

    }
    #login{
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
    <div id="heading">REGISTER YOURSELF</div>
<form action="registration.php" method="post">
   Full-Name:&nbsp;<input type="text" name="name" required><br/>
   Enroll-No:&nbsp;<input type="number" name="enroll-no" required><br/>
   E-Mail:&nbsp;<input type="email" name="email"><br/>
   Set-password:&nbsp;<input type="password" name="password" required><br/>
   <button name="register">Register</button><br/></form>
   <div id="login">Already registered? &nbsp; &nbsp;<a href="login.php"><button name="login">Login</button></a><br/></div>


    <?php

if(isset($_POST["register"])){
    require "connection.php";
    // $servername = "localhost";
    // $username = "akanksha";
    // $password = "Prakhar2105";
    // $dbname = "info";
    
    // // Create connection
    // $conn = new mysqli($servername, $username, $password, $dbname);

    // // Check connection
    // if ($conn->connect_error) {
    // die("Connection failed: " . $conn->connect_error);
    // }
    $enroll=$_POST["enroll-no"];
    $name=$_POST["name"];
    $email=$_POST["email"];
    $password=$_POST["password"];

    $sql = "INSERT INTO students(`enroll`,`name`,`email`,`password`)
    VALUES ('$enroll','$name','$email','$password')";
    
    if ($conn->query($sql) === TRUE) {
    echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
    } else {
    echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
    }
    
    $conn->close();
    }
    ?>   
</body>
</html>