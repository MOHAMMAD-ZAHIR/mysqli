<DOCTYPE html>
<html>
<head>
	<title>
		zahir
	</title>
</head>
<body>
<?php
		$conn = mysqli_connect("localhost","root","","nimni") or die("does not connected to data base");
		$stu_id = $_GET['id'];
		$sqlr = "SELECT * FROM samy WHERE sid={$stu_id}";
		$result = mysqli_query($conn,$sqlr) or die("sql error");
		if(mysqli_num_rows($result )>0){
			while($row = mysqli_fetch_assoc($result)){
	?>
<h1> update data </h1>
	<form action="update.php" method="post">
		<table>
			</tr>
				<td>Name</td>
				<td><input type="text" name="stname" value="<?php echo $row['stname'];?>"></td>
				<input type="hidden" name="sid" value="<?php echo $row['sid'];?>"></td>
			</tr>
			
			<tr>
				<td>REG</td>
				<td><input type="number" name="streg" value="<?php echo $row['streg'];?>"></td>
			</tr>
			
			<tr>
				<td>ROLL</td>
				<td><input type="number" name="stroll" value="<?php echo $row['stroll'];?>"></td>
			</tr>
			
			<tr>
				<td><input type="submit"></td>
			</tr>
			
		</table>
	</form>
	<?php
			}
		}
	?>
</body>
</html>