$(document).ready(function(){
	$('.top-nav-list a, .side-nav-list a').each(function highlightActiveNav(index){
		if(this.href.trim() == window.location){
			$(this).addClass('selected');
		}
	});
});