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

$sql = "SELECT * FROM `books_tbl` WHERE 1";

$result = $conn->query($sql);

$data = array();

if ($result->num_rows > 0) {

 // output data of each row

 while ($row = $result->fetch_assoc()) {

 array_push($data,$row);
}

 echo json_encode(array('products' => $data));

} else {

 echo "0 results";

}

$conn->close();

?>