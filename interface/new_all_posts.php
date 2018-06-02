<html>
	<head>
		<script language="JavaScript" type="text/javascript">
			function post_detail(d){
				//alert("button has been clicked");
				var xtp = new XMLHttpRequest();
				xtp.onreadystatechange = function(){
					if(xtp.readyState ==4){
						//alert("your code is working");
						document.getElementById(d).innerHTML = xtp.responseText;
						
					}
				}
				xtp.open('GET','show_details.php?id='+d);
				xtp.send(null);
				
			}
		</script>
	</head>
<?php 
include"../data/class.post_curd.php";
$obj = new post_curd();
$posts = $obj->list_posts();
foreach ($posts as $post) {?>
	<h2><?php echo $post['title']?></h2>
	<div id="<?php echo $post['p_id']?>">
	<p> <?php echo substr($post['body'], 0,10)."...."?></p></div>
	<a href="update_post.php?id=<?php echo $post['p_id']?>"><button>Update Post</button></a>
	<a href="../data/delete_post.php?id=<?php echo $post['p_id']?>"><button>Delete Post</button></a>
       
    <button onclick="post_detail(<?php echo $post['p_id']?>)"> More Information </button>
	<?php 
}?>

</html>