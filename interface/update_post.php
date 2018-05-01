
		<?php 
		include_once '../data/class.post_curd.php';
		$id = $_GET['id'];
		$obj = new post_curd();
		$post = $obj->get_post($id);
		//print_r($post);
		 include'layout/header.php';
		?>
		<form action="../data/update.php?id=<?php echo $id; ?>" method="post">
			<table>
				<tr>
					<td>Post Title</td>
					<td><input type="text" value="<?php echo $post['title']; ?>" name="title"/> </td>
				</tr>
				<tr>
					<td>Post Body</td>
					<td><textarea name="body"><?php echo $post['body']; ?> </textarea> </td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="update" value="Update Post"/> </td>
				</tr>
			</table>
		</form>
	<?php include 'layout/footer.php';?>