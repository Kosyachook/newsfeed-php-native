<?php include ROOT . '/views/layout/header.php'; ?>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="editor_overview">
                      <form action="" method="post">
                        <div class="form-group">
                          <label for="username">Email:</label>
                          <input type="text" class="form-control" id="username" placeholder="Enter usename" name="username">
                        </div>
                        <div class="form-group">
                          <label for="pwd">Password:</label>
                          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                        </div>
                        <div class="form-group form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember"> Remember me
                          </label>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php include ROOT . '/views/layout/footer.php'; ?>