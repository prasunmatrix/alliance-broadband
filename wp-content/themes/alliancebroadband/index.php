<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>
<?php $url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()), 'thumbnail' ); ?>
<header class="inner-banner-h">
    <div class="header-single-post" data-dsn-header="project">
        <div class="post-parallax-wrapper" data-overlay="4"><img width="100%" min-height="300" src="<?php echo $url ?>" class="has-top-bottom wp-post-image" alt="" /></div>
        
        

    </div>
</header>


<div class="wrapper">

<section class="page-content ">
<div class="container">
<?php while (have_posts()) : the_post(); ?>
            <div class="inner-box ">

                
                <h3 class="title-box dsn-title-p"><?php the_title(); ?> </h3>
                <div class="post-full-content single-post post-content" style="padding-top:50px;">
                <?php the_content(); ?>
                </div>
                
            </div>
<?php  endwhile;?>
            <?php  wp_reset_query();?> 
        </div>
   </section>


</div><!-- close wrapper -->

<?php
get_footer();
