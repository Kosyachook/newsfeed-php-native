<?php

class EditorController{
    public function actionIndex(){
        //echo 'Hello Editor';
        require_once(ROOT . '/views/editor/login.php');
        return true;
    }
    public function actionView(){
        return true;
    }
}


?>