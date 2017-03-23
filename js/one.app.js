/*
* Template Name: Unify - Responsive Bootstrap Template
* Version: 1.9.2
* Author: @htmlstream
* Website: http://htmlstream.com
*/

// Owl Testimonials v1
jQuery(".owl-ts-v1").owlCarousel({
    slideSpeed : 600,
    singleItem : true,
    navigation : true,
    navigationText : ["",""]
});

// Owl Clients v2
jQuery(".owl-clients-v2").owlCarousel({
    items : 5,
    autoPlay : 10000,
    itemsDesktop : [1000,5],
    itemsDesktopSmall : [900,4],
    itemsTablet : [600,3],
    itemsMobile : [479,1]
});

// Owl Twitter v1
jQuery(".owl-twitter-v1").owlCarousel({
    singleItem : true,
    slideSpeed : 1000,
    autoPlay : 10000
});

// Header

// jQuery to collapse the navbar on scroll
if (jQuery('.navbar').offset().top > 150) {
    jQuery('.navbar-fixed-top').addClass('top-nav-collapse');
}
jQuery(window).scroll(function() {
    if (jQuery('.navbar').offset().top > 150) {
        jQuery('.navbar-fixed-top').addClass('top-nav-collapse');
    } else {
        jQuery('.navbar-fixed-top').removeClass('top-nav-collapse');
    }
});

var $offset = 0;
$offset = jQuery(".navbar-fixed-top").height()+12;
// jQuery for page scrolling feature - requires jQuery Easing plugin
jQuery('.page-scroll a').bind('click', function(event) {
    var $position = jQuery(jQuery(this).attr('href')).offset().top;
    jQuery('html, body').stop().animate({
        scrollTop: $position - $offset
    }, 600);
    event.preventDefault();
});

var $scrollspy = jQuery('body').scrollspy({target: '.navbar-fixed-top', offset: $offset+2});

// Collapse Navbar When It's Clickicked
jQuery(window).scroll(function() {
    jQuery('.navbar-collapse.in').collapse('hide');
});

// Parallax BG
jQuery(window).load(function() {
    jQuery('.parallaxBg').parallax("50%", 0.4);
    jQuery('.parallaxBg1').parallax("50%", 0.2);
});

jQuery(document).ready(function() {
    jQuery('.fullscreenbanner').revolution({
        delay: 15000,
        startwidth: 1170,
        startheight: 500,
        hideThumbs: 10,
        fullWidth: "on",
        fullScreen: "on",
        hideCaptionAtLimit: "",
        dottedOverlay: "twoxtwo",
        navigationStyle: "preview4",
        fullScreenOffsetContainer: ""
    });
});
