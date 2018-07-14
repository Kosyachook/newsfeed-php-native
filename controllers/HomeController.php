<?php


class HomeController
{
		public function actionIndex()
		{
			/*$last_posts = array("a" => "chooo", 
				"b" => "hello",
				 "c" => "easy",
				  "d" => 8888,
				);
			var_dump($last_posts);*/
		    require_once(ROOT . '/views/home/index.php');
			return true;
		}
		public function actionView($id){
			if($id){
				require_once(ROOT . '/views/home/view.php');
			}
			return true;
		}

}