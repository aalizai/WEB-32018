<?php
include_once "class.db.php";
class post_curd extends db{
	
	function create_post(){
		$title = $_POST['title'];
		$body = $_POST['body'];
		$query = "INSERT INTO `posts`(`title`,`body`) VALUES ('$title','$body')";
		$result = mysqli_query($this->con, $query);
		if (!$result) {
			echo "You have problem with your SQL Query:".mysqli_error($this->con);
		}
	}
	function list_posts(){
		$query = "Select * from posts";
		$result = mysqli_query($this->con, $query);
		if (!$result) {
			echo "You have problem with your SQL Query:".mysqli_error($this->con);
		}
		while ($post = mysqli_fetch_assoc($result)) {
			$data[]=$post;
		}
		return $data;
	}
	function get_post($p_id){
	    $query = "Select * from posts where `p_id`= '$p_id'";
		$result = mysqli_query($this->con, $query);
		if (!$result) {
			echo "You have problem with your SQL Query:".mysqli_error($this->con);
		}
		$post = mysqli_fetch_assoc($result);
		return $post;
	}
	function update_post($id,$data){
		$title = $data['title'];
		$body= $data['body'];
		$query = "update `posts` set `title`= '$title',`body`= '$body' where `p_id`=$id"; 
		$result = mysqli_query($this->con, $query);
		if (!$result) {
			echo "You have problem with your SQL Query:".mysqli_error($this->con);
		}
	}
	function delete_post($id){
		$query = "delete from `posts` where `p_id`=$id"; 
		$result = mysqli_query($this->con, $query);
		if (!$result) {
			echo "You have problem with your SQL Query:".mysqli_error($this->con);
		}
	}
}
//$post = new post_curd();
//$post->create_post();
//echo "<pre/>";
//print_r($post->list_posts());
//print_r($post->get_post(2));
?>