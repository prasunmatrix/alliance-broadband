<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.2
 */

?>

<footer class="wrapper-footer m-section   wrapper-footer-padding ">
    <div class="container">
        <div class="info   sidebar-single-content ">
            <div class="row ">
                                    <div class="col-md-3 dsn-col-footer">
                        <div id="droow_social-3" class="widget widget_droow_social">        <style>
            .widget.widget_droow_social {
                height: 100%;
            }
        </style>
                <div class="footer-logo d-flex justify-content-start  justify-items-start">
             <?php the_custom_logo();?>       </div>

        <div class="copyright-social type-socila-icon type-flex-row h-100 d-flex flex-row justify-content-start align-items-start">
            <ul class="d-flex flex-row justify-content-start align-items-start">
            <?php if (!empty(get_theme_mod('follow_us_header'))) {?>
               	<li class="image-zoom social-icons-facebook " data-dsn="parallax"><a href="<?php echo get_theme_mod('follow_us_header'); ?>" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
           	   <?php }if (!empty(get_theme_mod('twitter_links'))) {?>
               	<li class="social-icons-twitter" data-dsn="parallax"><a href="<?php echo get_theme_mod('twitter_links'); ?>" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
               <?php }if (!empty(get_theme_mod('linked_in_link'))) {?>
               	<li class="social-icons-linkedin" data-dsn="parallax"><a href="<?php echo get_theme_mod('linked_in_link'); ?>" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
           	   <?php }if (!empty(get_theme_mod('instagram_in_link'))) {?>
               	<li class="social-icons-linkedin" data-dsn="parallax"><a href="<?php echo get_theme_mod('instagram_in_link'); ?>" target="_blank" title="Instgram"><i class="fab fa-instagram"></i></a></li>
           	   <?php }?>
              </ul>
        </div>
        </div>                    </div>
                                    <div class="col-md-3 dsn-col-footer">
                        <div id="nav_menu-2" class="widget widget_nav_menu"><h4 class="footer-title">Navigation</h4><div class="menu-droow-footer-menu-container"><?php
wp_nav_menu(array(
    'theme_location' => 'footer',
    'menu_class' => 'footer-menu',
));
?></div></div>                    </div>

  <!--<li id="menu-item-1063" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1063"><a href="#">Contact</a></li>-->
                                    <div class="col-md-3 dsn-col-footer">
                        <div id="custom_html-2" class="widget_text widget widget_custom_html"><h4 class="footer-title">Contact</h4><div class="textwidget custom-html-widget"><div class="col-contact"> <p>
                        <?php if (!empty(get_theme_mod('whatsaap_no'))) {?>
 <strong><i class="fab fa-whatsapp"></i></strong> <span>:</span> <a href="https://api.whatsapp.com/send?phone=<?php echo get_theme_mod('whatsaap_no'); ?>"><?php echo get_theme_mod('whatsaap_no'); ?></a></p>
<?php }?>


                        <?php if (!empty(get_theme_mod('phone_no'))) {?>                    <p>
 <strong>P</strong> <span>:</span> <a href="tel:<?php echo get_theme_mod('phone_no'); ?>"><?php echo get_theme_mod('phone_no'); ?></a></p>
<?php }?>
                       <?php if (!empty(get_theme_mod('email_id'))) {?>
                        <p class="over-hidden"> <strong>E</strong> <span>:</span> <a class="link-hover"  href="mailto:<?php echo get_theme_mod('email_id'); ?>"><?php echo get_theme_mod('email_id'); ?></a>
                         </p>
                        <?php }?>
                    </div></div></div>                    </div>
                                    <div class="col-md-3 dsn-col-footer">
                        <div id="custom_html-3" class="widget_text widget widget_custom_html"><h4 class="footer-title"><?php echo get_theme_mod('contact_header'); ?></h4><div class="textwidget custom-html-widget"><div class="col-address">
   <?php if (!empty(get_theme_mod('address'))) {?>
 <?php echo get_theme_mod('address'); ?>
<?php }?>
</div></div></div>                    </div>
                            </div>
        </div>
        <div class="row ">
            <div class="col-12">
                <div class="copyright">
                    <div id="droow_copyright-3" class="widget widget_droow_copyright">        <div class="copyright-social">
            <div class="text-center">
                        <p><?php echo get_theme_mod('copy_right'); ?></p>
                        <div class="copright-text over-hidden">Designed by <a class="link-hover"
                                                                              data-hover-text="Max Mobility"
                                                                              href="https://www.maxmobility.in/" target="_blank">MaxMobility</a>
                        </div>
                    </div>        </div>

        </div>                </div>
            </div>
        </div>
    </div>

</footer> 

</div> <!-- close dsn-scrollbar -->
</main>
<div class="m-over"></div>
<div class="home_modal_bg"></div>

<div class="office_modal_bg"></div>




<script src='<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js' ></script>

<script src='<?php echo get_template_directory_uri(); ?>/assets/js/banner.js'></script>

<!--<script src='assets/js/plugins/TweenMax.min5697.js' ></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>-->
<script src='<?php echo get_template_directory_uri(); ?>/assets/js/TweenMax.min.js' ></script>
<script src='<?php echo get_template_directory_uri(); ?>/assets/js/TweenMax.min1.js' ></script>

<script src='<?php echo get_template_directory_uri(); ?>/assets/js/Isotope.min.js' ></script>

