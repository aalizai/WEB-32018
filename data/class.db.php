<?php 

class db{
	private $host ="localhost";
	private $usr ="root";
	private $pass="root";
	private $db ="cs_forum";
	public $con ="";
	
	function __construct(){
		
		$connection = mysqli_connect($this->host, $this->usr, $this->pass, $this->db);
		if (!$connection) {
			echo "Your connection has been not established:".mysqli_error($connection);
		} else{
			$this->con = $connection;
			//echo "connection exist";
		}
		
	}
	
	
}
//new db();
?>