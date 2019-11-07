$(function(){
     $('.increment').click(function() {
        var valueElement = $('#'+$(this).siblings('input').attr('id'));

        if($(this).hasClass('qodef-quantity-plus')) 
        {
           valueElement.val(Math.max(parseInt(valueElement.val()) + 1));
        } 
        else if (valueElement.val() > 1) // Stops the value going into negatives
        {
           valueElement.val(Math.max(parseInt(valueElement.val()) - 1));
        } 

     return false;
    });

});
var galleryThumbs = new Swiper('.gallery-thumbs', {
      spaceBetween: 10,
      slidesPerView: 4,
      freeMode: true,
      loopedSlides: 5, //looped slides should be the same
      watchSlidesVisibility: true,
      watchSlidesProgress: true,
    });
    var galleryTop = new Swiper('.gallery-top', {
      spaceBetween: 10,
      loop:true,
      loopedSlides: 5, //looped slides should be the same
      
      thumbs: {
        swiper: galleryThumbs,
      },
    });