<script src='<?php echo get_template_directory_uri(); ?>/assets/js/YouTubePopUp.js' ></script>

<script src='<?php echo get_template_directory_uri(); ?>/assets/js/smooth-scrollbar.js' ></script>
<script src='<?php echo get_template_directory_uri(); ?>/assets/js/dsn-grid.js' ></script>

 <script>
/**--Change Starts-- */
 window.cLat = null;
 window.cLon = null;
 window.homepopup = null;
 window.officepopup = null;
 window.planHomePopup = null;
 window.planBusinessPopup = null;

 function getCPosition({coords:{latitude, longitude}}) {
  cLat = latitude;
  cLon = longitude;
 }
jQuery(document).ready(function(){
  if(!navigator.geolocation) {
    console.log('Geolocation is not supported by your browser');
  } else {
    // status.textContent = 'Locating…';
    navigator.geolocation.getCurrentPosition(getCPosition, function() {
      console.log("error in fetching location...");
    });
  }
  /**--Change ends-- */
  jQuery(".pincode_popup_div").hide();
  jQuery(".pincode_popup_close").click(function(){
    jQuery(".pincode_popup_div").hide();
  });  
});
jQuery(document).ready(function(){
jQuery(".pincode_popup_error_div").hide();
  jQuery(".pincode_popup_error_close").click(function(){
    jQuery(".pincode_popup_error_div").hide();
  });
});  
</script>


<script id='droow-scripts-js-extra'>
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"version":"3.0.12","is_static":false,"legacyMode":{"elementWrappers":true},//"urls":{"assets":"https:\/\/www.dsngrid.com\/droow\/wp-content\/plugins\/elementor\/assets\/"},
"settings":{"page":[],"editorPreferences":[]},"kit":{"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":879,"title":"Droow%20%E2%80%93%20Ajax%20Portfolio%20WordPress%20Theme","excerpt":"","featuredImage":false}};
</script>


<script id='droow-scripts-js-extra'>
var dsnParam = {"queries":"action=droow_post_query","hold_time":"0","mouse_scroll_step":"15","scroll_speed":"0.05","cursor_drag_speed":"0.3","map_marker_icon":"","map_zoom_level":"12","effect_aos":""};
</script>


<script src='<?php echo get_template_directory_uri(); ?>/assets/js/custom.js'></script>
<script src='<?php echo get_template_directory_uri(); ?>/assets/js/custom2.js'></script>

 <script src='https://cdn.jsdelivr.net/momentjs/2.18.1/moment.min.js'></script>
