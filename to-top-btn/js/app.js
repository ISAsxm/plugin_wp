// scroll to top only appear when srolling down 
jQuery(document).ready(function(e) 
{
    scrollShowBtn();
    jQuery('#to-top-btn').on('click', function()
    {
        jQuery('html, body').animate({scrollTop:0}, 'slow');
        return false;
    });
});

function scrollShowBtn() 
{
    jQuery(window).scroll(function()
    {
        if (jQuery(this).scrollTop() < 600) {
            jQuery('#to-top-btn').fadeOut();
        } else {
            jQuery('#to-top-btn').fadeIn();
        }
    });
};