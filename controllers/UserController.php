<?php
class UserController{
    public function actionLogin()
    {
        /*$email = false;
        $password = false;
        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;

            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильное имя пользователя';
            }
            if (!User::checkPassword($password)) {
                $errors[] = 'Неверный пароль';
            }

            // Проверяем существует ли пользователь
            $userId = User::checkUserData($email, $password);

            if ($userId == false) {
                $errors[] = 'Неправильные данные для входа на сайт';
            } else {
                User::auth($userId); 
                header("Location: /editor");
            }
        }*/
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