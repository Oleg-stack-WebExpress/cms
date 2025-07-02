<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet">
</head>

<body>
    <header>
        <div class="container-fluid">
            <div class="ContentSideBar">
                <ul>
                    <li>Главная</li>
                    <li>Корзина</li>
                    <li><a href="<?php site_url( '', 'login' );?>">Войти</a></li>
                </ul>
            </div>
        </div>
    </header>
    <div class="container">
        <h1>Магазин скейтбордов</h1>
        <div class="Description">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Описание
                </button>
                <ul class="dropdown-menu">
                    <li>
                        <p><?php bloginfo('description'); ?></p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card h-55">
                    <div class="card-body">
                        <h5 class="card-title">Круизер</h5>
                        <img src="https://mywishboard.app/thumbs/wish/h/t/r/600x0_agtqptnomejzfswc_jpg_f99b.jpg"
                            alt="Круизер">
                        <p class="text-muted">3445 руб.</p>
                        <a href="#" class="btn btn-success">В
                            корзину</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-55">
                    <div class="card-body">
                        <h5 class="card-title">Classic skate</h5>
                        <img src="https://avatars.mds.yandex.net/i?id=1d920327297902692ad14e85d30268b8_l-5436907-images-thumbs&n=13"
                            alt="Classic skate">
                        <p class="text-muted">2456 руб.</p>
                        <a href="#" class="btn btn-success">В
                            корзину</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-55">
                    <div class="card-body">
                        <h5 class="card-title">Dropdown longboard</h5>
                        <img src="https://avatars.mds.yandex.net/i?id=6bea30acea38bc105f7896fd50b7e914_l-9160391-images-thumbs&n=13"
                            alt="Dropdown longboard">
                        <p class="text-muted">3505 руб.</p>
                        <a href="#" class="btn btn-success">В
                            корзину</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card h-55">
                        <div class="card-body">
                            <h5 class="card-title">Longboard pintail</h5>
                            <img src="https://avatars.mds.yandex.net/i?id=3f6ae93b5fabfdbfebd0996412126138_l-5540728-images-thumbs&n=13"
                                alt="Longboard pintail">
                            <p class="text-muted">3224 руб.</p>
                            <a href="#" class="btn btn-success">В
                                корзину</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-55">
                        <div class="card-body">
                            <h5 class="card-title">Longboard dancer</h5>
                            <img src="https://tehno-teca.ru/img/2482/2481954/mindless_core_dancer_4.jpg"
                                alt="Longboard dancer">
                            <p class="text-muted">4200 руб.</p>
                            <a href="#" class="btn btn-success">В
                                корзину</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-55">
                        <div class="card-body">
                            <h5 class="card-title">Серфскейт</h5>
                            <img src="https://m.media-amazon.com/images/I/81GSH7UxfNL._AC_UL960_QL65_.jpg"
                                alt="Серфскейт">
                            <p class="text-muted">4445 руб.</p>
                            <a href="#" class="btn btn-success">В
                                корзину</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
</body>

</html>