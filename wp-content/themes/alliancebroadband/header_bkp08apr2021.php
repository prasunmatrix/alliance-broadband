<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">

    <title>Alliance Broadband</title>
<!--<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />-->
<link rel='dns-prefetch' href='http://s.w.org/' />

<!-- <script>
jQuery.noConflict();
(function( $ ) {
  $(function() {
    // More code using $ as alias to jQuery
  });
})(jQuery);
 
// Other code using $ as an alias to the other library
</script> -->
		

<!-- <link rel='stylesheet' id='droow-google-fonts-css'  href='http://fonts.googleapis.com/css?family=Montserrat%3A400%2C500%2C600%2C700%2C800%7CRaleway%3A400%2C500%2C600%2C700&amp;subset=latin-ext&amp;display=swap&amp;ver=1.2.5' media='all' /> -->

<link rel='stylesheet' id=''  href='<?php echo get_template_directory_uri();?>/assets/css/bootstrap-grid.min.css' media='all' />
<link rel='stylesheet' href='<?php echo get_template_directory_uri();?>/assets/css/plugins/fontawesome-all.min.css' media='all' />
<link rel='stylesheet'  href='<?php echo get_template_directory_uri();?>/assets/css/slick.css' media='all' />
<link rel='stylesheet'  href='<?php echo get_template_directory_uri();?>/assets/css/swiper.min5697.css' media='all' />

<link rel='stylesheet' href='<?php echo get_template_directory_uri();?>/assets/css/style.css' media='all' />


<!-- <link rel='stylesheet' id='google-fonts-1-css'  href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;ver=5.5.3' media='all' />

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel='stylesheet' href='https://rawgit.com/tempusdominus/bootstrap-4/master/build/css/tempusdominus-bootstrap-4.css'>

<script src='<?php echo get_template_directory_uri();?>/assets/jquery.js'></script>

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>

<!-- Google Tag Manager -->

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

})(window,document,'script','dataLayer','GTM-MWW966S');</script>

<!-- End Google Tag Manager -->



<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <!-- Google Tag Manager (noscript) -->

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MWW966S"

height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<!-- End Google Tag Manager (noscript) -->
<!--<?php// wp_body_open(); ?>-->

<main class="main-root">

<div class="dsn-nav-bar">
        <div class="site-header">
            <div class="extend-container">
                <div class="inner-header">
                    <div class="main-logo" style="width:292px !important">
                         <?php /*?><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"></a><?php */?>  <?php the_custom_logo(); ?>                  </div>
                </div>
                <?php if ( has_nav_menu( 'top' ) ) : ?>
                                    
                                   <?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?> 
                 <?php endif; ?>  
                                    
            </div>
        </div>
        <div class="header-top header-top-hamburger">
            <div class="header-container">
                <div class="logo main-logo" >
                    <!--  <a href="index.html" rel="home"><img width="290" height="95"   alt="Droow" loading="lazy" data-src="logo1.png" class="custom-logo light-logo lazyload" src="http://dev.maxmobility.in:88/alliancebroadband/wp-content/uploads/2021/01/cropped-logo1.png" /><noscript><img width="290" height="95"   alt="Droow" loading="lazy" data-src="logo1.png" class="custom-logo light-logo lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="290" height="95" src="wp-content/uploads/sites/10/2020/02/logo.png" class="custom-logo light-logo" alt="Droow" loading="lazy" /></noscript></noscript><img width="290" height="95"   alt="Droow" loading="lazy" data-src="http://dev.maxmobility.in:88/alliancebroadband/wp-content/uploads/2021/01/cropped-logo1.png" class="custom-logo dark-logo lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="290" height="95"   alt="Droow" loading="lazy" data-src="https://www.dsngrid.com/droow/wp-content/uploads/sites/10/2020/02/logo-dark.png" class="custom-logo dark-logo lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="290" height="95" src="http://dev.maxmobility.in:88/alliancebroadband/wp-content/uploads/2021/01/cropped-logo1.png" class="custom-logo dark-logo" alt="Droow" loading="lazy" /></noscript></noscript></a> -->    
                    <?php the_custom_logo(); ?>            </div>


                <div class="menu-icon" data-dsn="parallax" data-dsn-move="5">
                    <div class="icon-m">
                        <i class="menu-icon-close fas fa-times"></i>
                        <span class="menu-icon__line menu-icon__line-left"></span>
                        <span class="menu-icon__line"></span>
                        <span class="menu-icon__line menu-icon__line-right"></span>
                    </div>

                    <div class="text-menu">
                        <div class="text-button">Menu</div>
                        <div class="text-open">Open</div>
                        <div class="text-close">Close</div>
                    </div>
                </div>

                <div class="nav">
                    <div class="inner">
                        <div class="nav__content">
                            <?php if ( has_nav_menu( 'top' ) ) : ?>
                                    
                                   <?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?> 
                 <?php endif; ?> 
                        </div>
                    </div>
                </div>
                <div class="nav-content">
                    <div class="inner-content">
                        <address class="v-middle">
                            <span>Egypt</span><span>Damietta,El-Mahalla El-Kubra,</span><span>01024552406 , 01004392260</span>
                        </address>
                    </div>

                </div>
            </div>
        </div>
    </div>
