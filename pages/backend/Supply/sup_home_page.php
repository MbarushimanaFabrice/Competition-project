<?php
include_once "../connection.php";
session_start();
 $dbuser_name=$_SESSION['Username'];
 if(isset($dbuser_name)){

$select = mysqli_query($conn, "SELECT * FROM `supplier` WHERE username LIKE '%$dbuser_name%'");
$row = mysqli_fetch_array($select);
$Username = $row['Username'];
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Supply Dashboard</title>
	<link rel="stylesheet" href="../../css/admin_home_page.css?v=1.1">
</head>

<body>
	<div class="navigation">
		<nav>
			<ul>
				<li class="active"><a href="../../index.html">Home</a></li>
				<li><a href="../About.php">About Us</a></li>
				<li><a href="../booking.php">Our Rooms</a></li>
				<li><a href="../contact.php">Contact Us</a></li>
				<li><a href="sup_home_page.php">Supplier</a></li>
				<li><a href="#">Admin</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</nav>
	</div>
	<div class="container">
		<div class="parent">
			<div class="text">
				<h2>Welcome <br><span style="text-transform: uppercase;"><?php echo $Username ?></span> </h2>
				<p>Naw you can Apply for <br> for supplying product and also <br>view,if you your Application is accepted or jected</p>

			</div>
			<div class="options">
 				<a href="view_product_post.php"> <button>Products Post</button></a>
				<a href="accept_reject.php"> <button>Accepted And Rejected</button></a>
			</div>
		</div>

	</div>
</body>
</html>
<?php
 }else{
	header("location:../login.php");
 }

?>