<?php
include_once 'class.post_curd.php';
$post = new post_curd();
$id = $_GET['id'];
$data = array(
	'title'=>$_POST['title'],
	'body'=>$_POST['body']
);
$post->update_post($id,$data);


?>