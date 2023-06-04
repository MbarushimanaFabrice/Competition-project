<?php
include_once "connection.php";
session_start();
$dbuser_name=$_SESSION['Username'];
if(isset($dbuser_name)){
 
$select = mysqli_query($conn, "SELECT * FROM `admin` WHERE username LIKE '%$dbuser_name%'");
$row = mysqli_fetch_array($select);
$Username = $row['Username'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Dashboard</title>
	<link rel="stylesheet" href="../css/admin_home_page.css?v=1.1">
</head>

<body>
	<div class="navigation">
		<nav>
			<ul>
				<li class="active"><a href="../../index.html">Home</a></li>
				<li><a href="../About.php">About Us</a></li>
				<li><a href="../booking.php">Our Rooms</a></li>
				<li><a href="../contact.php">Contact Us</a></li>
				<li><a href="supply/sup_home_page.php">Supplier</a></li>
				<li><a href="#">Admin</a></li>
				<li><a href="admin_logout.php">Logout</a></li>
			</ul>
		</nav>
	</div>
	<div class="container">
		<div class="parent">
			<div class="text">
				<h2>Welcome <br><span style="text-transform: uppercase;"><?php echo $Username ?></span> </h2>
				<p>Naw you can Add product in you need <br> to be supplyed by supliers,view all edit all product<br> you
					add,view all suppliers and accept or reject Application</p>

			</div>
			<div class="options">
				<a href="Admin/manage_product.php"> <button>Manage Product</button></a>
				<a href="Admin/manage_Applications.php"> <button>Applications</button><br></a>
				<a href="Admin/manage_suppliers.php"> <button>Manage Suppliers</button></a>
				<a href="Admin/accept_rejected.php"> <button>Accepted And Rejected</button></a>
			</div>
		</div>

	</div>
</body>
</html>
 <?php
}else{
	header("location:admin_login.php");
}
 ?>