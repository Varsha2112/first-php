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
        echo "emp_name: " . $row["emp_name"]. "emp_no: " . $row["emp_no"]. "dept:" . $row["dept"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
