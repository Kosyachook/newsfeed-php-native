<?php include ROOT . '/views/layout/header.php'; ?>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div class="editor_insert">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title">
                            </div>
                            <div class="form-group">
                                <label for="author_name">Author</label>
                                <input type="text" class="form-control" id="authorName">
                            </div>
                            <div class="form-group">
                                <label for="comment">Article Short Content</label>
                                <textarea class="form-control" rows="5" id="shortContent"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="comment">Article Content</label>
                                <textarea class="form-control" rows="25" id="content"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Insert</button>
                        </form>
                    </div>
                </div>
                <div class="col-4">
                    <div class="editor_preview">
                        <h2>Total <?php echo $totalArticles; ?> U</h2>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php include ROOT . '/views/layout/footer.php'; ?>