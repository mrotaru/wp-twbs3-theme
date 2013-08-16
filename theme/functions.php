<?php

function default_menu() {
    echo '';
}

function my_css_attributes_filter($var) {
    if(is_array($var)){
        $varci= array_intersect($var, array('current-menu-item'));
        $cmeni = array('current-menu-item');
        $selava   = array('active');
        $selavaend = array();
        $selavaend = str_replace($cmeni, $selava, $varci);
    }
    else{
        $selavaend= '';
    }
return $selavaend;
}
add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1);
add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );
?>
