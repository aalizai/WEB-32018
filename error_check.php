<?php 
error_reporting(0);
$host= 'localhoste';
$user="";
$password="";
//$database="";
try{
	if (!mysqli_connect($host, $user, $password, $database)) {
		throw new Exception("Mysql error",10);
	    }
	echo "this is new code";
	
    }catch(Exception $ex){
    	 	echo "Code: ".$ex->getCode()."<br/>";
			echo "Message: ".$ex->getMessage()."<br/>";
			echo "In A file: ".$ex->getFile()."<br/>";
    }




?>