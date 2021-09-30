<nav class="navigation" id="navigation">
                
    <div class="menu_button">
    <!-- <nav> -->
        <button id="button__Open">Menu</button>
    <!-- </nav> -->
    </div>
    <?php
    $menu_name = 'sidebar';
    $locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object($locations[$menu_name]);
    
    $menu_items = wp_get_nav_menu_items($menu ->term_id);
    ?>
    <div class="navigation__menu">
        <ul class="menu">
            <?php foreach ($menu_items as $item): ?>
            <li class="sub_menu">
                <a href="<?php echo $item -> url; ?>"><?php echo $item ->title; ?></a>
            </li>
            <?php endforeach; ?>
        </ul>

        <div class="c_button">
            <button class="menuButton" id="menuButton">
                <div></div>
                <div></div>
            </button>
        </div>
    </div>

</nav>