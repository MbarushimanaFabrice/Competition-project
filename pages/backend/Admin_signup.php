
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

	</style>

	<title>signup</title>
</head>
<a href="../../index.html"><img src="../images/back.png" alt="logout"></a>

<body>
<form action="Ad_insert.php" method="post" id="myform">
			<div class="join">
			<h3>Create Account As Admin</h3>
 				<input type="text" placeholder="Enter your Names" required name="names"><br>
 					<input type="email" placeholder="Enter Email" required name="Email"><br>
					<input type="text" placeholder="Enter Username" required name="username"><br>
					<input type="password" placeholder="Enter Password" required name="password"><br>
					<!-- <a id="have_acount" class="have_acount" href="#">Login</a> -->
					<button type="submit" name="Continue" id="allow">Create account</button>
					<button id="have_acount" class="have_acount"><a href="admin_login.php">I have coount</a></button>
			  </div>
		</form>
	
</body>
</html>