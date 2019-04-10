<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Daftar Transaksi</title>
</head>

<body>

<h1>Transaksi</h1>
<hr />

<a href="form.php">Create New</a>
<br /> <br />

<table border="1" cellpadding="5" cellspacing="0">
<tr>
	<th>No</th>
	<th>Item</th>
	<th>Count</th>
	<th>Price</th>
	<th>Total</th>
	<th>Action</th>
</tr>

<?php
include "database.php";
					
$sql = "SELECT id,
				item,
				count,
				price,
				paid
		FROM transaksi
		WHERE deleted_at IS NULL
		ORDER BY paid ASC, id ASC";
$result = $conn->query($sql);

$no = 1;
while($row = $result->fetch_assoc()) 
{
	echo "<tr>";
	echo "<td>" . $no . "</td>";
	echo "<td>" . $row["item"] . "</td>";
	echo "<td>" . $row["count"] . "</td>";
	echo "<td>" . number_format($row["price"]) . "</td>";
	echo "<td>" . number_format((int)$row["count"] * (int)$row["price"]) . "</td>";
	
	if($row["paid"] == 1)
	{
		echo "<td>&nbsp;</td>";
	}
	else
	{
		echo "<td>";
		echo "<a href='pay.php?id=".$row["id"]."'>Pay</a> &nbsp;&nbsp;|&nbsp;&nbsp;";
		echo "<a href='form.php?id=".$row["id"]."'>Update</a> &nbsp;&nbsp;|&nbsp;&nbsp;";
		echo "<a href='delete.php?id=".$row["id"]."'>Delete</a>";
		echo "</td>";
	}
	
	echo "</tr>";
	
	$no++;
}

?>

</table>
</body>
</html>
