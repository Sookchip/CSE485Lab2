<?php 

require_once("../tlunews/config/config.php");
require_once APP_ROOT. '/tlunews/controllers/NewsController.php';

$newsController = new NewsController();
$newsController->index();

// $newsService = new NewsService();
// $news = $newsService->getAllNews();
// echo "<pre>";
//     print_r( $news );
// echo "<pre>";
?>