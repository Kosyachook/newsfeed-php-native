<?php
class NewsController{
    public function actionIndex()
	{
		//echo '<h1>Action Index of News</h1>';
		$articlesSample = Articles::getPostsListByCount(5);
		//print_r($posts);
		//var_dump($posts);
		//echo '<br><br><br>';
		//print_r(Articles::getPostsListByCount(3));
		//echo '<br><br><br>';
		//print_r(Articles::getPostById(2));
		require_once(ROOT . '/views/news/index.php');
		return true;
	}

	public function actionView($id)
	{
		//echo '<h1>Action View of News</h1>';
		$articleItem = Articles::getPostById($id);
		require_once(ROOT . '/views/news/view.php');
		return true;
	}
}
?>