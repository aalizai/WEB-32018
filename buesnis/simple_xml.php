<?php 
/* This file is for reading and writing and xml Document through SimpleXML parser
 * We have Different scenario executed in this tutorial(file)
 */
 /*****************************************************************/
 //first scenario is to read the Xml file called addressbook.xml 
 	
 	$xml_file = 'addressbook.xml';
	// first we need to load the xml file 
	$xml_data = simplexml_load_file($xml_file);
	// we can save the fatched file as XML data sets by
	//echo $xml_data->asXML();
	//or we can iterate to every child trough the children function 
	foreach ($xml_data->children() as $child) {
		//now we can get the properties of child nodes as the name and the value
		echo $child->getName().":".$child; 
	}
/*****************************************************************/
//second scenario is to write a XML file or create a XML file	
	//first we need to create a root element with SimpleXMLElement() function 
	$xml = new SimpleXMLElement('<?xml version="1.0" encoding="utf-8"?><contacts></contacts>');
	//add child element contact to the contacts element 
	$contact=$xml->addChild('contact');
	// add a child element name to the contatct element 
	$contact->addChild('name','Ahmad');
	// add a child element lastname to the contact element
	$contact->addChild('last_name','Ahmadi');
	// save the data as xml formated data 
	$data= $xml->asXML();
	// create or open a file named contact.xml
	$file = fopen('contacts.xml', 'w');
	//write xml formated data to desired file
	fwrite($file, $data);
/*****************************************************************/
//third scenario is to get data from database and save it a file 
//include the crud file 
	include 'data/class.post_curd.php';
// create an object of crud class for posts 
	$obj= new post_curd();
// call the list_posts function to retrive all posts  
	$posts=$obj->list_posts();
	
// iterate to every post 
	foreach ($posts as $post) {
		// add child element for every post 
		$po = $xml->addChild('posts');
		// add a child emlement for a title of a post with in the post element
		$po->addChild('Title',$post['title']);
		// add a child emlement for the body of a post with in the post element
		$po->addChild('body',$post['body']);
	}
	// save the desired data as xml format
	$data= $xml->asXML();
	// open or create file called forum.xml 
	$file = fopen('forum.xml', 'w');
	// write the data in the forum.xml file 
	fwrite($file, $data);
?>
