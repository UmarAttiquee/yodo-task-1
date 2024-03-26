<?php
// Register the menu
function theme_register_menus() {
    register_nav_menus(
        array(
            'inner-menu' => esc_html__('Inner Menu', 'your-theme-textdomain'),
            // Add more menus as needed
        )
    );
}
add_action('init', 'theme_register_menus');