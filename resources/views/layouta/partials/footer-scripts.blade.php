<script src="{{ URL::asset('js/jquery.js') }}"></script>
<script src="{{ URL::asset('js/plugins.js') }}"></script> 
<script src="{{ URL::asset('js/functions.js') }}"></script> 
<script src="{{ URL::asset('include/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script> 
<script src="{{ URL::asset('include/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script> 
<script src="{{ URL::asset('include/rs-plugin/js/extensions/revolution.extension.video.min.js') }}"></script> 
<script src="{{ URL::asset('include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js') }}"></script> 
<script src="{{ URL::asset('include/rs-plugin/js/extensions/revolution.extension.actions.min.js') }}"></script> 
<script src="{{ URL::asset('include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js') }}"></script> 
<script src="{{ URL::asset('include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js') }}"></script> 
<script src="{{ URL::asset('include/rs-plugin/js/extensions/revolution.extension.navigation.min.js') }}"></script> 
<script src="{{ URL::asset('include/rs-plugin/js/extensions/revolution.extension.migration.min.js') }}"></script> 
<script src="{{ URL::asset('include/rs-plugin/js/extensions/revolution.extension.parallax.min.js') }}"></script> 
<script src="{{ URL::asset('js/components/rangeslider.min.js') }}"></script>
<script src="{{ URL::asset('js/components/moment.js') }}"></script>

<script>

