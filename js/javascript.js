jQuery(window).scroll(function() {
let height = jQuery(window).scrollTop();
if(height > 100){
jQuery('.to-top').addClass('to-top-fixed');
} else{
jQuery('.to-top').removeClass('to-top-fixed');
}
});
