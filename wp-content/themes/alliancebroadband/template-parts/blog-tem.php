<?php
/**
* Template Name: Blog Temp
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<?php $url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()), 'thumbnail' ); ?>
<header class="inner-banner-h">
    <div class="header-single-post" data-dsn-header="project">
        <div class="post-parallax-wrapper" data-overlay="4">
        <?php if ($url) : ?>
   
   <img width="100%" min-height="300" src="<?php echo $url ?>" class="has-top-bottom wp-post-image" alt="" />
   <?php /*?><?php echo "some php code"; ?><?php */?>
<?php else : ?>
    <img width="100%" min-height="300" src=" <?php echo get_template_directory_uri();?>/assets/images/earth4.jpg" class="has-top-bottom wp-post-image" alt="" />
   <?php /*?><?php echo "some php code"; ?><?php */?>
<?php endif;  ?>
        </div>
        
        

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
    <div class="container"> 
    	<div class="root-blog">
        <?php
                    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                    $display = get_field('display_number');
                    $args = array(

			'post_type' => 'post',
			'posts_per_page' => $display,
                         'paged' => $paged
                    );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();?>
                    
        	<article id="post-251" class="tag-blog tag-creative dsn-layout-normal section-top" >
<?php $url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()), 'thumbnail' 

); ?>
            <figure style="margin-bottom:30px;">
            <a class="image-zoom effect-ajax w-100" href="<?php the_permalink(); ?>" data-dsn-animate="up"
               rel="bookmark" title="May 1, 2019"
            >
                <img width="1800" height="1013" src="<?php echo $url ?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""  />            </a>
        </figure>
    
    <div class="post-list-item-content" data-dsn-animate="up">
        <div class="post-info-top">
            <div class="post-info-date">
                <a href="<?php the_permalink(); ?>">
                    <span> <?php the_date(); ?></span>
                </a>
            </div>

            <div class="post-info-category">
                
        </div>
        <h3 class="dsn-title-p">
            <a href="<?php the_permalink(); ?>" class="effect-ajax" rel="bookmark" title="<?php the_title(); ?>" >
                <?php the_title(); ?></a>
            
        </h3>

        <div class="link-custom">
            <a class="image-zoom effect-ajax" href="<?php the_permalink(); ?>" data-dsn="parallax"
               rel="bookmark">
                <span>Read More</span>
            </a>
        </div>

    	</div>
	</div>
</article>

<?php $a++; endwhile;?>
            <?php  wp_reset_query();?>
            
            <div class="featured-project-header" style="margin-top:30px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <nav class="pagination">
                                 <?php
                                 $big = 999999999;
                                 echo paginate_links( array(
                                      'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
                                      'format' => '?paged=%#%',
                                      'current' => max( 1, get_query_var('paged') ),
                                      'total' => $loop->max_num_pages,
                                      'prev_text' => 'PREV :',
                                      'next_text' => ' NEXT'
                                 ) );
                            ?>
                            </nav>
                            <?php wp_reset_postdata(); ?>
		</div>
     </div>  
        		</div>
            </div>
        </div>
        </div>
        
</section>

<div class="dsn-button-sidebar">
        <span><i class="fa fa-arrow-left"></i></span>
    </div>
    
    
    <div class="dsn-sidebar">
        <div class="close-wind" data-dsn-close=".dsn-sidebar"></div>
        <div class="sidebar-single">
            <div class="sidebar-single-content">
                <?php get_sidebar(); ?>
		    </div>
        </div>
    </div>
    
    

</div>
        
        
        
        
        
<!-- close wrapper -->

<?php get_footer(); ?>