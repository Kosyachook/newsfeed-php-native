<?php
class User{
    public static function checkUserData($username, $password)
    {
        /*$db = Db::getConnection();
        $sql = 'SELECT * FROM user WHERE email = :email AND password = :password';

        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_INT);
        $result->bindParam(':password', $password, PDO::PARAM_INT);
        $result->execute();*/
        //$user = $result->fetch();

        $user=array(
            'id' => 2332,
            'user' => 'aeditor',
            'password' => '123456',
        );

        if ($username == $user['user'] && $password == $user['password']) {
            return $user['id'];
        }
        return false;
    }
    public static function auth($userId)
    {
        $_SESSION['user'] = $userId;
    }
    public static function checkLogged()
    {
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }

        header("Location: /login");
    }

    /*public static function getUserById($id)
    {
        $db = Db::getConnection();
        $sql = 'SELECT * FROM user WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();

        return $result->fetch();
    }*/
}

?>