$(document).ready(function () {

	$(".range_01").ionRangeSlider();

	$(".range_02").ionRangeSlider({
		min: 100,
		max: 1000,
		from: 400
	});

	$(".range_03").ionRangeSlider({
		type: "double",
		prefix: "$",
		min: 0,
		max: 1000,
		from: 200,
		to: 800,
	});

	$(".range_04").ionRangeSlider({
		type: "double",
		grid: true,
		min: -1000,
		max: 1000,
		from: -500,
		to: 500
	});

	$(".range_05").ionRangeSlider({
		type: "double",
		grid: true,
		min: -1000,
		max: 1000,
		from: -500,
		to: 500,
		step: 250
	});

	$(".range_06").ionRangeSlider({
		type: "double",
		grid: true,
		min: -12.8,
		max: 12.8,
		from: -3.2,
		to: 3.2,
		step: 0.1
	});

	$(".range_07").ionRangeSlider({
		type: "double",
		grid: true,
		from: 1,
		to: 5,
		values: [0, 10, 100, 1000, 10000, 100000, 1000000]
	});

	$(".range_08").ionRangeSlider({
		grid: true,
		from: 5,
		values: [
			"zero", "one",
			"two", "three",
			"four", "five",
			"six", "seven",
			"eight", "nine",
			"ten"
		]
	});

	$(".range_09").ionRangeSlider({
		grid: true,
		from: 3,
		values: [
			"January", "February", "March",
			"April", "May", "June",
			"July", "August", "September",
			"October", "November", "December"
		]
	});

	$(".range_10").ionRangeSlider({
		grid: true,
		min: 1000,
		max: 1000000,
		from: 100000,
		step: 1000,
		prettify_enabled: false
	});

	$(".range_11").ionRangeSlider({
		grid: true,
		min: 1000,
		max: 1000000,
		from: 200000,
		step: 1000,
		prettify_enabled: true
	});

	$(".range_12").ionRangeSlider({
		grid: true,
		min: 1000,
		max: 1000000,
		from: 300000,
		step: 1000,
		prettify_enabled: true,
		prettify_separator: ","
	});

	$(".range_13").ionRangeSlider({
		type: "double",
		grid: true,
		min: 0,
		max: 10000,
		from: 1000,
		prefix: "$"
	});

	$(".range_14").ionRangeSlider({
		type: "single",
		grid: true,
		min: -90,
		max: 90,
		from: 0,
		postfix: "??"
	});

	$(".range_15").ionRangeSlider({
		grid: true,
		min: 18,
		max: 70,
		from: 30,
		prefix: "Age ",
		max_postfix: "+"
	});

	$(".range_16").ionRangeSlider({
		type: "double",
		grid: true,
		min: 100,
		max: 200,
		from: 145,
		to: 155,
		prefix: "Weight: ",
		postfix: " Kgs",
		decorate_both: true
	});

	$(".range_17").ionRangeSlider({
		type: "double",
		grid: true,
		min: 100,
		max: 200,
		from: 145,
		to: 155,
		prefix: "Weight: ",
		postfix: " pounds",
		decorate_both: false
	});

	$(".range_18").ionRangeSlider({
		type: "double",
		grid: true,
		min: 100,
		max: 200,
		from: 148,
		to: 152,
		prefix: "Weight: ",
		postfix: " pounds",
		values_separator: " ??? "
	});

	$(".range_19").ionRangeSlider({
		type: "double",
		min: 100,
		max: 200,
		from: 148,
		to: 152,
		prefix: "Range: ",
		postfix: " light years",
		decorate_both: false,
		values_separator: " to "
	});

	$(".range_20").ionRangeSlider({
		type: "double",
		min: 1000,
		max: 2000,
		from: 1200,
		to: 1800,
		hide_min_max: true,
		hide_from_to: true,
		grid: false
	});

	$(".range_21").ionRangeSlider({
		type: "double",
		min: 1000,
		max: 2000,
		from: 1200,
		to: 1800,
		hide_min_max: true,
		hide_from_to: true,
		grid: true
	});

	$(".range_22").ionRangeSlider({
		type: "double",
		min: 1000,
		max: 2000,
		from: 1200,
		to: 1800,
		hide_min_max: false,
		hide_from_to: true,
		grid: false
	});

	$(".range_23").ionRangeSlider({
		type: "double",
		min: 1000,
		max: 2000,
		from: 1200,
		to: 1800,
		hide_min_max: true,
		hide_from_to: false,
		grid: false
	});

	$(".range_24").ionRangeSlider({
		type: "double",
		min: 1000000,
		max: 2000000,
		grid: true,
		force_edges: false
	});

	$(".range_25").ionRangeSlider({
		type: "double",
		min: 1000000,
		max: 2000000,
		grid: true,
		force_edges: true
	});

	$(".range_26").ionRangeSlider({
		type: "double",
		min: 0,
		max: 10000,
		grid: true,
		grid_num: 10
	});

	$(".range_27").ionRangeSlider({
		type: "single",
		min: 0,
		max: 10,
		step: 2.34,
		grid: true,
		grid_snap: true
	});

	$(".range_28").ionRangeSlider({
		type: "double",
		min: 0,
		max: 100,
		from: 30,
		to: 70,
		from_fixed: true
	});

	$(".range_29").ionRangeSlider({
		type: "double",
		min: 0,
		max: 100,
		from: 30,
		to: 70,
		from_fixed: false,
		to_fixed: true
	});

	$(".range_30").ionRangeSlider({
		type: "double",
		min: 0,
		max: 100,
		from: 30,
		to: 70,
		from_fixed: true,
		to_fixed: true
	});

	$(".range_31").ionRangeSlider({
		min: 0,
		max: 100,
		from: 30,
		from_min: 10,
		grid: true,
		from_max: 50
	});

	$(".range_32").ionRangeSlider({
		min: 0,
		max: 100,
		from: 30,
		from_min: 10,
		from_max: 50,
		grid: true,
		from_shadow: true
	});

	$(".range_33").ionRangeSlider({
		type: "double",
		min: 0,
		max: 100,
		from: 20,
		from_min: 10,
		from_max: 30,
		from_shadow: true,
		to: 80,
		to_min: 70,
		to_max: 90,
		to_shadow: true,
		grid: true,
		grid_num: 10
	});

	$(".range_34").ionRangeSlider({
		min: 0,
		max: 100,
		from: 30,
		disable: true
	});

	$(".range_35").ionRangeSlider({
		type: "double",
		min: 0,
		max: 100,
		from: 30,
		to: 70,
		keyboard: true
	});

	$(".range_36").ionRangeSlider({
		min: +moment().subtract(1, "years").format("X"),
		max: +moment().format("X"),
		from: +moment().subtract(6, "months").format("X"),
		prettify: function (num) {
			return moment(num, "X").format("LL");
		}
	});

	$(".range_37").ionRangeSlider({
		min: +moment().subtract(12, "hours").format("X"),
		max: +moment().format("X"),
		from: +moment().subtract(6, "hours").format("X"),
		prettify: function (num) {
			return moment(num, "X").format("MMM Do, hh:mm A");
		}
	});

	$(".range_38").ionRangeSlider({
		min: +moment().subtract(12, "hours").format("X"),
		max: +moment().format("X"),
		from: +moment().subtract(6, "hours").format("X"),
		grid: true,
		force_edges: true,
		prettify: function (num) {
			var m = moment(num, "X").locale("ru");
			return m.format("Do MMMM, HH:mm");
		}
	});

	$(".range_39").ionRangeSlider({
		min: +moment().subtract(12, "hours").format("X"),
		max: +moment().format("X"),
		from: +moment().subtract(6, "hours").format("X"),
		grid: true,
		force_edges: true,
		prettify: function (num) {
			var m = moment(num, "X").locale("ja");
			return m.format("Do MMMM, LT");
		}
	});

	$(".range_40").ionRangeSlider({
		type: "double",
		min: 0,
		max: 100,
		from: 30,
		to: 70,
		min_interval: 20
	});

	$(".range_41").ionRangeSlider({
		type: "double",
		min: 0,
		max: 100,
		from: 30,
		to: 70,
		max_interval: 50
	});

	$(".range_42").ionRangeSlider({
		type: "double",
		min: 0,
		max: 100,
		from: 30,
		to: 70,
		drag_interval: true
	});

});

