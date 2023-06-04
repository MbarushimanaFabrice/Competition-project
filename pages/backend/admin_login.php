<!-- swis contact -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		@import url('../css/longin_signup.css');
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

	<title>Login</title>
</head>
<body>
<a href="signup.php"><img src="../images/back.png" alt="logout"></a>

<form action="" method="post" id="myform">
			<div class="join">
				<img src="head.png" alt="">
				<h3>Login Now As Admin</h3>
			 
  					<input type="text" placeholder="Enter Username" required name="username"><br>
					<input type="password" placeholder="Enter Password" required name="password"><br>
					<!-- <a id="have_acount" class="have_acount" href="#">Login</a> -->
					<button id="have_acount" class="have_acount" name="login"> Login</button>
					<button type="submit" name="Continue" id="allow"><a href="Admin_signup.php">Create account</a></button>

			
			  </div>
		</form>
	
</body>
</html>


<?php
include_once("connection.php"); 
if(isset($_POST['login'])){
$user_name=$_POST['username'];
$password=$_POST['password'];
$select="SELECT Username,Password FROM `admin` WHERE  username='$user_name' and Password='$password'";
$query=mysqli_query($conn,$select);
$row=mysqli_fetch_array($query);
	// data from db
$dbuser_name=$row['Username'];
$dbpassword=$row['Password'];
// data from form
if($user_name==$dbuser_name && $password==$dbpassword){
	session_start();
	$_SESSION['Username']=$dbuser_name;
	header("location:admin_home_page.php");
}else{
	echo "<p>Wrong email or password</p>";
	echo "<h4>Wrong email or password</h4>";
 }

}

?>