<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>






<div class="wrapper">
<!--banner-->
	<div class="dsn-slider demo1" data-dsn-header="project">
        <div class="dsn-root-slider has-top-bottom" id="dsn-hero-parallax-img">
            <div class="slide-inner">
                <div class="swiper-wrapper">
                <?php 

    query_posts(array( 

            'post_type' => 'bannerslider',
            //'taxonomy' => 'alltheme-category',
            'showposts' => -1,
            'order' => 'DESC', 

            ) ); 

            $s=0; 
?>
<?php while (have_posts()) : the_post(); ?>

                    <div class="slide-item swiper-slide">
    <div class="slide-content">
        <div class="slide-content-inner">
          <div class="project-metas"><div class="project-meta-box project-work cat"><span></span></div></div>

            <div class="title-text-header">
                <h1 class="title-text-header-inner">
                    <a href="javascript:void(0)" class="effect-ajax"
                       data-dsn-ajax="slider">
                   </a>
                </h1>
            </div>

            <p><?php the_content(); ?></p>

            <!--<div class="link-custom">
                <a href="#" class="image-zoom effect-ajax" data-dsn="parallax"
                   data-dsn-ajax="slider">
                    <span>View Case</span>
                </a>
            </div>-->

        </div>
    </div>
    <div class="image-container">
<?php $url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()), 'thumbnail' ); ?>
    

        <div class="image-bg cover-bg" data-image-src="<?php echo $url ?>"  data-overlay="<?php echo $s ?>" ></div>
        <div class="image-bg cover-bg mob-banner" data-image-src="<?php the_field("mob_screen_banner"); ?>"  data-overlay="<?php echo $s ?>" ></div>

    </div>
</div>
                    
                    
<?php $s++; endwhile;?>
            <?php // wp_reset_query();?>

                </div>
            </div>
        </div>

        <div id="dsn-hero-parallax-titles" class="dsn-slider-content project-title"></div>
                    <div class="nav-slider">
                <div class="swiper-wrapper" role="navigation">

<?php 

    query_posts(array( 

            'post_type' => 'bannerslider',
            //'taxonomy' => 'alltheme-category',
            'showposts' => -1,
            'order' => 'DESC', 

            ) ); 

            $s=0; 
