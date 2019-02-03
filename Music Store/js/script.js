// Closes bootstrap navbar if clicked anywhere
$(function () {
  $(document).click(function (event) {
    $('.navbar-collapse').collapse('hide');
   });
});

// Some cool animations
document.getElementById('hamburger').onclick = function(e) {
  e.target.classList.toggle('open');
}

//On scroll change navbar background-color
$(document).ready(function(){       
   var scroll_start = 0;
   var startchange = $('.start');
   var offset = startchange.offset();
    if (startchange.length){
   $(document).scroll(function() { 
      scroll_start = $(this).scrollTop();
      if(scroll_start > offset.top) {
          $(".navbar-dark").css('background-color', 'rgba(0, 0, 0, 0.8)');
       } else {
          $('.navbar-dark').css('background-color', 'transparent');
       }
   });
    }
});

//Change navbar background when collapsed
$(".navbar").on("show.bs.collapse", function(e) {
	$(".navbar-dark").css("background-color", "rgba(0, 0, 0, 0.8)");
});

$(".navbar").on("hide.bs.collapse", function(e) {
	$(".navbar-dark").css("background-color", "transparent");
});

$('.navbar.navbar-collapse')
  .on('hide.bs.collapse', function () {
    $('.navbar .navbar-toggle').removeClass('active');
  })
  .on('show.bs.collapse', function () {
    $('.navbar .navbar-toggle').addClass('active');
});

// Hide elements on scroll
$(window).scroll(function(){
   $(".cover-text").css("opacity", 1 - $(window).scrollTop() / 250);
});

// Parallax
function parallaxEffect() {

  var $myWindow = $(window);
  var scrollTop = window.pageYOffset || document.documentElement.scrollTop;

  $myWindow.on('scroll resize', function() {
    scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  }); 

  $('.cover', '#inner-section').each(function (index, e) {
    var $contentObj = $(this);
    var fgOffset = parseInt($contentObj.offset().top);
    var yPos;
    var speed = ($contentObj.data('speed') || 1 );

    $myWindow.on('scroll resize', function (){
      yPos = fgOffset - scrollTop / speed; 

      $contentObj.css('top', yPos);
    });
  });

  $('[data-type="background"]').each(function(){
    var $backgroundObj = $(this);
    var bgOffset = parseInt($backgroundObj.offset().top);
    var yPos;
    var coords;
    var speed = ($backgroundObj.data('speed') || 0 );

    $myWindow.on('scroll resize', function() {
      yPos = - ((scrollTop - bgOffset) / speed); 
      coords = '50% '+ yPos + 'px';

      $backgroundObj.css({ backgroundPosition: coords });
    }); 
  }); 

  $myWindow.trigger('scroll');
};

parallaxEffect();

//jQuery filtering
$(document).ready(function(){
    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');  
        if(value == "all")
        {
            $('.filter').show('1000');
        }
        else
        {
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000'); 
        }
    }); 
    if ($(".filter-button").removeClass("active")) {
        $(this).removeClass("active");
    }
        $(this).addClass("active");
});