<?php
include "database.php";

$id 	= $_GET["id"];
$sql 	= "UPDATE transaksi 
			SET deleted_at = NOW()
			WHERE id=".$id;

if ($conn->query($sql) === TRUE) {
	header("Location: index.php");
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
?>