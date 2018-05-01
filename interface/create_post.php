
		<?php include'layout/header.php';''?>
		<form action="../data/class.post_curd.php" method="post">
			<table>
				<tr>
					<td>Post Title</td>
					<td><input type="text" name="title"/> </td>
				</tr>
				<tr>
					<td>Post Body</td>
					<td><textarea name="body"></textarea> </td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="post" value="Create Post"/> </td>
				</tr>
			</table>
		</form>
		<?php include 'layout/footer.php';?>
	