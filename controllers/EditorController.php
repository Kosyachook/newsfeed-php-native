<?php

class EditorController{
    public function actionIndex(){
        //echo 'Hello Editor';
        $totalArticles = Articles::getCount();
        if(isset($_POST['submit'])){
            //echo '<h1>Form submited.</h1>';
            //$isSended = true;
 
            $options['title'] = $_POST['title'];
            $options['short_content'] = $_POST['message'];
            $options['content'] = $_POST['message'];
            $options['author_name'] = $_POST['author'];
            $options['preview'] = 'images/5.png';
            $options['type'] = 'breaking';
 
            $lastId = Articles::insertPost($options);
            echo '<h1>' . $lastId . '</h1>';
            //echo var_dump($options);
         }

        require_once(ROOT . '/views/editor/index.php');
        
        return true;
    }
    public function actionView(){
        return true;
    }
}


?>