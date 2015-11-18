/**
 * Author: Trang Huynh
 * Created date: 28/10/2015.
 */

( function( $ ) {
    // Init Skrollr
    var s = skrollr.init({
        render: function(data) {
            //Debugging - Log the current scroll position.
            //console.log(data.curTop);
        }
    });
    // Section Hotel rooms
    (jQuery)('#hotel-rooms >div.bcg').attr({

    });
    (jQuery)('#hotel-rooms >div >div >div.section_content').attr({

    });

    // Section Facilities
    (jQuery)('#facilities-services >div.bcg').attr({
        'data-center': 'background-position: 50% 0px;',
        'data-top-bottom': 'background-position: 50% -100px;'
    });
    (jQuery)('#facilities-services >div >div >div.section_content').attr({

    });

    // Section About us
    (jQuery)('#about-us >div.bcg').attr({
        //'data-center':"background-position: 0px 50%;",
        //'data-bottom-top':"background-position: 0px 40%;",
        //'data-top-bottom':"background-position: -40px 50%;"
    });
    (jQuery)('#about-us >div >div >div.section_content').attr({
        //'data-106-top':"opacity: 0",
        //'data-bottom':"opacity: 1; position: fixed; top: 206px; width: 100%; left: 0;",
        //'data--30p-top':"opacity: 1;",
        //'data--60p-top':"opacity: 0;",
        //'data-anchor-target':"#about-us"
    });
    (jQuery)('#about-us .builder-item-wrapper').append('<div class="clearfix"></div>');



} )( jQuery );

/* Change background color after scrolling */
(function(){
    var slider_h = ( jQuery )('.slider-outer-wrapper').height();
    var sticky_h = (jQuery)('#sticky_header').height();
    ( jQuery )(window).scroll(function() {
        var scroll = ( jQuery )(window).scrollTop();
        if( scroll > (slider_h-sticky_h) ){
            (jQuery)('#sticky_header > div > div').addClass('header_scroll');
            (jQuery)('#sticky_header').fadeIn();
        }
        else{
            (jQuery)('#sticky_header > div > div').removeClass('header_scroll');
            (jQuery)('#sticky_header').fadeOut();
        }
    });
}) ( jQuery );