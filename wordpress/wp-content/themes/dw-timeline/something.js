	
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
	a = document.getElementById("name2").value
	b = document.getElementById("message2").value
    http1.open('post'  , 'ajaxsplit2.php?name2=' + a  + "&message2="  + b + "&junk=" +Math.random()  );  
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
         document.getElementById("message2").innerHTML = B[1];	
		 //var B = A[0];
		 //var C = A[1];

    }
}

var http2 = createRequestObject();
function sndReq3(){
	g = document.getElementById("password1").value
	h = document.getElementById("name1").value
    http2.open('post'  , 'ajaxsplit3.php?password1=' + g  + "&name1="  + h + "&junk="+Math.random()  );  
    http2.onreadystatechange = handleResponse2;
    http2.send(null);
	
}
function handleResponse2()
{   if( http2.readyState == 4 )
    {   var response = http2.responseText;
	    //alert(response)
		//document.getElementById("message").innerHTML = response;
		//alert(response);
		 var C = response.split ("***");
		// //alert("A0 " + A[0] + " " + "A[1] " + A[1])
	
         document.getElementById("warning").innerHTML = "";
		 if (C[1] != g){
		 document.getElementById("warning").innerHTML = "Pass did not match	";
		 }
		 //+ C[0] + "<br>I hear you live at: " + C[1];	
		 //var B = A[0];
		 //var C = A[1];

    }
}


