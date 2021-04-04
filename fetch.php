<?php

//fetch.php

$connect = new PDO('mysql:host=localhost;dbname=angular_datatable', 'root', 'test');

$query = "SELECT * FROM tbl_customer ORDER BY CustomerID DESC";

$statement = $connect->prepare($query);

$statement->execute();

while($row = $statement->fetch(PDO::FETCH_ASSOC))
{
	$data[] = $row;
}

echo json_encode($data);

?>