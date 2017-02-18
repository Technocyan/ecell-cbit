$(document).ready(function (e) {
notify("Hi Admin",1000);
$("#workshopname").on('focus',function()
{
	
	if($('#workshopname').value()!="")
	{
		alert("");
		var vattr=$(this).val();
		$.post("check.php",
			{ 
			go:10,
			attr:vattr
			},
			function(response,status)
			{
				notify(response,2000);
			
			//$("#s_form1")[0].reset();
			});
		
	}
	
});






});



function notify(ap,ti)
{
	$("#notification").empty();
	$("#notification").fadeIn(400).append(ap);
	$("#notification").delay(ti).fadeOut(400);
}