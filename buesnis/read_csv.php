<?php


function read_csv($file){
	$f = fopen($file, 'r');
	$data = fgetcsv($f);
	if(!empty($data))
	return $data;
}

function read_csva($file){
	$f = fopen($file, 'r');
	while (!feof($f)) {
		$data[] = fgetcsv($f);
	}
	
	return $data;
}
//db: contactlist
//table: contacts
//connection 
//function to insert data in table 
$contacts = read_csva('test.csv');
foreach ($contacts as $contact) {
	echo "Name: ".$contact[0]." ;"."Last Name:".$contact[1]."<br />";
}