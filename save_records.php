<?php  

// End Sample data
$_POST['date'] = '25-Sep-2018';
$_POST['time_in'] = '12:04 AM';
$_POST['time_out'] = '1:05 AM';
$_POST['comments'] = 'This is a test';
$_POST['hours_rend'] = '1';
$_POST['name'] = 'Test';
// End Sample data

$date = $_POST['date'];
$timein = $_POST['time_in'];
$timeout = $_POST['time_out'];
$comments = $_POST['comments'];
$hoursrend = $_POST['hours_rend'];
$name = $_POST['name'];

define('DB_SERVER','localhost');
define('DB_USER','id7265264_dhvtsuojt');
define('DB_PASS' ,'chuckiedelmundoten');
define('DB_NAME', 'id7265264_dbojt');

$conn = new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO tbl_dtr(`date`, `time_in`, `time_out`, `comments`, `hours_rend`, `name`)VALUES('$date', '$timein', '$timeout', '$comments', '$hoursrend', '$name');";

// echo $sql;
// $result = $conn->query($sql);

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


 ?>