<!-- <script src='https://rawgit.com/tempusdominus/bootstrap-4/master/build/js/tempusdominus-bootstrap-4.js'></script> -->
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>
  <script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js"></script>
    <script>
      function fetchAddressFromCloc() {
        $.LoadingOverlay('show');
        var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
        var dataString = "action=fetch_address&lat="+cLat+"&lon="+cLon;
        $.ajax({
          type: "POST",
          url: ajaxurl,
          data: dataString,
          cache: false,
          dataType: 'JSON',
          success: function(result) {
            $.LoadingOverlay('hide');
            $('#pincode_msg').html('');
            $('#pincode_msg1').html('');
            $('#pincode_msg3').html('');
            $('#pincode_msg4').html('');
            if(result.address) {
              if(planHomePopup == 0) {
                $('#newconnectionfrm').find('[name="planpopupform_1_a"]').val(result.display_name);
                $('#newconnectionfrm').find('[name="planpopupform_1_l"]').val(result.address.suburb);
                $('#newconnectionfrm').find('[name="planpopupform_1_p"]').val(result.address.postcode);
              } else if(planBusinessPopup == 0) {
                $('#business_new_connection').find('[name="planpopupform_2_a"]').val(result.display_name);
                $('#business_new_connection').find('[name="planpopupform_2_l"]').val(result.address.suburb);
                $('#business_new_connection').find('[name="planpopupform_2_p"]').val(result.address.postcode);
              } else if(officepopup == 0) {
                $('#popupform_2').find('[name="popupform_2_a"]').val(result.display_name);
                $('#popupform_2').find('[name="popupform_2_l"]').val(result.address.suburb);
                $('#popupform_2').find('[name="popupform_2_p"]').val(result.address.postcode);
              } else if(homepopup == 0) {
                $('#popupform_1').find('[name="popupform_1_a"]').val(result.display_name);
                $('#popupform_1').find('[name="popupform_1_l"]').val(result.address.suburb);
                $('#popupform_1').find('[name="popupform_1_p"]').val(result.address.postcode);
              } else {
                $('#popupform_1').find('[name="popupform_1_a"]').val('');
                $('#popupform_1').find('[name="popupform_1_l"]').val('');
                $('#popupform_1').find('[name="popupform_1_p"]').val('');
              }
            } else {
              $('#popupform_1').find('[name="popupform_1_a"]').val('');
              $('#popupform_1').find('[name="popupform_1_l"]').val('');
              $('#popupform_1').find('[name="popupform_1_p"]').val('');
            }
            // console.log(result);
          },
          error: function() {
            console.log('error');
            $.LoadingOverlay('hide');
          }
        });
      }
      function formChoice(x)
      {
        if(x==0) {
          $('.field1').css('display', 'block');
          $('.field2').css('display', 'none');
          homepopup = 0;
          officepopup = null;
          fetchAddressFromCloc();
          //$('#address').removeAttr('required');
          //$('#pincode').removeAttr('required');
          //$('#franchise_number').removeAttr('required');
        } else {
          $('.field1').css('display', 'none');
          $('.field2').css('display', 'block');
          homepopup = 1;
          officepopup = null;
         // $('#address').prop('required',true);
          //$('#pincode').prop('required',true);
          //$('#franchise_number').prop('required',true);
        }
      }
       function formChoiceOffice(y)
      {
        //console.log("test");
        if(y==0) {
          $('.field3').css('display', 'block');
          $('.field4').css('display', 'none');
          officepopup = 0;
          homepopup = null;
          fetchAddressFromCloc();
          //$('#address_office').removeAttr('required');
          //$('#pincode_office').removeAttr('required');
          //$('#franchise_number_office').removeAttr('required');
        } else {
          $('.field3').css('display', 'none');
          $('.field4').css('display', 'block');
          officepopup = 1;
          homepopup = null;
          //$('#address_office').prop('required',true);
          //$('#pincode_office').prop('required',true);
          //$('#franchise_number_office').prop('required',true);
        }
      }
      function formChoice_newconnection(z)
      {
        //console.log("test");
        if(z==0) {
          $('.field5').css('display', 'block');
          $('.field6').css('display', 'none');
          planHomePopup = 0;
          planBusinessPopup = null;
          fetchAddressFromCloc(); 
          // $('#newconnection_address').removeAttr('required');
          // $('#newconnection_pincode').removeAttr('required');
          // $('#newconnection_franchise_number').removeAttr('required');
        } else {
          $('.field5').css('display', 'none');
          $('.field6').css('display', 'block');
          planHomePopup = 1;
          planBusinessPopup = null;
          // $('#newconnection_address').prop('required',true);
          // $('#newconnection_pincode').prop('required',true);
          // $('#newconnection_franchise_number').prop('required',true);
        }
      }
      function formChoice_bnewconnection(z)
      {
        //console.log("test");
        if(z==0) {
          $('.field5').css('display', 'block');
          $('.field6').css('display', 'none');
          planHomePopup = null;
          planBusinessPopup = 0;
          fetchAddressFromCloc();          
          // $('#newconnection_address').removeAttr('required');
          // $('#newconnection_pincode').removeAttr('required');
          // $('#newconnection_franchise_number').removeAttr('required');
        } else {
          $('.field5').css('display', 'none');
          $('.field6').css('display', 'block');
          planHomePopup = null;
          planBusinessPopup = 1;
          // $('#newconnection_address').prop('required',true);
          // $('#newconnection_pincode').prop('required',true);
          // $('#newconnection_franchise_number').prop('required',true);
        }
      }
      function newConnectionPopup(s)
      {
        //console.log("test");
        if(s==0)
        {
          $("#home_new_connection").show();
          $("#business_new_connection").hide();
        }
        else{
          $("#home_new_connection").hide();
          $("#business_new_connection").show();
        }
      }
      function chooseContactfrm(s)
      {
        //console.log("test");
        if(s==0)
        {
          $("#existing_user").show();
          $("#interested_customer").hide();
          $("#chanel_partner").hide();
        }
        else if(s==1)
        {
          $("#existing_user").hide();
          $("#interested_customer").show();
          $("#chanel_partner").hide();
        }
        else
        {
          $("#existing_user").hide();
          $("#interested_customer").hide();
          $("#chanel_partner").show();
        }
      }
    </script>
    <script>
      $(document).on('change', '#city', function (e) {
        var city = $('#city').val();
        //console.log("test");
        var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
        var dataString = "action=plan_search&city="+city;
        $.ajax({
          type: "POST",
          url: ajaxurl,
          data: dataString,
          cache: false,
          success: function(result)
          {
              if(result.status == 1)
              {
                var plan = result.plan;

                var optHtml = '';

                optHtml += '<option value="">--Select Plan--</option>';

                for(var i=0;i<plan.length;i++)
                {
                    optHtml += '<option value="'+plan[i].id+'">'+plan[i].plan_name+'-'+plan[i].speed+'</option>';
                }
                $('#plan').html(optHtml);
                return true;
              }
              else
              {
                $('#city').val('');
                $('#plan').html('');
                alert("No plan found for this city");
                return false;
              }
          }
        });
      });
      $(document).on('change', '#city_office_from_home', function (e) {
        var city_office_from_home = $('#city_office_from_home').val();
        //console.log("test");
        var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
        var dataString = "action=plan_search_office_from_home&city="+city_office_from_home;
        $.ajax({
          type: "POST",
          url: ajaxurl,
          data: dataString,
          cache: false,
          success: function(result)
          {
              if(result.status == 1)
              {
                var plan = result.plan;

                var optHtml = '';

                optHtml += '<option value="">--Select Plan--</option>';

                for(var i=0;i<plan.length;i++)
                {
                    optHtml += '<option value="'+plan[i].id+'">'+plan[i].plan_name+'-'+plan[i].speed+'</option>';
                }
                $('#plan_office_from_home').html(optHtml);
                return true;
              }
              else
              {
                $('#city_office_from_home').val('');
                $('#plan_office_from_home').html('');
                alert("No plan found for this city");
                return false;
              }
          }
        });
      });
      $(document).on('change', '.newconnection_city', function (e) {
        var newconnection_city = $('.newconnection_city').val();
        //console.log(newconnection_city);
        //console.log("test");
        var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
        var dataString = "action=plan_search_newconnection&newconnection_city="+newconnection_city;
        $.ajax({
          type: "POST",
          url: ajaxurl,
          data: dataString,
          cache: false,
          success: function(result)
          {
              if(result.status == 1)
              {
                var plan = result.plan;

                var optHtml = '';

                optHtml += '<option value="">--Select Plan--</option>';

                for(var i=0;i<plan.length;i++)
                {
                    optHtml += '<option value="'+plan[i].id+'">'+plan[i].plan_name+'-'+plan[i].speed+'</option>';
                }
                $('.newconnection_plan').html(optHtml);
                return true;
              }
              else
              {
                $('.newconnection_city').val('');
                $('.newconnection_plan').html('');
                alert("No plan found for this city");
                return false;
              }
          }
        });
      });
      $(document).on('change', '.newconnection_city_business', function (e) {
        var newconnection_city_business = $('.newconnection_city_business').val();
        //console.log(newconnection_city);
        //console.log("test");
        var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
        var dataString = "action=plan_search_newconnection&newconnection_city="+newconnection_city_business;
        $.ajax({
          type: "POST",
          url: ajaxurl,
          data: dataString,
          cache: false,
          success: function(result)
          {
              if(result.status == 1)
              {
                var plan = result.plan;

                var optHtml = '';

                optHtml += '<option value="">--Select Plan--</option>';

                for(var i=0;i<plan.length;i++)
                {
                    optHtml += '<option value="'+plan[i].id+'">'+plan[i].plan_name+'-'+plan[i].speed+'</option>';
                }
                $('.newconnection_plan_business').html(optHtml);
                return true;
              }
              else
              {
                $('.newconnection_city_business').val('');
                $('.newconnection_plan_business').html('');
                alert("No plan found for this city");
                return false;
              }
          }
        });
      });
      // jQuery(function () {
      //   jQuery('.datetimepicker').datetimepicker();
      // });
      jQuery( function() {
        jQuery("#preferred_date").datepicker({ dateFormat:'yy-mm-dd', minDate: 0});
        jQuery("#preferred_date_business").datepicker({ dateFormat:'yy-mm-dd', minDate: 0});
      });
    </script>



 <!--  <script>
