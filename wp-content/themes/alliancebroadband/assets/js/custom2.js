$('#contact_phone_no').bind('keyup blur',function(e){ 
  var mb = $(this);
      if(e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)){
          mb.val(mb.val().replace(/[^0-9]/g,'') );
    }
});
$('#cotact_pin').bind('keyup blur',function(e){ 
  var mb = $(this);
      if(e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)){
          mb.val(mb.val().replace(/[^0-9]/g,'') );
    }
});
function validateContact(){
  var err=0;
  var emailReg = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  var mbReg = /^\d{10}$/;
  var pinReg = /^\d{6}$/;

  var contact_uname=$('#contact_uname').val();
  var contact_uemail=$('#contact_uemail').val();
  var contact_phone_no=$('#contact_phone_no').val();
  var cotact_user_id=$('#cotact_user_id').val();
  var address_contact=$('#address_contact').val();
  var cotact_pin=$('#cotact_pin').val();
  var source=$('#source').val();
  var subject=$('#subject').val();
  var message=$('#message').val();
  if(contact_uname.replace(/\s/g, "").length == 0){
    err++;
    $('#contact_uname_msg').html('Please enter your name');
    return false;
  }else{
    $('#contact_uname_msg').html('');
  }
  if(contact_uemail.replace(/\s/g, "").length == 0){
    err++;
    $('#contact_uemail_msg').html('Please enter your email');
    return false;
  }else{
    if (!emailReg.test(contact_uemail)) {
      err++;
      $('#contact_uemail_msg').html('Please enter your valid email');
      return false;
      } else {
        $('#contact_uemail_msg').html('');
    }
  }
  if(contact_phone_no.replace(/\s/g, "").length ==0){
    err++;
    $('#contact_phone_no_msg').html('Please enter your phone no');
    return false;
  }
  else
  {
    if (!mbReg.test(contact_phone_no)) {
      err++;
      $('#contact_phone_no_msg').html('Please enter your valid 10 digit phone no');
      return false;
      } else {
        $('#contact_phone_no_msg').html('');
    }
  }
  if(cotact_user_id.replace(/\s/g, "").length ==0)
  {
    err++;
    $('#cotact_user_id_msg').html('Please enter your userid');
    return false;
  }
  else
  {
    $('#cotact_user_id_msg').html('');
  }
  if(address_contact.replace(/\s/g, "").length ==0)
  {
    //console.log("test");
    err++;
    $('#address_contact_msg').html('Please enter your address');
    return false;
  }
  else
  {
    $('#address_contact_msg').html('');
  }
  if(cotact_pin.replace(/\s/g, "").length ==0)
  {
    err++;
    $('#cotact_pin_msg').html('Please enter your pincode');
    return false;
  }
  else
  {
    if (!pinReg.test(cotact_pin)) {
      err++;
      $('#cotact_pin_msg').html('Please enter your valid 6 digit pincode');
      return false;
      } else {
        $('#cotact_pin_msg').html('');
    }
  }
  if (source == 0) {
    err++;
    $('#source_msg').html('Please select a source');
    return false;
  }
  else
  {
    $('#source_msg').html('');
  }
  if(subject.replace(/\s/g, "").length == 0){
    err++;
    $('#subject_msg').html('Please enter your subject');
    return false;
  }else{
    $('#subject_msg').html('');
  }
  if(message.replace(/\s/g, "").length == 0){
    err++;
    $('#message_msg').html('Please enter your message');
    return false;
  }else{
    $('#message_msg').html('');
  }
  if(err==0){
    return true;
  }else{
    return false;
  } 
}