<!-- <button type="button" class="btn btn-primary new_connection" data-toggle="modal" data-target=".bd-example-modal-lg2">Bussiness</button> -->
  <div id="popupform_new_connection" class="modal fade bd-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <!-- <h5 class="modal-title" id="exampleModalLongTitle">Bussiness</h5> -->
               <div class="business_form_radio_div">
                <div style="display: flex;padding-right: 24%;"><input type="radio" name="choose_frm"  checked="checked" onclick="newConnectionPopup(0);" value="Home" required="required">
                <h5 id="exampleModalLongTitle">Home</h5></div>    
              
                <div style="display: flex;padding-right: 24%;"><input type="radio" name="choose_frm" onclick="newConnectionPopup(1);" value="Business" required="required">
                <h5 id="exampleModalLongTitle">Business</h5></div>

              </div>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" id="home_new_connection">
             
             
              
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-4" style="padding: 0;">
                      <div class="form_logo_div">
                          
                      </div>
                  </div>
                  <div class="col-md-8">
                    <h5 style="color:#000000 !important;padding: 20px 0;">Home</h5>
                  <form action="<?php echo site_url();?>/php/newconnection.php" method="post" name="newconnectionfrm" id="newconnectionfrm" onsubmit="return validateNewConnection()" autocomplete="off">
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">City</label>
                      <select class="form-control newconnection_city" name="newconnection_city" id="newconnection_city">
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
                      <span id="newconnection_city_msg" style="color:red;"></span>
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Speed Needed</label>
                      <select class="form-control newconnection_plan" name="newconnection_plan" id="newconnection_plan">
                        <option value="0">--Select Plan--</option>
                      </select>
                      <span id="newconnection_plan_msg" style="color:red;"></span>
                    </div>
                    <div class="my-3 radio_form">
                       <input type="radio" class="redio_btn_input" name="address_from" onclick="formChoice_newconnection(0)" value="Use Current Location"> Use Current Location<br>
                        <!-- <input type="text" name="businessSite" class="field5 form-control mb-4" placeholder="Address">
                        <input type="text" name="businessSite" class="field5 form-control mb-4" placeholder="Landmark">
                        <input type="text" name="businessSite" class="field5 form-control mb-4" placeholder="Pincode"> -->

                        <input type="text" name="planpopupform_1_a" class="field5 form-control mb-4" placeholder="Address" readonly>
                        <input type="text" name="planpopupform_1_l" class="field5 form-control mb-4" placeholder="Landmark" readonly>
                        <input type="text" name="planpopupform_1_p" class="field5 form-control mb-4" placeholder="Pincode" readonly>

                        <!-- <input type="text" name="businessSite" class="field5 form-control mb-4" placeholder="Nearby Franchise Number"> -->
                        <br>
                        <input type="radio" class="redio_btn_input" name="address_from" onclick="formChoice_newconnection(1)" value="User Given Address"> Enter Address<br>
                        <input type="text" name="newconnection_address" id="newconnection_address" class="field6 form-control mb-4" placeholder="Address">
                        <input type="text" name="newconnection_landmark" id="newconnection_landmark" class="field6 form-control mb-4" placeholder="Landmark">
                        <input type="text" name="newconnection_pincode" id="newconnection_pincode" class="field6 form-control mb-4" placeholder="Pincode" />
                        <!-- <input type="tel" name="newconnection_franchise_number" id="newconnection_franchise_number" class="field6 form-control mb-4" placeholder="Nearby Franchise Number" required="required" pattern="^\d{10}$"> -->  
                        <span id="address_from_msg3" style="color:red;"></span>
                        <span id="address_msg3" style="color:red;"></span>
                        <span id="landmark_msg3" style="color:red;"></span>
                        <span id="pincode_msg3" style="color:red;"></span>
                    </div>
                    <div class="form-group">
                      <label for="">Phone Number</label>
                      <input type="tel" name="newconnection_phone_no" id="newconnection_phone_no" class="form-control" />
                      <span id="newconnection_phone_no_msg" style="color:red;"></span>
                    </div>
                    <div class="form-group">
                      <label for="">Preferred Date</label>
                      <div class="input-group " id="datetimepicker1" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input datetimepicker" data-target="#datetimepicker1" id="preferred_date" name="preferred_date" placeholder="Preferred Date"  />
                        <span class="input-group-addon" data-target="#datetimepicker1" data-toggle="datetimepicker">
                        <span class="fa fa-calendar" onclick="$('#preferred_date').datepicker();$('#preferred_date').datepicker('show');"></span>
                        </span>
                        <span id="preferred_date_msg" style="color:red;"></span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="">Preferred Time</label>
                      <input type="time" name="preferred_time" id="preferred_time" class="form-control">
                      <span id="preferred_time_msg" style="color:red;"></span>
                    </div>
                    <div class="form-group">
                      <label for="">Name</label>
                      <input type="text" name="newconnection_uname" id="newconnection_uname"  class="form-control">
                      <span id="newconnection_uname_msg" style="color:red;"></span>
                    </div>
                    <div class="form-group" style="margin-bottom:30px;">
                      <label for="">Email</label>
                      <input type="text" name="newconnection_uemail" id="newconnection_uemail" class="form-control">
                      <span id="newconnection_uemail_msg" style="color:red;"></span>
                    </div>  
                    <center>
                      <button type="submit" name="newconnectionSubmit" id="newconnectionSubmit" class="btn popup_btn">Submit</button>
                    </center>             
                  </form>
                </div>
                </div>               
              </div>
            </div>
            <div class="modal-body" id="business_new_connection" style="display: none;">
              
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-4" style="padding: 0;">
                      <div class="form_logo_div">
                          
                      </div>
                  </div>
                  <div class="col-md-8">
                    <h5 style="color:#000000 !important; padding: 20px 0;">Business</h5>
                  <form action="<?php echo site_url();?>/php/newconnection_business.php" method="post" name="newconnectionfrm" id="newconnectionfrm" onsubmit="return validateNewConnectionBusiness()" autocomplete="off">
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">City</label>
                      <select class="form-control newconnection_city_business" name="newconnection_city" id="newconnection_city1">
                        <option value="">--Select City--</option>
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
                      <span id="newconnection_city_msg1" style="color:red;"></span>
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Plan</label>
                      <select class="form-control newconnection_plan_business" name="newconnection_plan" id="newconnection_plan1">
                        <option value="">--Select Plan--</option>
                      </select>
                      <span id="newconnection_plan_msg1" style="color:red;"></span>
                    </div>
                    <div class="my-3 radio_form">
                       <input type="radio" name="address_from" onclick="formChoice_bnewconnection(0)" value="Use Current Location"> Use Current Location<br>
                        <!-- <input type="text" name="businessSite" class="field5 form-control mb-4" placeholder="Address">
                        <input type="text" name="businessSite" class="field5 form-control mb-4" placeholder="Landmark">
                        <input type="text" name="businessSite" class="field5 form-control mb-4" placeholder="Pincode"> -->
                        <!-- <input type="text" name="businessSite" class="field5 form-control mb-4" placeholder="Nearby Franchise Number"> -->
                        <input type="text" name="planpopupform_2_a" class="field5 form-control mb-4" placeholder="Address" readonly>
                        <input type="text" name="planpopupform_2_l" class="field5 form-control mb-4" placeholder="Landmark" readonly>
                        <input type="text" name="planpopupform_2_p" class="field5 form-control mb-4" placeholder="Pincode" readonly>
                        <br>
                        <input type="radio" name="address_from" onclick="formChoice_bnewconnection(1)" value="User Given Address"> Enter Address<br>
                        <input type="text" name="newconnection_address" id="newconnection_address1" class="field6 form-control mb-4" placeholder="Address">
                        <input type="text" name="newconnection_landmark" id="newconnection_landmark1" class="field6 form-control mb-4" placeholder="Landmark">
                        <input type="text" name="newconnection_pincode" id="newconnection_pincode1" class="field6 form-control mb-4" placeholder="Pincode">
                        <!-- <input type="tel" name="newconnection_franchise_number" id="newconnection_franchise_number" class="field6 form-control mb-4" placeholder="Nearby Franchise Number" required="required" pattern="^\d{10}$"> -->
                        <span id="address_from_msg4" style="color:red;"></span>
                        <span id="address_msg4" style="color:red;"></span>
                        <span id="landmark_msg4" style="color:red;"></span>
                        <span id="pincode_msg4" style="color:red;"></span>  
                    </div>
                    <div class="form-group">
                      <label for="">Phone Number</label>
                      <input type="tel" name="newconnection_phone_no" id="newconnection_phone_no1" class="form-control">
                      <span id="newconnection_phone_no_msg1" style="color:red;"></span>
                    </div>
                    <div class="form-group">
                      <label for="">Preferred Date</label>
                      <div class="input-group " id="datetimepicker1" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input datetimepicker" data-target="#datetimepicker1" id="preferred_date_business" name="preferred_date" placeholder="Preferred Date" />
                        <span class="input-group-addon" data-target="#datetimepicker1" data-toggle="datetimepicker">
                        <span class="fa fa-calendar" onclick="$('#preferred_date_business').datepicker();$('#preferred_date_business').datepicker('show');"></span>
                        </span>
                        <span id="preferred_date_msg1" style="color:red;"></span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="">Preferred Time</label>
                      <input type="time" name="preferred_time" id="preferred_time1" class="form-control">
                      <span id="preferred_time_msg1" style="color:red;"></span>
                    </div>
                    <div class="form-group">
                      <label for="">Name</label>
                      <input type="text" name="newconnection_uname" id="newconnection_uname1"  class="form-control">
                      <span id="newconnection_uname_msg1" style="color:red;"></span>
                    </div>
                    <div class="form-group">
                      <label for="">Company Name</label>
                      <input type="text" name="newconnection_company_name" id="newconnection_company_name"  class="form-control">
                      <span id="newconnection_company_name_msg" style="color:red;"></span>
                    </div>
                    <div class="form-group" style="margin-bottom:30px;">
                      <label for="">Email</label>
                      <input type="text" name="newconnection_uemail" id="newconnection_uemail1" class="form-control">
                      <span id="newconnection_uemail_msg1" style="color:red;"></span>
                    </div>  
                    <center>
                      <button type="submit" name="newconnectionSubmit" id="newconnectionSubmit" class="btn popup_btn">Submit</button>
                    </center>             
                  </form>
                </div>
                </div>               
              </div>
            </div>
          </div>
        </div>
  </div>

<div id="dsn-scrollbar">

        <div class="main-menu"></div>

        