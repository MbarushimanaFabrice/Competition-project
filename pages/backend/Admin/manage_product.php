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
<body>
	<div class="navigation">
		<nav>
			<ul>
				<li class="active"><a href="../../../index.html">Home</a></li>
				<li><a href="../../About.html">About Us</a></li>
				<li><a href="../../booking.html">Our Rooms</a></li>
				<li><a href="../../contact.html">Contact Us</a></li>
				<li><a href="../supply/sup_home_page.php">Supplier</a></li>
				<li><a href="../admin_home_page.php">Admin</a></li>
			</ul>
		</nav>	
</div>
<div class="container">
	<div class="parents">
		<form action="../insert_product.php" method="post"><br><br><br>
			<label for="Productname">Product Name:</label><br>
			<input type="text" name="name" placeholder="Enter product Name" required><br>
			<label for="ProductQuality">Product Quality:</label><br>
			<input type="text" placeholder="Add quality in Kilogram" name="quality"><br>
			<button name="product" required>Add Product</button>
		</form>
		<div class="option">
			
			<a href=""> <button>Manage Product</button></a>
			<a href="manage_Applications.php"> <button>Applications</button></a>
			<a href="manage_suppliers.php"> <button>Manage Suppliers</button></a>
			<a href="accept_rejected.php"> <button>Accepted And Rejected</button></a>
		<table>
			<tr>
				<th>index</th>
				<th>Product Name</th>
				<th>Product Quality</th>
 
			</tr>    
			<?php
		$select=mysqli_query($conn,"SELECT * FROM `product`");
 		while($row=mysqli_fetch_array($select)){
			 $pro_id= $row['pro_id'];
			 $pro_name= $row['pro_Name'];
			 $Quality= $row['Quality'];
			 echo "
			 
			<tr>
				<td>$pro_id</td>
				<td>$pro_name</td>
				<td>$Quality</td>
				
				 
			</tr>
			 
			 ";

		}
	 
		?>


		

		</table>	
	</div>
	</div>
</div>
</body>
</html>

<?php
}else{
	header("location:../admin_login.php");
}

?>