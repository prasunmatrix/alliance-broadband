<?php
/**
* Template Name: Partners Temp
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


<section
            class="our-services-2  " >
        <div class="container">
            <?php if(get_field("partner_factors")): ?><div class="one-title"><div class="title-sub-container"><p class="title-sub" ><?php the_field("partner_factors"); ?></p> </div><h2 class="title-main" ><?php the_field("partner_factors_subheading"); ?></h2></div><?php endif; ?>

            <div class="row">
            <?php
	$c = 1;
        if( have_rows('factors_name_part') ):
            while ( have_rows('factors_name_part') ) : the_row();
?>
            
                                        <div class="col-md-4">
                            <div class="services-item">
                                <div class="corner corner-top"></div>
                                <div class="corner corner-bottom"></div>
                               	
                                <div class="icon" ><img src="<?php the_sub_field("factors_pic");?>" alt="" class="attachment-thumbnail size-thumbnail" style="height:200px;"></div>
                                <div class="services-header"><h3 data-dsn-animate=""><?php the_sub_field("factors_name");?></h3></div>
                                <div data-dsn-animate=""><?php the_sub_field("factors_details");?></div>
                                <?php /*?><div class="link-custom dsn-active" data-dsn-animate="up" >
                                <a class="image-zoom effect-ajax" href="<?php the_permalink(); ?>" >
                            <span>More</span>
                        <div class="icon-circle" ></div></a>
                        </div><?php */?>
                        
                            </div>
                        </div>
                   <?php $c++; endwhile; wp_reset_query(); endif; ?>                  
                                            
                                </div>
                                
                               <?php if(get_field("book_your_connection_text")): ?> <div class="link-custom dsn-active" data-dsn-animate="up" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);text-align: center;
padding: 30px 0;">
                             <a class="image-zoom effect-ajax new_connection " href="javascript:void(0)"
                           data-dsn="parallax">
                       
                               <!--  <a class="image-zoom effect-ajax" href="<?php// the_field("book_your_connection_link"); ?>"
                           data-dsn="parallax"> -->
                            <span><?php the_field("book_your_connection_text"); ?></span><div class="icon-circle"></div>
                        </a>
                        <?php endif; ?> </div>
        </div>
    </section>
    
   
<!--section 1 end-->

<!--section 6-->
<?php if(get_field("know_our_alliances")): ?>
 <section class="contact-up next-post-up section-margin section-padding" id="map_sec" rel="enterpincode">
        <div class="container">
            <div class="one-title"><div class="title-sub-container"><p class="title-sub" data-dsn-animate=up><?php the_field("know_our_alliances"); ?></p></div><h2 class="title-main" data-dsn-animate=up><?php the_field("know_our_alliances_subheading"); ?></h2></div>            <div class="custom-container">
                
            </div>
        </div>

    
   
  
            <div class="">
                <div class="c-wapp">
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
                              <input type="text" name="pincode" id="pincode" style=" border-bottom:1px solid #ccc"  />
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
               <!--  <?php// dynamic_sidebar( 'primary-widget-area' ); ?> -->
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
<div class="pincode_popup_error_div">
  <div class="pincode_popup_error">
    <div class="pincode_popup_error_close"><i class="fa fa-times" aria-hidden="true"></i></div>
    <h4 id="errorPincodePopup"></h4>
  </div>
</div>