?>
<?php while (have_posts()) : the_post(); ?>

                                            <div class="swiper-slide">
                            <div class="image-container">
                            <?php $url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()), 'thumbnail' ); ?>
                                <div class="image-bg cover-bg" data-image-src="<?php echo $url ?>" 
                                     data-overlay="<?php echo $s ?>">
                                </div>
                            </div>
                            <!--<div class="content">
                                <p>01</p>
                            </div>-->
                        </div>

                                                

                 <?php $s++; endwhile;?>
            <?php  wp_reset_query();?>                                

                        

                </div>
            </div>
                <section class="footer-slid" id="descover-holder">
            <div class="main-social">
                <div class="social-icon">
                    <div class="social-btn">
                        <div class="svg-wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.3 23.2">
                                <path
                                        d="M19.4 15.5c-1.2 0-2.4.6-3.1 1.7L7.8 12v-.7l8.5-5.1c.7 1 1.9 1.6 3.1 1.6 2.1 0 3.9-1.7 3.9-3.9S21.6 0 19.4 0s-3.9 1.7-3.9 3.9v.4L7 9.3c-1.3-1.7-3.7-2-5.4-.8s-2.1 3.7-.8 5.4c.7 1 1.9 1.6 3.1 1.6s2.4-.6 3.1-1.6l8.5 5v.4c0 2.1 1.7 3.9 3.9 3.9s3.9-1.7 3.9-3.9c0-2.1-1.7-3.8-3.9-3.8zm0-13.6c1.1 0 1.9.9 1.9 1.9s-.9 1.9-1.9 1.9-1.9-.7-1.9-1.8.8-2 1.9-2zM3.9 13.6c-1.1 0-1.9-.9-1.9-1.9s.9-1.9 1.9-1.9 1.9.9 1.9 1.9-.8 1.9-1.9 1.9zm15.5 7.8c-1.1 0-1.9-.9-1.9-1.9s.9-1.9 1.9-1.9 1.9.9 1.9 1.9-.8 1.8-1.9 1.9z">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>
                <ul class="social-network">
                    <?php if(!empty(get_theme_mod('follow_us_header'))) { ?>
               	<li class="image-zoom social-icons-facebook " data-dsn="parallax"><a href="<?php echo get_theme_mod('follow_us_header'); ?>" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
           	   <?php } if(!empty(get_theme_mod('twitter_links'))) { ?>
               	<li class="social-icons-twitter" data-dsn="parallax"><a href="<?php echo get_theme_mod('twitter_links'); ?>" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
               <?php } if(!empty(get_theme_mod('linked_in_link'))) { ?>
               	<li class="social-icons-linkedin" data-dsn="parallax"><a href="<?php echo get_theme_mod('linked_in_link'); ?>" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
           	   <?php } if(!empty(get_theme_mod('instagram_in_link'))) { ?>
               	<li class="social-icons-linkedin" data-dsn="parallax"><a href="<?php echo get_theme_mod('instagram_in_link'); ?>" target="_blank" title="Instgram"><i class="fab fa-instagram"></i></a></li>
           	   <?php } ?>               </ul>
            </div>

            <div class="control-num">
                <span class="sup active">01</span>
            </div>
            <div class="control-nav">
                <div class="prev-container" data-dsn="parallax">
                    <svg viewBox="0 0 40 40">
                        <path class="path circle" d="M20,2A18,18,0,1,1,2,20,18,18,0,0,1,20,2"></path>
                        <polyline class="path" points="14.6 17.45 20 22.85 25.4 17.45"></polyline>
                    </svg>
                </div>

                <div class="next-container" data-dsn="parallax">
                    <svg viewBox="0 0 40 40">
                        <path class="path circle" d="M20,2A18,18,0,1,1,2,20,18,18,0,0,1,20,2"></path>
                        <polyline class="path" points="14.6 17.45 20 22.85 25.4 17.45"></polyline>
                    </svg>
                </div>
            </div>
        </section>



    </div>
    

    <div class="mobile-view" >
    <ul>    
        <?php
    $m = 1;
        if( have_rows('mobile_view_point') ):
            while ( have_rows('mobile_view_point') ) : the_row();
?>

        <li class="<?php the_sub_field("new_connection");?>"><a href="<?php the_sub_field("menu_view_link");?>" >
                <img src="<?php the_sub_field("menu_view_icon");?>" />
                <h6><?php the_sub_field("menu_view_text");?></h6>
            </a>
        </li>
      <?php $m++; endwhile; wp_reset_query(); endif; ?>  
    </ul>


</div>

    <div class="suitable_plan link-custom">
    <ul>
        <li><span>Find your Suitable Plan</span></li>
        <li><a href="javascript:void(0)" class="image-zoom effect-ajax home_btn_popup banner_btn_bg" data-dsn-ajax="slider" type="button" data-toggle="modal" data-target=".bd-example-modal-lg">
                    <span>Home</span>
                <div class="icon-circle" ></div></a></li>
        <li><a href="javascript:void(0)" class="image-zoom effect-ajax home_btn_popup2 banner_btn_bg" data-dsn-ajax="slider" type="button" data-toggle="modal" data-target=".bd-example-modal-lg2" >
                    <span>Office</span>
                <div class="icon-circle" ></div></a></li>
    </ul>
</div>
    
<!--banner end-->

<!--about-->
<?php if(get_field("hello_we_are_content")): ?>
<section
        class="intro-about  " >
    <div class="container">

        <div class="row">
            <div class="col-lg-6">
                <div class="intro-content-text">
                    
	

                        <h2 data-dsn-grid="move-section" data-dsn-move="-30" data-dsn-duration="100%"
                            data-dsn-opacity="1.2" data-dsn-responsive="tablet">
                          <?php the_field("hello_we_are"); ?>                       </h2>
                    <div class="span-small" data-dsn-animate=up><p><?php the_field("hello_we_are_content"); ?></p></div>
                    
                    <!--<h6 data-dsn-animate="up">SALVADOR DALI</h6><small data-dsn-animate="up">Digital Artisit</small>-->
                    <?php if(get_field("our_years")): ?>
                    <div class="exper">

                                                    <div class="numb-ex">
                                <span class="word" data-dsn-animate="up"><?php the_field("our_years"); ?>+</span>                            </div>
                                                <h4 data-dsn-animate="up"><?php the_field("our_years_text"); ?></h4>                    </div>
