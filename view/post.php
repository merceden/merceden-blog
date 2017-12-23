<!doctype html>
<html lang="en">
	<head>
		<title>Hello, world!</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
		  <div class="row justify-content-md-center">
		  <div class="col-md-10">
			<a href="/"><h1>Hello!</h1></a>
			<h2>You are reading '<?php echo $post['tile'] ?>'</h2>
		</div>	
		 <div class="col-md-10">
		   <div class="jumbotron jumbotron-fluid">
			<div class="container">
			
		<h1 class="display-3">
		<?php echo $post['title']; ?>	
		</h1>
			
			
			 <p class="lead">
			
		<?php echo $post ['body'];?></p>
			 <p class="lead"> author; <?php echo $post ['author'];?></p>
			      </div>
				</div>		 
		    </div>				
	         
		   </div>	
		</div>	
	</body>
</html>