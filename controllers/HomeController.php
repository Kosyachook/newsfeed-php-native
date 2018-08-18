<?php

include_once ROOT. '/models/News.php';


class HomeController
{
		public function actionIndex()
		{
			$articlesSample = Articles::getPostsListByCount(6);
			//var_dump($articlesSample);
		    require_once(ROOT . '/views/home/index.php');
			return true;
		}
		public function actionView($id){
			if($id){
				$articleItem = Articles::getPostById($id);
				require_once(ROOT . '/views/home/view.php');
			}
			return true;
		}

}