<?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="background-mask">
        <div class="img-box h-100">
            <div class="img-cent h-100" >
                <div class="img-container h-100">
                    <img alt="img"  src="<?php the_field("hello_we_are_img"); ?>" />               </div>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>
<!--about end-->


<!--section 3-->
<?php if(get_field("refer_carousal_heading")): ?>
<section
            class="our-work dsn-arrow work-under-header  "             data-dsn-col="3">
        <div class="container">
            <div class="one-title"><div class="title-sub-container"><p class="title-sub" data-dsn-animate=up><?php the_field("refer_carousal_heading"); ?></p></div><h2 class="title-main" data-dsn-animate=up><?php the_field("refer_carousal_subheading"); ?></h2></div>        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9 offset-lg-3">
                    <div class="work-container">
                        <div class="slick-slider">
                        <?php 

    query_posts(array( 

            'post_type' => 'refer',
            
            'showposts' => -1,
            'order' => 'ASC', 

            ) ); 

            $j=0; 
?>
<?php while (have_posts()) : the_post(); ?>

                                                                <div class="work-item slick-slide">

                                   <?php $url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()), 'thumbnail' 

); ?>
        
                                        <img width="768" height="514"   alt="" src="<?php echo $url ?>" />                                       
                                        <div class="item-border"></div>
                                        <div class="item-info">
                                            <?php if(get_field("offer_download_link")): ?>
                                            <a class="effect-ajax" href="<?php the_field("offer_download_link"); ?>"
                                               data-dsn-grid="move-up"
                                               rel="bookmark" title="Re Styling" target="_blank">
                                                <h5 class="cat">    <?php the_title(); ?></h5>
                                                <h4><?php the_content(); ?></h4>
                                                <span><?php the_field("offer_download_btn"); ?></span>                                            
                                            </a>
                                            <?php endif; ?>

                                        </div>

                                    </div>
                                                                    
                                                                    
                            <?php $j++; endwhile;?>
            <?php  wp_reset_query();?>    
                        </div>

                            <!--mobile-part offer-->

                                <div class="slick-slider002">
                                 <?php 

                                    query_posts(array( 

                                            'post_type' => 'refer',
                                            
                                            'showposts' => -1,
                                            'order' => 'ASC', 

                                            ) ); 

                                            $j=0; 
                                ?>
                                <?php while (have_posts()) : the_post(); ?>

                                                                <div class="work-item ">

                                   <?php $url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()), 'thumbnail' 

); ?>
        
                                        <img width="768" height="514"   alt="" src="<?php echo $url ?>" />                                       
                                        <div class="item-border"></div>
                                        <div class="item-info">
                                            <?php if(get_field("offer_download_link")): ?>
                                            <a class="effect-ajax" href="<?php the_field("offer_download_link"); ?>"
                                               data-dsn-grid="move-up"
                                               rel="bookmark" title="Re Styling" target="_blank">
                                                <h5 class="cat">    <?php the_title(); ?></h5>
                                                <h4><?php the_content(); ?></h4>
                                                <span><?php the_field("offer_download_btn"); ?></span>                                            
                                            </a>
                                            <?php endif; ?>

                                        </div>

                                    </div>
                                                                    
                                                                    
                            <?php $j++; endwhile;?>
            <?php  wp_reset_query();?>    
                        </div>


                            <!--mobile-part offer-->

                    </div> 
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>         
<!--section 3 end-->





<!--section 1-->

