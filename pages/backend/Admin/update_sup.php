<?php
include_once "../connection.php";
$id=$_GET['id'];
// fetch data from database

 				$select = mysqli_query($conn, "SELECT * FROM `supplier` WHERE sup_id='$id'");
				$row = mysqli_fetch_array($select);
 					$sup_name = $row['sup_name'];
					$national_id = $row['national_id'];
					$Address = $row['Address'];
					$Phone = $row['Phone'];
					$Username=$row['Username'];


					if(isset($_POST['Continue'])){
						// get data from login form
						$names=$_POST['names'];
						$nationalid=$_POST['nationalid'];
						$address=$_POST['address'];
						$phone=$_POST['phone'];
						$Username=$_POST['Username'];
					  $update=mysqli_query($conn,"UPDATE `supplier` SET sup_name='$names',national_id='$nationalid',Address='$address',phone='$Phone',Username='$Username' WHERE sup_id='$id'");
					  if($update){
						header("location:manage_suppliers.php");
					  }else{
						echo "something wrong";
					  }
					}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		@import url('../../css/longin_signup.css');
		body>a{
	transition: 1s ease-in-out;
	position: absolute;
	left: 21px;
	border-radius: 50%;
	width: 67px;
	padding: 6px;font-size: 25px;
 	cursor: pointer;
	background: #e9e9e9c0;
  	box-shadow: #63cdedc9 0px 9px 29px 0px;
}
a :hover{
	transition: 1s ease-in-out;
	 
}
a img{
      margin: 0px 11px;
    }

	</style>

	</style>

	<title>signup</title>
</head>
<a href="manage_suppliers.php"><img src="../../images/back.png" alt="logout"></a>

<body>
<form action="" method="post" id="myform">
			<div class="join">
 				<h3>Update suplyer info</h3>
 				<input type="text" placeholder="Enter your Names" value="<?php echo $sup_name ?>" required name="names"><br>
					<input type="number" placeholder="Enter national Id" value="<?php echo $national_id ?>" required name="nationalid"><br>
					<input type="text" placeholder="Enter Your Address " value="<?php echo $Address ?> " required name="address"><br>
					<input type="number" placeholder="Enter Phone" required value="<?php echo $Phone ?>" name="phone"><br>
					<input type="text" placeholder="Username" required value="<?php echo $Username ?>" name="Username"><br>
   					<button type="submit" name="Continue" id="allow">Update</button>
 			  </div>
		</form>
	
</body>
</html>