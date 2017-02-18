$(document).ready(function (e) {
notify("Welcome",1000);
$("#logmail").on('input',function(){
	
	if($(this).val()!="")
	{
		var vsoc=$(this).val();
		$.post("check.php",
			{ 
			go:7,
			soc:vsoc
			},
			function(response,status)
			{
				if(response=="O God! you are right here.."){document.getElementById('logkey').style.display="block";$("#logkey").addClass('s_animate-top');}
				notify(response,1000);
			//$("#s_form1")[0].reset();
			});
		
	}
});
$("#logkey").on('input',function(){
	
	if($(this).val()!="")
	{
		var vsoc1=$(this).val();
		var vsoc2=$("#logmail").val();
		$.post("check.php",
			{ 
			go:8,
			soc1:vsoc1,
			soc2:vsoc2
			},
			function(response,status)
			{
				if(response!="Not yet.."){window.open(response, '_blank');}
				notify(response,1000);
			//$("#s_form1")[0].reset();
			});
		
	}
});




window.onbeforeunload = function () 
{
	var vsoc1="fuck";
	var vsoc2=$("#logmail").val();
		$.post("check.php",
			{ 
			go:9,
			soc1:vsoc1,
			soc2:vsoc2
			},
			function(response,status)
			{
			});
		
    }










});

	
function notify(ap,ti)
{
	$("#notification").empty();
	$("#notification").fadeIn(400).append(ap);
	$("#notification").delay(ti).fadeOut(400);
}