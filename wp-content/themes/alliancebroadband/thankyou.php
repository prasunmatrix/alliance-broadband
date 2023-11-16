<?php
/**
 * Template Name: Thank You
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
          global $wpdb;
          $id=$_REQUEST['id'];
          $resultConnection = $wpdb->get_results("SELECT hp.*,cm.city_name,pm.* from wp_homeplan as hp INNER JOIN wp_city_master as cm ON hp.city_id=cm.id INNER JOIN wp_plan_master as pm ON hp.plan_id=pm.id WHERE hp.id='$id'");
          // echo "<pre>";
          // print_r($resultConnection); die();
          //echo "SELECT nc.*,cm.city_name,pm.* from wp_newconnection as nc INNER JOIN wp_city_master as cm ON nc.city_id=cm.id INNER JOIN wp_plan_master as pm ON nc.plan_id=pm.id WHERE nc.id='$id'"; die();  
        ?>
       
        <!-- <div class="date_time_sec">
          <h5>Plan Name: <?php //echo $resultConnection[0]->plan_name; ?></h5>
          &nbsp;&nbsp;
          <h5>Speed:<?php //echo $resultConnection[0]->speed;?></h5>
          &nbsp;&nbsp;
          <h5>Price:<?php //echo $resultConnection[0]->price;?></h5>
        </div> -->
        </center>
        </div>
        <section class="our-services-2 col-md-6">
          <div class="">
            <div class=""><div class="col-md-4"></div>
              <div class="col-md-12" >
                <div class="col-md-12">

                  <?php $url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()), 'thumbnail' ); ?>
                  <div class="plan_info_div text-center orange_div" style="height: auto;    border-radius: 20px;
    margin-top: 100px;">
                     
        <img class="img-fluid" src="<?php echo bloginfo('url');?>/wp-content/uploads/2021/02/router1.png" alt="router" />
                  <h6 style="    text-align: center;"><?php echo $resultConnection[0]->speed;?></h6>
                  <img src="<?php echo $url ?>" class="img-fluid plan_icon">
                  <h3><?php echo $resultConnection[0]->plan_name; ?></h3>
                  <h4><i class="fa fa-inr" aria-hidden="true"></i><?php echo $resultConnection[0]->price; ?></h4>
                  <!-- <ul>
                  <?php
                      // $c = 1;
                      //     if( have_rows('plan_sublogo') ):
                      //         while ( have_rows('plan_sublogo') ) : the_row();
                  ?>
                  
                  <li><img src="<?php //the_sub_field("plan_sublogo_icon");?>"></li>
                  
                  <?php //$c++; endwhile; endif; ?>
                  </ul> -->
                  <ul>
                  <?php
                  if($resultConnection[0]->image1!="")
                  {
                  ?>
                  <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/<?php echo $resultConnection[0]->image1; ?>"></li>
                  <?php
                  }
                  if($resultConnection[0]->image2!="")
                  {
                  ?>  
                  <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/<?php echo $resultConnection[0]->image2; ?>"></li>
                  <?php
                  }
                  if($resultConnection[0]->image3!="")
                  {
                  ?>
                  <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/<?php echo $resultConnection[0]->image3; ?>"></li>
                  <?php
                  }
                  if($resultConnection[0]->image4!="")
                  {
                  ?>
                  <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/<?php echo $resultConnection[0]->image4; ?>"></li>
                  <?php
                  }
                  if($resultConnection[0]->image5!="")
                  {
                  ?>
                  <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/<?php echo $resultConnection[0]->image5; ?>"></li>
                  <?php
                  }
                  if($resultConnection[0]->image6!="")
                  {
                  ?>
                  <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/<?php echo $resultConnection[0]->image6; ?>"></li>
                  <?php
                  }
                  if($resultConnection[0]->image7!="")
                  {
                  ?>
                  <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/<?php echo $resultConnection[0]->image7; ?>"></li>
                  <?php
                  }
                  if($resultConnection[0]->image8!="")
                  {
                  ?>
                  <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/<?php echo $resultConnection[0]->image8; ?>"></li>
                  <?php
                  }
                  ?>
                  </ul>
                  <h5><?php the_field("ott_faqs"); ?></h5>
                  </div>
                </div>      
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