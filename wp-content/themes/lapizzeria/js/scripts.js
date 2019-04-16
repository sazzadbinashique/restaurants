$ = jQuery.noConflict();

$(document).ready(function(){
    // menu button
    $('.mobile-menu a').on('click', function(){
        $('nav.site-nav').toggle('slow');
    });

    // show the mobile menu
    var breakpoint = 768; 
    $(window).resize(function(){
        boxAdjustment();
        if($(document).width()>= breakpoint){
            $('nav.site-nav').show();
        }else{
            $('nav.site-nav').hide();
        }
    });

  

    boxAdjustment();


    jQuery('.wp-block-gallery a').each(function(){
        jQuery(this).attr({'data-fluidbox': ''});
    });

    if(jQuery('[data-fluidbox]').length>0){
        jQuery('[data-fluidbox]').fluidbox();
    }

}); 

// adapt the height of the images to the div elements 

function boxAdjustment(){
    var images = $('.box-image');
    if(images.length>0){
     var imageHeight = images[0].height;
     var boxes = $('.content-box');
     $(boxes).each(function(i, element){
         $(element).css({'height': imageHeight+'px' });
     });   

    }
}