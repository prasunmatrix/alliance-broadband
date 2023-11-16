<?php
require 'PHPMailer/PHPMailerAutoload.php';
include('../wp-config.php');

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD,DB_NAME);


//if(isset($_POST['form_key']) || $formKey->validate()):

  if(isset($_POST['newconnectionSubmit'])){
    // echo "<pre>";
    // print_r($_POST); die(); 
    // $secret = '6Leq-MsZAAAAANDpR0G7pt2sF4qqF5IJMGhtN3Xa';
    // $siteKey = '6Leq-MsZAAAAAA6EA-MkzwoM-U8hvzKSmuendkpt';
    // $url = 'https://www.google.com/recaptcha/api/siteverify';
    // $response = file_get_contents($url.'?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
    // $response = json_decode($response);
    //echo '<pre>'; print_r($response); echo '</pre>'; exit; die;
    //if($response->success == 1) {

        if(isset($_POST['mail_subject']) && (trim($_POST['mail_subject'])!= '')){
            $mail_subject = trim($_POST['mail_subject']);
        }
        else{
            $mail_subject = 'A new connection submission for Alliance Broadband';
        }

        //$number_of_device = '';
        $newconnection_city = '';
        $newconnection_plan = '';
        $address_from='';
        $newconnection_address = '';
        $newconnection_landmark='';
        $newconnection_pincode = '';
        $newconnection_franchise_number='';
        $newconnection_phone_no='';
        $newconnection_uname='';
        $newconnection_company_name='';
        $newconnection_uemail='';
        $preferred_date='';
        $preferred_time='';

     

        if(isset($_POST['newconnection_city']) && (trim($_POST['newconnection_city'])!= '')){
          $newconnection_city = trim($_POST['newconnection_city']); 
        }
        if(isset($_POST['newconnection_plan']) && (trim($_POST['newconnection_plan'])!= '')){
          $newconnection_plan = trim($_POST['newconnection_plan']); 
        }
        if(isset($_POST['address_from']) && (trim($_POST['address_from'])!= '')){
          $address_from = trim($_POST['address_from']); 
        }
        if(isset($_POST['newconnection_address']) && (trim($_POST['newconnection_address'])!= '')){
          $newconnection_address = trim($_POST['newconnection_address']);
        }
        if(isset($_POST['newconnection_landmark']) && (trim($_POST['newconnection_landmark'])!= '')){
          $newconnection_landmark = trim($_POST['newconnection_landmark']);
        }
        if(isset($_POST['newconnection_pincode']) && (trim($_POST['newconnection_pincode'])!= '')){
          $newconnection_pincode = trim($_POST['newconnection_pincode']);
        }
        if(isset($_POST['newconnection_franchise_number']) && (trim($_POST['newconnection_franchise_number'])!= '')){
          $newconnection_franchise_number = trim($_POST['newconnection_franchise_number']);
        }
      	if(isset($_POST['newconnection_phone_no']) && (trim($_POST['newconnection_phone_no'])!= '')){
            $newconnection_phone_no = trim($_POST['newconnection_phone_no']);
          }
      	if(isset($_POST['newconnection_uname']) && (trim($_POST['newconnection_uname'])!= '')){
            $newconnection_uname = trim($_POST['newconnection_uname']);
        }  
        if(isset($_POST['newconnection_company_name']) && (trim($_POST['newconnection_company_name'])!= '')){
          $newconnection_company_name = trim($_POST['newconnection_company_name']);
        }
        if(isset($_POST['newconnection_uemail']) && (trim($_POST['newconnection_uemail'])!= '')){
          $newconnection_uemail = strtolower(trim($_POST['newconnection_uemail']));
        }
        if(isset($_POST['preferred_date']) && (trim($_POST['preferred_date'])!= '')){
            $preferred_date = trim($_POST['preferred_date']);
          }
        if(isset($_POST['preferred_time']) && (trim($_POST['preferred_time'])!= '')){
            $preferred_time = trim($_POST['preferred_time']);
          }

        if($address_from == 'Use Current Location') {
          $newconnection_address = $_POST['planpopupform_2_a'] ?? '';
          $newconnection_landmark = $_POST['planpopupform_2_l'] ?? '';
          $newconnection_pincode = $_POST['planpopupform_2_p'] ?? '';
        }

        //$weburl='http://tataagrico.com/wp-content/themes/tata/assets/';

        date_default_timezone_set('Asia/Kolkata');
        $dt = date("Y-m-d h:i:s");
          
          
          
          //database entry
       
        $time=time();
      
     
        //end
        $sql="INSERT INTO `wp_newconnection_business` (`city_id`,`plan_id`,`address_from`,`address`,`landmark`,`pincode`,`phone_no`,`uname`,`company_name`,`uemail`,`connection_date`,`connection_time`) VALUES ('$newconnection_city','$newconnection_plan','$address_from','$newconnection_address','$newconnection_landmark','$newconnection_pincode','$newconnection_phone_no','$newconnection_uname','$newconnection_company_name','$newconnection_uemail','$preferred_date','$preferred_time')"; 
        mysqli_query($conn, $sql);
        $lastid = mysqli_insert_id($conn);

        global $wpdb;

        $cityMasterExists = $wpdb->get_results("SELECT city_name from wp_city_master where id=$newconnection_city limit 1");
        $planMasterExists = $wpdb->get_results("SELECT * from wp_plan_master where id=$newconnection_plan limit 1");

        // Starts
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://alliancebroadband.co.in/alliance-spreadsheet/new-connection-business.php',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => array(
            'newconnection_city' => $cityMasterExists[0]->city_name ?? '',
            'newconnection_plan' =>  ($planMasterExists[0]->plan_name.'-'.$planMasterExists[0]->speed) ?? '',
            'address_from' =>  $address_from,
            'newconnection_address' =>  $newconnection_address,
            'newconnection_landmark' =>  $newconnection_landmark,
            'newconnection_pincode' =>  $newconnection_pincode,
            'newconnection_phone_no' =>  $newconnection_phone_no,
            'newconnection_uname' =>  $newconnection_uname,
            'newconnection_company_name' =>  $newconnection_company_name,
            'newconnection_uemail' =>  $newconnection_uemail,
            'preferred_date' =>  $preferred_date,
            'preferred_time' =>  $preferred_time,
            'date'  => date('d/m/Y')
          ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        // Ends

        $mailHtml = '';
      			
      		$mailHtml .= '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Alliance Broadband</title>
        <style>
        img{ max-width:100%;}
        body {
        	margin: 0;
        	padding: 0;
        	font-family: Arial, Helvetica, sans-serif; font-size:16px;
        }
        .wrapper {
        	max-width: 750px;
        	width: 100%;
        	margin: 0 auto;
        }
        .wrap-content {
        	width: 100%;
        	float: left;
        	padding: 10px;
        	box-sizing: border-box;
        }
        .wrap-content td {
        	padding: 8px 4px;
        }

        </style>
        </head>


        <body>
        <div class="wrapper">
          <div class="wrap-content" style="margin-top: 4%; border-top: 6px solid #13a89e; border-bottom: 6px solid #145d89;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0" >
              <tr>
                <td valign="top" align="left">
                <center>
                <table cellspacing="0" cellpadding="0" width="100%">
                      <tr>
                        <td style=" text-align:left; padding: 20px 0;background-color: #000000;"><a href="'.site_url().'"><img src="'.get_template_directory_uri().'/assets/img/logo1.png" alt="logo" style="float: left; margin-top: -40px;" /></a></td>
                      </tr>
                    </table> 
                    <table cellspacing="0" cellpadding="0" width="100%" style="font-size:14px;"> 
                      <tr>
                        <td style="text-align:left; padding: 38px 0;"><span class="lead-txt"> Hi '.$_POST['newconnection_uname'].', <br/>
                          <br/>
                          Thank you for showing an interest in Alliance Broadband ! <br/>
                          <br/>
                          We have received your enquiry and a representative from our side will get in touch with you with all the details regarding the enquiry.  <br/>
                          <br/>
                          We are glad to be of assistance & look forward to a strong bond with you ! <br/>
                          <br/><br />
                          <br />
                          <br />

                          <strong>With warm Regards,</strong> <br/>
                          <strong>Alliance Broadband</strong> </span>
                        </td>
                      </tr>
                    </table>
                    
                  </center>
                  </td>
              </tr>
            </table>
          </div>
        </div>

        </body>
        </html>';	
  		

        //echo $mailHtml; die();


          //Create a new PHPMailer instance
          $mail = new PHPMailer;
          //Tell PHPMailer to use SMTP
          $mail->isSMTP();
          //Enable SMTP debugging
          // 0 = off (for production use)
          // 1 = client messages
          // 2 = client and server messages
          $mail->SMTPDebug = 0;
          //Ask for HTML-friendly debug output
          $mail->Debugoutput = 'html';
          //Set the hostname of the mail server
          $mail->Host = 'smtp.gmail.com';
          //Set the SMTP port number - likely to be 25, 465 or 587
          $mail->SMTPSecure= 'tls';
          $mail->Port = 587;
          //Whether to use SMTP authentication
          $mail->SMTPAuth = true;
          //Username to use for SMTP authentication
          $mail->Username = 'noreply1@alliancebroadband.co.in';
          //Password to use for SMTP authentication
          //$mail->Password = 'agricowebsite19';
  		    $mail->Password = '66Net@j!99';
          //Set who the message is to be sent from
          $mail->setFrom('noreply1@alliancebroadband.co.in' , 'Alliance Broadband');
          //Set an alternative reply-to address
          //$mail->addReplyTo('replyto@example.com', 'First Last');
          //Set who the message is to be sent to

          $mail->addAddress($newconnection_uemail);
  		    //$mail->addAddress('souvik.bhattacharjee@maxmobility.biz');
  		    
          //$mail->addBcc('amitava@ursdigitally.com');
          //$mail->addBcc('magnedigital@gmail.com');
          //addAttachment


          //Set the subject line
          $mail->Subject = "Thanks $newconnection_uname For your interest in Alliance Broadband";
          //Read an HTML message body from an external file, convert referenced images to embedded,
          //convert HTML into a basic plain-text alternative body
          $mail->msgHTML($mailHtml);
          //Replace the plain text body with one created manually
          //$mail->AltBody = 'This is a plain-text message body';
          //Attach an image file
          //$mail->addAttachment('images/phpmailer_mini.png');

          //send the message, check for errors
          if (!$mail->send()) {
             //"Mailer Error: " . $mail->ErrorInfo;

          } else {
            //header("Location: ../ThankYou.php");
            // echo '<script>
            // 	$(document).ready(function () {
            //     $("#feed_suc").show();
            //   });</script>';
          }

            
          $mailaHtml = '';
  		
          $mailaHtml = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Alliance Broadband</title>
        <style>
        img{ max-width:100%;}
        body {
        	margin: 0;
        	padding: 0;
        	font-family: Arial, Helvetica, sans-serif; font-size:16px;
        }
        .wrapper {
        	max-width: 750px;
        	width: 100%;
        	margin: 0 auto;
        }
        .wrap-content {
        	width: 100%;
        	float: left;
        	padding: 10px;
        	box-sizing: border-box;
        }
        .wrap-content td {
        	padding: 8px 4px;
        }

        </style>
        </head>


        <body>
        <div class="wrapper">
          <div class="wrap-content" style="margin-top: 4%; border-top: 6px solid #13a89e; border-bottom: 6px solid #145d89;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0" >
              <tr>
                <td valign="top" align="left">
                <center>
                <table cellspacing="0" cellpadding="0" width="100%">
                      <tr>
                        <td style=" text-align:left; padding: 20px 0;background-color: #000000;"><a href="'.site_url().'"><img img src="'.get_template_directory_uri().'/assets/img/logo1.png" alt="logo" style="float: left; margin-top: -40px;"  /></a></td>
                      </tr>
                    </table>
                    <table cellspacing="0" cellpadding="0" width="100%" style="font-size:14px;">
                      <tr col>
                        <td style="text-align:left; padding: 38px 0;">
                        <span>Hello Admin,</span><br /><br />
        				        Please check with the below details.<br /><br />
                        <table>
                      <tr>  
                        <td style="padding: 8px 0;"><strong style="color:#3c78bb">Name</strong> </td>
                        <td style="padding: 8px 0;">'.$newconnection_uname.' </td>
                      </tr>
                      <tr>  
                        <td style="padding: 8px 0;"><strong style="color:#3c78bb">Company Name</strong> </td>
                        <td style="padding: 8px 0;">'.$newconnection_company_name.' </td>
                      </tr>  
                      <tr>  
                        <td style="padding: 8px 0;"><strong style="color:#3c78bb">Email ID</strong> </td>
                        <td style="padding: 8px 0;">'.$newconnection_uemail.'</td>
                      </tr> 
                      <tr>  
                        <td style="padding: 8px 0;"><strong style="color:#3c78bb">Mobile No</strong> </td>
                        <td style="padding: 8px 0;"> '.$newconnection_phone_no.'</td>
                      </tr>
                      <tr>  
                        <td style="padding: 8px 0;"><strong style="color:#3c78bb">Preferred Date For Connection</strong> </td>
                        <td style="padding: 8px 0;">'.$preferred_date.'</td>
                      </tr>
                      <tr>  
                        <td style="padding: 8px 0;"><strong style="color:#3c78bb">Preferred Time For Connection</strong> </td>
                        <td style="padding: 8px 0;">'.date('h:i:s a', strtotime($preferred_time)).'</td>
                      </tr>
                      <tr>  
                        <td style="padding: 8px 0;"><strong style="color:#3c78bb">Record creation Date</strong> </td>
                        <td style="padding: 8px 0;">'.date('H:i:s').'</td>
                      </tr> 
                      </table><br />
                      <br />
                      </td>
                      </tr>
                    </table>
                    
                  </center>
                  </td>
              </tr>
            </table>
          </div>
        </div>

        </body>
        </html>';


          //Create a new PHPMailer instance
          $mail_1 = new PHPMailer;
          //Tell PHPMailer to use SMTP
          $mail_1->isSMTP();
          //Enable SMTP debugging
          // 0 = off (for production use)
          // 1 = client messages
          // 2 = client and server messages
          $mail_1->SMTPDebug = 0;
          //Ask for HTML-friendly debug output
          $mail_1->Debugoutput = 'html';
          //Set the hostname of the mail server
          $mail_1->Host = 'smtp.gmail.com';
          //Set the SMTP port number - likely to be 25, 465 or 587
          $mail_1->SMTPSecure= 'tls';
          $mail_1->Port = 587;
          //Whether to use SMTP authentication
          $mail_1->SMTPAuth = true;
          
          //Username to use for SMTP authentication
          $mail_1->Username = 'noreply1@alliancebroadband.co.in';
          //Password to use for SMTP authentication
          //$mail_1->Password = 'agricowebsite19';
  		    $mail_1->Password = '66Net@j!99';
          //Set who the message is to be sent from
          $mail_1->setFrom('noreply1@alliancebroadband.co.in' , 'Alliance Broadband');
          //Set an alternative reply-to address
          //$mail->addReplyTo('replyto@example.com', 'First Last');
          //Set who the message is to be sent to
          $mail_1->addAddress('noreply1@alliancebroadband.co.in');
          //$mail_1->addBcc('prasun.kundu@maxmobility.biz'); 
  	       //$mail_1->addAddress('moumita.dutta@maxmobility.in'); 
          //addAttachment
           //$mail->addAttachment($path,$file_name);

          //Set the subject line
          $mail_1->Subject = $mail_subject;
          //Read an HTML message body from an external file, convert referenced images to embedded,
          //convert HTML into a basic plain-text alternative body
          $mail_1->msgHTML($mailaHtml);
          //Replace the plain text body with one created manually
          //$mail->AltBody = 'This is a plain-text message body';
          //Attach an image file
          //$mail->addAttachment('images/phpmailer_mini.png');

          //send the message, check for errors
          if (!$mail_1->send()) {
             //"Mailer Error: " . $mail->ErrorInfo;

          } else {
            header("Location: ../thank-you-new-connection-business/?id=".$lastid);
            // echo '<script>
            // 	$(document).ready(function () {
            //     $("#feed_suc").show();
            //   });</script>';
          }
        header("Location: ../thank-you-new-connection-business/?id=".$lastid);
    //}
  }
//endif;
exit;
  