$j = jQuery.noConflict();

$j(document).ready(function() {

	var shareBar = $j(".entry-share");
	var above    = $j(".entry-meta").height() + $j(".entry-title").height() + 480;

	$j(window).scroll(function() {

		var headerStop  = $j("body").height() - 283;
		var absolutePos = $j("#content").height() - 51;

		var upTop     = $j(this).scrollTop();
		var barPos    = shareBar.css('position');

		if(upTop > above) {
			if(upTop + 40 > headerStop) {
				if (barPos != 'absolute') shareBar.css({'position' : 'absolute', 'top' : absolutePos});
			}
			else if (barPos != 'fixed') {
				shareBar.css({'position' : 'fixed', 'top' : '-10px'});
				$j(".entry-meta").css({'padding' : '0 0 40px 0'});
			}
		}
		else if (barPos != 'static') {
			shareBar.css("position", "static");
			$j(".entry-meta").css({'padding' : '0'});
		}
	});
});
