<?php
/*
Template Name: New Template
*/

?>

<script type="text/javascript">
function createRequestObject()
{
    var ro;
    var browser = navigator.appName;
    if(browser == "Microsoft Internet Explorer")
    { ro = new ActiveXObject("Microsoft.XMLHTTP");  }
    else
    { ro = new XMLHttpRequest();    }
    return ro;
}
var http = createRequestObject();
function sndReq(){
  u = document.getElementById("name1").value
  v = document.getElementById("message").value
    http.open('post'  , 'ajaxsplit.php?name1=' + u  + "&message="  + v + "&junk="+ Math.random()  );  
    http.onreadystatechange = handleResponse;
    http.send(null);
}
function handleResponse()
{   if( http.readyState == 4 )
    {   var response = http.responseText;
      //alert(response)
    //document.getElementById("message").innerHTML = response;
    //alert(response);
     var A = response.split ("***");
    
         document.getElementById("target").innerHTML = "Hi " + A[0] + "<br>I hear you live at: " + A[1];  
     //var B = A[0];
     //var C = A[1];
     
    }
}
var http1 = createRequestObject();
function sndReq2(){
  a = document.getElementById("name1").value
  b = document.getElementById("password1").value
    http1.open('post'  , '../ajaxsplit2.php?name1=' + a  + "&password1="  + b + "&junk=" +Math.random()  );  
    http1.onreadystatechange = handleResponse1;
    http1.send(null);
  
}
function handleResponse1()
{   if( http1.readyState == 4 )
    {   var response = http1.responseText;
      //alert(response)
    
    //alert(response);
     var B = response.split ("***");
    // //alert("A0 " + A[0] + " " + "A[1] " + A[1])
           if (B[1] != a){
      document.getElementById("name1").style.color = "#e74c3c";
      document.getElementById("name1").style.borderColor = "#e74c3c";
     } else{
      document.getElementById("name1").style.color = "#2ecc71";
       document.getElementById("name1").style.borderColor = "#2ecc71";  
     }
     //var B = A[0];
     //var C = A[1];

    }
}




var http2 = createRequestObject();
function sndReq3(){
  g = document.getElementById("password1").value
  h = document.getElementById("name1").value
  
    http2.open('post'  , '../ajaxsplit3.php?password1=' + g  + "&name1="  + h + "&junk="+Math.random()  );  
    http2.onreadystatechange = handleResponse2;
    http2.send(null);
  
}
function handleResponse2()
{   if( http2.readyState == 4 )
    {  alert('http2.responseText'); 
      var response = http2.responseText;


    

     var C = response.split ("***");
     
    // //alert("A0 " + A[0] + " " + "A[1] " + A[1])
  // document.getElementById("password1").innerHTML = "";
  //   document.getElementById("name1").innerHTML = "";
     //  if (C[0] != h){
     //  document.getElementById("name1").style.color = "#e74c3c";
     //  document.getElementById("name1").style.borderColor = "#e74c3c";
     // } else{
     //  document.getElementById("name1").style.color = "#2ecc71";
     //   document.getElementById("name1").style.borderColor = "#2ecc71";  
     // }

     if (C[1] != g){
      document.getElementById("password1").style.color = "#e74c3c";
      document.getElementById("password1").style.borderColor = "#e74c3c";
     } else{
      document.getElementById("password1").style.color = "#2ecc71";
       document.getElementById("password1").style.borderColor = "#2ecc71";  
     }
     //+ C[0] + "<br>I hear you live at: " + C[1];  
     //var B = A[0];
     //var C = A[1];

    }
}


	// function getemail(){

	// 		var s = document.getElementById("email").value;
		
	// 		 if (s == 'andi.mitre@nbcuni.com') {
			 			
	// 		 	document.getElementById("email").style.color = "#2ecc71";
	// 		 	document.getElementById("email").style.borderColor = "#2ecc71";			 	

	// 		} else {
	// 			document.getElementById("email").style.color = "#e74c3c";
	// 		 	document.getElementById("email").style.borderColor = "#e74c3c";	
	// 		}
	// }
	// function getpass(){

	// 		var v = document.getElementById("password").value;
		
	// 		 if (v == 'andi.mitre@nbcuni.com') {
			 			
	// 		 	document.getElementById("password").style.color = "#2ecc71";
	// 		 	document.getElementById("password").style.borderColor = "#2ecc71";			 	

	// 		} else {
	// 			document.getElementById("password").style.color = "#e74c3c";
	// 		 	document.getElementById("password").style.borderColor = "#e74c3c";	
	// 		}
	// }
</script>


    <header class="transparent">
      <h1 class="entry-title move"><?php the_title(); ?></h1>
      <h4>The following login is intented for NbcUniversal cafeteria employees only.  Please do not log in if not appropriate.</h4>
    </header>
    <body>
    	<br>
    	<div class="col-xs-3">
          <div class="tile">
            <h3 class="tile-title">Log In</h3>
            <form action="../account.php" method="POST" >
            <br>
        		
        			
        			<!-- <div class="form-group has-success"> -->
        			<label for"Email">Enter Email Address</label>
		            <input type="email" id="name1" name="name1" autofocus="on" autocomplete="off"  onkeyup="sndReq2()" required="on" class="form-control">
		            <!-- </div> -->
					
        		<br>
        			<label for="Password">Password</label>
					<input type="password" id="password1" name="password1" required="on" onkeyup="sndReq3()" class="form-control">
        		<br>
				 <span id="warning"></span>
            	<input id="get-started" class="btn btn-primary btn-large btn-block btn-coner" type="submit" name="button"></input>
            </form>
          </div>
        </div>
    </body>

