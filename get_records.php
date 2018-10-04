<?php 


define('DB_SERVER','localhost');
define('DB_USER','id7265264_dhvtsuojt');
define('DB_PASS' ,'chuckiedelmundoten');
define('DB_NAME', 'id7265264_dbojt');

// $con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

$conn = new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

// if (mysqli_connect_errno())
// {
//  echo "Failed to connect to MySQL: " . mysqli_connect_error();
// }

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM tbl_dtr";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    // Output data
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["date"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

 ?>