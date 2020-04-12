<html>
<head>
    <title>Admin</title>
  <style>
   .hide{
       display: none;
   }
    .show{
        display:block;
    }
  .main-button{
        height:40px;
        width:180px;
        background-color: #f07474;
        color:white;
        font-size:18px;
        margin:20px;
  }
  button:hover{
       transform:scale(1.10);
       cursor:pointer;
   }
  </style>
</head>
<body>
<button onclick="showfunction()" class="main-button">Check-in requests</button><br/>

<div id="checkin" class="hide">
<?php
 require "connection.php";
// $servername = "localhost";
//     $username = "akanksha";
//     $password = "Prakhar2105";
//     $dbname = "info";
    
//     // Create connection
//     $conn = new mysqli($servername, $username, $password, $dbname);
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
//     }
echo "For check-in:<br/>";
echo "<table>";
echo "<tr><th>Book-id</th><th>Book-name</th></tr>";

$sql = "SELECT * FROM `for check-in`";
$result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0)
   
   {while($row = mysqli_fetch_row($result))
 {
    echo "<tr><td style='width: 150px; text-align:center;' >".$row[0]."</td><td style='width: 300px;text-align:center;'>".$row[1]."</td></tr>";
    }}
    
    echo "</table>";

    echo "<form action='admin.php' method='POST'>";
echo   "Type the book-id and name u wanna approve request for:<br/><br/>";
echo  "Book-id:<input type='number' name='book-id' required><br/>";
echo  "Book-name:<input type='text' name='book-name' required><br/>";
echo  "<button name='approve'>Approve</button>";
echo  "</form>"; 


if(isset($_POST["approve"]))
{$id=$_POST["book-id"];
$name=$_POST["book-name"];

$sql = "INSERT INTO `booklist`
SELECT * FROM `for check-in` WHERE `book-id` ='$id'";

if ($conn->query($sql) === TRUE)
{
$del="DELETE FROM `for check-in` WHERE `book-id` ='$id'";
if ($conn->query($del) === TRUE) {
    echo "<script type= 'text/javascript'>alert('Request approved!');</script>";
    } else {
    echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
    }}}


echo "<form action='admin.php' method='POST'>";
echo   "Type the book-id and name u wanna decline request for:<br/><br/>";
echo  "Book-id:<input type='number' name='book-id' required><br/>";
echo  "Book-name:<input type='text' name='book-name' required><br/>";
echo  "<button name='decline'>Decline</button>";
echo  "</form>"; 


if(isset($_POST["decline"]))
{$id=$_POST["book-id"];
$name=$_POST["book-name"];

$sql = "INSERT INTO `for check-in`
SELECT * FROM `prakhar` WHERE `book-id` ='$id'";

if ($conn->query($sql) === TRUE)
{
$del="DELETE FROM `for check-in` WHERE `book-id` ='$id'";
if ($conn->query($del) === TRUE) {
    echo "<script type= 'text/javascript'>alert('Request declined!');</script>";
    } else {
    echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
    }}}

?>
</div>


<button onclick="showfunction1()"class="main-button">Check-out requests</button><br/>
<div id="checkout" class="hide">
<?php

// $servername = "localhost";
//     $username = "akanksha";
//     $password = "Prakhar2105";
//     $dbname = "info";
    
//     // Create connection
//     $conn = new mysqli($servername, $username, $password, $dbname);
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
//     }
echo "For check-out:<br/>";
echo "<table>";
echo "<tr><th>Book-id</th><th>Book-name</th></tr>";

$sql = "SELECT * FROM `for check-out`";
$result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0)
   
   {while($row = mysqli_fetch_row($result))
 {
    echo "<tr><td style='width: 150px; text-align:center;' >".$row[0]."</td><td style='width: 300px;text-align:center;'>".$row[1]."</td></tr>";
    }}
    
    echo "</table>";
    


    echo "<form action='admin.php' method='POST'>";
    echo   "Type the book-id and name u wanna approve request for:<br/><br/>";
    echo  "Book-id:<input type='number' name='book-id' required><br/>";
    echo  "Book-name:<input type='text' name='book-name' required><br/>";
    echo  "<button name='approve1'>Approve</button>";
    echo  "</form>"; 
    
    
    if(isset($_POST["approve1"]))
    {$id=$_POST["book-id"];
    $name=$_POST["book-name"];
    
    $sql = "INSERT INTO `prakhar`
    SELECT * FROM `for check-out` WHERE `book-id` ='$id'";
    
    if ($conn->query($sql) === TRUE)
    {
    $del="DELETE FROM `for check-out` WHERE `book-id` ='$id'";
    if ($conn->query($del) === TRUE) {
        echo "<script type= 'text/javascript'>alert('Request approved!');</script>";
        } else {
        echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
        }}}
    
    
    
    echo "<form action='admin.php' method='POST'>";
    echo   "Type the book-id and name u wanna decline request for:<br/><br/>";
    echo  "Book-id:<input type='number' name='book-id' required><br/>";
    echo  "Book-name:<input type='text' name='book-name' required><br/>";
    echo  "<button name='decline1'>Decline</button>";
    echo  "</form>"; 
    
    
    if(isset($_POST["decline"]))
    {$id=$_POST["book-id"];
    $name=$_POST["book-name"];
    
    $sql = "INSERT INTO `booklist`
    SELECT * FROM `for check-out` WHERE `book-id` ='$id'";
    
    if ($conn->query($sql) === TRUE)
    {
    $del="DELETE FROM `for check-out` WHERE `book-id` ='$id'";
    if ($conn->query($del) === TRUE) {
        echo "<script type= 'text/javascript'>alert('Request declined!');</script>";
        } else {
        echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
        }}}
    
?>
</div>

<button onclick="showfunction2()"class="main-button">Modify Booklist</button><br/>
<div id="modify" class="hide">
<?php


echo "<form action='admin.php' method='POST'>";
echo   "Add books to booklist:<br/><br/>";
echo  "Book-id:<input type='number' name='book-id' required><br/>";
echo  "Book-name:<input type='text' name='book-name' required><br/>";
echo  "<button name='add'>Add</button>";
echo  "</form>"; 


if(isset($_POST["add"]))
{$id=$_POST["book-id"];
$name=$_POST["book-name"];

$sql = "INSERT INTO booklist(`book-id`,`book-name`)
VALUES ('$id','$name')";

if ($conn->query($sql) === TRUE) {
echo "<script type= 'text/javascript'>alert('New book added successfully!');</script>";
} else {
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
}

}

echo "<form action='admin.php' method='POST'>";
echo   "Remove books from booklist:<br/><br/>";
echo  "Book-id:<input type='number' name='book-id' required><br/>";
echo  "Book-name:<input type='text' name='book-name' required><br/>";
echo  "<button name='remove'>Remove</button>";
echo  "</form>"; 


if(isset($_POST["remove"]))
{$id=$_POST["book-id"];
$name=$_POST["book-name"];

$sql = "DELETE FROM booklist
WHERE `book-id`='$id'";

if ($conn->query($sql) === TRUE) {
echo "<script type= 'text/javascript'>alert('Book removed successfully!');</script>";
} else {
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
}

}

?>

</div>

<script>
      function showfunction(){
      document.getElementById('checkin').className="show";
      }
      function showfunction1(){
      document.getElementById('checkout').className="show";
      }
      function showfunction2(){
      document.getElementById('modify').className="show";
      }
</script>
</body>
</html>