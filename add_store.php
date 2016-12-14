<?php
header('Content-Type: text/html; charset=utf-8');
$servername = "localhost";
$username = "yair";
$password = "a12345";
$dbname = "ygoldsht_bookStore";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
mysql_query("SET NAMES 'utf8'", $conn);
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
$store_name = $_REQUEST["store_name"];
$store_tel = $_REQUEST["store_tel"];
$store_address = $_REQUEST["store_address"];

$sql = "INSERT INTO `ygoldsht_bookStore`.`store_tbl` (`store_id`, `store_name`,
`store_tel`, `store_address`) VALUES (NULL, \"$store_name\",
\"$store_tel\", \"$store_address\")";
if ($conn->query($sql) === TRUE) {
 echo "New record created successfully";
} else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
