<html>
<head>
    <title>check-in</title>
</head>

<body>
<p>Choose books You want to check-in :</p>

<?php

$servername = "localhost";
    $username = "akanksha";
    $password = "Prakhar2105";
    $dbname = "info";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

echo "<table>";
echo "<tr><th>Book-id</th><th>Book-name</th></tr>";

$sql = "SELECT * FROM `prakhar`";
$result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0)
   
   {while($row = mysqli_fetch_row($result))
 {
    echo "<tr><td style='width: 150px; text-align:center;' >".$row[0]."</td><td style='width: 300px;text-align:center;'>".$row[1]."</td></tr>";
    echo "connected";}}
    
    echo "</table>";


echo "<form action='admin.php' method='POST'>";
echo   "Type the name of book u wanna check-in:<br/>";
echo  "<input type='number' name='book-id' required><br/>";
echo  "<input type='text' name='book-name' required><br/>";
echo  "<button name='submit'>Submit the request</button>";
echo  "</form>"; 

?>

</body>    
</html>