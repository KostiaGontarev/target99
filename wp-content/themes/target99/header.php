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
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/fa/css/font-awesome.min.css">

    <?php wp_head(); ?>
    <?php wp_enqueue_script('jqueryUI', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', 'jquery'); ?>

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
            <div class="visibility-layout visibility-layout--mobile visibility-layout--tablet">
                <div class="header__search-container">
                    <?php get_search_form(); ?>
                </div>
            </div>

            <div class="header__logo-container">
                <a href="/">

                    <img class="header__logo" src="<?php bloginfo('template_url'); ?>/images/logo.png"/>

                    <span class="header__logo-text header__logo-text--primary"><?php echo get_theme_mod('target99_logo_title'); ?></span>
                    <span class="header__logo-text header__logo-text--secondary"><?php echo get_theme_mod('target99_logo_secondary'); ?></span>
                </a>

            </div>

            <div class="header__socials-container">
                <?php include('templates/template-parts/template-part-socials.php'); ?>
            </div>

            <div class="visibility-layout visibility-layout--desktop">
                <div class="header__search-container">
                    <?php get_search_form(); ?>
                </div>
            </div>


            <div class="header__menu-container">
                <script>
                    $( function() {
                        var icons = {
                            header: "fa fa-bars",
                            activeHeader: "fa fa-minus"
                        };
                        $( ".mobile-menu" ).accordion({
                            icons: icons,
                            collapsible: true,
                            autoHeight: false,
                            active: false,
                            heightStyle: "content"
                        });
                    } );
                </script>

                <div class="visibility-layout visibility-layout--mobile">
                    <div class="mobile-menu">
                        <h3 class="mobile-menu__main-button">Меню</h3>
                        <div class="mobile-menu__inner-container">
                            <?php wp_nav_menu($navigation_menu_args); ?>
                        </div>
                    </div>
                </div>

                <div class="visibility-layout visibility-layout--desktop visibility-layout--tablet">
                    <?php wp_nav_menu($navigation_menu_args); ?>
                </div>
            </div>
        </div>
    </header>

    <div id="page">
