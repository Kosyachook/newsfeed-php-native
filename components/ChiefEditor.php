<?php
abstract class ChiefEditor{
    public static function checkPermissions(){
        $userId = User::checkLogged();
        //$user = User::getUserById($userId);
        if($userId == 2332)
        {
            return true;
        }
        /*if ($user['role'] == 'admin') {
            return true;
        }*/
        die('Access denied');
    }
}

?>