$('#contact_phone_no1').bind('keyup blur',function(e){ 
  var mb = $(this);
      if(e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)){
          mb.val(mb.val().replace(/[^0-9]/g,'') );
    }
});
$('#cotact_pin1').bind('keyup blur',function(e){ 
  var mb = $(this);
      if(e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)){
          mb.val(mb.val().replace(/[^0-9]/g,'') );
    }
});
function validateContact1(){
  var err=0;
  var emailReg = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  var mbReg = /^\d{10}$/;
  var pinReg = /^\d{6}$/;

  var contact_uname1=$('#contact_uname1').val();
  var contact_uemail1=$('#contact_uemail1').val();
  var contact_phone_no1=$('#contact_phone_no1').val();
  var contact_district=$('#contact_district').val();
  //var cotact_user_id=$('#cotact_user_id').val();
  var address_contact1=$('#address_contact1').val();
  var cotact_pin1=$('#cotact_pin1').val();
  var source1=$('#source1').val();
  var subject1=$('#subject1').val();
  var message1=$('#message1').val();
  if(contact_uname1.replace(/\s/g, "").length == 0){
    err++;
    $('#contact_uname_msg1').html('Please enter your name');
    return false;
  }else{
    $('#contact_uname_msg1').html('');
  }
  if(contact_uemail1.replace(/\s/g, "").length == 0){
    err++;
    $('#contact_uemail_msg1').html('Please enter your email');
    return false;
  }else{
    if (!emailReg.test(contact_uemail1)) {
      err++;
      $('#contact_uemail_msg1').html('Please enter your valid email');
      return false;
      } else {
        $('#contact_uemail_msg1').html('');
    }
  }
  if(contact_phone_no1.replace(/\s/g, "").length ==0){
    err++;
    $('#contact_phone_no_msg1').html('Please enter your phone no');
    return false;
  }
  else
  {
    if (!mbReg.test(contact_phone_no1)) {
      err++;
      $('#contact_phone_no_msg1').html('Please enter your 10 digit valid phone no');
      return false;
      } else {
        $('#contact_phone_no_msg1').html('');
    }
  }
  if(contact_district==0)
  {
    err++;
    $('#contact_district_msg').html('Please select a source');
    return false;
  }
  else
  {
    $('#contact_district_msg').html('');
  }
  // if(cotact_user_id.replace(/\s/g, "").length ==0)
  // {
  //   err++;
  //   $('#cotact_user_id_msg').html('Please enter your userid');
  //   return false;
  // }
  // else
  // {
  //   $('#cotact_user_id_msg').html('');
  // }
  if(address_contact1.replace(/\s/g, "").length ==0)
  {
    //console.log("test");
    err++;
    $('#address_contact_msg1').html('Please enter your address');
    return false;
  }
  else
  {
    $('#address_contact_msg1').html('');
  }
  if(cotact_pin1.replace(/\s/g, "").length ==0)
  {
    err++;
    $('#cotact_pin_msg1').html('Please enter your pincode');
    return false;
  }
  else
  {
    if (!pinReg.test(cotact_pin1)) {
      err++;
      $('#cotact_pin_msg1').html('Please enter your valid 6 digit pincode');
      return false;
      } else {
        $('#cotact_pin_msg1').html('');
    }
  }
  if (source1 == 0) {
    err++;
    $('#source_msg1').html('Please select a source');
    return false;
  }
  else
  {
    $('#source_msg1').html('');
  }
  if(subject1.replace(/\s/g, "").length == 0){
    err++;
    $('#subject_msg1').html('Please enter your subject');
    return false;
  }else{
    $('#subject_msg1').html('');
  }
  if(message1.replace(/\s/g, "").length == 0){
    err++;
    $('#message_msg1').html('Please enter your message');
    return false;
  }else{
    $('#message_msg1').html('');
  }
  if(err==0){
    return true;
  }else{
    return false;
  } 
}

