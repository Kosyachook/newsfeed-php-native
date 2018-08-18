<?php
class UserController{
    public function actionLogin()
    {
        $email = false;
        $password = false;
        if (isset($_POST['submit'])) {
            //echo 'Sended';
            $email = $_POST['username'];
            $password = $_POST['pswd'];

            $errors = false;

            /*
            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильное имя пользователя';
            }
            if (!User::checkPassword($password)) {
                $errors[] = 'Неверный пароль';
            }*/

            $userId = User::checkUserData($email, $password);
            //echo $userId;
            if ($userId == false) {
                $errors[] = 'Неправильные данные для входа на сайт';
            } else {
                User::auth($userId); 
                header("Location: /editor");
            }
        }
        require_once(ROOT . '/views/editor/login.php');
        return true;
    }
    public function actionLogout()
    {
        session_start();
        unset($_SESSION["user"]);
        header("Location: /");
    }
}
?>