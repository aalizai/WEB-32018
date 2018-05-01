<?php

class users{
	private $id=0;
	private $name="Ahmadullah";
	private $last_name="Ahmadi";
	function __construct($id,$n, $last_name){
		$this->id=$id;	
		$this->name =$n;
		$this->last_name= $last_name;
		
	}
	function print_all(){
		 echo "Name: ".$this->name."Last Nmae :".$this->last_name;
	}
	function index(){
		echo __CLASS__;
		echo" this class is properly working";
	}	
	
}

?>