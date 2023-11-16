<?php
/**
* Template Name: Internet Temp
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
</section>

<!--section 7-->

<section
        class="brand-client  " >
    <div class="container">
<?php if(get_field("our_clients_heading")): ?>
        <div class="one-title"><div class="title-sub-container"><p class="title-sub" data-dsn-animate=up><?php the_field("our_clients_heading"); ?></p></div><h2 class="title-main" data-dsn-animate=up><?php the_field("our_clients_subheading"); ?></h2></div>
<?php endif; ?>
        <div class="wapper-client">
        
                <?php
  $c = 1;
        if( have_rows('client_point') ):
            while ( have_rows('client_point') ) : the_row();
?> 
                

                        <div class="logo-box">
                            <img  alt=""  src="<?php the_sub_field("client_point_img");?>" class="attachment-droow-brand-img size-droow-brand-img " />                                                                                        <div class="info">
                                    <div class="content">
                                        <div class="icon">
                                            <i class="fas fa-plus"></i>
                                        </div>

                                        <div class="entry">
                                            <div>
                                                <h5><?php the_sub_field("client_point_name");?></h5>                                                
                                                <!-- <a href="<?php the_field("client_url"); ?>" target="_blank" rel="nofollow"><?php the_field("client_sitename"); ?></a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                        </div>

                 <?php $c++; endwhile; wp_reset_query(); endif; ?>         
        </div>


<?php if(get_field("book_your_connection_text")): ?> <div class="link-custom dsn-active" data-dsn-animate="up" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);text-align: center;
padding: 30px 0;">
                       
                                <a class="image-zoom effect-ajax new_connection " href="javascript:void(0)"
                           data-dsn="parallax">
<!-- <a class="image-zoom effect-ajax <?php // the_field("book_your_connection_link"); ?> " href="javascript:void(0)"
                           data-dsn="parallax"> -->

                            <span><?php the_field("book_your_connection_text"); ?></span><div class="icon-circle"></div>
                        </a>
                         </div><?php endif; ?>

        
    </div>
</section>

<!--section 7 end-->

<div class="dsn-button-sidebar">
        <span><i class="fa fa-arrow-left"></i></span>
    </div>
    
    
    <div class="dsn-sidebar">
        <div class="close-wind" data-dsn-close=".dsn-sidebar"></div>
        <div class="sidebar-single">
            <div class="sidebar-single-content">
                <!-- <?php// get_sidebar(); ?> -->
                <?php dynamic_sidebar( 'primary-widget-area' ); ?>
            </div>
        </div>
    </div>
    
    

</div>  


<!-- close wrapper -->

<?php get_footer(); ?>


<div class="pincode_popup_div">
  <div class="pincode_popup">
    <div class="pincode_popup_close"><i class="fa fa-times" aria-hidden="true"></i></div>
    <h4 id="messagePopup"></h4>
  </div>
</div>