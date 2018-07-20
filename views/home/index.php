<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Newsfeed Lite</title>
    <link rel="stylesheet" href="public/css/reset.css" type="text/css">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/style.css" type="text/css">
</head>
<body>
    <header>
        <!--<div class="container-head">-->
            <div class="logo-holder">
                <a href="/home"><img class="graphiclogo" src="public/images/LifeStyle.png" alt="Logo"></a>
            </div>
            <div class="nav-holder">
                <ul class="nav justify-content-lg-center">
                    <li class="nav-item">
                      <a class="nav-link active" href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Contacts</a>
                    </li>
                </ul>
            </div>
        <!--</div>-->
        <!--<div class="header-top">
        </div>-->
        <!--<div class="header-bottom">
            <div class="container-head">

            </div>
        </div>-->
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div class="advantages">
                        <div class="advantages__container">
                            <?php foreach($articlesSample as $articleItem):?>
                                <div class="advantages__item">
                                    <h3><a href='/home/<?php echo $articleItem["id"]; ?>'><?php echo $articleItem["title"]; ?></a></h3>
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
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <h1>About</h1>
                    <p>Copyright &copy; 2018</p>
                </div>
                <div class="col-4">
                    <h1>Tags or social feed</h1>
                </div>
                <div class="col-4">
                    <h1>Contacts form</h1>
                </div>
            </div>
        </div>
    </footer>
    <script src="public/js/jquery-3.2.1.slim.js"></script>
    <script src="public/js/popper.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
</body>
</html>