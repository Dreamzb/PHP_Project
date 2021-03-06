
function InputCheck1(LoginForm)
{
  if (LoginForm.user.value == "")
  {
	alert("Must have a username!");
	LoginForm.user.focus();
	return (false);
  }
  if (LoginForm.pd.value == "")
  {
	alert("Must have a password!");
	LoginForm.pd.focus();
	return (false);
  }
}

function InputCheck2(RegForm)
{
  if (RegForm.user.value == "")
  {
	alert("Enter your Name!");
	RegForm.user.focus();
	return (false);
  }
  if (RegForm.pd.value == "")
  {
	alert("Enter your password!");
	RegForm.pd.focus();
	return (false);
  }
  if (RegForm.repass.value != RegForm.pd.value)
  {
	alert("Enter the same password!");
	RegForm.repass.focus();
	return (false);
  }
}

$(document).ready(function(){
    timestamp = 0;
    updateMsg();
    $("form#chatform").submit(function()
    {
        $.post("backend.php",{ 
                    message: $("#msg").val(),
                    name: $("#author").val(),
                    action: "postmsg",
                    time: timestamp
                }, function(xml) {
            $("#msg").attr("value","");
            addMessages(xml);
        });
        return false;
    });
});
function addMessages(xml) {
    if($("status",xml).text() == "2") return;
    timestamp = $("time",xml).text();
    $("message",xml).each(function(id) {
        message = $("message",xml).get(id);
        $("#messagewindow").prepend("<b>"+$("author",message).text()+
                                    "</b>: "+$("text",message).text()+
                                    "<br />");
    });
}

function updateMsg() {
    $.post("backend.php",{ time: timestamp }, function(xml) {
        $("#loading").remove();            
        addMessages(xml);                  
    });
    setTimeout('updateMsg()', 100);      
}

function showLocale(objD)
{
	var hh = objD.getHours();
	if(hh<10) hh = '0' + hh;
	var mm = objD.getMinutes();
	if(mm<10) mm = '0' + mm;
	var ss = objD.getSeconds();
	if(ss<10) ss = '0' + ss;
	colorfoot="</font>"
	str =  hh + ":" + mm + ":" + ss + "  " ;
	return(str);
}
function tick()
{
	var today;
	today = new Date();
	document.getElementById("localtime").innerHTML = showLocale(today);
	window.setTimeout("tick()", 3000);
}
tick();	