$(document).ready(function(){
  $(".close").click(function(){
    $("#popupform_1").hide();
	$(".m-over").hide();
  });
  $(".home_btn_popup").click(function(){
    $("#popupform_1").show();
	$(".m-over").show();
  });
});
</script> -->
<script>
jQuery(document).ready(function(){

	jQuery(".home_btn_popup").click(function(){
    jQuery("#popupform_1").show();
  });

  jQuery(".close").click(function(){
    jQuery("#popupform_1").hide();
  });


});
</script>
<script>
jQuery(document).ready(function(){

	jQuery(".home_btn_popup2").click(function(){
    jQuery("#popupform_2").show();
  });

  jQuery(".close").click(function(){
    jQuery("#popupform_2").hide();
  });
});
window.mymap = '';
window.oldMarker = [];
jQuery(document).ready(function(){
  jQuery(".new_connection").click(function(){
    jQuery("#popupform_new_connection").show();
  });
  jQuery(".close").click(function(){
    jQuery("#popupform_new_connection").hide();
  });

  if(jQuery('#mapId').length) {
    mymap = L.map('mapId',{ attributionControl:false }).setView([22.640596, 88.3799809], 10);
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    maxZoom: 18,
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
    'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1
    }).addTo(mymap);
  }
});
</script>
<script>
  $('#pincode').bind('keyup blur',function(e){ 
  var mb = $(this);
      if(e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)){
          mb.val(mb.val().replace(/[^0-9]/g,'') );
    }
  });
  //function pincodeChecking(b){
    $("#pincodefrm").submit(function (e) {
      e.preventDefault();      
      // var a = "/(^\d{6}$)/";
      var b=$("#pincode").val();
      if (b.trim(b).length == 6)
      {
        //alert("Your Entered Zip Code Is Valid.");
        var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
        $.ajax({
            url : ajaxurl,
            cache: false,
            type : 'POST',
            data : 'action=pincode_search&pincode='+b,
            dataType: 'JSON',
            success: function(response){
               console.log(response.status);
               if(response.status == 1) {
                 const {message:{own}, message:{nearest}} = response;

                 let {latlngArr, addressArr} = own;
                 mymap.setView(new L.LatLng(latlngArr[0], latlngArr[1]), 10);
                 for (var i = 0; i < oldMarker.length; i++) {
                    mymap.removeLayer(oldMarker[i]);
                  }

                 var iconFs = L.icon({
                    iconUrl: '<?php echo get_template_directory_uri(); ?>/assets/images/orange-marker.png',
                    iconSize: [40, 40],
                    iconAnchor: [0, 30],
                    popupAnchor:  [20, -20]
                  });
                 var marker = new L.marker([latlngArr[0], latlngArr[1]], {
                  icon:iconFs
                 })
                 .bindPopup(`<b>Address:</b> ${addressArr[0]} <br/>

                 `, {
                    minWidth: 130,
                    padding: "20px",
                 })
                 .addTo(mymap);
                 oldMarker.push(marker);

                 let {latlngArr:latlngArrNear, addressArr:addressArrNear} = nearest;

                //  <a style="display:inline-block; text-decoration: underline;" href="https://www.google.co.in/maps/?q=${latlngArr[0]},${latlngArr[1]}" target="_blank">View on google</a>

                // <a style="display:inline-block; text-decoration: underline;" href="https://www.google.co.in/maps/?q=${latlngArrNear[i][0]},${latlngArrNear[i][1]}" target="_blank">View on google</a>


                 for (var i = 0; i < latlngArrNear.length; i++) {
                    marker = new L.marker([latlngArrNear[i][0], latlngArrNear[i][1]])
                    .bindPopup(`<b>Address:</b> ${addressArrNear[i]} <br/>

                  `, {
                      minWidth: 130,
                      padding: "20px",
                    })
                    .addTo(mymap);
                    oldMarker.push(marker);
                }

               } else {
                  jQuery(".pincode_popup_error_div").hide();
                  jQuery(".pincode_popup_div").show();
                  jQuery('#messagePopup').html(response.message);
               }



              // var marker = new L.marker([22.640596, 88.3799809]).addTo(mymap);
              // var marker = new L.marker([24.640596, 81.3799809]).addTo(mymap);

              // locationArr = [
              //   [22.640596, 88.3799809],
              //   [22.640240, 88.3799826],
              //   [22.640440, 88.3799580]
              // ];

              // for (var i = 0; i < locationArr.length; i++) {
              //   marker = new L.marker([locationArr[i][0], locationArr[i][1]])
              //     .bindPopup(`Location -${i}`)
              //     .addTo(mymap);
              // }
            }
        });
      }
      else
      {
        //alert("Your Entered Zip Code Is Not Valid.")
        jQuery('.pincode_popup_div').hide();
        jQuery('.pincode_popup_error_div').show();
        //console.log("test");
        jQuery('#errorPincodePopup').html("Your Entered Zip Code Is Not Valid.");
        //jQuery('#pincode_error_msg').html('Your Entered Zip Code Is Not Valid.');


      }
    });  
  //} 
  function newConnectionPopupOpen()
  {
    jQuery(".pincode_popup_div").hide();
    jQuery("#popupform_new_connection").show();

  }   
