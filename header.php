<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?= get_assets_dir('css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= get_assets_dir('css/style.css'); ?>">
</head>

<body>
    <header class="container">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?php echo home_url(); ?>">Главная</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo home_url('/o-nas'); ?>">О нас</a>
            </li>
        </ul>
    </header>