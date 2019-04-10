<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Update</title>
</head>

<body>
<?php
include "database.php";

$id 	= isset($_GET["id"]) ? $_GET["id"] : 0;
$item 	= "";
$count 	= "";
$price 	= "";
$title 	= "Insert New Transaction";

if($id)
{
	$sql = "SELECT item,
				count,
				price
		FROM transaksi
		WHERE id=".$_GET["id"];
	$result = $conn->query($sql);
	
	$row 	= $result->fetch_assoc();
	$item 	= $row["item"];
	$count 	= $row["count"];
	$price 	= $row["price"];
	$title 	= "Update Transaction";
}
?>

<h1><?php echo $title; ?></h1>
<hr />

<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$item 	= trim($_REQUEST['item']);
	$count 	= trim($_REQUEST['count']);
	$price 	= trim($_REQUEST['price']);
	
	if($item && $count && $price)
	{
		if($id)
		{
			$sql = "UPDATE transaksi 
					SET item='".$item."',
						count='".$count."',
						price='".$price."'
					WHERE id=".$id;
		}
		else
		{
			$sql = "INSERT INTO transaksi (item, count, price, create_date)
					VALUES ('".$item."', '".$count."', '".$price."', NOW())";
		}
		
		if ($conn->query($sql) === TRUE) {
			header("Location: index.php");
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
}
?>

<form action="" method="post">
<table cellpadding="5" cellspacing="0">
	<tr>
		<th>Item</th>
		<td><input type="text" name="item" value="<?php echo $item ?>" /></td>
	</tr>
	<tr>
		<th>Count</th>
		<td><input type="text" name="count" value="<?php echo $count ?>" /></td>
	</tr>
	<tr>
		<th>Price</th>
		<td><input type="text" name="price" value="<?php echo $price ?>" /></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="submit" value="Save" />&nbsp;&nbsp;&nbsp;<input type="reset" name="reset" value="Reset" />
	</tr>
</table>
</form>
</body>
</html>
