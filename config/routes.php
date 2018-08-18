<?php
return array(
	'login' => 'user/login',
	'editor' => 'editor/index',
	'editadd' => 'editor/add',
	'editdell/([0-9]+)' => 'editor/delete/$1',
	'editup/([0-9]+)' => 'editor/update/$1',
	'news/([0-9]+)' => 'news/view/$1',
	'news' => 'news/index', 
	'home' => 'home/index',
	'about' => 'home/about',
	'' => 'home/index',
	);
	