// #sidebar
    $(window).load(function(){
      $("[data-toggle]").click(function() {
        var toggle_el = $(this).data("toggle");
        $(toggle_el).toggleClass("open-sidebar");
		$(this).toggleClass('s_toggle_open');
      });
    }); 

// head_search
$(function() {
   var pull   = $('.search_pull');
    menu   = $('.wrap_head_search');
    menuHeight = menu.height();
   overlay_login = $('.overlay_search');
   $(pull).on('click', function(e) {
    e.preventDefault();
    menu.fadeToggle();
	 $(this).toggleClass('search_open');
	 $(this).parents(".wraper").toggleClass('wraper_search_open');
   });
   $(overlay_login).on('click', function(e) {
	$(pull).toggleClass('search_open');
	$(this).parents(".wraper").toggleClass('wraper_search_open');
    e.preventDefault();
    menu.fadeToggle();
	});
  });
  
	
// nav
$(document).ready(function() {
		$(".nav_categoty .open_nav").click(function() {
		if($(this).next("ul").is(":visible")){
			$(this).removeClass('is_open_nav');
		$(this).next("ul").slideUp(400);
		} else {
			$('.nav_categoty .open_nav').removeClass('is_open_nav');
			$(this).addClass('is_open_nav');
		$(".nav_categoty .hidden_nav").slideUp(400);
		$(this).next("ul").slideToggle(400);
    }
	
    });
 });
 
// clients_slider
var swiper = new Swiper('.clients_slider', {
        slidesPerView: 8,
        spaceBetween: 0,
		breakpoints: {
          1400: {
				slidesPerView: 7,
          },
		  1100: {
				slidesPerView: 6,
          },
		  900: {
				slidesPerView: 5,
          },
		  750: {
			  	slidesPerView: 4,
          },
		  600: {
			  	slidesPerView: 3,
          },
		  400: {
			  	slidesPerView: 2,
          },
        }
});

// works_slider
var swiper = new Swiper('.works_slider', {
        slidesPerView: 7,
        spaceBetween: 20,
		breakpoints: {
          1720: {
				slidesPerView: 6,
          },
		  1480: {
				slidesPerView: 5,
          },
		  1230: {
				slidesPerView: 4,
          },
		  970: {
				slidesPerView: 3,
          },
		  725: {
				slidesPerView: 2,
          },
		  480: {
				slidesPerView: 1,
          },
        }
});

// scroll
$(document).ready(function(){
 
 $(".wraper").on("click","a.scroll", function (event) {
  event.preventDefault();
  var id  = $(this).attr('href'),
   top = $(id).offset().top;
  $('body,html').animate({scrollTop: top}, 1000);
 });
});

// typical_select
$(document).ready(function() {
	$('.typical_select').fancySelect();
});

// team_slider
var swiper = new Swiper('.team_slider', {
        slidesPerView: 3,
        spaceBetween: 40,
		nextButton: '.team_slider_next',
        prevButton: '.team_slider_prev',
		loop: true,
		breakpoints: {
          1036: {
				spaceBetween: 20,
          },
		  936: {
			  	slidesPerView: 2,
				spaceBetween: 20,
          },
		  636: {
			  	slidesPerView: 1,
				spaceBetween: 20,
          },
		  375: {
			  	nextButton: null,
            	prevButton: null,
				slidesPerView: 1,
				spaceBetween: 20,
          }
        }
});

// team
$(document).ready(function(){
  $('.team_btn').click(function(){
	$(this).parents('.team_hidden').find('.team_popup').fadeToggle(400);  
	$(this).parents('.team_hidden').find('.team_btn').toggleClass('team_btn_open');
   });
 });

// faq
$(document).ready(function() {
		$(".faq_category .faq_open").click(function() {
		if($(this).next("div").is(":visible")){
			$(this).removeClass('faq_is_open');
		$(this).next("div").slideUp(400);
		} else {
			$('.faq_category .faq_open').removeClass('faq_is_open');
			$(this).addClass('faq_is_open');
		$(".faq_category .faq_hidden").slideUp(400);
		$(this).next("div").slideToggle(400);
    }
	
    });
 });
 
 // scroll2
$(document).ready(function(){
 
 $(".wraper").on("click","a.scroll2", function (event) {
  event.preventDefault();
  var id  = $(this).attr('href'),
   top = $(id).offset().top;
  $('body,html').animate({scrollTop: top}, 1000);
 });
});

// service_tabs
$(function() {  
	  $('div.service_tabs').on('click', 'span:not(.current)', function() {  
		  $(this).addClass('current').siblings().removeClass('current')  
			  .parents('div.wrap_service_info').find('div.tabs_content').eq($(this).index()).fadeIn(400).siblings('div.tabs_content').hide();  
	  });
});

// ьфыл
 jQuery(function($){
      $('[type="tel"]').mask("+7(999) 999-99-99");
  });

$(document).ready(function(){

	$(".db-form1-submit").submit(function () {
		alert(1);
        var empty = true;
        $('.db-form1-submit  input[name="tel"]').each(function(o){
            if ($(this).val() == ""){empty = false;}
        });
        if (empty == false){
          alert("Заполните, пожалуйста, Ваш телефон");
        }else{
          $.ajax({
            type: 'POST',
            url: '/sendmessage.php',
            data: $('.db-form1-submit').serialize(),
            success: function(data) {
            }
          });
          $('.window').hide();
          // $('a[href="#thanks"]').trigger('click');
        }
        var empty = true;
        return false;
    });

});