<?php
	$stu_id = $_GET['id'];
	$conn = mysqli_connect("localhost","root","","nimni") or die("does not connected to data base");
	
	$sql = "DELETE FROM samy WHERE sid = '$stu_id'";
	
	$insert = mysqli_query($conn,$sql) or die("sql error");
	header("location:http://localhost/exam/index.php");

?>