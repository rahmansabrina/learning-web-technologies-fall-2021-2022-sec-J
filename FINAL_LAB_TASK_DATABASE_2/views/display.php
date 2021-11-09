<?php 

	require_once('../model/productModel.php');
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

	<center>	
	</center>

	<br>

	<table border="1" align="center">
		<tr>
			
			<th>NAME</th>
			<th>PROFIT</th>
			<th></th>
		</tr>

	<?php  
		$result = getAllUsers();
		while ($products = mysqli_fetch_assoc($result)) { 
	?>
		<tr>
			<td><?=$products['id']?></td>
			<td><?=$products['name']?></td>
			<td><?=$products['buying_price']?></td>
			<td><?=$products['selling_price']?></td>
			<td><?=$products['display']?></td>
			<td>
				<a href="edit.php?id=<?=$products['id']?>"> EDIT</a> | 
				<a href="delete.php?id=<?=$products['id']?>"> DELETE</a> 
			</td>
		</tr>
	<?php } ?>
	</table>
</body>
</html>