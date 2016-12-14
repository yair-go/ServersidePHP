<?php

header('Content-Type: text/html; charset=utf-8');

$servername = "localhost";

$username = "yair";

$password = "a12345";

$dbname = "ygoldsht_bookStore";

$book_id = $_GET['book_id'];

// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

mysql_query("SET NAMES 'utf8'", $conn);

// Check connection

if ($conn->connect_error) {

 die("Connection failed: " . $conn->connect_error);

}

$cond = $book_id ? "book_id = " . $book_id : "1";

$sql = "SELECT * FROM `books_tbl` WHERE ". $cond;

$result = $conn->query($sql);

$data = array();

if ($result->num_rows > 0) {

 // output data of each row

 while ($row = $result->fetch_assoc()) {

 array_push($data,$row);
}

 echo json_encode(array('books' => $data));

} else {

 echo "0 results";

}

$conn->close();

?>