<html>

<head>
    <title>Tutorial theme</title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>

<body>
    <div id="wrapper">
        <div id="header">
            <?php
wp_nav_menu( array( 'theme_location' => 'extra-menu', 'container_class' => 'my_extra_menu_class' ) );

?>

                <h1>Mia</h1>
        </div>