<?php if(get_field("plan_heading")): ?>
<section
            class="our-services-2  " >
        <div class="container">
            <div class="one-title"><div class="title-sub-container"><p class="title-sub" ><?php the_field("plan_heading"); ?></p></div><h2 class="title-main" ><?php the_field("plan_subheading"); ?></h2></div>

            <div class="row">
            <div  class="col-md-12"> 
                <div class="one-title"><div class="title-sub-container"><p class="title-sub" ><?php the_field("plan_heading_area"); ?></p></div></div>
                <div class="home-plan-banner"><img src="<?php the_field("home_plan_banner_kolkata"); ?>"></div>
                <div class="row">
            <?php 

	query_posts(array( 

			'post_type' => 'allplan',
			'showposts' => 4,
			'order' => 'ASC',
            'allplan_category' => 'HomeKolkata', 

			) ); 

			$i=0; 
?>
<?php while (have_posts()) : the_post(); ?>
                                        <div class="col-md-3">
                          
                                
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
                                              <!-- <h5><?php // the_field("ott_faqs"); ?></h5> -->
                                              <h5><?php echo get_the_category_list(); ?></h5>
                                            </div>
                                        <div class="link-custom dsn-active" data-dsn-animate="up" >
                                <a class="image-zoom effect-ajax" href="<?php the_field("view_more"); ?>" >
                                    <span><?php the_field("view_more_text"); ?></span>
                                <div class="icon-circle" ></div></a>
                                </div>
                                
                            </div>
                        
                        
                              <?php $i++; endwhile;?>
            <?php  wp_reset_query();?>  

            </div>
                                
                            </div>












            <div  class="col-md-12" style="margin-top: 50px"> 






                <div class="one-title"><div class="title-sub-container"><p class="title-sub" ><?php the_field("plan_heading_area2"); ?></p></div></div>

                <div class="home-plan-banner"><img src="<?php the_field("home_plan_banner_roi"); ?>"></div>
                <div class="row">
             <?php 

    query_posts(array( 

            'post_type' => 'allplan',
            'showposts' => 4,
            'order' => 'ASC', 
            'allplan_category' => 'HomeROI',

            ) ); 

            $i=0; 
?>
<?php while (have_posts()) : the_post(); ?>
                                        <div class="col-md-3">
                          
                                
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
                                              <!-- <h5><?php //the_field("ott_faqs"); ?></h5> -->
                                               <h5><?php echo get_the_category_list(); ?></h5>


                                            </div>

                                        <div class="link-custom dsn-active" data-dsn-animate="up" >
                                <a class="image-zoom effect-ajax" href="<?php the_field("view_more"); ?>" >
                                    <span><?php the_field("view_more_text"); ?></span>
                                <div class="icon-circle" ></div></a>
                                </div>
                                
                            </div>
                        
                        
                              <?php $i++; endwhile;?>
            <?php  wp_reset_query();?>
            </div>
                                
                 </div>              
                                            
          </div>
        </div>
    </section>
    
<?php endif; ?>    
<!--section 1 end-->


<!--section 2-->
<?php if(get_field("residential_heading")): ?>
<section class="">
<div class="box-seat box-seat-full  " >
        <div class="container-fluid">

            <div class="inner-img" data-dsn-grid="move-up"
                 data-overlay="0">

                <img width="1800" height="1080"   alt="" src="<?php the_field("residential_heading_img"); ?>" >            </div>

            <div class="pro-text" >
                                <h3 data-dsn-animate=up><?php the_field("residential_heading"); ?></h3>
                                <p class="span-small" data-dsn-animate="up"><?php the_field("residential_heading_text"); ?></p>                    <div class="link-custom" data-dsn-animate="up">
                        <a class="image-zoom effect-ajax" href="<?php the_field("residential_link"); ?>"
                           data-dsn="parallax">
                            <span><?php the_field("residential_linktext"); ?></span>
                        </a>
                    </div>
                            </div>
        </div>
    </div>
		</section>
<?php endif; ?>         
<!--section 2 end-->




<!--section 4-->
<?php if(get_field("whyalliance_heading")): ?>
<div class="box-gallery-vertical section-padding   "
    data-dsn=color >
    <div class="mask-bg"></div>
    <div class="container">
        <div class="row align-items-center h-100">
            <div class="col-lg-6 ">
                                    <!-- <div class="box-im" data-dsn-grid="move-up"
                         data-overlay="0" > -->
