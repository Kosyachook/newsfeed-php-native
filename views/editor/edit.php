<?php include ROOT . '/views/layout/header.php'; ?>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div class="editor_insert">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" id="title" value="<?php echo $isue['title']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="author_name">Author</label>
                                <input type="text" name="author" class="form-control" id="author_name" value="<?php echo $isue['author_name']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="comment">Article Short Content</label>
                                <textarea name="s_content" class="form-control" rows="5" id="shortContent">
                                    <?php echo $isue['short_content']; ?>
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label for="comment">Article Content</label>
                                <textarea name="content" class="form-control" rows="25" id="content">
                                    <?php echo $isue['content']; ?>
                                </textarea>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Insert</button>
                        </form>
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