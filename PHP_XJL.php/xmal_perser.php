<?php
class xml_parser{
	function xml_read($file){
		
		$xml_file = simplexml_load_file($file);
		//foreach ($xml_file->children() as $value) {
		//	echo  $value->getName() .":".$value."<br/>";
		//}
		echo "<pre>";
		//print_r ($xml_file);
		echo $xml_file->contact[0]->name;
	}
}

$obj = new xml_parser();
$obj->xml_read("note.xml");
