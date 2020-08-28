(function ($) {
  "use strict";
  

  $(document).ready(function() {
    $('select').niceSelect();
  });

  // menu fixed js code
  $(window).scroll(function () {
    var window_top = $(window).scrollTop() + 1;
    if (window_top > 50) {
      $('.main_menu').addClass('menu_fixed animated fadeInDown');
    } else {
      $('.main_menu').removeClass('menu_fixed animated fadeInDown');
    }
  });
 

 $('.img_gallery').magnificPopup({
  type: 'image',
  gallery:{
    enabled:true
  }
});

$('.grid').masonry({
  itemSelector: '.grid-item',
  columnWidth: '.grid-sizer',
});

$('.single_service_part').hover(
  function(){$(this).addClass('active')},
  function(){$(this).removeClass('active')}
)

// $('.single_service_part').hover(function(){
//   $('.single_service_text').removeClass('active');
//   $('.single_service_text').addClass('active');
// });



var review = $('.client_review_part');
  if (review.length) {
    review.owlCarousel({
      items: 2,
      loop: true,
      dots: true,
      autoplay: true,
      autoplayHoverPause: true,
      autoplayTimeout: 5000,
      nav: false,
      margin: 20,
      responsive:{
        0:{
            items:1,
            dots: false
        },
        600:{
            items:2,
        }
    }
    });
  }

  /*-------------------------------------
  Instagram Photos
  -------------------------------------*/
  function cp_instagram_photos() {
    $('.cp-instagram-photos').each(function(){
        $.instagramFeed({
            'username': $(this).data('username'),
            'container': $(this),
            'display_profile': false,
            'display_biography': false,
            'items': $(this).data('items'),
            'margin': 0
        });
        console.log( $(this) );
    });

  }
  cp_instagram_photos();

  // function getAjaxSubmitUrl() {
  //   var url = $ ("#mc_embed_signup"). attr ("action");
  //   if (typeof url == 'undefined') {
  //     url = "https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&id=92a4423d01";
  //   }
  //   url = url.replace ("/ post? u =", "/ post-json? u =");
  //   url += "& c =?";
  //   return url;
  // }
  // getAjaxSubmitUrl();


}(jQuery));