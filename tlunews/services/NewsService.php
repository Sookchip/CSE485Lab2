<?php
require_once APP_ROOT.'/tlunews/models/News.php';
require_once APP_ROOT.'/tlunews/database.php';
class NewsService{
    private $conn;
    public function __construct(){
        $this->conn = (new Database())->connect();
    }

    public function getAllNews(){
        try{
            $stmt = $this->conn->query("SELECT * FROM news");

            $rows = $stmt->fetchAll();
            $newsList =[];
            foreach($rows as $row){
                $news = new News($row['id'],$row['title'],$row['content'],$row['image'],$row['created_at'],$row['category_id']);
                $newsList[] = $news;
            }
            return $newsList;
        }
        catch(Exception $e){
            return $newsList=[];
        }
    }

    public function getNewsById($id){
        try{
            $stmt = $this->conn->prepare('SELECT * FROM news WHERE id = :id');
            $stmt->execute(['id'=> $id]);
            $row = $stmt->fetch();
            if($row){
                return new News($row['id'],$row['title'],$row['content'],$row['image'],$row['created_at'],$row['category_id']);
            }
            return null;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function addNews($title, $content, $image, $categoryId) {
        try {
            $stmt = $this->conn->prepare("INSERT INTO news (title, content, image, category_id, created_at) VALUES (:title, :content, :image, :category_id, NOW())");
            $stmt->execute([
                'title' => $title,
                'content' => $content,
                'image' => $image,
                'category_id' => $categoryId
            ]);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function updateNews($id, $title, $content, $image, $categoryId) {
        try {
            $stmt = $this->conn->prepare("UPDATE news SET title = :title, content = :content, image = :image, category_id = :category_id WHERE id = :id");
            $stmt->execute([
                'id' => $id,
                'title' => $title,
                'content' => $content,
                'image' => $image,
                'category_id' => $categoryId
            ]);
        } catch (PDOException $e) {
            echo  $e->getMessage();
        }
    }


    public function deleteNews($id) {
        try {
            $stmt = $this->conn->prepare("DELETE FROM news WHERE id = :id");
            $stmt->execute(['id' => $id]);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
?>