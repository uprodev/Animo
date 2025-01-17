jQuery(document).ready(function ($) {

  //slider
  var swiperBanner = new Swiper(".banner-slider", {
    spaceBetween: 30,
    effect: "fade",
    pagination: {
      el: ".banner-pagination",
      clickable: true,
    },
  });

  //change slide
  swiperBanner.on('slideChange', function () {
    let item = swiperBanner.activeIndex + 1;
    if(item==1){
      $('.home-banner h1').removeClass();
      $('.home-banner h1').addClass('s1');
    }else if(item==2){
      $('.home-banner h1').removeClass();
      $('.home-banner h1').addClass('s2');
    }
    else if(item==3){
      $('.home-banner h1').removeClass();
      $('.home-banner h1').addClass('s3');
    }
  })

  //scroll to block
  $(document).on('click', '.scroll', function (e) {
    e.preventDefault();
    var id  = $(this).attr('href'),
      top = $(id).offset().top;
    $('body,html').animate({scrollTop: top}, 0);
  });

  //fix header
  if(window.innerWidth > 991){
    $(".top-line").sticky({
      topSpacing:0
    });
  };

  //sub-menu open/close - mob-menu
  $(document).on('click', '.menu-item-has-children>a', function (e){
    e.preventDefault();
    let item = $(this).closest('li').find('.sub-menu');
    $(this).toggleClass('is-open');
    if($(this).hasClass('is-open')){
      item.slideDown();
    }else{
      item.slideUp();
    }
  });

  /*mob menu*/
  $(document).on('click', '.open-menu', function (e) {
    e.preventDefault();
    $(this).toggleClass('is-active');

    if($(this).hasClass('is-active')){
      $.fancybox.open( $('#menu-responsive'), {
        touch:false,
        autoFocus:false,
      });
      setTimeout(function() {
        $('html').addClass('is-menu');
      }, 100);
    }else{
      $('html').removeClass('is-menu');
      $.fancybox.close();
    }
  });


  var swiperImg1 = new Swiper(".img-slider-1", {
    spaceBetween: 30,
    pagination: {
      el: ".img-pagination-1",
      clickable: true,
    },
  });

});