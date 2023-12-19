<!DOCTYPE html>
<html lang="en" style="margin:0">

<head>
    <?php wp_head() ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') ?> </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Contrail+One&family=Quattrocento:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="normalize.css">
</head>

<body>
    <!-- <header>
        <div class="mainmenu">
            <h1 class='titre'>
                <a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
            </h1>
            <a href="javascript:void(0);" class="hamnu" id="hamnu" onclick="ouvrirMenu()"><svg width="64px" height="64px" stroke-width="1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#205c70">
                    <path d="M3 5H21" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M3 12H21" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M3 19H21" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </a>
        </div>
        <?php
        wp_nav_menu(array(
            "theme_location" => "main-menu",
            "container" => "nav"
        )); ?>
    </header>

    <script>
        function ouvrirMenu() {
            var z = document.getElementsByClassName("menu");
            var x = z[0];
            if (x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
        }
    </script> -->