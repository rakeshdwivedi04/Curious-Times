$(document).ready(function() {


	jQuery('#demo2, #demo3').skdslider({'delay':5000, 'animationSpeed': 1000,'showNextPrev':true,'showPlayButton':false,'autoSlide':false,'animationType':'sliding'});
			
			
			jQuery('#responsive').change(function(){
			  $('#responsive_wrapper').width(jQuery(this).val());

              });

        

        });


$(document).ready(function($){

			$(".accordion_example1").smk_Accordion();

		});



$(document).ready(function () {
$(".loginic").click(function(e){
	 	$(".logindiv").toggle();
	 	$(".signupdiv").hide();
		e.preventDefault();
		e.stopPropagation();
	});

$(".signup").click(function(e){
	 	$(".signupdiv").toggle();
	 	$(".logindiv").hide();
		e.preventDefault();
		e.stopPropagation();
	});

});


$(document).ready(function () {
$('#horizontalTab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion           
width: 'auto', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
activate: function(event) { // Callback function if tab is switched
var $tab = $(this);
var $info = $('#tabInfo');
var $name = $('span', $info);
$name.text($tab.text());
$info.show();
}
});

});

$(document).ready(function() {
			/*
			*   Examples - images
		
			/*
			*   Examples - various
			*/


			$("#various1, #various2, #various3, #various4, #various5, #various6, #various7, #various8, #various8, #various9, #various10, #various11, #various12, #various13, #various14, #various15, #various16, #various17, #various18, #various19").fancybox({
				'width'				: '75%',
				'height'			: '75%',
				'autoScale'			: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'type'				: 'iframe'
			});

			
		});


$(function(){
	$(".testimonial").click(function(e){
	 	$(".side_testimonial").toggle();
		e.preventDefault();
		e.stopPropagation();
	});
	
	$(".close").click(function(e){
	 	$(".side_testimonial").hide();
		e.preventDefault();
		e.stopPropagation();
	});
	
	$(".testimonial1").click(function(e){
	 	$(".side_testimonial1").toggle();
		e.preventDefault();
		e.stopPropagation();
	});
	
	$(".close1").click(function(e){
	 	$(".side_testimonial1").hide();
		e.preventDefault();
		e.stopPropagation();
	});
	
	$(".menu_icon").click(function(e){
	 	$(nav).toggle();
		e.preventDefault();
		e.stopPropagation();
	});

	
	
	
})

			
$(document).ready(function(){
    $('.customer-logos, .al-sp.kn').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 1500,
        arrows: true,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 3
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 2
            }
        }]
    });

     $('.al-sp-kn').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 1
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 1
            }
        }]
    });


});


