<?php get_header(); ?>
<div class="container">
    <h1>О нас</h1>
    <img src="<?= get_assets_dir('images/logo.jpg'); ?>" alt="logo">
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
<?php get_footer(); ?>