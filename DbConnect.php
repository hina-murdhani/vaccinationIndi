<?php
	
	//$conn=mysqli_connect("localhost","root","","gtuppandroid");
	
class DbConnect{
		private $con;
		public function__construct(){
		}
		public function connect(){
			include_once dirname(__FILE__).'/Constants.php';  
			$this->con=new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
			
			if(mysqli_connect_errno()){
				echo"Failed to connect with database".mysqli_connect_err();
			}
			return $this->con;
		}
	}
?>