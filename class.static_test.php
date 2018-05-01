<?php

class static_test{
	
	public static $a = 34;
	public $b= 10;
	function __construct(){
	//	self::$a = self::$a +5;
		//$this->b = $this->b+4;
		//echo "This is the value of a:".self::$a."<br/ >";
		//echo "This is the value of b:".$this->b."<br/ >";
	}
	
	public static function p(){
		
		echo "This is the static variavle:".self::$a;
	}
	
}
$obj1 = new static_test();
//$obj2 = new static_test();
//static_test::$a = 56;
//static_test::p();

$obj2= $obj1;
$obj3= clone $obj1;
$obj2->b = 20;
$obj3->b = 50;
print_r($obj1->b); echo "<br />";
print_r($obj2->b);echo "<br />";
print_r($obj3->b);echo "<br />";

?>