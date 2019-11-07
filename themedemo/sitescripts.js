
$(document).ready(function(){

    $(".box_tagss > a").addClass('bg-tags');

});
    /*----------------------- PRIMARY MENU ---------------*/


    $(document).ready(function(){
        $('.navbar-nav > .menu-item-home > .nav-link').addClass('nhomd-home');

                // $('.navbar-nav > .menu-item ').each(function(){

                //     if( !$(this).hasClass('menu-item-home') && !$(this).hasClass('menu-item-object-page'))
                //     {
                //     $(this).addClass('product-category');
                //     }
                    
                // });
                // $(".navbar-nav > .product-category > .nav-link").addClass('get-category');
         
       
      });



   

  

/*--------------------------------- ADD JS ------------------------*/
$(document).ready(function () {
   


       $('.nav-item').click(function() {
            var _this = $(this);
            _this.children(".dropdown-menu").slideToggle();
           
            $('.nav-item').not(_this).children('.dropdown-menu').slideUp();
          
        });

         
        $('.navbar .respon').click(function() {
            $(".navbar-nav").slideToggle();
        });
   

        $(window).resize(function(){

            var width = $(window).width();

            if (width > 813 ){

                $(".navbar-nav").css({"display": "flex", "flex-direction": "row"});

            }
            else
            {
                $(".navbar-nav").css({"display": "flex", "flex-direction": "column"});
              
            }

        });
});
/*---------------------------- ACTIVE ARROW -------------------------*/

$(document).ready(function () {
var arrow = document.getElementsByClassName("nav-item");
for (var i = 0; i < arrow.length; i++) {
    // debugger;
    arrow[i].addEventListener("click", function() {
        // debugger;
  var current = document.getElementsByClassName("current-menu-item");
//   debugger;
  current[0].className = current[0].className.replace(" current-menu-item", "");
  this.className += " current-menu-item";
//   debugger;
  });
}


}); 



$(document).ready(function () {
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,    
            navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
            }
        });
});


/*----------------------------------------------------*/



$(document).ready(function(){

    $('.navbar-nav > .menu-item-home > .nav-link').addClass('nhomk-home');

            $('.navbar-nav > .menu-item ').each(function(){

                if( $(this).hasClass('menu-item-has-children'))
                {
                $(this).addClass('li-icon');
                }
                
            });
       

/*-------------------------- THÊM CLASS CHO MENU AJAX -------------------------*/
          
            // xnav = document.querySelectorAll(".nav-link");

            // for (i = 0; i < xnav.length; i++) {
                                        
            //     if(!xnav[i].hasClass('nhomk-home') && ! !xnav[i].hasClass('dropdown-toggle') )
            //     xnav[i].classList.add('mytest');
            // }


            $('.nav-link').each(function(){

                if( !$(this).hasClass('nhomk-home') && !$(this).hasClass('dropdown-toggle') )
                {
                $(this).addClass('getUrl');
                }
                
            });
            $('.dropdown-item').each(function(){

                
                $(this).addClass('getUrl');
                
                
            });

/*------------------------------------- THAY ĐỔI MÀU HEADER ----------------------------------*/

  document.getElementById('color-picker-bg').addEventListener('input',myheader); 

                function myheader()
                {
                

                    var xnav, i;
                    xnav = document.querySelectorAll(".nav-link");
                            var colorHeader = document.getElementById('color-picker-bg').value;
                                        for (i = 0; i < xnav.length; i++) {
                                        
                                            xnav[i].style.color =  colorHeader;
                                        }
                
                }
  });


$(document).on("change" , "#color-picker-primary" , function(){
    
    document.getElementById('wrap_header').style.background = $(this).val();
});

$(document).on("change" , "#color-picker-menu" , function(){
    
    document.getElementById('bg-nav').style.background = $(this).val();
});


/*------------------------------------- MOUDLE 12 ----------------------------------*/
$(document).ready(function () {
    $('.hidecart-icon').click(function(){
       $(this).parent().toggleClass('close-icon');
       $(this).toggleClass('close-icon');
    })
});

