<?php 
	require_once('db.php');


	function validate($username, $buying_price){
		$con = getConnection();
		$sql= "select * from products where name='{$username}' and buying_price='{$buying_price}'";
		$result = mysqli_query($con, $sql);
		$products = mysqli_fetch_assoc($result);

		if($products){
			return true;
		}else{
			return false;
		}
	}

	function addUser($products){
		$con = getConnection();
		$sql= "insert into products values('','{$products['name']}', '{$products['buying_price']}', '{$products['email']}', '{$products['type']}')";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getAllUsers(){
		$con = getConnection();
		$sql= "select * from products";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getUsersById($id){
		$con = getConnection();
		$sql= "select * from products where id={$id}";
		$result = mysqli_query($con, $sql);
		$products = mysqli_fetch_assoc($result);
		return $products;
	}

	function editUser($products){
		$con = getConnection();
		$sql= "update products set name='{$products['username']}', buying_price='{$products['buying_price']}', email='{$products['email']}' where id={$products['id']}";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteUser($id){
		$con = getConnection();
		$sql= "delete from products where id={$id}";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>