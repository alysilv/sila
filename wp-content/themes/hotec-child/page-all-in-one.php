<?php
/**
 * Template Name: One Page Template
 * Author: Trang Huynh
 */


do_action('st_theme_start');
get_header();

$GLOBALS['st_template_file_name'] = 'page'; // get page template

// get child pages of Home page
$current_front_page_ID = get_option('page_on_front');
$section_list = get_childs($current_front_page_ID);

do_action('st_before_layout');
foreach($section_list as $page){
    $slug = $page->post_name;
    $title = $page->post_title;
    $content = $page->post_content;
/*
    //$st_page_options =  $st_page_builder = get_page_builder_options($page->ID);
    $builder_content = get_page_builder_content($page->ID) ;

    $showTitle = true;
    // echo $st_page_options['page_options']['show_title'];
    if(empty($st_page_options['page_options']['show_title']) ||  $st_page_options['page_options']['show_title']==''){
        $showTitle = false;
    }

    $showContent =  true;
    if(empty($st_page_options['page_options']['show_content']) ||  $st_page_options['page_options']['show_content']==''){
        $showContent =  false;
    }
    */

//    get_template_part('templates/layout/'.st_get_layout());
    do_action('st_top_page_template');
?>
    <!-- Start Section <?php echo "$slug" ?> -->
    <section id='<?php echo "$slug" ?>' >
        <div class='bcg'
             data-anchor-target="#<?php echo "$slug" ?>">
            <div class="section_page_wrap">
                <div class="section_content"
                     data-top="opacity: 1"
                     data-center="opacity: 1"
                     data-20-bottom="opacity: 0"
                     data-anchor-target="#<?php echo "$slug" ?> h1">

                        <?php //if($showTitle){?>
                        <h1 class="builder-title-wrapper section_title"><?php echo $title; ?></h1>
                        <?php //} ?>
<?php
                        do_action('st_top_page_template'); //st_page_title_tempalte
                        do_action('st_page_template'); //st_page_template
/*
                        <div <?php post_class('text-content'); ?>>
                            <?php
                            if($builder_content==''){
                                echo $content;
                            }else{
                                echo do_shortcode($builder_content) ;
                            }
                            ?>
                        </div>
*/?>

                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </section><!-- End Section -->
<?php
    do_action('st_bottom_page_template');
} // end loop
do_action('st_after_layout');

get_footer();
do_action('st_theme_end');