<?php include ROOT . '/views/layout/header.php'; ?>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div class="advantages">
                        <div class="advantages__container">
                            <?php foreach($articlesSample as $articleItem):?>
                                <div class="advantages__item">
                                    <h3><a href='/news/<?php echo $articleItem["id"]; ?>'><?php echo $articleItem["title"]; ?></a></h3>
                                    <div>
                                        <p><?php echo $articleItem["short_content"]; ?></p>
                                    </div>
                                </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="sidebar__container">
                        <div class="sidebar__item">
                            
                            <div class="search__form">
                                <form class="form-inline my-2 my-lg-0">
                                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                </form>
                            </div>
                            <div class="categories__menu">
                                <h3>Categories menu</h3>
                                <ul class="nav flex-column">
                                    <li class="nav-item"><a class="nav-link" href="#">Category 1</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Category 2</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Category 3</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Category 4</a></li>
                                </ul>
                            </div>
                            <div class="sponsors">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php include ROOT . '/views/layout/footer.php'; ?>