<div class="box-im" >
                        <div class="swiper-container h-100 container-swip-vir">
                            <div class="swiper-wrapper">

                                <!-- <?php if(the_field('whyalliance_img')!=""){
                                ?>
                                <div class="swiper-slide">

                                    <img width="880" height="1127"   alt="" src="<?php// echo the_field('whyalliance_img'); ?>" class="has-top-bottom image-bg " />

                                </div>
                               <?php 
                                
                               }

                                else {
                                ?>   

                                    <div class="swiper-slide">

                                        <img width="880" height="1127"   alt="" src="<?php// echo the_field('whyalliance_video'); ?>" class="has-top-bottom image-bg " />

                                    </div>
                              <?php      
                              } 
                                ?> -->

                                <div class="swiper-slide">
                                    <video width="100%" autoplay muted loop>
  <!-- <source src="<?php //echo the_field('whyalliance_video'); ?>" type="video/mp4"> -->

                                <source src="<?php echo get_template_directory_uri(); ?>/assets/video.mp4" type="video/mp4">
                              <!-- <source src="movie.ogg" type="video/ogg"> -->
                             
                            </video>

                                    

                                </div>
                                                            </div>
                        </div>

                    </div>
                            </div>

            <div class="col-lg-6">
                <div class="box-info">

                                            <div class="title-cover" data-dsn-grid="move-section" data-dsn-opacity="0.1"
                             data-dsn-duration="170%" data-dsn-move="0%">
                            Why                        </div>
                    
                    <div class="vertical-title">
                    <h2 data-dsn-animate=up>
					<?php the_field("whyalliance_heading"); ?></h2>
                    </div>
                    <h6 data-dsn-animate=up><?php the_field("whyalliance_subheading"); ?></h6>
                    <p data-dsn-animate=up><?php the_field("whyalliance_content"); ?></p>                        
                    <?php if(get_field("whyalliance_btntext")): ?>
                    <div class="link-custom" data-dsn-animate="up">
                            <a class="image-zoom effect-ajax" href="<?php the_field("whyalliance_btnlink"); ?>"
                               data-dsn="parallax">
                                <span><?php the_field("whyalliance_btntext"); ?></span>
                            </a>
                        </div>
                        <?php endif; ?>
                                    </div>

            </div>
        </div>

    </div>
</div>
<?php endif; ?>
<!--section 4 end-->

<!--section 5-->
<?php if(get_field("testimonial_heading")): ?>
<section
            class="client-see dsn-arrow  " >
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
    <?php endif; ?>
<!--section 5 end-->

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
			'showposts' => 10,
			'order' => 'ASC', 

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
                                           rel="bookmark" title=""><?php the_title(); ?> </a>
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


<!--section 7-->
<?php if(get_field("our_clients_heading")): ?>
<section
        class="brand-client  " >
    <div class="container">

        <div class="one-title"><div class="title-sub-container"><p class="title-sub" data-dsn-animate=up><?php the_field("our_clients_heading"); ?></p></div><h2 class="title-main" data-dsn-animate=up><?php the_field("our_clients_subheading"); ?></h2></div>

        <div class="wapper-client">
				
                <?php 

	query_posts(array( 

			'post_type' => 'client',
			
			'showposts' => -1,
			'order' => 'ASC', 

			) ); 

			$k=0; 
?>
<?php while (have_posts()) : the_post(); ?>
                
<?php $url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()), 'thumbnail' ); ?>
                        <div class="logo-box">
                            <img width="300" height="90"   alt=""  src="<?php echo $url ?>" class="attachment-droow-brand-img size-droow-brand-img " />                                                                                        <div class="info">
                                    <div class="content">
                                        <div class="icon">
                                            <i class="fas fa-plus"></i>
                                        </div>

                                        <div class="entry">
                                            <div>
                                                <h5><?php the_title(); ?></h5>                                                <a href="<?php the_field("client_url"); ?>" target="_blank" rel="nofollow"><?php the_field("client_sitename"); ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                        </div>

                 <?php $k++; endwhile;?>
            <?php  wp_reset_query();?>          
        </div>
    </div>
