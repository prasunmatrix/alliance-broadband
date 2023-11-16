<?php
/**
* Template Name: Contact Temp
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
<section class="our-services-2">
  <div class="container"> 
    <div class="row">
    <div class="col-md-6">
      <?php
        $c = 1;
              if( have_rows('contact_details') ):
                  while ( have_rows('contact_details') ) : the_row();
      ?>
        <div class="col-md-12 contact-box">
            <div class="row">
                <!-- <div class="col-md-5">
                  <?php the_sub_field("contact_details_map");?>
                </div> -->
                <div class="">
                  <h5><?php the_sub_field("contact_details_places");?></h5>
                  <?php the_sub_field("contact_details_text");?>
                </div>
          </div>
        </div>

        <?php $c++; endwhile; wp_reset_query(); endif; ?>
    </div>
    <div class="col-md-6 conta-form"> 
      <h4> DropYour Message</h4>
      <p>May be you are an existing user, or interested in alliance Broadband internet connection. Perhaps you are an interested channel partner. We will like to listen from you, as you expect quick response from us.</p>
      <div class="modal-content">
        <div class="contact_div_from" style="display: flex; flex-direction: column;" >
          <div class="contact_form_radio_div" ><h5 class="modal-title" id="exampleModalLongTitle">Existing User</h5>
            <input type="radio" name="choose_frm_contact"  checked="checked" onclick="chooseContactfrm(0);" value="Existing User" required="required"> </div>   
          <div class="contact_form_radio_div" ><h5 class="modal-title" id="exampleModalLongTitle">Interested Customer</h5>
            <input type="radio" name="choose_frm_contact" onclick="chooseContactfrm(1);" value="Interested Customer" required="required"></div>
          <div class="contact_form_radio_div" ><h5 class="modal-title" id="exampleModalLongTitle">Chanel Partner</h5>
            <input type="radio" name="choose_frm_contact" onclick="chooseContactfrm(2);" value="Chanel Partner" required="required"></div>  
        </div>
        <div class="modal-body2" id="existing_user">
          <h5 style="padding: 20px 0;">Existing User</h5>
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
              <form action="<?php echo site_url();?>/php/contact_submit.php" method="post" name="newconnectionfrm" id="newconnectionfrm" onsubmit="return validateContact()" autocomplete="off">
                <div class="form-group">
                  <input type="text" name="contact_uname" id="contact_uname"  class="form-control"  placeholder="Name">
                  <span id="contact_uname_msg" style="color: red;"></span>
                </div>
                <div class="form-group" style="margin-bottom:30px;">
                  <input type="text" name="contact_uemail" id="contact_uemail" class="form-control"  placeholder="Email">
                  <span id="contact_uemail_msg" style="color: red;"></span>
                </div>              
                <div class="form-group">
                  <input type="tel" name="contact_phone_no" id="contact_phone_no" class="form-control"  placeholder="Phone No.">
                  <span id="contact_phone_no_msg" style="color: red;"></span>
                </div>
                <!-- <div class="form-group">
                  <label for="">Preferred Date</label>
                  <div class="input-group " id="datetimepicker1" data-target-input="nearest">
                    <input type="text" class="form-control datetimepicker-input datetimepicker" data-target="#datetimepicker1" id="preferred_date" name="preferred_date" placeholder="Preferred Date" required="required" />
                    <span class="input-group-addon" data-target="#datetimepicker1" data-toggle="datetimepicker">
                    <span class="fa fa-calendar"></span>
                    </span>
                  </div>
                </div>
                <div class="form-group">
                  <label for="">Preferred Time</label>
                  <input type="time" name="preferred_time" id="preferred_time" class="form-control" required="required">
                </div> -->
                <div class="form-group">
                  <input type="text" name="cotact_user_id" id="cotact_user_id"  class="form-control"  placeholder="User Id">
                  <span id="cotact_user_id_msg" style="color: red;"></span>
                </div>
                <div class="form-group" style="margin-bottom:30px;">
                  <textarea name="address" id="address_contact" class="form-control"  placeholder="Address"></textarea>
                  <span id="address_contact_msg" style="color: red;"></span>
                </div> 
                <div class="form-group">
                  <input type="text" name="cotact_pin" id="cotact_pin"  class="form-control"  placeholder="Pin">
                  <span id="cotact_pin_msg" style="color: red;"></span>
                </div>
                <div class="form-group">
                  <!-- <label for="exampleFormControlSelect1">City</label> -->
                  <select class="form-control" name="source" id="source"  placeholder="How did you know us">
                    <option value="0">--Select Option--</option>
                    <option value="Facebook Ads/Post">Facebook Ads/Post</option>
                    <option value="Twitter Ads/Post">Twitter Ads/Post</option>
                    <option value="Search Engine">Search Engine</option>
                    <option value="Blogs">Blogs</option>
                    <option value="Hoarding/Banner">Hoarding/Banner</option>
                    <option value="Others">Others</option>
                  </select>
                  <span id="source_msg" style="color: red;"></span>
                </div>
                <div class="form-group">
                  <input type="text" name="subject" id="subject" class="form-control"   placeholder="Subject">
                  <span id="subject_msg" style="color: red;"></span>
                </div>
                <div class="form-group">
                  <textarea name="message" id="message" class="form-control"  placeholder="Message"></textarea>
                  <span id="message_msg" style="color: red;"></span>
                </div> 
                <center>
                  <input type="hidden" name="existing_user" id="existing_user" value="Existing User">
                  <button type="submit" name="submit" id="submit" class="btn popup_btn">Submit</button>
                </center>             
              </form>
            </div>
            </div>               
          </div>
        </div>
        <div class="modal-body2" id="interested_customer" style="display: none;">
          <h5 style="padding: 20px 0;">Interested Customer</h5>
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <form action="<?php echo site_url();?>/php/contact_submit.php" method="post" name="newconnectionfrm" id="newconnectionfrm" onsubmit="return validateContact1()" autocomplete="off">
                  <div class="form-group">
                    <input type="text" name="contact_uname" id="contact_uname1"  class="form-control"  placeholder="Name">
                    <span id="contact_uname_msg1" style="color: red;"></span>
                  </div>
                  <div class="form-group" style="margin-bottom:30px;">
                    <input type="text" name="contact_uemail" id="contact_uemail1" class="form-control"  placeholder="Email">
                    <span id="contact_uemail_msg1" style="color: red;"></span>
                  </div>              
                  <div class="form-group">
                    <input type="tel" name="contact_phone_no" id="contact_phone_no1" class="form-control"   placeholder="Phone No.">
                    <span id="contact_phone_no_msg1" style="color: red;"></span>
                  </div>
                  <!-- <div class="form-group">
                    <label for="">Preferred Date</label>
                    <div class="input-group " id="datetimepicker1" data-target-input="nearest">
                      <input type="text" class="form-control datetimepicker-input datetimepicker" data-target="#datetimepicker1" id="preferred_date" name="preferred_date" placeholder="Preferred Date" required="required" />
                      <span class="input-group-addon" data-target="#datetimepicker1" data-toggle="datetimepicker">
                      <span class="fa fa-calendar"></span>
                      </span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="">Preferred Time</label>
                    <input type="time" name="preferred_time" id="preferred_time" class="form-control" required="required">
                  </div> -->
                  <div class="form-group">
                    <select class="form-control" name="contact_district" id="contact_district"  placeholder="How did you know us">
                      <option value="0">--Select District--</option>
                      <option value="24 Parganas North">24 Parganas North</option>
                      <option value="24 Parganas South">24 Parganas North</option>
                      <option value="Bankura">Bankura</option>
                      <option value="Coochbehar">Coochbehar</option>
                      <option value="Dakshin Dinajpur">Dakshin Dinajpur</option>
                      <option value="Darjeeling">Darjeeling</option>
                    </select>
                    <span id="contact_district_msg" style="color: red;"></span>
                  </div>
                  <div class="form-group" style="margin-bottom:30px;">
                    <textarea name="address" id="address_contact1" class="form-control"  placeholder="Address"></textarea>
                    <span id="address_contact_msg1" style="color: red;"></span>
                  </div> 
                  <div class="form-group">
                    <input type="text" name="cotact_pin" id="cotact_pin1"  class="form-control"  placeholder="Pin">
                    <span id="cotact_pin_msg1" style="color: red;"></span>
                  </div>
                  <div class="form-group">
                    <!-- <label for="exampleFormControlSelect1">City</label> -->
                    <select class="form-control" name="source" id="source1"  placeholder="How did you know us">
                      <option value="0">--Select Option--</option>
                      <option value="Facebook Ads/Post">Facebook Ads/Post</option>
                      <option value="Twitter Ads/Post">Twitter Ads/Post</option>
                      <option value="Search Engine">Search Engine</option>
                      <option value="Blogs">Blogs</option>
                      <option value="Hoarding/Banner">Hoarding/Banner</option>
                      <option value="Others">Others</option>
                    </select>
                    <span id="source_msg1" style="color: red;"></span>
                  </div>
                  <div class="form-group">
                    <input type="text" name="subject" id="subject1" class="form-control"   placeholder="Subject">
                    <span id="subject_msg1" style="color: red;"></span>
                  </div>
                  <div class="form-group">
                    <textarea name="message" id="message1" class="form-control"  placeholder="Message"></textarea>
                    <span id="message_msg1" style="color: red;"></span>
                  </div> 
                  <center>
                    <input type="hidden" name="interested_customer" id="interested_customer" value="Interested Customer">
                    <button type="submit" name="submit" id="submit" class="btn popup_btn">Submit</button>
                  </center>             
                </form>
              </div>
            </div>               
          </div>
        </div>
        <div class="modal-body2" id="chanel_partner" style="display: none;">
          <h5 style="padding: 20px 0;">Chanel Partner</h5>
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <form action="<?php echo site_url();?>/php/contact_submit.php" method="post" name="newconnectionfrm" id="newconnectionfrm" onsubmit="return validateContact2()" autocomplete="off">
                  <div class="form-group">
                    <input type="text" name="contact_uname" id="contact_uname2"  class="form-control"  placeholder="Name">
                    <span id="contact_uname_msg2" style="color: red;"></span>
                  </div>
                  <div class="form-group" style="margin-bottom:30px;">
                    <input type="text" name="contact_uemail" id="contact_uemail2" class="form-control"  placeholder="Email">
                    <span id="contact_uemail_msg2" style="color: red;"></span>
                  </div>              
                  <div class="form-group">
                    <input type="tel" name="contact_phone_no" id="contact_phone_no2" class="form-control" placeholder="Phone No.">
                    <span id="contact_phone_no_msg2" style="color: red;"></span>
                  </div>
                  <!-- <div class="form-group">
                    <label for="">Preferred Date</label>
                    <div class="input-group " id="datetimepicker1" data-target-input="nearest">
                      <input type="text" class="form-control datetimepicker-input datetimepicker" data-target="#datetimepicker1" id="preferred_date" name="preferred_date" placeholder="Preferred Date" required="required" />
                      <span class="input-group-addon" data-target="#datetimepicker1" data-toggle="datetimepicker">
                      <span class="fa fa-calendar"></span>
                      </span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="">Preferred Time</label>
                    <input type="time" name="preferred_time" id="preferred_time" class="form-control" required="required">
                  </div> -->
                  <div class="form-group">
                    <input type="text" name="cotact_company_name" id="cotact_company_name"  class="form-control"  placeholder="Company Name">
                    <span id="cotact_company_name_msg" style="color: red;"></span>
                  </div>
                  <div class="form-group">
                    <input type="text" name="cotact_lcno" id="cotact_lcno"  class="form-control"  placeholder="PST/Licence No*">
                    <span id="cotact_lcno_msg" style="color: red;"></span>
                  </div>
                  <div class="form-group" style="margin-bottom:30px;">
                    <textarea name="address" id="address_contact2" class="form-control"  placeholder="Address"></textarea>
                    <span id="address_contact_msg2" style="color: red;"></span>
                  </div> 
                  <div class="form-group">
                    <input type="text" name="cotact_pin" id="cotact_pin2"  class="form-control"  placeholder="Pin">
                    <span id="cotact_pin_msg2" style="color: red;"></span>
                  </div>
                  <div class="form-group">
                    <!-- <label for="exampleFormControlSelect1">City</label> -->
                    <select class="form-control" name="source" id="source2"  placeholder="How did you know us">
                      <option value="0">--Select Option--</option>
                      <option value="Facebook Ads/Post">Facebook Ads/Post</option>
                      <option value="Twitter Ads/Post">Twitter Ads/Post</option>
                      <option value="Search Engine">Search Engine</option>
                      <option value="Blogs">Blogs</option>
                      <option value="Hoarding/Banner">Hoarding/Banner</option>
                      <option value="Others">Others</option>
                    </select>
                    <span id="source_msg2" style="color: red;"></span>
                  </div>
                  <div class="form-group">
                    <input type="text" name="subject" id="subject2" class="form-control"   placeholder="Subject">
                    <span id="subject_msg2" style="color: red;"></span>
                  </div>
                  <div class="form-group">
                    <textarea name="message" id="message2" class="form-control"  placeholder="Message"></textarea>
                    <span id="message_msg2" style="color: red;"></span>
                  </div> 
                  <center>
                    <input type="hidden" name="chanel_partner" id="chanel_partner" value="Chanel Partner">
                    <button type="submit" name="submit" id="submit" class="btn popup_btn">Submit</button>
                  </center>             
                </form>
              </div>
            </div>               
          </div>
        </div>
      </div>
    </div>  
  </div>          
  </div>
</section>
   <?php //endif; ?> 
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
