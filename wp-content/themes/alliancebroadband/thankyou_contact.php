<?php
/**
 * Template Name: Thank You Contact
 */

get_header();

$asset_url=get_template_directory_uri()."/assets/";


?>

    
<div class="wrapper">
		<div class="thankyou-bg">
    <div class="container">
    	<div class="row">
        <div class="col-md-6">
       <center>
        <?php while(have_posts()) : the_post(); ?>
        <?php the_content();?>
        <?php endwhile; ?>
        <?php
          // global $wpdb;
          // $id=$_REQUEST['id'];
          // $resultConnection = $wpdb->get_results("SELECT hp.*,cm.city_name,pm.* from wp_homeplan as hp INNER JOIN wp_city_master as cm ON hp.city_id=cm.id INNER JOIN wp_plan_master as pm ON hp.plan_id=pm.id WHERE hp.id='$id'");
          
        ?>
       
        
        </center>
        </div>
        <section class="our-services-2 col-md-6">
          <div class="">
            <div class=""><div class="col-md-4"></div>
              <div class="col-md-12" >
                <!-- <div class="col-md-12">

                  <?php //$url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()), 'thumbnail' ); ?>
                  <div class="plan_info_div text-center orange_div" style="height: auto;    border-radius: 20px;
                    margin-top: 100px;">
                     
                  <img class="img-fluid" src="<?php //echo bloginfo('url');?>/wp-content/uploads/2021/02/router1.png" alt="router" />
                  <h6 style="    text-align: center;"><?php //echo $resultConnection[0]->speed;?></h6>
                  <img src="<?php //echo $url ?>" class="img-fluid plan_icon">
                  <h3><?php //echo $resultConnection[0]->plan_name; ?></h3>
                  <h4><i class="fa fa-inr" aria-hidden="true"></i><?php //echo $resultConnection[0]->price; ?></h4>
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
                  </div>
                </div>       -->
              </div>                  
            </div>
          </div>
        </section>
       
        <div class="col-md-12">
                  <!--<img  src="<?php //the_field("thankyouinfo_img"); ?>" class="img-fluid">-->
                  <img  src="http://dev.maxmobility.in:88/alliancebroadband/wp-content/uploads/2021/02/Alliance-NewConnection-TY-Infographic-4.jpeg" class="img-fluid">
                </div> 
      
      
        
        <!--<p><a href="http://www.tataagrico.com/products" target="_blank" style="color:#fff">View Our Products</a> | <a href="http://www.tataagrico.com/expression" target="_blank" style="color:#fff">Read Our Blogs</a></p>-->
        
       <?php /*?> <div class="col-md-4 col-md-offset-4"> <a href="<?php echo site_url();?>" class="more-btn"><span>Click To Continue</span></a></div><?php */?>
			 
        </div>
    </div>
    </div>

</div>


<style>
  .pp-btn:hover{ background:#f1f1f1}
</style>
<?php
get_footer();