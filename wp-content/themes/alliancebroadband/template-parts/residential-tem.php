<?php
/**
* Template Name: Residential Temp
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

<!--section 1-->
<?php /*?><?php if(get_field("plan_heading")): ?><?php */?>
<section
            class="our-services-2  " >
        <div class="container">
            <div class="one-title"><div class="title-sub-container"><p class="title-sub" ><?php the_field("plan_heading_kolkata"); ?></p></div><h2 class="title-main" ><?php the_field("plan_subheading_kolkata"); ?></h2></div>

            <div class="row">





            
            <?php 

	query_posts(array( 
            
			'post_type' => 'allplan',
			'showposts' => -1,
			'order' => 'ASC', 
            'allplan_category' => 'Kolkata',

			) ); 

			$k=0; 
?>
<?php while (have_posts()) : the_post(); ?>
                                        <div class="col-md-4">
                                        <div class="col-md-12">
                                            <?php $url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()), 'thumbnail' ); ?>
            <div class="plan_info_div text-center orange_div">
                <h6><?php the_field("net_speed");?></h6>
              <img src="<?php echo $url ?>" class="img-fluid plan_icon">
              <h3><?php the_title(); ?></h3>
              <h4><i class="fa fa-inr" aria-hidden="true"></i><?php the_field("net_charge"); ?></h4>
              <p><?php the_content(); ?></p>
                <ul>
                <?php
                    $c = 1;
                        if( have_rows('plan_sublogo') ):
                            while ( have_rows('plan_sublogo') ) : the_row();
                ?>
                
                <li><img src="<?php the_sub_field("plan_sublogo_icon");?>"></li>
                
                <?php $c++; endwhile; endif; ?>
              </ul>
              <h5><?php the_field("ott_faqs"); ?></h5>

              <div class="link-custom dsn-active" data-dsn-animate="up" >
                                <a class="image-zoom effect-ajax new_connection" href="<?php the_field("book_canection_link"); ?>" >
                            <span><?php the_field("view_more_text2"); ?></span>
                        <div class="icon-circle" ></div></a>
                        </div>
            </div>
          </div>
                            <!--<div class="services-item">
                                <div class="corner corner-top"></div>
                                <div class="corner corner-bottom"></div>
                                <?php $url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()), 'thumbnail' ); ?>
	
                                <div class="icon" ><img src="<?php echo $url ?>" alt="" class="attachment-thumbnail size-thumbnail"></div>
                                <div class="services-header"><h3 data-dsn-animate=""><?php the_title(); ?></h3></div>
                                <div data-dsn-animate=""><?php the_excerpt(); ?></div>
                                <?php /*?><div class="link-custom dsn-active" data-dsn-animate="up" >
                                <a class="image-zoom effect-ajax" href="<?php the_field("view_more"); ?>" >
                            <span><?php the_field("view_more_text"); ?></span>
                        <div class="icon-circle" ></div></a>
                        </div><?php */?>
                        
                            </div>-->
                        </div>
                        
                              <?php $k++; endwhile;?>
            <?php  wp_reset_query();?>              
                                            
                                </div>
        </div>
    </section>
    
<?php /*?><?php endif; ?>   <?php */?>  
<!--section 1 end-->

<!--section 1-->
<?php /*?><?php if(get_field("plan_heading")): ?><?php */?>
<section
            class="our-services-2  " >
        <div class="container">
            <div class="one-title"><div class="title-sub-container"><p class="title-sub" ><?php the_field("plan_heading_roi"); ?></p></div><h2 class="title-main" ><?php the_field("plan_subheading_roi"); ?></h2></div>

            <div class="row">
            
            <?php 

    query_posts(array( 
            //'taxonomy' => 'allplan_category',
            'post_type' => 'allplan',
            'showposts' => -1,
            'order' => 'ASC', 
            //'allplan_category_name' => 'ROI',
            'allplan_category' => 'ROI',

            ) ); 

            $i=0; 
