var menu = $("#menu1");

$(document).ready(function()
{
	// Codigo del menú desplegable

	$("#menu1").hover(function()
	{
		$("#submenuArtistas").css({"opacity":"1"});
	})

	$("#menu1").mouseleave(function()
	{
		$("#submenuArtistas").css({"opacity":"0"});
	})

})
