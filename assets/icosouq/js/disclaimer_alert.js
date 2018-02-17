function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return false;
}

function remove_disclaimer()
{
	$('#disclamer_popup').hide();
	setCookie('hide_disclaimer', '1', 30);
	ga('send', 'event', 'removed_disclaimer', '1' , '1');

}

function show_disclaimer()
{
	if (!getCookie('hide_disclaimer')) 
	{
		var disclaimer_popup = '<div id="disclamer_popup" style="background-color:#ffcfcf;position:fixed;top:0px;left:0px;border:1px solid grey;padding:10px;color:#000;font-size:18px;z-index:100000;width:100%">' + 
		'<div style="float:left;padding:7px;">By using ICO Watchlist you agree to our <a href="https://icowatchlist.com/disclaimer">Disclaimer</a>, <a href="https://icowatchlist.com/privacy">Cookies Policy</a> and <a href="https://icowatchlist.com/terms">Terms of Use</a>.</div>' +
		'<div style="float:right;top:0px;right:0px;border:2px solid red;padding:5px;cursor:pointer;" onclick="remove_disclaimer();">Close Alert For 30 Days</div></div>';
		$(disclaimer_popup).appendTo('body');
	}
}

$(document).ready(function(){
    show_disclaimer();
});