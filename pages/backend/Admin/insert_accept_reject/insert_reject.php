<?php
include_once "../../connection.php";
$app_id=$_GET['app_id'];
$select = mysqli_query($conn, "SELECT * FROM `application` WHERE app_id='$app_id' ");
$row = mysqli_fetch_array($select);
		$app_id = $row['app_id'];
		$sup_id = $row['sup_id'];
		$pro_id = $row['pro_id'];
		$file = $row['file'];
		$status='Rejected';
		$insert=mysqli_query($conn,"INSERT INTO `accept_reject`VALUES('','$app_id','$file','$sup_id','$pro_id','$status')");
		if($insert){
			header("location:../accept_rejected.php");
		}else{
			echo "not";
		}
?>