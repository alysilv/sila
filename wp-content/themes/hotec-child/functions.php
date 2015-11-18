<?php

/**
 * @author: Trang Huynh
 */


/* register Top left widget */
register_sidebar( array(
    'name'          => 'Top bar left widget',
    'id'            => 'top_bar_left',
    'description'   => '',
    'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widgettitle">',
    'after_title'   => '</h3>'

));

add_action('wp_print_scripts','child_scripts',99);
function child_scripts(){
    wp_enqueue_script( 'parallax-scrolling', get_stylesheet_directory_uri().'/js/skrollr.min.js', array('jquery'),'1.0',true);
    wp_enqueue_script( 'child-main', get_stylesheet_directory_uri().'/js/main.js', array('jquery'),'1.0',true);
}


#-----------------------------------------------------------------
# Enqueue Style
#-----------------------------------------------------------------
remove_action('wp_print_styles','st_enqueue_styles');
add_action('wp_print_styles','child_styles', 99);
function child_styles(){
    wp_enqueue_style('child_style', get_stylesheet_directory_uri().'/style.css',false, '1.0' );

}

register_nav_menus( array(
    'Right_Navigation' => __( 'Right Navigation', 'smooththemes' ),
) );


function get_childs($pageID){
    $args = array(
        'sort_order' => 'ASC',
        'sort_column' => 'menu_order', // allows you to order pages using menu order under page attributes
        'hierarchical' => 1,
        'child_of' => $pageID, // list all child pages of Home page, to filter selected pages
        'parent' => $pageID,
        'exclude' => $pageID, // exclude the home page ID
        'exclude_tree' => '',
        'number' => '',
        'offset' => 0,
        'post_type' => 'page',
        'post_status' => 'publish'
    );
    $pages = get_pages($args);

    return $pages;
}

/* Change shortcode This Entry */
function get_page_id_from_url(){
    $id=5;
    //$admin_url = admin_url();

    return $id;
}
remove_shortcode( 'this_entry', 'st_this_entry_func' );
add_shortcode( 'this_entry', 'get_page_content' );
function get_page_content(){
    $id = get_page_id_from_url();
    $page = get_post($id);
    $content = $page->post_content;
    return $content;
}





