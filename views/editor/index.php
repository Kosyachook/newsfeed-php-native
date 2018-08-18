<?php include ROOT . '/views/layout/header.php'; ?>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div class="editor_overview">
                        <table>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Author</th>
                            </tr>
                            <?php foreach($articlesList as $articleItem): ?>
                            <tr>
                                <td><?php echo $articleItem['id']; ?></td>
                                <td><?php echo $articleItem['title']; ?></td>
                                <td><?php echo $articleItem['author_name']; ?></td>
                                <td><a href="editup/<?php echo $articleItem['id']; ?>">Edit</a></td>
                                <td><a href="editdell/<?php echo $articleItem['id']; ?>">Delete</a></td>
                            </tr>
                            <?php endforeach; ?>
                        </table>
                        
                    </div>
                </div>
                <div class="col-4">
                    <div class="editor_preview">
                    <?php if(isset($totalArticles)): ?>
                        <h2>Total <?php echo $totalArticles; ?> U</h2>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php include ROOT . '/views/layout/footer.php'; ?>