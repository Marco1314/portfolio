<div class="navigation">
    <div class="toggle">
        <div class="toggle__line"></div>
        <div class="toggle__line"></div>
        <div class="toggle__line"></div>
    </div>
    <div class="navigation__mobile">
    <?php
    $info = array(
        'theme_location' => "menue_",
        "container_class" => "menue",
    );
    wp_nav_menu($info);
    ?>
    </div>
</div>