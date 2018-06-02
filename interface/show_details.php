<?php

$id = $_GET['id'];
include_once"../data/class.post_curd.php";
//include'layout/header.php';
$obj= new post_curd();
$post =$obj->get_post($id);  
?>
<h1><?php //echo $post['title'];?></h1>
<p> <?php echo $post['body'];
	
	//include 'layout/footer.php';
	?></p>