<?php
	if(isset($_POST['stname']) || isset($_POST['streg']) || isset($_POST['stroll'])){
		$ins_name = $_POST['stname'];
		$ins_reg = $_POST['streg'];
		$ins_roll = $_POST['stroll'];
	
	$conn = mysqli_connect("localhost","root","","nimni") or die("does not connected to data base");
	$sql = "INSERT INTO samy(stname,streg,stroll) VALUES('{$ins_name}','{$ins_reg}','{$ins_roll}')";
	$insert = mysqli_query($conn,$sql) or die("sql error");
	mysqli_close($conn);
	}
?>
<DOCTYPE html>
<html>
<head>
	<title>
		document
	</title>
</head>
<body>
	<?php
		$conn = mysqli_connect("localhost","root","","nimni") or die("does not connected to data base");
		$sqlr = "SELECT * FROM samy";
		$result = mysqli_query($conn,$sqlr) or die("sql error");
		if(mysqli_num_rows($result )>0){
	?>
		<table>
			<tr>
				<td>Name</td>
				<td>REG</td>
				<td>ROLL</td>
				<td>ID</td>
				<td>Operation<td>
			</tr>
			<?php
				while($row = mysqli_fetch_assoc($result)){
			?>
			<tr>
				<td><?php echo $row['sid'];?></td>
				<td><?php echo $row['stname'];?></td>
				<td><?php echo $row['streg'];?></td>
				<td><?php echo $row['stroll'];?></td>
				<td><button><a href="form.php">ADD</a></button></td>
				<td><button><a href="edit.php?id=<?php echo $row['sid'];?>">EDIT</a></button></td>
				<td><button><a href="delete.php?id=<?php echo $row['sid'];?>">Delete</a></button></td>
			</tr>
				<?php 
					}
				?>
			
		</table>
		<?php
			}
		?>

</body>
</html>