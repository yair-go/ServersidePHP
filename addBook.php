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
$book_name = $_REQUEST["book_name"];
$book_price = $_REQUEST["book_price"];

$sql = "INSERT INTO `books_tbl`( `book_name`, `book_price`) VALUES (\"$book_name\",
\"$book_price\")";
if ($conn->query($sql) === TRUE) {
 echo "New record created successfully";
} else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>