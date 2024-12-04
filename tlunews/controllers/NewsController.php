<?php
require_once APP_ROOT.'/tlunews/models/News.php';
require_once APP_ROOT.'/tlunews/services/NewsService.php';

class NewsController {

    // Hiển thị danh sách tất cả tin tức
    public function index() {
        $newsService = new NewsService();
        $newsList = $newsService->getAllNews(); // Lấy danh sách tin tức

        require_once APP_ROOT.'/tlunews/views/home/index.php'; // Hiển thị view
    }

    // Hiển thị chi tiết tin tức theo ID
    public function detail($id) {
        $newsService = new NewsService();
        $news = $newsService->getNewsById($id); // Lấy tin tức theo ID

        if ($news) {
            require_once APP_ROOT.'/tlunews/views/home/detail.php'; // Hiển thị view chi tiết
        } else {
            // Nếu không tìm thấy tin tức, có thể hiển thị thông báo lỗi hoặc chuyển hướng về trang danh sách
            echo "Không tìm thấy tin tức!";
        }
    }

    // Thêm tin tức mới
    public function add() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $content = $_POST['content'];
            $image = $_POST['image'];  // Bạn có thể thêm xử lý file upload cho ảnh
            $categoryId = $_POST['category_id'];

            $newsService = new NewsService();
            $newsService->addNews($title, $content, $image, $categoryId); // Thêm tin tức

            // Chuyển hướng về trang danh sách tin tức sau khi thêm thành công
            header("Location: /news");
            exit();
        }

        // Hiển thị form thêm tin tức
        require_once APP_ROOT.'/tlunews/views/news/add.php';
    }

    // Sửa tin tức theo ID
    public function edit($id) {
        $newsService = new NewsService();
        $news = $newsService->getNewsById($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $content = $_POST['content'];
            $image = $_POST['image'];  // Xử lý ảnh upload nếu có
            $categoryId = $_POST['category_id'];

            $newsService->updateNews($id, $title, $content, $image, $categoryId); // Cập nhật tin tức

            // Chuyển hướng về trang danh sách sau khi sửa thành công
            header("Location: /news");
            exit();
        }

        // Hiển thị form sửa tin tức
        require_once APP_ROOT.'/tlunews/views/news/edit.php';
    }

    // Xóa tin tức theo ID
    public function delete($id) {
        $newsService = new NewsService();
        $newsService->deleteNews($id); // Xóa tin tức

        // Chuyển hướng về trang danh sách tin tức sau khi xóa
        header("Location: /news");
        exit();
    }
}
