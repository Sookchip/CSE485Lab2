<?php 

require_once("../tlunews/config/config.php");
require_once APP_ROOT. '/tlunews/services/NewsService.php';

$service = new NewsService();
$news = $service->getAllNews();
echo "<pre>";
    print_r( $news );
echo "<pre>";
?>