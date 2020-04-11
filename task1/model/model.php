<?php

class Model
{
	function data($conn,$empid)
	{
		$sql="SELECT * FROM users WHERE empid='".$empid."'";
		$result=mysqli_query($conn,$sql);
		$fetch_data=mysqli_fetch_all($result,MYSQLI_ASSOC);
		return $fetch_data;
	}
}
?>