<!DOCTYPE html>
<html lang="en" style="margin:0">

<head>
    <?php wp_head() ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;1,100;1,200;1,300;1,400&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <h1><a href="<?php get_site_url() ?>"><?php bloginfo('name') ?></a></h1>
        <div class="logos">
            <img onclick="magnifier()" src="https://audreytattegrain.ca/wp-content/uploads/2024/04/search.svg" alt="search icon" class="icon">
            <img onclick="hamburger()" src="https://audreytattegrain.ca/wp-content/uploads/2024/04/menu.svg" alt="menu icon" class="icon">
            <form action="" id="search">
                <input type="search" name="search">
                <input type="image" src="https://audreytattegrain.ca/wp-content/uploads/2024/04/send.svg">
            </form>
            <?php wp_nav_menu(array(
                'menu'                 => 'main-menu',
                'container'            => 'ul',
                'container_class'      => 'bigScreen',
                'container_id'         => 'hamburger'
            )) ?> 
        </div>
    </header>
