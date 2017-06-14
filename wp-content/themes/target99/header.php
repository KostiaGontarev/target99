<?php
    $navigation_menu_args = array(
        'menu' => 'Navigation',
    );
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php wp_title('|', true, 'right'); ?></title>
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet"/>

    <?php wp_enqueue_script(“jquery”, 'https://code.jquery.com/jquery-3.2.1.min.js'); ?>
    <?php wp_head(); ?>

    <script
            src="https://code.jquery.com/jquery-migrate-3.0.0.min.js"
            integrity="sha256-JklDYODbg0X+8sPiKkcFURb5z7RvlNMIaE3RA2z97vw="
            crossorigin="anonymous">
    </script>

</head>
<body <?php body_class(); ?>>
<div class="layout">
    <header class="header">
        <div class="header__inner-container layout__service">
            <a href="/">
                <div class="header__logo-container">
                    <img class="header__logo" src="<?php bloginfo('template_url'); ?>/images/logo.png"/>

                    <span class="header__logo-text header__logo-text--primary"><?php echo get_theme_mod('target99_logo_title'); ?></span>
                    <span class="header__logo-text header__logo-text--secondary"><?php echo get_theme_mod('target99_logo_secondary'); ?></span>
                </div>
            </a>
            <div class="header__socials-container">
                <?php include('templates/template-parts/template-part-socials.php'); ?>
            </div>

            <div class="header__menu-container">
                <?php wp_nav_menu($navigation_menu_args); ?>
            </div>
        </div>
    </header>

    <div id="page">