$('#contact_phone_no2').bind('keyup blur',function(e){ 
  var mb = $(this);
      if(e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)){
          mb.val(mb.val().replace(/[^0-9]/g,'') );
    }
});
$('#cotact_pin2').bind('keyup blur',function(e){ 
  var mb = $(this);
      if(e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)){
          mb.val(mb.val().replace(/[^0-9]/g,'') );
    }
});
function validateContact2(){
  var err=0;
  var emailReg = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  var mbReg = /^\d{10}$/;
  var pinReg = /^\d{6}$/;

  var contact_uname2=$('#contact_uname2').val();
  var contact_uemail2=$('#contact_uemail2').val();
  var contact_phone_no2=$('#contact_phone_no2').val();
  //var contact_district=$('#contact_district').val();
  //var cotact_user_id=$('#cotact_user_id').val();
  var cotact_company_name=$('#cotact_company_name').val();
  var cotact_lcno=$('#cotact_lcno').val();
  var address_contact2=$('#address_contact2').val();
  var cotact_pin2=$('#cotact_pin2').val();
  var source2=$('#source2').val();
  var subject2=$('#subject2').val();
  var message2=$('#message2').val();
  if(contact_uname2.replace(/\s/g, "").length == 0){
    err++;
    $('#contact_uname_msg2').html('Please enter your name');
    return false;
  }else{
    $('#contact_uname_msg2').html('');
  }
  if(contact_uemail2.replace(/\s/g, "").length == 0){
    err++;
    $('#contact_uemail_msg2').html('Please enter your email');
    return false;
  }else{
    if (!emailReg.test(contact_uemail2)) {
      err++;
      $('#contact_uemail_msg2').html('Please enter your valid email');
      return false;
      } else {
        $('#contact_uemail_msg2').html('');
    }
  }
  if(contact_phone_no2.replace(/\s/g, "").length ==0){
    err++;
    $('#contact_phone_no_msg2').html('Please enter your phone no');
    return false;
  }
  else
  {
    if (!mbReg.test(contact_phone_no2)) {
      err++;
      $('#contact_phone_no_msg2').html('Please enter your 10 digit valid phone no');
      return false;
      } else {
        $('#contact_phone_no_msg2').html('');
    }
  }
  // if(contact_district==0)
  // {
  //   err++;
  //   $('#contact_district_msg').html('Please select a source');
  //   return false;
  // }
  // else
  // {
  //   $('#contact_district_msg').html('');
  // }
  // if(cotact_user_id.replace(/\s/g, "").length ==0)
  // {
  //   err++;
  //   $('#cotact_user_id_msg').html('Please enter your userid');
  //   return false;
  // }
  // else
  // {
  //   $('#cotact_user_id_msg').html('');
  // }
  if(cotact_company_name.replace(/\s/g, "").length == 0){
    err++;
    $('#cotact_company_name_msg').html('Please enter your company name');
    return false;
  }else{
    $('#cotact_company_name_msg').html('');
  }
  if(cotact_lcno.replace(/\s/g, "").length == 0){
    err++;
    $('#cotact_lcno_msg').html('Please enter your pst/licence no');
    return false;
  }else{
    $('#cotact_lcno_msg').html('');
  }
  if(address_contact2.replace(/\s/g, "").length ==0)
  {
    //console.log("test");
    err++;
    $('#address_contact_msg2').html('Please enter your address');
    return false;
  }
  else
  {
    $('#address_contact_msg2').html('');
  }
  if(cotact_pin2.replace(/\s/g, "").length ==0)
  {
    err++;
    $('#cotact_pin_msg2').html('Please enter your pincode');
    return false;
  }
  else
  {
    if (!pinReg.test(cotact_pin2)) {
      err++;
      $('#cotact_pin_msg2').html('Please enter your valid 6 digit pincode');
      return false;
      } else {
        $('#cotact_pin_msg2').html('');
    }
  }
  if (source2 == 0) {
    err++;
    $('#source_msg2').html('Please select a source');
    return false;
  }
  else
  {
    $('#source_msg2').html('');
  }
  if(subject2.replace(/\s/g, "").length == 0){
    err++;
    $('#subject_msg2').html('Please enter your subject');
    return false;
  }else{
    $('#subject_msg2').html('');
  }
  if(message2.replace(/\s/g, "").length == 0){
    err++;
    $('#message_msg2').html('Please enter your message');
    return false;
  }else{
    $('#message_msg2').html('');
  }
  if(err==0){
    return true;
  }else{
    return false;
  } 
}