</section>
<?php endif; ?>   
<!--section 7 end-->
<!--section 8-->
<section id="map_sec" class="contact-up next-post-up section-margin section-padding" >
            <div class="container-fluid">
                <div class="c-wapp">
                  <!-- <div class="effect-ajax">
                    <div class="row">
                      <a href="javascript:void(0)" class="col-md-8"><span class="hiring" style="width:100%"><?php //the_field("enter_pincode"); ?></span></a>
                      <span class="career col-md-4">
                      <div class="form-group">
                      <input type="number" class="" style=" border-bottom:1px solid #ccc"/>
                      <button>Search</button></div><br /><br />
                        <?php //the_field("only_residents"); ?>                      </span>
                    </div>
                  </div> -->
                  <div class="row">
                    <div class="col-md-8">
                      <!-- <div  id="mapid" style="width:100%; height:450px;"></div> -->
                      <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14736.221804284312!2d88.48880994999999!3d22.577029300000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1611747169185!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
                      <div  id="mapId" style="width:100%; height:450px;"></div>  
                    </div>
                    <div class="col-md-4" style="padding-top:100px" >
                      <div class="effect-ajax" style="text-align:center">
                          <span class="hiring" style="padding-bottom:40px"><h3><?php the_field("enter_pincode"); ?></h3></span><br /><br />
                          <form name="pincodefrm" id="pincodefrm" method="post" action="" autocomplete="off">
                            <div class="form-group">
                              <input type="text" name="pincode" id="pincode" placeholder="Enter Pincode" style=" border-bottom:1px solid #ccc"  />
                              <span id="pincode_error_msg"></span>
                              <!-- <button type="button" name="submitpincode" id="submitpincode" onclick="pincodeChecking(pincode.value);" >Search</button>                               -->
                              <button type="submit" name="submitpincode" id="submitpincode">Search</button>
                            </div>
                          </form>

                          <br /><br />
                          <span class="career">  <?php the_field("only_residents"); ?>                      </span>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </section>
<!--section 8 end-->


</div><!-- close wrapper -->


<!--modal form-->

