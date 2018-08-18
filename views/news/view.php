<?php include ROOT . '/views/layout/header.php'; ?>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div class="article">
						<h4><?php echo $articleItem['title']; ?></h4>
                        <p><?php echo $articleItem['content']; ?></p>
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