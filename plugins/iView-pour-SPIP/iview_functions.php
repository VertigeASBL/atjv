<?php 

/* On ajoute le javascript de iView */
function iview_insert_head($flux) {

	/* Raphael JS */
	$flux .= '<script type="text/javascript" src="'.find_in_path('js/raphael-min.js').'"></script>';
	/* jQuery easing */
	$flux .= '<script type="text/javascript" src="'.find_in_path('js/jquery.easing.js').'"></script>';
	/* iView Packed */
	$flux .= '<script type="text/javascript" src="'.find_in_path('js/iview.pack.js').'"></script>';

	$config = lire_config('iview');

	$flux .= '
	<script type="text/javascript">
		$(document).ready(function() {
		    $("#iview").iView({
		        fx: "'.$config['effet'].'", // Specify sets like: "left-curtain,fade,zigzag-top,strip-left-fade"
		        easing: "easeOutQuad", // for the complete list http://jqueryui.com/demos/effect/easing.html
		        strips: 20, // Number of strips for strip animations
		        blockCols: 10, // Number of block columns for block animations
		        blockRows: 5, // Number of block rows for block animations
		        captionSpeed: '.$config['vitesse_caption'].', // Caption transition speed
		        captionEasing: "easeInOutSine", // Caption transition easing effect
		        captionOpacity: '.$config['opacite_caption'].', // Caption opacity
		        animationSpeed: '.$config['vitesse'].', // Slide transition speed
		        pauseTime: '.$config['pause'].', // How long each slide will show
		        startSlide: 0, // Set starting Slide (0 index)
		        directionNav: '.$config['direction_nav'].', // Next & Previous navigation
		        directionNavHoverOpacity: 0.6, // Fade on hover
		        controlNav: '.$config['control_nav'].', // 1,2,3,4... navigation
		        controlNavNextPrev: '.$config['controlNavNextPrev'].', // previous,next navigation
		        controlNavHoverOpacity: '.$config['controlNavHoverOpacity'].', // Navigation fade on hover
		        controlNavThumbs: false, // Show thumbs navigation
		        controlNavTooltip: '.$config['controlNavTooltip'].', // Show tooltip image previewer
		        autoAdvance: true, // Force auto transitions
		        keyboardNav: true, // Use left & right arrows
		        touchNav: true, // Use Touch swipe to change slides
		        pauseOnHover: false, // Stop slider while hovering
		        nextLabel: "Suivante", // To set the string of the next button (Multilanguage use)
		        previousLabel: "Précédente", // To set the string of the previous button (Multilanguage use)
		        playLabel: "Play", // To set the string of the play button (Multilanguage use)
		        pauseLabel: "Pause", // To set the string of the pause button (Multilanguage use)
		        closeLabel: "Close", // To set the string of the close button (Multilanguage use)
		        randomStart: false, // Start on a random slide
		        timer: "'.$config['timer'].'", // Timer style: "Pie", "360Bar" or "Bar"
		        timerBg: "#EEE", // Timer background
		        timerColor: "'.$config['timerColor'].'", // Timer color
		        timerOpacity: '.$config['timerOpacity'].', // Timer opacity
		        timerDiameter: '.$config['timerDiameter'].', // Timer diameter
		        timerPadding: '.$config['timerPadding'].', // Timer padding
		        timerStroke: '.$config['timerStroke'].', // Timer stroke width
		        timerBarStroke: '.$config['timerStroke'].', // Timer Bar stroke width
		        timerBarStrokeColor: "'.$config['timerBarStrokeColor'].'", // Timer Bar stroke color
		        timerBarStrokeStyle: "solid", // Timer Bar stroke style
		        timerX: '.$config['timerX'].', // Timer X position threshold
		        timerY: '.$config['timerY'].', // Timer Y position threshold
		        tooltipX: 5, // Tooltip X position threshold
		        tooltipY: -5, // Tooltip Y position threshold
		        onBeforeChange: function(){}, // Triggers before a slide transition
		        onAfterChange: function(){}, // Triggers after a slide transition
		        onSlideshowEnd: function(){}, // Triggers after all slides have been shown
		        onLastSlide: function(){}, // Triggers when last slide is shown
		        onAfterLoad: function(){}, // Triggers when slider has loaded
		        onPause: function(){}, // Triggers when slider has paused
		        onPlay: function(){} // Triggers when slider has played
		    });
		});
	</script>
	';

	return $flux;
}

/* On ajoute les CSS */
function iview_insert_head_css($flux) {
	$flux .= '<link rel="stylesheet" href="'.find_in_path('css/iview.css').'" type="text/css" media="screen" />';
	$flux .= '<link rel="stylesheet" href="'.find_in_path('css/style_iview.css').'" type="text/css" media="screen" />';

	return $flux;
}


?>