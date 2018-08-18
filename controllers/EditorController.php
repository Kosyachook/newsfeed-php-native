<?php

class EditorController extends ChiefEditor{
    public function actionIndex(){
        self::checkPermissions();
        //echo 'Hello Editor';
        $totalArticles = Articles::getCount();
        $articlesList = Articles::getPostsListByCount((int)$totalArticles);
        require_once(ROOT . '/views/editor/index.php');
        
        return true;
    }
    public function actionAdd(){
        //echo '<h1>Form Insert.</h1>';
        self::checkPermissions();

        $totalArticles = Articles::getCount();
        if(isset($_POST['submit'])){
            //echo '<h1>Form submited.</h1>';
            //$isSended = true;
 
            $options['title'] = $_POST['title'];
            $options['short_content'] = $_POST['s_content'];
            $options['content'] = $_POST['content'];
            $options['author_name'] = $_POST['author'];
            $options['preview'] = 'images/5.png';
            $options['type'] = 'breaking';
 
            $lastId = Articles::insertPost($options);
            echo '<h1>' . $lastId . '</h1>';
            //echo var_dump($options);
        }

        require_once(ROOT . '/views/editor/add.php');
        return true;
    }
    public function actionDelete($id){
        self::checkPermissions();
        //echo '<h1>DELETING</h1>';
        //
        if(isset($_POST['submit_yes'])){
            Articles::deletePostById($id);
            header("Location: /editor");
        }elseif(isset($_POST['submit_no'])){
            header("Location: /editor");
        }
        
        require_once(ROOT . '/views/editor/delete.php');
        return true;
    }
    public function actionUpdate($id){
        self::checkPermissions();
        //echo '<h1>EDITING</h1>';
        $isue = Articles::getPostById($id);

        if(isset($_POST['submit'])){
            //echo '<h1>Form submited.</h1>';
            //$isSended = true;
 
            $options['title'] = $_POST['title'];
            $options['short_content'] = $_POST['s_content'];
            $options['content'] = $_POST['content'];
            $options['author_name'] = $_POST['author'];
            $options['preview'] = 'images/5.png';
            $options['type'] = 'breaking';
 
            $lastId = Articles::updatePostById($id, $options);
            header("Location: /editor");
        }

        require_once(ROOT . '/views/editor/edit.php');
        return true;
    }
}


?>