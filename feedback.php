<?  
session_start();
/*
Simple Feedback ZDR Tool 
This is simple and powerfull feedback form protected with "Captcha ZDR" tool writen in PHP
This script is ready for integration in your pages. The FeedBack form using PHP, HTML, AJAX, JavaScript, CSS
You need just put your email address in $email_recipient to receive messages from that feedback and just need to include the script in your page.
Open post.php file and write your email for receiving messages from feedback form.
===============================================================================
Please don't remove the link to http://www.webtoolbag.com at the bottom of form.
===============================================================================
Best Regards
Zdravko Shishmanov

Copyright (C) 2007  Zdravko Shishmanov 
Bulgaria 
Email: zdrsoft@yahoo.com
http://www.webtoolbag.com

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/
?>

<html>
<head>

<style type="text/css">
<!--
body {
	margin: 0;
	padding: 0;
	font-family: Verdana, Arial, sans-serif;
	color: #265C62;
}

.textar {
	font: normal 11px Verdana;
	color: #000000;
	margin-top:0px;
	margin-left:0px;
	margin-right:0px;
	margin-bottom:0px;
	background-color:#ffffff;
	border-left: 1px solid #265C62; 
	border-right: 1px solid #265C62; 
	border-top: 1px solid #265C62; 
	border-bottom: 1px solid #265C62; 
}
-->
</style>

<?

?>
<script language="JavaScript" type="text/JavaScript" src="ajax_zdr.js"></script>
</head>
<body onLoad="write_captcha()">
<br />
<form name="form_zdr" id="form_zdr" method="post" action="javascript:get(document.getElementById('form_zdr'));" >
  <div align="center">
    <table width="556" border="0" align="left">
      <tr>
      <td align="left" valign="top" style="font: normal 12px Verdana;padding-left:60px; text-align: justify">      <div style="width: 440px">      <br><br>
      <strong><font size="3">Contacts Feedback Form</font></strong></div>
      <div style="padding-top: 20px;">
      <b>Name</b> <img src="images/down_arrow_green_sm.gif" width="16" height="16" alt="" /><br />
      <input type="text" name="name" id="name" value="" class="textar" style="width: 440px;" /><br /><br />

      <b>Email</b> <img src="images/down_arrow_green_sm.gif" width="16" height="16" alt="" /><br />
      <input type="text" name="email" id="email" value="" class="textar" style="width: 440px;" /><br /><br />      
      
      <b>Message</b> <img src="images/down_arrow_green_sm.gif" width="16" height="16" alt="" /><br />

      <textarea name="message" id="message" class="textar" style="width: 440px;height: 180px;" wrap="VIRTUAL"></textarea></div>
	<br />
	<div>
		<div id="captcha_id"></div><br /><br />
		Enter result: <input type="text" name="capt" id="capt" class="textar" style="width: 115px" />
	</div>
 	<div>&nbsp;</div>
          <input type="submit" id="Submit" name="Submit" value=" Send " /><br /><br />
	    <span id="myspan"></span>
	    <br /><br /><br />
          <!-- Please do not remove this link -->
	    <!-- Best Regards Zdravko Shishmanov -->
	    <div style="font-size: 10px"><a href="http://www.webtoolbag.com/">Web developer tools and resources</a></div> 
          <!-- Please do not remove this link -->
	    <!-- Best Regards Zdravko Shishmanov -->	    
        </td>
      </tr>
    </table>
  </div>
</form>
<div></div>
</body>
</html>
