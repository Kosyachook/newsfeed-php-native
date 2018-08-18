<?php

class Articles{
    const SHOW_BY_DEFAULT = 6;

    public static function getPostsList(){
        $db = Db::getConnection();
		$newsList = array();

		$result = $db->query('SELECT id, title, date, author_name, short_content FROM news ORDER BY id ASC LIMIT 10');

		$i = 0;
		while($row = $result->fetch()) {
			$newsList[$i]['id'] = $row['id'];
			$newsList[$i]['title'] = $row['title'];
			$newsList[$i]['date'] = $row['date'];
			$newsList[$i]['author_name'] = $row['author_name'];
			$newsList[$i]['short_content'] = $row['short_content'];
			$i++;
		}
        return $newsList;
    }
    public static function getPostsListByCount($count = self::SHOW_BY_DEFAULT){
        $db = Db::getConnection();
        $sql = 'SELECT id, title, date, author_name, short_content FROM news ORDER BY id ASC LIMIT :count';
        $result = $db->prepare($sql);
        $result->bindParam(':count', $count, PDO::PARAM_INT);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();
        $i = 0;
        $articlesList = array();
        while($row = $result->fetch()){
            $articlesList[$i]['id'] = $row['id'];
            $articlesList[$i]['title'] = $row['title'];
            $articlesList[$i]['author_name'] = $row['author_name'];
            $articlesList[$i]['short_content'] = $row['short_content'];
            $i++;
        }
        return $articlesList;
    }
    
    public static function getPostById($id){
        $db = Db::getConnection();
        $sql = "SELECT * FROM news WHERE id = :id";
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();
        return $result->fetch();
    }
    public static function insertPost($options){
        $db = Db::getConnection();
        
        $sql = "INSERT INTO news (title, short_content, content, author_name, preview, type) VALUES
        (:tit, :s_cont, :cont, :author_name, :preview, :typ);";
        
        $result = $db->prepare($sql);
        
        $result->bindParam(':tit', $options['title'], PDO::PARAM_STR);
        $result->bindParam(':s_cont', $options['short_content'], PDO::PARAM_STR);
        $result->bindParam(':cont', $options['content'], PDO::PARAM_STR);
        $result->bindParam(':author_name', $options['author_name'], PDO::PARAM_STR);
        $result->bindParam(':preview', $options['preview'], PDO::PARAM_STR);
        $result->bindParam(':typ', $options['type'], PDO::PARAM_STR);
        
        if($result->execute()){
           return $db->lastInsertId();
        }
        //$db = null;
        return 0;
    }
    public static function updatePostById($id, $options){
        $db = Db::getConnection();

        $sql = "UPDATE news SET title = :tit, short_content = :s_cont, content = :cont, author_name = :auth, preview = :preview, type = :typ WHERE id = :id";

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':tit', $options['title'], PDO::PARAM_STR);
        $result->bindParam(':s_cont', $options['short_content'], PDO::PARAM_STR);
        $result->bindParam(':cont', $options['content'], PDO::PARAM_STR);
        $result->bindParam(':auth', $options['author_name'], PDO::PARAM_STR);
        $result->bindParam(':preview', $options['preview'], PDO::PARAM_STR);
        $result->bindParam(':typ', $options['type'], PDO::PARAM_STR);
        return $result->execute();
    }
    public static function deletePostById($id){
        $db = Db::getConnection();

        $sql = "DELETE FROM news WHERE id = :id";

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }
    public static function getCount(){
        $db = Db::getConnection();
        $sql = "SELECT COUNT(*) FROM news;";
        $result = $db->prepare($sql);
        $result->execute();
        //echo '<h1>Called get Counter</h1>';
        $number_of_rows = $result->fetchColumn();
        return $number_of_rows;
    }
}

?>