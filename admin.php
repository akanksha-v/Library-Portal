<html>
<head>
    <title>Admin</title>
</head>

<body>

<?php

if(isset($_POST["submit"])){
    $servername = "localhost";
    $username = "akanksha";
    $password = "Prakhar2105";
    $dbname = "info";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $id=$_POST["book-id"];
    $name=$_POST["book-name"];

    $sql = "INSERT INTO requests
    SELECT * FROM prakhar WHERE book-id ='$id'";

if ($conn->query($sql) === TRUE)
{
    $del="DELETE FROM prakhar WHERE book-id ='$id';"
   if($conn->query($del)===TRUE)
   {
    $sqll = "SELECT * FROM requests";

    echo "<table>";
    echo "For check-in:<br/>"
    echo "<tr><th>Book-id</th><th>Book-name</th></tr>";
    
    $result = mysqli_query($conn,$sqll);
    
    if($result)
    {while($row = mysqli_fetch_array($result)) {
        $id2 = $row['book-id'];
        $name2 = $row['book-name'];
        echo "<tr><td style='width: 200px;'>".$id2."</td><td style='width: 600px;'>".$name2."</td></tr>";
    } 
    echo "</table>";
}

}

}
?>
</body>
</html>