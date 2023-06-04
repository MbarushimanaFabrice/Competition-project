<?php
include_once "../connection.php";
session_start();
$dbuser_name=$_SESSION['Username'];
if(isset($dbuser_name)){


?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		@import url(../../css/admin_home_page.css?v=1.1);
	</style>
	<title>Manage products</title>
</head>
<style>
	.option {
		width: 100%;
	}
</style>

<body>
	<div class="navigation">
		<nav>
			<ul>
				<li class="active"><a href="../../index.html">Home</a></li>
				<li><a href="../../About.html">About Us</a></li>
				<li><a href="../../booking.html">Our Rooms</a></li>
				<li><a href="../../contact.html">Contact Us</a></li>
				<li><a href="../Supply/sup_home_page.php">Supplier</a></li>
				<li><a href="../admin_home_page.php">Admin</a></li>
			</ul>
		</nav>
	</div>
	<div class="container">

		<div class="option newoption">

			<a href="manage_product.php"> <button>Manage Product</button></a>
			<a href="manage_Applications.php"> <button>Applications</button></a>
			<a href="manage_suppliers.php"> <button>Manage Suppliers</button></a>
			<a href="accept_rejected.php"> <button>Accepted And Rejected</button></a>
			<table>
				<tr>
					<th>index</th>
					<th>Application File</th>
					<th>Supply Id</th>
					<th>Product ID</th>
 					<!-- <th>Password</th> -->
					<th>Accepted Or Rejected</th>

				</tr>
				<?php
	$select = mysqli_query($conn, "SELECT * FROM `application`");
	while ($row = mysqli_fetch_array($select)) {
		$app_id = $row['app_id'];
		$sup_id = $row['sup_id'];
		$pro_id = $row['pro_id'];
		$file = $row['file'];
		  echo "
 
<tr>
	<td>$app_id</td>
	<td><a href='display_pdf.php?file=$file'>$file</a></td>
	<td>$sup_id</td>
	<td>$pro_id</td>
	
 
	<td>
	<a href='insert_accept_reject/insert_accept.php?app_id=$app_id'>Accept</a>
	<a href='insert_accept_reject/insert_reject.php?app_id=$app_id'>Reject</a>
	</td>	
</tr>
 
 ";
	}
	?>
	</table>
		</div>
	</div>
</body>

</html>
<?php
}else{
	header("location:../admin_login.php");
}

?>