</script>


<script>

		var tpj = jQuery;

		var revapi202;
		tpj(document).ready(function() {
			if (tpj("#rev_slider_579_1").revolution == undefined) {
				revslider_showDoubleJqueryError("#rev_slider_579_1");
			} else {
				revapi202 = tpj("#rev_slider_579_1").show().revolution({
					sliderType: "standard",
					jsFileLocation: "include/rs-plugin/js/",
					sliderLayout: "fullscreen",
					dottedOverlay: "none",
					delay: 9000,
					responsiveLevels: [1140, 1024, 778, 480],
					visibilityLevels: [1140, 1024, 778, 480],
					gridwidth: [1140, 1024, 778, 480],
					gridheight: [728, 768, 960, 720],
					lazyType: "none",
					shadow: 0,
					spinner: "off",
					stopLoop: "on",
					stopAfterLoops: 0,
					stopAtSlide: 1,
					shuffle: "off",
					autoHeight: "off",
					fullScreenAutoWidth: "off",
					fullScreenAlignForce: "off",
					fullScreenOffsetContainer: "",
					fullScreenOffset: "",
					disableProgressBar: "on",
					hideThumbsOnMobile: "off",
					hideSliderAtLimit: 0,
					hideCaptionAtLimit: 0,
					hideAllCaptionAtLilmit: 0,
					debugMode: false,
					fallbacks: {
						simplifyAll:"off",
						disableFocusListener:false,
					},
					parallax: {
						type:"mouse",
						origo:"slidercenter",
						speed:300,
						levels:[2,4,6,8,10,12,14,16,18,20,22,24,49,50,51,55],
					},
					navigation: {
						keyboardNavigation:"off",
						keyboard_direction: "horizontal",
						mouseScrollNavigation:"off",
						onHoverStop:"off",
						touch:{
							touchenabled:"on",
							swipe_threshold: 75,
							swipe_min_touches: 1,
							swipe_direction: "horizontal",
							drag_block_vertical: false
						},
						arrows: {
							style: "hermes",
							enable: true,
							hide_onmobile: false,
							hide_onleave: false,
							tmp: '<div class="tp-arr-allwrapper">	<div class="tp-arr-imgholder"></div>	<div class="tp-arr-titleholder"></div>	</div>',
							left: {
								h_align: "left",
								v_align: "center",
								h_offset: 10,
								v_offset: 0
							},
							right: {
								h_align: "right",
								v_align: "center",
								h_offset: 10,
								v_offset: 0
							}
						}
					}
				});
				revapi202.bind("revolution.slide.onloaded",function (e) {
					setTimeout( function(){ SEMICOLON.slider.sliderParallaxDimensions(); }, 200 );
				});

				revapi202.bind("revolution.slide.onchange",function (e,data) {
					SEMICOLON.slider.revolutionSliderMenu();
				});
			}
		}); /*ready*/

</script>