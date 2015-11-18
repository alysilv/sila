<?php
/**
 * Template Name: One Page Template
 * Author: Trang Huynh
 */


do_action('st_theme_start');
get_header();

$GLOBALS['st_template_file_name'] = st_get_tpl_file_name();
do_action('st_before_layout');


?>

    <div class="content clearfix">

<?php
    $args = array(
        'sort_order' => 'ASC',
        'sort_column' => 'menu_order', // allows you to order pages using menu order under page attributes
        'hierarchical' => 1,
        'child_of' => 10, // list all child pages of Home page, to filter selected pages
        'parent' => 10,
        'exclude' => 10, // exclude the home page ID
        'exclude_tree' => '',
        'number' => '',
        'offset' => 0,
        'post_type' => 'page',
        'post_status' => 'publish'
    );
    $pages = get_pages($args);
    //start loop
    foreach ($pages as $page) {
        $content = apply_filters( 'the_content', $page->post_content );
        $builder_content = get_page_builder_content($page->ID) ;
        $title = $page->post_title;
        $slug = $page->post_name;
?>
        <section id='<?php echo "$slug" ?>' class='section_page'>
            <div class="container">
                <div <?php post_class('text-content'); ?> >
                    <?php
                    if($builder_content=='') {
                        echo $content;
                    } else {
                        echo do_shortcode($builder_content) ;
                    }
                    ?>
                </div>
            </div>
        </section>
    <?php } /* end loop */ ?>

    </div>

<?php
//get_template_part('templates/layout/'.st_get_layout());
//do_action('st_after_layout');

get_footer();
do_action('st_theme_end');