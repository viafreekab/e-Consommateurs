<?
$email_recipient 	= 'kabilonly@gmail.com'; // Write here your email. On that address you'll receive emails from feedback form

session_start();
error_reporting(0);
include("class/captchaZDR.php");

$capt = new captchaZDR;
$wrong_captcha 	= '';

if(isset($_REQUEST['Submit']) and $capt->check_result())
{		
	  $message_send = "
	  FEEDBACK
	  \n\n	  
	  Name: ".$_REQUEST['name']." \n
	  Email: ".$_REQUEST['email']." \n
	  Message: ".$_REQUEST['message']." \n	  	  
	  	  
	  ";

	$headers .= 'To: <'.$email_recipient.'>' . "\r\n";
	$headers .= 'From: '.$_REQUEST['name'].' <'.$_REQUEST['email'].'>' . "\r\n";

	  
      if(mail($email_recipient, 'Feedback Message from '.$_REQUEST['name'], $message_send, $headers))
      echo '<div style="color: green"><strong>Thank you for your comment.</strong></div>'; else echo '<div style="color: red"><strong>Problem in sending message. Please try again. Thank you.</strong></div>';
        
} 
else
{

if(isset($_REQUEST['Submit']) and (!$capt->check_result()) ) echo '<div style="color: red"><strong>Wrong Captcha input. Please try again. Refresh captcha:</strong> <a href="#" onclick="write_captcha();"><img src="images/refresh.gif" border="0" alt="" /></a></div>';

}

?>
