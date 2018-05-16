<?php 
/*
$xml_file='addressbook.xml';
$xml = new DOMDocument();
$xml_data=$xml->load($xml_file);
//echo $xml->saveXML();
$data = $xml->documentElement;
//echo "<pre>";
//print_r($data);
foreach ($data->childNodes as $child) {
	echo $child->nodeName .":". $child->nodeValue."<br />";
}
 * 
 */
 //$xml = new DOMDocument();
 /*
 $xml->formatOutput =TRUE;
 $contacts=$xml->createElement('Contacts');
 $contact=$xml->createElement('contact');
 $name=$xml->createElement('name','Ahmad');
 $lname=$xml->createElement('last_name','Ahmadi');
 $tel=$xml->createElement('telephone','078645355445');
 $email=$xml->createElement('email','ahmadi@gmail.com');
$xml->appendChild($contacts);
$contacts->appendChild($contact);
$contact->appendChild($name);
$contact->appendChild($tel);
$contact->appendChild($email);
$xml->save('contactlist.xml');
  * 
  */
include '../data/class.post_curd.php';
$po = new post_curd();
$pos = $po->list_posts();
//print_r($pos);
$xml = new DOMDocument();
$xml->formatOutput =TRUE;