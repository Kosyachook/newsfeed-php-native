<?php include ROOT . '/views/layout/header.php'; ?>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="editor_overview">
                        <h3>Delete article</h3>
                        <p>Are you shure to delete articl?</p>
                        <form action="" method="post">
                            <input type="submit" name="submit_yes" value="Delete">
                            <input type="submit" name="submit_no" value="No">
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