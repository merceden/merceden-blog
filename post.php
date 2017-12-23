<?php
	require_once '/Applications/MAMP/htdocs/model/posts.php';
	
	if(!isset($_GET['id'])) {
		header('location: /');
		
	}
      $post = post($_GET['id']);


require_once '/Applications/MAMP/htdocs/view/post.php';