<div id="popupform_1" class="modal fade bd-example-modal-lg"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Home</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
              
            </div>
            <div class="modal-body">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-4" style="padding: 0;">
                      <div class="form_logo_div">
                          
                      </div>
                  </div>  
                  <div class="col-md-8" onload="createCaptcha();">
                    <form action="<?php echo site_url();?>/php/homeplan.php" method="post" name="homefrm" id="homefrm" onsubmit="return validateHomePlan()" autocomplete="off">
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">Number of Devices</label>
                        <input type="text" class="form-control" name="number_of_device" id="number_of_device">
                        <span id="number_of_device_msg" style="color:red;"></span>
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">City</label>
                        <select class="form-control" name="city" id="city">
                          <option value="0">--Select City--</option>
                          <?php
                          global $wpdb;
                          $resultCityMaster = $wpdb->get_results("SELECT * from wp_city_master");
                          foreach($resultCityMaster as $key=>$val)
                          {
                          ?>
                            <option value="<?php echo $val->id; ?>"><?php echo $val->city_name; ?></option>
                          <?php    
                          }
                          ?>
                          
                          <!-- <option value="Kolkata">Kolkata</option>
                          <option value="Bangalore">Bangalore</option>
                          <option value="Mumbai">Mumbai</option>
                          <option value="Chennai">Chennai</option>
                          <option value="Hydrabad">Hydrabad</option> -->
                        </select>
                        <span id="city_msg" style="color:red;"></span>
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">Speed Needed</label>
                        <select class="form-control" name="plan" id="plan">
                          <option value="0">--Select speed--</option>
                        </select>
                        <span id="plan_msg" style="color:red;"></span>
                      </div>
                      <div class="my-3 radio_form">
                        <input class="redio_btn_input" type="radio" name="address_from" id="address_from" onclick="formChoice(0)" value="Use Current Location"> Use Current Location<br>
                          <input type="text" name="popupform_1_a" class="field1 form-control mb-4" placeholder="Address" readonly>
                          <input type="text" name="popupform_1_l" class="field1 form-control mb-4" placeholder="Landmark" readonly>
                          <input type="text" name="popupform_1_p" class="field1 form-control mb-4" placeholder="Pincode" readonly>
                          <!-- <input type="text" name="businessSite" class="field1 form-control mb-4" placeholder="Nearby Franchise Number"> -->
                          <br>
                          <input class="redio_btn_input" type="radio" name="address_from" id="address_from" onclick="formChoice(1)" value="User Given Address" > Enter Address<br>
                          <input type="text" name="address" id="address" class="field2 form-control mb-4" placeholder="Address" >
                          <input type="text" name="landmark" id="landmark" class="field2 form-control mb-4" placeholder="Landmark" >
                          <input type="text" name="pincode" id="pincode_home" class="field2 form-control mb-4" placeholder="Pincode">
                          <!-- <input type="tel" name="franchise_number" id="franchise_number" class="field2 form-control mb-4" placeholder="Nearby Franchise Number" required="required" pattern="^\d{10}$"> -->
                          <span id="address_from_msg" style="color:red;"></span>
                          <span id="address_msg" style="color:red;"></span>
                          <span id="landmark_msg" style="color:red;"></span>
                          <span id="pincode_msg" style="color:red;"></span>                      
                      </div>
                      <div class="form-group">
                        <label for="">Phone Number</label>
                        <input type="tel" name="phone_no" id="phone_no" class="form-control" />
                        <span id="phone_no_msg" style="color:red;"></span>
                      </div>
                      <div class="form-group" style="margin-bottom:30px;">
                        <label for="">Name</label>
                        <input type="text" name="uname" id="uname" class="form-control">
                        <span id="uname_msg" style="color:red;"></span>
                      </div>
                      <div class="form-group" style="margin-bottom:30px;">
                        <label for="">Email</label>
                        <input type="text" name="uemail" id="uemail" class="form-control">
                        <span id="uemail_msg" style="color:red;"></span>
                      </div>
                      <div class="form-group" style="margin-bottom:30px;">
                        <div id="captcha" style="margin-left: 208px;"></div><a href="javascript:void(0);" onclick="createCaptcha();"><img src="<?php echo get_template_directory_uri();?>/assets/images/refresh.png"></a>
                      </div>
                      <div class="form-group" style="margin-bottom:30px;">
                        <label for="">Enter Captcha</label>
                        <input type="text" name="cpatchaTextBox" id="cpatchaTextBox" class="form-control">
                        <span id="cpatchaTextBox_msg" style="color:red;"></span>
                      </div>  
                      <center>
                        <input type="submit" name="frmsubmit" id="frmsubmit" class="btn popup_btn" value="Know Your Plan" />
                      </center>             
                    </form>
                  </div>
                </div>               
              </div>
            </div>
          </div>
        </div>
      </div>


      <div id="popupform_2" class="modal fade bd-example-modal-lg2"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Office From Home</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="container-fluid">
                <div class="row">
                   <div class="col-md-4" style="padding: 0;">
                      <div class="form_logo_div">
                          
                      </div>
                  </div>   
                  <div class="col-md-8" onload="createCaptcha1();">
                    <form action="<?php echo site_url();?>/php/officehomeplan.php" method="post" name="homefrm" id="homefrm" onsubmit="return validateOfficeHomePlan()" autocomplete="off">
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">Number of Devices</label>
                        <input type="text" class="form-control" name="number_of_device" id="number_of_device1">
                        <span id="number_of_device_msg1" style="color:red;"></span>
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">City</label>
                        <select class="form-control" name="city_office_from_home" id="city_office_from_home">
                          <option value="0">--Select City--</option>
                          <?php
                          global $wpdb;
                          $resultCityMaster = $wpdb->get_results("SELECT * from wp_city_master");
                          foreach($resultCityMaster as $key=>$val)
                          {
                          ?>
                            <option value="<?php echo $val->id; ?>"><?php echo $val->city_name; ?></option>
                          <?php    
                          }
                          ?>
                          <!-- <option value="Kolkata">Kolkata</option>
                          <option value="Bangalore">Bangalore</option>
                          <option value="Mumbai">Mumbai</option>
                          <option value="Chennai">Chennai</option>
                          <option value="Hydrabad">Hydrabad</option> -->
                        </select>
                        <span id="city_msg1" style="color:red;"></span>
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">Speed Needed</label>
                        <select class="form-control" name="plan_office_from_home" id="plan_office_from_home">
                          <option value="0">--Select speed--</option>
                        </select>
                        <span id="plan_msg1" style="color:red;"></span>
                      </div>
                      <div class="my-3 radio_form">
                        <input  class="redio_btn_input" type="radio" name="address_from" onclick="formChoiceOffice(0)" value="Use Current Location"> Use Current Location<br>
                          <!-- <input type="text" name="businessSite" class="field3 form-control mb-4" placeholder="address">
                          <input type="text" name="businessSite" class="field3 form-control mb-4" placeholder="Landmark">
                          <input type="text" name="businessSite" class="field3 form-control mb-4" placeholder="Pincode"> -->
                          <input type="text" name="popupform_2_a" class="field3 form-control mb-4" placeholder="address" readonly>
                          <input type="text" name="popupform_2_l" class="field3 form-control mb-4" placeholder="Landmark" readonly>
                          <input type="text" name="popupform_2_p" class="field3 form-control mb-4" placeholder="Pincode" readonly>
                          <!-- <input type="text" name="businessSite" class="field3 form-control mb-4" placeholder="Nearby Franchise Number"> -->
                          <br>
                          <input class="redio_btn_input" type="radio" name="address_from" onclick="formChoiceOffice(1)" value="User Given Address" > Enter Address<br>
                          <input type="text" name="address" id="address_office" class="field4 form-control mb-4" placeholder="Address">
                          <input type="text" name="landmark" id="landmark_office" class="field4 form-control mb-4" placeholder="Landmark" >
                          <input type="text" name="pincode" id="pincode_office" class="field4 form-control mb-4" placeholder="Pincode">
                          <!-- <input type="tel" name="franchise_number" id="franchise_number_office" class="field4 form-control mb-4" placeholder="Nearby Franchise Number" required="required" pattern="^\d{10}$"> -->
                          <span id="address_from_msg1" style="color:red;"></span>
                          <span id="address_msg1" style="color:red;"></span>
                          <span id="landmark_msg1" style="color:red;"></span>
                          <span id="pincode_msg1" style="color:red;"></span>                      
                      </div>
                      <div class="form-group">
                        <label for="">Phone Number</label>
                        <input type="tel" name="phone_no" id="phone_no1" class="form-control" />
                        <span id="phone_no_msg1" style="color:red;"></span>
                      </div>
                      <div class="form-group" style="margin-bottom:30px;">
                        <label for="">Company Name</label>
                        <input type="text" name="company_name" id="company_name" class="form-control" />
                        <span id="company_name_msg" style="color:red;"></span>
                      </div>
                      <div class="form-group" style="margin-bottom:30px;">
                        <label for="">Email</label>
                        <input type="text" name="uemail" id="uemail1" class="form-control" />
                        <span id="uemail_msg1" style="color:red;"></span>
                      </div>
                      <div class="form-group" style="margin-bottom:30px;">
                        <div id="captcha1" style="margin-left: 208px;"></div><a href="javascript:void(0);" onclick="createCaptcha1();"><img src="<?php echo get_template_directory_uri();?>/assets/images/refresh.png"></a>
                      </div>
                      <div class="form-group" style="margin-bottom:30px;">
                        <label for="">Enter Captcha</label>
                        <input type="text" name="cpatchaTextBox1" id="cpatchaTextBox1" class="form-control">
                        <span id="cpatchaTextBox1_msg" style="color:red;"></span>
                      </div>  
                      <center>
                        <input type="submit" name="frmsubmitOffice" id="frmsubmitOffice" class="btn popup_btn" value="Know Your Plan" />
                      </center>             
                    </form>
                  </div>
                </div>               
              </div>
            </div>
          </div>
        </div>
      </div>



<?php
get_footer();
?>
<div class="pincode_popup_div">
  <div class="pincode_popup">
    <div class="pincode_popup_close"><i class="fa fa-times" aria-hidden="true"></i></div>
    <h4 id="messagePopup"></h4>
  </div>
</div>
<div class="pincode_popup_error_div">
  <div class="pincode_popup_error">
    <div class="pincode_popup_error_close"><i class="fa fa-times" aria-hidden="true"></i></div>
    <h4 id="errorPincodePopup"></h4>
  </div>
</div>