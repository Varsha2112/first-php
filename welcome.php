<?php
   include('session.php');
?>

<html">
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
      <h1>Welcome <?php echo $login_session; ?></h1> 
      <h2><a href = "logout.php">Sign Out</a></h2>
   </body>
   
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "id";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT emp_name, emp_no,dept FROM laptop";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "emp_name: " . $row["emp_name"]  . "emp_no: " . $row["emp_no"]   . "dept:" . $row["dept"]   . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>