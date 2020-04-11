<?php
	include'./controller/controller.php';
	$obj=new controller();
	$obj->submit();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<div id="wrapper">
		<center><form action="" method="post">
			<label>Emp ID:<input type="text" name="empid"></label><br>
			<div>
				<input type="submit" name="submit" value="Submit">
			</div>
		</form></center>
	</div>
</body>
</html>