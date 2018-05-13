<?php 
$contact = array(
'name'=>'Vakil Ahmad',
'last_name'=>'Rahmati',
'email'=>'ahmad@gmail.com',
'tel'=>'07967867778'

);
// $json_file = json_encode($contact);
 //echo $json_file;
// $file = fopen('json_data.json', 'w');
// fwrite($file, $json_file);
//$file = fopen('json_data.json', 'r');
//$data = fread($file, 1024);
//echo $data;
//$js_data = json_decode($data,true);
//echo$js_data['name'];
include '../data/class.post_curd.php';
$obj = new post_curd();
$posts = $obj->list_posts();
//print_r($posts);
$json_file = json_encode($posts);
$file = fopen('json_posts.json', 'w');
fwrite($file, $json_file);







