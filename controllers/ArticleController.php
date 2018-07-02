<?php

class ArticleController
{
		public function actionPage(){
			require_once(ROOT . '/views/pages/article.php');
			return true;
		}

		public function actionList()
		{
			return true;
		}


}