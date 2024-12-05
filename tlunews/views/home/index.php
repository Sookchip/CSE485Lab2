
<h1>Danh sách Tin Tức</h1>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Tiêu đề</th>
            <th>Ngày tạo</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($newsList)): ?>
            <?php foreach ($newsList as $news): ?>
                <tr>
                    <td><?= $news->getId(); ?></td>
                    <td><?= htmlspecialchars($news->getTitle()); ?></td>
                    <td><?= $news->getCreatedAt(); ?></td>
                    <td>
                        <a href="/news/detail/<?= $news->getId(); ?>">Xem</a>
                        <a href="/news/edit/<?= $news->getId(); ?>">Sửa</a>
                        <a href="/news/delete/<?= $news->getId(); ?>" onclick="return confirm('Bạn chắc chắn muốn xóa?')">Xóa</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="4">Không có tin tức nào.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<a href="/news/add">Thêm tin tức</a>

