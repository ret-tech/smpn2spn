<!DOCTYPE html>
<!--
Template Name: Pleeness
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
<head>
<title>SMPN 7 Sungai Penuh</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<link href="<?php echo base_url(); ?>assets/template/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/template/css/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/template/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/template/css/lightbox.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/template/css/main.css" rel="stylesheet">
  <link id="<?php echo base_url(); ?>assets/template/css-preset" href="css/presets/preset1.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/template/css/responsive.css" rel="stylesheet">

<link href="<?php echo base_url(); ?>assets/template/owl-carousel/owl.carousel.css" rel="stylesheet">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/css/zerogrid.css">

  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favico.png">

<link href="<?php echo base_url(); ?>assets/template/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<!-- ######################################SLIDER########################################################## -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/slide/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/slide/css/style.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/slide/css/custom.css" />
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/slide/js/modernizr.custom.79639.js"></script>
		<noscript>
			<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/slide/css/styleNoJS.css" />
		</noscript>
</head>
<body id="top">
<div class="containers demo-2">
<?php echo $header; ?>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<?php echo $side_menu; ?>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<?php echo $content; ?>

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<?php echo $footer; ?>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/template/js/jquery.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/template/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/template/js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/template/js/wow.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/template/js/mousescroll.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/template/js/smoothscroll.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/template/js/jquery.countTo.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/template/js/lightbox.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/template/js/main.js"></script>
<script src="<?php echo base_url(); ?>assets/template/layout/scripts/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/template/layout/scripts/jquery.backtotop.js"></script>
<script src="<?php echo base_url(); ?>assets/template/layout/scripts/jquery.mobilemenu.js"></script>
<!-- IE9 Placeholder Support -->
<script src="<?php echo base_url(); ?>assets/template/layout/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->
<script src="<?php echo base_url(); ?>assets/template/owl-carousel/owl.carousel.js"></script>
    <script>
    $(document).ready(function() {
      $("#owl-brand").owlCarousel({
        autoPlay: 3000,
        items : 6,
		itemsDesktop : [1199,4],
        itemsDesktopSmall : [979,2],
		navigation: true,
		navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>', '<i class="fa fa-chevron-right fa-5x"></i>'],
		pagination: false
      });
    });
    </script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/slide/js/jquery.ba-cond.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/slide/js/jquery.slitslider.js"></script>
		<script type="text/javascript">
			$(function() {

				var Page = (function() {

					var $nav = $( '#nav-dots > span' ),
						slitslider = $( '#slider' ).slitslider( {
							onBeforeChange : function( slide, pos ) {

								$nav.removeClass( 'nav-dot-current' );
								$nav.eq( pos ).addClass( 'nav-dot-current' );

							}
						} ),

						init = function() {

							initEvents();

						},
						initEvents = function() {

							$nav.each( function( i ) {

								$( this ).on( 'click', function( event ) {

									var $dot = $( this );

									if( !slitslider.isActive() ) {

										$nav.removeClass( 'nav-dot-current' );
										$dot.addClass( 'nav-dot-current' );

									}

									slitslider.jump( i + 1 );
									return false;

								} );

							} );

						};

						return { init : init };

				})();

				Page.init();

				/**
				 * Notes:
				 *
				 * example how to add items:
				 */

				/*

				var $items  = $('<div class="sl-slide sl-slide-color-2" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1"><div class="sl-slide-inner bg-1"><div class="sl-deco" data-icon="t"></div><h2>some text</h2><blockquote><p>bla bla</p><cite>Margi Clarke</cite></blockquote></div></div>');

				// call the plugin's add method
				ss.add($items);

				*/

			});
		</script>
</body>
</html>
