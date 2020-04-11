<html>
<head>
    <title>check-out</title>
</head>
<style> 
button:hover{
       transform:scale(1.10);
       cursor:pointer;
   }</style>
<body>
<p>Choose books You want to check-out :<br/><br/></p>

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

$sql = "SELECT * FROM `booklist`";
$result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0)
   
   {while($row = mysqli_fetch_row($result))
 {
    echo "<tr><td style='width: 150px; text-align:center;' >".$row[0]."</td><td style='width: 300px;text-align:center;'>".$row[1]."</td></tr>";
    }}
    
    echo "</table>";


echo "<form action='admin.php' method='POST'>";
echo   "Type the name of book u wanna check-in:<br/><br/>";
echo  "Book-id:&nbsp;<input type='number' name='book-id' required><br/>";
echo  "Book-name:&nbsp;<input type='text' name='book-name' required><br/><br/>";
echo  "<button name='submit'>Submit the request</button>";
echo  "</form>"; 


if(isset($_POST["register"]))
{$id=$_POST["book-id"];
$name=$_POST["book-name"];

$sql = "INSERT INTO `for check-out`
SELECT * FROM `prakhar` WHERE `book-id` ='$id'";

if ($conn->query($sql) === TRUE)
{
$del="DELETE FROM `prakhar` WHERE `book-id` ='$id'";
if ($conn->query($del) === TRUE) {
    echo "<script type= 'text/javascript'>alert('Request sent!');</script>";
    } else {
    echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
    }}
}
?>

</body>    
</html>