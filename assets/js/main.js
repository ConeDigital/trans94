jQuery(document).ready( function($) {


    //Show description on page link click
    $('.cd-page-left-item h3').on('click', function() {
        $('.cd-page-left-item').removeClass('cd-active-page-item');
        $('.cd-page-item-description').fadeOut('fast');
        $(this).parent('.cd-page-left-item').addClass('cd-active-page-item');
        $(this).siblings('.cd-page-item-description').fadeIn('fast');
    });

});
