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
				<li><a href="sup_home_page.php">Supplier</a></li>
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
					<th>Client Name</th>
					<th>National Id</th>
					<th>Address</th>
					<th>Phone</th>
 					<!-- <th>Password</th> -->
					<th>Operation</th>

				</tr>
				<?php
				$select = mysqli_query($conn, "SELECT * FROM `supplier`");
				while ($row = mysqli_fetch_array($select)) {
					$sup_id = $row['sup_id'];
					$sup_name = $row['sup_name'];
					$national_id = $row['national_id'];
					$Address = $row['Address'];
					$Phone = $row['Phone'];
  					echo "
			 
			<tr>
				<td>$sup_id</td>
				<td>$sup_name</td>
				<td>$national_id</td>
				<td>$Address</td>
				<td>$Phone</td>
 				<td>
				<a href='update_sup.php?id=$sup_id''>Update  Info</a></td> 
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