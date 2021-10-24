
<?php
		$stu_id= $_POST['sid'];
		$ins_name = $_POST['stname'];
		$ins_reg = $_POST['streg'];
		$ins_roll = $_POST['stroll'];
	
	$conn = mysqli_connect("localhost","root","","nimni") or die("does not connected to data base");
	//$sql = "UPDATE samy SET name ='{$up_name}'WHERE id ='{$up_id }'";
	
	$sql = "UPDATE samy SET stname = '$ins_name', streg='$ins_reg', stroll='$ins_roll' WHERE sid ='$stu_id'";
	
	$insert = mysqli_query($conn,$sql) or die("sql error");
	
	mysqli_close($conn);
?>