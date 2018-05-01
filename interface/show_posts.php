<!DOCTYPE  html>
<html>
	<head>
		<title> All Posts</title>
	</head>
	<body>
		<?php 
		include_once"../data/class.post_curd.php";
		include'layout/header.php';
		$obj= new post_curd();
		$posts =$obj->list_posts();  
		
		foreach ($posts as $post) {
		?>
		
		
		
		
		<div class="row-fluid blog">
                                <div class="span4">
                                    <img src="http://localhost/Class_ex/interface/template/img/blog/blog-sm-3.jpg" alt="">
                                </div>
                                <div class="span8">
                                    <div class="date">
                                        <p class="day">02</p>
                                        <p class="month">Dec</p>
                                    </div>
                                    <h2>
                                        <a href="blog_details.html"><?php echo $post['title'];?></a>
                                    </h2>
                                    <p>
                                        By <a href="javascript:;">Vector Lab</a>
                                    </p>
                                    <p>
                                        <?php echo $post['body'];?>
                                    </p>
                                    <ul>
                                        <li><a href="javascript:;"><i class="icon-comments-alt"></i> 55 Comments</a></li>
                                        <li><a href="javascript:;"><i class="icon-heart"></i> 342 Likes</a></li>
                                        <li><a href="javascript:;"><i class="icon-share"></i> 34 Shares</a></li>
                                        
										<a href="update_post.php?id=<?php echo $post['p_id']?>"><button>Update Post</button></a>
										<a href="../data/delete_post.php?id=<?php echo $post['p_id']?>"><button>Delete Post</button></a>
                                    </ul>
                                    <a href="show_details.php?id=<?php echo $post['p_id']?>" class="btn btn-info">Continue Reading</a>
                                </div>
                            </div>
                            <hr>
                            <?php }
                            
                            
                            include 'layout/footer.php';
                            ?>
	</body	
</html>