?>
<?php while (have_posts()) : the_post(); ?>
                                        <div class="col-md-4">
                                        <div class="col-md-12">
                                            <?php $url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()), 'thumbnail' ); ?>
            <div class="plan_info_div text-center orange_div">
                <h6><?php the_field("net_speed");?></h6>
              <img src="<?php echo $url ?>" class="img-fluid plan_icon">
              <h3><?php the_title(); ?></h3>
              <h4><i class="fa fa-inr" aria-hidden="true"></i><?php the_field("net_charge"); ?></h4>
              <p><?php the_content(); ?></p>
                <ul>
                <?php
                    $c = 1;
                        if( have_rows('plan_sublogo') ):
                            while ( have_rows('plan_sublogo') ) : the_row();
                ?>
                
                <li><img src="<?php the_sub_field("plan_sublogo_icon");?>"></li>
                
                <?php $c++; endwhile; endif; ?>
              </ul>
              <h5><?php the_field("ott_faqs"); ?></h5>

              <div class="link-custom dsn-active" data-dsn-animate="up" >
                                <a class="image-zoom effect-ajax new_connection" href="<?php the_field("book_canection_link"); ?>" >
                            <span><?php the_field("view_more_text2"); ?></span>
                        <div class="icon-circle" ></div></a>
                        </div>
            </div>
          </div>
                            <!--<div class="services-item">
                                <div class="corner corner-top"></div>
                                <div class="corner corner-bottom"></div>
                                <?php $url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()), 'thumbnail' ); ?>
    
                                <div class="icon" ><img src="<?php echo $url ?>" alt="" class="attachment-thumbnail size-thumbnail"></div>
                                <div class="services-header"><h3 data-dsn-animate=""><?php the_title(); ?></h3></div>
                                <div data-dsn-animate=""><?php the_excerpt(); ?></div>
                                <?php /*?><div class="link-custom dsn-active" data-dsn-animate="up" >
                                <a class="image-zoom effect-ajax" href="<?php the_field("view_more"); ?>" >
                            <span><?php the_field("view_more_text"); ?></span>
                        <div class="icon-circle" ></div></a>
                        </div><?php */?>
                        
                            </div>-->
                        </div>
                        
                              <?php $i++; endwhile;?>
            <?php  wp_reset_query();?>              
                                            
                                </div>
        </div>
    </section>
    
<?php /*?><?php endif; ?>   <?php */?>  
<!--section 1 end-->

<!--section 6-->
<?php if(get_field("blog_heading")): ?>
<section
            class="our-news dsn-arrow  " >
        <div class="container">
            <div class="one-title"><div class="title-sub-container"><p class="title-sub" data-dsn-animate=up><?php the_field("blog_heading"); ?></p></div><h2 class="title-main" data-dsn-animate=up><?php the_field("blog_subheading"); ?></h2></div>            <div class="custom-container">
                <div class="slick-slider">
                                              <?php 

	query_posts(array( 

			'post_type' => 'post',
			'showposts' => -1,
			'order' => 'ASC', 
			'category_name' => 'business',

			) ); 

			$a=0; 
?>
<?php while (have_posts()) : the_post(); ?>
                                                <div class="item-new slick-slide">
                                                <?php $url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()), 'thumbnail' 

); ?>
                                <div class="image" data-overlay="0">
                                    <img width="768" height="432" src="<?php echo $url ?>" class="attachment-medium_large size-medium_large wp-post-image" alt="" />                               </div>
                                <div class="content">
                                    <h5><?php the_date(); ?></h5>

                                    <div class="cta">
                                                                                <a class="effect-ajax" href="<?php the_permalink(); ?>"
                                           data-dsn="parallax"
                                           rel="bookmark" title="A lovely trip to London with my family"><?php the_title(); ?> </a>
                                    </div>

                                    <?php the_excerpt(); ?>

                                </div>
                            </div>
                            
                                                    
                 <?php $a++; endwhile;?>
            <?php  wp_reset_query();?>                                    
                                                    
                        
                </div>
            </div>
        </div>
    </section>
   <?php endif; ?> 
<!--section 6 end-->


<!--section 5-->

<?php if(get_field("testimonial_heading")): ?>
<div class="box-gallery-vertical section-padding   " data-dsn="color">
    <div class="mask-bg"></div>
<section
            class="client-see dsn-arrow  "  >
        <div class="container">
            <div class="inner">
                                    <div class="left">
                        <h2 class="title" data-dsn-grid="move-section" data-dsn-move="-60"
                            data-dsn-duration="100%" data-dsn-opacity="1" data-dsn-responsive="tablet">
                            <span class="text"><?php the_field("testimonial_heading"); ?></span>
                        </h2>
                    </div>

                
                <div class="items">
                    <div class="slick-slider">
                    <?php 

	query_posts(array( 

			'post_type' => 'testimonials',
			
			'showposts' => -1,
			'order' => 'ASC', 

			) ); 

			$j=0; 
?>
<?php while (have_posts()) : the_post(); ?>
                                                        <div class="item">

                                    <div class="quote"><?php the_content(); ?></div>                                    <div class="bottom f-align-center">
                                    <?php $url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()), 'thumbnail' 

); ?>
                                        <div class="avatar"><img width="100" height="100"   src="<?php echo $url ?>" alt="" class="attachment-thumbnail size-thumbnail "/>
                                        </div>
                                        <div class="label"><div class="cell">- <?php the_title(); ?>, <?php the_field("designation"); ?></div></div>                                    </div>
                                </div>

                                                            

                             <?php $i++; endwhile;?>
            <?php  wp_reset_query();?>                                

                            
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
    <?php endif; ?>
<!--section 5 end-->

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
