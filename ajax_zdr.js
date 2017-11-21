   var http_request = false;
   var clicks	  = 0;
   function makePOSTRequest(url, parameters) {
      http_request = false;
      if (window.XMLHttpRequest) { // Mozilla, Safari,...
         http_request = new XMLHttpRequest();
         if (http_request.overrideMimeType) {
         	// set type accordingly to anticipated content type
            //http_request.overrideMimeType('text/xml');
            http_request.overrideMimeType('text/html');
         }
      } else if (window.ActiveXObject) { // IE
         try {
            http_request = new ActiveXObject("Msxml2.XMLHTTP");
         } catch (e) {
            try {
               http_request = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e) {}
         }
      }
      if (!http_request) {
         alert('Cannot create XMLHTTP instance');
         return false;
      }
      
      http_request.onreadystatechange = alertContents;
      http_request.open('POST', url, true);
      http_request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      http_request.setRequestHeader("Content-length", parameters.length);
      http_request.setRequestHeader("Connection", "close");
      http_request.send(parameters);
   }

   function alertContents() {
      if (http_request.readyState == 4) {
         if (http_request.status == 200) {
            //alert(http_request.responseText);
            result = http_request.responseText;
            document.getElementById('myspan').innerHTML = result;            
         } else {
            alert('There was a problem with the request.');
         }
      }
   }
   
   function get(obj) {
      var poststr = "name=" + encodeURI( document.getElementById("name").value ) +
                    "&email=" + encodeURI( document.getElementById("email").value ) +
			  "&message=" + encodeURI( document.getElementById("message").value )+
			  "&capt=" + encodeURI( document.getElementById("capt").value )+			  
			  "&Submit=" + encodeURI( document.getElementById("Submit").value );
      makePOSTRequest('post.php', poststr);
   }

   function write_captcha(){
   	clicks++;
   	document.getElementById('capt').value		= ''
	document.getElementById('captcha_id').innerHTML = '<img src="captcha_img.php?clicks=' + clicks + '" border="0" alt="" /> Refresh: <a href="#" onclick="write_captcha();"><img src="images/refresh.gif" border="0" alt="" /></a>';
   return false;
   }
   
