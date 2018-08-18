<?php
class ChiefEditor{
    public static function checkPermissions(){
        $userId = User::checkLogged();
        $user = User::getUserById($userId);

        if ($user['role'] == 'admin') {
            return true;
        }
        die('Access denied');
    }
}

?>