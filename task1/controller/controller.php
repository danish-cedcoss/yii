<?php
include './config.php';
include './model/model.php';

class Controller{
	public $obj;

	function __construct()
	{
		$this->obj=new Model();
	}
	
	public function submit(){
		global $conn;
		$arr=array();
		
		if(isset($_POST['submit'])):
			$empid=$_POST['empid'];
			if($empid==""):
				echo "<center><span>Empid is required!!</span></center>";
			endif;
			$arr=$this->obj->data($conn,$empid);
			if(!empty($arr)):
				header('location: ./view/view.php');
			endif;	
		endif;
		
	}
} 