</script>
<script>
$('#number_of_device').bind('keyup blur',function(e){ 
  var mb = $(this);
      if(e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)){
          mb.val(mb.val().replace(/[^0-9]/g,'') );
    }
});
$('#pincode_home').bind('keyup blur',function(e){ 
  var mb = $(this);
      if(e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)){
          mb.val(mb.val().replace(/[^0-9]/g,'') );
    }
});
$('#phone_no').bind('keyup blur',function(e){ 
  var mb = $(this);
      if(e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)){
          mb.val(mb.val().replace(/[^0-9]/g,'') );
    }
});
$('#number_of_device1').bind('keyup blur',function(e){ 
  var mb = $(this);
      if(e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)){
          mb.val(mb.val().replace(/[^0-9]/g,'') );
    }
});
$('#pincode_office').bind('keyup blur',function(e){ 
  var mb = $(this);
      if(e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)){
          mb.val(mb.val().replace(/[^0-9]/g,'') );
    }
});
$('#phone_no1').bind('keyup blur',function(e){ 
  var mb = $(this);
      if(e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)){
          mb.val(mb.val().replace(/[^0-9]/g,'') );
    }
});
function validateHomePlan() {
  var err=0;
  var emailReg = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  var mbReg = /^\d{10}$/;
  var pinReg = /^\d{6}$/;

  var number_of_device=$("#number_of_device").val();
  var city=$("#city").val();
  var plan=$("#plan").val();
  var address=$("#address").val();
  var landmark=$("#landmark").val();
  var pincode_home=$("#pincode_home").val();
  var phone_no=$("#phone_no").val();
  var uname=$("#uname").val();
  var uemail=$("#uemail").val();
  
  if(number_of_device.replace(/\s/g, "").length == 0){
    err++;
    $('#number_of_device_msg').html('Please enter number of device');
  }else{
    $('#number_of_device_msg').html('');
  }
  if (city == 0) {
    err++;
    $('#city_msg').html('Please select a city');
    return false;
  }
  else
  {
    $('#city_msg').html('');
  }
  if (plan == 0) {
    err++;
    $('#plan_msg').html('Please select a plan');
    return false;
  }
  else
  {
    $('#plan_msg').html('');
  }
  var addressfrom = document.getElementsByName('address_from');
  var ischecked_method = false;
  for ( var i = 0; i < addressfrom.length; i++) {
    if(addressfrom[i].checked) {
      ischecked_method = true;
      addressfrom_value = addressfrom[i].value;
      //console.log(value);
      //break;
      if(addressfrom_value=="User Given Address"  && homepopup == 1)
      {
        if(address.replace(/\s/g, "").length == 0)
        {
          err++;
          $("#address_from_msg").html('');
          $("#address_msg").html("Please enter your address");
          return false;
        }
        else
        {
          $("#address_msg").html("");
        }
        if(landmark.replace(/\s/g, "").length == 0)
        {
          err++;
          $("#address_from_msg").html('');
          $("#address_msg").html('');
          $("#landmark_msg").html("Please enter your landmark");
          return false;
        }
        else
        {
          $("#landmark_msg").html("");
        }
        if(pincode_home.replace(/\s/g, "").length == 0)
        {
          err++;
          $("#address_from_msg").html('');
          $("#address_msg").html('');
          $("#landmark_msg").html("");
          $("#pincode_msg").html("Please enter your pincode");
          return false;
        }
        else
        {
          if (!pinReg.test(pincode_home)) {
            err++;
            $('#pincode_msg').html('Please enter 6 digit pincode');
            return false;
            } else {
              $('#pincode_msg').html('');
          }
        }
      }
    }
  }
  if(!ischecked_method)   { 
    $("#address_from_msg").html("Please select use current location or enter address");
      return false;
  }
  if(phone_no.replace(/\s/g, "").length == 0)
  {
    err++;
    $("#phone_no_msg").html("Please enter your phone number");
    return false;
  }
  else
  {
    if (!mbReg.test(phone_no)) {
    err++;
    $('#phone_no_msg').html('Please enter your valid 10 digit phone number');
    return false;
    } else {
      $('#phone_no_msg').html('');
    }
  }
  if(uname.replace(/\s/g, "").length == 0)
  {
    err++;
    $("#uname_msg").html("Please enter your name");
    return false;
  }
  else
  {
    $('#uname_msg').html('');    
  }
  if(!ischecked_method)   { 
    $("#address_from_msg").html("Please select use current location or enter address");
      return false;
  }  
  if(uemail.replace(/\s/g, "").length == 0)
  {
    err++;
    $("#uemail_msg").html("Please enter your email");
    return false;
  }
  else
  {
    if (!emailReg.test(uemail)) {
      err++;
      $('#uemail_msg').html('Please enter your valid email');
      } else {
        $('#uemail_msg').html('');
    }    
  }
  
  if(err==0){
    return true;
  }else{
    return false;
  }         
}
function validateOfficeHomePlan() {
  var err=0;
  var emailReg = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  var mbReg = /^\d{10}$/;
  var pinReg = /^\d{6}$/;

  var number_of_device1=$("#number_of_device1").val();
  var city_office_from_home=$("#city_office_from_home").val();
  var plan_office_from_home=$("#plan_office_from_home").val();
  //console.log(plan_office_from_home);
  var address_office=$("#address_office").val();
  var landmark_office=$("#landmark_office").val();
  var pincode_office=$("#pincode_office").val();
  var phone_no1=$("#phone_no1").val();
  var company_name=$("#company_name").val();
  var uemail1=$("#uemail1").val();
  
  if(number_of_device1.replace(/\s/g, "").length == 0){
    err++;
    $('#number_of_device_msg1').html('Please enter number of device');
  }else{
    $('#number_of_device_msg1').html('');
  }
  if (city_office_from_home == 0) {
    err++;
    $('#city_msg1').html('Please select a city');
    return false;
  }
  else
  {
    $('#city_msg1').html('');
  }
  if (plan_office_from_home == 0) {
    err++;
    $('#plan_msg1').html('Please select a plan');
    return false;
  }
  else
  {
    $('#plan_msg1').html('');
  }
  var addressfrom = document.getElementsByName('address_from');
  var ischecked_method = false;
  for ( var i = 0; i < addressfrom.length; i++) {
    if(addressfrom[i].checked) {
      ischecked_method = true;
      addressfrom_value = addressfrom[i].value;
      //console.log(value);
      //break;
      if(addressfrom_value=="User Given Address" && officepopup == 1)
      {
        if(address_office.replace(/\s/g, "").length == 0)
        {
          err++;
          $("#address_from_msg1").html('');
          $("#address_msg1").html("Please enter your address");
          return false;
        }
        else
        {
          $("#address_msg1").html("");
        }
        if(landmark_office.replace(/\s/g, "").length == 0)
        {
          err++;
          $("#address_from_msg1").html('');
          $("#address_msg1").html('');
          $("#landmark_msg1").html("Please enter your landmark");
          return false;
        }
        else
        {
          $("#landmark_msg1").html("");
        }
        if(pincode_office.replace(/\s/g, "").length == 0)
        {
          err++;
          $("#address_from_msg1").html('');
          $("#address_msg1").html('');
          $("#landmark_msg1").html('');
          $("#pincode_msg1").html("Please enter your pincode");
          return false;
        }
        else
        {
          if (!pinReg.test(pincode_office)) {
            err++;
            $('#pincode_msg1').html('Please enter 6 digit pincode');
            return false;
            } else {
              $('#pincode_msg1').html('');
          }
        }
      }
    }
  }
  if(!ischecked_method)   { 
    $("#address_from_msg1").html("Please select use current location or enter address");
      return false;
  }
  if(phone_no1.replace(/\s/g, "").length == 0)
  {
    err++;
    $("#phone_no_msg1").html("Please enter your phone number");
    return false;
  }
  else
  {
    if (!mbReg.test(phone_no1)) {
    err++;
    $('#phone_no_msg1').html('Please enter your valid 10 digit phone number');
    return false;
    } else {
      $('#phone_no_msg1').html('');
    }
  }
  if(company_name.replace(/\s/g, "").length == 0)
  {
    err++;
    $("#company_name_msg").html("Please enter your company name");
    return false;
  }
  else
  {
    $('#company_name_msg').html('');    
  }  
  if(uemail1.replace(/\s/g, "").length == 0)
  {
    err++;
    $("#uemail_msg1").html("Please enter your email");
    return false;
  }
  else
  {
    if (!emailReg.test(uemail1)) {
      err++;
      $('#uemail_msg1').html('Please enter your valid email');
      return false;
      } else {
        $('#uemail_msg1').html('');
    }    
  }
  
  if(err==0){
    return true;
  }else{
    return false;
  }         
}
$('#newconnection_pincode').bind('keyup blur',function(e){ 
  var mb = $(this);
      if(e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)){
          mb.val(mb.val().replace(/[^0-9]/g,'') );
    }
});
$('#newconnection_phone_no').bind('keyup blur',function(e){ 
  var mb = $(this);
      if(e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)){
          mb.val(mb.val().replace(/[^0-9]/g,'') );
    }
});
function validateNewConnection(){
  var err=0;
  var emailReg = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  var mbReg = /^\d{10}$/;
  var pinReg = /^\d{6}$/;
  var newconnection_city=$("#newconnection_city").val();
  var newconnection_plan=$("#newconnection_plan").val();
  var newconnection_address=$("#newconnection_address").val();
  var newconnection_landmark=$("#newconnection_landmark").val();
  var newconnection_pincode=$("#newconnection_pincode").val();
  var newconnection_phone_no=$("#newconnection_phone_no").val();
  var preferred_date=$("#preferred_date").val();
  var preferred_time=$("#preferred_time").val();
  var newconnection_uname=$("#newconnection_uname").val();
  var newconnection_uemail=$("#newconnection_uemail").val();
  if (newconnection_city == 0) {
    err++;
    $('#newconnection_city_msg').html('Please select a city');
    return false;
  }
  else
  {
    $('#newconnection_city_msg').html('');
  }
  if (newconnection_plan == 0) {
    err++;
    $('#newconnection_plan_msg').html('Please select a plan');
    return false;
  }
  else
  {
    $('#newconnection_plan_msg').html('');
  }
  var addressfrom = document.getElementsByName('address_from');
  var ischecked_method = false;
  for ( var i = 0; i < addressfrom.length; i++) {
    if(addressfrom[i].checked) {
      ischecked_method = true;
      addressfrom_value = addressfrom[i].value;
      //console.log(value);
      //break;
      if(addressfrom_value=="User Given Address" && planHomePopup == 1)
      {
        if(newconnection_address.replace(/\s/g, "").length == 0)
        {
          err++;
          $("#address_from_msg3").html('');
          $("#address_msg3").html("Please enter your address");
          return false;
        }
        else
        {
          $("#address_msg3").html("");
        }
        if(newconnection_landmark.replace(/\s/g, "").length == 0)
        {
          err++;
          $("#address_from_msg3").html('');
          $("#address_msg3").html('');
          $("#landmark_msg3").html("Please enter your landmark");
          return false;
        }
        else
        {
          $("#landmark_msg3").html("");
        }
        if(newconnection_pincode.replace(/\s/g, "").length == 0)
        {
          err++;
          $("#address_from_msg3").html('');
          $("#address_msg3").html('');
          $("#landmark_msg3").html('');
          $("#pincode_msg3").html("Please enter your pincode");
          return false;
        }
        else
        {
          if (!pinReg.test(newconnection_pincode)) {
            err++;
            $('#pincode_msg3').html('Please enter 6 digit pincode');
            return false;
            } else {
              $('#pincode_msg3').html('');
          }
        }
      }
    }
  }
  if(!ischecked_method)   { 
    $("#address_from_msg3").html("Please select use current location or enter address");
      return false;
  }
  if(newconnection_phone_no.replace(/\s/g, "").length == 0)
  {
    err++;
    $("#newconnection_phone_no_msg").html("Please enter your phone number");
    return false;
  }
  else
  {
    if (!mbReg.test(newconnection_phone_no)) {
    err++;
    $('#newconnection_phone_no_msg').html('Please enter your valid 10 digit phone number');
    return false;
    } else {
      $('#newconnection_phone_no_msg').html('');
    }
  }
  if(preferred_date.replace(/\s/g, "").length == 0)
  {
    err++;
    $("#preferred_date_msg").html('Please choose a date');
    return false;
  }
  else
  {
    $("#preferred_date_msg").html("");
  }
  if(preferred_time.replace(/\s/g, "").length == 0)
  {
    err++;
    $("#preferred_time_msg").html('Please choose a time');
    return false;
  }
  else
  {
    $("#preferred_time_msg").html("");
  }
  if(newconnection_uname.replace(/\s/g, "").length == 0)
  {
    err++;
    $("#newconnection_uname_msg").html('Please enter a your name');
    return false;
  }
  else
  {
    $("#newconnection_uname_msg").html("");
  }
  if(newconnection_uemail.replace(/\s/g, "").length == 0)
  {
    err++;
    $("#newconnection_uemail_msg").html('Please enter a your email');
    return false;
  }
  else
  {
    if (!emailReg.test(newconnection_uemail)) {
      err++;
      $('#newconnection_uemail_msg').html('Please enter your valid email');
      return false;
      } else {
        $('#newconnection_uemail_msg').html('');
    }
  }
  if(err==0){
    return true;
  }else{
    return false;
  }
}
$('#newconnection_pincode1').bind('keyup blur',function(e){ 
  var mb = $(this);
      if(e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)){
          mb.val(mb.val().replace(/[^0-9]/g,'') );
    }
});
$('#newconnection_phone_no1').bind('keyup blur',function(e){ 
  var mb = $(this);
      if(e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)){
          mb.val(mb.val().replace(/[^0-9]/g,'') );
    }
});
function validateNewConnectionBusiness(){
  var err=0;
  var emailReg = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  var mbReg = /^\d{10}$/;
  var pinReg = /^\d{6}$/;
  var newconnection_city1=$("#newconnection_city1").val();
  var newconnection_plan1=$("#newconnection_plan1").val();
  var newconnection_address1=$("#newconnection_address1").val();
  var newconnection_landmark1=$("#newconnection_landmark1").val();
  var newconnection_pincode1=$("#newconnection_pincode1").val();
  var newconnection_phone_no1=$("#newconnection_phone_no1").val();
  var preferred_date_business=$("#preferred_date_business").val();
  var preferred_time1=$("#preferred_time1").val();
  var newconnection_uname1=$("#newconnection_uname1").val();
  var newconnection_company_name=$("#newconnection_company_name").val();
  var newconnection_uemail1=$("#newconnection_uemail1").val();
  if (newconnection_city1 == 0) {
    err++;
    $('#newconnection_city_msg1').html('Please select a city');
    return false;
  }
  else
  {
    $('#newconnection_city_msg1').html('');
  }
  if (newconnection_plan1 == 0) {
    err++;
    $('#newconnection_plan_msg1').html('Please select a plan');
    return false;
  }
  else
  {
    $('#newconnection_plan_msg1').html('');
  }
  var addressfrom = document.getElementsByName('address_from');
  var ischecked_method = false;
  for ( var i = 0; i < addressfrom.length; i++) {
    if(addressfrom[i].checked) {
      ischecked_method = true;
      addressfrom_value = addressfrom[i].value;
      //console.log(value);
      //break;
      if(addressfrom_value=="User Given Address" && planBusinessPopup == 1)
      {
        if(newconnection_address1.replace(/\s/g, "").length == 0)
        {
          err++;
          $("#address_from_msg4").html('');
          $("#address_msg4").html("Please enter your address");
          return false;
        }
        else
        {
          $("#address_msg4").html("");
        }
        if(newconnection_landmark1.replace(/\s/g, "").length == 0)
        {
          err++;
          $("#address_from_msg4").html('');
          $("#address_msg4").html('');
          $("#landmark_msg4").html("Please enter your landmark");
          return false;
        }
        else
        {
          $("#landmark_msg4").html("");
        }
        if(newconnection_pincode1.replace(/\s/g, "").length == 0)
        {
          err++;
          $("#address_from_msg4").html('');
          $("#address_msg4").html('');
          $("#landmark_msg4").html("");
          $("#pincode_msg4").html("Please enter your pincode");
          return false;
        }
        else
        {
          if (!pinReg.test(newconnection_pincode1)) {
            err++;
            $('#pincode_msg4').html('Please enter 6 digit pincode');
            return false;
            } else {
              $('#pincode_msg4').html('');
          }
        }
      }
    }
  }
  if(!ischecked_method)   { 
    $("#address_from_msg4").html("Please select use current location or enter address");
      return false;
  }
  if(newconnection_phone_no1.replace(/\s/g, "").length == 0)
  {
    err++;
    $("#newconnection_phone_no_msg1").html("Please enter your phone number");
    return false;
  }
  else
  {
    if (!mbReg.test(newconnection_phone_no1)) {
    err++;
    $('#newconnection_phone_no_msg1').html('Please enter your valid 10 digit phone number');
    return false;
    } else {
      $('#newconnection_phone_no_msg1').html('');
    }
  }
  if(preferred_date_business.replace(/\s/g, "").length == 0)
  {
    err++;
    $("#preferred_date_msg1").html('Please choose a date');
    return false;
  }
  else
  {
    $("#preferred_date_msg1").html("");
  }
  if(preferred_time1.replace(/\s/g, "").length == 0)
  {
    err++;
    $("#preferred_time_msg1").html('Please choose a time');
    return false;
  }
  else
  {
    $("#preferred_time_msg1").html("");
  }
  if(newconnection_uname1.replace(/\s/g, "").length == 0)
  {
    err++;
    $("#newconnection_uname_msg1").html('Please enter a your name');
    return false;
  }
  else
  {
    $("#newconnection_uname_msg1").html("");
  }
  if(newconnection_company_name.replace(/\s/g, "").length == 0)
  {
    err++;
    $("#newconnection_company_name_msg").html('Please enter a your company name');
    return false;
  }
  else
  {
    $("#newconnection_company_name_msg").html("");
  }
  if(newconnection_uemail1.replace(/\s/g, "").length == 0)
  {
    err++;
    $("#newconnection_uemail_msg1").html('Please enter a your email');
    return false;
  }
  else
  {
    if (!emailReg.test(newconnection_uemail1)) {
      err++;
      $('#newconnection_uemail_msg1').html('Please enter your valid email');
      return false;
      } else {
        $('#newconnection_uemail_msg1').html('');
    }
  }
  if(err==0){
    return true;
  }else{
    return false;
  }
}
</script>

<script>
jQuery(document).ready(function(){

  jQuery(".faq-drop h2").click(function(){
    $(this).parent().find("p").slideToggle("slow");
  });
});
</script>



<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5cfb8b62b534676f32adf1cb/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->



<?php wp_footer();?>

</body>
</html>
