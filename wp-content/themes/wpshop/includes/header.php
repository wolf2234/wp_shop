<?php
/*
Template Name: Header Part
*/
?>
<header class="header">
    <div class="container-large">
        <?php the_custom_logo($blog_id); ?>
        <nav class="nav-menu">
            <?php wp_nav_menu(array(
            'theme_location' => 'top', 
            'menu' => 'nav-menu',
            'container' => null,
            'menu_class' => 'menu',
            )); 
            ?>
        </nav>
    </div>
</header>