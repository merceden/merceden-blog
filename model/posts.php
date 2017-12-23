<?php
   function posts($number= 5) {
	$posts = [];
	
	for ($i =0; $i < $number; $i++) {
		$posts[] = [
			'title' => 'title' . ($i+1),
			'body' => 'body',
			'author' => 'admin',
		];
	}

     return $posts;
}
       
     function post($id) {
	return [
	'title' => 'title' . ($id+1),
	'body' => 'body',
	'author' => 'admin',
];
	}